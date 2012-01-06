<?php

$core->registerHook(array('block' => 'user', 'file' => 'hook_login.php'));
$core->registerPage('login', array('admin' => false, 'file' => 'login.php', 'menuitem' => false));
$core->registerPage('logout', array('admin' => false, 'file' => 'logout.php', 'menuitem' => false));

?>