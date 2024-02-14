<?php $titre = 'Le Navigatron';
ob_start();
?>

<header>
    <h1>Générateur de Voyage Warp pour la gamme FFG</h1>
</header>
<article>
    <form class="wrapper" action="./../Warhammer-Helping/voyage.php" method="POST">
        <div>
            <h4>Votre valeur de Force :</h4>
            <input type="text" name="s" placeholder="Force" />
            <input type="text" name="sSurnat" placeholder="Force surnaturelle" value="0"/><br />
            <h4>Votre valeur d'Endurance :</h4>
            <input type="text" name="t" placeholder="Endurance" />
            <input type="text" name="tSurnat" placeholder="Endurance surnaturelle" value="0"/><br />
            <h4>Votre valeur d'Intelligence :</h4>
            <input type="text" name="int" placeholder="Intelligence" />
            <input type="text" name="intSurnat" placeholder="Intelligence surnaturelle" value="0"/><br />
            <h4>Votre valeur de Perception :</h4>
            <input type="text" name="per" placeholder="Perception" />
            <input type="text" name="perSurnat" placeholder="Perception surnaturelle" value="0"/><br />
            <h4>Votre valeur de Force mentale :</h4>
            <input type="text" name="wp" placeholder="Force-mentale" />
            <input type="text" name="wpSurnat" placeholder="Force-mentale surnaturelle" value="0"/><br />
            <h4>Votre valeur de Sociabilité :</h4>
            <input type="text" name="soc" placeholder="Sociabilité" />
            <input type="text" name="socSurnat" placeholder="Sociabilité surnaturelle" value="0"/><br />
        </div>
        <div>
            <h4>Votre compétence de navigation Warp :</h4>
            <label for="navWarpT"></label>
            <input name="navWarp" type="radio" value="navWarpT" required />
            Trained<br />
            <label for="navWarp+10"></label>
            <input name="navWarp" type="radio" value="navWarp+10" required />
            +10<br />
            <label for="navWarp+20"></label>
            <input name="navWarp" type="radio" value="navWarp+20" required />
            +20<br />
            <label for="navWarp+30"></label>
            <input name="navWarp" type="radio" value="navWarp+30" required />
            +30<br />
            <h4>Votre compétence de Psyniscience :</h4>
            <label for="psyniscienceT"></label>
            <input name="psyniscience" type="radio" value="psyniscienceT" required />
            Trained<br />
            <label for="psyniscience+10"></label>
            <input name="psyniscience" type="radio" value="psyniscience+10" required />
            +10<br />
            <label for="psyniscience+20"></label>
            <input name="psyniscience" type="radio" value="psyniscience+20" required />
            +20<br />
            <label for="psyniscience+30"></label>
            <input name="psyniscience" type="radio" value="psyniscience+30" required />
            +30<br />
            <h4>Champs de Geller endommagé ?</h4>
            <label for="gellarFieldDamaged"></label>
            <input name="gellarFieldDamaged" type="radio" value="no" />
            Faux
            <input name="gellarFieldDamaged" type="radio" value="yes" />
            Vrai<br />
            <h4>Est ce que le champs de Geller est éteins ?</h4>
            <label for="gellarFieldOffline"></label>
            <input name="gellarFieldOffline" type="radio" value="no" />
            Non
            <input name="gellarFieldOffline" type="radio" value="yes" />
            Oui<br />
            <h4>Moteur Warp endommagé ?</h4>
            <label for="warpEngineDamaged"></label>
            <input name="warpEngineDamaged" type="checkbox" value="yes" />
            Vrai<br />
            <h4>Y a t il un Navigateur à bord ( qui gère le test ) ?</h4>
            <label for="navigator"></label>
            <input name="navigator" type="checkbox" value="yes" />
            Oui<br />
            <h4>Est ce que le Navigateur possède des cartes de routes Warp ?</h4>
            <label for="warpCharts"></label>
            <input name="warpCharts" type="radio" value="none" />
            Non
            <label for="warpCharts"></label>
            <input name="warpCharts" type="radio" value="yes" />
            Oui
            <label for="warpCharts"></label>
            <input name="warpCharts" type="radio" value="yesDetailed" />
            Oui et détaillées<br />
            <h4>Est ce que le Navigateur a fait ses cartes lui même ?</h4>
            <label for="warpChartsCreator"></label>
            <input name="warpChartsCreator" type="radio" value="no" />
            Non
            <label for="warpChartsCreator"></label>
            <input name="warpChartsCreator" type="radio" value="yes" />
            Oui <br>
            <h4>Est ce que le navigateur a pris du temps pour se protéger des mauvaises marées ?</h4>
            <label for="illTidings"></label>
            <input name="illTidings" type="checkbox" value="yes" />
            Oui<br />
        </div>
        <div>
            <h4>Valeur de Moral actuel du Vaisseau</h4>
            <input type="text" name="moral" placeholder="Moral actuel" value="100"/>
            <h4>Valeur de caractéristique de l'équipage</h4>
            <input type="text" name="crewRating" placeholder="Niveau moyen de l'équipage" />
            <input type="text" name="nombrePNJImportant" placeholder="Nombre de PNJ nommés et importants" value="0"/><br />
            <h4>Valeur de Sociabilité du Capitaine/Missionnaire:</h4>
            <input type="text" name="socCptn" placeholder="Sociabilité" />
            <input type="text" name="socSurnatCptn" placeholder="Sociabilité surnaturelle" value="0"/><br />
            <h4>Sa compétence (Command / Charm):</h4>
            <label for="leadershipT"></label>
            <input name="leadership" type="radio" value="leadershipT" required />
            Trained<br />
            <label for="leadership+10"></label>
            <input name="leadership" type="radio" value="leadership+10" required />
            +10<br />
            <label for="leadership+20"></label>
            <input name="leadership" type="radio" value="leadership+20" required />
            +20<br />
            <label for="leadership+30"></label>
            <input name="leadership" type="radio" value="leadership+30" required />
            +30<br />
            <h4>Valeur de l'Agilité du Maître Timonier:</h4>
            <input type="text" name="agiTimonier" placeholder="Agilité" />
            <input type="text" name="agiSurnatTimonier" placeholder="Agilité Surnaturelle" value="0"/><br />
            <h4>Sa compétence Pilotage (Vaisseaux spatiaux):</h4>
            <label for="pilotT"></label>
            <input name="pilot" type="radio" value="pilotT" required />
            Trained<br />
            <label for="pilot+10"></label>
            <input name="pilot" type="radio" value="pilot+10" required />
            +10<br />
            <label for="pilot+20"></label>
            <input name="pilot" type="radio" value="pilot+20" required />
            +20<br />
            <label for="pilot+30"></label>
            <input name="pilot" type="radio" value="pilot+30" required />
            +30<br />
        </div>
        <button type="submit">Voyager</button>
    </form>
</article>
<br />

<?php 
$contenu = ob_get_clean();
require 'gabarit.php';
?>