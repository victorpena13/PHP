<?php

var_dump($argc);

var_dump($argv);

if ($argc == 3) {
    echo "arg1 is {$argv[1]} and arg2 is {$argv[2]}\n";
}

exit(0);

