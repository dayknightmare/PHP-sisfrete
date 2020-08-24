<?php

    function dividirGrupos($phase){
        $groups = [];

        foreach (str_split($phase) as $k => $v) {
            if (array_key_exists($v, $groups) === false){
                $groups[$v] = "";
            }

            $groups[$v] .= $v;
        }

        return $groups;
    }

    var_dump(dividirGrupos("555"));
    var_dump(dividirGrupos("5556667788"));
    var_dump(dividirGrupos("aaabbbaabbab"));
    var_dump(dividirGrupos("8abbbcc88999&&!!!_cab"));