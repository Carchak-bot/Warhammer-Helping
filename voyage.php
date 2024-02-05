````
<?php

// Fichiers PHP inclus

require "variables.php";
require "fonctions.php";

/********************************************************************************************************
 ********************************************************************************************************/

// Début Programme

echo "<b>Coté MJ :</b> <br>";

// echo $_POST["gellarFieldDamaged"];
// echo $_POST["gellarFieldOffline"];

//Prise en compte du champs de Geller endommagé

if (($_POST["gellarFieldDamaged"] == 'yes')) {
    $route = rand(1, 10);
    $routegellarfieldDamaged = rand(1, 10);
    if ($routegellarfieldDamaged >= $route) {
        $route = $routegellarfieldDamaged;
    }
} else {
    $route = rand(1, 10);
}

//Calcul de la durée de voyage initiale
// test switch
switch ($route) {
    case 1:
    case 2:
    case 3:
        echo "Route Stable. Dans le futur le navigateur aura un bonus de +10 
        pour tracer cette route. <br>";
        $routemultiple = 1;
        break;
    case 4:
    case 5:
        echo "Chemin Indirect. <br>";
        $routemultiple = 2;
        break;
    case 6:
        echo "Passage Hanté. <br>";
        $routemultiple = 2;
        break;
    case 7:
        echo "Passage Hargneux. <br>";
        $routemultiple = 2;
        break;
    case 8:
        echo "Piste Intraçable. <br>";
        $routemultiple = 2;
        break;
    case 9:
        echo "Passage sans lumières. <br>";
        $routemultiple = 2;
        break;
    case 10:
        echo "Route Byzantine. <br>";
        $routemultiple = 3;
        break;
}


$duree = rand(1, 10);
switch ($duree) {
    case 1:
    case 2:
        $dureefinale = rand(1, 5);
        break;
    case 3:
    case 4:
        $dureefinale = (rand(1, 5) + 5);
        break;
    case 5:
    case 6:
        $dureefinale = (rand(2, 20) + 10);
        break;
    case 7:
    case 8:
        $dureefinale = (rand(3, 30) + 50);
        break;
    case 9:
        $dureefinale = (rand(4, 40) + 150);
        break;
    case 10:
        $dureefinale = (rand(5, 50) + 250);
        break;
}


//Prise en compte du type de route sur la durée du voyage basique

$tempstrajet = ($dureefinale * $routemultiple);

if (
    (isset($_POST["warpEngineDamaged"])) &&
    ($_POST["warpEngineDamaged"] == true)
) {
    $tempstrajettheorique = ($tempstrajet * 2);
} else {
    $tempstrajettheorique = $tempstrajet;
}

echo "La durée de base était de ";
echo $dureefinale;
echo " Jours. <br>";

//Prise en compte du moteur warp endommagé

if (
    (isset($_POST["warpEngineDamaged"])) &&
    ($_POST["warpEngineDamaged"] == true)
) {
    echo "Pour un total théorique de ";
    echo $tempstrajettheorique;
    echo " Jours. Dûs aux moteurs warp endommagés. <br> <br>";
} else {
    echo "Pour un total théorique de ";
    echo $tempstrajettheorique;
    echo " Jours. <br> <br>";
}

echo "<b>Coté PJ :</b> <br>";

