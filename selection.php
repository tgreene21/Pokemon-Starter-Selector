<?php 

    $generation = rand(1, 10);
    $starter = "";

    switch ($type) {

        case "Grass":

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

            break;

        case "Fire":

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
            break;

        case "Water":

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
        break;
    }

?>

<div id = "header" class = "<?php echo $type; ?>">
    <h1>Your starter is: <?php echo $starter;?> </h1>
</div>

<div id = "center">
    <img src="./images/<?php echo $starter; ?>.png" />
    <h2>Choose another starter?</h2>
    <div class = "buttons">
        <button type="button"><a href = "grass.php"> Grass 🍃</a></button>
        <button type="button"><a href = "fire.php"> Fire 🔥</a></button>
        <button type="button"><a href = "water.php"> Water 💦</a></button>
    </div>
</div>

<div id = "footer" class = "<?php echo $type; ?>">
    <h2>Enjoy your: <?php echo $starter;?>! </h2>
</div>
