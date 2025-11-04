<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form Validation</h2>
    <form action="" name="myform" method="POST">
    Your Name:
    <input type="text" name="name" placeholder="Enter Your name"><br>
    Email Address:
    <input type="email" name="email" placeholder="enter email"><br>
    Favorite Programming langulage:
    <select name="skills" id="">
        <option value="C#">C#</option>
        <option value="JavaScript">JavaScript</option>
        <option value="Perl">Perl</option>
        <option value="C++">C++</option>
        <option value="PHP">PHP</option>
        <option value="Python">Phython</option>
    </select><br>
    Favorite Game:
    <input type="checkbox" name="game" vlaue="cricket">Cricket
    <input type="checkbox" name="game" vlaue="football">Football
    <input type="checkbox" name="game" vlaue="kabadi">Kabadi
    <input type="checkbox" name="game" vlaue="racket">Racket
</form><br>

<input type="submit" name="submit" value="SUBMIT">
<?php
    if (isset($_REQUEST['submit'])) {
       echo("<pre>");
       print_r($_REQUEST);
    }

    ?>
</body>
</html>