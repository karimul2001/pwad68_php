<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>File Upload Using Procedural Coading</h3>

    <?php
            //echo "<pre>";
        if(isset($_REQUEST['upload'])){
            // print_r($_FILES);
            // echo $_FILES['myfile']['name'];
            // echo "<br>";
            // echo $_FILES['myfile']['type'];
            // echo "<br>";
            // echo $_FILES['myfile']['full_path'];
            // echo "<br>";
            // echo $_FILES['myfile']['size'];
            $filename =  $_FILES['myfile']['name'];
            $destination = "files/" . $filename;

            $tmpfile = $_FILES['myfile']['tmp_name'];
            $filesize = $_FILES['myfile']['size']; //Byte
            $maxSize = 576; //1MB
            $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            $allowedTypes = ["jpg", "jpeg", "png"];
            $errors = [];
               echo "<br>";
            if($filesize > $maxSize){
                $errors[] = "File is too large";
            } 
            if(!in_array($ext, $allowedTypes)){
                $errors[] = "jpg, png and jpeg is allowed";
            }
            //print_r($errors);
            if(count($errors)>0){
                foreach($errors as $errors){
                    echo $errors . "<br>";
                }

            } else{
                  move_uploaded_file($tmpfile, $destination);
                 echo "Uploaded Successful";
            }


               
           
            
        }


    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="myfile"><br><br>
        <input type="submit" value="UPLOAD" name="upload">

    </form>
</body>
</html>