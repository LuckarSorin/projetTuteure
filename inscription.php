<?php
    /*si connecté renvoie à home.php*/
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>eHo - Création de compte</title>
        <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
        <link rel="icon" type="image/svg" href="img/favicon.svg">
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>-->
    </head>
    <body class="fond_sombre">
        <a href="./"><h1 class="center">eHo</h1></a>
        <form action="./controleurs/inscription.php" method="POST">
            <tr>
                <td>
                    <label>Nom de compte</label>
                    </br>
                    <input type="text" name="nom" required/>
                </td>
            </tr>
        </br>
        </br>
            <tr>
                <td>
                    <label>Adresse Mail</label>
                    </br>
                    <input type="email" name="email" required/>
                </td>
            </tr>
        </br>
        </br>
            <tr>
                <td>
                    <label>Mot de passe</label>
                    </br>
                    <input type="password" name="mot_de_passe" required/>
                </td>
            </tr>
        </br>
        </br>
            <tr>
                <td>
                    <label>Répéter mot de passe</label>                    </br>
                    <input type="password" name="mot_de_passe_repete" required/>
                </td>
            </tr>
        </br>
        </br>

            <tr>
                <td>
                    <input type="submit" name="enter" value="S'inscrire">
        </form>
    </body>
</html>
