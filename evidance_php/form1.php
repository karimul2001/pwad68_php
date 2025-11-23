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
        $studentId = $_REQUEST['student_id'];
        //include ("resultsClass1.php");
        include ("resultsClass1.php");

        // $sheet = new student("results_sheet1.txt");
        // $results = $sheet->result($student_id);
        // echo $results;

        $sheet = new student("results_sheet1.txt");
        $results = $sheet->result($studentId);
        echo $results;
    }


    ?>




    <form action="" method="post">
        <input type="number" name="student_id"><br><br>
        <input type="submit" name="search" value="SEARCH">
    </form>
</body>
</html>