<?php

$names = ['Marc Andreessen', 'Tim Berners-Lee', 'Len Bosack', 'Steve Case', 'Vint Cerf', 'Len Kleinrock', 'J.C.R. Licklider', 'Bob Metcalfe', 'Ray Tomlinson'];


$result = array_search('Bill Gates', $names);
var_dump($result . "\n");
//result: bool(false)

$resultTwo = array_search('Bob Metcalfe', $names);
var_dump($resultTwo);
//result: int(7)

$query = 'Tim Berners-Lee';

$resultThree = array_search($query, $names);

if($resultThree) {
    echo $names[$resultThree . "\n"];
}
//result: Tim Berners-Lee


$names = ['Marc Andreessen', 'Tim Berners-Lee', 'Len Bosack', 'Steve Case', 'Vint Cerf', 'Len Kleinrock', 'J.C.R. Licklider', 'Bob Metcalfe', 'Ray Tomlinson'];

$query = 'Tim Berners-Lee';

$result = array_search($query, $names);

if ($result) {
    echo $names[$result];
}

//result: Time Berners-Lee