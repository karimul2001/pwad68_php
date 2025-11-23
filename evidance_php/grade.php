<?php 

if(isset($_REQUEST["submit"])){
    $result = $_REQUEST['abc'];

    $result = strtoupper($result);
//$result = "D";

if($result == "A"){
    echo "Excellent";
}
elseif($result == "B"){
    echo "Good";
}
elseif($result == "C"){
    echo "Fair";
}
elseif($result == "D"){
    echo "Poor";
}
else{
    echo "Failur";
}
}
?>
<form action="" method="post">
    <input type="text" name="abc"><br>
    <input type="submit" name="submit" value="SUBMIT">
</form>