<?php
    $connected = false;
    session_start();
    require_once '../assets/controleurs/config.php';
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
    
        $sql = "SELECT id_Utilisateur, nomUtilisateur, email FROM Utilisateur WHERE id_Utilisateur = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $nom = $row['nomUtilisateur'];
        $email = $row['email'];

        $connected = true;
    }
?>
<html>
    <body>
        <nav class="flex fond_sombre accueil">
            <figure class="profil vide">

            </figure>
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

                <?php 
                    if($connected == true){
                        echo "
                            <ul>
                                <li>
                                    <p class='compteTexte'>". $nom ."nom(pseudo)</p>
                                </li>
                                <li>
                                    <p class='compteTexte'>". $email ."email@mail.fr</p>
                                </li>
                                <li>
                                    <p class='compteButton'><button>Changer de mot de passe</button></p>
                                </li>
                                <li>
                                    <p class='compteButton'><button>Supprimer mon compte</button></p>
                                </li>
                            </ul>
                        ";
                    }else{
                        echo "
                            <h2 class='noAccount'> Vous n'êtes pas connecté à un compte </h2>
                        ";
                    }
                ?>
                
                <br />
            </div>
        </section>
    </body>
</html>