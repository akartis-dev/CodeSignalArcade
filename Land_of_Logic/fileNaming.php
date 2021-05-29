<?php
function fileNaming($names)
{
    $res = [];

    foreach ($names as $name) {
        if(array_key_exists($name, $res)){
            $key = $res[$name]++;
            $new = "$name($key)";

            while(array_key_exists($new, $res)){
                $key = $res[$name]++;
                $new = "$name($key)";
            }

            $res[$new] = 1;
        }else{
            $res[$name] = 1;
        }
    }

    return $res;

}

$names = [
    "dd",
    "dd(1)",
    "dd(2)",
    "dd",
    "dd(1)",
    "dd(1)(2)",
    "dd(1)(1)",
    "dd",
    "dd(1)"
];
print_r(fileNaming($names)) ;

// $names = "doc";
// $regex = sprintf("/%s?.*\((\d+)\)/m", "doc");
// preg_match_all($regex, $names, $matches, PREG_SET_ORDER, 0);
// var_dump($matches[0]);
// var_dump( end($matches[0]));
