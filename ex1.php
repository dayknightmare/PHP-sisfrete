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

    var_dump(isValid("(111) 333-9999")) . "\n";
    var_dump(isValid("(111)333-9999")) . "\n";
    var_dump(isValid("111) 333-9999")) . "\n";
    var_dump(isValid("(111) 3339999")) . "\n";
    var_dump(isValid("(111 333-9999")) . "\n";
    var_dump(isValid("(111)333-9999")) . "\n";