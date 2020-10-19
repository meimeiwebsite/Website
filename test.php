<?php 
error_reporting(E_ALL);

$pagename = 'my_page1';

$newFileName = '/'.$pagename.".php";
$newFileContent = $_POST["fname"];

if (file_put_contents($newFileName, $newFileContent) !== false) {
    echo "File created (" . basename($newFileName) . ")";
} else {
    echo "Cannot create file (" . basename($newFileName) . ")";
}
?>