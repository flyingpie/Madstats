<?php

$rc = $core->loadComponent('RconClient');

try {
	echo $rc->getServer()->getPing();
} catch(Exception $ex) {
	echo '-1';
}

?>