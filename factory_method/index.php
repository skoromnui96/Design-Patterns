<?php
require_once "UKCarFactory.php";
require_once "USACarFactory.php";


$usaFactory = new USACarFactory();
$usa_sedan = $usaFactory->buildCar('sedan');
$usa_sedan->getLocation();
$usa_sedan->getType();

$usa_suv = $usaFactory->buildCar('suv');
$usa_suv->getLocation();
$usa_suv->getType();

echo "<br /> ============================ <br />";

$uKFactory = new UKCarFactory();
$uK_sedan = $uKFactory->buildCar('sedan');
$uK_sedan->getLocation();
$uK_sedan->getType();

$uK_suv = $uKFactory->buildCar('suv');
$uK_suv->getLocation();
$uK_suv->getType();
