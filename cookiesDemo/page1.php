<?php

    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        // Set a cookie that expires in 1 hour
        setcookie("username", $username, time()+3600);
        header("Location: page2.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="text" name="username" placeholder="Enter Name: ">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>