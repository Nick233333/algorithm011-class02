<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $n = strlen($s);
        if ($n == 0) return -1;
        $map = [];
        for ($i = 0; $i < $n; $i++) {
            $map[substr($s, $i, 1)][] = $i;
        }
        foreach ($map as $v) {
            if (count($v) == 1) return reset($v);
        }
        return -1;
    }
}