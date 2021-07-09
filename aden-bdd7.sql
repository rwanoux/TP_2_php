-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2021 at 08:35 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aden-bdd7`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `Client_ID` int(11) NOT NULL,
  `Client_Nom` varchar(50) NOT NULL,
  `Client_Prenom` varchar(50) NOT NULL,
  `Client_Adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`Client_ID`, `Client_Nom`, `Client_Prenom`, `Client_Adresse`) VALUES
(1, 'LEMAIRE', 'ERWAN', ' 24 rue des déportés 53000 laval'),
(2, 'HOUMADI', 'LAURENCE', '29 rue de la Liberté 72000 LE Mans'),
(3, 'DIDIER', 'BENJAMIN', '12 rue du Pendu 140000 Marseille'),
(4, 'FERRAND', 'LORAN', 'EHPAD des vert primptemps 45000 Vezoul'),
(5, 'SABIN', 'MAXIME', '23 rue du Stade 75000 Paris');

-- --------------------------------------------------------

--
-- Table structure for table `cmd_pdt`
--

CREATE TABLE `cmd_pdt` (
  `Cmd_Pdt_ID` int(11) NOT NULL,
  `Cmd_Pdt_Commande_ID` int(11) NOT NULL,
  `Cmd_Pdt_Produit_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cmd_pdt`
--

INSERT INTO `cmd_pdt` (`Cmd_Pdt_ID`, `Cmd_Pdt_Commande_ID`, `Cmd_Pdt_Produit_ID`) VALUES
(79, 1, 5),
(80, 1, 2),
(81, 2, 7),
(82, 2, 9),
(83, 3, 1),
(84, 3, 9),
(85, 4, 6),
(86, 4, 7),
(87, 5, 7),
(88, 5, 3),
(89, 6, 5),
(90, 7, 10),
(91, 7, 8),
(92, 7, 9),
(93, 8, 4),
(94, 9, 4),
(95, 9, 8),
(96, 10, 5),
(97, 10, 4),
(98, 11, 9),
(99, 11, 8),
(100, 12, 3),
(101, 12, 9),
(102, 13, 8),
(103, 13, 10),
(104, 14, 1),
(105, 14, 2),
(106, 15, 4),
(107, 15, 6),
(108, 15, 9);

-- --------------------------------------------------------

--
-- Table structure for table `commandes`
--

CREATE TABLE `commandes` (
  `Commande_ID` int(11) NOT NULL,
  `Commande_Date` date NOT NULL,
  `Commande_Client_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commandes`
--

INSERT INTO `commandes` (`Commande_ID`, `Commande_Date`, `Commande_Client_ID`) VALUES
(1, '2021-07-07', 4),
(2, '2021-07-14', 3),
(3, '2021-06-17', 5),
(4, '2021-05-13', 2),
(5, '2021-01-21', 1),
(6, '2021-02-11', 4),
(7, '2021-01-22', 5),
(8, '2020-11-19', 2),
(9, '2021-05-12', 3),
(10, '2021-04-22', 4),
(11, '2021-03-19', 1),
(12, '2021-07-04', 5),
(13, '2021-07-23', 3),
(14, '2021-07-19', 1),
(15, '2021-07-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `Produit_ID` int(11) NOT NULL,
  `Produit_Nom` varchar(255) NOT NULL,
  `Produit_Image` varchar(255) NOT NULL,
  `Produit_Prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`Produit_ID`, `Produit_Nom`, `Produit_Image`, `Produit_Prix`) VALUES
(1, 'ballon de football', 'ballon.jpg', 70),
(2, 'cigarette électronique', 'cigarette.jpg', 80),
(3, 'corde', 'corde.jpg', 20),
(4, 'jacuzzi Jaccouz 2000', 'jacuzzi.jpg', 1300),
(5, 'couches pour adulte', 'couches.jpg', 15),
(6, 'jardinière d\'extérieur', 'jardinière.jpg', 350),
(7, 'ordinateur portable', 'ordinateur.jpg', 2000),
(8, 'télévision écran plat', 'télévision.jpg', 2000),
(9, 'smartphone', 'téléphone.jpg', 700),
(10, 'voiture modèle réduit', 'voiture.jpg', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`Client_ID`);

--
-- Indexes for table `cmd_pdt`
--
ALTER TABLE `cmd_pdt`
  ADD PRIMARY KEY (`Cmd_Pdt_ID`),
  ADD KEY `FK_Commande_ID` (`Cmd_Pdt_Commande_ID`),
  ADD KEY `FK_Produit_ID` (`Cmd_Pdt_Produit_ID`);

--
-- Indexes for table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`Commande_ID`),
  ADD KEY `FK_Client_ID` (`Commande_Client_ID`);

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`Produit_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `Client_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cmd_pdt`
--
ALTER TABLE `cmd_pdt`
  MODIFY `Cmd_Pdt_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `Commande_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `Produit_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cmd_pdt`
--
ALTER TABLE `cmd_pdt`
  ADD CONSTRAINT `FK_Commande_ID` FOREIGN KEY (`Cmd_Pdt_Commande_ID`) REFERENCES `commandes` (`Commande_ID`),
  ADD CONSTRAINT `FK_Produit_ID` FOREIGN KEY (`Cmd_Pdt_Produit_ID`) REFERENCES `produits` (`Produit_ID`);

--
-- Constraints for table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `FK_Client_ID` FOREIGN KEY (`Commande_Client_ID`) REFERENCES `clients` (`Client_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
