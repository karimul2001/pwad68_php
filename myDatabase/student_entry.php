<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Student Entry Form</h3>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="enter name"><br>
        <input type="email" name="email" placeholder="enter email"><br>
        <input type="number" name="phone" placeholder="enter phone"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form><br>
    <a href="students.php">Student List</a>
    <?php
    if(isset($_POST["submit"])){
        extract($_POST);
        $sql = "INSERT INTO students VALUES (NULL, '$name', '$email', '$phone')";
             include_once("db_config.php");
             $db->query($sql);
             if($db->affected_rows){
                echo "Inserted";
             }
    }

?>
</body>
</html>