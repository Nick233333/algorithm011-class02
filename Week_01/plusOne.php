<?php

function plusOne($digits) {
    for ($i = count($digits) - 1; $i >= 0; $i--) {
        if ($digits[$i] != 9) {
            $digits[$i]++;
            return $digits;
        }
        $digits[$i]= 0;
    }
    if ($digits[0] == 0) {
        array_unshift($digits, 1);
    }
    return $digits;
}
print_r(plusOne([1,2,3]));