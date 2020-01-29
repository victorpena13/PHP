<?php

function add($a, $b)
{
    echo $a + $b . "\n";
}

function subtract($a, $b)
{
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

// Add code to test your functions here

fwrite(STDOUT, 'enter first value ');
$firstValue = fgets(STDIN);

fwrite(STDOUT, 'enter second value ');
$secondValue = fgets(STDIN);



add($firstValue, $secondValue);
subtract($firstValue, $secondValue);
multiply($firstValue, $secondValue);
divide($firstValue, $secondValue);



