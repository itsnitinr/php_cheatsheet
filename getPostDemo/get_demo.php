<?php
    if (isset($_GET["name"])) {
        // Convert to HTML entities to prevent XSS attacks
        $name = htmlentities($_GET["name"]);
        echo "$name<br>";
    }

    if (isset($_GET["email"])) {
        // Convert to HTML entities to prevent XSS attacks
        $email = htmlentities($_GET["email"]);
        echo "$email<br>";
    }

    // Printing out query strings 
    echo $_SERVER["QUERY_STRING"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP GET Request Demo</title>
</head>
<body>
    <form method="GET" action="get_demo.php">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label><br>
            <input type="email" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>