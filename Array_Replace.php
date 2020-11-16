<?php
/**
 * Rains of Reason
 * Array replace
 */

function arrayReplace($inputArray, $elemToReplace, $substitutionElem) {

    // for($i = 0; $i < count($inputArray); $i++){
    //     if($inputArray[$i] === $elemToReplace){
    //         $inputArray[$i] = $substitutionElem;
    //     }
    // }
    // return $inputArray;
    
    return array_map(fn ($x) => $x === $elemToReplace ? $substitutionElem : $x, $inputArray);
}

print_r(arrayReplace([1, 2, 1], 1, 3));