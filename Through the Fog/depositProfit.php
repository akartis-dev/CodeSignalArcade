<?php
/**
 * Through the Fog
 * depositProfit
 */

function depositProfit($deposit, $rate, $threshold) {
    $year = 0;
    while($threshold > $deposit){
        $deposit += $deposit * ($rate / 100);
        $year++;
    }
    return $year;
}


print_r(depositProfit(100, 20, 170));