-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 05 jan. 2021 à 14:59
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `firas2`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id` int(20) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`nom`, `prenom`, `email`, `id`, `message`) VALUES
('firas', 'soltani', 'soltani.firas@esprit.tn', 15, 'bonjour');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `source` int(11) DEFAULT NULL,
  `destinataire` int(11) NOT NULL,
  `contenu` longtext NOT NULL,
  `date` datetime NOT NULL,
  `readDestination` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `source`, `destinataire`, `contenu`, `date`, `readDestination`, `type`) VALUES
(80, 10, 8, 'aaa', '2021-01-01 19:33:50', 1, 0),
(81, 10, 8, 'aaa', '2021-01-01 19:33:50', 1, 0),
(82, 10, 8, 'azeazeaze', '2021-01-01 19:33:51', 1, 0),
(83, 8, 10, 'azeaze', '2021-01-01 19:33:57', 1, 0),
(84, 8, 10, 'aze', '2021-01-01 19:33:58', 1, 0),
(85, 8, 10, 'aze', '2021-01-01 19:33:59', 1, 0),
(86, 10, 8, 'azeazeaze', '2021-01-01 19:35:17', 1, 0),
(87, 8, 10, 'aozhne', '2021-01-01 19:35:25', 1, 0),
(88, 10, 8, 'ghjkl:m!ù', '2021-01-03 19:07:33', 1, 0),
(89, 10, 8, 'bonjour', '2021-01-03 19:13:18', 1, 0),
(90, 10, 8, 'est ce que vous avez des problémes', '2021-01-04 22:44:38', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `content` varchar(150) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id`, `titre`, `content`, `id_user`) VALUES
(1, 'azeaze', 'azeazeaz', 10),
(3, 'blabla', 'blabla blabal\nballa', 10),
(7, 'test 0.0.0', 'blablaa', 10),
(8, 'test 0.01', 'vbhnjklmù523.', 10),
(9, 'bonjour', 'bonjour!', 10),
(10, 'bonjour', 'bonjour', 10);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `matricule` varchar(30) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `matricule`, `motdepasse`, `role`) VALUES
(8, 'firas', 'firas', 'firas', 'firas', 'Admin'),
(10, 'yosr', 'yosr', 'yosr', 'yosr', 'Client'),
(11, 'firas', 'firas', 'firas', 'firas', 'Client');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usersource` (`source`),
  ADD KEY `userdestinataire` (`destinataire`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `reclamation_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
