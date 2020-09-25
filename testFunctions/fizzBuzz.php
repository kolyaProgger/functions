<?php

function fizzBuzz($begin, $end)
{

    for ($i = $begin; $i <= $end; $i++) {

        switch ($i) {

            case $i % 3 == 0 && $i % 5 ==0:
                echo "FizzBuzz\n";
                break;

            case $i % 3 == 0:
                echo "Fizz\n";
                break;

            case $i % 5 == 0:
                echo "Buzz\n";
                break;

            default:
                echo "$i\n";
                break;

        }

    }

}

fizzBuzz(1, 20);