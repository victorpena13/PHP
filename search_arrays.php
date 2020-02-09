<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query = 'Dana';
$result = array_search($query, $names);


function hasValue($result) {
    global $names;
    if ($result >=0 && $result <= 4) {
        echo "TRUE";

    } else {
        echo "FALSE";
    }
}

hasValue($result);

