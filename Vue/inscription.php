<?php $titre = 'Le Navigatron';
ob_start();
?>

<div id="container">
    <form action="Controlleur/inscription.php" method="post">
        <h1>Inscription</h1>
        <?php
        if(isset($_GET['erreur'])){
        $err = $_GET['erreur'];
        if($err==1)
            echo "<p style='color:red'>Votre mot de passe ne correspond pas avec la confirmation.</p>";
        if($err==2)
            echo "<p style='color:red'>Ce nom d'utilisateur existe déjà.</p>";
        if($err==3)
            echo "<p style='color:red'>Veuillez rentrer un adresse mail valide.</p>";
        if($err==4)
            echo "<p style='color:red'>Cet adresse mail correspond déjà à un autre utilisateur.</p>";
        }        
        ?> 
        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="pseudo" required />
        <br />
        <label><b>Mail</b></label>
        <input type="text" placeholder="Entrer l'adresse mail" name="mail" required />
        <br />
        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="mdp" required />
        <br />
        <label><b>Confirmer mot de passe</b></label>
        <input type="password" placeholder="Confirmer le mot de passe" name="confmdp" required />
        <br />
    <input type="submit" name="inscription" value="s'inscrire" />
    </form>
</div>

<?php
$contenu = ob_get_clean();
require 'gabarit.php';
?>