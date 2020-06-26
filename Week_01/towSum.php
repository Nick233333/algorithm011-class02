<?php

// function twoSum($nums, $target) {
//     if (!is_array($nums) || count($nums) < 2 || !is_int($target)) {
//         return [];
//     }
//     for ($i = 0; $i < count($nums); $i++) {
//         for ($j = $i + 1; $j < count($nums); $j++) {
//             if (($nums[$i] + $nums[$j]) == $target) {
//                 return [$i, $j];
//             }
//         }
//     }
// }

function twoSum($nums, $target) {
    if (!is_array($nums) || count($nums) < 2 || !is_int($target)) {
        return [];
    }
    $map = [];
    $result = 0;
    for ($i = 0; $i < count($nums); $i++) {
        $result = $target - $nums[$i];
        if (array_key_exists($result, $map)) {
            return [$map[$result], $i];
        } else {
            $map[$nums[$i]] = $i;
        }
    }
    return $map;
}

print_r(twoSum([2,7,11,15], 9));