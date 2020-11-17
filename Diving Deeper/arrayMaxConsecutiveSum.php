<?php
/**
 * Diving Deeper
 * arrayMaxConsecutiveSum
 */

function arrayMaxConsecutiveSum($inputArray, $k) {

    /**
     * Good but time exceed
     * if($k === 1){
        return max($inputArray);
    }
    
    $max = array_sum(array_slice($inputArray, 0, $k));
    $l = count($inputArray) - $k;

    for($i = 1; $i <= $l; $i++){
        $sum = 0;
        for($j = 0; $j < $k; $j++){
            $sum += $inputArray[$j + $i];
        }
        if($sum > $max){
            $max = $sum;
        }
    }

      return $max;
     */


    $max = $sum = array_sum(array_slice($inputArray, 0, $k));
    foreach(range($k, count($inputArray)) as $i){
        $sum += $inputArray[$i] - $inputArray[$i - $k];
        if($sum>$max){
            $max = $sum;
        }
    }

    return $max;
}


print_r(arrayMaxConsecutiveSum([1, 3, 2, 4], 3));