<?php

function fake_bin(string $s): string
{
    return preg_replace(['/[0-4]/', '/[5-9]/'], ['0', '1'], $s);
}

echo fake_bin('45385593107843568');