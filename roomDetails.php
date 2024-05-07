<?php
require './config.php';
require_once "./controllers/rooms.php";
$room = getRoomById($_GET['room_id']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $checkin = $_POST['arrivalDate'];
    $checkout = $_POST['leDepartureDate'];
    $fullname = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $roomId = $_POST['room'];

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
}

echo $blade->run("roomDetails", ['room' => $room]);
