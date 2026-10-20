<?php
$myfile=fopen("zuza2.txt","w")
        or die ("unable to open file!");
        $txt="zuza\n";
        fwrite($myfile,$txt);
        fclose($myfile);
        ?>