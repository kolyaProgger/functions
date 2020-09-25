<?php

function get_average($a)
{
    $sum = array_sum($a);
    $length = count($a);
    return floor($sum/$length);
}

print_r(get_average([2, 2, 2, 2]));