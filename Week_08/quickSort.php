<?php

function quickSort($arr) {
    $length = count($arr);
    if($length <= 1) {
        return $arr;
    }
    $base = $arr[0];
    $left = [];  
    $right = [];  
    for ($i = 1; $i < $length; $i++) {
        if ($base > $arr[$i]) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }
    $left = quickSort($left);
    $right = quickSort($right);
    return array_merge($left, [$base], $right);
}