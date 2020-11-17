<?php
/**
 * Dark_Wilderness
 * digitDegree
 */

function digitDegree($n) {
    if($n <= 9){return 0;}
    $i = 0;
    return recursive($n, $i);
}

function recursive($n, $i){
    if(strlen($n) <= 1){
        return $i;
    }
    $i++;
    $a = array_sum(str_split($n));
    return recursive($a, $i);
}


print_r(digitDegree(91));