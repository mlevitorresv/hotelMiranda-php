<?php
require ('./vendor/autoload.php');

require_once './vendor/eftec/bladeone/lib/BladeOne.php';
use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);

$dotenv = Dotenv\Dotenv::createImmutable('./');
$dotenv->load();

$servername = $_ENV['SERVER_NAME'];
$username = $_ENV['USERNAME'];
$password = $_ENV['PASSWORD'];
$dbname = $_ENV['DB_NAME'];


$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS mirandaphp";
if ($conn->query($sql) === FALSE) {
    echo "Error creating database: " . $conn->error;
}
