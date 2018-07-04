<?php
require_once 'DoubleRoomBooking.php';
require_once 'WiFi.php';
require_once 'ExtraBed.php';


$booking = new DoubleRoomBooking();
print 'Description: '. $booking->getDescription() .PHP_EOL . 'Price: ' .$booking->calculatePrice();
echo '<br />';
$booking = new WiFi($booking);
print 'Description: '. $booking->getDescription() .PHP_EOL . 'Price: ' .$booking->calculatePrice();
echo '<br />';
$booking = new ExtraBed($booking);
print 'Description: '. $booking->getDescription() .PHP_EOL . 'Price: ' .$booking->calculatePrice();
echo '<br />';
$booking = new DoubleRoomBooking();
$booking = new ExtraBed($booking);
print 'Description: '. $booking->getDescription() .PHP_EOL . 'Price: ' .$booking->calculatePrice();
echo '<br />';