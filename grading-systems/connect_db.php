<?php
    // Create connection
    $conn = new mysqli($servername = "localhost", $username = "root", $password = "", $dbname = "stud_info");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
?>