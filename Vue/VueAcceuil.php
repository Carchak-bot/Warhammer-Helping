<?php $titre = 'Le Navigatron';
ob_start();

if (isset($_SESSION['pseudo'])) {
    $pseudo = $_SESSION['pseudo'];
}

try {
    $request = "SELECT * FROM compte WHERE Nom_de_compte = '" . $pseudo . "'";
    $res = selectDatabase($request);
    
    $id_compte = $res[0][0];
    
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>



<div>
    <a href="./../Warhammer-Helping/index.php?action=CreationCampagne"><button>Créer une Campagne</button></a>
    <?php
    try {
        $request = "SELECT * FROM campagne WHERE Id = $id_compte";
        $res = selectDatabase($request);


        foreach ($res as $key => $value) {
            echo '
    <main class="PersoUnite">
    <figure>
    <h3>' . $value[1] . '</h3>
    <button><a href="./../Warhammer-Helping/Controlleur/index.php?action=DetailsCampagne&id=' . $value[0] . '">Details Perso</a></button>
    </main>';
        }
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
    ?>
</div>





<?php 
$contenu = ob_get_clean();
require 'gabarit.php';
?>