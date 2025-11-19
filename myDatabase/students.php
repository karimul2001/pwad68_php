<?php include_once("db_config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collspe: collspe;
        }
    </style>
</head>

    <?php
        $sql = "SELECT * FROM students";
        $results = $db->query($sql);
        
    ?>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php while ($row = $results->fetch_assoc()){  ?>
        <tr>
            <td><?php echo $row['id'];  ?> </td>
            <td><?php echo $row['name'];  ?> </td>
            <td><?php echo $row['email'];  ?> </td>
            <td><?php  echo $row['phone'];  ?> </td>
            
        </tr>
        <?php } ?>
    </table>
    <a href="student_entry.php">Student Entry</a>
</body>
</html>