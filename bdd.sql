-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 12 déc. 2018 à 22:58
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `promethee`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `email`, `message`) VALUES
(1, 'Beziers la fosse', 'Cédric', 'cedric.blf@hotmail.fr', 'cedroc'),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, 'Kalenji', 'Cédric', 'wiidu78@hotmail.fr', 'kebab'),
(7, 'Kalenji', 'Cédric', 'wiidu78@hotmail.fr', 'kebab'),
(8, 'Beziers la fosse', 'Cédric', 'wiidu78@hotmail.fr', 'frites'),
(9, 'Beziers la fosse', 'Cédric', 'wiidu78@hotmail.fr', 'frites'),
(10, 'Beziers la fosse', 'Cédric', 'wiidu78@hotmail.fr', 'frites'),
(11, 'Beziers la fosse', 'Cédric', 'wiidu78@hotmail.fr', 'frites'),
(12, 'Beziers la fosse', 'Cédric', 'wiidu78@hotmail.fr', 'frites'),
(13, 'Beziers la fosse', 'Cédric', 'wiidu78@hotmail.fr', 'frites'),
(14, '', '', '', ''),
(15, '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `handicap`
--

DROP TABLE IF EXISTS `handicap`;
CREATE TABLE IF NOT EXISTS `handicap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `geo` varchar(100) NOT NULL,
  `secteur` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `niv_etude` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `handicap`
--

INSERT INTO `handicap` (`id`, `mail`, `mobile`, `geo`, `secteur`, `type`, `niv_etude`) VALUES
(1, 'fdp@hotmail.fr', 630761777, 'PAris', 'Veterinaire', 'Formations', 'back+2'),
(2, 'ghj@hotmail.fr', 682205852, 'Paris', 'Secteur', 'Emplois', 'back+2'),
(3, 'ghj@hotmail.fr', 682205852, 'Paris', 'Secteur', 'Emplois', 'back+2'),
(4, 'ghj@hotmail.fr', 682205852, 'Paris', 'Secteur', 'Emplois', 'back+2'),
(5, 'ghj@hotmail.fr', 682205852, 'Paris', 'Secteur', 'Emplois', 'back+2'),
(6, 'ghj@hotmail.fr', 682205852, 'Paris', 'Secteur', 'Emplois', 'back+2'),
(7, 'ghj@hotmail.fr', 682205852, 'pute', 'master pute', 'enculer', 'fdp lvl 4'),
(8, 'fdp@royaume.net', 682205852, 'pute', 'pute', 'pute', 'master pute'),
(9, 'fdp@royaume.net', 682205852, 'pute', 'pute', 'pute', 'master pute'),
(10, 'qsdq@hotmail.fr', 652488911, 'Suisse', 'Soir', 'emplois', ''),
(11, 'qsdq@hotmail.fr', 652488911, 'Suisse', 'Soir', 'emplois', ''),
(12, 'qsdq@hotmail.fr', 652488911, 'Suisse', 'Soir', 'emplois', ''),
(13, 'qsdq@hotmail.fr', 652488911, 'Suisse', 'Soir', 'emplois', ''),
(14, 'qsdq@hotmail.fr', 652488911, 'Suisse', 'Soir', 'emplois', ''),
(15, 'qsdq@hotmail.fr', 652488911, 'Suisse', 'Soir', 'emplois', ''),
(16, 'qsdq@hotmail.fr', 652488911, 'Suisse', 'Soir', 'emplois', ''),
(17, 'qsdq@hotmail.fr', 652488911, 'Suisse', 'Soir', 'emplois', ''),
(18, 'qsdq@hotmail.fr', 652488911, 'Suisse', 'Soir', 'emplois', ''),
(19, 'qsdq@hotmail.fr', 652488911, 'Suisse', 'Soir', 'emplois', ''),
(20, 'qsdq@hotmail.fr', 652488911, 'Suisse', 'Soir', 'emplois', ''),
(22, 'aaa@domaine.com', 605040301, '75015', 'petagedecable', 'travail', 'bac'),
(23, 'aaa@domaine.com', 605040301, '75015', 'petagedecable', 'travail', 'bac'),
(24, 'aaa@domaine.com', 605040301, '75015', 'petagedecable', 'travail', 'bac'),
(25, 'fdp@domaine', 605040301, '78000', 'fdpdunet', 'travail', 'tonpere'),
(26, 'aaa@domaine.com', 605040301, '75015', 'petagedecable', 'travail', 'bac'),
(27, 'tamer@pute.fr', 605040301, 'Paris', 'petagedecable', 'travail', 'bac'),
(28, 'aaa@domaine.com', 605040301, '75015', 'petagedecable', 'travail', 'bac+5'),
(29, 'aaa@domaine.com', 605040301, '75015', 'petagedecable', 'travail', 'bac');

-- --------------------------------------------------------

--
-- Structure de la table `proposer_emplois`
--

DROP TABLE IF EXISTS `proposer_emplois`;
CREATE TABLE IF NOT EXISTS `proposer_emplois` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_etablissement` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `taille_entreprise` text NOT NULL,
  `duree` varchar(50) NOT NULL DEFAULT '2 mois',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `proposer_formations`
--

DROP TABLE IF EXISTS `proposer_formations`;
CREATE TABLE IF NOT EXISTS `proposer_formations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_etablissement` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `telephone` int(10) NOT NULL,
  `taille_entreprise` text,
  `Ville` varchar(75) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `titre_poste` varchar(75) NOT NULL,
  `chapo` varchar(250) NOT NULL,
  `description_complete` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `proposer_formations`
--

INSERT INTO `proposer_formations` (`id`, `nom_etablissement`, `nom`, `telephone`, `taille_entreprise`, `Ville`, `duration`, `titre_poste`, `chapo`, `description_complete`) VALUES
(14, 'KEOLIS', 'Beziers la fosse', 102030405, 'ETI', 'Paris', '3 mois', 'DRH', 'Trouver l excellence', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor nulla eu tempus lacinia. Vestibulum lorem mauris, pharetra quis rhoncus sed, rutrum in massa. Integer metus est, interdum at rhoncus et, cursus eu urna. Proin commodo, ex sit amet porta convallis, quam justo malesuada ipsum, nec dignissim sem nibh vitae nibh. Sed dictum congue efficitur. Morbi elit mi, euismod eget orci sed, maximus accumsan dolor. Donec gravida volutpat metus, vitae molestie est laoreet sed. Quisque fermentum nec nibh a dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris eu dictum orci. Pellentesque sit amet diam congue, auctor turpis quis, vulputate nisl. Sed blandit quis lorem id ullamcorper. Etiam vitae metus tempus, sodales nisi eu, tristique turpis. Vivamus egestas felis a convallis fringilla. Praesent pharetra augue ut sem pellentesque, quis tincidunt sapien feugiat.\r\n\r\nNulla ultricies justo vel pretium congue. Donec pellentesque nec quam at imperdiet. Integer feugiat magna ut orci tempor, sit amet mattis neque euismod. Donec dictum porta efficitur. Donec consectetur nec nisl vel consequat. Vivamus auctor nunc libero, vel convallis dui pharetra in. Phasellus eleifend odio a justo faucibus congue et at enim. Nulla suscipit condimentum nulla, non lobortis ligula venenatis at. Aenean eleifend pharetra ipsum, et aliquam tortor ornare sit amet. Praesent varius cursus aliquet.\r\n\r\nVestibulum ultricies ex erat, id ullamcorper arcu dignissim a. Vivamus id nisl id urna faucibus elementum. Sed egestas libero a mauris vulputate aliquam. Vivamus ut malesuada lacus. Duis consequat lacinia urna in ultricies. Sed fringilla odio in ornare maximus. Donec vestibulum volutpat magna in volutpat. Cras gravida ornare metus, non imperdiet nulla volutpat sit amet. Mauris justo nunc, mattis non ultricies non, pulvinar at leo.'),
(13, 'Université Pierre et Marie Curie', 'Kalenji', 102030405, 'TPE', 'Paris', '2 ans', 'Licence Informatique', 'acquis une culture et une expérience fiables leur permettant de s’adapter aux évolutions des sciences et techniques au cours de leur vie professionnelle', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor nulla eu tempus lacinia. Vestibulum lorem mauris, pharetra quis rhoncus sed, rutrum in massa. Integer metus est, interdum at rhoncus et, cursus eu urna. Proin commodo, ex sit amet porta convallis, quam justo malesuada ipsum, nec dignissim sem nibh vitae nibh. Sed dictum congue efficitur. Morbi elit mi, euismod eget orci sed, maximus accumsan dolor. Donec gravida volutpat metus, vitae molestie est laoreet sed. Quisque fermentum nec nibh a dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris eu dictum orci. Pellentesque sit amet diam congue, auctor turpis quis, vulputate nisl. Sed blandit quis lorem id ullamcorper. Etiam vitae metus tempus, sodales nisi eu, tristique turpis. Vivamus egestas felis a convallis fringilla. Praesent pharetra augue ut sem pellentesque, quis tincidunt sapien feugiat.\r\n\r\nNulla ultricies justo vel pretium congue. Donec pellentesque nec quam at imperdiet. Integer feugiat magna ut orci tempor, sit amet mattis neque euismod. Donec dictum porta efficitur. Donec consectetur nec nisl vel consequat. Vivamus auctor nunc libero, vel convallis dui pharetra in. Phasellus eleifend odio a justo faucibus congue et at enim. Nulla suscipit condimentum nulla, non lobortis ligula venenatis at. Aenean eleifend pharetra ipsum, et aliquam tortor ornare sit amet. Praesent varius cursus aliquet.\r\n\r\nVestibulum ultricies ex erat, id ullamcorper arcu dignissim a. Vivamus id nisl id urna faucibus elementum. Sed egestas libero a mauris vulputate aliquam. Vivamus ut malesuada lacus. Duis consequat lacinia urna in ultricies. Sed fringilla odio in ornare maximus. Donec vestibulum volutpat magna in volutpat. Cras gravida ornare metus, non imperdiet nulla volutpat sit amet. Mauris justo nunc, mattis non ultricies non, pulvinar at leo.'),
(12, 'Université Pierre et Marie Curie', 'Kalenji', 102030405, 'TPE', 'Paris', '2 ans', 'Licence Informatique', 'acquis une culture et une expérience fiables leur permettant de s’adapter aux évolutions des sciences et techniques au cours de leur vie professionnelle', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor nulla eu tempus lacinia. Vestibulum lorem mauris, pharetra quis rhoncus sed, rutrum in massa. Integer metus est, interdum at rhoncus et, cursus eu urna. Proin commodo, ex sit amet porta convallis, quam justo malesuada ipsum, nec dignissim sem nibh vitae nibh. Sed dictum congue efficitur. Morbi elit mi, euismod eget orci sed, maximus accumsan dolor. Donec gravida volutpat metus, vitae molestie est laoreet sed. Quisque fermentum nec nibh a dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris eu dictum orci. Pellentesque sit amet diam congue, auctor turpis quis, vulputate nisl. Sed blandit quis lorem id ullamcorper. Etiam vitae metus tempus, sodales nisi eu, tristique turpis. Vivamus egestas felis a convallis fringilla. Praesent pharetra augue ut sem pellentesque, quis tincidunt sapien feugiat.\r\n\r\nNulla ultricies justo vel pretium congue. Donec pellentesque nec quam at imperdiet. Integer feugiat magna ut orci tempor, sit amet mattis neque euismod. Donec dictum porta efficitur. Donec consectetur nec nisl vel consequat. Vivamus auctor nunc libero, vel convallis dui pharetra in. Phasellus eleifend odio a justo faucibus congue et at enim. Nulla suscipit condimentum nulla, non lobortis ligula venenatis at. Aenean eleifend pharetra ipsum, et aliquam tortor ornare sit amet. Praesent varius cursus aliquet.\r\n\r\nVestibulum ultricies ex erat, id ullamcorper arcu dignissim a. Vivamus id nisl id urna faucibus elementum. Sed egestas libero a mauris vulputate aliquam. Vivamus ut malesuada lacus. Duis consequat lacinia urna in ultricies. Sed fringilla odio in ornare maximus. Donec vestibulum volutpat magna in volutpat. Cras gravida ornare metus, non imperdiet nulla volutpat sit amet. Mauris justo nunc, mattis non ultricies non, pulvinar at leo.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
