<?php $titre = 'Le Navigatron';
ob_start();
?>


<button>Créer une Campagne</button>






<?php 
$contenu = ob_get_clean();
require 'gabarit.php';
?>