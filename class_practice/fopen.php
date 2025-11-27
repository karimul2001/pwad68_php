<?php
   $fh = fopen("student1.txt", "a");

//    //file close
//    fclose($fh);
fwrite($fh, "Hello Karimul, How are you?\n");

   $fh = fopen("student1.txt", "r");
   while(!feof($fh)){
    echo fgets($fh) . "<br>";
   }
fclose($fh);










?>