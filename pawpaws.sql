-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 21 mai 2021 à 18:03
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pawpaws`
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

-- --------------------------------------------------------

--
-- Structure de la table `comentu`
--

CREATE TABLE `comentu` (
  `id_coment` int(11) NOT NULL,
  `id_sender` int(11) NOT NULL,
  `id_reciever` int(11) NOT NULL,
  `message` varchar(50) DEFAULT NULL,
  `date_com` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comentu`
--

INSERT INTO `comentu` (`id_coment`, `id_sender`, `id_reciever`, `message`, `date_com`) VALUES
(2, 21, 19, 'wa', '2021-05-10');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `date`, `prix`) VALUES
(32, '2021-05-06', 10),
(33, '2021-05-13', 100),
(34, '2021-05-19', 110);

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
(44, 'Bruh bruh', 6, 82, 'hello', '2021-04-25'),
(45, 'rahmani zeineb', 7, 83, 'fsvsc', '2021-05-09'),
(47, 'rahmani zeineb', 7, 83, 'sd', '2021-05-09'),
(48, 'rahmani zeineb', 7, 82, 'fdf', '2021-05-09'),
(49, 'rahmani zeineb', 7, 81, 'hgu', '2021-05-09'),
(50, 'rahmani eya', 6, 82, 'yrtufygulihmjol', '2021-05-09');

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
(24, 'pop', 'dsn', 'Produits', 6, 'Bruh bruh', 'Unchecked', '2021-04-25'),
(25, 'jh', 'hjbb', 'Produits', 3, 'mariam B.M', 'Unchecked', '2021-05-08'),
(26, 'hgjh', 'vhjbknl,;,kl', 'Services', 6, 'rahmani eya', 'Unchecked', '2021-05-09'),
(27, 'pogh', 'jksfjfkjl', 'Animals', 6, 'rahmani eya', 'Unchecked', '2021-05-15');

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
(90, 10, 8, 'est ce que vous avez des problémes', '2021-01-04 22:44:38', 0, 0),
(91, 10, 8, 'fdk', '2021-05-09 11:18:36', 0, 0),
(92, 10, 3, 'ddc', '2021-05-09 11:24:54', 0, 0),
(93, 7, 6, 'fvvb', '2021-05-09 11:29:17', 1, 0),
(94, 7, 3, 'hjhju', '2021-05-09 11:50:06', 0, 0),
(95, 16, 5, 'jhkjlk', '2021-05-09 16:08:10', 0, 0),
(96, 16, 7, 'gdfhgjkhljmk!', '2021-05-09 16:08:18', 0, 0),
(97, 16, 7, 'ghcfjgkhj;n', '2021-05-09 16:08:41', 0, 0),
(98, 16, 7, '', '2021-05-09 16:08:41', 0, 0),
(99, 6, 7, 'jbkn,;l', '2021-05-15 02:00:45', 0, 0),
(100, 6, 5, 'hjk;,bjh', '2021-05-15 02:00:53', 0, 0),
(101, 6, 11, 'hgjhkbjln', '2021-05-15 02:01:00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `id_commande` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `id_produit`, `id_commande`) VALUES
(53, 7, 32),
(54, 9, 33),
(55, 7, 34),
(56, 8, 34);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `type` text NOT NULL,
  `quantite` int(11) NOT NULL,
  `image` text NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `type`, `quantite`, `image`, `prix`) VALUES
(0, 'gfhj', 'accessoire', 10, 'f.jpg', 100),
(7, 'Laisse Pour Chien', 'accessoire', 22, 'background.jpg', 10),
(8, 'canicha', 'nourriture', 10, 'canicha.jpg', 100),
(9, 'Crockett', 'nourriture', 3, 'crockett.png', 100);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `pourcentage` int(11) NOT NULL,
  `nv_prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id`, `id_produit`, `pourcentage`, `nv_prix`) VALUES
