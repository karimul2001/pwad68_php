<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Find Results</h3>
    <?php
        
        if(isset($_REQUEST["search"])){
            $student_id = $_REQUEST['student_id'];
            //echo $student_id;
            include("resultsClass.php");

            $sheet = new student("results_sheet.txt");
           $results = $sheet->result($student_id);
           echo $results;
        }
    ?>


    <form action="" method="post">
        <input type="number" name="student_id"><br><br>
        <input type="submit" name="search" value="SEARCH">
    </form>
</body>
</html>