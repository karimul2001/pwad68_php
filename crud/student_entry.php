<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>New Student Entry</h3>
    

    <?php 
        if(isset($_POST["submit"])){
            
            // $fname = $_REQUEST['first_name'];
            // $lname = $_REQUEST['last_name'];
            // $date = $_REQUEST['birthdate'];

            // echo $id . $fname;

             extract($_POST);
             $sql = "INSERT INTO students VALUES (NULL, '$first_name', '$last_name', '$birthdate', '$notes')";
             include_once("db_config.php");
             $db->query($sql);
             if($db->affected_rows){
                echo "Inserted";
             }
              
        }
       

    ?>

    <form action="" method="POST">
        <input type="text" name="first_name" placeholder="Enter your first name"><br><br>
        <input type="text" name="last_name" placeholder="Enter your last name"><br><br>
        <input type="date" name="birthdate" placeholder="Enter birthdate"><br><br>
        <textarea name="notes" id=""></textarea><br><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form><br>
    <a href="index.php">Student List</a>
</body>
</html>