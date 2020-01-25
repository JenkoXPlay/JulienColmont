-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Sam 25 Janvier 2020 à 16:20
-- Version du serveur :  5.5.49-log
-- Version de PHP :  7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `juliencolmont`
--

-- --------------------------------------------------------

--
-- Structure de la table `galerie`
--

CREATE TABLE IF NOT EXISTS `galerie` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `lien_img` text NOT NULL,
  `date_ajout` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `galerie`
--

INSERT INTO `galerie` (`id`, `titre`, `lien_img`, `date_ajout`) VALUES
(1, 'Test 1', 'https://i.ytimg.com/vi/jzHGHmgcOw8/maxresdefault.jpg', '0000-00-00 00:00:00'),
(2, 'Test 2', 'https://i.ytimg.com/vi/jzHGHmgcOw8/maxresdefault.jpg', '2020-01-08 00:00:00'),
(3, 'Test 3', 'https://i.ytimg.com/vi/jzHGHmgcOw8/maxresdefault.jpg', '2020-01-08 00:00:00'),
(4, 'Test 4', 'https://i.ytimg.com/vi/jzHGHmgcOw8/maxresdefault.jpg', '2020-01-15 00:00:00'),
(5, 'Test 5', 'https://i.ytimg.com/vi/jzHGHmgcOw8/maxresdefault.jpg', '2020-01-22 00:00:00'),
(6, 'Test 6', 'https://i.ytimg.com/vi/jzHGHmgcOw8/maxresdefault.jpg', '2020-01-23 00:00:00'),
(7, 'Test 7', 'https://i.ytimg.com/vi/jzHGHmgcOw8/maxresdefault.jpg', '2020-01-09 00:00:00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `galerie`
--
ALTER TABLE `galerie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `galerie`
--
ALTER TABLE `galerie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
