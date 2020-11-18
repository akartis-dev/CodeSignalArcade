<?php
/**
 * Eruption of Light
 * isBeautifulString
 * Pass 18/20 
 * Fail in hidden test
 */

function isBeautifulString($inputString) {
    $inputString = str_split($inputString);
    $word = array_count_values($inputString);
    ksort($word);
    print_r($word);
    $char = array_values(range('a', 'z'));


    $f_key = array_key_first($word);
    $max = $word[$f_key];

    foreach($word as $k => $c){

        $alpha_index = array_search($k, $char);
        $l_key = array_key_last($word);
        $l_index = array_search($l_key, $char);

        if($alpha_index !== false && $l_index !== false){
            if( $alpha_index === 0 &&
                !array_key_exists($char[$alpha_index + 1], $word)
            ){
                return false;
            }

            if( $alpha_index > 0 &&
                !array_key_exists($char[$alpha_index - 1], $word)
                ){
                    return false;
            }

            if($alpha_index < $l_index &&
              !array_key_exists($char[$alpha_index + 1], $word)
            ){
                return false;
            }
        }
       
        if($c > $max){
            return false;
        }
    }
    return true;
}

var_dump(isBeautifulString("bbbaacdafe"));