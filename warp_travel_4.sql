-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 08 fév. 2024 à 19:01
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `warp_travel`
--

-- --------------------------------------------------------

--
-- Structure de la table `campagne`
--

CREATE TABLE `campagne` (
  `Id` int(25) NOT NULL,
  `Nom_campagne` varchar(25) DEFAULT NULL,
  `Id_Compte` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `Id` int(25) NOT NULL,
  `Nom_de_compte` varchar(100) DEFAULT NULL,
  `Mot_de_passe` varchar(100) DEFAULT NULL,
  `Mail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `hallucination_personnage`
--

CREATE TABLE `hallucination_personnage` (
  `Id_¨Personnage` int(25) NOT NULL,
  `Id_Hallucination_Warp` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `hallucination_warp`
--

CREATE TABLE `hallucination_warp` (
  `Id` int(25) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Plage_debut` int(25) NOT NULL,
  `Plage_fin` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `hallucination_warp`
--

INSERT INTO `hallucination_warp` (`Id`, `Designation`, `Description`, `Plage_debut`, `Plage_fin`) VALUES
(1, 'Pas d\'hallucination', 'Le personnage ne souffre pas d\'hallucination warp.', 0, 0),
(2, 'Phobie', 'Le personnage souffre d\'une phobie plus grave (voir page 297 du livre de règles de base de ROGUE TRADER) et chaque fois qu\'il obtient un 9 sur un dé qu\'il lance, il croit voir l\'objet de sa phobie jusqu\'à ce que le vaisseau quitte le Warp.', 1, 40),
(3, 'Malignité', 'La psyché tourmentée du personnage fait surface sous forme d’effet physique. Il lance un jet sur la Table 10–8 : Malignités (voir page 300 du livre de règles de base ROGUE TRADER). Cette malignité disparaît une fois que le vaisseau quitte le Warp.', 41, 70),
(4, 'L\'Horreur ! L\'Horreur !', 'Le personnage éprouve des visions qui révèlent la véritable horreur de la réalité. Cela lui envahit progressivement ; il gagne immédiatement 2 points de folie, plus 1 point de folie tous les 30 jours dans le Warp pendant ce voyage.', 71, 90),
(5, 'La chair est faible', 'À la fin de toute rencontre warp, le personnage voit la marque du Warp sur sa chair et doit réussir un test de volonté difficile (+0). S\'il échoue, il croit qu\'il est en train de muter et essaie d\'amputer la corruption, s\'infligeant 1d10 dégâts déchirants, plus 2 dégâts supplémentaires pour chaque degré d\'échec lors de son test de volonté.', 91, 110),
(6, 'Des mutants, des mutants partout !', 'Le personnage doit faire un test de Perception à chaque fois qu\'il interagit avec un autre personnage allié, à moins qu\'il n\'ait déjà fait un tel test pour ce personnage. S\'il réussit le Test, et qu\'au moins un des dés qu\'il lance donne un 9, il devient convaincu que le personnage cache une mutation acquise lors de la translation et doit réagir en conséquence. Sinon, il ne trouve aucune « preuve » de la mutation du personnage – pour l’instant !', 111, 130),
(7, 'Rêve de corruption', 'Des rêves chuchotés séduisent le personnage pendant le voyage, le tentant de servir les dieux sombres dans le royaume desquels il a pénétré. Ces rêves rongent son âme à mesure qu\'il progresse dans le Warp ; il gagne immédiatement 1d5 points de corruption, plus 1 point de corruption tous les 60 jours passés dans le Warp pendant ce voyage.', 131, 150),
(8, 'Malheur et désespoir', 'Le personnage est submergé par le désespoir total face à sa situation. Sachant que le vaisseau tout entier est voué à la perdition, il cherche à mettre fin à ses jours de ses propres mains plutôt que d\'être déchiré par les Démons. Le personnage devient morose et craintif, et au début de toute rencontre Warp, le personnage doit réussir un test de volonté difficile (+0). S\'il réussit, il rassemble suffisamment de volonté pour continuer, mais s\'il échoue, il devra tenter de se suicider à un moment donné au cours de la rencontre. Sa tentative pourrait mettre en danger les autres membres d\'équipage, voir le navire tout entier, s\'il tentait de faire exploser le réacteur Warp ou d\'ouvrir un sas ! Le MJ devrait donner aux autres PJ de nombreuses occasions de maîtriser le personnage. Ses tendances autodestructrices s\'évaporent à la fin de la rencontre de voyage Warp qui les déclenche.', 151, 170),
(9, 'Illusion infernale', 'Le personnage croit qu\'il est possédé par un Démon et agit comme s\'il était désormais la marionnette de l\'une des Puissances de la Ruine (choisis par le MJ). Ses actions au service du Chaos doivent être suffisamment subtiles pour échapper à toute détection s\'il est prudent, même si le MJ décide qu\'il pense qu\'il est devenu un serviteur de Khorne (il atteint ses objectifs grâce à des assassinats sélectionnés, par exemple). L\'exorcisme devrait le guérir de l\'illusion, comme s\'il était réellement possédé, sauf que dans ce cas, le personnage ne gagne aucune corruption car il n\'a jamais été véritablement sous l\'emprise d\'un démon.', 171, 999);

-- --------------------------------------------------------

--
-- Structure de la table `inclusion_campagne`
--

CREATE TABLE `inclusion_campagne` (
  `Id_Campagne` int(25) NOT NULL,
  `Id_Vaisseau` int(25) NOT NULL,
  `Id_Personnage` int(25) NOT NULL,
  `Id_Routes_Tracee` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `incursion_warp`
--

CREATE TABLE `incursion_warp` (
  `Id` int(25) NOT NULL,
  `Designation` varchar(25) DEFAULT NULL,
  `Description` text NOT NULL,
  `Plage_debut` int(25) DEFAULT NULL,
  `Plage_fin` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `incursion_warp`
--

INSERT INTO `incursion_warp` (`Id`, `Designation`, `Description`, `Plage_debut`, `Plage_fin`) VALUES
(1, 'Pas d\'incursion', 'Le jet pour cette rencontre warp n\'a pas donner le résultat prédateur psychique.', NULL, NULL),
(2, 'Malice grouillante', 'Le vaisseau est en proie à une nuée de manifestations vicieuses du warp qui font des ravages sur la structure du vaisseau, projetant des objets d\'avant en arrière, mais se précipitant dans l\'ombre lorsqu\'ils y sont confrontés. Le MJ choisit un composant à infester. Ce composant est rendu inopérant jusqu\'à ce que la présence soit éliminée par la foi ou par le feu. Si le champ Geller est endommagé, ces ombres malveillantes infestent un composant supplémentaire. Si le vaisseau n\'a pas de champ Geller actif, ils infestent 1d5 composants supplémentaires. Le moral du navire diminue de 5 pour chaque composant infesté jusqu\'à ce que l\'équipage ou les explorateurs bannissent les viles manifestations. Les ombres peuvent être bannies avec un exorcisme (comme avec le talent Purifier l\'Impur), en baignant un composant affecté dans le feu, ou par tout autre moyen approprié.', 1, 20),
(3, 'Possession', 'Chaque explorateur et PNJ majeur à bord du navire doit effectuer un test de volonté. Le personnage doté du talent Foi immaculée réussit automatiquement ce test. Le test est un test de volonté facile (+30) si le champ de Geller est pleinement opérationnel, difficile (+0) s\'il est endommagé, ou très difficile (-30) s\'il ne fonctionne pas. Le personnage qui échoue à son test d\'au moins trois degrés d\'échec est possédé par un démon (en cas d\'égalité, c\'est le MJ qui décide). Si tous les personnages réussissent le test, l’équipage résiste aux efforts des démons qui disparaissent à nouveau dans le Warp sans provoquer le moindre problème. Un personnage possédé doit accomplir une mission secrète pour détruire le vaisseau ou atteindre un autre objectif logique avant qu\'il ne retourne dans l\'espace réel. En supposant que les explorateurs réalisent qu’un personnage est possédé, ils peuvent effectuer un exorcisme (comme avec le talent Purger l\'Impur) pour expulser le mal du cœur de leur camarade.', 21, 40),
(4, 'épidemie de folie', 'La folie se propage à travers le navire. Cela commence d\'abord par les faibles d\'esprit, mais consume progressivement tout le vaisseau, sur une période de 1d5 jours. Jusqu\'à ce que la folie cesse, tous les PNJ mineurs avec lesquels les explorateurs interagissent à bord du navire sont considérés comme souffrant d\'un trouble mental choisi par le MJ dans la liste des pages 297-298 du livre de règles de base de ROGUE TRADER. Les explorateurs et les PNJ majeurs doivent réussir un test de volonté difficile (+0) pour éviter les effets de l\'épidémie. S’ils échouent à ce test, ils souffrent également d’un trouble mental. Tous les ordres émis par les officiers nécessitent un test de commandement difficile (-20) avant que l\'équipage fou ne l\'exécute. Si un officier échoue à un test de commandement avec plus de trois degrés d\'échec pendant cette période, les membres d\'équipage auxquels il s\'adressait se lèvent dans une violente rébellion – qu\'il s\'agisse de quelques matelots ou de l\'équipage tout entier dépend de l\'ampleur de l\'ordre et de la volonté du MJ. La folie dure 1d10 jours. Si le champ de Geller est endommagé, cela dure 2d10 jours. Si le champ Geller est hors ligne, la folie dure 4d10 jours.', 41, 60),
(5, 'Incursion démoniaque', 'Des prédateurs Warp se matérialisent à l\'intérieur du navire, avec l\'intention de s\'en prendre à l\'équipage vulnérable. Ces créatures utilisent le profil du Geist d\'ébène, trouvé à la page 378 du livre de règles de base de ROGUE TRADER. Tant que le champ de Geller est actif, seuls 1d5 démons s\'y faufilent ; si le champ de Geller est endommagé, 2d5 démons s\'y infiltrent, et s\'il est complètement hors ligne, alors 2d10 de ces créatures envahissent le vaisseau. Chaque Démon commence immédiatement à massacrer l\'équipage, préférant tendre des embuscades aux hommes du Vide vulnérables plutôt que d\'attaquer de grands groupes. Le vaisseau perd 1 point de population et 1 point de moral par jour et par démon tant que les envahisseurs ne sont pas expulsés par l\'exorcisme ou la lame du juste.', 61, 80),
(6, 'Maladie warp', 'La maladie se propage à travers le navire, commençant parmi les membres d\'équipage les plus bas et les plus sales, se propageant rapidement jusqu\'à la passerelle. Cette maladie peut se manifester par tous les symptômes bizarres décidés par le MJ, le plus étrange étant le mieux. Chaque jour, le MJ lance 1d10. Sur un résultat de 1 à 5, réduisez la population de l’équipage et le moral du navire de cette valeur. Sur un résultat de 6 à 10, la maladie n\'a aucun effet ce jour-là. Si le champ Geller est endommagé, la maladie cause des dégâts doublés à la population et au moral. Si le champ Geller est hors ligne, il les dégâts sont quadruples. Les explorateurs peuvent chercher un remède à cette infection vicieuse ; cela nécessite d\'effectuer des recherches sur la maladie, puis de réaliser un test Medicae ardu (-40). Chaque explorateur ne peut pas effectuer ce test plus d\'une fois par jour.', 81, 90),
(7, 'Monstre Warp', 'La fureur du Warp se manifeste sous la forme d\'une chose monstrueuse et tentaculaire qui s\'enroule autour du navire et tente de déchirer la coque. L\'équipage déchaîne toutes les armes disponibles contre la créature pour essayer de la faire exploser avant qu\'elle ne consume le vaisseau. Le monstre attaque à chaque tour avec un coup automatique de Force 3, causant 1d10+2 Dégâts, et avec un Taux Critique de 5. Ses attaques ignorent les boucliers. Elle compte comme ayant une armure de 12 et une intégrité de coque de 50. Si le champ de Geller est endommagé, la créature a une force de 4, cause 1d10+4 dégâts, a un score critique de 4, une armure de 14 et une intégrité de coque de 60. Si le champ de Geller ne fonctionne pas, la créature a une force de 6, cause 1d10+8 dégâts, a un score critique de 3, une armure de 16 et une intégrité de coque de 80.', 91, 999);

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

CREATE TABLE `personnage` (
  `Id` int(25) NOT NULL,
  `Stat_force` int(25) DEFAULT NULL,
  `Force_surnaturelle` int(25) DEFAULT NULL,
  `Stat_endurance` int(25) DEFAULT NULL,
  `Endurance_Surnaturelle` int(25) DEFAULT NULL,
  `Stat_agilite` int(25) DEFAULT NULL,
  `Agilite_surnaturelle` int(25) DEFAULT NULL,
  `Stat_intelligence` int(25) DEFAULT NULL,
  `Intelligence_surnaturelle` int(25) DEFAULT NULL,
  `Stat_perception` int(25) DEFAULT NULL,
  `Perception_surnaturelle` int(25) DEFAULT NULL,
  `Stat_force_mentale` int(25) DEFAULT NULL,
  `force_mentale_surnaturelle` int(25) DEFAULT NULL,
  `Stat_social` int(25) DEFAULT NULL,
  `social_surnaturelle` int(25) DEFAULT NULL,
  `Navigation_warp` int(25) DEFAULT NULL,
  `Commandement` int(25) DEFAULT NULL,
  `Charisme` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `rencontre_epreuve`
--

CREATE TABLE `rencontre_epreuve` (
  `Id_Routes_Tracee` int(25) NOT NULL,
  `Id_Rencontre_Warp` int(25) NOT NULL,
  `Id_Incursion_Warp` int(25) NOT NULL,
  `Id_type_epreuve` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `rencontre_warp`
--

CREATE TABLE `rencontre_warp` (
  `Id` int(25) NOT NULL,
  `Designation` varchar(25) DEFAULT NULL,
  `Description` text NOT NULL,
  `Plage_debut` int(25) DEFAULT NULL,
  `Plage_fin` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `rencontre_warp`
--

INSERT INTO `rencontre_warp` (`Id`, `Designation`, `Description`, `Plage_debut`, `Plage_fin`) VALUES
(1, 'Tout va bien', 'Le navigateur peut tenter de localiser l\'Astronomican à nouveau si il a échouer aux précédents tests tandis que tous les personnages souffrant d’hallucinations warp peuvent essayer de s\'en débarrasser à nouveau.', 1, 20),
(2, 'Mirage de désillusion', 'Chaque explorateur et PNJ importants à bord doit faire un test de Force Mentale (+0) et le réussir. Sinon ils seront affectés par une hallucination warp choisie au hasard. Si le champs de Geller est opérationnel chaque personnage reçoit un bonus de (+30) au test de Force Mentale. S\'il ne l\'est pas le test subit un malus de (-30) à la place.', 21, 30),
(3, 'Prédateurs psychiques', 'Si cet effet se manifeste à bord d\'un vaisseau, rouler une fois les dés sur la table 2-8 Incursions Warp (voir page 33 Rogue Trader - Navis Primer) et appliquez le résultat. Réduisez le résultat du lancé de dé par -30 si le champs de Geller est complètement fonctionnel (jusqu\'à un minimum de 01). Ajoutez +30 au résultat du jet si le champs de Geller est éteins.', 31, 40),
(4, 'Stase', 'Si le navigateur ne peut pas guider le vaisseau pour éviter cette rencontre, le vaisseau se coince dans une fissure Warp avant de dériver une fois libéré, ajoutant 1d5 jours au voyage.', 41, 50),
(5, 'Combustion spontanée', 'Le MJ choisit un des composants du vaisseau lors de cette rencontre. Celui-ci prend immédiatement feu de manière inexpliquée. Voir les règles sur les incendies p.222 du livre de base.', 51, 60),
(6, 'Tempête Warp', 'Si le Navigateur ne peut pas guider le vaisseau pour éviter cette rencontre, le vaisseau est donc frappé de plein fouet par une tempête Warp.', 61, 70),
(7, 'Récifs Aethériques', 'Si le Navigateur ne peut pas guider ce vaisseau pour éviter cette rencontre, la coque du vaisseau sera éraflée par des morceaux tordus et coupants de la fausse réalité.', 71, 80),
(8, 'Brèche Warp', 'Si le Navigateur ne peut pas contourner cette rencontre, le vaisseau s\'enfonce dans une nébuleuse de non-réalitée.', 81, 90),
(9, 'Trou temporel', 'Si le Navigateur ne peut pas diriger le vaisseau dans une autre direction que celle de cette rencontre, le vaisseau est aspiré en dehors du Warp et reviens dans la réalité. Il faut se référer à l\'action étendue \"Sortir Warp\". La durée du passage correspond à la durée du voyage à travers le Warp jusqu\'à présent. Le navire est considéré comme étant gravement dévié de sa trajectoire.', 91, 999);

-- --------------------------------------------------------

--
-- Structure de la table `routes_tracee`
--

CREATE TABLE `routes_tracee` (
  `Id` int(25) NOT NULL,
  `Nom` varchar(25) DEFAULT NULL,
  `Id_Campagne` int(25) DEFAULT NULL,
  `Id_Type_Routes` int(25) DEFAULT NULL,
  `Id_Systeme_Depart` int(25) DEFAULT NULL,
  `Id_Systeme_Arrivee` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `systeme`
--

CREATE TABLE `systeme` (
  `Id` int(25) NOT NULL,
  `Nom` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `systeme`
--

INSERT INTO `systeme` (`Id`, `Nom`) VALUES
(1, 'Rubicon II'),
(2, 'Furibundus');

-- --------------------------------------------------------

--
-- Structure de la table `type_champs_de_gellers`
--

CREATE TABLE `type_champs_de_gellers` (
  `Id` int(25) NOT NULL,
  `Designation` varchar(50) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `type_champs_de_gellers`
--

INSERT INTO `type_champs_de_gellers` (`Id`, `Designation`, `Description`) VALUES
(1, 'Champs de Geller standard', 'Protège le vaisseau des innombrables périls de l\'immaterium.'),
(2, 'Coque Anti-Warp', '+10% Navigation (Warp); Lancez deux fois le jet lors des rencontres de voyage Warp, choisissez le résultat le plus favorable.'),
(3, 'Champs de Geller intégré bouclier modèle Mezoa', '+5 aux jets de rencontres lors du voyage Warp ; Si le Bouclier est endommagé, alors le Champ Geller est également endommagé.'),
(4, 'Champs de Geller à activation d\'urgence', 'Si vous entrez de manière inattendue dans Warp, lancez 1d10. Sur 3 ou plus, le champs de Geller s\'active automatiquement.'),
(5, 'Champs de Geller modèle Belecane 90.r', '+10 aux tests de Navigation (Warp); +20 aux jets sur la table des rencontres de voyage Warp.');

-- --------------------------------------------------------

--
-- Structure de la table `type_epreuve`
--

CREATE TABLE `type_epreuve` (
  `Id` int(25) NOT NULL,
  `Designation` varchar(25) DEFAULT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `type_epreuve`
--

INSERT INTO `type_epreuve` (`Id`, `Designation`, `Description`) VALUES
(1, 'Rencontre physique', 'Un navigator qui détecte une rencontre physique à temps peut utiliser ses compétences en navigation pour aider les officiers sur la passerelle à éviter le danger. Il sent le danger approcher, rationalisant la force turbulente du Warp comme un paysage marin déchaîné, peut-être, ou une tempête dans le désert ou une toundra fouettée par les glaces. Sa capacité unique est d\'imaginer la force insondable de l\'Immaterium comme quelque chose de compréhensible, de mettre de l\'ordre dans sa perception du chaos total. Le navigator doit effectuer un test de navigation (warp) difficile (+0). S\'il réussit, il communique les ajustements nécessaires des réacteurs Warp du navire à la passerelle, reliant son esprit aux cogitateurs du navire en utilisant le pouvoir arcanique de la console de navigation à laquelle il est branché. Une fois cette information relayée, c’est au timonier du navire de diriger le navire comme dicté par le navigateur. Le timonier doit réussir un test de pilotage (vaisseaux spatiaux). S\'il réussi, le navire évite le danger. Si l\'un des personnages échoue à son test, le vaisseau se retrouve impliqué dans la rencontre et doit la surmonter avant de pouvoir continuer.'),
(2, 'Tentation', 'Le Navigator est assailli par des tentations chuchotées qui lui offrent tout ce dont il a toujours rêvé. Il perçoit le Warp comme un lieu de vues, de parfums, de goûts et de musique séduisants ; peut-être un palais d\'ivoire, un jardin parfumé ou un vaisseau spatial doré. Ce paradis séduisant l\'invite à de nouvelles tentations à chaque coin de rue. Si le Navigator succombe, il ouvre la porte aux horreurs du Warp qui envahissent son vaisseau. Cette rencontre devrait impliquer de nombreuses interactions sociales avec les habitants séduisants du monde illusoire, qui tentent de l\'attirer hors de son chemin. Le point culminant de la rencontre devrait impliquer que le Navigator fasse un test de compétence pour éviter de succomber à une grande tentation, modifié en fonction de la manière dont il traite les habitants. S\'il réussit le test, la vision se dissout et le danger disparaît. Si le Navigator échoue, la rencontre se manifeste à bord du navire. Un échec signifie également que le Navigator a succombé, ne serait-ce que de manière minime, et qu\'il subit donc 1d5 points de corruption.'),
(3, 'Concours de force', 'Le Navigator doit tester ses compétences de combat contre des ennemis avides de son sang. Il perçoit le Warp comme un lieu de conflit, comme une ville déchirée par la guerre, une arène de gladiateurs ou un échiquier gargantuesque. Il doit survivre à tous les adversaires qui le défient, et le point culminant de la rencontre devrait l\'impliquer dans un combat contre une bête terrifiante ou un maître d\'arme expert. S\'il bat ce dernier ennemi, la vision se dissout et le vaisseau évite la rencontre. Si le Navigator « périt », la rencontre se manifeste à bord du navire. L’expérience du Navigateur dans le Warp se matérialise également par des blessures physiques et il subit 1d10+2 Dégâts, ignorant son armure et son bonus d’Endurance.'),
(4, 'Epreuve d\'endurance', 'Le Warp se construit dans la perception du Navigator comme un désert sombre et inhospitalier, peut-être un marais avec des mares fétides et des mouches grouillantes, une ruine ancienne avec des murs en ruine, ou une sombre forêt de champignons grouillant de vers et d\'insectes surdimensionnés. Le Navigator doit voyager à travers ce désert, survivant à des plantes venimeuses ou se cachant des bêtes rampantes qui le traquent. Le point culminant de la rencontre devrait impliquer que le Navigator teste les extrêmes de son endurance, comme escalader une tour céleste en ruine ou traverser une rivière turgescente et toxique. S\'il réussit le test, la vision se dissout et le vaisseau est en sécurité. S\'il échoue, la rencontre se manifeste à bord du navire. Un échec signifie également que l’être même du Navigator a été ravagé par ses expériences, et il gagne 1d5 points de folie.'),
(5, 'Casse-tête', 'Le Navigator se retrouve perdu dans un lieu de confusion et de tromperie, comme les couloirs interminables d\'une bibliothèque labyrinthique, les ruelles sombres d\'une vaste ville impossible à cartographier ou un labyrinthe de miroirs ahurissant. Il doit trouver une issue, résoudre une série d\'énigmes pour éviter les pièges et localiser un artefact caché, ou peut-être trouver des indices pour l\'aider à répondre à une énigme impénétrable. Une fois que le Navigator a la réponse à l\'énigme, la vision se dissout et le navire échappe à la rencontre. Si le Navigator échoue, la rencontre se manifeste à bord du navire. Un échec signifie également que l’âme du Navigator a été détruite par ses expériences et qu’il perd temporairement l’un de ses Points de Destin non dépensés. Il récupère ce Point de Destin immédiatement après son retour dans la réalité, mais ne peut pas le récupérer ni le « brûler » avant cela. S\'il n\'a pas de point de destin non dépensé, il gagne 1d5 points de folie.');

-- --------------------------------------------------------

--
-- Structure de la table `type_passerelle`
--

CREATE TABLE `type_passerelle` (
  `Id` int(25) NOT NULL,
  `Designation` varchar(50) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `type_passerelle`
--

INSERT INTO `type_passerelle` (`Id`, `Designation`, `Description`) VALUES
(1, 'Passerelle non listée', 'La passerelle de votre vaisseau ne fait pas partie de cette liste.'),
(2, 'Passerelle de commandement', '+5 aux tests de de commandement, +5 aux de tests de capacité de tir pour tirer avec les armes du vaisseau ; En cas de coup critique subit sur la passerelle, lancez 1d10. Sur 3 ou plus, la passerelle n\'est plus alimenté.'),
(3, 'Passerelle blindée', 'Sur coup critique subit par la passerelle, lancez 1d10. Sur 4 ou plus, la passerelle est indemne.'),
(4, 'Passerelle Amirale', '+5 aux tests de Pilotage, +5 aux tests de Navigation ; +10 aux tests de de capacité de tir pour faire tirer les armes du vaisseau.'),
(5, 'Passerelle de gestion de la Flotte', '+10 aux tests de Commandement ; +5 aux tests de Pilotage et de Navigation pour les autres vaisseaux situés à 30 unités spatiales ou moins.'),
(6, 'Passerelle antique', '+10 aux tests de compétence d’interaction; +5 Maniabilité.');

-- --------------------------------------------------------

--
-- Structure de la table `type_reacteur_warp`
--

CREATE TABLE `type_reacteur_warp` (
  `Id` int(25) NOT NULL,
  `Designation` varchar(50) DEFAULT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `type_reacteur_warp`
--

INSERT INTO `type_reacteur_warp` (`Id`, `Designation`, `Description`) VALUES
(1, 'Réacteur Warp Strelov', 'Permet au vaisseau de translater dans le Warp et d\'y naviguer.'),
(2, 'Réacteur Warp Albanov', 'Double la durée des voyages Warp ; -20 aux jets sur la table des rencontres Warp ; Bonus de +10 pour les tests du Navigator visant à corriger le point de sortie.'),
(3, 'Réacteur Warp Klenova', 'Test quotidien sur les rencontres de voyage Warp ; Non compatible avec les navigators ou les autres composants affectant les voyages Warp.'),
(4, 'Réacteur Warp Markov 1', 'Réduisez le temps des voyages warp de 1d5 semaine.'),
(5, 'Réacteur Warp Markov 2', 'Réduisez le temps des voyages warp de 1d10 jours.'),
(6, 'Réacteur Warp Miloslav', 'Réduisez de moitié la durée des voyages warp. Lancez un dé sur la table des rencontre warp tout les trois jours.');

-- --------------------------------------------------------

--
-- Structure de la table `type_routes`
--

CREATE TABLE `type_routes` (
  `Id` int(25) NOT NULL,
  `Designation` varchar(25) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `type_routes`
--

INSERT INTO `type_routes` (`Id`, `Designation`, `Description`) VALUES
(1, 'Route Stable', 'Le Navigateur gagne un bonus de +10 à tous les Tests visant à cartographier cet itinéraire pour une utilisation future.'),
(2, 'Voie indirecte', 'Doublez la durée du voyage calculée par le MJ.'),
(3, 'Passage hanté', 'Doublez la durée du voyage calculée par le MJ et ajoutez un +10 à tous les jets sur la table des hallucinations warp.'),
(4, 'Route déchaînée', 'Doublez la durée du voyage calculée par le MJ et le Navigator subit un malus de -10 aux tests de psyniscience pour la lecture des augures.'),
(5, 'Piste intraçable', 'Doublez la durée du voyage calculée par le MJ et la route ne peut pas être cartographiée.'),
(6, 'Voie sans lumière', 'Doublez la durée du voyage calculée par le MJ et l\'Astronomican est voilé pour ce voyage.'),
(7, 'Route Byzantine', 'Triplez la durée du voyage calculée par le MJ.');

-- --------------------------------------------------------

--
-- Structure de la table `vaisseau`
--

CREATE TABLE `vaisseau` (
  `Id` int(25) NOT NULL,
  `Nom` varchar(40) DEFAULT NULL,
  `Manoeuvrabilite` int(25) DEFAULT NULL,
  `Detection` int(25) DEFAULT NULL,
  `Runecaster` int(25) DEFAULT NULL,
  `Warp_antenna` int(25) DEFAULT NULL,
  `Warp_sextant` int(25) DEFAULT NULL,
  `Id_Type_Reacteur_Warp` int(25) DEFAULT NULL,
  `Id_Type_Champs_De_Gellers` int(25) DEFAULT NULL,
  `Id_Type_Passerelle` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `campagne`
--
ALTER TABLE `campagne`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Fk_Id_Compte_Camp` (`Id_Compte`) USING BTREE;

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Nom_de_compte` (`Nom_de_compte`);

--
-- Index pour la table `hallucination_personnage`
--
ALTER TABLE `hallucination_personnage`
  ADD PRIMARY KEY (`Id_¨Personnage`,`Id_Hallucination_Warp`) USING BTREE,
  ADD KEY `Fk_Id_Hallucination_Warp_hallup` (`Id_Hallucination_Warp`),
  ADD KEY `Fk_Id_Personnage_hallup` (`Id_¨Personnage`) USING BTREE;

--
-- Index pour la table `hallucination_warp`
--
ALTER TABLE `hallucination_warp`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `inclusion_campagne`
--
ALTER TABLE `inclusion_campagne`
  ADD PRIMARY KEY (`Id_Campagne`,`Id_Vaisseau`,`Id_Personnage`,`Id_Routes_Tracee`),
  ADD KEY `Fk_Id_Routes_Tracee_Inclus` (`Id_Routes_Tracee`),
  ADD KEY `Fk_Id_Vaisseau_Inclus` (`Id_Vaisseau`),
  ADD KEY `Fk_Id_Campagne_Inclus` (`Id_Campagne`),
  ADD KEY `Fk_Id_Personnage_Inclus` (`Id_Personnage`) USING BTREE;

--
-- Index pour la table `incursion_warp`
--
ALTER TABLE `incursion_warp`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `personnage`
--
ALTER TABLE `personnage`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `rencontre_epreuve`
--
ALTER TABLE `rencontre_epreuve`
  ADD PRIMARY KEY (`Id_Routes_Tracee`,`Id_Rencontre_Warp`,`Id_Incursion_Warp`,`Id_type_epreuve`) USING BTREE,
  ADD UNIQUE KEY `Fk_Id_Routes_Tracee_Rence` (`Id_Routes_Tracee`),
  ADD KEY `Fk_Id_Rencontre_Warp_Rence` (`Id_Rencontre_Warp`),
  ADD KEY `Fk_Id_Incursion_Warp_Rence` (`Id_Incursion_Warp`),
  ADD KEY `Fk_Id_Type_Epreuve_Rence` (`Id_type_epreuve`);

--
-- Index pour la table `rencontre_warp`
--
ALTER TABLE `rencontre_warp`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `routes_tracee`
--
ALTER TABLE `routes_tracee`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Fk_Id_System_Depart_RT` (`Id_Systeme_Depart`),
  ADD KEY `Fk_Id_System_Arrivee_RT` (`Id_Systeme_Arrivee`),
  ADD KEY `Fk_Id_Type_Routes_RT` (`Id_Type_Routes`),
  ADD KEY `Fk_Id_Campagne_RT` (`Id_Campagne`);

--
-- Index pour la table `systeme`
--
ALTER TABLE `systeme`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `type_champs_de_gellers`
--
ALTER TABLE `type_champs_de_gellers`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `type_epreuve`
--
ALTER TABLE `type_epreuve`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `type_passerelle`
--
ALTER TABLE `type_passerelle`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `type_reacteur_warp`
--
ALTER TABLE `type_reacteur_warp`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `type_routes`
--
ALTER TABLE `type_routes`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `vaisseau`
--
ALTER TABLE `vaisseau`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Fk_Id_Type_Champs_De_Geller_Vaisseau` (`Id_Type_Champs_De_Gellers`),
  ADD KEY `Fk_Type_Passerelle` (`Id_Type_Passerelle`),
  ADD KEY `Fk_Type_Reacteur_Warp` (`Id_Type_Reacteur_Warp`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `campagne`
--
ALTER TABLE `campagne`
  ADD CONSTRAINT `Fk_Id_Compte_Camp` FOREIGN KEY (`Id_Compte`) REFERENCES `compte` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `hallucination_personnage`
--
ALTER TABLE `hallucination_personnage`
  ADD CONSTRAINT `Fk_Id_Hallucination_Warp_hallup` FOREIGN KEY (`Id_Hallucination_Warp`) REFERENCES `hallucination_warp` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Fk_Id_Personnage_hallup` FOREIGN KEY (`Id_¨Personnage`) REFERENCES `personnage` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `inclusion_campagne`
--
ALTER TABLE `inclusion_campagne`
  ADD CONSTRAINT `Fk_Id_Campagne_inclus` FOREIGN KEY (`Id_Campagne`) REFERENCES `campagne` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Fk_Id_Personnage_inclusion` FOREIGN KEY (`Id_Personnage`) REFERENCES `personnage` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Fk_Id_Routes_Tracee_Inclus` FOREIGN KEY (`Id_Routes_Tracee`) REFERENCES `routes_tracee` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Fk_Id_Vaisseau_Inclus` FOREIGN KEY (`Id_Vaisseau`) REFERENCES `vaisseau` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `rencontre_epreuve`
--
ALTER TABLE `rencontre_epreuve`
  ADD CONSTRAINT `Fk_Id_Incursion_Warp_Rence` FOREIGN KEY (`Id_Incursion_Warp`) REFERENCES `incursion_warp` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Fk_Id_Rencontre_Warp_Rence` FOREIGN KEY (`Id_Rencontre_Warp`) REFERENCES `rencontre_warp` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Fk_Id_Routes_Tracee_Rence` FOREIGN KEY (`Id_Routes_Tracee`) REFERENCES `routes_tracee` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Fk_Id_Type_Epreuve_Rence` FOREIGN KEY (`Id_type_epreuve`) REFERENCES `type_epreuve` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `routes_tracee`
--
ALTER TABLE `routes_tracee`
  ADD CONSTRAINT `Fk_Id_Campagne_RT` FOREIGN KEY (`Id_Campagne`) REFERENCES `campagne` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Fk_Id_System_Arrivee_RT` FOREIGN KEY (`Id_Systeme_Arrivee`) REFERENCES `systeme` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Fk_Id_System_Depart_RT` FOREIGN KEY (`Id_Systeme_Depart`) REFERENCES `systeme` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Fk_Id_Type_Routes_RT` FOREIGN KEY (`Id_Type_Routes`) REFERENCES `type_routes` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `vaisseau`
--
ALTER TABLE `vaisseau`
  ADD CONSTRAINT `Fk_Id_Type_Champs_De_Geller_Vaisseau` FOREIGN KEY (`Id_Type_Champs_De_Gellers`) REFERENCES `type_champs_de_gellers` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Fk_Type_Passerelle` FOREIGN KEY (`Id_Type_Passerelle`) REFERENCES `type_passerelle` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Fk_Type_Reacteur_Warp` FOREIGN KEY (`Id_Type_Reacteur_Warp`) REFERENCES `type_reacteur_warp` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
