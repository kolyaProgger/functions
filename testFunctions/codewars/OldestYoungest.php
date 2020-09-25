<?php

function differenceInAges($ages) {

    return [min($ages), max($ages), max($ages) - min($ages)];

}

print_r(differenceInAges([57, 99, 14, 32]));