<?php

$rc = $this->loadComponent('RconClient');

$result = array();

$server_info = $rc->getServerInfo();

if(!empty($server_info)) {

	if(!empty($server_info)) {
		$dm = $this->loadComponent('DataManager');

		$maps = $dm->getFile('mapcycle.txt');

		ob_start();
		include('plugins/serverstatus/view.php');
		$content = ob_get_contents();
		ob_end_clean();
		
		$result = array(
			'status' => 1,
			'message' => $content
		);
	} else {
	
		$result = array(
			'status' => 0,
			'message' => $lang->ServerStatus->RetrievingServerStatus
		);

	}
	
} else {

	$result = array(
		'status' => -1,
		'message' => $lang->ServerStatus->CouldNotConnectToServer
	);

}

$result['is_logged'] = $core->getAuth()->isLogged();

echo json_encode($result);

?>