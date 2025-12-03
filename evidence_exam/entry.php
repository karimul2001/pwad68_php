<?php include_once("db_config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Manufacturer Entry From</h3>
    <form action="" method="post">
    Name: <br>
    <input type="text" name="name"><br>
    Address: <br>
    <textarea name="address" id=""></textarea><br>
    Contant: <br>
    <input type="number" name="contact_no"><br><br>
    <input type="submit" name="submit" value="INSERT DATA">
    </form><br>

</body>
<?php
    if(isset($_REQUEST["submit"])){
        $name = $_REQUEST['name'];
        $address = $_REQUEST['address'];
        $contact = $_REQUEST['contact_no'];
         $sql = "CALL AddManufacturer('$name', '$address', '$contact')";
        $db->query($sql);
        if ($db->affected_rows) {
            echo "Manufacturer Added Successfully.";
        } else {
            echo "Error adding Manufacturer.";
        }
    }
?>
<a href="product_list.php">Product list</a>
</html>