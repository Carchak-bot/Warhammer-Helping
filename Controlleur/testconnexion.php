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
            $_SESSION['pseudo'] = $user;
            header('Location: ./../index.php');
            exit();
        } else {
            echo "Nom d'utilisateur ou mot de passe incorrects";
            header('Location: ../index.php?action=Connexion&erreur=1');
            exit();
        }
    } catch (Exception $e) {
        echo ('Erreur : ' . $e->getMessage());
    }
}
