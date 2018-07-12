<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 12.07.2018
 * Time: 23:40
 */
class PrintCar
{
    private $car;

    public function __construct(UKCarI $car)
    {
        $this->car = $car;
    }

    public function printSide()
    {
        echo "Side: ".$this->car->side(). "<br />";
    }

    public function printFounder()
    {
        echo "Founder: ". $this->car->queen() . "<br />";
    }
}