-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 04:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pawpaws`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
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
-- Table structure for table `comment`
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
-- Dumping data for table `comment`
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
-- Table structure for table `complaint`
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
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `Titre`, `Message`, `Type`, `id_user`, `nom_user`, `Checked`, `Date`) VALUES
(21, 'hjh', '55', 'Autres', 6, 'Bruh bruh', 'Unchecked', '2021-04-24'),
(23, 'dfgdfs', 'dsiu', 'Rooms', 6, 'Bruh bruh', 'Unchecked', '2021-04-25'),
(24, 'popo', 'ds', 'Produits', 6, 'Bruh bruh', 'Unchecked', '2021-04-25'),
(25, 'jh', 'hjbb', 'Produits', 3, 'mariam B.M', 'Unchecked', '2021-05-08'),
(26, 'hgjh', 'vhjbknl,;,kl', 'Services', 6, 'rahmani eya', 'Unchecked', '2021-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `message`
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
-- Dumping data for table `message`
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
(93, 7, 6, 'fvvb', '2021-05-09 11:29:17', 0, 0),
(94, 7, 3, 'hjhju', '2021-05-09 11:50:06', 0, 0),
(95, 16, 5, 'jhkjlk', '2021-05-09 16:08:10', 0, 0),
(96, 16, 7, 'gdfhgjkhljmk!', '2021-05-09 16:08:18', 0, 0),
(97, 16, 7, 'ghcfjgkhj;n', '2021-05-09 16:08:41', 0, 0),
(98, 16, 7, '', '2021-05-09 16:08:41', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reponses`
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
-- Dumping data for table `reponses`
--

INSERT INTO `reponses` (`id`, `Nom_User`, `id_user`, `id_Reclamation`, `Message`, `Date_P`) VALUES
(1, 'Bruh bruh', 6, 2, 'aaaaaa', '2021-01-08'),
(3, 'Bruh bruh', 6, 9, 'mùl;ùml:', '2021-04-04'),
(5, 'Bruh bruh', 6, 23, 'kidsuhihc', '2021-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
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
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`idreservation`, `firstname`, `lastname`, `adresse`, `tel`, `email`, `nbn`, `date`, `room`, `rp`, `idroom`, `iduser`) VALUES
(156, 2, 0, 'nabeul', 45213658, 'mariembenmassoud123@gmail.com', 3, '07 - 5 - 2021', 3, 'test', 34, 3),
(158, 4, 0, 'djerba', 45213025, 'mariembenmassoud123@gmail.com', 3, '13 - 5 - 2021', 5, 'test3', 35, 3),
(160, 1, 0, 'ariana', 98404074, 'zeineb.rahmani@esprit.tn', 1, '07 - 5 - 2021', 1, 'hgjklkmlù', 32, 6);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
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
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`idreservation`, `adresse`, `tel`, `email`, `nbn`, `date`, `rp`, `idservice`, `iduser`) VALUES
(146, 'ariana', 125, 'zeineb.rahmani@esprit.tn', 1, '18 - 4 - 2021', 'hgjhk', 27, 5),
(147, 'ariana', 98404074, 'zeineb.rahmani@esprit.tn', 2, '01 - 4 - 2021', 'nb', 27, 6),
(148, 'ariana', 98404074, 'zeineb.rahmani@esprit.tn', 2, '28 - 4 - 2021', 'none', 27, 6),
(149, 'ariana', 98404074, 'zeineb.rahmani@esprit.tn', 2, '27 - 4 - 2021', 'bvbjhnk', 27, 6),
(150, 'ariana', 98404074, 'zeineb.rahmani@esprit.tn', 2, '29 - 4 - 2021', 'gchvgjbk', 27, 6),
(156, 'ariana', 98404074, 'zeineb.rahmani@esprit.tn', 2, '03 - 5 - 2021', 'dfxgchvjbknlj', 25, 6);

-- --------------------------------------------------------

--
-- Table structure for table `review_post`
--

