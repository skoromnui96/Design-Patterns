<?php
require_once "Currency.php";
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 04.07.2018
 * Time: 0:31
 */
class Dollar implements Currency
{
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
        echo "<p>Dollar original Price:". $price;
    }
    public function update()
    {
        $this->price = $this->getPrice();
        echo "<p>Dollar updated Price:". $this->price;
    }
    public function getPrice()
    {
        return rand(25.92, 26.50);
    }
}