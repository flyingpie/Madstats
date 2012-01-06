<?php

$rcon = $core->loadComponent('RconClient');

if(isset($_GET['property'], $_GET['value']) && !empty($_GET['property'])) {
	$result = $rcon->rconExec($_GET['property'] . " " . $_GET['value']);
	
	echo ($result) ? '1' : '0';
}

?>