<?php

    // @desc:   Returns a portion of a string
    // @params: String, starting index, no. of chars to extract 
    $substrVar = substr("Hello", 1, 3);
    echo $substrVar; // "ell"
    $substrVar2 = substr("Hello", 2);
    echo $substrVar2; // "llo"

    // @desc:   Returns length of the string
    // @params: String
    $strlenVar = strlen("Hello World");
    echo $strlenVar; // 11

    // @desc:   Returns the position of first occurence of given substring
    // @params: String, substring
    $strposVar = strpos("Hello World", "o");
    echo $strposVar; // 4

    // @desc:   Returns the position of last occurence of given substring
    // @params: String, substring
    $strrposVar = strrpos("Hello World", "o");
    echo $strrposVar; // 7

    // @desc:   Strips whitespace
    // @params: String
    $text = "Hello               ";
    $trimmed = trim($text);
    echo $trimmed; // "Hello"

    // @desc:   Make everything uppercase
    // @params: String
    $strToUpperVar = strtoupper("hello world");
    echo $strToUpperVar; // "HELLO WORLD"

    // @desc:   Make everything lowercase
    // @params: String
    $strToLowerVar = strtolower("HELLO WORLD");
    echo $strToLowerVar; // "hello world"

    // @desc:   Capitalise each word
    // @params: String
    $ucWordsVar = ucwords("hello world");
    echo $ucWordsVar; // "Hello World"

    // @desc:   Replace a part of the string with given tex
    // @params: Text to be replace, text to be replaced with, string
    $text = "Hello World";
    $strReplaceVar = str_replace("World", "Everyone", $text);
    echo $strReplaceVar; // "Hello Everyone"

    // @desc:   Checks if the input is a string
    // @params: Any input
    $isStringVar1 = is_string("Hello");
    echo $isStringVar1; // 1
    $isStringVar2 = is_string(22);
    echo $isStringVar2; //

    // @desc:   Compress a string
    // @params: String
    $compressed = gzcompress("Lorem ipsum dolor amet");
    echo $compressed; // Random unreadable gibberish

    // @desc:   Uncompress a string
    // @params: Compressed string
    $original = gzuncompress($compressed);
    echo $original; // "Lorem ipsum dolor amet"

?>