<?php

function climbStairs($n) {
    if (count($n) < 2) {
        return $n;
    }
    $f1 = 1;
    $f2 = 2;
    $f3 = 3;
    for ($i = 3; $i <= count($n); $i++) {
        $f3 = $f1 + $f2;
        $f1 = $f2;
        $f2 = $f3;
    }
    return $f3;
}

echo climbStairs(1);
