<?php

class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid(string $s)
    {
        $arraySplit = str_split($s);
        $parentheses = ['(' => ')', '[' => ']', '{' => '}'];
        $stack = [];
        foreach ($arraySplit as $char) {
            if (array_key_exists($char, $parentheses)) {
                $stack[] = $char;
            } elseif ($char == end($stack)) {
                array_pop($stack);
            } else {
                return false;
            }
        }
        return count($stack) == 0;
    }
}
