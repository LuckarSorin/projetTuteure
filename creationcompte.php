<?php
    /*si connecté renvoie à home.php*/
?>
<html>
    <head>
        <title>eHo - Création de compte</title>
    </head>
    <body>
        <h1>eHo</h1>
        <form action="./script/inscription.php" method="POST">
            <tr>
                <td>
                    <label>Nom de compte</label>
                    <input type="text" name="username" required/>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Adresse Mail</label>
                    <input type="email" name="mail" required/>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Mot de passe</label>
                    <input type="password" name="mot de passe" required/>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Répéter mot de passe</label>
                    <input type="password" name="mot de passe" required/>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="enter" value="S'inscrire">
        </form>
    </body>
</html>
