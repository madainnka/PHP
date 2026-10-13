<?php
function znajdzMAX($tablica){
   $max_indeks=0;
for($i=0; $i<count($tablica);$i++){
        if($tablica[$i]>$tablica[ $max_indeks]){
            $max_indeks=$i;
        }
    }
    return $max_indeks;

}
 $tablica=array(1,2,3,4,5);
 $element=3;
  $indeks=znajdzMAX($tablica);

    echo "najwiekszy elemnt w tablicy to: " .$tablica[$indeks];
 
 ?>