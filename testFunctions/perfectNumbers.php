<?php

function isPositiveNumbers($number)
{

    return $number >= 0 ? true : false;

}

function dividers($number)
{

    $arr = [];

    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $arr[] = $i;
        }
    }

    return $arr;
}

function isPerfect($number)
{

    $result = 0;
    $array = dividers($number);
    $arrayCount = count(dividers($number));

    if (isPositiveNumbers($number) === true) {

        for ($i = 0; $i < $arrayCount; $i++) {
            $result += $array[$i];
        }

        if ($number === $result) {
            return true;
        }

    }

    return false;

}

var_dump(isPerfect(8128));