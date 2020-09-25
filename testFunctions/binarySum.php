<?php

function binarySum($binaryOne, $binaryTwo)
{

    $binaryOneInDecimal = bindec($binaryOne);
    $binaryTwoInDecimal = bindec($binaryTwo);
    $decimalSum = $binaryOneInDecimal + $binaryTwoInDecimal;
    /** @var $decimalSumInBinary */
    $decimalSumInBinary = decbin($decimalSum);
    return $decimalSumInBinary;

}

echo binarySum('10', '1');