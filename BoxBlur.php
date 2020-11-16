<?php
/**
 * Island of Knowledge
 * Box blur
 */

function boxBlur($image) {
    $x = count($image[0]) + 1 - 3;
    $y = count($image) + 1 - 3;
    $res = [];

    for($i = 0; $i < $y; $i++){ //OK 2 tours
        $res[] = [];
        for($j = 0; $j < $x; $j++){
            $c_y = 0;
            $sum = 0;
            while($c_y < 3){
                $c_x = 0;
                while($c_x < 3){
                    $sum += $image[$c_y + $i][$c_x + $j];
                    $c_x++;
                }
                $c_y++;
            }
            $res[$i][] = floor($sum / 9);
        }
    }
    return $res;
}

$image = [
    [7, 4, 0, 1], 
    [5, 6, 2, 2], 
    [6, 10, 7, 8], 
    [1, 4, 2, 0]
];

$image = [[1, 1, 1], 
         [1, 7, 1], 
         [1, 1, 1]
        ];

print_r(boxBlur($image));
// boxBlur($image);
