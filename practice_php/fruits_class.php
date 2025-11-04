<?php
    class Fruits {
        public $name;
        public $color;
    }

    $obj1 = new Fruits;
    $obj1->name = "Apple";
    $obj1->color = "Red";
    $obj1->condition = "Good";
    $obj1->import = "Italy";
    
    $obj2 = new Fruits;
    $obj2->name = "Mango";
    $obj2->color = "Green";

    $obj3 = new Fruits;
    $obj3->name = "Banana";
    $obj3->color = "Yellow";
    echo "<pre>";
    var_dump($obj1, $obj2, $obj3);
    //echo "<br>";
    // var_dump($obj2);
    // var_dump($obj3);



?>