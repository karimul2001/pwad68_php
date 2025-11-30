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
        $sql = "SELECT * FROM products_list";
        $rowData = $db->query($sql);
        
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Company</th>
        </tr>
        <?php while($row = $rowData->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['Company']; ?></td>
        </tr>
        <?php endwhile;?>
    </table>
    <a href="manufacturer_entry.php">Manufacturer Entry</a>
</body>
</html>