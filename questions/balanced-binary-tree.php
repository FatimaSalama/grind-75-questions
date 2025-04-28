<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution
{
    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isBalanced($root): bool
    {
        if ($root == null) {
            return true;
        }
        $leftHeight = $this->height($root->left);
        $rightHeight = $this->height($root->right);
        if (abs($leftHeight - $rightHeight) <= 1 && $this->isBalanced($root->left) && $this->isBalanced($root->right)) {
            return true;
        }
        return false;
    }

    function height($root)
    {
        if ($root == null) {
            return 0;
        }
        return 1 + max($this->height($root->left), $this->height($root->right));
    }
}
