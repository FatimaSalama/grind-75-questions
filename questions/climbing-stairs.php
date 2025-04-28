<?php

class Solution
{

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n)
    {
        $arr = array_fill(0, $n, 0);
        $arr[0] = 1;
        $arr[1] = 1;
        for ($i = 2; $i <= $n; $i++) {
            $arr[$i] = $arr[$i - 1] + $arr[$i - 2];
        }
        return $arr[$n];
    }
}
