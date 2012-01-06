<?php

$rc = $core->loadComponent('RconClient');
$server_info = $rc->getServerInfo();
$result = array();

if($server_info !== false && !empty($server_info)) {
	$result = array('status' => '1',
	'message' => "Server name: " . $server_info['hostname'] . "<br />" 
	. "Address: " . $server_info['address'] . " <strong><a href=\"steam://connect/" . $server_info['address'] . "\">Join now!</a></strong><br />" 
	. "Map: " . $server_info['map'] . "<br />" 
	. "Players: " . $server_info['players']);
} else {
	$result = array('status' => '0',
	'message' => 'Retrieving server info... ');
}

echo json_encode($result);

?>
