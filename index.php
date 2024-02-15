<?php
require './../Warhammer-Helping/Controlleur/controlleur.php';
      


if (isset($_GET['action'])) {
    if ($_GET['action'] = 'recette') {
        AjouterPerso();
    }
} else {
    //acceuilNonInscrit();
    creationPerso();
    //acceuilInscrit();
}