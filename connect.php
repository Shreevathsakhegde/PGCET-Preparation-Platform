<?php
//if(isset($_POST['Full_name']))
$server = "localhost";
$Email = "root";
$password = "";
$dbName = "registration1";


$con = mysqli_connect($server,$Email,$password,$dbName);
 if(!$con){
    die("connection to this database failed due to".mysqli_connect_error());
 }
?>



