<?php

$core->registerAjax('servermonitor', array('admin' => false, 'file' => 'ajax_servermonitor.php'));
$core->registerHook(array('block' => 'servermonitor', 'file' => 'servermonitor.php'));

?>