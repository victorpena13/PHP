<?php

$numbers = [1, 2, 3, 4, 5];

foreach ($numbers as $key => $value) {
    echo "\$value has a key of $key and a value of $value\n";
}

$studentDetails = array(
    'name' => 'Jane Doe',
    'age' => 29
);

foreach ($studentDetails as $key => $value) {
    echo "Student's $key is $value\n";
}