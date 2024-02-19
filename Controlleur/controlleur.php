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
    require './../Warhammer-Helping/Vue/VuePersoCreation.php';
}

function detailsPerso()
{
    require './../Warhammer-Helping/Vue/VuePersoDetails.php';    
}

function connexion()
{
    require './../Warhammer-Helping/Vue/testconnexion.php'; 
}