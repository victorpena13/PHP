<?php
$adjectives = array('dead', 'hairless', 'sadistic', 'metal', 'wild', 'domesticated', 'abnormal', 'medicated');

$nouns = array('factory reset button', 'blood rage', 'toaster', 'legend', 'sandwich', 'kitty');


function randAdjective() {
    global $adjectives;
    $random_keys = array_rand($adjectives, 3);
    echo $adjectives[$random_keys[0]];
}

function randNoun() {
    global $nouns;
    $random_keys = array_rand($nouns, 3);
    echo $nouns[$random_keys[0]];
}

randAdjective();
echo '<br>';
randNoun();