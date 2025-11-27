<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    //$_GET $_POST $_REQUEST
    // echo "<pre>";
    // print_r($_REQUEST);
    // // var_dump($_GET);
    // echo "<pre>";
    if (isset($_GET['submit'])) {
        $fullname = $_GET['fullname'];
        $email = $_GET['email'];
        $phone = $_GET['phone'];

        echo "Fullname: " . $fullname . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Phone: " . $phone . "<br>";
    }

    


    ?>
    <h3>Registration Form</h3>
    <form action="" method="get">
        <input type="text" name="fullname" placeholder="enter full name"><br>
        <input type="email" name="email" placeholder="enter your email"><br>
        <input type="text" name="phone" placeholder="enter enter your phone"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>

    <?php
    // print_r($_GET);
    ?>
</body>

</html>