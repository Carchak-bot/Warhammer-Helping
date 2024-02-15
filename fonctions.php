<?php
require './../Warhammer-Helping/Modele/modele.php';

//____________________________________________________________________________________________
//             Hallucinations
//____________________________________________________________________________________________

function hallucinations($nbrPNJImportant, $crewRating)
{
    for ($i = 0; $i < $nbrPNJImportant; $i++) {
        $hallucinationCheck = rand(1, 100);
        switch ($hallucinationCheck) {
            case($hallucinationCheck > $crewRating):
                echo "Le PNJ numéro ";
                echo $i;
                echo " a échoué son test de résistance mentale et est épris d'hallucinations jusqu'à ce qu'il ait une occasion 
                de s'en débarasser.<br>";
                $hallucinationCheckResult = floor(($hallucinationCheck - $crewRating));
                echo "Il a échoué avec <b>";
                echo ($hallucinationCheckResult / 10);
                echo "</b> degré d'échecs et est atteins de l'hallucination : ";
                $trueHallucination = rand(1, 100);
                $trueHallucinationResult = $trueHallucination + $hallucinationCheckResult;
                if (($trueHallucinationResult >= 1) && ($trueHallucinationResult <= 40)) {
                    $request = "SELECT Designation FROM hallucination_warp WHERE Id=2";
                    $designation = selectDatabase($request);
                    echo $designation[0]["Designation"] . '<br>';
                    $request = "SELECT Description FROM hallucination_warp WHERE Id=2";
                    $description = selectDatabase($request);
                    echo $description[0]["Description"] . '<br><br>';
                }
                if (($trueHallucinationResult >= 41) && ($trueHallucinationResult <= 70)) {
                    $request = "SELECT Designation FROM hallucination_warp WHERE Id=3";
                    $designation = selectDatabase($request);
                    echo $designation[0]["Designation"] . '<br>';
                    $request = "SELECT Description FROM hallucination_warp WHERE Id=3";
                    $description = selectDatabase($request);
                    echo $description[0]["Description"] . '<br><br>';
                }
                if (($trueHallucinationResult >= 71) && ($trueHallucinationResult <= 90)) {
                    $request = "SELECT Designation FROM hallucination_warp WHERE Id=4";
                    $designation = selectDatabase($request);
                    echo $designation[0]["Designation"] . '<br>';
                    $request = "SELECT Description FROM hallucination_warp WHERE Id=4";
                    $description = selectDatabase($request);
                    echo $description[0]["Description"] . '<br><br>';
                }
                if (($trueHallucinationResult >= 91) && ($trueHallucinationResult <= 110)) {
                    $request = "SELECT Designation FROM hallucination_warp WHERE Id=5";
                    $designation = selectDatabase($request);
                    echo $designation[0]["Designation"] . '<br>';
                    $request = "SELECT Description FROM hallucination_warp WHERE Id=5";
                    $description = selectDatabase($request);
                    echo $description[0]["Description"] . '<br><br>';
                }
                if (($trueHallucinationResult >= 111) && ($trueHallucinationResult <= 130)) {
                    $request = "SELECT Designation FROM hallucination_warp WHERE Id=6";
                    $designation = selectDatabase($request);
                    echo $designation[0]["Designation"] . '<br>';
                    $request = "SELECT Description FROM hallucination_warp WHERE Id=6";
                    $description = selectDatabase($request);
                    echo $description[0]["Description"] . '<br><br>';
                }
                if (($trueHallucinationResult >= 131) && ($trueHallucinationResult <= 150)) {
                    $request = "SELECT Designation FROM hallucination_warp WHERE Id=7";
                    $designation = selectDatabase($request);
                    echo $designation[0]["Designation"] . '<br>';
                    $request = "SELECT Description FROM hallucination_warp WHERE Id=7";
                    $description = selectDatabase($request);
                    echo $description[0]["Description"] . '<br><br>';
                }
                if (($trueHallucinationResult >= 151) && ($trueHallucinationResult <= 170)) {
                    $request = "SELECT Designation FROM hallucination_warp WHERE Id=8";
                    $designation = selectDatabase($request);
                    echo $designation[0]["Designation"] . '<br>';
                    $request = "SELECT Description FROM hallucination_warp WHERE Id=8";
                    $description = selectDatabase($request);
                    echo $description[0]["Description"] . '<br><br>';
                }
                if ($trueHallucinationResult >= 171) {
                    $request = "SELECT Designation FROM hallucination_warp WHERE Id=9";
                    $designation = selectDatabase($request);
                    echo $designation[0]["Designation"] . '<br>';
                    $request = "SELECT Description FROM hallucination_warp WHERE Id=9";
                    $description = selectDatabase($request);
                    echo $description[0]["Description"] . '<br><br>';
                }
                break;
            case($hallucinationCheck <= $crewRating):
                echo "Le PNJ numéro ";
                echo $i;
                echo " a réussi son test et donc n'est atteins d'aucunes hallucinations.. Pour l'instant.<br><br>";
                break;
        }
    }
}

//____________________________________________________________________________________________
//             Warding Bad Luck
//____________________________________________________________________________________________

function badOmens($moral, $leadership, $socCptn, $socSurnatCptn)
{
    $moralCheck = rand(1, 100);
    $moralCheckResult = ($moral - $moralCheck);
    if ($moralCheckResult >= 0) {
        echo "Avec un moral de <b>";
        echo $moral;
        echo "</b> l'équipage fait un résultat de ";
        echo $moralCheckResult;
        echo " et est donc suffisement en forme pour ne pas teinter le warp de mauvais présages.<br><br>";
    } else {
        $leadershipCheck1 = rand(1, 100);
        switch ($leadershipCheck1) {
            case($leadership == "leadershipT"):
                $leadershipCheck1result = ($socCptn - $leadershipCheck1);
                if ($leadershipCheck1result >= 0) {
                    $leadershipCheck1resultfinal = (($leadershipCheck1result / 10) + (floor($socSurnatCptn / 2)));
                    echo "La mauvaise chance a bien été chassée. <br>";
                    echo "L'équipage est rassuré avec ";
                    echo $leadershipCheck1resultfinal;
                    echo " degrés de réussites. <br><br>";
                } else {
                    echo "L'équipage n'est pas rassuré et leur empreinte psychique amèneront certainement des ennuis..<br><br>";
                    $badOmens = 1;
                }
                break;
            case($leadership == "leadership+10"):
                $leadershipCheck1result = (($socCptn + 10) - $leadershipCheck1);
                if ($leadershipCheck1result >= 0) {
                    $leadershipCheck1resultfinal = (($leadershipCheck1result / 10) + (floor($socSurnatCptn / 2)));
                    echo "La mauvaise chance a bien été chassée. <br>";
                    echo "L'équipage est rassuré avec ";
                    echo $leadershipCheck1resultfinal;
                    echo " degrés de réussites. <br><br>";
                } else {
                    echo "L'équipage n'est pas rassuré et leur empreinte psychique amèneront certainement des ennuis..<br><br>";
                    $badOmens = 1;
                }
                break;
            case($leadership == "leadership+20"):
                $leadershipCheck1result = (($socCptn + 20) - $leadershipCheck1);
                if ($leadershipCheck1result >= 0) {
                    $leadershipCheck1resultfinal = (($leadershipCheck1result / 10) + (floor($socSurnatCptn / 2)));
                    echo "La mauvaise chance a bien été chassée. <br>";
                    echo "L'équipage est rassuré avec ";
                    echo $leadershipCheck1resultfinal;
                    echo " degrés de réussites. <br><br>";
                } else {
                    echo "L'équipage n'est pas rassuré et leur empreinte psychique amèneront certainement des ennuis..<br><br>";
                    $badOmens = 1;
                }
                break;
            case($leadership == "leadership+30"):
                $leadershipCheck1result = (($socCptn + 30) - $leadershipCheck1);
                if ($leadershipCheck1result >= 0) {
                    $leadershipCheck1resultfinal = (($leadershipCheck1result / 10) + (floor($socSurnatCptn / 2)));
                    echo "La mauvaise chance a bien été chassée. <br>";
                    echo "L'équipage est rassuré avec ";
                    echo $leadershipCheck1resultfinal;
                    echo " degrés de réussites. <br><br>";
                } else {
                    echo "L'équipage n'est pas rassuré et leur empreinte psychique amèneront certainement des ennuis..<br><br>";
                    $badOmens = 1;
                }
                break;
        }
    }
}

