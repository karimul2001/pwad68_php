<?php 
    $foods = ["pasta", "stick", "potato", "fish", "papaya", "sunflower"];
    $food = preg_grep("/^p/", $foods);
    print_r($food);

?>