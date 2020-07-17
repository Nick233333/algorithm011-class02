<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        if ($x == 0) return 0;
        $left = 1;
        $right = floor($x / 2);
        while ($left < $right) {
            $min = $right - floor(($right - $left) / 2);
            if ($min * $min > $x) {
                $right = $min - 1;
            } else {
                $left = $min; 
            }
        }
        return $left;
    }
}