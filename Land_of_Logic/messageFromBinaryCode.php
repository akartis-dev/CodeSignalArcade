<?php

function messageFromBinaryCode($code)
{
    $loop = strlen($code) / 8;
    $i = 0;
    $n = [];
    $text = null;
    for ($j = 0; $j < 8; $j++) {
        $n[] = pow(2, $j);
    }
    $n = array_reverse($n);

    while ($i <= $loop) {
        $toDecode = substr($code, 8 * $i, 8) . "\n";
        $toDecode = str_split($toDecode);
        $asciiCode = 0;

        foreach ($toDecode as $key => $value) {
            if ((int) $value === 1) $asciiCode += $n[$key];
        }
        $i++;

        $text .= chr($asciiCode);
    }

    var_dump(trim( $text));
}

messageFromBinaryCode("010010000110010101101100011011000110111100100001");
