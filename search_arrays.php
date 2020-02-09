<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query = 'Dana';
$result = array_search($query, $names);

//Create a function that returns TRUE or FALSE if an
//array value is found. Search for Tina and Bob in
//$names. Make sure it works as expected.

function hasValue($result) {
    if ($result >=0 && $result <= 4) {
        echo "TRUE";

    } else {
        echo "FALSE";
    }
}

hasValue($result);

//Create a function to compare 2 arrays that returns the
//number of values in common between the arrays.
//Use the 2 example arrays and make sure your solution
//uses array_search().


$answer = array_diff($names, $compare);
print_r($answer);
//result:
//Array
//(
//    [1] => Dana
//    [2] => Mike
//    [4] => Adam
//)


