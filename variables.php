<?php
    
    /*
        - Prefix with $
        - Starts with a letter or an underscore
        - Can only contain letters, numbers or underscores
        - Case senstitive
    */

    $output = "Hello World !";

    $strVar = "I am a string";
    $intVar = 42;
    $floatVar = 3.14;
    $boolVar = true;

    # Arithmetic 
    $num1 = 10;
    $num2 = 20;
    $sum = $num1 + $num2;

    # Concatenation
    $string1 = "Hello";
    $string2 = "World";

    // METHOD 1
    $greeting1 = $string1." ".$string2." !"; // "Hello World !" 

    // METHOD 2
    $greeting2 = "$string1 $string2 !"; // "Hello World !"

?>