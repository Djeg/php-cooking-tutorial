-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : ven. 21 oct. 2022 à 08:16
-- Version du serveur : 10.6.10-MariaDB-1:10.6.10+maria~ubu2004
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cookme`
--
CREATE DATABASE IF NOT EXISTS `cookme` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cookme`;

-- --------------------------------------------------------

--
-- Structure de la table `recettes`
--

DROP TABLE IF EXISTS `recettes`;
CREATE TABLE IF NOT EXISTS `recettes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `difficulty` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `author` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `recettes`
--

INSERT INTO `recettes` (`id`, `title`, `description`, `image`, `difficulty`, `price`, `active`, `author`) VALUES
(4, 'Poulet Basquaise', 'Une délicieuse recette de poulet au poivrons :)', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fauvraidelice.fr%2Fwp-content%2Fuploads%2F2020%2F06%2FIMG-AuVraiDelice-6.jpg', '5', '€€', 1, 'John Doe'),
(5, 'Poulet Curry', 'Une délicieuse recette de poulet au curry :)', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fsunandgreen.fr%2Fwp-content%2Fuploads%2F2019%2F10%2Fpoulet_au_curry_et_oignons_recette_epices-768x768.jpg', '6', '€', 1, 'Jane Doe'),
(6, 'Boeuf Bourguignon', 'Une délicieuse recette de ragout de boeuf au petit légumes :)', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcooking-chef.sa.metacdn.com%2Fsites%2Fdefault%2Ffiles%2Frecettes%2Fboeuf-bourguignon-recette_4x3.jpg', '3', '€€', 0, 'Jack Sparrow');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `imageUrl` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `imageUrl`, `sexe`, `birthdate`) VALUES
(1, 'john', 'doe', 'john@mail.com', 'john.doe', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.jennstrends.com%2Fwp-content%2Fuploads%2F2013%2F10%2FBad-profile-pic-6.jpg&f=1&nofb=1&ipt=523bf8860ab462cba0563278454b31e9783f5f45a1dd3816572ee4993d882bfa&ipo=images', 'homme', '1989-10-18'),
(2, 'jane', 'doe', 'jane@mail.com', 'jane.doe', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flouisem.com%2Fwp-content%2Fuploads%2F2013%2F02%2Fbest-profile-picture-facebook.png&f=1&nofb=1&ipt=7dd0950b01990fff2e4780be8610d04cc63aa9d77650f85392e70ced2fda671c&ipo=images', 'femme', '1995-10-18'),
(3, 'test', 'test', 'test@mail.com', 'test', 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Ffree-profile-pics.com%2Fprofile-pictures%2F01232014%2Fdownload%2Fmr-bean-profile-picture-180x180.png&f=1&nofb=1&ipt=bedc69dcbd46ceccc906b9ab7a3bb57641a67c7695f3acd155007483280df0c4&ipo=images', 'homme', '1990-03-21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