function psyniscienceNavFailed($psyniscienceCheckFailed, $dureeEronner, $tempstrajettheorique)
{
    switch ($psyniscienceCheckFailed) {
        case($psyniscienceCheckFailed == 1):
            $dureeEronner = ($tempstrajettheorique * 1);
            echo "Le navigateur n'est pas sûr de la clareté de l'Astronomican pour cette route. Selon ses prédictions le voyage devrait prendre [";
            echo $dureeEronner;
            echo "] jours.";
            break;
        case($psyniscienceCheckFailed == 2):
            $dureeEronner = ($tempstrajettheorique / 2);
            echo "Le navigateur n'est pas sûr de la clareté de l'Astronomican pour cette route. Selon ses prédictions le voyage devrait prendre [";
            echo $dureeEronner;
            echo "] jours.";
            break;
        case($psyniscienceCheckFailed == 3):
            $dureeEronner = ($tempstrajettheorique * 2);
            echo "Le navigateur n'est pas sûr de la clareté de l'Astronomican pour cette route. Selon ses prédictions le voyage devrait prendre [";
            echo $dureeEronner;
            echo "] jours.";
            break;
        case($psyniscienceCheckFailed == 4):
            $dureeEronner = ($tempstrajettheorique * 3);
            echo "Le navigateur croit que l'Astronomican est obscurcit pour cette route. Selon ses prédictions le voyage devrait prendre [";
            echo $dureeEronner;
            echo "] jours.";
            break;
        case($psyniscienceCheckFailed == 5):
            $dureeEronner = ($tempstrajettheorique * 3);
            echo "Le navigateur croit que l'Astronomican est obscurcit pour cette route. Selon ses prédictions le voyage devrait prendre [";
            echo $dureeEronner;
            echo "] jours.";
            break;
    }
}

function psyniscienceNav($psyniscience, $per, $chartsFinished, $psyniscienceCheck1, $dureeEronner, $tempstrajettheorique)
{
    //Psyniscience pour les augures
    switch ($psyniscienceCheck1) {
        case($psyniscience == "psyniscienceT"):
            $psyniscienceCheck1result = (($per + $chartsFinished) - $psyniscienceCheck1);
            if ($psyniscienceCheck1result >= 0) {
                $psyniscienceCheck1resultfinal = (($psyniscienceCheck1result / 10) + (floor($_POST["perSurnat"] / 2)));
                echo "Les augures sont bien interprêtés, le navigateur et sa suite peuvent avoir accès au résultat
                du calcul de la durée du voyage Warp. <br>";
                echo "Les augures sont interprêtés avec ";
                echo $psyniscienceCheck1resultfinal;
                echo " degrés de réussites. <br><br>";
            } else {
                $psyniscienceCheckFailed = rand(1, 5);
                psyniscienceNavFailed($psyniscienceCheckFailed, $dureeEronner, $tempstrajettheorique);
            }
            break;
        case($psyniscience == "psyniscience+10"):
            $psyniscienceCheck1result = (($per + 10 + $chartsFinished) - $psyniscienceCheck1);
            if ($psyniscienceCheck1result >= 0) {
                $psyniscienceCheck1resultfinal = (($psyniscienceCheck1result / 10) + (floor($_POST["perSurnat"] / 2)));
                echo "Les augures sont bien interprêtés, le navigateur et sa suite peuvent avoir accès au résultat
                du calcul de la durée du voyage Warp. <br>";
                echo "Les augures sont interprêtés avec ";
                echo $psyniscienceCheck1resultfinal;
                echo " degrés de réussites. <br><br>";
            } else {
                $psyniscienceCheckFailed = rand(1, 5);
                psyniscienceNavFailed($psyniscienceCheckFailed, $dureeEronner, $tempstrajettheorique);
            }
            break;
        case($psyniscience == "psyniscience+20"):
            $psyniscienceCheck1result = (($per + 20 + $chartsFinished) - $psyniscienceCheck1);
            if ($psyniscienceCheck1result >= 0) {
                $psyniscienceCheck1resultfinal = (($psyniscienceCheck1result / 10) + (floor($_POST["perSurnat"] / 2)));
                echo "Les augures sont bien interprêtés, le navigateur et sa suite peuvent avoir accès au résultat
                du calcul de la durée du voyage Warp. <br>";
                echo "Les augures sont interprêtés avec ";
                echo $psyniscienceCheck1resultfinal;
                echo " degrés de réussites. <br><br>";
            } else {
                $psyniscienceCheckFailed = rand(1, 5);
                psyniscienceNavFailed($psyniscienceCheckFailed, $dureeEronner, $tempstrajettheorique);
            }
            break;
        case($psyniscience == "psyniscience+30"):
            $psyniscienceCheck1result = (($per + 30 + $chartsFinished) - $psyniscienceCheck1);
            if ($psyniscienceCheck1result >= 0) {
                $psyniscienceCheck1resultfinal = (($psyniscienceCheck1result / 10) + (floor($_POST["perSurnat"] / 2)));
                echo "Les augures sont bien interprêtés, le navigateur et sa suite peuvent avoir accès au résultat
                du calcul de la durée du voyage Warp. <br>";
                echo "Les augures sont interprêtés avec ";
                echo $psyniscienceCheck1resultfinal;
                echo " degrés de réussites. <br><br>";
            } else {
                $psyniscienceCheckFailed = rand(1, 5);
                psyniscienceNavFailed($psyniscienceCheckFailed, $dureeEronner, $tempstrajettheorique);
            }
            break;
    }
}

function psyniscienceAstro($psyniscience, $per, $psyniscienceCheck2, $psyniscienceCheck2Failed, $dureeEronner, $tempstrajettheorique, $bonus)
{
    //Psyniscience pour l'astronomican
    switch ($psyniscienceCheck2) {
        case($psyniscience == "psyniscienceT"):
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
        case($psyniscience == "psyniscience+10"):
            $psyniscienceCheck2result = (($per + 10 + $bonus) - $psyniscienceCheck2);
            if ($psyniscienceCheck2result >= 0) {
                $psyniscienceCheck2resultfinal = (($psyniscienceCheck2result / 10) + (floor($_POST["perSurnat"] / 2)));
                echo "L'astronomican est trouvé avec ";
                echo $psyniscienceCheck2resultfinal;
                echo " degrés de réussites. <br><br>";
                $bonusNav = 10;
            } else {
                $bonusNav = -20;
                $psyniscienceCheck2Failed = floor(($psyniscienceCheck2 - $psyniscienceCheck2result) / 10);
                echo "L'astronomican n'est pas trouvé avec une totalité de ";
                echo ($psyniscienceCheck2Failed / 10);
                echo " degrés d'échec. <br><br>";
            }
            break;
        case($psyniscience == "psyniscience+20"):
            $psyniscienceCheck2result = (($per + 20 + $bonus) - $psyniscienceCheck2);
            if ($psyniscienceCheck2result >= 0) {
                $psyniscienceCheck2resultfinal = (($psyniscienceCheck2result / 10) + (floor($_POST["perSurnat"] / 2)));
                echo "L'astronomican est trouvé avec ";
                echo $psyniscienceCheck2resultfinal;
                echo " degrés de réussites. <br><br>";
                $bonusNav = 10;
            } else {
                $bonusNav = -20;
                $psyniscienceCheck2Failed = floor(($psyniscienceCheck2 - $psyniscienceCheck2result) / 10);
                echo "L'astronomican n'est pas trouvé avec une totalité de ";
                echo ($psyniscienceCheck2Failed / 10);
                echo " degrés d'échec. <br><br>";
            }
            break;
        case($psyniscience == "psyniscience+30"):
            $psyniscienceCheck2result = (($per + 30 + $bonus) - $psyniscienceCheck2);
            if ($psyniscienceCheck2result >= 0) {
                $psyniscienceCheck2resultfinal = (($psyniscienceCheck2result / 10) + (floor($_POST["perSurnat"] / 2)));
                echo "L'astronomican est trouvé avec ";
                echo $psyniscienceCheck2resultfinal;
                echo " degrés de réussites. <br><br>";
                $bonusNav = 10;
            } else {
                $bonusNav = -20;
                $psyniscienceCheck2Failed = floor(($psyniscienceCheck2 - $psyniscienceCheck2result) / 10);
                echo "L'astronomican n'est pas trouvé avec une totalité de ";
                echo ($psyniscienceCheck2Failed / 10);
                echo " degrés d'échec. <br><br>";
            }
            break;
    }
    return $bonusNav;
}


/************************************************************************************************************************************
 ***************************************   Navigation Warp   ************************************************************************
 ************************************************************************************************************************************/
