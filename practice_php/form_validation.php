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
    <h3>Form Validation</h3>
    <?php
    if(isset($_REQUEST["submit"])){
        $name = "";
        $email = "";
        $skills_output = "";
        $langs_output = "";
        $errors = [];
        if(isset($_REQUEST["name"])){
            $name = $_REQUEST['name'];
        }
        if(isset($_REQUEST["email"])){
            $email = $_REQUEST['email'];
        }
        if(isset($_REQUEST["skills"])){
            $skills = $_REQUEST['skills'];
            foreach($skills as $skill){
                $skills_output .= $skill . ",";
            }
        }
        if(isset($_REQUEST["languages"])){
            $langs = $_REQUEST['languages'];
            foreach($langs as $lang){
                $langs_output .= $lang . ",";
            }
        }
        
    }
       
    
    
    
    ?>


    <form action="" method="POST">
        <label for="">Name:</label><br>
    <input type="text" name="name"><br><br>
    <label for="">Email:</label><br>
    <input type="email" name="email"><br><br>
    <label for="">Current Skills:</label><br>
    <select name="skills[]" id="" multiple="multiple">
        <option value="CSharp">CSharp</option>
        <option value="JavaScript">JavaScript</option>
        <option value="PHP">PHP</option>
        <option value="MySQL">MySQL</option>
        <option value="React">React</option>
    </select><br><br>
    <label for="">What you want to learn:</label><br>
    <input type="checkbox" name="languages[]" value="Python">Python <br>
    <input type="checkbox" name="languages[]" value="C">C <br>
    <input type="checkbox" name="languages[]" value="C++">C++ <br>
    <input type="checkbox" name="languages[]" value="Laravel">Laravel <br>
    <input type="checkbox" name="languages[]" value="Vue">Vue <br><br>

    <input type="submit" name="submit" value="SUBMIT"><br><br>
    </form>
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
            <td><?php echo $skills_output; ?></td>
        </tr>
        <tr>
            <td>Languages</td>
            <td><?php echo $langs_output; ?></td>
        </tr>
    </table>
</body>
</html>