<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Username : </label><br>
        <input type="text" name="user" id=""> <br><br>

        <input type="submit" name="click" id="" value="SUBMIT">
    </form>
    <?php 
    
    if(isset($_REQUEST["click"])){
        extract($_REQUEST);
        $at = "/@/";
        
        if(preg_match($at, $user)){
            if(strlen($user) < 4 || strlen($user) > 8){
                echo "Must be between 4 to 8 charecter <br>";
            }
            else{
                 echo "User Submited <br>";
            }
        }
        else{
            echo "Must use @ in username.<br>";
        }
    }
    
    ?>
</body>
</html>