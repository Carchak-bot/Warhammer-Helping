-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 05 fév. 2024 à 21:40
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
-- Structure de la table `comprend`
--

CREATE TABLE `comprend` (
  `Id_Routes_Tracee` int(25) NOT NULL,
  `Id_Systeme` int(25) NOT NULL
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
  `Plage_debut` int(25) DEFAULT NULL,
  `Plage_fin` int(25) DEFAULT NULL,
  `Id_Rencontre_Warp` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `Id_type_epreuve` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `rencontre_warp`
--

CREATE TABLE `rencontre_warp` (
  `Id` int(25) NOT NULL,
  `Designation` varchar(25) DEFAULT NULL,
  `Plage_debut` int(25) DEFAULT NULL,
  `Plage_fin` int(25) DEFAULT NULL,
  `Id_Type_Epreuve` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
-- Index pour la table `comprend`
--
ALTER TABLE `comprend`
  ADD PRIMARY KEY (`Id_Routes_Tracee`,`Id_Systeme`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Nom_de_compte` (`Nom_de_compte`);

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
