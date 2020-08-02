<?php

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function minPathSum($grid) {
        $row = count($grid);
        if ($row === 0) return 0;
        $col = count($grid[0]);

        // dp 数组，从左上角到当前位置的最小路径和 原地解法
        for ($i = 0; $i <= $row; ++$i) {
            for ($j = 0; $j <= $col; ++$j) {
                if ($i === 0 && $j === 0) continue;
                // the first row
                if ($i === 0) $grid[0][$j] += $grid[0][$j - 1] ?? 0;
                // the first column
                if ($j === 0) $grid[$i][0] += $grid[$i - 1][0] ?? 0;
                $grid[$i][$j] += min($grid[$i - 1][$j], $grid[$i][$j - 1]);
            }
        }

        return $grid[$row - 1][$col - 1];
    }
}