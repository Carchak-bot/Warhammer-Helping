<?php
// on vérifie que la variable de session pseudo existe
if (isset($_SESSION['pseudo'])) {
    $pseudo = $_SESSION['pseudo'];
} else {
    $pseudo = null;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titre ?></title>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- CSS style -->
    <link rel="stylesheet" href="./../Warhammer-Helping/assets/css/style.css">
    <link rel="stylesheet" href="./../Warhammer-Helping/assets/css/styleconnexion.css">
</head>

<body>
    <header id="entete">
        <nav class="navbar">
            <div class="container">
                <a href="" class="navbar-brand"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../Warhammer-Helping/index.php">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <?php
                            if ($pseudo) {
                                echo ' ';
                            } else {
                                echo '<a class="nav-link" href="../Warhammer-Helping/index.php">Inscription</a>';
                            }
                            ?>
                        </li>
                        <li class="nav-item">
                            <?php
                            if ($pseudo) {
                                echo ' ';
                            } else {
                                echo '<a class="nav-link" href="../Warhammer-Helping/index.php?action=Connexion">Se connecter</a>';
                            }
                            ?>
                        </li>
                        <li class="nav-item">
                            <?php
                            if ($pseudo) {
                                echo '<a class="nav-link" href="../Warhammer-Helping/deconnexion.php">Deconnexion</a>';
                            }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php
    if ($pseudo) {
        echo " ";
    } else {
        echo "<H1>Vous ne vous êtes pas encore authentifié</H1> <br><br>";
    }
    ?>
    <main class="global">
        <?= $contenu ?>
    </main>
    <footer>
        <article>
            <h4>Fait par Carchak & Kerabrim</h4>
        </article>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./../assets/Js/Jquery.js"></script>
    <script src="./../assets/Js/commandes.js"></script>
</body>

</html>