<?php

function twoSum($nums, $target) {
    if (!is_array($nums) || count($nums) < 2 || !is_int($target)) {
        return [];
    }
    for ($i = 0; $i < count($nums); $i++) {
        for ($j = $i + 1; $j < count($nums); $j++) {
            if (($nums[$i] + $nums[$j]) == $target) {
                return [$i, $j];
            }
        }
    }
}

print_r(twoSum([2,7,11,15], 9));