<?php

// function reverseString($arr) {
// 	$length = count($arr);
//     if ($length < 2) {
//         return $arr;
//     }
//     $i = 0;
//     $j = $length - 1;
//     while ($i < $j) {
//         $temp = $arr[$i];
//         $arr[$i] = $arr[$j];
//         $arr[$j] = $temp;
//         $i++;
//         $j--;
//     }
//     return $arr;
// }
// 
function reverseString($arr) {
    if (count($arr) < 2) {
        return $arr;
    }
    $j = count($arr) - 1;
    $i = 0;
    while ($i < $j) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $temp;
        $i++;
        $j--;
    }
    return $arr;
}
$arr = ["h","e","l","l","o"];
$res = reverseString($arr);
print_r($res);
