<?php
    /*si connecté renvoie à home.php*/
?>
<html>
    <head>
        <title>eHo - Connexion</title>
    </head>
    <body>
        <h1>eHo</h1>
        <form action="./script/connexion.php" method="POST">
            <tr>
                <td>
                    <label>Nom de compte</label>
                </td>
                <td>
                    <input type="text" name="username" required />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Mot de passe</label>
                </td>
                <td>
                    <input type="password" name="username" required />
                </td>
            </tr>
            
            <tr>
                <td>
                    <input type="submit" name="enter" value="Se connecter">
                </td>
            </tr>
        </form>
    </body>
</html>