(6, 7, 50, 50);

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
(5, 'Bruh bruh', 6, 23, 'kidsuhihc', '2021-04-25'),
(6, 'rahmani eya', 6, 26, 'hkjjlk', '2021-05-15'),
(7, 'rahmani eya', 6, 24, 'kjlkmj', '2021-05-20');

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
  `email` varchar(100) NOT NULL,
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
(156, 1, 0, 'nabeul', 45213658, 'mariembenmassoud123@gmail.com', 3, '15 - 5 - 2021', 1, 'ffddfdfdfd', 34, 6),
(158, 4, 0, 'djerba', 45213025, 'mariembenmassoud123@gmail.com', 3, '13 - 5 - 2021', 5, 'test3', 35, 3);

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `idreservation` int(50) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  `tel` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nbn` int(11) NOT NULL,
  `date` text NOT NULL,
  `rp` varchar(25) NOT NULL,
  `idservice` int(50) DEFAULT NULL,
  `iduser` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`idreservation`, `adresse`, `tel`, `email`, `nbn`, `date`, `rp`, `idservice`, `iduser`) VALUES
(148, 'ariana', 98404074, 'zeineb.rahmani@esprit.tn', 2, '28 - 4 - 2021', 'none', 27, 6),
(149, 'ariana', 98404074, 'zeineb.rahmani@esprit.tn', 2, '27 - 4 - 2021', 'bvbjhnk', 27, 6),
(150, 'ariana', 98404074, 'zeineb.rahmani@esprit.tn', 2, '15 - 5 - 2021', 'ffff', 27, 6);

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
(75, 'pawpaws', '                sdc', '2021-04-22', 'service_icon_2.png'),
(77, 'Eya', '                nb,;,:;!:;,nbvgjhgv', '2021-05-15', 'background.jpg'),
(81, 'zeineb', '                       hrt    iukhhbhv     ', '2021-04-24', 'background.jpg'),
(82, 'esprit', '              se former   ', '2021-04-25', 'logo.jpg'),
(83, 'hawks', '                dkjkdjjkfd', '2021-05-20', 'ui-sam.jpg'),
(84, 'kl', '                                ghhjkkkk', '2021-05-20', 'logo.png');

-- --------------------------------------------------------

--
-- Structure de la table `rooms`
--

CREATE TABLE `rooms` (
  `idroom` int(50) NOT NULL,
  `hoteladresse` varchar(50) NOT NULL,
  `roomtype` varchar(20) NOT NULL,
  `price` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `qty` int(10) NOT NULL,
  `iduser` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rooms`
--

INSERT INTO `rooms` (`idroom`, `hoteladresse`, `roomtype`, `price`, `photo`, `qty`, `iduser`) VALUES
(34, 'luxuar', 'Tunis', '4', 'background.jpg', 100, 0),
(35, 'Executive', 'djerba', '220', 'background.jpg', 1, 0),
(36, 'djerba', 'Executive', '220', 'Excutive_rooms.png', 10, 0),
(37, 'Nabeul', 'traditional', '200', 'traditiaonal_boarding.jpg', 8, 0),
(39, 'marsa', 'lux', '300', 'background.jpg', 30, 0),
(40, 'lux', 'marsa', '20', 'E0BBn1DXoAEAMer.jpg', 22, 0),
(42, 'ariana', 'luxuar', '100', 'f.jpg', 1, 0),
(43, 'ariana', 'luxuar', '20', 'background.jpg', 10, 0);

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `idservice` int(50) NOT NULL,
  `servicetype` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`idservice`, `servicetype`, `price`, `photo`, `qty`) VALUES
(26, 'pet training', '500', 'background.jpg', 6),
(27, 'vet appointments', '500', 'f.jpg', 13),
(31, 'pet daycamp', '100', 'background.jpg', 0),
(35, 'pet training', '500', 'f.jpg', 10),
(37, 'pet grooming', '20', 'background.jpg', 10);

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
(3, 'mariam', 'B.M', 'mariembenmassoud123@gmail.com', '2000-12-06', 2, 'Unknown.png', 'mariem123', 'mariem123', 'Femme', 'admin'),
(5, 'provider', 'zeineb', 'zeineb@esprit.com', '2000-02-06', 0, 'Unknown.png', 'provider', 'eya123456', 'Femme', 'ServiceProvider'),
(6, 'rahmani', 'eya', 'zeineb.rahmani@esprit.tn', '2000-02-06', 0, 'Unknown.png', 'admin', 'eya123456', 'Femme', 'admin'),
(7, 'rahmani', 'zeineb', 'zeineb@gmail.com', '2000-02-06', 0, 'Unknown.png', 'client1', 'eya123456', 'Femme', 'client'),
(11, 'Mariem', 'Ben Massaoud', 'mariembenmassoud123@gmail.com', '2000-12-06', 0, 'Unknown.png', 'May16', '123456m', 'Femme', 'client'),
(12, 'skander', 'rachah', 'rachah.skander@esprit.tn', '1999-05-27', 0, 'Unknown.png', 'skander', 'skander123456', 'Homme', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comentu`
--
ALTER TABLE `comentu`
  ADD PRIMARY KEY (`id_coment`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
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
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usersource` (`source`),
  ADD KEY `userdestinataire` (`destinataire`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_commande` (`id_commande`),
  ADD KEY `id_produit` (`id_produit`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

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
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`idreservation`),
  ADD KEY `idservice` (`idservice`),
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
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`idservice`);

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
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idreservation` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `idreservation` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT pour la table `review_post`
--
ALTER TABLE `review_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT pour la table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `idroom` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `idservice` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
