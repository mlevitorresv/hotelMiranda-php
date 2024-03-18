<?php
    $servername = "localhost";
    $username = "root";
    $password = "12345678";

    try{
        $conn = new PDO("mysql:host=$servername; dbname=mirandaPHP", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Succesfully";
    }catch(PDOException $e){
        echo "Connection failed". $e->getMessage();
    }
