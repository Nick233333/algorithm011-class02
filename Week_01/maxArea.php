<?php

// function maxArea($arr) {
// 	$max = 0;
// 	for ($i = 0,$j = count($arr) - 1; $i < $j;) {
// 		$minHeight = $arr[$i] < $arr[$j] ? $arr[$i++] : $arr[$j--];
// 		$area = ($j - $i + 1) * $minHeight;
// 		$max = max($max, $area);
// 	}
// 	return $max;
// }

// function maxArea($arr) {
//     $max = 0;
//     for ($i = 0; $i < count($arr) - 1; $i++) {
//         for ($j = $i + 1; $j < count($arr); $j++) { 
//            $area = ($j - $i) * min($arr[$i], $arr[$j]);
//            $max = max($max, $area);
//         }
//     }
//     return $max;
// }

function maxArea($arr) {
    if (count($arr) < 2) {
        return $arr;
    }
    $max = 0;
    $left = 0;
    $right = count($arr) - 1;
    while ($left < $right) {
        $max = max($max, ($right - $left) * min($arr[$left], $arr[$right]));
        if ($arr[$left] < $arr[$right]) {
            $left++;
        } else {
            $right--;
        }
    }
    return $max;
}

print_r(maxArea([1,8,6,2,5,4,8,3,7]));
