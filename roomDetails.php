<?php
require './config.php';
require_once "./controllers/rooms.php";
$room = getRoomById($_GET['room_id']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $checkin = htmlspecialchars(trim($_POST['arrivalDate']));
    $checkout = htmlspecialchars(trim($_POST['leDepartureDate']));
    $fullname = htmlspecialchars(trim($_POST['fullName']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));
    $roomId = htmlspecialchars(trim($_POST['room']));

    $sql = "INSERT INTO mirandaphp.bookings (photo, name, orderDate, orderTime, checkinDate, checkinTime, checkout, checkoutTime, notes, roomId, status)
        VALUES ('https://picsum.photos/seed/qqzkg4/640/480', ?, CURDATE(),  DATE_FORMAT(NOW(), '%H:%i:%s'), ?, '12:00:00', ?, '12:00:00', ?, ?, 'booked')";

    $statement = $conn->prepare($sql);

    if (!$statement) {
        die("Error al preparar la consulta: " . $conn->error);
    }

    $statement->bind_param("ssssi", $fullname, $checkin, $checkout, $message, $roomId);


    if (!$statement->execute()) {
        die("Error al ejecutar la consulta: " . $statement->error);
    }

    $statement->close();
    $conn->close();

    echo '<script type="text/javascript">
        alert("Reserva realizada ¡Gracias!");
        </script>';
}

echo $blade->run("roomDetails", ['room' => $room]);
