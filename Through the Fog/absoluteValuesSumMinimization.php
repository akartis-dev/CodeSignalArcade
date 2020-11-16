<?php
/**
 * Through the Fog
 * absoluteValuesSumMinimization
 */

function absoluteValuesSumMinimization($a) {
    $all_sum = [];
    for($i = 0; $i < count($a); $i++){
        $sum = 0;
        for($j = 0; $j < count($a); $j++){
            $sum += abs($a[$j] - $a[$i]);
        }
        $all_sum[$a[$i]] = $sum;
    }
    return array_search(min($all_sum), $all_sum);
}


print_r(absoluteValuesSumMinimization([2, 3]));