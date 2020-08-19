<?php

class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function reverseStr($s, $k) {
        $arr = str_split($s, $k);
        $str = '';
        for ($i = 0; $i < count($arr); $i++) {
            $tmp = $arr[$i];
            if ($i % 2 == 0) {
                $tmp = strrev($tmp);
            }
            $str .= $tmp;
        }
        return $str;
    }
}
