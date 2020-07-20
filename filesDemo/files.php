<?php 

    $path = "/dir0/dir1/myfile.php";
    $file = "file1.txt";

    // Return filename with extension
    echo basename($path);   // myfile.php

    // Return filename without extension
    echo basename($path, ".php");   // myfile

    // Return directory name
    echo dirname($path);    // /dir0/dir1

    // Check if a file or folder exists
    echo file_exists("file1.txt");  // 1

    // Return absolute path
    echo realpath($file);   // /opt/lampp/htdocs/php_cheatsheet/filesDemo/file1.txt

    // Check if a file exists
    echo is_file($file);    // 1

    // Check if file is writable
    echo is_writable($file);    // 1

    // Check if file is readable
    echo is_readable($file);    // 1    

    // Return file size
    echo filesize($file);   // 14

    // Create a directory
    mkdir("testing");

    // Delete an empty directory 
    rmdir("testing");

    // Copy a file
    echo copy("file1.txt", "file2.txt");

    // Rename a file
    rename("file2.txt", "myfile.txt");

    // Delete a file
    unlink("myfile.txt");

    // Read from file to string
    echo file_get_contents("file1.txt");

    // Write string to file (replaces all the content)
    echo file_put_contents($file, "Goodbye world!");

    // Append string to file
    $current = file_get_contents($file);
    $current .= " Goodbye world!";
    file_put_contents($file, $current);

    // Open file and store in variable 
    $handle = fopen($file, "r");
    $data = fread($handle, filesize($file));
    fclose($handle);
    echo $data;

    // Write to file using variable
    $handle = fopen("file2.txt", "w");
    $txt = "Hello world!\n";
    fwrite($handle, $txt);
    $txt = "Goodbye world!\n";
    fwrite($handle, $txt);
    fclose($handle);

?>