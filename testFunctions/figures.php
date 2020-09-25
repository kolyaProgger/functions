<?php

function nonNegativeNumber( $number ) {

    if ( $number >= 0 )
    {
        return true;
    }  else {

        return false;
    }

}

function sumNumberInString( $string ) {

    $result = 0;
    $partially = str_split( $string );
    $result = array_sum( $partially );
    return $result;

}

function additionUntilOne( $number ) {

    $length = mb_strlen( $number );

    if ( $length > 1 )
    {
        $number = sumNumberInString( $number );
        $number = additionUntilOne( $number );
    }

    return $number;

}

function addDigits( $number ) {

    $result = 0;

    if ( nonNegativeNumber( $number ) === true )
    {
        $result = additionUntilOne( $number );
    }

    return $result;

}

echo addDigits(123456789);