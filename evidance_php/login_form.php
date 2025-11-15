<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Login Form</h3>
    
    <form action="" method="post">
        Userame:
        <input type="text" name="username" placeholder="enter your name"><br><br>
        Email:
        <input type="email" name="email" placeholder="enter your email"><br><br>
        <input type="submit" name="submit" value="Login">
    </form>

    <?php 
    if(isset($_REQUEST["submit"])){
        $name = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        if(strlen($name)<4 || strlen($name)>8){
            echo "your name must be 4 to 8 digit" . "<br>";
        }else{
            echo "Name: " . $name . "<br>";
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
           echo "Email is not valid";
        }else{
            echo "Email: " . $email ;
        }
        
    }



    ?>
</body>
</html>