<?php
function differentSquares($matrix)
{
    $result = [];
    $count = count($matrix);
    $elementCount = count($matrix[0]);

    for ($i = 0; $i < $count - 1; $i++) {
        $j = 0;
        while ($j < $elementCount - 1) {
            $squares = [];
            $squares[] = $matrix[$i][$j];
            $squares[] = $matrix[$i][$j + 1];
            $squares[] = $matrix[$i + 1][$j];
            $squares[] = $matrix[$i + 1][$j + 1];

            if (!in_array($squares, $result)) {
                $result[] =  $squares;
            }

            $j++;
        }
    }

    return count($result);
}

differentSquares([
    [1, 2, 1],
    [2, 2, 2],
    [2, 2, 2],
    [1, 2, 3],
    [2, 2, 1]
]);
