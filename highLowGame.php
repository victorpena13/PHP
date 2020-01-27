<?php


if (argc == 2) {
    $number = mt_rand($argv[1], $argv[2]);
    fwrite(STDOUT, "guess a number between {$argv[1]} and {$argv[2]}");
} else if (argc == 0) {
    $number = mt_rand(1,100);
    fwrite(STDOUT, "Guess a number between 1 and 100.  Press 0 to quit. ");
}



$answer = fgets(STDIN);
$attempts = 1;

if ($answer != $number && $answer != 0) {
    do {
        if($answer > $number) {
            echo "lower. guess again: ";
            $answer = fgets(STDIN);
            $attempts++;
        } else if ($answer < $number) {
            echo  "higher. guess again: ";
            $answer = fgets(STDIN);
            $attempts++;
        }

    } while ($answer != $number && $answer !=0);
}

if ($answer == $number) {
    echo "You got it! ";
    echo "attempts: $attempts\n";
} elseif ($answer == 0) {
    echo "Exiting.", PHP_EOL;
    exit();
}

