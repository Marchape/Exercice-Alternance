-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 08 mars 2022 à 23:36
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bulko`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `nom` varchar(150) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `message` text NOT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`nom`, `mail`, `phone`, `message`, `id`) VALUES
('fddff', 'martin@gmail.com', 770271851, 'ezfzfefzz', 1),
('rrrrr', '', 770271851, 'l\'abeille coule', 2),
('ththrth', '', 770271851, 'gfgfg', 3),
('zefz', 'zfe', 770271851, 'fzf', 4),
('blep', 'martin_chapelle@h.fr', 770271851, 'salam', 5),
('blep', 'martin_chapelle@h.fr', 770271851, 'salam', 6),
('blep', 'martin_chapelle@h.fr', 770271851, 'salam', 7),
('blep', 'martin_chapelle@h.fr', 770271851, 'salam', 8),
('blep', 'martin_chapell', 770271851, 'salam', 9),
('', 'mama@gmail.fr', 770271851, 'tavu le camion\r\n\r\n', 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
