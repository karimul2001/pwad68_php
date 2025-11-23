<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Result Form</h3>
    <form action="" method="post">
        <input type="text" name="studentId"><br>
        <input type="submit" name="click" value="Check Result">
    </form><br>
    <?php
        if(isset($_REQUEST["click"])){
            $student_id = $_REQUEST['studentId'];
            include("student_class.php");

            $sheet = new student("result_sheet.txt");
            $results = $sheet->result($student_id);
            echo $results;
        }
    ?>
</body>
</html>