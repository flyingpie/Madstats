<?php
require "zip.class.php"; // Get the zipfile class
$zipfile = new zipfile; // Create an object
$zipfile->create_dir("."); // Add a subdirectory - must be done.  If a subdirectory is not wanted, just simply add one named "." as shown here
$zipfile->create_file(file_get_contents(__FILE__), "zip.txt"); // Add the data of the file that is wanted, and the full path to it in the zip.

// Allow user to download file
header("Content-type: application/zip");
header("Content-disposition: attachment;filename=\"zip.zip\"");
echo $zipfile->zipped_file();
?>