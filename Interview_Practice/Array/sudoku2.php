<?php

function sudoku2($grid) {
    $row = 9;
    //Check row and column
    for($i = 0; $i < $row; $i++){
        $row_v = [];
        $col_v = [];
        
        for($j = 0; $j < $row; $j++){
            $row_c = $grid[$i][$j];
            $col_c = $grid[$j][$i];
            if($row_c !== '.'){ //row;
                if(in_array($row_c, $row_v)){
                    return false;
                }
                $row_v[] = $row_c;
            } 
            
            if($col_c !== '.'){ //row;
                if(in_array($col_c, $col_v)){
                    return false;
                }
                $col_v[] = $col_c;
            } 
        }  
    }
    
    for($y = 0; $y < 3; $y++){
        for($x = 0; $x < 3; $x++){
            $value = [];
            //3*3 y
            $i = $x * 3;
            $e_i = $i + 3;
            while($i < $e_i){
                //3*3 x
                $j = $y * 3;
                $j_i = $j + 3;
                while($j < $j_i){
                    $curr = $grid[$j][$i];
                    if($curr !== "."){
                        if(in_array($curr, $value)){
                            return false;
                        }
                        $value[] = $curr;
                    }
                    $j++;
                }
                $i++;
            }
        }
    }
    
    return true;
}
$grid = [['.', '.', '.', '1', '4', '.', '.', '2', '.'],
        ['.', '.', '6', '.', '.', '.', '.', '.', '.'],
        ['.', '.', '.', '.', '.', '.', '.', '.', '.'],
        ['.', '.', '1', '.', '.', '.', '.', '.', '.'],
        ['.', '6', '7', '.', '.', '.', '.', '.', '9'],
        ['.', '.', '.', '.', '.', '.', '8', '1', '.'],
        ['.', '3', '.', '.', '.', '.', '.', '.', '6'],
        ['.', '.', '.', '.', '.', '7', '.', '.', '.'],
        ['.', '.', '.', '5', '.', '.', '.', '7', '.']];

sudoku2($grid);