<?php

class Solution
{
    function twoSum($nums, $target)
    {
        $max = 0;
        $min = 1000000000;
        $mini = $maxi = 0;
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] < $min) {
                $min = $nums[$i];
            }
            if ($nums[$i] > $max) {
                $max = $nums[$i];
            }
        }

        if (($max + $min) == $target) {
            return [$mini, $maxi];
        }

        if (($max + $min) < $target) {
            $nums = array_diff($nums, [$min]);
        } else {
            $nums = array_diff($nums, [$max]);
        }

        return $this->twoSum($nums, $target);
    }
}
