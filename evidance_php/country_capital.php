<?php
    // Numeric index array
    $array = ["Bangladesh", "Australia", "Qutar", "India", "Afgansthan"];

   $countries = ["Bangladesh" => "Dhaka", "India" => "Dilli", "Afganshtan" => "Kabul", "Pakistan" => "Islamabad"];
    
   ksort($countries);
    foreach($cocutries as $key => $ar){
        $output = $ar;
        echo $output;
    }
    
    

//    print_r($ar);


?>