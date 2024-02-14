<?php
ob_start();
?>

<header>
    <h1>Connexion</h1>
</header>
<article>
    <form class="wrapper" action="./../Warhammer-Helping/voyage.php" method="POST">
        <div>
            <h4>Nom d'utilisateur :</h4>
            <input type="text" name="Conn" required />
            <h4>Mot de passe :</h4>
            <input type="text" name="MDP" required />
        </div>
        <button type="submit">Voyager</button>
    </form>
    <a href="inscription.php">Connexion</a>
</article>
<br />