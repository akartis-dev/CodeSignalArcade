<?php
/**
 * Dark_Wilderness
 * growingPlant
 */

function growingPlant($upSpeed, $downSpeed, $desiredHeight) {
    $current = 0;
    $day = 0;
    while($desiredHeight > $current){
        $current += $upSpeed;
        $day++;
        if($current >= $desiredHeight){
            break;
        }
        $current -= $downSpeed;
    }
    return $day;
}

print_r(growingPlant(5, 2, 7));