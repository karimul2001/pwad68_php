<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Find Result</h3>
    <?php

    if(isset($_REQUEST["submit"])){
        $output = $_REQUEST['student_id'];
        
        include ("resultClass.php");
        
         $sheet = new student("resutls.txt");
           $results = $sheet->result($output);
           echo $results;
    }


?>

<form action="" method="post">
    <input type="number" name="student_id"><br><br>
    <input type="submit" name="submit" value="SREARCH">
</form>
</body>
</html>