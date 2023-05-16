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
    </head>
    <body class="fond_sombre flex">
        <aside class="fond_sombre flex menu">
            <figure class="eho">
                <a href="./index.php">
                    <img src="assets/img/placeholder.png" alt="eHo" title="eHo">
                </a>
            </figure>
            <details>
                <summary>Nouvelle simulation</summary>
                <p><a href="https://eho.esteam.mmi-velizy.fr/game.php">Nouvelle simulation</a></p>
            </details>
            <details>
                <summary>Mon compte</summary>
                <p>[...]</p>
                <p>[...]</p>
                <p>[...]</p>
            </details>
            <details>
                <summary>Mes sauvegardes</summary>
                <p><a href="?page=1">Consulter mes sauvegardes</a></p>
                <p><a href="?page=2">Gérer mes sauvegardes</a></p>
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
                $page = $_GET['page'];
                
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
                
                // A faire en JQuery finalement, ce sera mieux. Si possible prévoir le cas où JS désactivé
            ?>
        </main>
        <!-- Sélection des configurations en JQuery -->
    </body>
</html>