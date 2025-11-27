<?php 
    $line = "Vim is the greatest word prcessor ever created! oh vim, how I love there!";


    if (preg_match("/\bVim\b/i", $line, $match)) print "Match Found!";
    if (preg_match_all("/\bVim\b/i", $line, $match)) print "Match Found!";

    print_r($match);



?>