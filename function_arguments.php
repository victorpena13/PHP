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





function inspect($variable = null, $dump = true) {
    // Same as if ($dump == true) {...}
    if ($dump) {
        var_dump($variable);
    } else {
        print_r($variable);
    }
}

//Testing this in the interactive shell lets us see the results.
//
//php > inspect();
//NULL
//
//php > inspect(array(1,2,3), false);
//Array
//(
//    [0] => 1
//    [1] => 2
//    [2] => 3
//)
//
//php > inspect(array(1,2,3));
//array(3) {
//    [0]=>
//  int(1)
//  [1]=>
//  int(2)
//  [2]=>
//  int(3)
//}