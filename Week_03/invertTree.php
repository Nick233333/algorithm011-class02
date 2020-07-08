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
     * @return TreeNode
     */
    function invertTree($root) {
        if ($root == null) {
            return $root;
        }
        $left = $root->left;
        $right = $root->right;
        $root->left = $this->invertTree($right);
        $root->right = $this->invertTree($left);
        return $root; 
    }
}