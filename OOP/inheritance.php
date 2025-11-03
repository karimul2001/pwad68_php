<?php
    class Fruits {
        public $name;
        public $color;

        function __construct($name, $color)
        {
           $this->name = $name;
           $this->color = $color;
        }

        function info(){
            echo "Name: " . $this->name . "<br>" . " Color: " . $this->color . "<br>";
        }
    }
    class Date extends Fruits{
        function message(){
            echo "I am a function inside Date class";
        }
    }

    $obj1 = new  Fruits("Date", "Gray");
    $obj1->info();

    $obj2 = new Date("Orange", "Yellow");
    $obj2->info();
    $obj2->message();




?>