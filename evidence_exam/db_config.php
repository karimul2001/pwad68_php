<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "company";
    $db = new mysqli($host, $user, $pass, $database);
    if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
    }
?>