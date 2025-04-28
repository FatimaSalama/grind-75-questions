<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $s2 = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($s));
        $len = strlen($s2);
        for ($i = 0; $i < $len / 2; $i++) {
            if ($s2[$i] != $s2[$len - $i - 1]) {
                return false;
            }
        }
        return true;
    }
}
