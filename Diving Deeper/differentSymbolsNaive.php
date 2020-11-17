<?php
/**
 * Diving Deeper
 * differentSymbolsNaive
 */

function differentSymbolsNaive($s) {
    $s = str_split($s);
    $res = [];
    foreach($s as $c){
        if(!in_array($c, $res)){
            $res[] = $c;
        }
    }
    return count($res);
}


print_r(differentSymbolsNaive("cabca"));