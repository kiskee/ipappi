<?php 

$server = "sql10.freesqldatabase.com";
$user = "sql10526378";
$pass = "AvGsN82BWn";
$database = "sql10526378";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>