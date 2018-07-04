<?php
require_once 'BookingDecorator.php';
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 05.07.2018
 * Time: 1:05
 */
class ExtraBed extends BookingDecorator
{
    const Price = 30;
    public function getDescription()
    {
        return $this->booking->getDescription() . ' + Extra bed';
    }
    public function calculatePrice()
    {
        return $this->booking->calculatePrice() + self::Price;
    }
}