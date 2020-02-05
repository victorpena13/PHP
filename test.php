<?php

$valueOne = 2;
$valueTwo = 3;


function add($a, $b) {
    echo $a + $b . "\n";
}


if(is_numeric($valueTwo)) {
    echo "true";
} else {
    echo "false";
}
echo add($valueOne, $valueTwo);