<?php

if(isset($_GET['cmd']) && !empty($_GET['cmd'])) {

	$cmd = $_GET['cmd'];
	
	$rc = $core->loadComponent('RconClient');

	$output = $rc->rconExec($cmd);
	
	echo trim($output);

}

?>