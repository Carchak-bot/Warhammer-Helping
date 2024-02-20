<?php $titre = 'Le Navigatron';
ob_start();
?>

<div id="container">
    <form action="./../Controlleur/testconnexion.php" method="post">
        <h1>Connexion</h1>
 
        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="pseudo" required />
        <br />
        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="mdp" required />
        <br />
    <input type="submit" name="connexion" value="Connexion" />
    <a href="Inscription.php">Pas de compte ? S'inscrire</a>

    <?php
        if(isset($_GET['erreur'])){
        $err = $_GET['erreur'];
        if($err==1)
            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
 ?>
    </form>
</div>

<?php
$contenu = ob_get_clean();
require 'gabarit.php';
?>