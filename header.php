<?php
// Open Header.md
$myfile = fopen("header.md", "r") or die("Unable to connect to echo $_SERVER['REQUEST_URI']");
// Converting MarkDown to HyperText Page.
echo <div class="markdown" id="home" markdown="1">
    <?php fread($myfile,filesize("header.md")); ?>
</div>
 fclose($myfile);
?>
