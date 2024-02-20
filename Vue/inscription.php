<?php $titre = 'Le Navigatron';
ob_start();
?>

<div id="container">
    <form action="./../Controlleur/inscription.php" method="post">
        <h1>Inscription</h1>
 
        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="pseudo" required />
        <br />
        <label><b>Mail</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="mail" required />
        <br />
        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="mdp" required />
        <br />
        <label><b>Confirmer mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="confmdp" required />
        <br />
    <input type="submit" name="inscription" value="s'inscrire" />
    </form>
</div>

<?php
$contenu = ob_get_clean();
require 'gabarit.php';
?>