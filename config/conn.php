<?php
$user_name = "root";
$host_name = "localhost";
$password = "root";
$db_name = "mansliders";

$conn = new mysqli($host_name,$user_name,$password,$db_name);

if($conn->connect_error){
    die("Sorry, connection error : ".$conn->connect_error);
}
?>