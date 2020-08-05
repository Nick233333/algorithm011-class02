<?php

class Solution {

    // 主要思路是dfs，先遍历，查到的第一个陆地标记为2，开始深度搜索，查找周围的陆地，如果有就标记为2，全部标记完成以后就找到了一块陆地，下次再找到1则是第二块陆地了。
    // 使用指针，节省空间，dfs前先判断是否是陆地，节省时间。
    
    /**
     * @param String[][] $grid
     * @return Integer
     */
    function numIslands($grid) {
        $num = 0;
        foreach ($grid as $y => &$row) {
            foreach ($row as $x => &$cell) {
                if ($cell == 1) {
                    $this->flipIslands($grid, $y, $x);
                    $num ++;
                }
            }
        }
        return $num;
    }
        
    function flipIslands(&$grid, $y, $x) {
        if (isset($grid[$y][$x]) && $grid[$y][$x] == 1) {
            $grid[$y][$x] = 2;
            if (isset($grid[$y][$x+1]) && $grid[$y][$x+1] == 1) {
                $this->flipIslands($grid, $y, $x+1);
            }
            if (isset($grid[$y][$x-1]) && $grid[$y][$x-1] == 1) {
                $this->flipIslands($grid, $y, $x-1);
            }
            if (isset($grid[$y+1][$x]) && $grid[$y+1][$x] == 1) {
                $this->flipIslands($grid, $y+1, $x);
            }
            if (isset($grid[$y-1][$x]) && $grid[$y-1][$x] == 1) {
                $this->flipIslands($grid, $y-1, $x);
            }
        }
    }
}