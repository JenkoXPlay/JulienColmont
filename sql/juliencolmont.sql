-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Dim 26 Janvier 2020 à 14:25
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
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL,
  `nom_complet` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_envoi` datetime NOT NULL,
  `vue` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `nom_complet`, `email`, `sujet`, `message`, `date_envoi`, `vue`) VALUES
(1, 'gh', 'ghj@qsd.com', 'lkdshf', 'dmfjgdfklgjkldfgkdfjghdfjghdfjghkdjghdjkfghdfjkghjdfkghdjkfghdfjkghkdfghkdfghdfkhgdfkjghkdfjdkgdf', '2020-01-26 13:41:30', 0),
(2, 'qsdqsdqsdqsd', 'qsdqsdqsd@qsdqsdqs.com', 'l''autre fois', 'l''ajsdghfdsgfsdjfshjfgdsjhfghjsgfhjsgfhjsdgfhjsgfhsdfhjsdfjhsdgfjhsdgfjhdsfghjsfghjdsfgjhsf', '2020-01-26 13:44:59', 0),
(3, 'Maxime Lefebvre', 'maximelefebvre1505@gmail.com', 'Wallah ch''ui trop fort', 'Je suis entrain de finir ton site, voici un formulaire de contact que le site vient d''envoyer tout seul depuis la page contact !', '2020-01-26 13:53:50', 0),
(4, 'Maxime Lefebvre', 'maximelefebvre1505@gmail.com', 'Test de formulaire', 'Ton site avance doucement, ceci est un mail envoyé directement depuis ton site web.', '2020-01-26 14:24:58', 0);

-- --------------------------------------------------------

--
-- Structure de la table `galerie`
--

CREATE TABLE IF NOT EXISTS `galerie` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `lien_img` text NOT NULL,
  `date_ajout` datetime NOT NULL,
  `ajoute_par` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `galerie`
--

INSERT INTO `galerie` (`id`, `titre`, `lien_img`, `date_ajout`, `ajoute_par`) VALUES
(1, 'Titre 1', 'https://codeur.com/blog/wp-content/uploads/2013/04/Capture-d%E2%80%99%C3%A9cran-2013-04-01-%C3%A0-10.19.46.png', '2020-01-01 00:00:00', 'maxime'),
(2, 'Titre 2', 'https://i.ytimg.com/vi/jzHGHmgcOw8/maxresdefault.jpg', '2020-01-01 00:00:00', 'maxime'),
(3, 'Titre 3', 'https://graphiste.com/blog/wp-content/uploads/2019/09/movies-flat-icons-square400.jpg', '2020-01-01 00:00:00', 'maxime'),
(4, 'Titre 4', 'https://previews.123rf.com/images/narak0rn/narak0rn1707/narak0rn170700005/82178768-flat-design-4-seasons-floating-islands-illustration-vector.jpg', '2020-01-01 00:00:00', 'maxime'),
(5, 'Titre 5', 'https://i.pinimg.com/originals/cb/ae/1a/cbae1acb1b710a97141a556bb91274a0.jpg', '2020-01-01 00:00:00', 'maxime'),
(6, 'Titre 6', 'https://i.pinimg.com/originals/59/05/f4/5905f4b95a51ad49b9036f097e0cdc05.png', '2020-01-01 00:00:00', 'maxime'),
(7, 'Titre 7', 'https://images.tuto.net/blog/flat-design.jpg', '2020-01-01 00:00:00', 'maxime');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `galerie`
--
ALTER TABLE `galerie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `galerie`
--
ALTER TABLE `galerie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
