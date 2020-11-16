<?php
/**
 * Rains of Reason
 * chessBoardCellColor
 */

function chessBoardCellColor($cell1, $cell2) {

    if($cell1 === $cell2){
        return true;
    }

    $unpair = ['A', 'C', 'E', 'G'];
    $pair = ['B', 'D', 'F', 'H'];

    $cell1 = str_split($cell1);
    $cell2 = str_split($cell2);

    if(
        in_array($cell1[0], $unpair) && in_array($cell2[0], $unpair) ||
        in_array($cell1[0], $pair) && in_array($cell2[0], $pair)
    ){
        if($cell1[1] % 2 > 0 && $cell2[1] % 2 > 0){
            return true;
        }

        if($cell1[1] % 2 === 0 && $cell2[1] % 2 === 0){
            return true;
        }
    } else{
        if ($cell1[1] % 2 === 0 && $cell2[1] % 2 > 0){
            return true;
        }

        if ($cell1[1] % 2 > 0 && $cell2[1] % 2 === 0){
            return true;
        }
    }
    return false;
}

print_r(chessBoardCellColor("A1", "C3"));