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
        <aside>
            <p class="center">Bienvenue sur eHo, le simulateur de consommation pour vous aider à réduire votre consommation énergétique [à reformuler]</p>
        </aside>
        <h2 class="center">Pour commencer, sélectionnez votre habitation</h2>
        <section>
            <div class="selection">
                <div class="flex images">
                    <figure>
                        <img src="assets/img/logo_bottom.svg" alt="eHo" title="eHo">
                        <figcaption class="center">Maison</figcaption>
                    </figure>
                    <figure>
                        <img src="assets/img/logo_bottom.svg" alt="eHo" title="eHo">
                        <figcaption class="center">Appartement</figcaption>
                    </figure>
                </div>
                <div class="curseur"></div>
                <a href="">Suivant</a>
            </div>
        </section>
    </body>
</html>
