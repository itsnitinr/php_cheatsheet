<?php

    // Setting more than 1 cookie
    $user = [
        "name" => "Nitin Ranganath",
        "age" => 20,
        "email" => "nitinranganath@gmail.com"
    ];
    $user = serialize($user);
    setcookie("user", $user, time()+3600);
    $user = unserialize($_COOKIE["user"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookies</title>
</head>
<body>
    <h1>Current User Data using Cookies: </h1>
    <h3>Name: <?php echo $user["name"]; ?></h3>
    <h3>Age: <?php echo $user["age"]; ?></h3>
    <h3>Email: <?php echo $user["email"]; ?></h3>
</body>
</html>