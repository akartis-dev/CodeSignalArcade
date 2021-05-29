<?php
function sumUpNumbers($inputString)
{
    preg_match_all("/[0-9]+/", $inputString, $matches);
    
    return array_sum($matches[0]);
}

sumUpNumbers("2 apples, 12 oranges");
