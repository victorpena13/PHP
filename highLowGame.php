<?php



function randomNumber() {
    return $randomNumber = (rand(0,100) . "\n");
}



$number = mt_rand(1,100);
fwrite(STDOUT, "Guess a number between 1 and 100.  Press 0 to quit. ");


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

