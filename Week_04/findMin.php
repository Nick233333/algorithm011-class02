<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMin($nums) {
        $n = count($nums);
        if ($n == 1) reset($nums);
        $l = 0;
        $r = $n - 1;
        while ($l < $r) {
            $min = $l + floor(($r - $l) >> 1);
            if ($nums[$min] > $nums[$r]) {
                $l = $min - 1;
            } else {
                $r = $min;
            }
        }
        return $nums[$l];
    }
}