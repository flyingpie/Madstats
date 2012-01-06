<?php
class Config {

	protected $server_prefix = 'server_settings_';
	protected $server_extension = '.txt';
	protected $servers = array();

	protected $core;
	protected $configurations = array();
	protected $activeConfiguration;

	public function Config($core) {
		$this->core = $core;
		$this->loadServerConfigurations();
		$this->readConfiguration($this->getSelectedServer());
		$this->setupTemplate();
	}

	public function readConfiguration($name) {
		if(in_array($name, $this->servers)) {
			$filename = $this->getFilename($name);
			$parameters = $this->getParameterArray();
			$file = file('config/' . $filename);	
			foreach($file as $line) {
				$this->parseParameter($line, $parameters);
			}

			$this->configurations[$name] = $parameters;
			$this->activeConfiguration = $name;
		}
	}

	public function getActiveServer() {
		return $this->activeConfiguration;
	}
	
	public function getApiPassword() {
		return $this->getParameter('api_password');
	}
	
	public function getCacheTime() {
		return $this->getParameter('cache_time');
	}

	public function getConnectionMethod() {
		return $this->getParameter('connection_method');
	}

	public function getFtpHost() {
		return $this->getParameter('ftp_host');
	}

	public function getFtpPassword() {
		return $this->getParameter('ftp_password');
	}

	public function getFtpPort() {
		return $this->getParameter('ftp_port');
	}

	public function getFtpUsername() {
		return $this->getParameter('ftp_username');
	}

	public function getPath($filename) {
		$path = $this->configurations[$this->activeConfiguration]['filepaths'][$filename];
		$extension_filename = substr($filename, strrpos('.', $filename));
		if(substr($path, -count($extension_filename)) != $extension_filename) $path .= '/' . $filename;
		return $path;
	}

	public function getRconPassword() {
		$dm = $this->core->loadComponent('DataManager');
		$server_cfg = $dm->getConfigFile('server.cfg');
		
		if(array_key_exists('rcon_password', $server_cfg)) return $server_cfg['rcon_password'];
		return '';
	}
	
	public function getServers() {
		return $this->servers;
	}
	
	public function getSrcdsGame() {
		return $this->getParameter('srcds_game');
	}

	public function getSrcdsHost() {
		return $this->getParameter('srcds_host');
	}

	public function getSrcdsPath() {
		return $this->getParameter('srcds_path');
	}

	public function getSrcdsPort() {
		return $this->getParameter('srcds_port');
	}

	public function getTemplate() {
		return $this->getParameter('template');
	}

	public function getLanguage() {
		return $this->getParameter('language');
	}
	
	public function setTemplate($template) {
		$this->setParameter('template', $template);
	}

	private function getSelectedServer() {
		if(isset($_GET['server']) && is_numeric($_GET['server']) && in_array($_GET['server'], $this->servers)) {
			setcookie('server', $_GET['server'], time() * 60 * 60 * 24 * 30);
			return $_GET['server'];
		} else if(isset($_COOKIE['server']) && is_numeric($_COOKIE['server']) && in_array($_COOKIE['server'], $this->servers)) {
			return $_COOKIE['server'];
		}
		return $this->servers[0];
	}
	
	private function loadServerConfigurations() {
		$servers = scandir('config');
		foreach($servers as $server) {
			if(substr($server, 0, 1) == '.') continue;
			$servername = $this->getServername($server);
			if($servername !== false) $this->servers[] = $servername;
		}
	}

	private function getParameter($parameter, $configuration = null) {
		if($configuration == null) $configuration = $this->activeConfiguration;
		if(array_key_exists($parameter, $this->configurations[$configuration]['server_settings'])) {
			return $this->configurations[$configuration]['server_settings'][$parameter];
		}
		if(array_key_exists($parameter, $this->configurations[$configuration]['filepaths'])) {
			return $this->configurations[$configuration]['filepaths'][$parameter];
		}
	}

	private function setParameter($parameter, $value, $configuration = null) {
		if($configuration == null) $configuration = $this->activeConfiguration;
		if(array_key_exists($parameter, $this->configurations[$configuration]['server_settings'])) {
			$this->configurations[$configuration]['server_settings'][$parameter] = $value;
		}
		if(array_key_exists($parameter, $this->configurations[$configuration]['filepaths'])) {
			$this->configurations[$configuration]['filepaths'][$parameter] = $value;
		}
	}

