<?php 

    if (isset($_COOKIE["username"])) {
        echo "User ".$_COOKIE["username"]." is set";
    } else {
        echo "User is not set";
    }

    // Updating a cookie
    setcookie("username", "Brad", time()+3600);

    // Deleting a cookie
    setcookie("username", "Brad", time()-3600);

?>