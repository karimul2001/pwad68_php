<?php
    class student{
        public $file;
        function __construct($file)
        {
            $this->file = $file;
        }

        function result($stdID){
            $data = file($this->file);
            foreach($data as $line){
                list ($id, $name, $batch, $result) = explode(" ", $line);
                if($stdID == $id){
                    echo $id . ", " . $name . ", " . $batch . ", " . $result;
                }
            }
        }
    }
?>