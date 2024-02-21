<?php 
session_start();
require "./../Modele/modele.php";
if(isset($_POST['inscription'])){
    try
    {

        $user = htmlspecialchars($_POST['pseudo']);
        $mail = htmlspecialchars($_POST['mail']);
        $MDP = htmlspecialchars($_POST['mdp']);
        $confMDP = htmlspecialchars($_POST['confmdp']);

        if($MDP != $confMDP){
            header('Location: ../index.php?action=Inscription&erreur=1');
            exit;            
        } else {
            $request = 'SELECT count(*) FROM compte WHERE Nom_de_compte = "'.$user.'";';
            $tabUser = selectDatabase($request);
            if ($tabUser[0]["count(*)"] == '1'){
                header('Location: ../index.php?action=Inscription&erreur=2');
                exit;
            } else {
                if (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
                    header('Location: ../index.php?action=Inscription&erreur=3');
                    exit;
                } else {
                    $request = 'SELECT count(*) FROM compte WHERE Mail = "'.$mail.'";';
                    $tabMail = selectDatabase($request);
                    if ($tabMail[0]["count(*)"] == '1'){
                        header('Location: ../index.php?action=Inscription&erreur=4');
                        exit;
                    } else {
                        $MDP = password_hash($MDP, PASSWORD_DEFAULT);
                        $request = "INSERT INTO compte (Nom_De_Compte, Mot_De_Passe, Mail) VALUES ('". $user . "', '". $MDP ."', '". $mail ."')";
                        manipDb($request);
                        header('Location: ../index.php?action=Connexion');
                    }
                }
            }
        }
    } catch (Exception $e) {
        echo ('Erreur : ' . $e->getMessage());
    }
}