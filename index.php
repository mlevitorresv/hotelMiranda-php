<?php
require_once './vendor/eftec/bladeone/lib/BladeOne.php';
use eftec\bladeone\BladeOne;

$views = __DIR__ .'/views';
$cache = __DIR__ .'/cache';

$blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);

echo $blade->run("index");
