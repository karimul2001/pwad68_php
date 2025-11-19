<?php include_once("db_config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Student Edit</h3>
    <?php
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM students WHERE employeeID='$id'";
        $rawData = $db->query($sql);
        //print_r($rawData);
        $row = $rawData->fetch_object();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        extract($_POST);
       $sql = "UPDATE students SET first_name='$first_name', last_name='$last_name', birthdate='$birthdate', notes='$notes' WHERE employeeID='$id'";

        $db->query($sql);
        header("Location:index.php");
    }

        
    ?>
    <form action="" method="POST">
        <input type="text" name="first_name" placeholder="Enter your first name" value="<?php echo $row->first_name; ?>"><br><br>
        <input type="text" name="last_name" placeholder="Enter your last name" value="<?php echo $row->last_name; ?>"><br><br>
        <input type="date" name="birthdate" placeholder="Enter birthdate" value="<?php echo $row->birthdate; ?>"><br><br>
        <textarea name="notes" id="" value="<?php echo $row->notes; ?>"></textarea><br><br>
        <input type="hidden" name="id" value="<?php echo $id; ?> ">
        <input type="submit" name="submit" value="UPDATE">

    </form><br>
</body>
</html>