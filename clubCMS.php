<?php
// Open Home.md
$myfile = fopen("home.md", "r") or die("Unable to connect to website content.");
// Converting MarkDown to HyperText Page.
echo 
  <title> ClubCMS </title>
    <div class="markdown" id="home" markdown="1">
    <?php fread($myfile,filesize("home.md")); ?>
</div>
 fclose($myfile);
?>
