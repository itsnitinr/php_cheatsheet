<?php 

    // Check for data
    if (filter_has_var(INPUT_POST, "data")) {
        echo "Data found<br>";
    } else {
        echo "No data<br>";
    }

    // Email sanitization and validation
    if (filter_has_var(INPUT_POST, "data")) {
        $email  = $_POST["data"];
        // Remove illegal chars
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        // Validate email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Valid email<br>";
        } else {
            echo "Invalid email<br>";
        }
    }

    // Number sanitization and validation
    $var = "53yt2yuh435uu4h5buk34";
    $var = filter_var($var, FILTER_SANITIZE_NUMBER_INT);
    if (filter_var($var, FILTER_VALIDATE_INT)) {
        echo "$var is a number";
    } else {
        echo "$var is not a number";
    }

    // Sanitizing spl chars
    $var = "<script?>alert(1)</script>"
    $var = filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);

    // Multiple filters using an array
    $filters = array(
        "data" => FILTER_VALIDATE_EMAIL,
        "data2" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 100
            )
        )
    )

    // Another example
    $formData = array(
        "name" => "Nitin Ranganath",
        "age" => 20,
        "email" => "nitinranganath@gmail.com"
    );

    $formFilters = array(
        "name" => array(
            "filter" => FILTER_CALLBACK,
            "options" => "ucwords"
        ),
        "age" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range": 1,
                "max_range": 100
            )
        ),
        "email" => FILTER_VALIDATE_EMAIL
    )

    print_r(filter_var_array($formData, $formFilters));

?>

<form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>