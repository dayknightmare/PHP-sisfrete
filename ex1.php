<?php
    function isValid($num){
        preg_match("/\((.*?)\) (\d{3})\-(\d{4})/", $num, $matches);
    
        if (count($matches) > 0){
            return true;
        }
        else{
            return false;
        }
    }

    echo isValid("(111) 333-9999") . "\n";
    echo isValid("(111)333-9999") . "\n";
    echo isValid("111) 333-9999") . "\n";
    echo isValid("(111) 3339999") . "\n";
    echo isValid("(111 333-9999") . "\n";
    echo isValid("(111)333-9999") . "\n";