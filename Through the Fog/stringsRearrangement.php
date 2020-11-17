<?php
/**
 * Through the Fog
 * stringsRearrangement
 * Sample tests: 10/11
 * Hidden tests: 7/10
 * Score: 231/300
 * Can't debug because possibility is high
 */

function stringsRearrangement($inputArray) {
    $count = count($inputArray);

    if(compareString($inputArray)){
        return true;
    }

    for($i = 0; $i < $count; $i++){
        $index = 0;

        while($index < $count - 1){
            $next = ($i + $index + 1) < $count ? ($i + $index + 1) : 0;
            $right = $inputArray[$next];
            $inputArray[$next] = $inputArray[$i];
            $inputArray[$i] = $right;
            $index++;
            
            if(compareString($inputArray)){
                return true;
            }  
        }

    }
    return false;
}

function compareString(array $tab){    
    for($i = 1; $i < count($tab); $i++){

        if($tab[$i] === $tab[$i - 1]){
            return false;
        }

        $current = str_split($tab[$i]);
        $left = str_split($tab[$i - 1]);

        $count = 0;
        
        foreach($current as $k => $v){
           if($left[$k] === $v){
               $count++;
           }
        }
        echo $count;

        if($count < count($current) - 1){
            return false;
        }
    }
    return true;
}

// var_dump(compareString(["ab", "bb", "aa"]));

print_r(stringsRearrangement(
    ["abc", 
 "bef", 
 "bcc", 
 "bec", 
 "bbc", 
 "bdc"]
));