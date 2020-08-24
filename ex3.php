<?php

    function calculaPontuacao($letters){
        $points = [0, 0, 0];

        foreach (str_split($letters) as $k => $v) {
            if (strtolower($v) == "a"){
                $points[0] += 1;
            }

            else if (strtolower($v) == "b"){
                $points[1] += 1;
            }

            else if (strtolower($v) == "c"){
                $points[2] += 1;
            }
        }

        return $points;
    }

    var_dump(calculaPontuacao("A"));
    var_dump(calculaPontuacao("ABC"));
    var_dump(calculaPontuacao("ABCBACC"));