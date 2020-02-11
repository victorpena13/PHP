<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'victor'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function combine_arrays($array1, $array2) {

    foreach($array1 as $value) {
        if(!in_array($value, $array2, false)) {
            array_push( $array2, $value);
        }
    }
     print_r($array2);
}

echo "combined arrays: " . combine_arrays($names, $compare);
//result:
//Array
//(
//    [0] => Tina
//    [1] => Dean
//    [2] => Mel
//    [3] => Amy
//    [4] => Michael
//    [5] => Dana
//    [6] => Mike
//    [7] => Adam
//    [8] => victor
//)
