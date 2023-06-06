<?php

    require_once 'config.php';

    if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['mot_de_passe']) && isset($_POST['mot_de_passe_repete'])) {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $mot_de_passe = $_POST['mot_de_passe'];
        $mot_de_passe_repete = $_POST['mot_de_passe_repete'];

        // Vérifier si les mots de passe correspondent
        if ($mot_de_passe !== $mot_de_passe_repete) {
            echo "Les mots de passe ne correspondent pas.";
            exit;
        }

        // Hacher le mot de passe
        $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

        // Insérer l'utilisateur dans la base de données
        $sql = "INSERT INTO Utilisateur (nomUtilisateur, email, motDePasse) VALUES (:nom, :email, :mot_de_passe)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mot_de_passe', $mot_de_passe_hash);

        if ($stmt->execute()) {
            header("Location: ../../index.php?r=0");
        } else {
            header("Location: ../../inscription.php?r=1");
        }
    }
?>