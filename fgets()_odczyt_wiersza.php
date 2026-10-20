<?php
 $myfile=fopen("zuza.txt","r")
        or die ("unable to open file!");
        echo fgets($myfile);
        fclose($myfile);
        ?>