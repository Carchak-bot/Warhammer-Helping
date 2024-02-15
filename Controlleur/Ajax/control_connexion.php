<?php 
	//Connexion à la base de données
require "./../../fonctions.php";

$user="";
$MDP="";

	if( isset($_POST['user']) && isset($_POST['MDP']) ){
		$user= $_POST['user'];
		$MDP= $_POST['MDP'];

     	$request = 'SELECT count(*) FROM compte WHERE Nom_de_compte = "'.$user.'" and Mot_de_passe = "'.$MDP.'";'; 
        $tabUser = selectDatabase($request);
		if ($tabUser[0]["count(*)"] == '1'){
            echo 'Connexion réussie';
            exit();
        } else {
            echo "Nom d'utilisateur ou mot de passe incorrecte";
            exit();
        }
    }