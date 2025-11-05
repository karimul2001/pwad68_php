<?php
    class Goodbye{
        const MY_MESSAGE = "We are learning php oop.<br>";
        const MY_MESSAGE2 = "We are about constant using opp.";

        function Info(){
            self::MY_MESSAGE2;
        }
    } //end class

    echo  Goodbye::MY_MESSAGE;

   $obj = new Goodbye;
   $obj->Info();


?>