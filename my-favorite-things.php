<?php

$favoriteThings = array('Tacos', 'Pizza', 'Architecture', 'Software Development', 'Conversation');

?>
<!DOCTYPE html>
<html>
<head>
    <title>Favorite Things</title>
</head>
<body>
<h1>My Fav Things</h1>
<ol>
    <?php foreach ($favoriteThings as $favoriteThing) { ?>
        <li><?php echo $favoriteThing; ?></li>
    <?php } ?>
</ol>
</body>
</html>
