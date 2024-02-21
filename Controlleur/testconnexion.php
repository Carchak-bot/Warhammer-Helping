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

        $request = "SELECT Nom_de_compte, Mot_de_passe FROM compte WHERE Nom_de_compte ='". $user ."';";
        $tabUser = selectDatabase($request);

        if ($tabUser[0]["Nom_de_compte"] == $user){
            $verifMdp = password_verify($MDP, $tabUser[0]["Mot_de_passe"]);

            if ($verifMdp == true){
                $_SESSION['pseudo'] = $user;
                header('Location: ./../index.php');
                exit();
            }
            else {
                header('Location: ../index.php?action=Connexion&erreur=1');
                exit();
            }
        }
        else {
            header('Location: ../index.php?action=Connexion&erreur=1');
            exit();
        }
    } catch (Exception $e) {
        echo ('Erreur : ' . $e->getMessage());
    }
}
