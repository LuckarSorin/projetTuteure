<?php
    //TODO
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>eHo - Accueil</title>
        <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
        <link rel="icon" type="image/svg" href="assets/img/favicon.svg">
        <script src="assets/js/jquery.js"></script>
    </head>
    <body class="fond_sombre flex">
        <aside class="fond_sombre flex menu">
            <figure class="eho">
                <a href="https://www.eho.esteam.mmi-velizy.fr">
                    <img src="assets/img/logo_bottom.svg" alt="eHo" title="eHo">
                </a>
            </figure>
            <details>
                <summary>Nouvelle simulation</summary>
                <p><a href="https://www.eho.esteam.mmi-velizy.fr/jeu.php">Nouvelle simulation</a></p>
            </details>
            <details>
                <summary>Mon compte</summary>
                <p>[...]</p>
                <p>[...]</p>
                <p>[...]</p>
            </details>
            <details>
                <summary>Mes sauvegardes</summary>
                <p class="ajax_include 1">Consulter mes sauvegardes</p>
                <p class="ajax_include 2">Gérer mes sauvegardes</p>
                <p><a href="?page=3">Ajouter une sauvegarde</a></p>
            </details>
            <details>
                <summary>Paramètres</summary>
                <p>[...]</p>
                <p>[...]</p>
                <p>[...]</p>
            </details>
        </aside>
        <main>
            <?php
                /*
                
                $page = $_GET['page'] ?? 0;
                
                switch ($page) {
                    case "1":
                        include('./accueil/sauvegardes.html');
                        break;
                    case "2":
                        include('./accueil/sauvegardes.html');
                        break;
                    case "3":
                        include('./accueil/sauvegardes.html');
                        break;
                    default:
                        include('./accueil/sauvegardes.html');
                }
                
                */
                
                // A faire en JQuery finalement, ce sera mieux. Si possible prévoir le cas où JS désactivé
            ?>
        </main>
        <!-- Sélection des configurations en JQuery -->
        <script>
            $(document).ready(function() {
                // Fonction qui appelle via AJAX le fichier ajax_accueil_includes.php qui s'occupe de [...]
                function getInclude(number) {
                    jQuery.ajax({
                        type: "POST",
                        url: "ajax/ajax_accueil_includes.php",
                        dataType: "text",
                        data: {
                            getInclude : number
                        },
                        success: function(response) {
                            console.log(response);
                            $("main").load(response);
                            /*if (JSON.parse(response) == true) {
                                console.log("Test cookie accepté");
                            }
                            else {
                                console.log("Test cookie refusé");
                            }*/
                        }
                    });
                    console.log("AJAX DONE");
                }
                
                $('p.ajax_include').on('click', function(){
                    $this = $(this);
                    getInclude($this.attr('class').substr($this.attr('class').indexOf(" ") + 1));
                });
                
                /*
                
                // Détection des clics des boutons de consentement des cookies
                $('button.cookies_acceptes').on('click', function(){
                    googleMapsCookiesAccept(true);
                    $('aside.panneau_cookies').animate({opacity: 'hide', height: 'hide'}, 'slow');
                });
                $('button.cookies_refuses').on('click', function(){
                    googleMapsCookiesAccept(false);
                    $('aside.panneau_cookies').animate({opacity: 'hide', height: 'hide'}, 'slow');
                });
                // Détection du clic sur l'image pour ouvrir le panneau de configuration des cookies
                $('img.ouvrir_cookies').on('click', function() {
                    $('aside.panneau_cookies').animate({opacity: 'toggle', height: 'toggle'}, 'slow');
                });
                $('button.fermer_panneau').on('click', function() {
                    $('aside.panneau_cookies').animate({opacity: 'hide', height: 'hide'}, 'slow');
                });
                
                */
            });
        </script>
    </body>
</html>
