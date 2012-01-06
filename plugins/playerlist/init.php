<?php

$core->registerPage('playerlist', array('admin' => false, 'file' => 'list.php', 'name' => $core->getLang()->PlayerList->Title));
$core->registerHook(array('block' => 'toplist', 'file' => 'toplist.php'));

?>