-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 04 Mai 2017 à 17:09
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `dediagency`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_art` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  PRIMARY KEY (`id_art`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id_art`, `titre`, `description`, `statut`) VALUES
(1, '« Marine Le Pen a souvent donné l’impression que son principal objectif n’était pas d’emporter ce débat »', 'Quelles leçons tirer du débat qui a opposé, mercredi 3 mai, Marine Le Pen et Emmanuel Macron ? Quel peut être son impact sur le scrutin de dimanche ? Les journalistes auraient-ils dû intervenir davantage ? Nicolas Chapuis, chef du service politique... ', 'désactivé'),
(3, 'A 95 ans, le prince Philip, « expert en inauguration de plaques », tire sa ...', '\nA 95 ans, le prince Philip, époux de la reine Elizabeth II, va prendre sa retraite. Le palais de Buckingham a annoncé jeudi 4 mai au matin que le duc d’Edimbourg ...', 'actif');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `id_art` int(11) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id_c`, `titre`, `contenu`, `id_art`) VALUES
(1, 'zdada', 'dazda', 1),
(2, 'azda', 'dzada1', 1),
(3, 'dzad7', 'dazd7', 1),
(4, 'zada', 'dzada', 3),
(5, 'zada', 'dzada', 3),
(6, 'zda', 'dzada', 3),
(7, 'dazda', 'dazda', 3),
(8, 'dazda', 'dazda', 3),
(9, 'zada', 'dazda', 3),
(10, 'Au top !', 'Commentaire de fou !', 3),
(11, 'Au top !', 'Commentaire de fou !', 3),
(12, 'Au top !', 'Commentaire de fou !', 3),
(13, 'Au top !', 'Commentaire de fou !', 3),
(14, 'Au top !', 'Commentaire de fou !', 3),
(15, 'Au top !', 'Commentaire de fou !', 3),
(16, 'dàouco', 'couza', 3),
(17, 'dàouco', 'couza', 3),
(18, 'dazdlk', 'jdzada\r\n', 3);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_u` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) NOT NULL,
  `mdp` varchar(45) NOT NULL,
  PRIMARY KEY (`id_u`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_u`, `login`, `mdp`) VALUES
(1, 'test', '782dd27ea8e3b4f4095ffa38eeb4d20b59069077');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
