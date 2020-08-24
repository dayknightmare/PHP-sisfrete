<?php

    function mutiplicar($num){
        $result = 1;

        for ($i = 1; $i <= $num; $i++) { 
            $result *= $i;    
        }

        return $result;
    }

    echo mutiplicar(2) . "\n";
    echo mutiplicar(3) . "\n";
    echo mutiplicar(5) . "\n";
    echo mutiplicar(10) . "\n";