if (
    (isset($_POST["navigator"])) &&
    ($_POST["navigator"] == true)
) {
    /**********************************************************************************************************************
    ******************************************************************************************************************** */
    //Coté ou il y a un navigateur pour guider le vaisseau
    /**********************************************************************************************************************
    ******************************************************************************************************************** */

    $psyniscienceCheck1 = rand(1, 100);
    //Cartes Warp et bonus à la psyniscience
    switch ($charts) {
        case ($_POST["warpCharts"] == "none"):
            $charts = 0;
        case ($_POST["warpCharts"] == "yes"):
            $charts = 10;
            if (($_POST["warpChartsCreator"] == "yes")) {
                $chartsFinished = $charts + 10;
            }
        case ($_POST["warpCharts"] == "yesDetailed"):
            $charts = 20;
            if (($_POST["warpChartsCreator"] == "yes")) {
                $chartsFinished = $charts + 10;
            }
    }

    //Psyniscience pour les augures
    echo "[";
    echo $psyniscienceCheck1;
    echo "] ! <br>";
    psyniscienceNav($_POST["psyniscience"], $_POST["per"], $chartsFinished, $psyniscienceCheck1, 
    $dureeEronner, $tempstrajettheorique);
    echo "<br>";

    while (
        ($psyniscienceCheck1 == 9) | ($psyniscienceCheck1 == 19) | ($psyniscienceCheck1 == 29) | ($psyniscienceCheck1 == 39) |
        ($psyniscienceCheck1 == 49) | ($psyniscienceCheck1 == 59) | ($psyniscienceCheck1 == 69) | ($psyniscienceCheck1 == 79) |
        ($psyniscienceCheck1 == 89) | ($psyniscienceCheck1 >= 90) && ($psyniscienceCheck1 <= 99)
    ) {
        echo "Le navigateur détecte qu'une tempête Warp se forme et avise qu'il vaudrait mieux attendre ";
        $d5 = rand(1, 5);
        echo $d5;
        echo " jours pour qu'elle passe. Sinon vous entrez dans une tempête Warp. <br><br>";
        echo "Si vous entrez tout de même dans le Warp en pleine tempête :  <br>";
        echo tempete($_POST["gellarFieldDamaged"], $_POST["gellarFieldOffline"]);
        echo "<br><br>";
        echo "Si le vaisseau pratique les rites d'appaisements alors les augures doivent être relus. <br><br>";
        $psyniscienceCheck1 = rand(1, 100);
        echo "[";
        echo $psyniscienceCheck1;
        echo "] ! <br>";
        psyniscienceNav($_POST["psyniscience"], $_POST["per"], $chartsFinished, $psyniscienceCheck1, 
        $dureeEronner, $tempstrajettheorique);
    }

    //Se protéger des mauvaises marées

    if (isset($_POST["illTidings"]) && 
        ($_POST["illTidings"] == true)) {
        $badTidings = 0;
    } else {
        $badTidings = 1;
    }

    //La chasse de la mauvaise chance
    echo badOmens($_POST["moral"], $_POST["leadership"], $_POST["socCptn"], $_POST["socSurnatCptn"]);

    //Hallucinations
    echo hallucinations($_POST["nombrePNJImportant"], $_POST["crewRating"]);

    //Localiser l'astronomican
    $psyniscienceCheck2 = rand(1, 100);

    echo "[";
    echo $psyniscienceCheck2;
    echo "] ! <br>";

    switch ($route) {
        case 1:
        case 2:
        case 3:
            // psyniscience +20
            $bonus = 20;
            $bonusNav = psyniscienceAstro($_POST["psyniscience"], $_POST["per"], $psyniscienceCheck2, $psyniscienceCheck2Failed, $dureeEronner, $tempstrajettheorique, $bonus);
            echo $bonusNav;
            break;
        case 4:
        case 5:
        case 6:
        case 7:
        case 8:
        case 10:
            // psyniscience normale
            $bonus = 0;
            $bonusNav = psyniscienceAstro($_POST["psyniscience"], $_POST["per"], $psyniscienceCheck2, $psyniscienceCheck2Failed, $dureeEronner, $tempstrajettheorique, $bonus);
            echo $bonusNav;
            break;
        case 9:
            // psyniscience -20
            $bonus = -20;
            $bonusNav = psyniscienceAstro($_POST["psyniscience"], $_POST["per"], $psyniscienceCheck2, $psyniscienceCheck2Failed, $dureeEronner, $tempstrajettheorique, $bonus);
            echo $bonusNav;
            break;
    }

    //Le voyage Warp [STEERING THE VESSEL]
    $navigationCheck = rand(1, 100);
    switch ($navigationCheck) {
        case ($_POST["navWarp"] == "navWarpT"):
            $psyniscienceCheck2result = (($per + $bonus) - $psyniscienceCheck2);
            if ($psyniscienceCheck2result >= 0) {
                $psyniscienceCheck2resultfinal = (($psyniscienceCheck2result / 10) + (floor($_POST["perSurnat"] / 2)));
                echo "L'astronomican est trouvé avec ";
                echo $psyniscienceCheck2resultfinal;
                echo " degrés de réussites. <br><br>";
                $bonusNav = 10;
            } else {
                $bonusNav = -20;
                $psyniscienceCheck2Failed = floor(($psyniscienceCheck2result) / 10);
                echo "L'astronomican n'est pas trouvé avec une totalité de ";
                echo ($psyniscienceCheck2Failed / 10);
                echo " degrés d'échec. <br><br>";
            }
            break;
        
        default:
            # code...
            break;
    }


} else {
    /**********************************************************************************************************************
    ******************************************************************************************************************** */
    // Coté ou il n'y a pas de Navigateurs pour guider le vaisseau _____________________________________________________
    /**********************************************************************************************************************
    ******************************************************************************************************************** */

    //La chasse de la mauvaise chance

    echo badOmens($_POST["moral"], $_POST["leadership"], $_POST["socCptn"], $_POST["socSurnatCptn"]);

    //La translation
    $translationHardcore = rand(1, 10);
    if ($translationHardcore >= 6) {
        echo "Vous entrez dans le warp en pleine tempête warp. <br>";
        echo tempete($_POST["gellarFieldDamaged"], $_POST["gellarFieldOffline"]);
        echo "<br>";
    }

    //Bad Omens
    echo badOmens($_POST["moral"], $_POST["leadership"], $_POST["socCptn"], $_POST["socSurnatCptn"]);
    
    //Hallucinations Warp ?
    echo hallucinations($_POST["nombrePNJImportant"], $_POST["crewRating"]);

    // Le voyage
    $tempstrajetabsolu = ($tempstrajettheorique * 4);
    echo "De part le manque de navigateur le voyage va durer ";
    echo $tempstrajetabsolu;
    echo "jours. <br> <br>";

    //Fonction de rencontres Warp appellant les 3 paramètres externes
    echo rencontres($tempstrajetabsolu, $frequenceRencontre, $badOmens);

    // Le vaisseau sort du Warp sans Navigateurs
    if ($severlyOffCourse == 1) {
        $reEntry = (rand(1, 100) + 40 + 75);
    } else {
        $reEntry = rand(1, 100) + 75;
    }
    if (($reEntry >= 1) && ($reEntry <= 25)) {
        echo "Vous sortez du Warp avec un décallage de ";
        $realSpaceDays = rand(1, 5);
        echo " jours de voyage d'espace réel de votre destination.";
    }
    if (($reEntry >= 26) && ($reEntry <= 50)) {
        echo "Vous sortez du Warp avec un décallage de ";
        $realSpaceDays = rand(1, 10);
        echo " jours de voyage d'espace réel de votre destination.";
    }
    if (($reEntry >= 51) && ($reEntry <= 75)) {
        echo "Vous sortez du Warp au niveau de la localisation la plus proche avoisinant la destination.";
    }
    if (($reEntry >= 76) && ($reEntry <= 100)) {
        echo "Vous sortez du Warp au niveau d'une localisation choisie au hasard avoisinant la destination dans la même région.";
    }
    if (($reEntry >= 101) && ($reEntry <= 120)) {
        echo "Vous sortez du Warp au niveau d'une localisation choisie au hasard dans une région choisie au hasard 
        avoisinant votre destination.";
    }
    if (($reEntry >= 121) && ($reEntry <= 140)) {
        echo "Vous sortez du Warp au niveau d'une localisation choisie au hasard dans une région choisie au hasard 
        dans le même secteur. ";
        $realSpaceDays = rand(1, 5);
        $beforeAfter = rand(0, 1);
        if ($beforeAfter == 1) {
            echo $realSpaceDays;
            echo " ans après votre départ.";
        }
        if ($beforeAfter == 0) {
            echo $realSpaceDays;
            echo " ans avant votre départ.";
        }
    }
    if ($reEntry >= 141) {
        echo "Le vaisseau est perdu dans le Warp ! L'option la plus facile est pour le MJ de statuer que le vaisseau soit disparu
        à tout jamais. Cependant s'il se sent capable de la tache, il peut dire qu'il réapparait dans un endroit complètement
        différent de la galaxie, peut être quelques centaines voir milliers d'années dans le passé ou le futur- même si celà pourrait
        dérailler sévèrement la campagne.";
    }
}