<?php

require_once './vendor/eftec/bladeone/lib/BladeOne.php';
use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';

$blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);

$servername = "localhost";
$username = "root";
$password = "12345678";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS mirandaphp";
if ($conn->query($sql) === FALSE) {
    echo "Error creating database: " . $conn->error;
}

$sqlFile = '../db/db.sql';
$sqlCommands = file($sqlFile);

foreach ($sqlCommands as $sqlCommand) {
    // Ejecuta la consulta SQL
    if ($conn->query($sqlCommand) === FALSE) {
        echo "Error al ejecutar la consulta: $sqlCommand <br>";
        echo "Error: " . $conn->error . "<br>";
    }
}
