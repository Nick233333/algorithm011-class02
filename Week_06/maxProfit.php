<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $maxProfit = 0;
        $minPrice = $prices[0];
        foreach ($prices as $key => $value) {
            $minPrice = min($minPrice, $value);
            if ($value - $minPrice > $maxProfit ){
                $maxProfit = $value - $minPrice;
            }
        }
        return $maxProfit;
    }
}