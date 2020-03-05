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
        <br>
        <a href="http://google.com">Google</a>
        <br>
        <form method="GET" action="https://duckduckgo.com/">
            <input type="text" name="q" value="" placeholder="Search DuckDuckGo">
            <button type="submit">Go!</button>
        </form>


    </body>
</html>