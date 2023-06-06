<?php
    /*checker si connecter*/
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>eHo - Le jeu</title>
        <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
        <link rel="icon" type="image/svg" href="assets/img/favicon.svg">
        <script src="assets/js/jquery.js"></script>
    </head>
    <body class="fond_sombre">
        <?php
            $logged = false; // TODO par l'équipe Back
            if($logged) { // TODO par l'équipe Back
                include("./includes/menu_logged.php");
            }
            else {
                include("./includes/menu_guest.php");
            }
        ?>
        <main class="jeu">
            <?php
                if (isset($_GET["habitat"])) {
                    if (isset($_GET["habitants"])) {
                        if (($_GET["habitat"] != 1) && ($_GET["habitat"] != 3)) {
                            include("./includes/choix_habitation.php");
                        }
                        else if (($_GET["habitants"] < 1) && ($_GET["habitants"] > 10)) {
                            include("./includes/choix_habitants.php");
                        }
                        else {
                            include("vuemaison.php");
                        }
                    }
                    else {
                        if (($_GET["habitat"] != 1) && ($_GET["habitat"] != 3)) {
                            include("./includes/choix_habitation.php");
                        }
                        else {
                            include("./includes/choix_habitants.php");
                        }
                    }
                }
                else {
                    include("./includes/choix_habitation.php");
                }
                
                // TODO => Vérifier que habitat vaut bien soit 1 soit 3
            ?>
        </main>
    </body>
</html>
