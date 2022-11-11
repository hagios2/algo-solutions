<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    public function romanToInt($s) {
        $output = 0;
        $romanNumerals = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];
        $exceptionalCases = ['IV', 'IX', 'XL', 'XC', 'CD', 'CM'];
        $inputNum = str_split($s);
        
        for ($j = 0; $j < count($inputNum) - 1; $j ++) {
            if (in_array("{$inputNum[$j]}{$inputNum[$j + 1]}", $exceptionalCases)) {
                $output += ($romanNumerals[$inputNum[$j + 1]] - $romanNumerals[$inputNum[$j]]); 
                $j += 1;
            } else {
                $output += $romanNumerals[$inputNum[$j]];
            }
        }
        
        return $output;
    }
}

print_r((new Solution())->romanToInt('LVIII'));