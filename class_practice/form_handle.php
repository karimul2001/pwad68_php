<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        table, tr, td{
            border: 1px solid black;
            border-collapse: collapse;
            height: 40px;
            width: 20%;
            background-color: skyblue;
        }
    </style>
</head>
<body>
    <h3>Form Validation</h3>
    <?php
    if(isset($_REQUEST["submit"])){
        $name = "";
        $email = "";
        $skill_output = "";
        $lang_output = "";
        $errors = [];
        //name
        if(!isset($_REQUEST["name"])|| $_REQUEST["name"] == ""){
            $errors[] = "Plase enter your name";
        } else {
            $name = $_REQUEST['name'];
        }
        //email
        if(!isset($_REQUEST["email"]) || $_REQUEST["email"] == ""){
            $errors[] = "Please enter your email";
        } else {
            $email = $_REQUEST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors[] = "Email is not valid";
            }
        }
        //skills
        if(!isset($_REQUEST["skills"])){
            $errors[] = "must be select skills";
        } else {
            $skills = $_REQUEST['skills'];
            $skill_output = implode(",", $skills);
        }
        //languages
        if(!isset($_REQUEST["language"])){
            $errors[] = "must be select language";
        } else {
            $langs = $_REQUEST['language'];
            $lang_output = implode(",", $langs);
        }
        if(count($errors) != 0){
            foreach($errors as $err){
                echo "<ul>";
                echo "<li>" .$err . "</li>";
                echo "</ul>";
            }
        } else {
            ?>
    <table>
        <tr>
            <td>Name</td>
            <td><?php echo $name ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $email ?></td>
        </tr>
        <tr>
            <td>Skills</td>
            <td><?php echo $skill_output ?></td>
        </tr>
        <tr>
            <td>Languages</td>
            <td><?php echo $lang_output ?></td>
        </tr>
        
    </table><br><br>
            <?php
        }
        
    }

?>


    <form action="" method="POST">
        <label for="">Name:</label><br>
        <input type="text" name="name"><br><br>
        <label for="">Email:</label><br>
        <input type="email" name="email"><br><br>
        <label for="">Skills</label><br>
        <select name="skills[]" id="" multiple="multiple">
            <option value="Basic HTML">Basic HTML</option>
            <option value="JavaScript">JavaScript</option>
            <option value="PHP">PHP</option>
            <option value="MySQL">MySQL</option>
            <option value="Laravel">Laravel</option>
            <option value="React">React</option>
            <option value="Python">Python</option>
            <option value="CSS">CSS</option>
        </select><br><br>
        <label for="">What want to learn</label><br>
        <input type="checkbox" name="language[]" value="CSharp">CSharp <br>
        <input type="checkbox" name="language[]" value="C">C <br>
        <input type="checkbox" name="language[]" value="C+">C+ <br>
        <input type="checkbox" name="language[]" value="C++">C++ <br>
        <input type="checkbox" name="language[]" value="Vue">Vue <br>
        <input type="checkbox" name="language[]" value="Java">Java <br><br>
        <input type="submit" name="submit" value="SUBMIT"><br><br>

    </form>

    
</body>
</html>