<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {
    if (is_array($thing)) {
        echo "array: $thing\n";
    } else if (is_bool($thing)) {
        echo "bool: $thing\n";
    } else if (is_float($thing)) {
        echo "float: $thing\n";
    } else if (is_double($thing)){
        echo "double: $thing\n";
    } else if (is_string($thing)) {
        echo "string: $thing\n";
    } else {
        echo "Idk what this is: $thing\n";
    }
}

foreach ($things as $index) {
    if (is_scalar($thing)) {
        echo "Index: $index\n";
        echo "$thing is scalar.\n";
    }
}