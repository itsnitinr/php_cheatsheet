<?php 
    if (isset($_POST["name"])) {
        $name = htmlentities($_POST["name"]);
        echo "$name<br>";
    }

    if (isset($_POST["email"])) {
        $email = htmlentities($_POST["email"]);
        echo "$email<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Post Request Demo</title>
</head>
<body>
    <form method="POST" action="post_demo.php">
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