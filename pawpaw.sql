-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 04:39 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pawpaw`
--

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
  `email` varchar(20) NOT NULL,
  `nbn` int(11) NOT NULL,
  `date` text NOT NULL,
  `service` int(20) NOT NULL,
  `rp` varchar(25) NOT NULL,
  `idservice` int(50) DEFAULT NULL,
  `iduser` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--


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
(5, 'Jaouani', 'Walid', 'jaouaniw@gmail.com', '2000-02-06', 0, 'Unknown.png', 'tazarkour', 'walid123456', 'Homme', 'client'),
(6, 'Bruh', 'bruh', 'walid.jaouani@yahoo.fr', '2000-02-06', 0, 'Unknown.png', 'walid123', 'walid123456', 'Femme', 'admin'),
(7, 'jebali', 'sourour', 'sourour_jebali@gmail.com', '2020-12-17', 0, 'Unknown.png', 'sourour', '123', 'Homme', 'client'),
(8, 'mohamed', 'saad', 'MohamadSaad1993@gmail.com', '2009-12-19', 0, 'Unknown.png', 'mohamed ', '123', 'Homme', 'client');

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
  MODIFY `idreservation` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `idservice` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`idservice`) REFERENCES `services` (`idservice`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `useribfk` FOREIGN KEY (`iduser`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
