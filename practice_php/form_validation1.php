<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h2>Form Validation</h2>
    <?php
    if(isset($_REQUEST["submit"])){
        $name = "";
        $email = "";
        $skill_output = "";
        $lang_output = "";
        $errors = [];
        //name
        if(!isset($_REQUEST["name"])|| $_REQUEST["name"] ==""){
            $errors[] = "You must enter name";
        } else {
            $name = $_REQUEST['name'];
        }
        //email
        if(!isset($_REQUEST["email"])|| $_REQUEST["email"] ==""){
            $errors[] = "You Must enter email";
        } else {
            $email = $_REQUEST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Email is not valid";
            }
        }
        //skills
        if(!isset($_REQUEST["skills"])){
            $errors[] = "You must three select";
        } else {
            $skills = $_REQUEST['skills'];
            foreach($skills as $skill){
                $skill_output .= $skill . ",";
            }
        }
        if(!isset($_REQUEST["language"])){
            $errors[] = "You must selet one language";
        } else {
            $language = $_REQUEST['language'];
            foreach($language as $lang){
                $lang_output .= $lang . ",";
            }
        }

        if(count($errors) != 0){
            // print_r($errors);
           echo "<ul>";
            foreach ($errors as $err){
                echo "<li>" . $err . "</li>";
            }
            echo "</ul>";
        }
        else{
?>
    <table>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td>Skills</td>
            <td><?php echo $skill_output; ?></td>
        </tr>
        <tr>
            <td>Languages</td>
            <td><?php echo $lang_output; ?></td>
        </tr>
    </table>
    <?php
        }
    }
    ?>
    <form action="" method="POST">
        <label for="">Name:</label><br>
        <input type="text" name="name"><br><br>
        <label for="">Email:</label><br>
        <input type="email" name="email"><br><br>
        <label for="">Current Skills</label><br>
        <select name="skills[]" id="" multiple="multiple">
            <option value="JavaScript">JavaScript</option>
            <option value="CSharp">CSharp</option>
            <option value="PHP">PHP</option>
            <option value="MySQL">MySQL</option>
            <option value="React">React</option>
        </select><br><br>
        <label for="">What want to you learn</label><br>
        <input type="checkbox" name="language[]" value="Python">Python <br>
        <input type="checkbox" name="language[]" value="C+">C+ <br>
        <input type="checkbox" name="language[]" value="C++">C++ <br>
        <input type="checkbox" name="language[]" value="Laravel">Laravel <br>
        <input type="checkbox" name="language[]" value="Vue">Vue <br><br>
        <input type="submit" name="submit" value="submit"><br><br>
        
    </form>
    
</body>
</html>