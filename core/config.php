<?php
class Config {

	protected $config_path = 'config/server_settings.txt';
	protected $config_servers = 'config/servers/';
	protected $filepaths_path = 'config/filepaths.txt';
	protected $comment_char = '#';
	protected $split_char = ' ';

	protected $paths = array();

	protected $config;
	protected $core;
	protected $config_dir = 'config';
	protected $server_prefix = 'server_settings';
	protected $server_suffix = '.txt';
	protected $servers = array();
	
	public function Config($core) {
		$this->core = $core;
		$this->initConfig();
	}
	
	protected function initConfig() {
		$this->config = $this->core->loadComponent('Config');

		if(file_exists($this->filepaths_path)) {
			$filepaths = file($this->filepaths_path);
			
			foreach($filepaths as $filepath => $folder) {
				$this->paths[$filepath] = $folder;
			}
		}

		$this->loadServers();
		$this->setupServer();
		$this->setupTemplate();
	}

	protected function setupServer() {
		if(isset($_COOKIE['server']) && in_array($_COOKIE['server'], $this->servers)) $this->config->setActiveServer($_COOKIE['server']);
	}
	
	protected function setupTemplate() {
		$templates = scandir('templates');

		if(isset($_COOKIE['template']) && in_array($_COOKIE['template'], $templates)) $this->config->setTemplate($_COOKIE['template']);
		if(isset($_GET['template'])) {
			$template = $_GET['template'];
			if(in_array($template, $templates)) {
				setcookie('template', $template, time() + 60 * 60 * 24 * 30);
				$this->setTemplate($template);
			}
		}
	}

	protected function loadServers() {
		$prefixlength = strlen($this->server_prefix);
		$servers = scandir('config');
		foreach($servers as $server) {
			if(substr($server, 0, $prefixlength) == $this->server_prefix) $this->servers[] = substr($server, 0, strrpos($server, $this->server_suffix));
		}
	}	

	public function getPath($file) {
		return $this->paths[$file] . '/' . $file;
	}

}
?>
