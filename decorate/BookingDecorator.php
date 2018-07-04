<?php

/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 05.07.2018
 * Time: 1:02
 */
abstract class BookingDecorator implements Booking
{
    protected $booking;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }

}