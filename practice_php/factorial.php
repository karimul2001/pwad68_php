<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Factorial</h2>
    <?php
    
        if (isset($_REQUEST['submit'])){
            $fact = $_REQUEST['fact'];
        
        
        $x = 1;
        for($i = 1 ; $i<= $fact; $i++){
            $x *= $i;

            
        }
        echo $fact . " Factorial: " . $x;
    }
    

     ?>

     <form action="">
        <input type="number" name="fact" placeholder="Enter your number"> <br>
        <input type="submit" name="submit" value="Check">
     </form>
     
</body>
</html>