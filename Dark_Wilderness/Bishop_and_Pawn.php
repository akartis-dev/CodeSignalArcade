<?php
/**
 * Dark_Wilderness
 * Bishop and Pawn
 * Need refactoring
 */

function bishopAndPawn($bishop, $pawn) {

    $alpha = range('a', 'h');
    $pos = str_split($bishop);

    $y = array_search($pos[0], $alpha);
    $beforeNumberRange = range($pos[1] - 1, 1); // digit before
    $afterNumberRange = range($pos[1] + 1, 8); // digit after
    $afterLetter = array_slice($alpha, $y + 1); //letter after
    $beforeLetter = array_reverse(array_slice($alpha, 0, $y));//letter 
    $mov = [];

    $key = 0;
    for($i = 0; $i < count($beforeNumberRange); $i++){
        isset($afterLetter[$key]) ? 
            $mov[] = $afterLetter[$key] . $beforeNumberRange[$i] : '';
        isset($beforeLetter[$key]) ? 
            $mov[] = $beforeLetter[$key] . $beforeNumberRange[$i] : '';
        $key++;
    }

    $key = 0;
    for($i = 0; $i < count($afterNumberRange); $i++){
        isset($afterLetter[$key]) ? 
            $mov[] = $afterLetter[$key] . $afterNumberRange[$i] : '';
        isset($beforeLetter[$key]) ? 
            $mov[] = $beforeLetter[$key] . $afterNumberRange[$i] : '';
        $key++;
    }

    return in_array($pawn, $mov);
}


print_r(bishopAndPawn("a1", "c3"));