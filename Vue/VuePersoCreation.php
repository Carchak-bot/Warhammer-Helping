<?php $titre = 'Le Navigatron';
ob_start();

try {
    if ($_GET['action'] == 'creationPerso') {
        echo '
<form form class="wrapper" action="../Warhammer-Helping/Controlleur/gestionPerso.php?action=creaPerso" method="POST">
    <div>
        <h4>Nom du Personnage :</h4>
        <input type="text" name="nom" placeholder="Nom"><br>
        <h4>Rôle du Personnage</h4>
        <select name="role" id="">
            <option value="">--Veuillez choisir un rôle--</option>
            <option value="navigateur">Navigateur</option>
            <option value="captn">Capitaine</option>
            <option value="missionaire">Missionaire</option>
            <option value="timonier">Maître timonier</option>
            <option value="autre">Autre</option>
        </select>
        <h4>Valeur de Force du Personnage :</h4>
        <input type="text" name="s" placeholder="Force" />
        <input type="text" name="sSurnat" placeholder="Force surnaturelle" /><br />
        <h4>Valeur d\'Endurance du Personnage :</h4>
        <input type="text" name="t" placeholder="Endurance" />
        <input type="text" name="tSurnat" placeholder="Endurance surnaturelle" /><br />
        <h4>Valeur de l\'Agilité du Personnage :</h4>
        <input type="text" name="agiTimonier" placeholder="Agilité" />
        <input type="text" name="agiSurnatTimonier" placeholder="Agilité Surnaturelle" /><br />
        <h4>Valeur d\'Intelligence du Personnage :</h4>
        <input type="text" name="int" placeholder="Intelligence" />
        <input type="text" name="intSurnat" placeholder="Intelligence surnaturelle" /><br />
        <h4>Valeur de Perception du Personnage :</h4>
        <input type="text" name="per" placeholder="Perception" />
        <input type="text" name="perSurnat" placeholder="Perception surnaturelle" /><br />
        <h4>Valeur de Force mentale du Personnage :</h4>
        <input type="text" name="wp" placeholder="Force-mentale" />
        <input type="text" name="wpSurnat" placeholder="Force-mentale surnaturelle" /><br />
        <h4>Valeur de Sociabilité du Personnage :</h4>
        <input type="text" name="soc" placeholder="Sociabilité" />
        <input type="text" name="socSurnat" placeholder="Sociabilité surnaturelle" /><br />
    </div>
    <div>
        <h4>Compétence de navigation Warp du Navigateur :</h4>
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
        <h4>Compétence de Psyniscience du Navigateur :</h4>
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
</form> ';
    } elseif ($_GET['action'] == 'updatePerso') {

        $id_Perso = $_GET['id'];

        $request = 'SELECT * FROM personnage ON Id=' . $id_Perso;
        $res = selectDatabase($request);
        foreach ($res as $key => $value) {
            echo '
<form form class="wrapper" action="../Warhammer-Helping/Controlleur/gestionPerso.php?action=updatePerso&id=' . $value[0] . '" method="POST">
    <div>
        <h4>Nom du Personnage :</h4>
        <input type="text" name="nom" placeholder="Nom" value='.$value[1].'><br>
        <h4>Rôle du Personnage</h4>
        <select name="role" id="">
            <option value="">--Veuillez choisir un rôle--</option>
            <option value="navigateur">Navigateur</option>
            <option value="captn">Capitaine</option>
            <option value="missionaire">Missionaire</option>
            <option value="timonier">Maître timonier</option>
            <option value="autre">Autre</option>
        </select>
        <h4>Valeur de Force du Personnage :</h4>
        <input type="text" name="s" placeholder="Force" value='.$value[3].' />
        <input type="text" name="sSurnat" placeholder="Force surnaturelle" value='.$value[4].'/><br />
        <h4>Valeur d\'Endurance du Personnage :</h4>
        <input type="text" name="t" placeholder="Endurance" value='.$value[5].'/>
        <input type="text" name="tSurnat" placeholder="Endurance surnaturelle" value='.$value[6].'/><br />
        <h4>Valeur de l\'Agilité du Personnage :</h4>
        <input type="text" name="agiTimonier" placeholder="Agilité" value='.$value[7].'/>
        <input type="text" name="agiSurnatTimonier" placeholder="Agilité Surnaturelle" value='.$value[8].'/><br />
        <h4>Valeur d\'Intelligence du Personnage :</h4>
        <input type="text" name="int" placeholder="Intelligence" value='.$value[9].'/>
        <input type="text" name="intSurnat" placeholder="Intelligence surnaturelle" value='.$value[10].'/><br />
        <h4>Valeur de Perception du Personnage :</h4>
        <input type="text" name="per" placeholder="Perception" value='.$value[11].'/>
        <input type="text" name="perSurnat" placeholder="Perception surnaturelle" value='.$value[12].'/><br />
        <h4>Valeur de Force mentale du Personnage :</h4>
        <input type="text" name="wp" placeholder="Force-mentale" value='.$value[13].'/>
        <input type="text" name="wpSurnat" placeholder="Force-mentale surnaturelle" value='.$value[14].'/><br />
        <h4>Valeur de Sociabilité du Personnage :</h4>
        <input type="text" name="soc" placeholder="Sociabilité" value='.$value[15].'/>
        <input type="text" name="socSurnat" placeholder="Sociabilité surnaturelle" value='.$value[16].'/><br />
    </div>
    <div>
        <h4>Compétence de navigation Warp du Navigateur :</h4>
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
        <h4>Compétence de Psyniscience du Navigateur :</h4>
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
</form> ';
        }
    }
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}

$contenu = ob_get_clean();
require 'gabarit.php';
