<?php

$items = ['First', 'Second', 'Third', 'Fourth', 'Fifth', 'Sixth'];
$lastItem = array_pop($items);
print_r($items);
//result:
//Array
//(
//[0] => First
//[1] => Second
//[2] => Third
//[3] => Fourth
//[4] => Fifth
//)


//this updates the original variable even though
// it's saved in its own seperate variable