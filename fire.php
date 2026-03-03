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
        $generation = rand(1, 10);
        $starter = "";
        $type = "Fire";
        
        switch ($generation) {
            case 1:
                $starter = "Charmander";
                break;       
            case 2:
                $starter = "Cyndaquil";
                break;       
            case 3:
                $starter = "Torchic";
                break;       
            case 4:
                $starter = "Chimchar";
                break;       
            case 5:
                $starter = "Tepig";
                break;       
            case 6:
                $starter = "Fennekin";
                break;       
            case 7:
                $starter = "Litten";
                break;       
            case 8:
                $starter = "Scorbunny";
                break;       
            case 9:
                $starter = "Fuecoco";
                break;       
            case 10:
                $starter = "Pombon";
                break;       
        }
    ?>

    <h1>Your starter is: <?php echo $starter;?> </h1>
    <img src="./images/<?php echo $starter; ?>.png" />
</body>
</html>
