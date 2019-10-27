<?php

define('SIDES_OF_DICE', 6);

$roll = rand(1, SIDES_OF_DICE);

echo "You rolled {$roll}\n";