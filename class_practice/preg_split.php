<?php 
    $myText = "Jason++++Gilmore+++++++++Columbus++OH";
    $fields = preg_split("/\++/", $myText);
    foreach($fields as $filed) echo $filed . "<br />";


?>