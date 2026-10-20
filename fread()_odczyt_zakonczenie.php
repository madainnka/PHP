<?php
$myfile=fopen("zuza.txt","r")
         or die ("unable to open file!");
    echo fread($myfile,filesize("zuza.txt"));
    fclose($myfile);
    ?>