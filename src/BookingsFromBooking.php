<?php 
namespace Labutalib\BookingComIcsReaderPhp;
/**
 * Summary of BookingComIcsReaderPhp
 */
class BookingsFromBooking 
{
    /**
     * Summary of get_bookings_from_booking_dot_com
     * @param string $ics_file
     * @return array<array>
     */
    public function read_bookings(string $ics_file) {
        // get ics data from booking.com
        $ics        = file_get_contents($ics_file); 
        // split into array of separate bookings
        $bookings   = explode('BEGIN:VEVENT', $ics);
        // remove meta data
        $removed    = array_shift($bookings);
        // extract and format calendar data
        $result = []; 
        foreach($bookings as $booking) {
            // create array elelemts based on separator
            $ical = explode(':', $booking);
            // assemble results in array
            $result[] = [
                'DTSTART'   => date('Y-m-d', strtotime(trim(str_replace('DTEND;VALUE=DATE', '', $ical[1])))),
                'DTEND'     => date('Y-m-d', strtotime(trim(str_replace('UID', '', $ical[2])))),
                'UID'       => trim(str_replace('SUMMARY', '', $ical[3])),
                'SUMMARY'   => trim(str_replace('END', '', $ical[4]))
            ];
        }
        return $result; 
    }
}