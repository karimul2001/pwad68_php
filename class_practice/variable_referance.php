<?php
$value1 = "Hello World";
$value2 = &$value1;

$value2 = "We are using PHP";
echo $value1;
echo "<br>";
echo "<hr>";

$value3 = "Karimul Islam";
$value4 = &$value3;
$value4 = "Welcome to our ****";
echo $value3;
