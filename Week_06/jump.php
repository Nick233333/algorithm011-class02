<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function jump($nums) {
        $step = 0;
        $end = 0;
        $maxNum = 0;
        for ($i = 0; $i < count($nums) - 1; $i++) {
            $maxNum = max($maxNum, $nums[$i] + $i);
            if ($i === $end) {
                $step++;
                $end = $maxNum;
            }
        }
        return $step;
    }
}