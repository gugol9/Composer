<?php



require("vendor/autoload.php");


use  Imagine\Image\Box;
$imagine = new Imagine\Gd\Imagine();
$imagine = $imagine->open('Wiktor.jpeg');

$imagine->resize(new Box(15,25));

$imagine->save('img/Wiktor.jpeg');