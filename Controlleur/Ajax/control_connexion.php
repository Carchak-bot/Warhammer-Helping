<?php
session_start();
$json = [];

require "./../../Modele/modele.php";

$user="";
$MDP="";

	if( isset($_POST['user']) && isset($_POST['MDP']) ){
		$user= $_POST['user'];
		$MDP= $_POST['MDP'];

     	$request = 'SELECT count(*) FROM compte WHERE Nom_de_compte = "'.$user.'" and Mot_de_passe = "'.$MDP.'";'; 
        $tabUser = selectDatabase($request);
		if ($tabUser[0]["count(*)"] == '1'){
            $_SESSION['user'] = $user;
            exit();
        } else {
            echo "Nom d'utilisateur ou mot de passe incorrecte";
            exit();
        }
    }

echo json_encode($json);