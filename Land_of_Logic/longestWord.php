<?php

function longestWord($text) {
    preg_match_all("/[a-zA-Z]+/", $text, $matches);
    $results = $matches[0];
    $longString = "";
    foreach($results as $result){
        if(strlen($longString) < strlen($result)){
            $longString = $result;
        }
    }
    print_r($longString);
}

longestWord("Ready, steady, go!");