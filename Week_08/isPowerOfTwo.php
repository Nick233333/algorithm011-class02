<?php

class Solution {

    /**
     * 2的幂
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {
        return $n > 0 && ($n & ($n - 1)) == 0;
    }
}