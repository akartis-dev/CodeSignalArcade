<?php

function firstNotRepeatingCharacter($s) {
    $s = array_count_values(str_split($s));
    foreach($s as $i => $val){
        if($val === 1) return $i;
    }
    return "_";
}
