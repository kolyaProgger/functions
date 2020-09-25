<?php

function repeatStr($n, $str)
{
    $result = '';
    for ($i = 0; $i < $n; $i++) {
        $result .= $str;
    }
    return $result;
}