<?php


$firstValue = "0";
$secondValue = 3;


if(is_numeric($firstValue) && is_numeric($secondValue)) {
    add($firstValue, $secondValue);
    subtract($firstValue, $secondValue);
    multiply($firstValue, $secondValue);
    divide($firstValue, $secondValue);
} else {
    echo "Enter a numeric value.\n you entered: $a, $b\n";
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
    if($a == 0 || $b == 0) {
        echo "You cannot divide by $a and $b\n";
    } else {
        echo $a / $b . "\n";
    }
}










