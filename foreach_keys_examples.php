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

$students = array(
    array('name' => 'Virginia Potts', 'age' => 29),
    array('name' => 'Elon Musk', 'age' => 42),
    array('name' => 'Rasmus Lerdorf', 'age' => 45),
    array('name' => 'Marissa Mayer', 'age' => 38)
);

foreach ($students as $student) {
    echo "{$student['name']} is {$student['age']} years old.\n";
}

foreach ($students as $student) {
    foreach ($student as $key => $value) {
        echo "Student's $key is $value\n";
    }
}

