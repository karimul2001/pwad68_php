<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Identify Max_Min Number</h3>
    <form action="" method="post">
        <input type="text" name="number"><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php 
    if(isset($_REQUEST["submit"])){
        $num = $_REQUEST['number'];
        $data = explode("," , $num);
        $max = $data[0];
        $min = $data[0];
        foreach($data as $num){
            if($num > $max){
                $max = $num;
            }
            if($num < $min){
                $min = $num;
            }
        }
        // for($i = 1; count($data) > $i ; $i++){
        //     if($max < $data[$i]){
        //         $max = $data[$i];
        //     }
            
        // }
        // for($i = 1; count($data) < $i ; $i++){
        //     if($min > $data[$i]){
        //         $min = $data[$i];
        //     }
            
        // }
        //echo "Maximum Number: " . $max . "<br>" . "Minimum Number: " . $min;

        //Another way

        // foreach($data as $large){
        //     if($large > $max){
        //         $max = $large;
        //     }
        //     if($large < $min){
        //         $min = $large;
        //     }
        // }
        echo "Maximum Number: " . $max . "<br>" . "Minimum Number: " . $min;
    }

    ?>
</body>
</html>