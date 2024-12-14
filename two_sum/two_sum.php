<?php
class Solution
{
    function twoSum($nums, $target)
    {
        $complementsList = [];
        foreach ($nums as $key => $value) {
            $complement = $target - $value;
            if (isset($complementsList[$complement])) {
                return [$complementsList[$complement], $key];
            }
            $complementsList[$value] = $key;
        }
    }
}

$x = (new Solution)->twoSum([2, 7, 11, 15], 9);
var_dump($x);
