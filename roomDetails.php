<?php
require './config.php';
require_once "./controllers/rooms.php";
$room = getRoomById($_GET['room_id']);

echo $blade->run("roomDetails", ['room'=>$room]);
