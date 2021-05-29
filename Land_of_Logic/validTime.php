<?php

function validTime($time) {
    $time = explode(':', $time);
    $hours = (int) $time[0];
    $minutes = (int) $time[1];
    var_dump($time);
    return ($hours >= 0 && $hours < 24) && ($minutes >= 0 && $minutes < 60);
}

validTime("15:58");