function resultatNavWarp($tempstrajettheorique, $tempstrajetabsolu, $navigationCheckResult)
{
    if ($navigationCheckResult >= 0) {
        $navigationCheckResultFinal = (($navigationCheckResult / 10) + (floor($_POST["intSurnat"] / 2)));
        echo "Le test de navigation est réussi avec ";
        echo $navigationCheckResultFinal;
        echo " degrés de réussites. <br><br>";
        switch ($navigationCheckResultFinal) {
            case $navigationCheckResultFinal >= 3:
                echo "Le voyage durera ";
                $tempstrajetabsolu = floor($tempstrajettheorique / 4);
                echo $tempstrajetabsolu;
                echo " Jours grâce à la bonne guidance du navigateur. <br>";
                return $tempstrajetabsolu;
            case $navigationCheckResultFinal < 3:
                echo "Le voyage durera ";
                $tempstrajetabsolu = floor($tempstrajettheorique / 2);
                echo $tempstrajetabsolu;
                echo " Jours grâce à la bonne guidance du navigateur. <br>";
                return $tempstrajetabsolu;
            case $navigationCheckResultFinal < 2:
                echo "Le voyage durera ";
                $tempstrajetabsolu = floor($tempstrajettheorique * 0.75);
                echo $tempstrajetabsolu;
                echo " Jours grâce à la bonne guidance du navigateur. <br>";
                return $tempstrajetabsolu;
            case $navigationCheckResultFinal < 1:
                echo "Le voyage durera ";
                $tempstrajetabsolu = $tempstrajettheorique;
                echo $tempstrajetabsolu;
                echo " Jours grâce à la bonne guidance du navigateur. <br>";
                return $tempstrajetabsolu;
        }
    } else {
        $navigationCheckResultFailed = floor(($navigationCheckResult) / 10);
        echo "Le test de navigation est échec avec ";
        echo ($navigationCheckResultFailed / 10);
        echo " degrés d'échec. <br><br>";
        switch ($navigationCheckResultFailed) {
            case $navigationCheckResultFailed >= 2:
                echo "Le voyage durera ";
                $tempstrajetabsolu = floor($tempstrajettheorique * 4);
                echo $tempstrajetabsolu;
                echo " Jours à cause de la mauvaise guidance du navigateur. <br>";
                return $tempstrajetabsolu;
            case $navigationCheckResultFailed < 2:
                echo "Le voyage durera ";
                $tempstrajetabsolu = floor($tempstrajettheorique * 3);
                echo $tempstrajetabsolu;
                echo " Jours à cause de la mauvaise guidance du navigateur. <br>";
                return $tempstrajetabsolu;
            case $navigationCheckResultFailed < 1:
                echo "Le voyage durera ";
                $tempstrajetabsolu = floor($tempstrajettheorique * 2);
                echo $tempstrajetabsolu;
                echo " Jours à cause de la mauvaise guidance du navigateur. <br>";
                return $tempstrajetabsolu;
        }
    }
}
function navigation($nav, $int, $bonusNavFinal, $tempstrajettheorique, $tempstrajetabsolu)
{
    $navigationCheck = rand(1, 100);
    echo "[" . $navigationCheck . "] !<br>";

    switch ($navigationCheck) {
        case($nav == "navWarpT"):
            $navigationCheckResult = (($int + $bonusNavFinal) - $navigationCheck);
            $tempstrajetfinal = resultatNavWarp($tempstrajettheorique, $tempstrajetabsolu, $navigationCheckResult);
            return $tempstrajetfinal;
        case($nav == "navWarp+10"):
            $navigationCheckResult = (($int + $bonusNavFinal + 10) - $navigationCheck);
            $tempstrajetfinal = resultatNavWarp($tempstrajettheorique, $tempstrajetabsolu, $navigationCheckResult);
            return $tempstrajetfinal;
        case($nav == "navWarp+20"):
            $navigationCheckResult = (($int + $bonusNavFinal + 20) - $navigationCheck);
            $tempstrajetfinal = resultatNavWarp($tempstrajettheorique, $tempstrajetabsolu, $navigationCheckResult);
            return $tempstrajetfinal;
        case($nav == "navWarp+30"):
            $navigationCheckResult = (($int + $bonusNavFinal + 30) - $navigationCheck);
            $tempstrajetfinal = resultatNavWarp($tempstrajettheorique, $tempstrajetabsolu, $navigationCheckResult);
            return $tempstrajetfinal;
    }
}

function courseCorrection($tempstrajettheorique, $tempstrajetfinal, $nav, $int, $bonusNavFinal)
{
    if ($tempstrajetfinal < ($tempstrajettheorique / 2) || $tempstrajetfinal > ($tempstrajettheorique * 2)) {
        $navigationCheck = rand(1, 100);
        echo "[" . $navigationCheck . "] !<br>";
        switch ($navigationCheck) {
            case($nav == "navWarpT"):
                $navigationCheckResult = (($int + $bonusNavFinal - 20) - $navigationCheck);
                if ($navigationCheckResult >= 0) {
                    $severlyOffCourse = 0;
                    $navigationCheck2 = rand(1, 100);
                    echo "[" . $navigationCheck2 . "] !<br>";
                    $navigationCheck2Result = (($int + $bonusNavFinal - 20) - $navigationCheck2);
                    if ($navigationCheck2Result >= 0) {
                        $slightlyOffCourse = 0;
                        $onTarget = 1;
                    } else {
                        $slightlyOffCourse = 1;
                        $onTarget = 0;
                    }
                } else {
                    $severlyOffCourse = 1;
                    $slightlyOffCourse = 0;
                    $onTarget = 0;
                }
                break;
            case($nav == "navWarp+10"):
                $navigationCheckResult = (($int + $bonusNavFinal + 10 - 20) - $navigationCheck);
                if ($navigationCheckResult >= 0) {
                    $severlyOffCourse = 0;
                    $navigationCheck2 = rand(1, 100);
                    echo "[" . $navigationCheck2 . "] !<br>";
                    $navigationCheck2Result = (($int + $bonusNavFinal + 10 - 20) - $navigationCheck2);
                    if ($navigationCheck2Result >= 0) {
                        $slightlyOffCourse = 0;
                        $onTarget = 1;
                    } else {
                        $slightlyOffCourse = 1;
                        $onTarget = 0;
                    }
                } else {
                    $severlyOffCourse = 1;
                    $slightlyOffCourse = 0;
                    $onTarget = 0;
                }
                break;
            case($nav == "navWarp+20"):
                $navigationCheckResult = (($int + $bonusNavFinal + 20 - 20) - $navigationCheck);
                if ($navigationCheckResult >= 0) {
                    $severlyOffCourse = 0;
                    $navigationCheck2 = rand(1, 100);
                    echo "[" . $navigationCheck2 . "] !<br>";
                    $navigationCheck2Result = (($int + $bonusNavFinal + 20 - 20) - $navigationCheck2);
                    if ($navigationCheck2Result >= 0) {
                        $slightlyOffCourse = 0;
                        $onTarget = 1;
                    } else {
                        $slightlyOffCourse = 1;
                        $onTarget = 0;
                    }
                } else {
                    $severlyOffCourse = 1;
                    $slightlyOffCourse = 0;
                    $onTarget = 0;
                }
                break;
            case($nav == "navWarp+30"):
                $navigationCheckResult = (($int + $bonusNavFinal + 30 - 20) - $navigationCheck);
                if ($navigationCheckResult >= 0) {
                    $severlyOffCourse = 0;
                    $navigationCheck2 = rand(1, 100);
                    echo "[" . $navigationCheck2 . "] !<br>";
                    $navigationCheck2Result = (($int + $bonusNavFinal + 30 - 20) - $navigationCheck2);
                    if ($navigationCheck2Result >= 0) {
                        $slightlyOffCourse = 0;
                        $onTarget = 1;
                    } else {
                        $slightlyOffCourse = 1;
                        $onTarget = 0;
                    }
                } else {
                    $severlyOffCourse = 1;
                    $slightlyOffCourse = 0;
                    $onTarget = 0;
                }
                break;
        }
        $severlyOffCourse = 1;
    } elseif ($tempstrajetfinal >= ($tempstrajettheorique / 2) || $tempstrajetfinal <= ($tempstrajettheorique * 2)) {
        $navigationCheck = rand(1, 100);
        echo "[" . $navigationCheck . "] !<br>";
        switch ($navigationCheck) {
            case($nav == "navWarpT"):
                $navigationCheck2Result = (($int + $bonusNavFinal - 20) - $navigationCheck);
                if ($navigationCheck2Result >= 0) {
                    $slightlyOffCourse = 0;
                    $onTarget = 1;
                } else {
                    $slightlyOffCourse = 1;
                    $onTarget = 0;
                }
                break;
            case($nav == "navWarp+10"):
                $navigationCheck2Result = (($int + $bonusNavFinal + 10 - 20) - $navigationCheck);
                if ($navigationCheck2Result >= 0) {
                    $slightlyOffCourse = 0;
                    $onTarget = 1;
                } else {
                    $slightlyOffCourse = 1;
                    $onTarget = 0;
                }
                break;
            case($nav == "navWarp+20"):
                $navigationCheck2Result = (($int + $bonusNavFinal + 20 - 20) - $navigationCheck);
                if ($navigationCheck2Result >= 0) {
                    $slightlyOffCourse = 0;
                    $onTarget = 1;
                } else {
                    $slightlyOffCourse = 1;
                    $onTarget = 0;
                }
                break;
            case($nav == "navWarp+30"):
                $navigationCheck2Result = (($int + $bonusNavFinal + 30 - 20) - $navigationCheck);
                if ($navigationCheck2Result >= 0) {
                    $slightlyOffCourse = 0;
                    $onTarget = 1;
                } else {
                    $slightlyOffCourse = 1;
                    $onTarget = 0;
                }
                break;
        }
        $slightlyOffCourse = 1;
    } else {
        $onTarget = 1;
    }

    if ($onTarget == 1) {
        $reEntry = 0;
    } elseif ($slightlyOffCourse == 1) {
        $reEntry = rand(1, 100);
    } elseif ($severlyOffCourse == 1) {
        $reEntry = (rand(1, 100) + 40);
    }
    return $reEntry;
}

