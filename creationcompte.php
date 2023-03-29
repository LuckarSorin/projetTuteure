<?php
    /*si connecté renvoie à home.php*/
?>
<html>
    <head>
        <title>eHo - Création de compte</title>
    </head>
    <body>
        <a href="./"><h1>eHo</h1></a>
        <form action="./controleurs/inscription.php" method="POST">
            <tr>
                <td>
                    <label>Nom de compte</label>
                    <input type="text" name="nom" required/>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Adresse Mail</label>
                    <input type="email" name="email" required/>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Mot de passe</label>
                    <input type="password" name="mot_de_passe" required/>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Répéter mot de passe</label>
                    <input type="password" name="mot_de_passe_repete" required/>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="enter" value="S'inscrire">
        </form>
    </body>
</html>