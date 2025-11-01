<?php
    $number = (float) 55;

    echo $number. "<br>";
    // echo("<br>");

    var_dump($number);

?>

<br>

<?php
    $num = (int) 66.55;
    echo $num. "<br>";

    $num1 = (float) 22.22;
    echo $num1. "<br>";
    var_dump($num1);

?>
<hr>

<?php
 $txt =(bool) "karimul";
 echo $txt . "<br>";
 echo gettype($txt);



?>
<hr>

<?php
    $array = (array) "60";
    echo $array[0]. "<br>";
    //echo $array[1]. "<br>";
    echo gettype($array);

?>