<?php

//____________________________________________________________________________________________
//             Connexion Bdd.
//             Appeler cette fonction pour effectuer la connexion avec la base de donnée.
//____________________________________________________________________________________________
function getDatabase()
{
    try {
        $PDOinstance = new PDO('mysql:host=localhost;dbname=warp_travel;charset=utf8', 'root', '');
        return $PDOinstance;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

//____________________________________________________________________________________________
//          Récupération de données dans la Bdd.
//          Envois une requête type "Select" à la base de donnée et retourne le résultat dans un tableau.
//____________________________________________________________________________________________
function selectDatabase($request)
{
    $PDOinstance = getDatabase();
    $query = $PDOinstance->prepare($request);
    $query->execute();
    $tab = $query->fetchAll();

    $PDOinstance = Null;
    return $tab;
}

//____________________________________________________________________________________________
//          Manipule la Bdd.
//          Fonction permettant les manipulations directes sur la base de donnée, comme l'ajout ou la suppression de données.
//____________________________________________________________________________________________
function manipDb($request)
{
    $PDOinstance = getDatabase();
    $PDOinstance->exec($request);
    $PDOinstance = Null;
}
