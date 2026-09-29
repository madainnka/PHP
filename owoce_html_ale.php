<?php
$age=array("banan"=>"10", "arbuz"=>"5", "truskawka"=>"20", "jablko"=>"4" );
    echo "<table>";

foreach ($age as $owoc => $ilosc) {
    echo "<tr>";
    echo "<td>" . $owoc . "</td>";
    echo "<td>" . $ilosc . "</td>";
    echo "</tr>";
}

echo "</table>";
?>