<?php


$firstValue = "10";
$secondValue = 3;


if(is_numeric($firstValue) && is_numeric($secondValue)) {
    add($firstValue, $secondValue);
    subtract($firstValue, $secondValue);
    multiply($firstValue, $secondValue);
    divide($firstValue, $secondValue);
} else {
    echo "Enter a numeric value.\n";
}



function add($a, $b) {
    echo $a + $b . "\n";
}

function subtract($a, $b) {
        echo $a - $b . "\n";
}

function multiply($a, $b)
{
        echo $a * $b . "\n";
}

function divide($a, $b)
{
        echo $a / $b . "\n";
}










