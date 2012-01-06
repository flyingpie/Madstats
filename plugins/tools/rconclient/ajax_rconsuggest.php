<?php
if(isset($_GET['term']) && !empty($_GET['term'])) {
	$cmd = strtolower($_GET['term']);
	$length = strlen($cmd);
	
	include('plugins/tools/rconclient/res_cvars.php');

	$results = array();

	foreach($res_cvars as $cvar) {
		if(substr($cvar, 0, $length) == $cmd) $results[] = $cvar;
		if(count($results) >= 10) break;
	}
	
	echo json_encode($results);
}
?>