-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 26 avr. 2021 à 12:29
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `paw`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

CREATE TABLE `activites` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `places` int(11) NOT NULL,
  `id_activites` int(11) NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Nom_Act` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `activites`
--

INSERT INTO `activites` (`id`, `nom`, `places`, `id_activites`, `Id_User`, `Nom_Act`) VALUES
(26, 'Bruh bruh', 6, 11, 6, 'Teniis'),
(28, 'Jaouani Walidwawa', 1, 9, 5, 'Football'),
(29, 'Jaouani Walidwawa', 1, 9, 5, 'Football'),
(30, 'Bruh bruh', 0, 9, 6, 'Football'),
(31, 'Bruh bruh', 0, 9, 6, 'Football'),
(32, 'Bruh bruh', 2, 10, 6, 'Volley Ball');

-- --------------------------------------------------------

--
-- Structure de la table `activites1`
--

CREATE TABLE `activites1` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `places` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `activites1`
--

INSERT INTO `activites1` (`id`, `nom`, `places`) VALUES
(9, 'Football', 24),
(10, 'Volley Ball', 8),
(11, 'Teniis', 4);

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `Nom_User` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `Message` text NOT NULL,
  `Date_p` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `Nom_User`, `id_user`, `id_post`, `Message`, `Date_p`) VALUES
(37, 'Bruh bruh', 6, 68, 'dfb', '2021-04-21'),
(41, 'Bruh bruh', 6, 75, 'fdvd', '2021-04-22'),
(42, 'Bruh bruh', 6, 81, 'fg', '2021-04-24'),
(43, 'Bruh bruh', 6, 82, 'hello', '2021-04-25'),
(44, 'Bruh bruh', 6, 82, 'hello', '2021-04-25');

-- --------------------------------------------------------

--
-- Structure de la table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `Titre` varchar(50) NOT NULL,
  `Message` text NOT NULL,
  `Type` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(50) NOT NULL,
  `Checked` varchar(30) NOT NULL DEFAULT 'Unchecked',
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `complaint`
--

INSERT INTO `complaint` (`id`, `Titre`, `Message`, `Type`, `id_user`, `nom_user`, `Checked`, `Date`) VALUES
(21, 'hjh', '55', 'Autres', 6, 'Bruh bruh', 'Unchecked', '2021-04-24'),
(23, 'dfgdfs', 'dsiu', 'Rooms', 6, 'Bruh bruh', 'Unchecked', '2021-04-25'),
(24, 'popo', 'ds', 'Produits', 6, 'Bruh bruh', 'Unchecked', '2021-04-25');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id_Like` int(11) NOT NULL,
  `id_User` int(11) NOT NULL,
  `id_Post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `Nom_User` varchar(50) NOT NULL,
  `id_User` int(11) NOT NULL,
  `Etoiles` int(11) NOT NULL,
  `Text` text NOT NULL,
  `Likes` int(11) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

CREATE TABLE `reponses` (
  `id` int(11) NOT NULL,
  `Nom_User` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_Reclamation` int(11) NOT NULL,
  `Message` varchar(300) NOT NULL,
  `Date_P` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reponses`
--

INSERT INTO `reponses` (`id`, `Nom_User`, `id_user`, `id_Reclamation`, `Message`, `Date_P`) VALUES
(1, 'Bruh bruh', 6, 2, 'aaaaaa', '2021-01-08'),
(3, 'Bruh bruh', 6, 9, 'mùl;ùml:', '2021-04-04'),
(5, 'Bruh bruh', 6, 23, 'kidsuhihc', '2021-04-25');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `idreservation` int(50) NOT NULL,
  `firstname` int(20) NOT NULL,
  `lastname` int(20) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  `tel` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nbn` int(11) NOT NULL,
  `date` text NOT NULL,
  `room` int(20) NOT NULL,
  `rp` varchar(25) NOT NULL,
  `idroom` int(50) DEFAULT NULL,
  `iduser` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`idreservation`, `firstname`, `lastname`, `adresse`, `tel`, `email`, `nbn`, `date`, `room`, `rp`, `idroom`, `iduser`) VALUES
(117, 1, 1, '24825152', 5, '5 Rooms', 3, '06 - 1 - 2021', 1, '', 21, 7),
(119, 7, 6, '24825152', 4, '4 Rooms', 5, 'jebalisourour@rocket', 1, '', 22, 7),
(123, 5, 5, '7 street 10219 el wa', 24825152, 'jebalisourour@rocket', 5, '06 - 1 - 2021', 5, '', 22, 7),
(124, 5, 1, '7 street 10219 el wa', 24825152, 'jebalisourour@rocket', 4, '08 - 1 - 2021', 4, 'MMM', 22, 7),
(126, 2, 2, '7 street 10219 el wa', 24825152, 'jebalisourour@rocket', 5, '09 - 1 - 2021', 5, 'hhh', 14, 7),
(127, 2, 2, '7 street 10219 el wa', 24825152, 'jebalisourour@rocket', 5, '09 - 1 - 2021', 5, 'hhh', 14, 7),
(128, 1, 0, 'zeazeaeaz', 28826428, 'jaouaniw@gmail.com', 2, '08 - 1 - 2021', 2, 'bruh', 14, 6),
(129, 1, 1, 'f', 88, 'ff', 3, '08 - 1 - 2021', 1, '', 14, 6),
(131, 2, 2, 'sdqsd', 5697285, 'yosr.sahnoun@hotmail', 3, '09 - 1 - 2021', 2, 'dfvsdf', 14, 6);

