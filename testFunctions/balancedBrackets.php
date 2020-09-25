<?php

function isBrackets($string)
{

    $characterCheck = 'а-яёА-ЯЁa-zA-Z0-9\/.~!@#$%^&*{}\[\]?><:;_+\-=`,';
    $capacityCheck = preg_match("/[$characterCheck]/iu", $string);
    return $capacityCheck ? false : true;

}

function isTrueBrackets($string)
{

    $checkString = $string;
    $length = mb_strlen($string);
    $middleLength = $length / 2;
    $result = false;

    for ($i = 0; $i <= $middleLength; $i++) {

        $firstLeftBracket = strpos($checkString, '(');
        $newString = substr($checkString, $firstLeftBracket);
        $firstRightBracket = strpos($newString, ')');

        if (preg_match("/\(/", $checkString) and !preg_match('/\)/', $checkString) or preg_match("/\)/", $checkString) and !preg_match('/\(/', $checkString)) {
            $result = false;
        } elseif (mb_strlen($checkString) === 0) {
            $result = true;
        } else {
            $checkString = substr_replace($newString, '', $firstRightBracket, 1);
            $checkString = substr_replace($checkString, '', $firstLeftBracket, 1);
        }

    }

    return $result;

}

function isBalanced($string)
{

    $length = mb_strlen($string);
    $middleLength = $length / 2;
    $middleLeftOfLine = substr($string, 0, $middleLength);
    $middleRightOfLine = substr($string, $middleLength, $middleLength);
    $isBrackets = isBrackets($string);
    $leftBracket = '(';
    $rightBracket = ')';
    $result = false;

    if ($isBrackets === true) {
        if (substr($string, 0, 1) !== $rightBracket && substr($string, -1, 1) !== $leftBracket) {
            if (substr_count($middleLeftOfLine, $leftBracket) === substr_count($middleRightOfLine, $rightBracket)) {
                if (isTrueBrackets($string) === true) {
                    $result = true;
                }
            }
        }
    }

    return $result;

}

var_dump(isBalanced('((((())(((()((()))))(())))((()))()()))'));