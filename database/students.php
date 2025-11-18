<?php include_once("db_config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
            width: 400px;
            height: 30px;
            text-align: center;
        }
    </style>
</head>

<?php 
   $sql = "SELECT * FROM students ORDER BY employeeID desc";
    $result = $db->query($sql);
    // $row = $result->fetch_assoc();
    // $row1 = $result->fetch_array();
   
    

//    echo $row1["employeeID"];
//    echo $row1["first_name"];

  


?>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Birthdate</th>
            
            
        </tr>
        <?php
            while ($row2 = $result->fetch_object()): //{
        ?>
        <tr>
            <td><?php echo $row2->employeeID;?></td>
            <td><?php  echo $row2->first_name;?></td>
            <td><?php  echo $row2->last_name;?></td>
            <td><?php  echo $row2->birthdate;?></td>
            
            
           
        </tr>
        <?php endwhile; // }
        
        ?>
    </table><br>

    <a href="student_entry.php">Sutdent Entry</a>
</body>
</html>