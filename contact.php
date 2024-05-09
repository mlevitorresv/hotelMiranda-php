<?php
require './config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars(trim($_POST['fullname']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

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

    echo'<script type="text/javascript">
        alert("Tarea Guardada");
        </script>';
}
echo $blade->run("contact");
