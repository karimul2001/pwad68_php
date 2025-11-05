<?php
    $data = file("users.txt");
    // 
    
   foreach($data as $line){
    //echo $line . "<br>";
    list($name, $email) = $info = explode(" ", $line);
    // echo "<pre>";
    // print_r($info);
    echo "Name: $name" . "<br>" . "Email: $email" . "<br><br>";
   }





?>