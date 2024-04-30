<?php
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "mirandaPHP";

    try {
        $conn = new PDO("mysql:host=$servername", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Crear la base de datos si no existe
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
        $conn->exec($sql);

        // Cambiar a la base de datos recién creada
        $conn->exec("USE $dbname");

        // Ejecutar el script SQL para crear tablas u otros objetos de la base de datos
        $sqlFile = "db/db.sql";
        $sql = file_get_contents($sqlFile);
        $conn->exec($sql);

        echo "Database created successfully";
    } catch(PDOException $e) {
        echo "Database creation failed: " . $e->getMessage();
    }
