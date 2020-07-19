<?php

    // Without params
    function greet() {
        echo "Hello World !<br>";
    }
    greet();

    // With params
    function sayHi($name) {
        echo "Hi $name<br>";
    }
    sayHi("Nitin");

    // With default
    function sayHello($name = "User") {
        echo "Hello $name<br>";
    }
    sayHello(); // "Hello User"

    // With return 
    function getSum($num1, $num2) {
        return $num1 + $num2;
    }
    echo getSum(2,3);

    // Pass by value
    function addByValue($num) {
        $num += 5;
    }
    $num = 10;
    addByValue($num);
    echo $num; // 10

    // Pass by reference
    function addByReference(&$num) {
        $num += 5;
    }
    $num = 10;
    addByReference($num);
    echo $num; // 15

?>