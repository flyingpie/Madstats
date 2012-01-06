<?php

// Madstats Api

if(isset($_GET['password']) && !empty($_GET['password']) && $_GET['password'] == md5($core->getConfig()->getApiPassword())) {
	$rc = $core->loadComponent('RconClient');
	$config = $core->loadComponent('Config');
	
	$server = 1;
	$servers = $config->getServers();
	if(isset($_GET['server']) && !empty($_GET['server']) && is_numeric($_GET['server']) && in_array($_GET['server'], $servers))
	{
		$server = $_GET['server'];
	}

	//$config->readConfiguration($server);
	$server_info = $rc->getServerInfo();

	$result = array(
		'hostname' => $server_info['hostname'],
		'version' => $server_info['version'],
		'secure' => $server_info['secure'],
		'address' => $server_info['address'],
		'map' => $server_info['map'],
		'players' => $server_info['players'],
		'game' => $core->getConfig()->getSrcdsGame(),
		'players_list' => $server_info['players_list'],
	);

	echo json_encode($result);
} else {
	echo 'INVALID_PASSWORD';
}

?>