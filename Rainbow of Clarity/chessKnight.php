<?php
function chessKnight($cell)
{
    $result = 0;
    $direction = ['left', 'right'];
    $allLetter = range('a', 'h');
    $l = $cell[0];
    $n = (int)$cell[1];
    $letter_position = array_search($l, $allLetter);

    foreach ($direction as $value) {
        generatePosition(1, $value, $letter_position, $n, $result, $allLetter);
    }

    return $result;
}

function generatePosition($letterDiff, $direction, $letter_position, $n, &$result, $allLetter)
{
    if ($letterDiff > 2) {
        return false;
    }

    $position = $direction === 'left' ? $letter_position - $letterDiff : $letter_position + $letterDiff;

    if (isset($allLetter[$position])) {
        $q = $letterDiff === 1 ? 2 : 1;
        if ($n - $q > 0) {
            $result++;
        }

        if ($n + $q < 9) {
            $result++;
        }
        $next = $letterDiff + 1;
        generatePosition($next, $direction, $letter_position, $n, $result, $allLetter);
    }
}

chessKnight('a1');