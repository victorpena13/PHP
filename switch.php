<?php


// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$dayOfWeek = date('N');

switch ($dayOfWeek) {
    case 1:
        echo "Monday";
    case 2:
        echo "Tuesday";
    case 3:
        echo "Wednsday";
    case 4:
        echo "Thursday";
    case 5:
        echo "Friday";
}