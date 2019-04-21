<?php

$arr = generateArray(5);

function generateArray($count) {
    $arr = array();
    for($i = 0; $i < $count; $i++) {
        $arr[$i] = rand();
    }
    return $arr;
}

var_dump($arr);