<?php

    function removeCharacters($phase){
        $newStr = "";
        $allowed = "0123456789abcdefghijklmnopqrstuvwxyz_- ";

        foreach (str_split($phase) as $k => $v) {
            if (strpos($allowed, strtolower($v)) !== false){
                $newStr.= $v;
            }
        }

        return $newStr;
    }

    echo removeCharacters("The quick green dog!") . "\n";
    echo removeCharacters("%fd76\$fd(-)6GvKlO.") . "\n";
    echo removeCharacters("D0n\$c sed 0di0 du1") . "\n";