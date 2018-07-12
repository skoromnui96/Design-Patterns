<?php
include_once "LandRover.php";
include_once "PrintCar.php";
include_once "Zaz.php";
include_once "Adapter.php";


$land = new LandRover();
$print = new PrintCar($land);

$zaz = new Zaz();
$adapter = new Adapter($zaz);
$print2 = new PrintCar($adapter);


$print->printFounder();
$print->printSide();

echo "<br />";

$print2->printFounder();
$print2->printSide();
