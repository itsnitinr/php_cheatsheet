<?php

    /*
        3 types of arrays:
        - Indexed
        - Associative
        - Multi dimensional
    */

    # Indexed arrays
    $numbers = array("One", "Two", "Three");
    $ids = [1, 2, 3];

    // Pushing to an array
    $ids[] = 4; 
    $ids[4] = 5;

    // Count function
    count($numbers);

    // Printing the whole array
    print_r($ids);

    // Check datatype
    var_dump($numbers);

    # Associative arrays 
    $people = array("Nitin" => 1, "Tom" => 2, "Sam" => 3);
    echo $people["Nitin"]; // 1

    // Pushing to an associative array
    $people["Harry"] = 4;

    # Multi dimensional array
    $marks = array(
        array("English", 90, 100),
        array("Maths", 75, 100),
        array("Science", 85, 100)
    );
    echo $marks[2][1]; // 85

?>