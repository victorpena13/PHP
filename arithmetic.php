<?php


$firstValue = "fun";
$secondValue = 3;


if(is_numeric($firstValue) && is_numeric($secondValue)) {
    add($firstValue, $secondValue);
    subtract($firstValue, $secondValue);
    multiply($firstValue, $secondValue);
    divide($firstValue, $secondValue);
}

function throwErrorMessages($a, $b, $division = false) {
    if(!is_numeric($a)) {
    fwrite(STDERR, "$a should be a number.\n");
    }
    if(!is_numeric($b)) {
        fwrite(STDERR, "$b should be a number");
    }
    if($division == true) {
        if ($a == 0 || $b == 0) {
            fwrite(STDERR, "cannot divide by $b or $a");
        }
    }
}


throwErrorMessages($firstValue, $secondValue, false);
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










