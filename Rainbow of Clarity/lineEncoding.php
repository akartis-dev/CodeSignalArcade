<?php

function lineEncoding($s){
    $splited = str_split($s);
    $length = count($splited);
    $result = "";

    for($i = 0; $i < $length; $i++){
        $j = $i + 1;
        $c = $splited[$i];
        $count = 1;
        
        while ($j < $length) {
            if ($splited[$j] && ($splited[$j] === $c)) {
                $count++;
            } else {
                $i = $j - 1;
                break;
            }
            $j++;
        }

        $result .= sprintf("%s%s", $count > 1 ? $count : '' , $c);

        if($j  >= $length) break;
    }
    return $result;    

}

lineEncoding('abbcabb');