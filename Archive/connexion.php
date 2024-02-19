<?php $titre = 'Le Navigatron';
ob_start();
?>

<div id="container">
    <!-- zone de connexion -->

    <form>
        <h1>Connexion</h1>

        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" id="user" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" id="MDP" required>

        <button type="button" id="conn">Connexion</button>
        <a href="Inscription.php">Pas de compte ? S'inscrire</a>
    </form>
</div>

<?php
$contenu = ob_get_clean();
require 'gabarit.php';
?>