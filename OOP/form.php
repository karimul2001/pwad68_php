<?php include("fileClass.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST["submit"])){
            $info = $_FILES['photo'];
            $obj = new fileClass($info);
            $obj->upload();
        }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="photo">
        <input type="submit" name="submit" value="UPLOAD">
    </form>
</body>
</html>