<?php


$id_perso = $_GET['Id'];

try {
    $request = "SELECT * FROM personnage WHERE id = $id_perso";
    $res = selectDatabase($request);


    foreach ($res as $key => $value) {
        echo '
    <main class="produitUnite">
    <figure>
    <h3>' . $value[1] . '</h3>
    <h5>' . $value[2] . '</h5>
    <p> Force : <b>' . $value[3] . '</b></p>
    <p> Force surnaturelle : <b>' . $value[4] . '</b></p>
    <p> Endurance : <b>' . $value[5] . '</b></p>
    <p> Endurance surnaturelle : <b>' . $value[6] . '</b></p>
    <p> Agilité : <b>' . $value[7] . '</b></p>
    <p> Agilité surnaturelle : <b>' . $value[8] . '</b></p>
    <p> Intelligence : <b>' . $value[9] . '</b></p>
    <p> Intelligence surnaturelle : <b>' . $value[10] . '</b></p>
    <p> Perception : <b>' . $value[11] . '</b></p>
    <p> Perception surnaturelle : <b>' . $value[12] . '</b></p>
    <p> Force Mentale : <b>' . $value[13] . '</b></p>
    <p> Force Mentale surnaturelle : <b>' . $value[14] . '</b></p>
    <p> Sociabilité : <b>' . $value[15] . '</b></p>
    <p> Sociabilité surnaturelle : <b>' . $value[16] . '</b></p>
    <p> Navigation Warp : <b>' . $value[17] . '</b></p>
    <p> Commandement : <b>' . $value[18] . '</b></p>
    <p> Charisme : <b>' . $value[19] . '</b></p>
    <p> Pilotage : <b>' . $value[20] . '</b></p>
    <p> Psyniscience : <b>' . $value[21] . '</b></p>
    </figure>
    <button><a href="./../Warhammer-Helping/Controlleur/index.php?action=updatePerso&id=' . $value[0] . '">Modifier Perso</a></button>
    </main>';
    }
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
