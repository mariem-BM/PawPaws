-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 02:28 PM
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
  `email` varchar(20) NOT NULL,
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
(117, 'adresse', 555, 'zeineb.rahmani@espri', 5, '06 - 1 - 2021', 'loool', 25, 6),
(135, 'ariana', 98404074, 'zeineb.rahmani@espri', 4, '24 - 4 - 2021', 'nnnnnn', 0, 6),
(136, 'ariana', 98404074, 'zeineb.rahmani@espri', 3, '30 - 4 - 2021', 'fdghjk', 0, 6);

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
(26, 'pet training', '500', 'background.jpg', 9),
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
(5, 'rahmani', 'zeineb', 'zeineb@gmail.com', '2000-02-06', 0, 'Unknown.png', 'tazarkour', 'eya123456', 'Femme', 'client'),
(6, 'rahmani', 'eya', 'zeineb.rahmani@esprit.tn', '2000-02-06', 0, 'Unknown.png', 'eya123', 'eya123456', 'Femme', 'admin');

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
  MODIFY `idreservation` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `idservice` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
