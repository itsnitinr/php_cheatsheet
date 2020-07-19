<?php

    /*
        Types of loops:
        - For loop
        - While loop
        - Do while loop
        - For each loop
    */

    # For loop
    for ($i = 0; $i < 10; $i++) {
        echo $i;
        echo "<br>";
    }

    # While loop
    $i = 0; 
    while ($i < 10) {
        echo $i;
        echo "<br>";
        $i++;
    }

    # Do while loop
    $i = 0;
    do {
        echo $i;
        echo "<br>";
        $i++;
    } while($i < 10);

    # For each loop
    $names = ["Nitin", "Sam", "John"];
    foreach($names as $name) {
        echo $name;
        echo "<br>";
    }

    $emails = ["Nitin" => "nitinranganath@gmail.com", "Sam" => "sam@gmail.com", "John" => "john@gmail.com"];
    foreach($emails as $name => $email) {
        echo "$name: $email";
        echo "<br>";
    }

?>