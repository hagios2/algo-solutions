<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        static $commonPrefix = '';
        $prefixes = [];
        static $len = 1;
        foreach ($strs as $str) {
            if (strlen($str) >= $len) {
                array_push($prefixes, substr($str, 0, $len));
            }
        }
        
        if ((count(array_unique($prefixes)) === 1) && count($strs) === count($prefixes)) {
            $commonPrefix = $prefixes[0];
            $len += 1;
                $commonPrefix = $this->longestCommonPrefix($strs);
        } 
        //swap out the response
        $returnAnswer = $commonPrefix;
        //reset the commonPrefix and len for the next function call
        $commonPrefix = '';
        $len = 1;
        return $returnAnswer;   
    }
}

print_r((new Solution())->longestCommonPrefix(["flower","flow","flight"]) . "\n");
print_r((new Solution())->longestCommonPrefix(["po","pot","pota"]) . "\n");
print_r((new Solution())->longestCommonPrefix(["dog","racecar","car"]) . "\n");
print_r((new Solution())->longestCommonPrefix(["a"]) . "\n");