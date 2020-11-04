<?php
//$connect = mysqli_connect("namalocalhost", "dbuser","dbpassword","dbname); 
$connect = mysqli_connect("localhost", "id15281545_fluttersqldatabase","Flutter.qlCrud1","id15281545_fluttersql");
if($connect){
     echo "Connection Succesfull";
} else {
    die("Connection Failed: " . mysqli_connect_error());
    mysqli_close($connect);
}
?>
