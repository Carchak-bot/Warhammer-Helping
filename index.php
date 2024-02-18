<?php
session_start();
require './../Warhammer-Helping/Controlleur/controlleur.php';

if (isset($_SESSION['pseudo'])) {
    $pseudo = $_SESSION['pseudo'];
} else {
    $pseudo = null;
}



if (isset($pseudo)) {
    echo "<h1>Bienvenue $pseudo</h1>";
    try {
        if (isset($_GET['action'])) {
            if ($_GET['action'] = 'CreationCampagne') {
                //..
            }
            if ($_GET['action'] = 'DetailsCampagne') {
                campagneIn();
            }
            if ($_GET['action'] = 'CreationPerso') {
                creationPerso();
            }
            if ($_GET['action'] = 'DetailsPerso') {
                detailsPerso();
            }
            if ($_GET['action'] = 'updatePerso') {
                creationPerso();
            }
        } else {
            acceuilInscrit();
        }
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
} else {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'Connexion') {
            connexion();
        }
    } else {
        acceuilNonInscrit();
    }
}
