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

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxDepth($root) {
        if ($root === null) {
            return 0;
        }
        $l = $this->maxDepth($root->left);
        $r = $this->maxDepth($root->right);
        return max($l, $r) + 1;
    }
}