<?php
function deleteDigit($n) {
    $result = [];
    $splited = str_split($n);
    $count = count($splited);

    for($i = 0; $i <$count; $i++){
        $newArray = $splited;
        unset($newArray[$i]);
        $result[] = join($newArray);
    }

    return max($result);
}

deleteDigit(152);