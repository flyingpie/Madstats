<?php
$result = array('available' => false);
if(isset($_GET['name']) && strlen($_GET['name']) >= 4) {
	$servers = scandir('config/servers');
	$result['available'] = !in_array($_GET['name'] . '.txt', $servers);
}
echo json_encode($result);
?>