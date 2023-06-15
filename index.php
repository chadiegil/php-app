<?php

$server = "localhost";
$username= "root";
$password = "secret";
$database = "php_database_demo";


$conn = new mysqli($server,$username,$password,$database);

const BR = "<BR/>";

if($conn->connect_error){
    die("Connection Failed!" . $conn->connect_error);
}

echo "Connected successfully!".BR;

$name = "Chadie Gil".BR;

echo "$name";


$conn->close();