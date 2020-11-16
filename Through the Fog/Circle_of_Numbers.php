<?php
/**
 * Through the Fog
 * Circle of Numbers
 */

function circleOfNumbers($n, $firstNumber) {

    if($n / 2 > $firstNumber){
        return $firstNumber + ($n / 2);
    }
    return abs($firstNumber - ($n / 2));

}

print_r(circleOfNumbers(4, 1));