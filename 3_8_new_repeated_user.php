<?php

if (isset($_COOKIE['visited'])) {

    echo "<h2>Welcome Back!</h2>";
    echo "You are a repeated user.";

} else {

    // Create cookie for 30 days
    setcookie("visited", "yes", time() + (30 * 24 * 60 * 60));

    echo "<h2>Welcome!</h2>";
    echo "You are a new user.";
}

?>