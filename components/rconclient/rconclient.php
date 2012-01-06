<?php
class RconClient {

	protected $core;
	protected $server;
	protected $server_info;
	protected $isConnected;
	protected $isIncluded;
	
	public function RconClient($core) {
		$this->core = $core;
		//$this->initRconClient();
	}
	
	public function connect() {
		$this->initRconClient(true);
	}
	
	public function isConnected() {
		return $this->isConnected;
	}
	
	public function getServer() {
		$this->initRconClient();
		return $this->server;
	}
	
	public function getServerInfo() {
		try {
			$cache = $this->core->loadComponent('Cache');
			$server_info = $cache->retrieveArray('serverinfo');

			if(!empty($server_info)) {
				return $server_info;
			} else {
				$this->initRconClient();
				//if($this->server_info != null) return $this->server_info;
			
				$statusInfo = $this->getServer()->rconExec('status');
			
				$this->server_info = $this->parseStatusInfo($statusInfo);
			
				$cache->cacheArray('serverinfo', $this->server_info);
				return $this->server_info;
			}
		} catch(Exception $ex) {
			return false;	
		}
	}
	
	public function rconExec($command) {
		try {
			$this->initRconClient();
			return $this->getServer()->rconExec($command);
		} catch(Exception $ex) {
			exit(0);
		}
	}
	
	protected function initRconClient($override = false) {
		if(!$override && $this->isConnected()) return;
		$this->includeLib();

		try {
			$this->server = new SourceServer(new InetAddress($this->core->getConfig()->getSrcdsHost()), $this->core->getConfig()->getSrcdsPort());
			
			$this->server->rconAuth($this->core->getConfig()->getRconPassword());
			
			$this->isConnected = true;
		} catch(Exception $ex) {
			
		}
	}

	protected function includeLib() {
		if(!$this->isIncluded) {
			chdir('lib');
			chdir('steam-condenser');
			chdir('lib');
			include_once('InetAddress.php');
			include_once('steam/servers/SourceServer.php');
			chdir('..');
			chdir('..');
			chdir('..');

			$this->isIncluded = true;
		}
	}	

	protected function parseStatusInfo($statusInfo) {
		$lines = explode("\n", $statusInfo);
		$result = array();
		
		foreach($lines as $line) {
			$value = trim(substr($line, strpos($line, ':') + 1));
			$explode = explode(" ", $value);
			
			if(strstr($line, '#')) {
				if($line[1] == " ") $line = trim(trim(substr($line, 2)));
				else $line = substr($line, 1);
				
				$first_quote = strpos($line, '"') + 1;
				$last_quote = strrpos($line, '"');
				$player_name = substr($line, $first_quote, $last_quote - $first_quote);
				
				$line = substr($line, 0, $first_quote - 2) . substr($line, $last_quote + 1);
				
				$explode = explode(" ", $line);

				if(is_numeric($line[0]) || is_numeric($line[1])) {
					// Player info
					if(count($explode) == 3) {
						// Bot
						$result['players_list'][] = array(
							'player_name' => $player_name,
							'userid' => $explode[0],
							'ping' => $explode[1],
							'status' => $explode[2]
						);
					} else if(count($explode) >= 7) {
						// Player
						$result['players_list'][] = array(
							'player_name' => $player_name,
							'userid' => $explode[0],
							'steam_id' => $explode[1],
							'time_online' => $explode[2],
							'ping' => $explode[3],
							'loss' => $explode[4],
							'status' => $explode[5],
							'ip_address' => $explode[6]
						);
					}
				}
			} else {
				// Server info
				if(strpos($line, 'hostname') === 0) {
					$result['hostname'] = $value;
				} else if(strpos($line, 'version') === 0) {
					$result['version'] = $explode[0] . " " . $explode[1];
					$result['secure'] = (count($explode) >= 3 && $explode[2] == 'secure') ? true : false;
				} else if(strpos($line, 'udp/ip') === 0) {
					$result['address'] = $explode[0];
				} else if(strpos($line, 'map') === 0) {
					$result['map'] = $explode[0];
				} else if(strpos($line, 'players') === 0) {
					$result['players'] = $value;
				}
			}
		}
		
		if(!array_key_exists('players_list', $result)) {
			$result['players_list'] = array();
		}
		
		return $result;
	}
}
?>
