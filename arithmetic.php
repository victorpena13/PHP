<?php

fwrite(STDOUT, "Press Enter To Begin");
$userInput = fgets(STDIN);


if (argc == 0) {
    fwrite(STDOUT, 'enter first value ');
    $firstValue = fgets(STDIN);
}

if(is_numeric($firstValue)) {
    echo "hi";
}

function add($a, $b) {

echo $a + $b;

}

//function subtract($a, $b) {
//    if (is_numeric($a) && is_numeric($b)) {
//        echo $a - $b;
//    }
//}
//
//function multiply($a, $b)
//{
//    if (is_numeric($a) && is_numeric($b)) {
//        echo $a * $b;
//    }
//}
//
//function divide($a, $b)
//{
//    if (is_numeric($a) && is_numeric($b)) {
//        echo $a / $b;
//    }
//}

// Add code to test your functions here







//add($firstValue, $secondValue);
//subtract($firstValue, $secondValue);
//multiply($firstValue, $secondValue);
//divide($firstValue, $secondValue);

