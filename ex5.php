<?php

    function mutiplicar($num){
        $result = 1;

        for ($i = $num; $i >= 1; $i--) { 
            $result *= $i;    
        }

        return $result;
    }

    echo mutiplicar(2) . "\n";
    echo mutiplicar(3) . "\n";
    echo mutiplicar(5) . "\n";
    echo mutiplicar(10) . "\n";