-- --------------------------------------------------------

--
-- Structure de la table `review_post`
--

CREATE TABLE `review_post` (
  `id` int(11) NOT NULL,
  `Titre` varchar(25) NOT NULL,
  `Message` varchar(200) NOT NULL,
  `date_p` date NOT NULL DEFAULT current_timestamp(),
  `Picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `review_post`
--

INSERT INTO `review_post` (`id`, `Titre`, `Message`, `date_p`, `Picture`) VALUES
(68, 'Many animals play dead—an', '                       Scientifically known as thanatosis, or tonic immobility, playing dead occurs across the animal kingdom, from birds to mammals to fish. Perhaps the most famous death faker is Nor', '2021-04-21', '3.jpg'),
(73, 'bbb', 'azazazaza', '2021-04-21', '18.jpg'),
(75, 'pawpaws', '                sdc', '2021-04-22', 'service_icon_2.png'),
(81, 'hrt', '       hrt         ', '2021-04-24', 'party.jpg'),
(82, 'esprit', '              se former   ', '2021-04-25', 'logo.jpg'),
(83, 'haha', ' *************************', '2021-04-26', '360_F_109724755_5yg0KRk7GIOjqfgjh1DIgLGCABnXQVfM.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `rooms`
--

CREATE TABLE `rooms` (
  `idroom` int(50) NOT NULL,
  `roomtype` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rooms`
--

INSERT INTO `rooms` (`idroom`, `roomtype`, `price`, `photo`, `qty`) VALUES
(14, 'Junior Suite', '700', '9.jpg', 1),
(18, 'Family', '500', 'Family.jpg', 4),
(21, 'Presidential Suite', '1000', '16-084-04-Presidential-Suite-Living-Room.jpg', 1),
(22, 'Terrace Suite', '850', 'TSH_061_original.jpg', 1),
(24, 'Classic', '450', 'classic.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `id_service_choisi` int(11) NOT NULL,
  `nom_service` varchar(60) CHARACTER SET utf8mb4 NOT NULL,
  `num_chambre` int(11) NOT NULL,
  `dateS` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `Nom_User` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id_service`, `id_service_choisi`, `nom_service`, `num_chambre`, `dateS`, `id_user`, `Nom_User`) VALUES
(33, 11, 'gamer', -2, '2021-01-21', 6, 'Bruh bruh'),
(10, 0, '11', 3, '2021-02-10', 1, ''),
(6, 0, '11', 216, '2021-01-13', 1, ''),
(32, 11, 'restaurant', -1, '0000-00-00', 6, 'Bruh bruh'),
(39, 11, 'gamer', 5, '2021-02-11', 6, 'Bruh bruh');

-- --------------------------------------------------------

--
-- Structure de la table `type_service`
--

CREATE TABLE `type_service` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prix` varchar(20) NOT NULL,
  `dateS` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type_service`
--

INSERT INTO `type_service` (`id`, `nom`, `prix`, `dateS`) VALUES
(25, 'yosr', '50', '2021-04-25');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `Nom` varchar(25) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Date_N` date NOT NULL,
  `Facture` float NOT NULL DEFAULT 0,
  `Picture` varchar(100) NOT NULL DEFAULT 'Unknown.png',
  `Login` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `Role` varchar(20) NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `Nom`, `Prenom`, `Email`, `Date_N`, `Facture`, `Picture`, `Login`, `Password`, `sexe`, `Role`) VALUES
(5, 'Jaouani', 'Walidwawa', 'jaouaniw@gmail.com', '2000-02-06', 0, 'Unknown.png', 'tazarkour', 'walid123456', 'Homme', 'client'),
(6, 'Bruh', 'bruh', 'walid.jaouani@yahoo.fr', '2000-02-06', 0, 'Unknown.png', 'walid123', 'walid123456', 'Femme', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_act` (`id_activites`),
  ADD KEY `id_user` (`Id_User`);

--
-- Index pour la table `activites1`
--
ALTER TABLE `activites1`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_post` (`id_post`),
  ADD KEY `id_user_C` (`id_user`);

--
-- Index pour la table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_Like`),
  ADD KEY `Likes_Post` (`id_Post`);

--
-- Index pour la table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `User_Post` (`id_User`);

--
-- Index pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idreservation`),
  ADD KEY `idroom` (`idroom`),
  ADD KEY `useribfk` (`iduser`);

--
-- Index pour la table `review_post`
--
ALTER TABLE `review_post`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`idroom`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Index pour la table `type_service`
--
ALTER TABLE `type_service`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`,`Login`,`Email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activites`
--
ALTER TABLE `activites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `activites1`
--
ALTER TABLE `activites1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id_Like` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idreservation` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT pour la table `review_post`
--
ALTER TABLE `review_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT pour la table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `idroom` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `type_service`
--
ALTER TABLE `type_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activites`
--
ALTER TABLE `activites`
  ADD CONSTRAINT `id_act` FOREIGN KEY (`id_activites`) REFERENCES `activites1` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user` FOREIGN KEY (`Id_User`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `Id_post` FOREIGN KEY (`id_post`) REFERENCES `review_post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user_C` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
