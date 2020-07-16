<?php

class Solution {

    /**
     * @param Integer[] $kids
     * @param Integer[] $cookies
     * @return Integer
     */
    function findContentChildren($kids, $cookies) {
        sort($kids);
        sort($cookies);
        $c = $k = 0;
        while ($c < count($cookies) && $k < count($kids)) {
            if ($kids[$k] <= $cookies[$c]) {
                $k++;
            }
            $c++;
        }
        return $k;
    }
}