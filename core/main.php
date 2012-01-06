<?php
class Main {

	public $component_dir = 'components/';
	public $plugin_dir = 'plugins/';

	protected $components = array();
	protected $plugins = array();
	protected $currentPlugin;
	protected $activePage;
	
	protected $ajax = array();
	protected $hooks = array();
	protected $pages = array();
	protected $scripts = array();
	protected $stylesheets = array();
	
	protected $auth;
	protected $config;
	protected $componentsLoaded = array();
	protected $lang;

	public function Main() {
		session_start();
		
		include('auth.php');
		//include('config.php');
		$this->auth = new Auth($this);
		//$this->config = new Config($this);		

		$this->initComponents();
		$this->config = $this->loadComponent('Config');
		$this->lang = $this->loadComponent('Translation');

		$this->initPlugins();
		$this->initHooks();
	}
	
	/**
	 * Initialize components
	 *
	 */
	protected function initComponents() {
		$components = scandir($this->component_dir);
		
		foreach($components as $component) {
			if($component != '.' && $component != '..' && file_exists($this->component_dir . $component . '/' . $component . '.php')) {
				$this->components[] = $component;
			}
		}
	}
	
	/**
	 * Initialize hooks
	 *
	 */
	protected function initHooks() {
		foreach($this->hooks as $plugin => $hooks) {
			foreach($hooks as $hook) {
				If(!array_key_exists('block', $hook)) {
					$core = $this;
					$lang = $this->getLang();
					include($this->plugin_dir . $plugin . '/' . $hook['file']);
				}
			}
		}
	}
	
	/**
	 * Initialize plugins
	 *
	 */
	protected function initPlugins() {
		// Scan the plugins directory
		$plugins = scandir($this->plugin_dir);
		
		// Set the core handle for use in the plugins
		$core = $this;
		$lang = $this->getLang();
		
		foreach($plugins as $plugin) {
			// Loop trough the plugin folders
			if($plugin != '.' && $plugin != '..') {
				// Build the path to where the plugin initialization file should be
				$plugin_file = $this->plugin_dir . $plugin . '/init.php';
				
				// If the file exists, load the plugin
				if(file_exists($plugin_file)) {
					$this->plugins[$plugin] = $plugin_file;
					$this->currentPlugin = $plugin;
				include_once($plugin_file);
				}
			}
		}
		
		if(isset($_GET['ajax'])) {
			$ajax = $_GET['ajax'];
			foreach($this->ajax as $plugin => $calls) {
				foreach($calls as $call => $info) {
					if($ajax == $call) {
						if($info['admin'] === true && !$this->auth->isLogged())  return;
						$this->currentPlugin = $plugin;
						include($this->plugin_dir . $plugin . '/' . $info['file']);
						break;
					}
				}
			}
		} else if(isset($_GET['page'])) {
			$page = $_GET['page'];
			foreach($this->pages as $plugin => $pages) {
				foreach($pages as $pluginpage => $info) {
					if($pluginpage == $page) {
						if($info['admin'] === true && !$this->auth->isLogged()) {
							$this->activePage = 'login/login.php';
							$this->currentPlugin = $plugin;
						} else {
							$this->activePage = $plugin . '/' . $info['file'];
							$this->currentPlugin = $plugin;
						}
					}
				}
			}
		}
		
		if(!isset($this->activePage)) {
			$this->activePage = 'playerlist/' . $this->pages['playerlist']['playerlist']['file'];
			$this->currentPlugin = 'playerlist';
		}
	}
	
	public function getActivePage() {
		return $this->activePage;
	}
	
	public function getAuth() {
		return $this->auth;
	}
	
	public function getConfig() {
		return $this->config;
	}
	
	public function getCurrentPlugin() {
		return $this->currentPlugin;
	}
	
	public function getHooks() {
		return $this->hooks;
	}
	
	public function getLang() {
		return $this->lang->getDictionary();
	}
	
	public function getPages() {
		return $this->pages;
	}
	
	public function getPlugins() {
		return $this->plugins;
	}
	
	public function getScripts() {
		return $this->scripts;
	}
	
	public function getStylesheets() {
		return $this->stylesheets;
	}
	
	/**
	 * getStylesheet returns an url to a stylesheet for use within a plugin. It searches for a stylesheet in the
	 * active template folder and uses the default one in the plugin folder if no stylesheet was found. Multiple files can be given
	 * @param $name The name of the stylesheet, can be either with or without the .css suffix, default is the name of the active plugin
	 */
	public function getStylesheet($names = null) {
		// Check if the name is set, else set it to the current plugin
		if($names == null) $names = array($this->currentPlugin);
		if(is_string($names)) $names = array($names);
		
		$result = "";
		foreach($names as $name) {
			// Check if the .css suffix is added and add it now if it is not
			if(substr($name, -4) != '.css') $name .= '.css';
			// Get the path to the stylesheet file in the templates folder
			$css_file = 'templates/' . $this->getConfig()->getTemplate() . '/css/' . $name;
			// If the file does not exists, use the file from the plugin folder
			if(!file_exists($css_file)) $css_file = 'plugins/' . $this->currentPlugin . '/css/' . $name;
			// Add the link tag
			$css_file = '<link rel="stylesheet" type="text/css" href="' . $css_file . '" />';
			
			if(strlen($result) > 0) $result .= "\n";
			$result .= $css_file;
		}
		// Return the result
		return $result;
	}
	
	public function getURL($modifiers) {
		$get = array();
		
		foreach($_GET as $key => $value) {
			if(array_key_exists($key, $modifiers)) {
				$get[$key] = $modifiers[$key];
				unset($modifiers[$key]);
			} else {
				$get[$key] = $value;
			}
		}
		
		$get = array_merge($get, $modifiers);
		
		$result = "";
		foreach($get as $key => $value) {
			$result .= (strlen($result) == 0) ? "?" : "&amp;";
			$result .= $key . '=' . $value;
		}
		return $result;
	}
	
	public function loadComponent($component) {
		$file = strtolower($component);
		if(array_key_exists($file, $this->componentsLoaded)) return $this->componentsLoaded[$file];
		
		foreach($this->components as $file) {
			if($file == strtolower($component)) {
				include_once($this->component_dir . $file . '/' . $file . '.php');
				$loadedComponent = new $component($this);
				$this->componentsLoaded[$file] = $loadedComponent;
				return $loadedComponent;
			}
		}
	}
	
	public function registerAjax($call, $info) {
		if(!is_array($info)) $info = array('file' => $info);
		if(!array_key_exists('name', $info)) $info['name'] = strtolower($call);
		if(!array_key_exists('admin', $info)) $info['admin'] = true;
		$this->ajax[$this->currentPlugin][$call] = $info;
	}
	
	public function registerHook($info) {
		if(!is_array($info)) $info = array('file' => $info);
		$this->hooks[$this->currentPlugin][] = $info;
	}
	
	public function registerPage($page, $info) {
		if(!is_array($info)) $info = array('file' => $info, 'name' => strtolower($page));
		if(!array_key_exists('name', $info)) $info['name'] = strtolower($page);
		if(!array_key_exists('admin', $info)) $info['admin'] = true;
		$this->pages[$this->currentPlugin][$page] = $info;
	}
	
	public function registerScript($file) {
		if(!in_array($file, $this->scripts)) {
			$this->scripts[] = $file;
		}
	}
	
	public function registerStylesheet($file) {
		if(!in_array($file, $this->stylesheets)) {
			$this->stylesheets[] = $file;
		}
	}

}
?>
