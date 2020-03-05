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
<tr>
    <?php foreach ($favoriteThings as $favoriteThing) { ?>
        <th><?php echo $favoriteThing; ?></th>
    <?php } ?>
</tr>
</body>
</html>
