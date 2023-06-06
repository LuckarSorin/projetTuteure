<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>eHo - Le jeu</title>
        <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
        <link rel="icon" type="image/svg" href="assets/img/favicon.svg">
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/selection.js"></script>
    </head>
    <body class="fond_sombre">
        <?php
            /* --- Gestions des menus --- */

            $logged = false; // TODO par l'équipe Back
            if($logged) { // TODO par l'équipe Back
                include("./includes/menu_logged.php");
            }
            else {
                include("./includes/menu_guest.php");
            }

            /* --- Gestions des contenus --- */

            if (isset($_GET["habitat"])) {
                if (isset($_GET["habitants"])) {
                    if (isset($_GET["piece"])) {
                        if (($_GET["habitat"] != 1) && ($_GET["habitat"] != 3)) {
                            include("./includes/choix_habitation.php");
                        }
                        else if (($_GET["habitants"] < 1) || ($_GET["habitants"] > 9)) {
                            include("./includes/choix_habitants.php");
                        }
                        else if (($_GET["piece"] < 1) || ($_GET["piece"] > 5)) {
                            include("./includes/vuemaison.php");
                        }
                        else {
                            include("./includes/vuepiece.php");
                        }
                    }
                    else {
                        if (($_GET["habitat"] != 1) && ($_GET["habitat"] != 3)) {
                            include("./includes/choix_habitation.php");
                        }
                        else if (($_GET["habitants"] < 1) || ($_GET["habitants"] > 9)) {
                            include("./includes/choix_habitants.php");
                        }
                        else {
                            include("./includes/vuemaison.php");
                        }
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
        ?>
    </body>
</html>
