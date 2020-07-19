<?php

    # Get current date
    echo date('d');     // Day
    echo date('m');     // Month
    echo date("Y");     // Year in 4 digits
    echo date("y");     // Year in 2 digits
    echo date("d-m-Y");  // Date in date-month-year form
    echo date("m/d/Y");  // Date in month/date/year form

    # Get current time
    echo date("h");     // Hour
    echo date("i");     // Minutes
    echo date("s");     // Seconds
    echo date("a");     // AM or PM

    # Generate UNIX timestamp
    // Time stamp for 15th June 2020 8:15:30
    $timestamp = mktime(8, 15, 30, 6, 15, 2000); 
    // Get date from timestamp 
    echo date("d-m-Y h-i-s-a", $timestamp);

    # String to timestamp
    $specificDate = strtotime("8:30pm June 15 2020");
    $tomorrow = strtotime("Tomorrow");
    $nextMonth = strtotime("Next month");
    $nextFriday = strtotime("Next Friday");
    $twoYearsFromNow = strtotime("+2 years");

?>