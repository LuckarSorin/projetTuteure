<?php
    if (isset($_POST["getInclude"])) {
        switch ($_POST["getInclude"]) {
            case "compte":
                $include = "includes/compte.php";
                break;
            case "sauvegarde":
                $include = "includes/sauvegardes.php";
                break;
            case "parametre":
                $include = "includes/parametres.php";
                break;
            default:
                $include = "includes/compte.php";
        }
    }
    else {
        header('Location: accueil.php');
        exit();
    }
    echo $include ?? "includes/compte.php";
?>
