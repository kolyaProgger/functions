<?php

function betterThanAverage($classPoints, $yourPoints) {

    return $yourPoints > array_sum($classPoints) / count($classPoints) ? true: false;

}