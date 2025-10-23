<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Largest number Check</h3>

    <?php
    $arr = [5, 7, 252, 13, 15];

    $largest = $arr[0];
    for ($i = 1; count($arr) > $i; $i++) {
        if ($largest < $arr[$i]) {
            $largest = $arr[$i];
        }
    }
    echo $largest;


    ?>
</body>

</html>