<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grass 🍃</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <?php 
       $type = "Grass";
       include "selection.php";
    ?>

    <h1>Your starter is: <?php echo $starter;?> </h1>
    <img src="./images/<?php echo $starter; ?>.png" />
</body>

<footer id="<?php echo $type; ?>">
    <p>Enjoy your starter!</p>
</footer>

</html>