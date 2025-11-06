<?php
    abstract class students{
        public $name;
        public $address;
        public $phone;
        public $email;
        function __construct($name, $address, $phone, $email){
            $this->name = $name;
            $this->address = $address;
            $this->phone = $phone;
            $this->email = $email;
        }
        abstract function porfile();
    }
    class karimul extends students{
        function porfile(){
            $details = "";
            $details .= "Name: " . $this->name . "<br>";
            $details .= "Address: " . $this->address . "<br>";
            $details .= "Phone: " . $this->phone . "<br>";
            $details .= "Email: " . $this->email . "<br>";
            return $details;
        }
    }
    class akash extends students{
        function porfile(){
            $details = "";
            $details .= "Name: " . $this->name . "<br>";
            $details .= "Address: " . $this->address . "<br>";
            $details .= "Phone: " . $this->phone . "<br>";
            $details .= "Email: " . $this->email . "<br>";
            return $details;
        }
    }
    $obj = new karimul("Md Karimul Islam", "Jhenaidah", "01521459198", "kariml.bd501@gmail.com");
    echo $obj->porfile();
    echo "<br>";
    $obj1 = new akash("Neloy Ahamed", "Jhenaidah", "01521459198", "neloy1@gmail.com");
    echo $obj1->porfile();
?>