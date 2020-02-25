<?php

$message = 'Hello World';
$showMessage = false;

?>
<!DOCTYPE html>
<html>
<head>
    <title>Hello world!</title>
</head>
<body>
    <?php if ($showMessage) { ?>
        <h1><?php echo $message; ?></h1>
    <?php } else { ?>
        <h1>Sorry, no message...</h1>
    <?php } ?>
</body>
</html>
