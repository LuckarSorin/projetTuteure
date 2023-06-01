<?php
    if (isset($_POST["getInclude"])) {
        switch ($_POST["getInclude"]) {
            case "1":
                $include = "../../includes/sauvegardes.php";
                break;
            case "2":
                $include = "../../includes/sauvegardes.php";
                break;
            case "3":
                $include = "../../includes/sauvegardes.php";
                break;
            default:
                $include = "../../includes/sauvegardes.php";
        }
    }
    else {
        header('Location: ../../accueil.php');
        exit();
    }
    echo $include ?? "../../includes/sauvegardes.php";
?>
