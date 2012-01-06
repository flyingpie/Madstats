<?php

$core->registerPage('tools', 'tools.php');

$core->registerAjax('ping', 'pingchecker/ajax_ping.php');
$core->registerPage('pingchecker', array('file' => 'pingchecker/pingchecker.php', 'menuitem' => false));

$core->registerAjax('rcon', 'rconclient/ajax_rcon.php');
$core->registerAjax('rconsuggest', 'rconclient/ajax_rconsuggest.php');
$core->registerPage('rconclient', array('file' => 'rconclient/rconclient.php', 'menuitem' => false));

$core->registerAjax('serverchecker', array('admin' => false, 'file' => 'serverchecker/ajax_serverchecker.php', 'menuitem' => false));

$core->registerAjax('adminmenu', 'adminmenu/ajax_adminmenu.php');
$core->registerPage('adminmenu', array('file' => 'adminmenu/adminmenu.php', 'menuitem' => false));

?>