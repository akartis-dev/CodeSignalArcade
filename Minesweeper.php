<?php
/**
 * Island of Knowledge
 * Minesweeper
 * Check all direction and if direction is undefined, return 0 and it's done
 */

function minesweeper($matrix) {
    $y = count($matrix);
    $x = count($matrix[0]);
    $res = [];

    for($i = 0; $i < $y; $i++){
        for($j = 0; $j < $x; $j++){
            $sum = [
                ($matrix[$i - 1][$j -1] ?? null) ? 1 : 0,
                ($matrix[$i - 1][$j] ?? null) ? 1 : 0,
                ($matrix[$i - 1][$j + 1] ?? null) ? 1 : 0,
                ($matrix[$i][$j - 1] ?? null) ? 1 : 0,
                ($matrix[$i][$j + 1] ?? null) ? 1 : 0,
                ($matrix[$i + 1][$j - 1] ?? null) ? 1 : 0,
                ($matrix[$i + 1][$j] ?? null) ? 1 : 0,
                ($matrix[$i + 1][$j + 1] ?? null) ? 1 : 0,
            ];
            $res[$i][]= array_sum($sum);
        }
    }

    return $res;
}

$matrix = [[true, false, false],
[false, true, false],
[false, false, false]];

print_r(minesweeper($matrix));
