<?php
    class car{
        public $name;
        public $brand;
        public $color;
        function __construct($name, $brand, $color){
            $this->name = $name;
            $this->brand = $brand;
            $this->color = $color;
        }
        function intro(){
            echo "This car is {$this->name} and its color is {$this->color} and the brand is {$this->brand}.<br>";
        }
        function __destruct(){
            echo "The car is {$this->car} finished . Bye Bye !. <br>";
        }
    }

    $carObj = new car("BMW", "BMW", "Black");
    $carObj->intro();



?>