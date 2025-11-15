<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Prime Number</h2>
    <?php
        if(isset($_REQUEST["submit"])){
            $prime = $_REQUEST['prime'];
            if($prime==1){
                echo $prime . " is not a prime number";
                
            }
            if($prime==2){
                echo $prime . " is a prime number";
               
            }
            $output;
           if($prime>2){
            for($i = 2; $i < $prime; $i++){
                if($prime % $i == 0){
                    $output = $prime . " is not a prime number";
                    break;
                }else{
                    $output = $prime . " is a prime number";
                }
                
            }

           }
           echo $output;
           
           
        }

    ?>
    <form action="" method="get">
        <input type="number" name="prime" placeholder="Enter your number"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>