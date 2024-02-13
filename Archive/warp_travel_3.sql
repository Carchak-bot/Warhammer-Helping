-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 06 fév. 2024 à 00:50
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

-- --------------------------------------------------------

--
-- Structure de la table `type_epreuve`
--

CREATE TABLE `type_epreuve` (
  `Id` int(25) NOT NULL,
  `Designation` varchar(25) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL,
  `Id_Rencontre_Warp` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `type_passerelle`
--

CREATE TABLE `type_passerelle` (
  `Id` int(25) NOT NULL,
  `Designation` varchar(50) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `type_reacteur_warp`
--

CREATE TABLE `type_reacteur_warp` (
  `Id` int(25) NOT NULL,
  `Designation` varchar(50) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `type_routes`
--

CREATE TABLE `type_routes` (
  `Id` int(25) NOT NULL,
  `Designation` varchar(25) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  ADD PRIMARY KEY (`Id`);

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
  ADD PRIMARY KEY (`Id_Hallucination_Warp`);

--
-- Index pour la table `hallucination_warp`
--
ALTER TABLE `hallucination_warp`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `inclusion_campagne`
--
ALTER TABLE `inclusion_campagne`
  ADD PRIMARY KEY (`Id_Campagne`,`Id_Vaisseau`,`Id_Personnage`,`Id_Routes_Tracee`);

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
  ADD PRIMARY KEY (`Id_Routes_Tracee`,`Id_Rencontre_Warp`,`Id_type_epreuve`) USING BTREE;

--
-- Index pour la table `rencontre_warp`
--
ALTER TABLE `rencontre_warp`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `routes_tracee`
--
ALTER TABLE `routes_tracee`
  ADD PRIMARY KEY (`Id`);

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
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
