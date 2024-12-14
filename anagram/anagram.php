<?php
class Solution
{
    /**
     * @param String $s
     * @param String $t
     * 
     * @return Boolean
     */
    function isAnagram($s, $t)
    {
        count_chars($s) == count_chars($t);
    }
}

echo (new Solution())->isAnagram("a", "ab");
