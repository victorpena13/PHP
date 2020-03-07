<?php

//Require or include statements are allowed here.
//All other code goes in the pageController function.

function pageController() {
    //handles all processing for this page.

    $displayedCounter = 1;
    function increment() {
        global $displayedCounter;
        $displayedCounter++;
    }

    function decrement() {
        global $displayedCounter;
        $displayedCounter--;
    }

    if (empty($displayedCounter)) {
        $displayedCounter = 1;
    }




}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>counter</title>
    </head>
    <body>

    <a href="">Up</a>
    <a href="">down</a>



    </body>
</html>