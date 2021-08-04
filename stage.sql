-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 04, 2021 at 12:37 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stage`
--

-- --------------------------------------------------------

--
-- Table structure for table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `id_rec` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `nom` varchar(10) NOT NULL,
  `date_reclamation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(40) NOT NULL,
  `description` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `etat` varchar(10) NOT NULL DEFAULT 'non réparé',
  PRIMARY KEY (`id_rec`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reclamation`
--

INSERT INTO `reclamation` (`id_rec`, `id_user`, `nom`, `date_reclamation`, `type`, `description`, `etat`) VALUES
(1, 2, '', '2021-07-17 11:39:32', 'Matériel', 'sdsqdsqdsqdqdqsd', 'réglé'),
(2, 1, '', '2021-07-17 11:54:23', 'Matériel', 'panne au niveau du mon imprimante', 'réglé'),
(3, 1, '', '2021-07-17 11:55:14', 'Réseau', ' gytrytrdfg', 'non réparé'),
(4, 3, '', '2021-07-17 12:48:11', 'Matériel', ' probléme de mon ordinateur', 'non réparé'),
(5, 4, '', '2021-07-17 13:31:03', 'Réseau', ' efzezerezr', ' réparé'),
(6, 2, 'arij', '2021-07-19 09:54:41', 'Réseau', ' gfdgdfgdfgdfgfd', 'non réparé'),
(7, 2, 'arij', '2021-07-23 07:49:29', 'Matériel', ' ordinateur en panne', ' réparé'),
(8, 2, 'arij', '2021-07-26 09:15:10', 'Matériel', ' ordinateur en panne', ' réparé'),
(9, 11, 'Ahmed', '2021-07-29 07:49:26', 'Matériel', ' ordinateur en panne', ' réparé');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `email`, `pwd`, `sexe`) VALUES
(1, 'yahya', 'jday', 'mohamedyahya.jday@esprit.tn', '123', 'male'),
(2, 'arij', 'hajji', 'arij.hajji@esprit.tn', '123456', 'female'),
(3, 'Hajji', 'Cyrine', 'hajjisirine06@gmail.com', '22861274', 'female'),
(4, 'tlili', 'dali', 'dalitlili@gmail.com', '1234567', 'male'),
(8, 'maram', 'hajji', 'dsdsdsd@dfd.com', 'abc', 'male'),
(9, 'ssss', 'sssss', 'aroujahajji3@gmail.com', 'ddd', 'female'),
(10, '', '', 'admin', 'admin', ''),
(11, 'Ahmed', 'Abidi', 'ahmed.abidi@gmail.com', '12345678', 'male');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `reclamation_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
