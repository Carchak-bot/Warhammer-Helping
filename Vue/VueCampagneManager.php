<?php $titre = 'Le Navigatron';
ob_start();
?>
<div>
    <a href="./../Warhammer-Helping/index.php?action=CreationPerso"><button>Créer un Personnage</button></a>
    <?php
    try {
        $request = "SELECT * FROM personnage";
        $res = selectDatabase($request);


        foreach ($res as $key => $value) {
            echo '
    <main class="PersoUnite">
    <figure>
    <h3>' . $value[1] . '</h3>
    <h5>' . $value[2] . '</h5>
    <button><a href="./../Warhammer-Helping/Controlleur/index.php?action=DetailsPerso&id=' . $value[0] . '">Details Perso</a></button>
    </main>';
        }
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
    ?>
</div>

<div>
    <a href=""><button>Créer un Vaisseau</button></a>
</div>
<div>
    <a href=""><button>Créer un Système</button></a>
</div>
<?php
$contenu = ob_get_clean();
require 'gabarit.php';
?>