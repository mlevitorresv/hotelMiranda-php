<?php
require_once "config.php";

function getRooms()
{
    global $conn;
    $query = "SELECT * FROM mirandaphp.rooms";
    $result = $conn->query($query);

    $rooms = [];

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $rooms[] = $row;
        }
    } else {
        echo "No rooms founded";
        return array();
    }

    return $rooms;
}

function getOffersRooms()
{
    global $conn;
    $query = "SELECT * FROM mirandaphp.rooms WHERE discount > 0";
    $result = $conn->query($query);

    $rooms = [];

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $rooms[] = $row;
        }
    } else {
        echo "No rooms with offer";
        return array();
    }

    return $rooms;
}


function getRoomById($roomId)
{
    global $conn;
    $query = "SELECT * FROM mirandaphp.rooms WHERE id = ?";
    $statement = $conn->prepare($query);
    $statement->bind_param("i", $roomId);
    $statement->execute();

    $result = $statement->get_result();

    if ($result->num_rows == 0) {
        return array();
    }

    return $result->fetch_assoc();
}

function reserveRoom()
{
    global $conn;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $checkin = $_POST['arrivalDate'];
        $checkout = $_POST['leDepartureDate'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $roomId = $_GET['room_id'];

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
}

