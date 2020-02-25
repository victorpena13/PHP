<?php

$favoriteFoods = ['Brownies', 'Pound Cake', 'Doughnuts'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Hello World</title>
</head>
<body>
    <h1>My Fav Foods</h1>
    <ol>
        <?php foreach ($favoriteFoods as $favoriteFood) { ?>
            <li><?php echo $favoriteFood; ?></li>
        <?php } ?>
    </ol>
</body>
</html>
