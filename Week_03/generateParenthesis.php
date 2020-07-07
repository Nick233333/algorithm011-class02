<?php

class Solution {

    public $res = [];

    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
        $this->generate(0, 0, $n, '');
        return $this->res;
    }
    //generrate为递归方法
    function generate($left, $right, $count, $txt) {
        //递归结束的标识是 左右两侧括号达到了给定的n值
        if ($left == $count && $right == $count) {
            $this->res[] = $txt;
        }
        //一次递归调用两次 调用时将已经生成的括号作为参数传递
        //在左侧括号未达到n时执行递归
        if ($left < $count) {
            $this->generate($left + 1, $right, $count, $txt.'(');
        }
        //右侧括号数量小于左侧括号时执行递归
        if ($right < $left) {
            $this->generate($left, $right + 1, $count, $txt.')');
        }
    }
}
$m = new Solution();
print_r($m->generateParenthesis(3));