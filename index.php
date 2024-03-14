<?php
require_once('./vendorBladeOne.php');
use eftec\bladeone\BladeOne;
$blade = new BladeOne(null, null, BladeOne::MODE_AUTO);

echo $blade->run("index");
