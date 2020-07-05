<?php

function topKFrequent($nums, $k) {
    $n = count($nums);
    // 键为元素值，值为元素出现的次数
    $hash = [];
    for ($i = 0; $i < $n; $i++) {
        if (isset($hash[$nums[$i]])) {
            $hash[$nums[$i]]++;
        } else {
            $hash[$nums[$i]] = 1;
        }
    }
    arsort($hash);
    $ans = [];
    foreach ($hash as $key => $value) {
        $ans[] = $key;
        if (count($ans) == $k) {
            break;
        }
    }
    return $ans;
}

print_r(topKFrequent([1,1,1,2,2,3], 2));