<?php
    global $mysqli;
    
    $mysqli = new mysqli("localhost", "root", "", "ecomm_db");

    // Check connection
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
?>
