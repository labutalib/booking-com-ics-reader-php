<?php
require('../src/BookingsFromBooking.php');

use Labutalib\BookingComIcsReaderPhp\BookingsFromBooking; 

$booking = new BookingsFromBooking; 

$bookings = $booking->read_bookings('example.ics');
var_dump($bookings); 

