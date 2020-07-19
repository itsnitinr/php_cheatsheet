<?php 
    if (isset($_GET["name"])) {
        $name = htmlentities($_GET["name"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Query String Demo</title>
</head>
<body>
    <ul>
        <li><a href="query_string.php?name=Nitin">Nitin</a></li>
        <li><a href="query_string.php?name=Brad">Brad</a></li>
    </ul>
    <?php if (isset($name)): ?>
        <?php echo "$name's Profile" ?>
    <?php endif; ?>
</body>
</html>