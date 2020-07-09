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
    function minDepth($root) {
        if ($root === null) {
            return 0;
        }
        if ($root->left === null && $root->right === null) {
            return 1;
        }
        $min = PHP_INT_MAX;
        if ($root->left !== null) {
            $min = min($this->minDepth($root->left), $min);
        }
        if ($root->right !== null) {
            $min = min($this->minDepth($root->right), $min);
        }
        return $min + 1;
    }
}