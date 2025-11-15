<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Identify Prime Number</h3>
    <?php 
    if(isset($_REQUEST["submit"])){
        $number = $_REQUEST['prime'];
        if($number==1){
            echo $number . " is not a prime number";
        }
        if($number==2){
            echo $number . " is a prime number";
        }
        $output;
        if($number>2){
            for($i = 2 ; $i < $number; $i++){
                if($number % $i == 0){
                    $output = $number . " is not a prime number";
                    break;
                }else{
                    $output = $number . " is a prime number";
                }
            }
        }
        echo $output;
    }


    ?>



    <form action="" method="post">
        <input type="number" name="prime"><br>
        <input type="submit" name="submit" value="Check Prime">
    </form>
</body>
</html>