function reEntry($reEntry)
{
    if (($reEntry >= 1) && ($reEntry <= 25)) {
        echo "Vous sortez du Warp avec un décallage de ";
        $realSpaceDays = rand(1, 5);
        echo " jours de voyage d'espace réel de votre destination.";
    }
    if (($reEntry >= 26) && ($reEntry <= 50)) {
        echo "Vous sortez du Warp avec un décallage de ";
        $realSpaceDays = rand(1, 10);
        echo $realSpaceDays;
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

//____________________________________________________________________________________________
// Fonction Rencontres Warp :
//____________________________________________________________________________________________
function detectionRencontre($psyniscience, $per, $psyniscienceCheck3)
{
    switch ($psyniscienceCheck3) {
        case $psyniscience == 'psyniscienceT':
            return ($per + 10) - $psyniscienceCheck3;
        case $psyniscience == 'psyniscience+10':
            return ($per + 10 + 10) - $psyniscienceCheck3;
        case $psyniscience == 'psyniscience+20':
            return ($per + 20 + 10) - $psyniscienceCheck3;
        case $psyniscience == 'psyniscience+30':
            return ($per + 30 + 10) - $psyniscienceCheck3;
    }
}

//Les épreuves psychiques
function trial($trial, $bonusTrial, $soc, $s, $t, $int, $nav, $bonusNav2, $bonusNav3, $bonusNav4, $bonusNav5)
{
    if (($trial >= 1) && ($trial <= 25)) {
        //Tentation
        $trialCheck = rand(1, 100);
        switch ($trialCheck) {
            case $nav == 'navWarpT':
                $trialCheckResult = ($soc + $bonusNav2 + $bonusNav3 + $bonusNav4 + $bonusNav5 + $bonusTrial) - $trialCheck;
                if ($trialCheckResult >= 0) {
                    $trialFailed = 0;
                } else {
                    $trialFailed = 1;
                }
                return $trialFailed;
            case $nav == 'navWarp+10':
                $trialCheckResult = ($soc + $bonusNav2 + $bonusNav3 + $bonusNav4 + $bonusNav5 + $bonusTrial + 10) - $trialCheck;
                if ($trialCheckResult >= 0) {
                    $trialFailed = 0;
                } else {
                    $trialFailed = 1;
                }
                return $trialFailed;
            case $nav == 'navWarp+20':
                $trialCheckResult = ($soc + $bonusNav2 + $bonusNav3 + $bonusNav4 + $bonusNav5 + $bonusTrial + 20) - $trialCheck;
                if ($trialCheckResult >= 0) {
                    $trialFailed = 0;
                } else {
                    $trialFailed = 1;
                }
                return $trialFailed;
            case $nav == 'navWarp+30':
                $trialCheckResult = ($soc + $bonusNav2 + $bonusNav3 + $bonusNav4 + $bonusNav5 + $bonusTrial + 30) - $trialCheck;
                if ($trialCheckResult >= 0) {
                    $trialFailed = 0;
                } else {
                    $trialFailed = 1;
                }
                return $trialFailed;
        }
    }
    if (($trial >= 26) && ($trial <= 50)) {
        //Concours de Force
        $trialCheck = rand(1, 100);
        switch ($trialCheck) {
            case $nav == 'navWarpT':
                $trialCheckResult = ($s + $bonusNav2 + $bonusNav3 + $bonusNav4 + $bonusNav5 + $bonusTrial) - $trialCheck;
                if ($trialCheckResult >= 0) {
                    $trialFailed = 0;
                } else {
                    $trialFailed = 1;
                }
                return $trialFailed;
            case $nav == 'navWarp+10':
                $trialCheckResult = ($s + $bonusNav2 + $bonusNav3 + $bonusNav4 + $bonusNav5 + $bonusTrial + 10) - $trialCheck;
                if ($trialCheckResult >= 0) {
                    $trialFailed = 0;
                } else {
                    $trialFailed = 1;
                }
                return $trialFailed;
            case $nav == 'navWarp+20':
                $trialCheckResult = ($s + $bonusNav2 + $bonusNav3 + $bonusNav4 + $bonusNav5 + $bonusTrial + 20) - $trialCheck;
                if ($trialCheckResult >= 0) {
                    $trialFailed = 0;
                } else {
                    $trialFailed = 1;
                }
                return $trialFailed;
            case $nav == 'navWarp+30':
                $trialCheckResult = ($s + $bonusNav2 + $bonusNav3 + $bonusNav4 + $bonusNav5 + $bonusTrial + 30) - $trialCheck;
                if ($trialCheckResult >= 0) {
                    $trialFailed = 0;
                } else {
                    $trialFailed = 1;
                }
                return $trialFailed;
        }
    }
    if (($trial >= 51) && ($trial <= 75)) {
        //Epreuve de l'endurance
        $trialCheck = rand(1, 100);
        switch ($trialCheck) {
            case $nav == 'navWarpT':
                $trialCheckResult = ($t + $bonusNav2 + $bonusNav3 + $bonusNav4 + $bonusNav5 + $bonusTrial) - $trialCheck;
                if ($trialCheckResult >= 0) {
                    $trialFailed = 0;
                } else {
                    $trialFailed = 1;
                }
                return $trialFailed;
            case $nav == 'navWarp+10':
                $trialCheckResult = ($t + $bonusNav2 + $bonusNav3 + $bonusNav4 + $bonusNav5 + $bonusTrial + 10) - $trialCheck;
                if ($trialCheckResult >= 0) {
                    $trialFailed = 0;
                } else {
                    $trialFailed = 1;
                }
                return $trialFailed;
            case $nav == 'navWarp+20':
                $trialCheckResult = ($t + $bonusNav2 + $bonusNav3 + $bonusNav4 + $bonusNav5 + $bonusTrial + 20) - $trialCheck;
                if ($trialCheckResult >= 0) {
                    $trialFailed = 0;
                } else {
                    $trialFailed = 1;
                }
                return $trialFailed;
            case $nav == 'navWarp+30':
                $trialCheckResult = ($t + $bonusNav2 + $bonusNav3 + $bonusNav4 + $bonusNav5 + $bonusTrial + 30) - $trialCheck;
                if ($trialCheckResult >= 0) {
                    $trialFailed = 0;
                } else {
                    $trialFailed = 1;
                }
                return $trialFailed;
        }
    }
    if (($trial >= 76) && ($trial <= 100)) {
        //Conundrum
        $trialCheck = rand(1, 100);
        switch ($trialCheck) {
            case $nav == 'navWarpT':
                $trialCheckResult = ($int + $bonusNav2 + $bonusNav3 + $bonusNav4 + $bonusNav5 + $bonusTrial) - $trialCheck;
                if ($trialCheckResult >= 0) {
                    $trialFailed = 0;
                } else {
                    $trialFailed = 1;
                }
                return $trialFailed;
            case $nav == 'navWarp+10':
                $trialCheckResult = ($int + $bonusNav2 + $bonusNav3 + $bonusNav4 + $bonusNav5 + $bonusTrial + 10) - $trialCheck;
                if ($trialCheckResult >= 0) {
                    $trialFailed = 0;
                } else {
                    $trialFailed = 1;
                }
                return $trialFailed;
            case $nav == 'navWarp+20':
                $trialCheckResult = ($int + $bonusNav2 + $bonusNav3 + $bonusNav4 + $bonusNav5 + $bonusTrial + 20) - $trialCheck;
                if ($trialCheckResult >= 0) {
                    $trialFailed = 0;
                } else {
                    $trialFailed = 1;
                }
                return $trialFailed;
            case $nav == 'navWarp+30':
                $trialCheckResult = ($int + $bonusNav2 + $bonusNav3 + $bonusNav4 + $bonusNav5 + $bonusTrial + 30) - $trialCheck;
                if ($trialCheckResult >= 0) {
                    $trialFailed = 0;
                } else {
                    $trialFailed = 1;
                }
                return $trialFailed;
        }
    }
}


function navTrial($nav, $int, $bonusNav2, $bonusNav3, $bonusNav4, $bonusNav5, $agiTimonier, $pilotageTimonier, $bonusTrial)
{
    $navTrialCheck = rand(1, 100);
    switch ($navTrialCheck) {
        case($nav == "navWarpT"):
            $navTrialCheckResult = (($int + $bonusNav2 + $bonusNav3 + $bonusNav4 + $bonusNav5 + $bonusTrial) - $navTrialCheck);
            if ($navTrialCheckResult >= 0) {
                $trialFailed = pilotage($agiTimonier, $pilotageTimonier);
            } else {
                $trialFailed = 1;
            }
            return $trialFailed;
        case($nav == "navWarp+10"):
            $navTrialCheckResult = (($int + $bonusNav2 + $bonusNav3 + $bonusNav4 + $bonusNav5 + $bonusTrial + 10) - $navTrialCheck);
            if ($navTrialCheckResult >= 0) {
                $trialFailed = pilotage($agiTimonier, $pilotageTimonier);
            } else {
                $trialFailed = 1;
            }
            return $trialFailed;
        case($nav == "navWarp+20"):
            $navTrialCheckResult = (($int + $bonusNav2 + $bonusNav3 + $bonusNav4 + $bonusNav5 + $bonusTrial + 20) - $navTrialCheck);
            if ($navTrialCheckResult >= 0) {
                $trialFailed = pilotage($agiTimonier, $pilotageTimonier);
            } else {
                $trialFailed = 1;
            }
            return $trialFailed;
        case($nav == "navWarp+30"):
            $navTrialCheckResult = (($int + $bonusNav2 + $bonusNav3 + $bonusNav4 + $bonusNav5 + $bonusTrial + 30) - $navTrialCheck);
            if ($navTrialCheckResult >= 0) {
                $trialFailed = pilotage($agiTimonier, $pilotageTimonier);
            } else {
                $trialFailed = 1;
            }
            return $trialFailed;
    }
}

//Pilotage pour éviter les rencontres physiques
function pilotage($agiTimonier, $pilotageTimonier)
{
    $pilotageCheck = rand(1, 100);
    switch ($pilotageCheck) {
        case $pilotageTimonier == 'pilotT':
            $pilotageCheckResult = ($agiTimonier + 10) - $pilotageCheck;
            if ($pilotageCheckResult >= 0) {
                $trialFailed = 0;
            } else {
                $trialFailed = 1;
            }
            return $trialFailed;
        case $pilotageTimonier == 'pilot+10':
            $pilotageCheckResult = ($agiTimonier + 10 + 10) - $pilotageCheck;
            if ($pilotageCheckResult >= 0) {
                $trialFailed = 0;
            } else {
                $trialFailed = 1;
            }
            return $trialFailed;
        case $pilotageTimonier == 'pilot+20':
            $pilotageCheckResult = ($agiTimonier + 20 + 10) - $pilotageCheck;
            if ($pilotageCheckResult >= 0) {
                $trialFailed = 0;
            } else {
                $trialFailed = 1;
            }
            return $trialFailed;
        case $pilotageTimonier == 'pilot+30':
            $pilotageCheckResult = ($agiTimonier + 30 + 10) - $pilotageCheck;
            if ($pilotageCheckResult >= 0) {
                $trialFailed = 0;
            } else {
                $trialFailed = 1;
            }
            return $trialFailed;
    }
}

function rencontres(
    $tempstrajetabsolu,
    $frequenceRencontre,
    $badOmens,
    $per,
    $psyniscience,
    $agiTimonier,
    $pilotageTimonier,
    $nav,
    $int,
    $bonusNav2,
    $bonusNav3,
    $bonusNav4,
    $bonusNav5,
    $soc,
    $s,
    $t,
    $astronomicanPasPercu,
    $psyniscienceCheck2Failed,
    $dureeEronner,
    $tempstrajettheorique,
    $route
) {
    $rencontresNombre = floor($tempstrajetabsolu / $frequenceRencontre);
    echo "Il y aura ";
    echo $rencontresNombre;
    echo " rencontres Warp durant ce voyage. <br> <br>";

    for ($i = 1; $i <= $rencontresNombre; $i++) {
        $rencontresTirage = rand(1, 100);
        if ($badOmens == 1) {
            if (
                ($rencontresTirage == 9) | ($rencontresTirage == 19) | ($rencontresTirage == 29) | ($rencontresTirage == 39) |
                ($rencontresTirage == 49) | ($rencontresTirage == 59) | ($rencontresTirage == 69) | ($rencontresTirage == 79) | ($rencontresTirage == 89)
                | ($rencontresTirage >= 91) && ($rencontresTirage <= 99)
            ) {
                $rencontresTirage = 35;
            }
        }
        if (($rencontresTirage >= 1) && ($rencontresTirage <= 20)) {
            //Requête SQL pour afficher la description et la designation de la rencontre
            $request = "SELECT Designation FROM rencontre_warp WHERE Id=1";
            $designation = selectDatabase($request);
            echo "[" . $rencontresTirage . "] !  ".$designation[0]["Designation"] . '<br>';
            $request = "SELECT Description FROM rencontre_warp WHERE Id=1";
            $description = selectDatabase($request);
            echo $description[0]["Description"] . '<br>';
            //Relance de la perception de l'astronomican si celle ci a été échouée précédement
            if ($astronomicanPasPercu == 1) {
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
                        $bonusNav = psyniscienceAstro($psyniscience, $per, $psyniscienceCheck2, $psyniscienceCheck2Failed, $dureeEronner, $tempstrajettheorique, $bonus);
                        break;
                    case 4:
                    case 5:
                    case 6:
                    case 7:
                    case 8:
                    case 10:
                        // psyniscience normale
                        $bonus = 0;
                        $bonusNav = psyniscienceAstro($psyniscience, $per, $psyniscienceCheck2, $psyniscienceCheck2Failed, $dureeEronner, $tempstrajettheorique, $bonus);
                        break;
                    case 9:
                        // psyniscience -20
                        $bonus = -20;
                        $bonusNav = psyniscienceAstro($psyniscience, $per, $psyniscienceCheck2, $psyniscienceCheck2Failed, $dureeEronner, $tempstrajettheorique, $bonus);
                        break;
                }
                //L'astronomican n'est pas vu
                if ($bonusNav == - 20) {
                    $astronomicanPasPercu = 1;
                }
                if ($bonusNav != - 20) {
                    $astronomicanPasPercu = 0;
                }
            }
        }
        if (($rencontresTirage >= 21) && ($rencontresTirage <= 30)) {
            if (
                (isset($_POST["navigator"])) &&
                ($_POST["navigator"] == true)
            ) {
                //éviter la rencontre grâce au navigateur
                //Psyniscience pour détecter
                $psyniscienceCheck3 = rand(1, 100);
                $psyniscienceCheck3result = detectionRencontre($psyniscience, $per, $psyniscienceCheck3);
                if ($psyniscienceCheck3result >= 0) {
                    echo "[" . $psyniscienceCheck3 . "] ! Le Navigateur détecte le danger et a le temps de se préparer. <br>";
                    $trial = rand(1, 100);
                    $bonusTrial = 20;
                    $trialFailed = trial($trial, $bonusTrial, $soc, $s, $t, $int, $nav, $bonusNav2, $bonusNav3, $bonusNav4, $bonusNav5);
                } elseif (($psyniscienceCheck3result >= -1) && ($psyniscienceCheck3result < 0)) {
                    echo "[" . $psyniscienceCheck3 . "] ! Le Navigateur détecte le danger juste à temps mais n'a pas le temps de se préparer. <br>";
                    $trial = rand(1, 100);
                    $bonusTrial = 0;
                    $trialFailed = trial($trial, $bonusTrial, $soc, $s, $t, $int, $nav, $bonusNav2, $bonusNav3, $bonusNav4, $bonusNav5);
                } else {
                    echo "[" . $psyniscienceCheck3 . "] ! Le Navigateur ne détecte pas le danger et n'a pas le temps de se préparer. <br>";
                    $trialFailed = 1;
                }
                if ($trialFailed == 0) {
                    $request = "SELECT Designation FROM rencontre_warp WHERE Id=2";
                    $designation = selectDatabase($request);
                    echo "[" . $rencontresTirage . "] ! Un ".$designation[0]["Designation"] . ' a été évité avec succès. <br>';
                } else {
                    //Requête SQL pour afficher la description et la designation de la rencontre
                    $request = "SELECT Designation FROM rencontre_warp WHERE Id=2";
                    $designation = selectDatabase($request);
                    echo "[" . $rencontresTirage . "] !  ".$designation[0]["Designation"] . '<br>';
                    $request = "SELECT Description FROM rencontre_warp WHERE Id=2";
                    $description = selectDatabase($request);
                    echo $description[0]["Description"] . '<br>';
                }
            } else {
                //Requête SQL pour afficher la description et la designation de la rencontre
                $request = "SELECT Designation FROM rencontre_warp WHERE Id=2";
                $designation = selectDatabase($request);
                echo "[" . $rencontresTirage . "] !  ".$designation[0]["Designation"] . '<br>';
                $request = "SELECT Description FROM rencontre_warp WHERE Id=2";
                $description = selectDatabase($request);
                echo $description[0]["Description"] . '<br>';
            }
        }
        if (($rencontresTirage >= 31) && ($rencontresTirage <= 40)) {
            if (
                (isset($_POST["navigator"])) &&
                ($_POST["navigator"] == true)
            ) {
                //éviter la rencontre grâce au navigateur
                //Psyniscience pour détecter
                $psyniscienceCheck3 = rand(1, 100);
                $psyniscienceCheck3result = detectionRencontre($psyniscience, $per, $psyniscienceCheck3);
                if ($psyniscienceCheck3result >= 0) {
                    echo "[" . $psyniscienceCheck3 . "] ! Le Navigateur détecte le danger et a le temps de se préparer. <br>";
                    $trial = rand(1, 100);
                    $bonusTrial = 20;
                    $trialFailed = trial($trial, $bonusTrial, $soc, $s, $t, $int, $nav, $bonusNav2, $bonusNav3, $bonusNav4, $bonusNav5);
                } elseif (($psyniscienceCheck3result >= -1) && ($psyniscienceCheck3result < 0)) {
                    echo "[" . $psyniscienceCheck3 . "] ! Le Navigateur détecte le danger juste à temps mais n'a pas le temps de se préparer. <br>";
                    $trial = rand(1, 100);
                    $bonusTrial = 0;
                    $trialFailed = trial($trial, $bonusTrial, $soc, $s, $t, $int, $nav, $bonusNav2, $bonusNav3, $bonusNav4, $bonusNav5);
                } else {
                    echo "[" . $psyniscienceCheck3 . "] ! Le Navigateur ne détecte pas le danger et n'a pas le temps de se préparer. <br>";
                    $trialFailed = 1;
                }
                if ($trialFailed == 0) {
                    $request = "SELECT Designation FROM rencontre_warp WHERE Id=3";
                    $designation = selectDatabase($request);
                    echo "[" . $rencontresTirage . "] ! Des ".$designation[0]["Designation"] . ' ont été évité avec succès. <br>';
                } else {
                    //Requête SQL pour afficher la description et la designation de la rencontre
                    $request = "SELECT Designation FROM rencontre_warp WHERE Id=3";
                    $designation = selectDatabase($request);
                    echo "[" . $rencontresTirage . "] !  ".$designation[0]["Designation"] . '<br>';
                    $request = "SELECT Description FROM rencontre_warp WHERE Id=3";
                    $description = selectDatabase($request);
                    echo $description[0]["Description"] . '<br>';
                    echo incursion($_POST["gellarFieldOffline"], $_POST["gellarFieldDamaged"]);
                }
            } else {
                //Requête SQL pour afficher la description et la designation de la rencontre
                $request = "SELECT Designation FROM rencontre_warp WHERE Id=3";
                $designation = selectDatabase($request);
                echo "[" . $rencontresTirage . "] !  ".$designation[0]["Designation"] . '<br>';
                $request = "SELECT Description FROM rencontre_warp WHERE Id=3";
                $description = selectDatabase($request);
                echo $description[0]["Description"] . '<br>';
                echo incursion($_POST["gellarFieldOffline"], $_POST["gellarFieldDamaged"]);
            }
        }
        if (($rencontresTirage >= 41) && ($rencontresTirage <= 50)) {
            if (
                (isset($_POST["navigator"])) &&
                ($_POST["navigator"] == true)
            ) {
                //éviter la rencontre grâce au navigateur
                //Psyniscience pour détecter
                $psyniscienceCheck3 = rand(1, 100);
                $psyniscienceCheck3result = detectionRencontre($psyniscience, $per, $psyniscienceCheck3);
                if ($psyniscienceCheck3result >= 0) {
                    echo "[" . $psyniscienceCheck3 . "] ! Le Navigateur détecte le danger et a le temps de se préparer. <br>";
                    $trial = rand(1, 100);
                    $bonusTrial = 20;
                    $trialFailed = navTrial($nav, $int, $bonusNav2, $bonusNav3, $bonusNav4, $bonusNav5, $agiTimonier, $pilotageTimonier, $bonusTrial);
                } elseif (($psyniscienceCheck3result >= -1) && ($psyniscienceCheck3result < 0)) {
                    echo "[" . $psyniscienceCheck3 . "] ! Le Navigateur détecte le danger juste à temps mais n'a pas le temps de se préparer. <br>";
                    $trial = rand(1, 100);
                    $bonusTrial = 0;
                    $trialFailed = navTrial($nav, $int, $bonusNav2, $bonusNav3, $bonusNav4, $bonusNav5, $agiTimonier, $pilotageTimonier, $bonusTrial);
                } else {
                    echo "[" . $psyniscienceCheck3 . "] ! Le Navigateur ne détecte pas le danger et n'a pas le temps de se préparer. <br>";
                    $trialFailed = 1;
                }
                if ($trialFailed == 0) {
                    $request = "SELECT Designation FROM rencontre_warp WHERE Id=4";
                    $designation = selectDatabase($request);
                    echo "[" . $rencontresTirage . "] ! Une ".$designation[0]["Designation"] . ' a été évitée avec succès. <br>';
                } else {
                    //Requête SQL pour afficher la description et la designation de la rencontre
                    $request = "SELECT Designation FROM rencontre_warp WHERE Id=4";
                    $designation = selectDatabase($request);
                    echo "[" . $rencontresTirage . "] !  ".$designation[0]["Designation"] . '<br>';
                    $request = "SELECT Description FROM rencontre_warp WHERE Id=4";
                    $description = selectDatabase($request);
                    echo $description[0]["Description"] . '<br>';
                }
            } else {
                //Requête SQL pour afficher la description et la designation de la rencontre
                $request = "SELECT Designation FROM rencontre_warp WHERE Id=4";
                $designation = selectDatabase($request);
                echo "[" . $rencontresTirage . "] !  ".$designation[0]["Designation"] . '<br>';
                $request = "SELECT Description FROM rencontre_warp WHERE Id=4";
                $description = selectDatabase($request);
                echo $description[0]["Description"] . '<br>';
            }
        }
        if (($rencontresTirage >= 51) && ($rencontresTirage <= 60)) {
            //Requête SQL pour afficher la description et la designation de la rencontre
            $request = "SELECT Designation FROM rencontre_warp WHERE Id=5";
            $designation = selectDatabase($request);
            echo "[" . $rencontresTirage . "] !  ".$designation[0]["Designation"] . '<br>';
            $request = "SELECT Description FROM rencontre_warp WHERE Id=5";
            $description = selectDatabase($request);
            echo $description[0]["Description"] . '<br>';
        }
        if (($rencontresTirage >= 61) && ($rencontresTirage <= 70)) {
            if (
                (isset($_POST["navigator"])) &&
                ($_POST["navigator"] == true)
            ) {
                //éviter la rencontre grâce au navigateur
                //Psyniscience pour détecter
                $psyniscienceCheck3 = rand(1, 100);
                $psyniscienceCheck3result = detectionRencontre($psyniscience, $per, $psyniscienceCheck3);
                if ($psyniscienceCheck3result >= 0) {
                    echo "[" . $psyniscienceCheck3 . "] ! Le Navigateur détecte le danger et a le temps de se préparer. <br>";
                    $trial = rand(1, 100);
                    $bonusTrial = 20;
                    $trialFailed = navTrial($nav, $int, $bonusNav2, $bonusNav3, $bonusNav4, $bonusNav5, $agiTimonier, $pilotageTimonier, $bonusTrial);
                } elseif (($psyniscienceCheck3result >= -1) && ($psyniscienceCheck3result < 0)) {
                    echo "[" . $psyniscienceCheck3 . "] ! Le Navigateur détecte le danger juste à temps mais n'a pas le temps de se préparer. <br>";
                    $trial = rand(1, 100);
                    $bonusTrial = 0;
                    $trialFailed = navTrial($nav, $int, $bonusNav2, $bonusNav3, $bonusNav4, $bonusNav5, $agiTimonier, $pilotageTimonier, $bonusTrial);
                } else {
                    echo "[" . $psyniscienceCheck3 . "] ! Le Navigateur ne détecte pas le danger et n'a pas le temps de se préparer. <br>";
                    $trialFailed = 1;
                }
                if ($trialFailed == 0) {
                    $request = "SELECT Designation FROM rencontre_warp WHERE Id=6";
                    $designation = selectDatabase($request);
                    echo "[" . $rencontresTirage . "] ! Une ".$designation[0]["Designation"] . ' a été évitée avec succès. <br>';
                } else {
                    //Requête SQL pour afficher la description et la designation de la rencontre
                    $request = "SELECT Designation FROM rencontre_warp WHERE Id=6";
                    $designation = selectDatabase($request);
                    echo "[" . $rencontresTirage . "] !  ".$designation[0]["Designation"] . '<br>';
                    $request = "SELECT Description FROM rencontre_warp WHERE Id=6";
                    $description = selectDatabase($request);
                    echo $description[0]["Description"] . '<br>';
                    echo tempete($_POST["gellarFieldDamaged"], $_POST["gellarFieldOffline"]);
                }
            } else {
                //Requête SQL pour afficher la description et la designation de la rencontre
                $request = "SELECT Designation FROM rencontre_warp WHERE Id=6";
                $designation = selectDatabase($request);
                echo "[" . $rencontresTirage . "] !  ".$designation[0]["Designation"] . '<br>';
                $request = "SELECT Description FROM rencontre_warp WHERE Id=6";
                $description = selectDatabase($request);
                echo $description[0]["Description"] . '<br>';
                echo tempete($_POST["gellarFieldDamaged"], $_POST["gellarFieldOffline"]);
            }
        }
        if (($rencontresTirage >= 71) && ($rencontresTirage <= 80)) {
            if (
                (isset($_POST["navigator"])) &&
                ($_POST["navigator"] == true)
            ) {
                //éviter la rencontre grâce au navigateur
                //Psyniscience pour détecter
                $psyniscienceCheck3 = rand(1, 100);
                $psyniscienceCheck3result = detectionRencontre($psyniscience, $per, $psyniscienceCheck3);
                if ($psyniscienceCheck3result >= 0) {
                    echo "[" . $psyniscienceCheck3 . "] ! Le Navigateur détecte le danger et a le temps de se préparer. <br>";
                    $trial = rand(1, 100);
                    $bonusTrial = 20;
                    $trialFailed = navTrial($nav, $int, $bonusNav2, $bonusNav3, $bonusNav4, $bonusNav5, $agiTimonier, $pilotageTimonier, $bonusTrial);
                } elseif (($psyniscienceCheck3result >= -1) && ($psyniscienceCheck3result < 0)) {
                    echo "[" . $psyniscienceCheck3 . "] ! Le Navigateur détecte le danger juste à temps mais n'a pas le temps de se préparer. <br>";
                    $trial = rand(1, 100);
                    $bonusTrial = 0;
                    $trialFailed = navTrial($nav, $int, $bonusNav2, $bonusNav3, $bonusNav4, $bonusNav5, $agiTimonier, $pilotageTimonier, $bonusTrial);
                } else {
                    echo "[" . $psyniscienceCheck3 . "] ! Le Navigateur ne détecte pas le danger et n'a pas le temps de se préparer. <br>";
                    $trialFailed = 1;
                }
                if ($trialFailed == 0) {
                    $request = "SELECT Designation FROM rencontre_warp WHERE Id=7";
                    $designation = selectDatabase($request);
                    echo "[" . $rencontresTirage . "] ! Un ".$designation[0]["Designation"] . ' a été évité avec succès. <br>';
                } else {
                    //Requête SQL pour afficher la description et la designation de la rencontre
                    $request = "SELECT Designation FROM rencontre_warp WHERE Id=7";
                    $designation = selectDatabase($request);
                    echo "[" . $rencontresTirage . "] !  ".$designation[0]["Designation"] . '<br>';
                    $request = "SELECT Description FROM rencontre_warp WHERE Id=7";
                    $description = selectDatabase($request);
                    echo $description[0]["Description"] . '<br>';
                    echo recifs($_POST["gellarFieldDamaged"], $_POST["gellarFieldOffline"]);
                }
            } else {
                //Requête SQL pour afficher la description et la designation de la rencontre
                $request = "SELECT Designation FROM rencontre_warp WHERE Id=7";
                $designation = selectDatabase($request);
                echo "[" . $rencontresTirage . "] !  ".$designation[0]["Designation"] . '<br>';
                $request = "SELECT Description FROM rencontre_warp WHERE Id=7";
                $description = selectDatabase($request);
                echo $description[0]["Description"] . '<br>';
                echo recifs($_POST["gellarFieldDamaged"], $_POST["gellarFieldOffline"]);
            }
        }
        if (($rencontresTirage >= 81) && ($rencontresTirage <= 90)) {
            if (
                (isset($_POST["navigator"])) &&
                ($_POST["navigator"] == true)
            ) {
                //éviter la rencontre grâce au navigateur
                //Psyniscience pour détecter
                $psyniscienceCheck3 = rand(1, 100);
                $psyniscienceCheck3result = detectionRencontre($psyniscience, $per, $psyniscienceCheck3);
                if ($psyniscienceCheck3result >= 0) {
                    echo "[" . $psyniscienceCheck3 . "] ! Le Navigateur détecte le danger et a le temps de se préparer. <br>";
                    $trial = rand(1, 100);
                    $bonusTrial = 20;
                    $trialFailed = navTrial($nav, $int, $bonusNav2, $bonusNav3, $bonusNav4, $bonusNav5, $agiTimonier, $pilotageTimonier, $bonusTrial);
                } elseif (($psyniscienceCheck3result >= -1) && ($psyniscienceCheck3result < 0)) {
                    echo "[" . $psyniscienceCheck3 . "] ! Le Navigateur détecte le danger juste à temps mais n'a pas le temps de se préparer. <br>";
                    $trial = rand(1, 100);
                    $bonusTrial = 0;
                    $trialFailed = navTrial($nav, $int, $bonusNav2, $bonusNav3, $bonusNav4, $bonusNav5, $agiTimonier, $pilotageTimonier, $bonusTrial);
                } else {
                    echo "[" . $psyniscienceCheck3 . "] ! Le Navigateur ne détecte pas le danger et n'a pas le temps de se préparer. <br>";
                    $trialFailed = 1;
                }
                if ($trialFailed == 0) {
                    $request = "SELECT Designation FROM rencontre_warp WHERE Id=8";
                    $designation = selectDatabase($request);
                    echo "[" . $rencontresTirage . "] ! Une ".$designation[0]["Designation"] . ' a été évitée avec succès. <br>';
                } else {
                    //Requête SQL pour afficher la description et la designation de la rencontre
                    $request = "SELECT Designation FROM rencontre_warp WHERE Id=8";
                    $designation = selectDatabase($request);
                    echo "[" . $rencontresTirage . "] !  ".$designation[0]["Designation"] . '<br>';
                    $request = "SELECT Description FROM rencontre_warp WHERE Id=8";
                    $description = selectDatabase($request);
                    echo $description[0]["Description"] . '<br>';
                    echo breche();
                }
            } else {
                //Requête SQL pour afficher la description et la designation de la rencontre
                $request = "SELECT Designation FROM rencontre_warp WHERE Id=8";
                $designation = selectDatabase($request);
                echo "[" . $rencontresTirage . "] !  ".$designation[0]["Designation"] . '<br>';
                $request = "SELECT Description FROM rencontre_warp WHERE Id=8";
                $description = selectDatabase($request);
                echo $description[0]["Description"] . '<br>';
                echo breche();
            }
        }
        if (($rencontresTirage >= 91)) {
            if (
                (isset($_POST["navigator"])) &&
                ($_POST["navigator"] == true)
            ) {
                //éviter la rencontre grâce au navigateur
                //Psyniscience pour détecter
                $psyniscienceCheck3 = rand(1, 100);
                $psyniscienceCheck3result = detectionRencontre($psyniscience, $per, $psyniscienceCheck3);
                if ($psyniscienceCheck3result >= 0) {
                    echo "[" . $psyniscienceCheck3 . "] ! Le Navigateur détecte le danger et a le temps de se préparer. <br>";
                    $trial = rand(1, 100);
                    $bonusTrial = 20;
                    $trialFailed = navTrial($nav, $int, $bonusNav2, $bonusNav3, $bonusNav4, $bonusNav5, $agiTimonier, $pilotageTimonier, $bonusTrial);
                } elseif (($psyniscienceCheck3result >= -1) && ($psyniscienceCheck3result < 0)) {
                    echo "[" . $psyniscienceCheck3 . "] ! Le Navigateur détecte le danger juste à temps mais n'a pas le temps de se préparer. <br>";
                    $trial = rand(1, 100);
                    $bonusTrial = 0;
                    $trialFailed = navTrial($nav, $int, $bonusNav2, $bonusNav3, $bonusNav4, $bonusNav5, $agiTimonier, $pilotageTimonier, $bonusTrial);
                } else {
                    echo "[" . $psyniscienceCheck3 . "] ! Le Navigateur ne détecte pas le danger et n'a pas le temps de se préparer. <br>";
                    $trialFailed = 1;
                }
                if ($trialFailed == 0) {
                    $request = "SELECT Designation FROM rencontre_warp WHERE Id=9";
                    $designation = selectDatabase($request);
                    echo "[" . $rencontresTirage . "] ! Une ".$designation[0]["Designation"] . ' a été évitée avec succès. <br>';
                } else {
                    //Requête SQL pour afficher la description et la designation de la rencontre
                    $request = "SELECT Designation FROM rencontre_warp WHERE Id=9";
                    $designation = selectDatabase($request);
                    echo "[" . $rencontresTirage . "] !  ".$designation[0]["Designation"] . '<br>';
                    $request = "SELECT Description FROM rencontre_warp WHERE Id=9";
                    $description = selectDatabase($request);
                    echo $description[0]["Description"] . '<br>';
                    $severlyOffCourse = 1;
                }
            } else {
                //Requête SQL pour afficher la description et la designation de la rencontre
                $request = "SELECT Designation FROM rencontre_warp WHERE Id=9";
                $designation = selectDatabase($request);
                echo "[" . $rencontresTirage . "] !  ".$designation[0]["Designation"] . '<br>';
                $request = "SELECT Description FROM rencontre_warp WHERE Id=9";
                $description = selectDatabase($request);
                echo $description[0]["Description"] . '<br>';
                $severlyOffCourse = 1;
            }
        }
        echo "<br>";
    }
}


//____________________________________________________________________________________________
//______________________________ Fonction Tempête Warp : _____________________________________
//____________________________________________________________________________________________

function tempete($gellarFieldDamaged, $gellarFieldOffline)
{
    if (($gellarFieldDamaged == 'yes')) {
        $dgtsCrits = rand(1, 10);
    } else {
        $dgtsCrits = rand(1, 10);
        $d10 = rand(1, 10);
        if ($dgtsCrits <= $d10) {
            $dgtsCrits = $d10;
        }
    }
    if (($gellarFieldOffline == 'yes')) {
        $dgtsCrits = rand(1, 10);
        $dgtsCrits = $dgtsCrits + 2;
    } else {
        $dgtsCrits = rand(1, 10);
        $d10 = rand(1, 10);
        if ($dgtsCrits <= $d10) {
            $dgtsCrits = $d10;
        }
    }
    $text = "Le vaisseau va subir ";
    $text .= "<b>";
    $text .= $dgtsCrits;
    $text .= "</b>";
    $text .= " de dégâts critiques. Il faut se référer à la page 222 du livre de base au tableau des dégâts critiques.";
    return $text;
}

//____________________________________________________________________________________________
//________________________ Fonction Récifs Aethériques _______________________________________
//____________________________________________________________________________________________

function recifs($gellarFieldDamaged, $gellarFieldOffline)
{
    if (($gellarFieldDamaged == 'yes')) {
        $dgts = (rand(2, 20) + 3);
    } else {
        $dgts = (rand(1, 10) + 2);
    }
    if (($gellarFieldOffline == 'yes')) {
        $dgts = (rand(4, 40) + 5);
    } else {
        $dgts = (rand(1, 10) + 2);
    }
    $text = "Le vaisseau va subir ";
    $text .= "<b>";
    $text .= $dgts;
    $text .= "</b>";
    $text .= " de dégâts à la coque ignorant les boucliers de vide.";
    return $text;
}


//____________________________________________________________________________________________
// Fonction Incursions Warp 
/* Si cet effet se manifeste à bord d'un vaisseau, 
            rouler une fois les dés sur la <b>table 2-8 Incursions Warp</b> (voir page 33)
            et appliquez le résultat. Réduisez le résultat du lancé de dé par -30 si le champs de 
            Geller est complètement fonctionnel (jusqu'à un minimum de 01). Ajoutez +30 au résultat
            du jet si le champs de Geller est éteins. */
//____________________________________________________________________________________________


function incursion($gellarFieldOffline, $gellarFieldDamaged)
{
    $incursionsWarp = rand(1, 100);
    if (
        (($gellarFieldDamaged == 'no')) &&
        (($gellarFieldOffline == 'no'))
    ) {
        $incursionsWarp = floor($incursionsWarp - 30);
    } else {
        if (($gellarFieldOffline == 'yes')) {
            $incursionsWarp = $incursionsWarp + 30;
        } else {
            $incursionsWarp = $incursionsWarp + 0;
        }
    }
    $text = "[";
    $text .= $incursionsWarp;
    $text .= "] ";
    if (($incursionsWarp >= 0) && ($incursionsWarp <= 20)) {
        //Requête SQL pour afficher la description et la designation des incursions
        $request = "SELECT Designation FROM incursion_warp WHERE Id=2";
        $designation = selectDatabase($request);
        $text .= $designation[0]["Designation"] . '<br>';
        $request = "SELECT Description FROM incursion_warp WHERE Id=2";
        $description = selectDatabase($request);
        $text .= $description[0]["Description"] . '<br>';
    }
    if (($incursionsWarp >= 21) && ($incursionsWarp <= 40)) {
        //Requête SQL pour afficher la description et la designation des incursions
        $request = "SELECT Designation FROM incursion_warp WHERE Id=3";
        $designation = selectDatabase($request);
        $text .= $designation[0]["Designation"] . '<br>';
        $request = "SELECT Description FROM incursion_warp WHERE Id=3";
        $description = selectDatabase($request);
        $text .= $description[0]["Description"] . '<br>';
    }
    if (($incursionsWarp >= 41) && ($incursionsWarp <= 60)) {
        //Requête SQL pour afficher la description et la designation des incursions
        $request = "SELECT Designation FROM incursion_warp WHERE Id=4";
        $designation = selectDatabase($request);
        $text .= $designation[0]["Designation"] . '<br>';
        $request = "SELECT Description FROM incursion_warp WHERE Id=4";
        $description = selectDatabase($request);
        $text .= $description[0]["Description"] . '<br>';
    }
    if (($incursionsWarp >= 61) && ($incursionsWarp <= 80)) {
        //Requête SQL pour afficher la description et la designation des incursions
        $request = "SELECT Designation FROM incursion_warp WHERE Id=5";
        $designation = selectDatabase($request);
        $text .= $designation[0]["Designation"] . '<br>';
        $request = "SELECT Description FROM incursion_warp WHERE Id=5";
        $description = selectDatabase($request);
        $text .= $description[0]["Description"] . '<br>';
    }
    if (($incursionsWarp >= 81) && ($incursionsWarp <= 90)) {
        //Requête SQL pour afficher la description et la designation des incursions
        $request = "SELECT Designation FROM incursion_warp WHERE Id=6";
        $designation = selectDatabase($request);
        $text .= $designation[0]["Designation"] . '<br>';
        $request = "SELECT Description FROM incursion_warp WHERE Id=6";
        $description = selectDatabase($request);
        $text .= $description[0]["Description"] . '<br>';
    }
    if (($incursionsWarp >= 91)) {
        //Requête SQL pour afficher la description et la designation des incursions
        $request = "SELECT Designation FROM incursion_warp WHERE Id=7";
        $designation = selectDatabase($request);
        $text .= $designation[0]["Designation"] . '<br>';
        $request = "SELECT Description FROM incursion_warp WHERE Id=7";
        $description = selectDatabase($request);
        $text .= $description[0]["Description"] . '<br>';
    }
    return $text;
}


//____________________________________________________________________________________________
// Fonction brèche Warp
//____________________________________________________________________________________________


function breche()
{
    $d10 = rand(1, 10);
    $text = "Le vaisseau est perdu pendant ";
    $text .= "<b>";
    $text .= $d10;
    $text .= "</b>";
    $text .= " Jours et rencontrera autant d'incursions Warp que de jours perdus dans la nébuleuse. Voici la liste : <br>";
    for ($i = 1; $i <= $d10; $i++) {
        $text .= "   - ";
        $text .= incursion($_POST["gellarFieldOffline"], $_POST["gellarFieldDamaged"]);
        $text .= "<br>";
    }
    $text .= "<br>";
    return $text;
}