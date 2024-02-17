<?php
require './../Warhammer-Helping/Modele/modele.php';
require 'controlleur.php';

if ($_GET['action'] == 'creaPerso') {
    try {
        $db = getDatabase();
        
        $requete = $db->prepare('INSERT INTO personnage 
        (Nom, 
        Role, 
        Stat_force, 
        Force_surnaturelle, 
        Stat_endurance, 
        Endurance_Surnaturelle, 
        Stat_agilite, 
        Agilite_surnaturelle, 
        Stat_intelligence, 
        Intelligence_surnaturelle, 
        Stat_perception, 
        Perception_surnaturelle, 
        Stat_force_mentale, 
        force_mentale_surnaturelle, 
        Stat_social, 
        social_surnaturelle, 
        Navigation_warp, 
        Commandement, 
        Charisme, 
        Pilotage,
        Psyniscience) 
        VALUES (
            :Nom,
            :Role,
            :Stat_Force, 
            :Force_Surnaturelle,
            :Stat_Endurance,
            :Endurance_Surnaturelle,
            :Stat_Agilite,
            :Agilite_Surnaturelle,
            :Stat_Intelligence,
            :Intelligence_Surnaturelle,
            :Stat_Perception,
            :Perception_Surnaturelle,
            :Stat_force_mentale,
            :Force_Mentale_Surnaturelle,
            :Stat_Social,
            :Social_Surnaturelle,
            :Navigation_Warp,
            :Commandement,
            :Charisme,
            :Pilotage,
            :Psyniscience)');


        $req->bindValue(':Nom', $_POST["nom"], PDO::PARAM_STR);
        $req->bindValue(':Role', $_POST["role"], PDO::PARAM_STR);
        $req->bindValue(':Stat_Force', $_POST["s"], PDO::PARAM_STR);
        $req->bindValue(':Force_Surnaturelle', $_POST["sSurnat"], PDO::PARAM_STR);
        $req->bindValue(':Stat_Endurance', $_POST["t"], PDO::PARAM_STR);
        $req->bindValue(':Endurance_Surnaturelle', $_POST["tSurnat"], PDO::PARAM_STR);
        $req->bindValue(':Stat_Agilite', $_POST["agiTimonier"], PDO::PARAM_STR);
        $req->bindValue(':Agilite_Surnaturelle', $_POST ("agiSurnatTimonier"), PDO::PARAM_STR);
        $req->bindValue(':Stat_Intelligence', $_POST["int"], PDO::PARAM_STR);
        $req->bindValue(':Intelligence_Surnaturelle', $_POST["intSurnat"], PDO::PARAM_STR);
        $req->bindValue(':Stat_Perception', $_POST["per"], PDO::PARAM_STR);
        $req->bindValue(':Perception_Surnaturelle', $_POST["perSurnat"], PDO::PARAM_STR);
        $req->bindValue(':Stat_force_mentale', $_POST["wp"], PDO::PARAM_STR);
        $req->bindValue(':Force_Mentale_Surnaturelle', $_POST["wpSurnat"], PDO::PARAM_STR);
        $req->bindValue(':Stat_Social', $_POST["soc"], PDO::PARAM_STR);
        $req->bindValue(':Social_Surnaturelle', $_POST["socSurnat"], PDO::PARAM_STR);
        $req->bindValue(':Navigation_Warp', $_POST["navWarp"], PDO::PARAM_STR);
        $req->bindValue(':Commandement', $_POST["leadership"], PDO::PARAM_STR);
        $req->bindValue(':Charisme', $_POST["leadership"], PDO::PARAM_STR);
        $req->bindValue(':Pilotage', $_POST["pilot"], PDO::PARAM_STR);
        $req->bindValue(':Psyniscience', $_POST["psyniscience"], PDO::PARAM_STR);

        $requete->execute();

        header('Location: ./../Warhammer-Helping/index.php?action=listePerso');
    } catch (Exception $e) {
        echo ('Erreur : ' . $e->getMessage());
    }
}