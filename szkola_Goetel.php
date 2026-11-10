<?php
$sql= "CREATE TABLE MyGuests (id INT AUTO_INCREMENT PRIMARY KEY, imie VARCHAR(30), data_urodzenia DATE, wzrost INT)";
mysqli_query($conn, $sql);

$imie= $_POST["name"];
$data_urodzenia = ($_POST["date"]);
$wzrost = (int)$_POST["wzrost"];

$sql = "INSERT INTO MyGuests (imie, data_urodzenia, wzrost)
VALUES ('$imie','$data_urodzenia','$wzrost')";

echo $sql;
if(mysqli_query($conn, $sql)) {
    echo "New user created successfully";
} else {
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);

}

?>