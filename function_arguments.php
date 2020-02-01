<?php



function compare($a, $b, $strict) {
    if ($strict === true) {
        return $a === $b ? 'True' : 'False';
    } else {
        return $a == $b ? 'True' : 'False';
    }
}


echo compare('Madonna', 'Lady Gaga', true);
//results in false.

echo compare('10', 10, true);
//results in false.

echo compare('10', 10, false);
//results in true.
