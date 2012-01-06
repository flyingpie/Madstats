<?php
require "zip.class.php"; // Get the zipfile class
$zipfile = new zipfile; // Create an object
$zipfile->read_zip("plugins.zip"); // Read the zip file

// Now, $zipfile->files is an array containing information about the files
// Here is an example of it's use

$destination = 'files';
$owner = fileowner(__FILE__);
foreach($zipfile->files as $file)
{
	echo $file['dir'] . '/' . $file['name'] . '<br />';
	if(!file_exists($destination . '/' . $file['dir'])) mkdir($destination . '/' . $file['dir'], 0755, true);
	file_put_contents($destination . '/' . $file['dir'] . '/' . $file['name'], $file['data']);
	chown($destination . '/' . $file['dir'] . '/' . $file['name'], $owner);
}
?>