<?php

class Solution {
    function calPoints($ops)
    {
        $arr = [];

        foreach ($ops as $index => $op) {
            if ($op === '+') {
                $arr[] = (int) $ops[$index - 1] + (int) $ops[$index - 2];
            }
            elseif ($op === 'D') {
                $arr[] = (int) $ops[$index - 1] * 2;
            }
            elseif ($op === 'C') {
                array_pop($arr);
            }
            else {
                $arr[] = (int) $op;
            }
            print_r($arr);
        }

        print_r(array_sum($arr));
    }
}

(new Solution())->calPoints([5, 2, 'C' , 'D', '+']);