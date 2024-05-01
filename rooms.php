<?php
require_once "./controllers/rooms.php";
require './config.php';
$rooms = getRooms();
echo $blade->run("rooms", ['rooms' => $rooms]);


