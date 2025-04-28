<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $arr = [];
        foreach ($nums as $key => $num) {
            $diff = $target - $num;
            if (isset($arr[$diff])) {
                return [$arr[$diff], $key];
            }
            $arr[$num] = $key;
        }
        return [];
    }
}
