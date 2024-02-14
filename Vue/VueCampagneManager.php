<?php $titre = 'Le Navigatron';
ob_start();
?>

<button>Créer un Personnage</button>
<button>Créer un Vaisseau</button>
<button>Créer un Système</button>

<?php 
$contenu = ob_get_clean();
require 'gabarit.php';
?>