<?php

$pagesize = (isset($_GET['pagesize']) && is_numeric($_GET['pagesize'])) ? $_GET['pagesize'] : null;
$start = (isset($_GET['start']) && is_numeric($_GET['start'])) ? $_GET['start'] : 0;

$previous = $start - $pagesize;
if($previous < 0) $previous = 0;

$next = $start + $pagesize;

echo ($start > 0) ? '<a href="' . $core->getURL(array('start' => $previous)) . '"><<</a> | ' : '<< | ';

$playerCounts = array(10, 30, 50, 100);
$itemCount = count($playerCounts);
for($i = 0; $i < $itemCount; $i++) {
	echo ($playerCounts[$i] == $pagesize) ? $playerCounts[$i] : '<a href="' . $core->getURL(array('pagesize' => $playerCounts[$i])) . '">' . $playerCounts[$i] .'</a>';
	if($i < $itemCount - 1) echo ' | ';
}

echo ' | <a href="'. $core->getURL(array('start' => $next)) .'">>></a>';
?>