<?php
    class students{
        private $name;
        private $age;
        //setter function
        function set_name($name){
            $this->name = $name;
        }
        //setter function
        function set_age($age){
            $this->age = $age;
        }
        //getter fucnction
        function get_name_age(){
            echo "Name: " . $this->name . "<br>" . "Age: " . $this->age;
        }
    }
    $studentobj = new students;
    $studentobj->set_name("Karimul");
    $studentobj->set_age("25");


    $studentobj->get_name_age();




?>