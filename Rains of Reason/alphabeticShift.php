<?php
/**
 * Rains of Reason
 * alphabeticShift
 */

function alphabeticShift($inputString) {
    $alphabet = range('a', 'z');
    $inputString = str_split($inputString);

    foreach($inputString as $k => $v){
        $i = array_search($v, $alphabet);
        $inputString[$k] = $alphabet[(int) $i + 1] ?? 'a';
    }
    return join("", $inputString);
}

print_r(alphabeticShift("crazy"));