CREATE TABLE `review_post` (
  `id` int(11) NOT NULL,
  `Titre` varchar(25) NOT NULL,
  `Message` varchar(200) NOT NULL,
  `date_p` date NOT NULL DEFAULT current_timestamp(),
  `Picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_post`
--

INSERT INTO `review_post` (`id`, `Titre`, `Message`, `date_p`, `Picture`) VALUES
(68, 'Many animals play dead—an', '                       Scientifically known as thanatosis, or tonic immobility, playing dead occurs across the animal kingdom, from birds to mammals to fish. Perhaps the most famous death faker is Nor', '2021-04-21', '3.jpg'),
(75, 'pawpaws', '                sdc', '2021-04-22', 'service_icon_2.png'),
(81, 'zeineb', '                       hrt    iukhhbhv     ', '2021-04-24', 'background.jpg'),
(82, 'esprit', '              se former   ', '2021-04-25', 'logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
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
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`idroom`, `hoteladresse`, `roomtype`, `price`, `photo`, `qty`, `iduser`) VALUES
(32, 'luxuary', 'ariana', '600', 'background.jpg', 4, 0),
(34, 'Tunis', 'luxuary', '400', 'Luxuary_boarding1.png', 9, 0),
(35, 'djerba', 'Executive', '220', 'Excutive_rooms.png', 9, 0),
(36, 'djerba', 'Executive', '220', 'Excutive_rooms.png', 10, 0),
(37, 'Nabeul', 'traditional', '200', 'traditiaonal_boarding.jpg', 8, 0),
(39, 'marsa', 'lux', '300', 'background.jpg', 30, 0),
(40, 'lux', 'marsa', '20', 'E0BBn1DXoAEAMer.jpg', 22, 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `idservice` int(50) NOT NULL,
  `servicetype` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`idservice`, `servicetype`, `price`, `photo`, `qty`) VALUES
(25, 'pet grooming', '100', 'background.jpg', 12),
(26, 'pet training', '500', 'background.jpg', 7),
(27, 'vet appointments', '500', 'background.jpg', 12),
(31, 'pet daycamp', '100', 'background.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `type_service`
--

CREATE TABLE `type_service` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prix` varchar(20) NOT NULL,
  `dateS` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_service`
--

INSERT INTO `type_service` (`id`, `nom`, `prix`, `dateS`) VALUES
(25, 'yosr', '50', '2021-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
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
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `Nom`, `Prenom`, `Email`, `Date_N`, `Facture`, `Picture`, `Login`, `Password`, `sexe`, `Role`) VALUES
(3, 'mariam', 'B.M', 'mariembenmassoud123@gmail.com', '2000-12-06', 2, 'Unknown.png', 'mariem123', 'mariem123', 'Femme', 'admin'),
(5, 'provider', 'zeineb', 'zeineb@esprit.com', '2000-02-06', 0, 'Unknown.png', 'provider', 'eya123456', 'Femme', 'ServiceProvider'),
(6, 'rahmani', 'eya', 'zeineb.rahmani@esprit.tn', '2000-02-06', 0, 'Unknown.png', 'admin', 'eya123456', 'Femme', 'admin'),
(7, 'rahmani', 'zeineb', 'zeineb@gmail.com', '2000-02-06', 0, 'Unknown.png', 'client1', 'eya123456', 'Femme', 'client'),
(10, 'BENMASSAOUD', 'Maryem', 'marieembenmassoud123@gmail.com', '2000-12-06', 0, 'Unknown.png', 'May16', '123456', 'Femme', 'hotelmanager'),
(11, 'Mariem', 'Ben Massaoud', 'mariembenmassoud123@gmail.com', '2000-12-06', 0, 'Unknown.png', 'May16', '123456m', 'Femme', 'client'),
(12, 'skander', 'rachah', 'rachah.skander@esprit.tn', '1999-05-27', 0, 'Unknown.png', 'skander', 'skander123456', 'Homme', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_post` (`id_post`),
  ADD KEY `id_user_C` (`id_user`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usersource` (`source`),
  ADD KEY `userdestinataire` (`destinataire`);

--
-- Indexes for table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idreservation`),
  ADD KEY `idroom` (`idroom`),
  ADD KEY `useribfk` (`iduser`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`idreservation`),
  ADD KEY `idservice` (`idservice`),
  ADD KEY `useribfk` (`iduser`);

--
-- Indexes for table `review_post`
--
ALTER TABLE `review_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`idroom`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`idservice`);

--
-- Indexes for table `type_service`
--
ALTER TABLE `type_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`,`Login`,`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idreservation` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `idreservation` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `idroom` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `idservice` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
