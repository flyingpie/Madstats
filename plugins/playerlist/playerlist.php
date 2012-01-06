<?php

$core->registerScript('lib/jquery/jquery.1.4.2.min.js');
$core->registerScript('lib/jquery/shadowbox-3.0.3/shadowbox.js');
$core->registerScript('plugins/playerlist/row_alternator.js');
$core->registerStylesheet('lib/jquery/shadowbox-3.0.3/shadowbox.css');

$rs = $core->loadComponent('Ranks');

$searchtypes = array(
	'steam_id' => $lang->Common->SteamId,
	'player_name' => $lang->PlayerList->PlayerName
);

if(isset($_GET['search'], $_GET['term'], $_GET['searchtype']) && !empty($_GET['term'])) {
	$term = strtolower($_GET['term']);
	$searchtype = (array_key_exists($_GET['searchtype'], $searchtypes)) ? $_GET['searchtype'] : 'player_name';

	$ranks = $core->loadComponent('Ranks');
	$players_buffer = $ranks->getPlayers();
	$players = array();
	
	foreach($players_buffer as $player) {
		if(strpos(strtolower($player[$searchtype]), $term) !== false) $players[] = $player;
	}
} else {
	if(!isset($_GET['pagesize'])) $_GET['pagesize'] = 200;
	$playerCount = (is_numeric($_GET['pagesize'])) ? $_GET['pagesize'] : null;
	$start = (isset($_GET['start']) && is_numeric($_GET['start'])) ? $_GET['start'] : null;
	$players = $rs->getPlayers($playerCount, $start);
}

$isLogged = $core->getAuth()->isLogged();

if($isLogged) {
	$clients = $core->loadComponent('Clients');
}

?>