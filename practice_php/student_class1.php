<?php
    class students{
        private $name;
        private $university;
        private $id;
        function set_name($name){
            $this->name = $name;
        }
        function set_university($university){
            $this->university = $university;
        }
        function set_id($id){
            $this->id = $id;
        }
        function get_name_university(){
            echo "Name: " . $this->name . "<br>" . "University: " . $this->university . "<br>" . "ID: " . $this->id ;
        }
    }
    $studentobj = new students;
    $studentobj->set_name("Md Karimul Islam");
    $studentobj->set_university("Dhaka University of Engineering Technology");
    $studentobj->set_id(12933598);
    $studentobj->get_name_university();
?>