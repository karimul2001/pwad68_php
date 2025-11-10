<?php
  $x=2;
  $y=$x++;
  $y=$y+2;
  echo $y;

?>

<hr>
<?php
   $i = 0;
   while ($i<=10) {
    if ($i<=5){
        break;
    }
    print $i ;
    $i = $i+2;
   }
?>

<hr>
<?php
    $x = "123";
    echo (is_string($x));

?>
<hr>
<?php
   define("x","5");
   $x = x+10;
   echo x;
?>