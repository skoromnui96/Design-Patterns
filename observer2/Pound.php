<?php

require_once "Currency.php";
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 04.07.2018
 * Time: 0:27
 */
class Pound implements Currency
{
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
        echo "<p>Pound original Price:". $price;
    }
    public function update()
    {
        $this->price = $this->getPrice();
        echo "<p>Pound updated Price:". $this->price;
    }
    public function getPrice()
    {
        return rand(120.52, 122.50);
    }
}