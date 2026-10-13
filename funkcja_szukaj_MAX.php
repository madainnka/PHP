//napisz funkcje ktora wyszuka w tablicy najwiekszy element i zwroci jego indeks
<?php
function znajdzMAX($tablica){
   $max=$tablica[0];
for($i=0; $i<count($tablica);$i++){
        if($tablica[$i]> $max){
            $max=$tablica[$i];
        }
    }
    return $max;

}
 $tablica=array(1,2,3,4,5);
 $element=3;
  $indeks=znajdzMAX($tablica);

    echo "najwiekszy elemnt w tablicy to: .$indeks";
 
 ?>