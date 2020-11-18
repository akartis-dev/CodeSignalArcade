<?php

function rotateImage($a) {
    $count = count($a);
    $x = count($a[0]);
    
    $res = [];
    for($i = 0; $i < $count; $i++){
        for($j = $x - 1; $j >= 0; $j--){
            $res[$i][] = $a[$j][$i];
        }
    }
    return array_values($res);

}
