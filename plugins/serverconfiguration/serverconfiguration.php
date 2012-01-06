<?php

$translation = $core->loadComponent('Translation');
$translation->load('configuration');

$dm = $core->loadComponent('DataManager');
//$cfg = $dm->getConfigFile('server.cfg');

include('plugins/serverconfiguration/res_configfiles.php');

if(isset($_GET['config'])) {
	$config = $_GET['config'];
	
	$configExists = false;
	$config_file;
	$config_description;
	foreach($config_files as $category => $configs) {
		foreach($configs as $file => $info) {
			if($config == $file) {
				$configExists = true;
				$config_file = $file;
				$config_description = $info['description'];
				$editor = $info['editor'];
				$translation->load($file);
				break;
			}
		}
		if($configExists) break;
	}
	
	if($configExists) {
		//$editor = 'txt_editor';
		//$editors = scandir('plugins/serverconfiguration/editors');
		//if(isset($_GET['editor']) && in_array($_GET['editor'] . '.php', $editors)) $editor = $_GET['editor'];
		
		echo '<form action="?page=serverconfiguration&amp;config=' . $config . '&amp;save" method="post">';
		include('plugins/serverconfiguration/editors/' . $editor . '.php');
		echo '</form>';

		if(isset($_POST['execute'])) {
			$rc = $core->loadComponent('RconClient');
			try {
			$rc->getServer()->rconExec('exec ' . $config_file);
			} catch(Exception $ex) {
			
			}
		}
		if(isset($_GET['save'])) header('Location: ?page=serverconfiguration');
	} else {
		echo 'The specified config file does not exists';
	}
} else {
	include('plugins/serverconfiguration/config_index.php');
}
?>