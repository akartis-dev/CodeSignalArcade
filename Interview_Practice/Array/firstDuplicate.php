<?php

function firstDuplicate($a) {
    
    $a_new = array_count_values($a);
    $double_key = [];
    
    foreach($a_new as $k => $v){
        if($v > 1){
            $double_key[] = array_keys($a, $k)[1] ?? null;        
        }
    }
    return $double_key ? $a[min($double_key)] : -1;
}
