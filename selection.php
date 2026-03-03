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