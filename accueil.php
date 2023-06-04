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
                <a href="./">
                    <img src="assets/img/logo_bottom.svg" alt="eHo" title="eHo">
                </a>
            </figure>
            <p><a href="jeu.php">Nouvelle simulation</a></p>
            <p class="ajax_include 1">Mon compte</p>
            <p class="ajax_include 2">Mes sauvegardes</p>
            <p class="ajax_include 3">Paramètres</p>
        </aside>
        <main class="accueil">
        </main>
        <!-- Sélection des configurations en JQuery -->
        <script>
            $(document).ready(function() {
                getInclude(1);
                
                // Fonction qui appelle via AJAX le fichier ajax_accueil_includes.php qui s'occupe de [...]
                function getInclude(number) {
                    jQuery.ajax({
                        type: "POST",
                        url: "./assets/ajax/ajax_accueil_includes.php",
                        dataType: "text",
                        data: {
                            getInclude : number
                        },
                        success: function(response) {
                            console.log(response);
                            $("main").load(response);
                        }
                    });
                    console.log("AJAX DONE");
                }
                
                $('p.ajax_include').on('click', function(){
                    $this = $(this);
                    getInclude($this.attr('class').substr($this.attr('class').indexOf(" ") + 1));
                });
            });
        </script>
    </body>
</html>
