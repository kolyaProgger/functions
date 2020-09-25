<?php

function isPowerOfThree( $number ) {

    $log = log($number, 3);

    if ( strpos($log, '.') == false )
    {
        return true;
    } else {

        return false;
    }

}

var_dump(isPowerOfThree(81));