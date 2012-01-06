<?php

include('plugins/serverstatusimage/config.php');

if(count($profiles) == 0) exit(0);

$profile = (isset($_GET['profile']) && is_numeric($_GET['profile'])) ? $_GET['profile'] : 0;
if(!array_key_exists($profile, $profiles)) {
	$keys = array_keys($profile);
	$profile = $keys[0];
}

$profile = $profiles[$profile];

if(!isset($profile['font'])) $profile['font'] = 'arial';
if(!isset($profile['fontsize'])) $profile['fontsize'] = 8;
if(!isset($profile['background'])) $profile['background'] = 'background.png';

$rc = $core->loadComponent('RconClient');

$server_info = $rc->getServerInfo();

// Path to our font file
$profile['font'] = realpath('.') . '/plugins/serverstatusimage/fonts/' . $profile['font'] . '.ttf';

if(!empty($server_info)) {
	$text = $server_info['hostname'] . "\n"
	. $server_info['address'] . "    " . $server_info['players'] . "    " . $server_info['map'] . "\n";
} else {
	$text = 'Could not connect to server';
}

// get the quote and word wrap it
$quote = wordwrap($quotes[$pos],20);

// Create image
$image = imagecreatefrompng('plugins/serverstatusimage/images/' . $profile['background']);
$icon = imagecreatefrompng('plugins/serverstatusimage/images/cstrike_icon.png');

imagecopy($image, $icon, 1, 1, 0, 0, 16, 18);

// pick color for the text
$fontcolor = imagecolorallocate($image, 255, 255, 255);

// x,y coords for imagettftext defines the baseline of the text: the lower-left corner
// so the x coord can stay as 0 but you have to add the font size to the y to simulate
// top left boundary so we can write the text within the boundary of the image
$margin = 2;
$x = 20 + $margin; 
$y = $profile['fontsize'] + $margin;
imagettftext($image, $profile['fontsize'], 0, $x, $y, $fontcolor, $profile['font'], $text);
// tell the browser that the content is an image
header('Content-type: image/png');
// output image to the browser
imagepng($image);

// delete the image resource 
imagedestroy($image);
?>