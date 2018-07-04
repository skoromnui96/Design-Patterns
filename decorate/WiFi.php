<?php
require_once 'BookingDecorator.php';
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 05.07.2018
 * Time: 1:08
 */
class WiFi extends BookingDecorator
{
    const Price = 40;
    public function getDescription()
    {
        return $this->booking->getDescription() . ' + WiFi';
    }
    public function calculatePrice()
    {
        return $this->booking->calculatePrice() + self::Price;
    }
}