<?php 

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "pwad68_test1";

   $db = new mysqli($host, $user, $password, $database);

   if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
   }
   //echo "Connect successfully";
   
   //$db->close();
?>