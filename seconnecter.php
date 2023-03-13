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
            <label>Nom de compte</label>
            <input type="text" name="username" required />
            <label>Mot de passe</label>
            <input type="password" name="username" required />
            
            <input type="submit" name="enter" value="Se connecter">
        </form>
    </body>
</html>
