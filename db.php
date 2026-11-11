<?php

$servername = "localhost";
$username = "root";
$password = "Placement@123";
$dbname = "contact_db";
$port = 3306;

$conn = new mysqli(
    $servername,
    $username,
    $password,
    $dbname,
    $port
);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

?>