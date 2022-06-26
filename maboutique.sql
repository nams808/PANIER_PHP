-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 26 juin 2022 à 14:35
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `maboutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `burgers`
--

DROP TABLE IF EXISTS `burgers`;
CREATE TABLE IF NOT EXISTS `burgers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `description` text,
  `category` varchar(20) DEFAULT NULL,
  `price` varchar(15) DEFAULT NULL,
  `image` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `burgers`
--

INSERT INTO `burgers` (`id`, `title`, `description`, `category`, `price`, `image`) VALUES
(19, 'SoMax', 'viande rouge', 'boeuf', '5.9', '1'),
(20, 'SoMythic', 'viande rouge', 'boeuf', '4.9', '2'),
(21, 'SoTwist', 'viande blanche', 'poulet', '7.9', '1'),
(22, 'SoMaster', 'viande blanche', 'poulet', '5.9', '4'),
(40, 'Chicken Classic', 'viande blanche', 'poulet', '6.9', '5'),
(81, 'Big Mac', 'viande de boeuf', 'boeuf', '8.9', '4'),
(82, 'Big fish', 'viande de poisson', 'poisson', '5.9', '5'),
(83, 'Chicken Classic', 'viande de poulet', 'poulet', '8.9', '6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
