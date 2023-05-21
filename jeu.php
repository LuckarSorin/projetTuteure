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
                include("./includes/menu_logged.html");
            }
            else {
                include("./includes/menu_guest.html");
            }
        ?>
        <main class="jeu">
            <?php
                include("./jeu/choix_habitation.html");
                
                // TODO => Vérifier que habitat vaut bien soit 1 soit 3
            ?>
        </main>
    </body>
</html>
