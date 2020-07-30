<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        // 动态规划 原地算法
        $n = count($nums);
        for ($i = 1; $i < $n; ++$i) {
            if ($nums[$i - 1] > 0) {
                $nums[$i] += $nums[$i - 1];
            } 
        }
        return max($nums);
    }
}