<?php 

$server = "sql10.freesqldatabase.com";
$user = "sql10526378";
$pass = "AvGsN82BWn";
$database = "sql10526378";



$conn = mysqli_connect($server, $user, $pass, $database);

//$dsn = "mysql:host=sql10.freesqldatabase.com;dbname=sql10526378";

//$conn2 = new PDO($dsn, $user, $pass);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>