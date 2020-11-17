<?php
/**
 * Diving Deeper
 * extractEachKth
 */

function extractEachKth($inputArray, $k) {
    if($k === 1){
        return [];
    }
    
    foreach($inputArray as $key => $in){
        $i = ($k * $key) - 1;
        if($i > 0){
            unset($inputArray[$i]);
        }
    }
    return array_values($inputArray);
}

print_r(extractEachKth([1, 1, 1, 1, 1], 1));