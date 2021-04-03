<?php
// Open Home.md
$myfile = fopen("home.md", "r") or die("Unable to connect to echo $_SERVER['REQUEST_URI']");
// Converting MarkDown to HyperText Page.
echo <div class="someclass" id="someid" markdown="1">
    <?php fread($myfile,filesize("home.md")); ?>
</div>
 fclose($myfile);
?>
