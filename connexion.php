<?php
    /*si connecté renvoie à home.php*/
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>eHo - Connexion</title>
        <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
        <link rel="icon" type="image/svg" href="img/favicon.svg">
    </head>
    <body class="fond_sombre">
        <a href="./"><h1 class="center"> eHo </h1></a>
        <div class="erreurlog">
            <?php
                if(isset($_GET['r'])){
                    if($_GET['r']==1){
                        echo "Mot de passe incorrect.";
                    }
                    elseif($_GET['r']==2){
                        echo "Nom d'utilisateur introuvable.";
                    }
                }
            ?>
        </div>
        <form class="formulaires" action="./assets/controleurs/connexion.php" method="POST">
            <tr>
                <td>
                    <label> Nom de compte </label>
                </td>
                </br>
                <td>
                    <input type="text" name="nom" required />
                </td>
            </tr>
        </br>
        </br>
            <tr>
                <td>
                    <label> Mot de passe </label>
                </td>
                </br>
                <td>
                    <input type="password" name="mot_de_passe" required />
                </td>
            </tr>
        </br>
        </br>
            <tr>
                <td>
                    <input type="submit" name="enter" value="Se connecter">
                </td>
            </tr>
        </form>
    </body>
</html>
