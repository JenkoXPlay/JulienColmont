-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Dim 07 Juin 2020 à 13:37
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
-- Structure de la table `projets`
--

CREATE TABLE IF NOT EXISTS `projets` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `illustration` text NOT NULL,
  `description` text NOT NULL,
  `annee_creation` int(11) NOT NULL,
  `taille` varchar(255) NOT NULL,
  `nbr_pages` int(11) NOT NULL,
  `edition` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `projets`
--

INSERT INTO `projets` (`id`, `nom`, `illustration`, `description`, `annee_creation`, `taille`, `nbr_pages`, `edition`, `categorie`) VALUES
(1, 'CCZB', 'CCZB_1.jpg', 'Conception d''une identité graphique pour CCZB,\r\nune entreprise de toiture.\r\nlogo - flyer - carte de visite - panneaux - covering cars', 2013, '0', 0, 'Identité graphique', '0'),
(2, 'Les métiers d''antan', 'antan_1.jpg', 'Création d’une édition sur le sujet du travail.\r\nles métiers d’antan.', 2016, '148 X 210 mm', 27, 'Illustrations', '0'),
(3, 'Magic Phil', 'Magic Phil_00.jpg', 'Conception d''une identité graphique pour le magicien illusionniste "Magic Phil".\r\n\r\nLogo - cartes de visite - livrets - dépliant - kakemonos', 2018, '0', 0, '0', 'Logo - cartes de visite - livrets - dépliant - kakemonos');

-- --------------------------------------------------------

--
-- Structure de la table `projets_all_img`
--

CREATE TABLE IF NOT EXISTS `projets_all_img` (
  `id` int(11) NOT NULL,
  `illustration` text NOT NULL,
  `id_projet` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `projets_all_img`
--

INSERT INTO `projets_all_img` (`id`, `illustration`, `id_projet`) VALUES
(1, 'CCZB_02.jpg', 1),
(2, 'antan_02.jpg', 2),
(3, 'CCZB_1.jpg', 1),
(4, 'CCZB_03.jpg', 1),
(5, 'antan_1.jpg', 2),
(6, 'antan_03.jpg', 2),
(7, 'Magic Phil_01.jpg', 3),
(8, 'Magic Phil_02.jpg', 3),
(9, 'Magic Phil_00.jpg', 3);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projets_all_img`
--
ALTER TABLE `projets_all_img`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `projets_all_img`
--
ALTER TABLE `projets_all_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
