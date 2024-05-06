<?php
require './config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO mirandaphp.contacts (photo, name, email, phone, comment, date, dateTime, archived)
            VALUES ('https://picsum.photos/seed/qqzkg4/640/480', ?, ?, ?, ?, CURDATE(), DATE_FORMAT(NOW(), '%H:%i:%s'), 0)";

    $statement = $conn->prepare($sql);

    if (!$statement) {
        die("Error al preparar la consulta: " . $conn->error);
    }

    $statement->bind_param("ssss", $fullname, $email, $phone, $message);


    if (!$statement->execute()) {
        die("Error al ejecutar la consulta: " . $statement->error);
    }

    $statement->close();
    $conn->close();
}
echo $blade->run("contact");
