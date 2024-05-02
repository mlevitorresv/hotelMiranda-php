<?php
require './config.php';
require_once "./controllers/rooms.php";
$room = getRoomId($_GET['room_id']);
echo $blade->run("roomDetails", ['room'=>$room]);
