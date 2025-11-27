<?php include_once("db_config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Manufacturer Form</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            height: 30px;
            width: 250px;
        }
    </style>
</head>



<body>
    <form action="" method="post">

        <h3>Insert Manufacturer</h3>
            <!-- <label for="name">Name</label> -->
             Name : <br>
            <input type="text" name="name" id="name"> <br>
            <!-- <label for="address">Address</label> -->
             Address : <br>
            <textarea name="address" cols="21" rows="3"></textarea> <br>
            <!-- <label for="contact_no">Contact Number</label> -->
             Contact : <br>
            <input type="text" name="contact_no" id="contact_no"> <br><br>
 
            <input type="submit" name="submit" value="Submit">
        

        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $address = $_POST['address'];
            $contact_no = $_POST['contact_no'];

            // $sql = "INSERT INTO manufacturer(name, address, contact_no) VALUES('$name', '$address', '$contact_no')";
            // $db->query($sql);
            // echo "<h4>Manufacturer Added Successfully</h4>";
        
            $sql = "CALL manufacture_insert('$name','$address', '$contact_no')";
            $db->query($sql);
            echo "<h4>Manufacturer Added Successfully</h4>";
        }
        ?>
    </form>
    <h1>List of current manufacturer</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php 
            $sql = "SELECT * FROM manufacture";
            $rawData = $db->query($sql);
            while ($row = $rawData->fetch_assoc()):
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['address']?></td>
            <td><a href="manufacture_delete.php?id=<?php echo $row['id']?>">Delete</a></td>
            
        </tr>
        <?php endwhile;?>
    </table>
    <br>
    <button><a href="product_list.php">Show Product List</a></button>
</body>

</html>