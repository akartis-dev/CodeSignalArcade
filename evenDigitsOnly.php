<?php
/**
 * Rains of Reason
 * Array replace
 */

function evenDigitsOnly($n) {
    $a = str_split($n);
    foreach($a as $l) {
        if($l % 2 > 0){
            return false;
        }
    }
    return true;
}

print_r(evenDigitsOnly(642386));