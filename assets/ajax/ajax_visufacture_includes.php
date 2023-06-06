<?php
    if (isset($_POST["getInclude"])) {
        switch ($_POST["getInclude"]) {
            case "source":
                $include = "includes/graphetypesource.php";
                break;
            case "piece":
                $include = "includes/graphetypepiece.php";
                break;
            case "facture":
                $include = "includes/facture.php";
                break;
            case "global":
                $include = "includes/global.php";
                break;
            default:
                $include = "includes/global.php";
        }
    }
    else {
        header('Location: visufacture.php');
        exit();
    }
    echo $include ?? "includes/facture.php";
?>
