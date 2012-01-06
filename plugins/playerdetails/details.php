<?php

if(isset($_GET['steamid']) && !empty($_GET['steamid'])) {
	$steamid = $_GET['steamid'];
	
	$rs = $core->loadComponent('Ranks');

	$rank = $rs->getPlayer($steamid);
	
	if($rank != null) {
		$sc = $core->loadComponent('SteamCommunity');

		$steam = $sc->getSteamId($steamid);
		
		include('plugins/playerdetails/functions.php');
		include('plugins/playerdetails/view.php');
		
		/*
		echo 'rank:<br /><br />';
		
		echo '<pre>';
		var_dump($rank);
		echo '</pre>';
		
		echo 'steam:<br /><br />';
		
		echo '<pre>';
		var_dump($steam);
		echo '</pre>';
		*/
	}
}

if($rank == null) echo 'unkown player';

?>