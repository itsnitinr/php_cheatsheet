<?php
    session_start();
    $name = isset($_SESSION["name"]) ? $_SESSION["name"] : "Guest";
    $email = isset($_SESSION["email"]) ? $_SESSION["email"]: "Not subscribed";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <h5>Thank you, <?php echo $name; ?>, you have subscribed with the email <?php echo $email; ?></h5>
    <a href="page3.php">Logout</a>
</body>
</html>