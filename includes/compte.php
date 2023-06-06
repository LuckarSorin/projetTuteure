<?php
    $connected = 0;
    session_start();
    /*require_once '../assets/controleurs/config.php';*/
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
    
        $sql = "SELECT id_Utilisateur, nomUtilisateur, email FROM Utilisateur WHERE id_Utilisateur = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $_SESSION['nomUtilisateur'] = $row['nomUtilisateur'];
        $_SESSION['email'] = $row['email'];

        $nom = $_SESSION['nomUtilisateur'];
        $email = $_SESSION['email'];

        $connected = 1;
    }
?>
<html>
    <body>
        <nav class="flex fond_sombre accueil">
            <figure class="profil vide"></figure>
            <h3 class="center">Mon compte</h3>
            <figure class="profil">
                <a href="./accueil.php">
                    <img src="assets/img/login.svg" alt="Mon profil" title="Mon profil">
                </a>
            </figure>
        </nav>
        <section class="gestioncompte">
            <div>
                <br />
            </div>
        </section>
    </body>
</html>