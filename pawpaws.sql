-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 07:03 PM
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
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
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
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`idreservation`, `adresse`, `tel`, `email`, `nbn`, `date`, `rp`, `idservice`, `iduser`) VALUES
(146, 'ariana', 125, 'zeineb.rahmani@esprit.tn', 1, '18 - 4 - 2021', 'hgjhk', 27, 5),
(147, 'ariana', 98404074, 'zeineb.rahmani@esprit.tn', 2, '01 - 4 - 2021', 'nb', 27, 6),
(148, 'ariana', 98404074, 'zeineb.rahmani@esprit.tn', 2, '28 - 4 - 2021', 'none', 27, 6),
(149, 'ariana', 98404074, 'zeineb.rahmani@esprit.tn', 2, '27 - 4 - 2021', 'bvbjhnk', 27, 6),
(150, 'ariana', 98404074, 'zeineb.rahmani@esprit.tn', 2, '29 - 4 - 2021', 'gchvgjbk', 27, 6),
(156, 'ariana', 98404074, 'zeineb.rahmani@esprit.tn', 2, '03 - 5 - 2021', 'dfxgchvjbknlj', 25, 6),
(157, 'ariana', 98404074, 'zeineb.rahmani@esprit.tn', 3, '03 - 5 - 2021', 'fhgjbknl', 25, 6);

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
(25, 'pet grooming', '100', 'background.jpg', 11),
(26, 'pet training', '500', 'background.jpg', 7),
(27, 'vet appointments', '500', 'background.jpg', 12);

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
(5, 'provider', 'zeineb', 'zeineb@esprit.com', '2000-02-06', 0, 'Unknown.png', 'provider', 'eya123456', 'Femme', 'ServiceProvider'),
(6, 'rahmani', 'eya', 'zeineb.rahmani@esprit.tn', '2000-02-06', 0, 'Unknown.png', 'admin', 'eya123456', 'Femme', 'admin'),
(7, 'rahmani', 'zeineb', 'zeineb@gmail.com', '2000-02-06', 0, 'Unknown.png', 'client1', 'eya123456', 'Femme', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idreservation`),
  ADD KEY `idservice` (`idservice`),
  ADD KEY `useribfk` (`iduser`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`idservice`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`,`Login`,`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idreservation` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `idservice` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
