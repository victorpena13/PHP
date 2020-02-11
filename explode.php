<?php
//explode()
//this converts a string into an array.
// explode format:
// $array = explode ( string $delimiter, string $string [, int $limit ] )


$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsArray = explode (', ', $physicistsString);

print_r($physicistsArray);