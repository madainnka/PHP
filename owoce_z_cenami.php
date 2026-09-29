<?php
$age=array("banan"=>"10", "arbuz"=>"5", "truskawka"=>"20", "jablko"=>"4" );
echo "<ul>";
    foreach ($age as $owoc => $ilosc) {
    echo "<li>" . $owoc . ": " . $ilosc . "</li>";
    };
echo"</ul> ";
?>