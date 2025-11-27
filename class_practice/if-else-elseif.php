<?php

$x = 22;

if ($x % 2 == 0) {
    echo $x . " is an even number";
} else {
    echo $x . " is an odd number";
}

?><br>

<?php
$x = 90;

if ($x >= 80) {
    echo $x . " Excellect";
} elseif ($x >= 70) {
    echo $x . " Good";
} elseif ($x >= 50) {
    echo $x . " Normal";
} else {
    echo $x . " bad";
}

?> <br>

<?php

for ($n = 1; $n <= 10; $n++) {
    echo "Number: $n <br>";
}



?>