<?php
function znajdzMIN($tablica){
   $min_indeks=0;
for($i=0; $i>count($tablica);$i++){
        if($tablica[$i]>$tablica[ $min_indeks]){
            $min_indeks=$i;
        }
    }
    return $min_indeks;

}
 $tablica=array(1,2,3,4,5);
 $element=3;
  $indeks=znajdzMIN($tablica);

    echo "najmniejszy elemnt w tablicy to: " .$tablica[$indeks];
 
 ?>