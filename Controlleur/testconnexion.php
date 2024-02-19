<?php 
session_start();
require "./../Modele/modele.php";
if(isset($_POST['connexion'])){
    try
    {
        $user = "root";
        $MDP = '';

        $user = htmlspecialchars($_POST['pseudo']);
        $MDP = htmlspecialchars($_POST['mdp']);

        $request = 'SELECT count(*) FROM compte WHERE Nom_de_compte = "'.$user.'" and Mot_de_passe = "'.$MDP.'";'; 
        $tabUser = selectDatabase($request);
		if ($tabUser[0]["count(*)"] == '1'){
            $_SESSION['user'] = $user;
            header('Location: ./../Index.php');
            exit();
        } else {
            echo "Nom d'utilisateur ou mot de passe incorrecte";
            header('Location: ./../Vue/testconnexion.php?erreur=1');
            exit();
        }
    } catch (Exception $e) {
        echo ('Erreur : ' . $e->getMessage());
    }
}
