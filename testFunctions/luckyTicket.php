<?php

function evenNum( $string ) {

    $length = mb_strlen( $string );

    if ( $length % 2 === 0 )
    {
        return true;
    } else {

        return false;
    }

}

function sumNumberInString( $string ) {

    $result = 0;
    $length = mb_strlen($string);

    for ($i = 0; $i < $length; $i++) {
        $result += $string[$i];
    }

    return $result;

}

function isHappy( $string ) {

    $length = mb_strlen( $string );
    $errorInfo = 'Ошибка! Напишите четное число';
    $successInfo = 'Это счастливый билет!!!';
    $nodSuccessInfo = 'Это не счастливый билет';

    if ( evenNum( $string ) === true )
    {
        $part = $length/2;
        $firstStr = substr( $string, 0, $part );
        $secondStr = substr( $string, $part, $part );
        $firstSum = sumNumberInString($firstStr);
        $secondSum = sumNumberInString($secondStr);

        if ( $firstSum === $secondSum )
        {
            return $successInfo;
        } else {

            return $nodSuccessInfo;
        }

    } else {

        return $errorInfo;
    }

}

echo isHappy('121');