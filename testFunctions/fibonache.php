<?php

function fib($i) {
    if ($i == 0 ) return 0;
    if ($i == 1 || $i == 2) {
        return 1;
    } else {
        return fib($i - 1) + fib($i -2);
    }
}

fib(5);