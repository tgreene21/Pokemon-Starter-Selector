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
        $generation = rand(1, 10);
        $starter = "";
        $type = "Grass";
        
        switch ($generation) {
            case 1:
                $starter = "Bulbasaur";
                break;       
            case 2:
                $starter = "Chikorita";
                break;       
            case 3:
                $starter = "Treecko";
                break;       
            case 4:
                $starter = "Turtwig";
                break;       
            case 5:
                $starter = "Snivy";
                break;       
            case 6:
                $starter = "Chespin";
                break;       
            case 7:
                $starter = "Rowlet";
                break;       
            case 8:
                $starter = "Grookey";
                break;       
            case 9:
                $starter = "Sprigatito";
                break;       
            case 10:
                $starter = "Browt";
                break;       
        }
    ?>

    <h1>Your starter is: <?php echo $starter;?> </h1>
    <img src="./images/<?php echo $starter; ?>.png" />
</body>
</html>