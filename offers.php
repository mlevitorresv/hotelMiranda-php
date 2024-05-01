<?php
require './config.php';
require_once "./controllers/rooms.php";
$rooms = getOffersRooms();


echo $blade->run("offers", ['rooms' => $rooms]);
