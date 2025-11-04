<?php
    class student {
        private $name;
        private $university;

        function set_name($name){
            $this->name = $name;
        }
        function set_university($university){
            $this->university = $university;
        }
        function get_name_university(){
            echo "Name: " . $this->name . "<br>" . "University: " . $this->university;
        }
    }
    $studentObj = new student;
    $studentObj->set_name("Md Karimul Islam");
    $studentObj->set_university("Oxford");


    $studentObj->get_name_university();



?>