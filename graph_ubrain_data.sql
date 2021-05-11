-- Fichier SQL développé par UBrainFr, PLUGIN phpGraph 1.0 
-- (C)UBrainFr 2018
-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 23 août 2018 à 17:01
-- Version du serveur :  5.5.56-MariaDB
-- Version de PHP :  5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dev_hugo_redpixelyellowpixel_com`
--

-- --------------------------------------------------------

--
-- Structure de la table `graph_ubrain_data`
--

CREATE TABLE `graph_ubrain_data` (
  `ID` int(111) NOT NULL,
  `y` varchar(211) NOT NULL,
  `x` int(211) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `graph_ubrain_data`
--

INSERT INTO `graph_ubrain_data` (`ID`, `y`, `x`) VALUES
(6, '2001', 215),
(7, '2002', 641),
(8, '2003', 879),
(9, '2004', 786),
(10, '2005', 968),
(11, '2006', 1465),
(12, '2007', 1083),
(13, '2008', 841),
(14, '2009', 1522),
(15, '2010', 1839),
(16, '2011', 2039),
(17, '2012', 1368),
(18, '2013', 1681),
(19, '2014', 2210),
(20, '2015', 2513),
(22, '2016', 2965),
(25, '2017', 3489),
(26, '2018', 3612);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `graph_ubrain_data`
--
ALTER TABLE `graph_ubrain_data`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `y` (`y`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `graph_ubrain_data`
--
ALTER TABLE `graph_ubrain_data`
  MODIFY `ID` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
