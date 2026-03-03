<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fire 🔥</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <?php 
       $type = "Fire";
       include "selection.php";
    ?>

    <h1>Your starter is: <?php echo $starter;?> </h1>
    <img src="./images/<?php echo $starter; ?>.png" />
    <button type="button"><a href = "grass.php"> Grass 🍃</a></button>
    <button type="button"><a href = "fire.php"> Choose Another 🔥</a></button>
    <button type="button"><a href = "water.php"> Water 💦</a></button>
</body>

<footer id="<?php echo $type; ?>">
    <p>Enjoy your starter!</p>
</footer>
</html>