	private function getParameterArray() {
		return array(
			'server_settings' => array(
				'srcds_host' => '127.0.0.1',
				'srcds_port' => '27015',
				'srcds_game' => 'cstrike',
				'srcds_path' => '/orangebox/cstrike',

				'connection_method' => 'local',

				'ftp_host' => '127.0.0.1',
				'ftp_port' => '21',
				'ftp_username' => 'srcds',
				'ftp_password' => 'srcds',

				'template' => 'steam',
				'cache_time' => 30,
				'api_password' => 'apipassword',
				'language' => 'english',
			),
			'filepaths' => array(
				'server.cfg' => 'cfg',
				'mani_server.cfg' => 'cfg',
				'bots.cfg' => 'cfg',
				'mapcycle.txt' => '',
				'motd.txt' => '',
				'clients.txt' => 'cfg/mani_admin_plugin',

				'adverts.txt' => 'cfg/mani_admin_plugin',
				'chattriggers.txt' => 'cfg/mani_admin_plugin',
				'commandlist.txt' => 'cfg/mani_admin_plugin',
				'mutelist.txt' => 'cfg/mani_admin_plugin',
				'webshortcutlist.txt' => 'cfg/mani_admin_plugin',
				'wordfilter.txt' => 'cfg/mani_admin_plugin',

				'autokick_ip.txt' => 'cfg/mani_admin_plugin',
				'autokick_name.txt' => 'cfg/mani_admin_plugin',
				'autokick_pname.txt' => 'cfg/mani_admin_plugin',
				'autokick_steam.txt' => 'cfg/mani_admin_plugin',
				'banlist.txt' => 'cfg/mani_admin_plugin',
				'pingimmunity.txt' => 'cfg/mani_admin_plugin',

				'crontablist.txt' => 'cfg/mani_admin_plugin',
				'cexeclist_all.txt' => 'cfg/mani_admin_plugin',
				'cexeclist_ct.txt' => 'cfg/mani_admin_plugin',
				'cexeclist_t.txt' => 'cfg/mani_admin_plugin',
				'cexeclist_player.txt' => 'cfg/mani_admin_plugin',
				'cexeclist_spec.txt' => 'cfg/mani_admin_plugin',
				'rconlist.txt' => 'cfg/mani_admin_plugin',

				'default_weapon_restrict.txt' => 'cfg/mani_admin_plugin',
				'reserveslots.txt' => 'cfg/mani_admin_plugin',

				'mani_quake_sounds.cfg' => 'cfg',
				'actionsoundlist.txt' => 'cfg/mani_admin_plugin',
				'soundlist.txt' => 'cfg/mani_admin_plugin',
				'quakesoundlist.txt' => 'cfg/mani_admin_plugin',

				'votequestionlist.txt' => 'cfg/mani_admin_plugin',
				'votersconlist.txt' => 'cfg/mani_admin_plugin',

				'mani_ranks.txt' => 'cfg/mani_admin_plugin/data'
			)
		);
	}

	private function parseParameter($line, &$parameters) {
		if(strpos($line, '#') !== false) return;
		$explode = explode(' ', $line, 2);
		if(count($explode) < 2) return;

		$parameter = trim(strtolower($explode[0]));
		$value = trim($explode[1]);

		if(array_key_exists($parameter, $parameters['server_settings'])) $parameters['server_settings'][$parameter] = $value;
		else if(array_key_exists($parameter, $parameters['filepaths'])) $parameters['filepaths'][$parameter] = $value;
	}

	private function getFilename($server) {
		return $this->server_prefix . $server . $this->server_extension;
	}

	private function getServername($filename) {
		$pos_prefix = strpos($filename, $this->server_prefix);
		$pos_extension = strpos($filename, $this->server_extension);
		if($pos_prefix !== false && $pos_extension !== false && $pos_prefix < $pos_extension) {
			$len_prefix = strlen($this->server_prefix);
			$len_extension = strlen($this->server_extension);
			$len_filename = strlen($filename);
			$result = substr($filename, $len_prefix, $len_filename - $len_prefix - $len_extension);
			return $result;
		}
		return false;
	}
	
	protected function setupTemplate() {
		$templates = scandir('templates');

		if(isset($_COOKIE['template']) && in_array($_COOKIE['template'], $templates)) $this->setTemplate($_COOKIE['template']);
		if(isset($_GET['template'])) {
			$template = $_GET['template'];
			if(in_array($template, $templates)) {
				setcookie('template', $template, time() + 60 * 60 * 24 * 30);
				$this->setTemplate($template);
			}
		}
	}
}
?>
