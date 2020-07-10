<?php

class Solution {

    /**
     * @param Float $x
     * @param Integer $n
     * @return Float
     */
    function myPow($x, $n) {
        if ($x == 0) {
            return 0;
        }
        if ($n < 0) {
            $x = 1 / $x;
            $n = -$n;
        }
        $this->helper($x, $n);
    }

    function helper($x, $n) {
        if ($n == 0) {
            return 0;
        } elseif ($n == 1) {
            return $x;
        }
        $subResult = $this->helper($x, $n / 2);
        if ($x % 2 == 1) {
            return $subResult * $subResult * $x;
        } else {
            return $subResult * $subResult;
        }
    }
}