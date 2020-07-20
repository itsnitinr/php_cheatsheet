<?php

    // Messages
    $msg = "";
    $msgClass = "";

    // Check for submit
    if (filter_has_var(INPUT_POST, "submit")) {
        // Get form data
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $message = htmlspecialchars($_POST["message"]);

        // Check required fields
        if (!empty($name) && !empty($email) && !empty($message)) {
            // Check email
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $msg = "Invalid email";
                $msgClass = "alert-danger";
            } else {
                // Send email
                $toMail = "nitinranganath@gmail.com";
                $subject = "Contact Request from $name";
                $body = "<h2>Contact Request</h2>
                    <h4>Name</h4><p>$name</p>
                    <h4>Email</h4><p>$email</p>
                    <h4>Message</h4><p>$message</p>
                ";
                $headers = "MIME-Version: 1.0"."\r\n";
                $headers .= "Content-Type:text/email;charset=UTF-8"."\r\n";
                $headers .= "From: $name <$email>"."\r\n";
                
                if (mail($toMail, $subject, $body, $headers)) {
                    $msg = "Email sent";
                    $msgClass = "alert-success";
                } else {
                    $msg = "Your email was not sent";
                    $msgClass = "alert-danger";
                }
            }
        } else {
            $msg = "Please fill in all the fields";
            $msgClass = "alert-danger";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
    <title>Contact Us</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
        
        <!-- Displaying alert messages -->
        <?php if ($msg != ""): ?>
            <div class="alert <?php echo $msgClass; ?>">
                <?php echo $msg; ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST["name"]) ? $name : ""; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST["email"]) ? $email : ""; ?>">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control" value="<?php echo isset($_POST["message"]) ? $message : ""; ?>"></textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>