<?php
$server_name = "127.0.0.1";
$username = "root";
$password = "";
$db_name = "yothineiei";


// Procedural
// Create connection
$conn = mysqli_connect($server_name, $username, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";

//PDO
// try {
//     $conn = new PDO("mysql:host=$server_name;dbname=$db_name", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }
// <!-- https://www.w3schools.com/php/php_mysql_connect.asp -->
?>