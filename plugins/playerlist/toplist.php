<?php

$rs = $core->loadComponent('Ranks');

$players = $rs->getPlayers();

$i = 0;
foreach($players as $player) {
	echo $player['points'] . ' - <a href="?page=playerdetails&amp;steamid=' . $player['steam_id'] . '">' . htmlspecialchars($player['player_name']) . '</a><br />';
	$i++;
	if($i >= 5) break;
}

?>