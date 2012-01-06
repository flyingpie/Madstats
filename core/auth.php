<?php
class Auth {

	protected $core;

	public function Auth($core) {
		$this->core = $core;
	}
	
	public function isLogged() {
		return array_key_exists('logged', $_SESSION) && $_SESSION['logged'] === true;
	}
	
	public function login($password) {
		$dm = $this->core->loadComponent('DataManager');
		$server_cfg = $dm->getConfigFile('server.cfg');
		
		foreach($server_cfg as $property => $value) {
			if($property == 'rcon_password') {
				if(strlen($property) > 0) {
					if($value == $password) {
						$_SESSION['logged'] = true;
						return true;
					}
				}
				break;
			}
		}
		return false;
	}
	
	public function logout() {
		session_destroy();
	}

}
?>