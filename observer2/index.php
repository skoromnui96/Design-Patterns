<?php
require_once "Dollar.php";
require_once "Pound.php";
require_once "priceSimulator.php";
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 04.07.2018
 * Time: 0:31
 */

$priceSimulator = new priceSimulator();
$currency1 = new Dollar(26);
$currency2 = new Pound(121);
$priceSimulator->addCurrency($currency1);
$priceSimulator->addCurrency($currency2);
echo "<hr />";

$priceSimulator->updatePrice();
echo "<hr />";

$priceSimulator->updatePrice();

