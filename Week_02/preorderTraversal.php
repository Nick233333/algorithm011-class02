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
     * 二叉树的前序遍历
     * @param TreeNode $root
     * @return Integer[]
     */
    function preorderTraversal($root) {
        if (empty($root)) {
            return [];
        }
        $arr[] = $root->val;
        $l = $this->preorderTraversal($root->left);
        $r = $this->preorderTraversal($root->right);
        return array_merge($arr, $l, $r);
    }
}