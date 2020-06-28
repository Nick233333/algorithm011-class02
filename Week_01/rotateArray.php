<?php

// function rotateArray($nums, $k) {
//     $k = $k % count($nums);//取余防止k>nums的长度
//     $nums = array_merge(array_splice($nums, -1 * $k, $k), $nums);
// }

function rotateArray($nums, $k) {
    $len = count($nums);
    if ($k > $len) {
        $k = $k % $len;
    }
    $nums = reverse($nums, 0, $len - 1);
    $nums = reverse($nums, 0, $k - 1);
    $nums = reverse($nums, $k, $len - 1);
    return $nums;
}

function reverse($arr, $left, $right) {
    while ($left <= $right) {
        $tmp = $arr[$left];
        $arr[$left] = $arr[$right];
        $arr[$right] = $tmp;
        $left++;
        $right--;
    }

    return $arr;
}
print_r(rotateArray([1,2,3,4,5,6,7], 2));