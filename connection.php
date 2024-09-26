<?php
$user = 'root';
$password = 'Gonuts73@';
$database = 'cart_db';
$host = '127.0.0.1';
$port = 3306;

$conn = mysqli_connect($host, $user, $password, $database, $port);

if (!$conn) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}