<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return Integer[]
     */
    function reversePrint($head) {
        // $arr = [];
        // while ($head) {
        //     array_unshift($arr, $head->val);
        //     $head = $head->next;
        // }
        // return $arr;
        $stack =  new SplStack();
        while ($head) {
            $stack->push($stack->val);
            $head = $head->next;
        }
        $res = [];
        while (!$stack->isEmpty()) {
            $res[] = $stack->pop();
        }
        return $res;
    }
}