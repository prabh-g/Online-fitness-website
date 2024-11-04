<?php

$server="localhost";
$username="root";
$password="";
$dbname="online_fitness";

$con=mysqli_connect($server,$username,$password,$dbname);
if($con)
{
    echo "Success";
    
}
else
{
    mysqli_connect_error();
}

?>
<!--?php
$host = 'localhost';
$db = 'online_fitness';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}
?>

