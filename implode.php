<?php
// implode()
// takes an array and combines the values into a string.
// implode() syntax:
// string implode ( string $glue, array $pieces )

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsArray = explode (', ', $physicistsString);

//print_r($physicistsArray);

$physicistsStrng = implode('|', $physicistsArray);
echo $physicistsStrng . "\n";

// result:
// Gordon Freeman|Samantha Carter|Sheldon Cooper|Quinn Mallory|Bruce Banner|Tony Stark