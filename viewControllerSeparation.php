<?php

function pageController() {
    $data = array();

    $data['message'] = 'Hello MOM';
    $data['test'] = 'test';

    return $data;
}

extract(pageController());
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP + HTML</title>
    </head>
    <body>
    <?php echo $message; ?>
    <?php echo $test; ?>

    </body>
</html>