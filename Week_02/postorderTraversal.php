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
     * 二叉树的后序遍历
     * @param TreeNode $root
     * @return Integer[]
     */
    function postorderTraversal($root) {
        $result = [];
        $this->traversal($root, $result);
        return $result;
    }

    private function traversal($root, &$result) {
        if ($root === null) {
            return;
        }
        $this->traversal($root->left, $result);
        $this->traversal($root->right, $result);
        $result[] = $root->val;
    }
}