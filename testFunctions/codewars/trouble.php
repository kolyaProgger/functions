<?php

function triple_trouble(string $one, string $two, string $three): string
{
    $length = mb_strlen($one);
    $result = '';
    for ($i = 0; $i < $length; $i++) {
        $result .= $one[$i] . $two[$i] . $three[$i];
    }
    return $result;
}

echo triple_trouble("this", "test", "lock");