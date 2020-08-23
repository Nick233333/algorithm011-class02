<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $n = strlen($s);
        if ($n <= 1) return $s;
        $maxStart = 0; // 最长回文串起点
        $maxEnd = 0; // 最长回文串重点
        $maxLen = 0; // 最长回文串长度
        // dp[i][j] 表示 [i, j] 这一段是否为回文串
        // 状态转移方程 dp[i][j] = dp[i + 1][j - 1] if s[i] != s[j]
        // dp[i][j] = dp[i + 1][j - 1] + 2 if s[i] == s[j]
        // base case, dp[i][i] = 1
        $dp = array_fill(0, $n, array_fill(0, $n, false));
        for ($i = 0; $i < $n; ++$i) {
            $dp[$i][$i] = true;
        }

        for ($r = 0; $r < $n; ++$r) {
            for ($l = 0; $l < $r; ++$l) {
                if ($s[$l] == $s[$r] && ($dp[$l + 1][$r - 1] || $r - $l < 2)) {
                    $dp[$l][$r] = true;
                    if ($r - $l + 1 > $maxLen) {
                        $maxLen = $r - $l + 1;
                        $maxStart = $l;
                        $maxEnd = $r;
                    }
                }
            }
        }

        return substr($s, $maxStart, $maxEnd - $maxStart + 1);
    }
}