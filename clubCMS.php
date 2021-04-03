<?php
$myfile = fopen("home.md", "r") or die("Unable to connect to echo $_SERVER['REQUEST_URI']");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
?>
