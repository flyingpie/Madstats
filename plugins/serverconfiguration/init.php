<?php
$core->registerPage('serverconfiguration', array('file' => 'serverconfiguration.php', 'name' => $lang->Configuration->Title));
$core->registerAjax('applyconfig', array('file' => 'ajax_applyconfig.php'));
?>