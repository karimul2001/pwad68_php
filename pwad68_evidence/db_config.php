<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "evidence";

$db = new mysqli($host, $user, $pass, $db);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>