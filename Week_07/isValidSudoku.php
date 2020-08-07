<?php

class Solution {

    /**
     * @param String[][] $board
     * @return Boolean
     */
    function isValidSudoku($board) {
        if (count($board) != 9 || count($board[0]) != 9) return false;
        $rows = $colunms = $blocks = [];
        for ($i = 0; $i < 9; $i++) {
            for ($j = 0; $j < 9; $j++) {
                if ($board[$i][$j] != '.') {
                    $num = $board[$i][$j];
                    $b_index = intval($i / 3) * 3 + intval($j / 3);
                    if (isset($rows[$i][$num]) || isset($colunms[$j][$num]) || isset($blocks[$b_index][$num])) return false;
                    $rows[$i][$num] = true;
                    $colunms[$j][$num] = true;
                    $blocks[$b_index][$num] = true;
                }
            }
        }
        return true;
    }
}