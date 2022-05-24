<?php 

//* MySQLi Approach
$port = "localhost:3306";
$username = "root";
$password = "";

$conn = mysqli_connect($port, $username, $password);
if(!$conn) {
    die("Could not Connect".mysqli_error());
} else {
    echo "Connected Successfully using MySQLi approach";
}

mysqli_close($conn);

//* PDO Approach
$server = "localhost";
$username = "root";
$password = "";
$database = "humanresources";
$charset = "utf8mb4";

try{
    $dsn = "mysql:host=$server;dbname=$database;
    charset=$charset";
    
    $pdo = new PDO($dsn, $username, $password);
    
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, 
    PDO::ERRMODE_EXCEPTION);

    echo "Connected Successfully using PDO method";
} catch (PDOExceptioon $e) {
    echo "Could not Connect".$e -> getMessage();
}

?>