<?php

$core->registerAjax('serverstatus', array('admin' => false, 'file' => 'ajax_serverstatus.php'));
$core->registerPage('serverstatus', array('admin' => false, 'file' => 'serverstatus.php', 'name' => $lang->ServerStatus->Title));

?>