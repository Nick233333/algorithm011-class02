<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function subsets($nums) {
        $this->result = [[]];
        $this->sub($nums, [], 0);
        return $this->result;
    }

    private function sub($nums, $list, $start) {
        if (count($nums) == count($list)) {
            return;
        }
        for ($i = $start; $i < count($nums); $i++) {
            $list[] = $nums[$i];
            $this->result[] = $list;
            $this->sub($nums, $list, $i + 1);
            array_pop($list);
        }
    }
}