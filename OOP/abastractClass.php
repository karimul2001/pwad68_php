<?php
//abastract class
    abstract class abastractClass{
        public $name;
        public $address;
        public $phone;
        function __construct($name, $address, $phone)
        {
            $this->name = $name;
            $this->address = $address;
            $this->phone = $phone;
        }
        abstract function profile();
    }
//child class
class childClass extends abastractClass{
    function profile(){
        $details = "";
        $details .= "Name: " . $this->name . "<br>";
        $details .= "Address: " . $this->address . "<br>";
        $details .= "Phone: " . $this->phone . "<br><br>";
        return $details;
    }
}
class mahamudul extends abastractClass{
    function profile(){
        $details = "";
        $details .= "Name: " . $this->name . "<br>";
        $details .= "Address: " . $this->address . "<br>";
        $details .= "Phone: " . $this->phone . "<br>";
        return $details;
    }
}
$obj = new childClass("karimul", "Mirpur", "01521459198");
echo $obj->profile();
$obj1 = new mahamudul("Mahamudul", "Airport", "01521459198");
echo $obj1->profile();
?>