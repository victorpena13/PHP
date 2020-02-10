<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];



//Create a function that returns TRUE or FALSE if an
//array value is found. Search for Tina and Bob in
//$names. Make sure it works as expected.
$query = 'Dana';
$result = array_search($query, $names);

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

function numberOfValuesInCommon($array1, $array2) {
    $count = 0;

    foreach($array1 as $value) {
        if(ifValueExists($value,$array2)) {
            $count++;
        }
    }
    return $count;
}


echo "The number of values in common is: " . numberOfValuesInCommon($names, $compare) . PHP_EOL;

