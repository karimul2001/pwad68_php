<?php include_once("db_config1.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<?php
    $sql = "SELECT * FROM students";
    $results = $db->query($sql);
  
?>
<body>
    <h3>Student Information Table</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Country</th>
        </tr>
        <?php while($row = $results->fetch_object()){  ?>
        <tr>
            <td><?php echo $row->id; ?></td>
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->email; ?></td>
            <td><?php echo $row->dateofbirth; ?></td>
            <td><?php echo $row->country; ?></td>
        </tr>
        <?php } ?>
    </table>
    <a href="student_entry1.php">Student Entry</a>
</body>
</html>