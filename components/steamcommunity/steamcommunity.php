<?php
class SteamCommunity {

	protected $core;
	protected $steam_api;

	public function SteamCommunity($core) {
		$this->core = $core;
		$this->initSteamCommunity();
	}
	
	protected function initSteamCommunity() {		
		include('lib/steam-community-api/steam_api.php');
		$this->steam_api = new SteamAPI();
	}
	
	public function getSteamId($steamid) {
		$identifier = 'steamcom_' . $steamid;

		$cache = $this->core->loadComponent('Cache');
		$cached_data = $cache->retrieveArray($identifier);
		
		if(!empty($cached_data)) return $cached_data;

		$data = $this->steam_api->get_profile_data($steamid);
		$cache->cacheArray($identifier, $data);

		return $data;
	}

}
?>
