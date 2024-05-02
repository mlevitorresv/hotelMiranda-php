<?php
require './config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO mirandaphp.contacts (photo, name, email, phone, comment, date, dateTime, archived)
            VALUES ('https://picsum.photos/seed/qqzkg4/640/480', '$fullname', '$email', '$phone', '$message', CURDATE(), DATE_FORMAT(NOW(), '%H:%i:%s'), 0)";

    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}