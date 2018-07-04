<?php
require_once 'Booking.php';
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 05.07.2018
 * Time: 1:04
 */
class DoubleRoomBooking implements Booking
{
    public function calculatePrice()
    {
        return 40;
    }

    public function getDescription()
    {
        return 'double room';
    }
}