<?php
session_start();
echo 'Welcome to page #3 <br>';
echo 'Ulubiony kolor: '.$_SESSION['favcolor'];
echo 'Zwierze: '.$_SESSION['animal'];
echo date ('Y m d H:i:s', $_SESSION['time']),'<br>';

echo $_SESSION['bzdura'];
?>