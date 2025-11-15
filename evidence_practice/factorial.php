<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Factorial</h3>
    <?php 
       if(isset($_REQUEST["submit"])){
           $fact = $_REQUEST['factorial'];

           $x = 1;
           for($i = 1 ; $i <= $fact ; $i++){
            $x *= $i;
           }
           echo "Factorial " . $x;
       }
    
    
    
    
    ?>
    <form action="" method="post">
        <input type="number" name="factorial" placeholder="Enter Your number"><br>
        <input type="submit" value="SUBMIT" name="submit">
    </form>
</body>
</html>