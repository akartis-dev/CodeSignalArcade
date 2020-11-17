<?php
/**
 * Dark_Wilderness
 * growingPlant
 */


function longestDigitsPrefix($inputString) {
    preg_match("/^[0-9]+/", $inputString, $matches);
    return $matches[0] ?? "";
}

print_r(longestDigitsPrefix("123aa1"));