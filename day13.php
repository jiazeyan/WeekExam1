<?php
function sum($num1,$num2)
{

    while ($sums<0)
    {
        $sums = $num1 ^ $num2;
//    return $sums;
        $num1 = $sums^$num1;
//        return $num1;
        $num2 = $num1^$sums;
    }
}
var_dump(sum(5,6));