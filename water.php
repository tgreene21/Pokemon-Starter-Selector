<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water 💦</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
        <?php 
        $generation = rand(1, 10);
        $starter = "";
        $type = "Water";
        
        switch ($generation) {
            case 1:
                $starter = "Squirtle";
                break;       
            case 2:
                $starter = "Totodile";
                break;       
            case 3:
                $starter = "Mudkip";
                break;       
            case 4:
                $starter = "Piplup";
                break;       
            case 5:
                $starter = "Oshawott";
                break;       
            case 6:
                $starter = "Froakie";
                break;       
            case 7:
                $starter = "Popplio";
                break;       
            case 8:
                $starter = "Sobble";
                break;       
            case 9:
                $starter = "Quaxly";
                break;       
            case 10:
                $starter = "Gecqua";
                break;       
        }
    ?>

    <h1>Your starter is: <?php echo $starter;?> </h1>
    <img src="./images/<?php echo $starter; ?>.png" />
</body>
</html>
</body>
</html>