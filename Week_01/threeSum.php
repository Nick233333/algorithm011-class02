<?php

function threeSum($nums) {
    $arr = [];
    $len = count($nums);
    if ($len < 3) {
        return $arr;
    }
    sort($nums);
    for ($i = 0; $i < $len; $i++) {
        if ($nums[$i] > 0) {
            break;
        }
        if ($i > 0 && $nums[$i] == $nums[$i-1]) {
            continue;
        }
        $l = $i + 1;
        $r = $len - 1;
        while ($l < $r) {
            $result = $nums[$i] + $nums[$l] + $nums[$r];
            if ($result == 0) {
                $arr[] = [$nums[$i], $nums[$l], $nums[$r]];
                while ($l < $r && $nums[$l] == $nums[++$l]);
                while ($l < $r && $nums[$r] == $nums[--$r]);
            } elseif ($result < 0) {
                $l++;
            } else {
                $r--;
            }
        }
    }
    return $arr;
}
print_r(threeSum([-1, 0, -1, -2, 2, -1, -4, 3]));
