<?php
/**
 * Diving Deeper
 * firstDigit
 */
function firstDigit($inputString) {
    preg_match("/[0-9]/", $inputString, $matches);
    return $matches[0];
}

print_r(firstDigit('q2q-q'));