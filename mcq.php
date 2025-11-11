<?php
  // $x=2;
  // $y=$x++;
  // $y=$y+2;
  // echo $y;

?>

<hr>
<?php
  //  $i = 0;
  //  while ($i<=10) {
  //   if ($i<=5){
  //       break;
  //   }
  //   print $i ;
  //   $i = $i+2;
  //  }
?>

<hr>
<?php
    // $x = "123";
    // echo (is_string($x));

?>
<hr>
<?php
  //  define("x","5");
  //  $x = x+10;
  //  echo x;
?>
<hr>
<?php
  // $array = array(true => 'a', 1 => "b");
  // echo "<pre>";
  // var_dump($array);
?>
<hr>
<?php
  // function a($b, $c){
  //   $b= 10;
  //   $c = 20;
  //   $d = $b+$c;
  //   print $d;
  // }
  // a(30, 40);
?>
<hr>
<?php
  function myFunction(){
    $x = 5;
    echo "Result1: $x,";
  }
  myFunction();
  echo "Result2: $x";
?>
<hr>
<?php
  $z = array(1,3,2,3,7,8,9,7,3);
  $y = array_count_values($z);
  echo $y[8];
?>