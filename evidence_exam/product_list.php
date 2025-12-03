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
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h3>Product List</h3>
    <?php
        $sql = "SELECT * FROM manufacturer";
        $rowData = $db->query($sql);
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>contact</th>
        </tr>
        <?php while($row = $rowData->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['contact_no']; ?></td>
            <td><a href="manufecturer_delete.php">Delete</a></td>
        </tr>
        <?php endwhile;?>
    </table>

    <a href="entry.php">Manufacturer Entry</a>
</body>
</html>
