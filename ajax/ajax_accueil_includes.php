<?php
    if (isset($_POST["getInclude"])) {
        switch ($_POST["getInclude"]) {
            case "1":
                $include = "accueil/sauvegardes.html";
                break;
            case "2":
                $include = "accueil/sauvegardes.html";
                break;
            case "3":
                $include = "accueil/sauvegardes.html";
                break;
            default:
                $include = "accueil/sauvegardes.html";
        }
    }
    else {
        header('Location: https://www.eho.esteam.mmi-velizy.fr/accueil.php');
        exit();
    }
    echo $include ?? "accueil/sauvegardes.html";
?>
