<?php
require_once "./controllers/rooms.php";
require_once './vendor/eftec/bladeone/lib/BladeOne.php';
use eftec\bladeone\BladeOne;

$rooms = getOffersRooms();

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';

$blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);

echo $blade->run("offers", ['rooms' => $rooms]);
