<?php
require './../Warhammer-Helping/Modele/modele.php';

function acceuilNonInscrit()
{
    require './../Warhammer-Helping/Vue/VueFormulaireUn.php';
}

function acceuilInscrit()
{
    require './../Warhammer-Helping/Vue/VueAcceuil.php';
}

function campagneIn()
{
    require './../Warhammer-Helping/Vue/VueCampagneManager.php';
}

function creationPerso()
{
    require './../Warhammer-Helping/Vue/VueCreationPersonnage.php';
}

function AjouterPerso()
{
    //Faire la fonction pour ajouter dans la BDD
}