<?php

    $num = 15;

    # If - elseif - else
    if ($num < 10) {
        echo "Less than 10<br>";
    } elseif ($num >= 10 AND $num <=20) {
        echo "Between 10 and 20<br>";
    } else {
        echo "Greater than 20<br>";
    }

    /*
        == checks for the value only
        === checks for value as well as type
        10 == "10"  -> true
        10 === "10" -> false
        AND can be used in place of &&
        OR can be used in place of ||
    */

    # Switch case
    switch ($num) {
        case $num < 10:
            echo "Less than 10<br>";
            break;
        case $num >= 10 && $num <= 20:
            echo "Between 10 and 20<br>";
            break;
        case $num > 20:
            echo "Greater than 20<br>";
            break;
        default:
            echo "Something else";       
    }


?>