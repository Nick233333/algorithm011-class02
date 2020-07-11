<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        // sort($nums);
        // return $nums[floor(count($nums) / 2)]; 
        $count = array_count_values($nums);
        return array_search(max($count), $count);
    }
}