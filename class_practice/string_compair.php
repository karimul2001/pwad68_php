<?php 
    $pass = "supersecret2";
    $pass2 = "supersecret2";
    //echo ($pass, $pass2);
    if (strcmp($pass, $pass2) == -1){
        echo "Password do not match!";
    } else {
        echo "Password match!";
    }
?>