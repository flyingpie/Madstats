Clients Editor
<?php
$clients = $core->loadComponent('Clients');

if(isset($_POST['playerName'], $_POST['playerSteam']) && !empty($_POST['playerName']) && !empty($_POST['playerSteam'])) {
	$id = $clients->addClient($_POST['playerName'], $_POST['playerSteam']);
	$clients->save();
	header('Location: ?page=serverconfiguration&config=clients.txt&player=' . $id);
	exit(0);
} else if(isset($_POST['groupName']) && !isset($_POST['saveType'])) {
	$id = $clients->addGroup($_POST['groupName']);
	$clients->save();
	header('Location: ?page=serverconfiguration&config=clients.txt&group=' . $id);
	exit(0);
} else if(isset($_GET['save']) && isset($_POST['saveType'])) {
	if($_POST['saveType'] == 'player') {
		$id = $_POST['playerName'];
		$clients->setPlayerFlags($id, array('Admin' => array(), 'Immunity' => array()));
		if(array_key_exists('flags', $_POST)) {
			if(array_key_exists('Admin', $_POST['flags'])) {
				$clients->setPlayerFlags($id, array('Admin' => array_keys($_POST['flags']['Admin'])));
			}
			if(array_key_exists('Immunity', $_POST['flags'])) {
				$clients->setPlayerFlags($id, array('Immunity' => array_keys($_POST['flags']['Immunity'])));
			}
		}
		
		if(array_key_exists('groups', $_POST['player'])) {
			$clients->setPlayerGroups($id, array_keys($_POST['player']['groups']));
		}
	} else if($_POST['saveType'] == 'group') {
		$id = $_POST['groupName'];
		$clients->setGroupFlags($id, array('Admin' => array(), 'Immunity' => array()));
		if(array_key_exists('flags', $_POST)) {
			if(array_key_exists('Admin', $_POST['flags'])) {
				$clients->setGroupFlags($id, array('Admin' => array_keys($_POST['flags']['Admin'])));
			}
			if(array_key_exists('Immunity', $_POST['flags'])) {
				$clients->setGroupFlags($id, array('Immunity' => array_keys($_POST['flags']['Immunity'])));
			}
		}
	}
	$clients->save();
} else if(isset($_GET['deletePlayer']) && !empty($_GET['deletePlayer'])) {
	$clients->deleteClient($_GET['deletePlayer']);
	$clients->save();
	header('Location: ' . $_SERVER['HTTP_REFERER']);
} else if(isset($_GET['deleteGroup']) && !empty($_GET['deleteGroup'])) {
	$clients->deleteGroup($_GET['deleteGroup']);
	$clients->save();
	header('Location: ?page=serverconfiguration&config=clients.txt');
} else {
	if(isset($_GET['player'])) {
		if($clients->hasId($_GET['player'])) {
			$player = $clients->getPlayer($_GET['player']);
			$groups = $clients->getGroups();
			$playerFlags = $clients->getPlayerFlags($_GET['player']);
			$playerGroups = $clients->getPlayerGroups($_GET['player']);
			include('plugins/serverconfiguration/editors/clients/res_flags.php');
			include('plugins/serverconfiguration/editors/clients/player.php');
		} else {
			echo 'Invalid client id';
		}
	} elseif(isset($_GET['group'])) {
		if($clients->hasGroup($_GET['group'])) {
			$groupName = $_GET['group'];
			$group = $clients->getGroup($_GET['group']);
			include('plugins/serverconfiguration/editors/clients/res_flags.php');
			include('plugins/serverconfiguration/editors/clients/group.php');
		}
	} else {
		$players = $clients->getPlayers();
		$groups = $clients->getGroups();
		
		include('plugins/serverconfiguration/editors/clients/clients_index.php');
	}
}
?>