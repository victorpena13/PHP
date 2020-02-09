<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query = 'Dana';
$result = array_search($query, $names);


function hasValue($result) {
    global $names;
    if ($result = 0) {
        echo $names[$result] . "\n";
    } else if ($result = 1) {
        echo $names[$result] . "\n";
    } else if ($result = 2) {
        echo $names[$result] . "\n";
    } else if ($result = 3) {
        echo $names[$result] . "\n";
    } else if ($result = 4) {
        echo $names[$result] . "\n";
    } else {
        echo "IDK that name";
    }
}

hasValue($result);

