<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {

    // protected $result = [];
    // function levelOrder($root) {
    //     $this->dfs($root, 0);
    //     return $this->result;
    // }

    // private function dfs($root, $level) {
    //     if ($root === null) {
    //         return;
    //     } 
    //     $this->result[$level][] = $root->val;
    //     $this->dfs($root->left, $level + 1);
    //     $this->dfs($root->right, $level + 1);
    // }
    /**
     * @param TreeNode $root
     * @return Integer[][]
     */
    function levelOrder($root) {
        $res = [];
        if ($root === null) {
            return $res;
        }
        $queue = new SplQueue();
        $queue->enqueue($root);
        while ($count = $queue->count()) {
            $currentLevel = [];
            for ($i = 0; $i < $count; ++$i) {
                $node = $queue->dequeue();
                $currentLevel[] = $node->val;
                if ($node->left !== null) {
                    $queue->enqueue($node->left);
                } 
                if ($node->right !== null) {
                    $queue->enqueue($node->right);
                }
            }
            $res[] = $currentLevel;
        }
        return $res;
    }
}