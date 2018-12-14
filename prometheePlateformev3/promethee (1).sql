-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 13 déc. 2018 à 23:53
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `proposer_formations`
--

INSERT INTO `proposer_formations` (`id`, `nom_etablissement`, `nom`, `telephone`, `taille_entreprise`, `Ville`, `duration`, `titre_poste`, `chapo`, `description_complete`) VALUES
(1, 'Institut VEDECOM', 'Beziers la fosse', 101010101, 'ETI', 'Versailles (78)', '3 ans', 'Ingenieur de recherche informatique', 'Realiser des travaux de recherche et d exploitation', 'L Institut VEDECOM est un Institut français de recherche et de formation dédié à la mobilité individuelle décarbonée et durable qui rassemble des partenaires publics (Universités, Écoles d ingénieurs …) et privés (constructeurs, équipementiers, sociétés de services,...). Il a été sélectionné en tant qu Institut de Transition Energétique (ITE) dans le cadre du Programme des Investissements d Avenir (PIA) de l Etat Français.  VEDECOM ambitionne de devenir un leader européen en matière d innovation dans les domaines des véhicules électrifiés, autonomes et connectés grâce à des infrastructures et services de mobilité et d énergie partagée.\r\n'),
(2, 'Université Pierre et Marie Curie', 'Kalenji', 102030405, 'TPE', 'Paris', '2 ans', 'Licence Informatique', 'Recherche personne très polyvalente pour une Site Web d objet électronique', '- La gestion et le traitement des commandes du site internet : Analyse des commandes et validation, préparation et envoie des commandes..\r\n- Gestion de l\'enregistrement du SAV : Enregistrement des colis retour client.\r\n- La gestion du stock, et le réapprovisionnement des boutiques.\r\n- Faire des compte rendu, des fiche de ventes que ce soit du site ou des différentes boutiques.\r\n- Réception et enregistrement des palettes\r\n- Bonne communication avec l\'ensemble des équipes (Service client, Techniciens, e-commerce, vendeurs, Marketing,....)\r\n- La bonne tenue de l’entrepôt, avec une mise en place et une organisation quotidienne, des produits aux bons emplacements .\r\n- Mise en place de nouveaux process et outils.\r\n- Une bonne gestion de tous les outils informatiques et logiciels\r\n- Parler Anglais\r\nUne personne sérieuse, motivée et invest\r\n'),
(3, 'EMPRUNTE DIGITAL', 'Kalenji', 102030405, 'TPE', 'Paris', '2 ans', 'Assistante de gestion PME PMI', 'Vous êtes à la recherche d\'une entreprise ambitieuse et dynamique ? ', 'Compétences requises :\r\nVous disposez d’un bac +2 ou +3 et avez au moins trois ans d’expérience dans la gestion d’une PME-PMI.\r\nVous êtes enthousiaste, chaleureux et avez un excellent sens du service.\r\nVous êtes rigoureux, organisé et aimez travailler en équipe.\r\nVous avez de bonnes connaissances en bureautique (Microsoft Office) ainsi que dans l’utilisation d’un ERP.\r\nVous avez envie d\'intégrer une entreprise solide et de réussir dans votre prochain poste, postulez !\r\nType d\'emploi : CDI\r\nSalaire : 25 000,00€ à 33 000,00€ /an\r\n'),
(4, 'SNCF', 'BEZIERS LA FOSSE', 102030444, 'GE', 'Paris 8e', '3 ans', 'Comercial B to B', 'Votre mission en 3 mots : prospecter, conclure et élever !', '- chercher des nouveaux clients en prospectant par téléphone et en faisant jouer votre imagination pour trouver des moyens efficaces de les attirer vers nous,\r\n- envoyer les propositions commerciales et suivre les propositions jusqu\'à l\'obtention de la signature.\r\n- élever la clientèle existante sur des produits connexes\r\nVotre profil en 3 mots : rigoureux ,enjoué et efficace !\r\n- Vous êtes organisé et rigoureux.\r\n- Dynamique et volontaire, votre bonne humeur doit s\'entendre à l\'autre bout du fil. Vous passez très bien au téléphone, votre français (oral et écrit) doit être irréprochable.\r\n- Une expérience dans l\'informatique et/ou les imprimantes est nécessaire. Nos activités : la gestion documentaire des entreprises (impression, Ged, Travail Collaboratif) et la gestion de leurs solutions informatiques.\r\nType d\'emploi : Temps plein\r\n'),
(5, 'B2B Optimum', 'B2B Optimum', 102030444, 'ETI', 'La Défense (92)', '1 an', 'Business Developer', 'Nous recherchons un business developer BtoB sur la zone La Défense', 'Vos Missions au quotidien :\r\nEn tant que Business Developer BtoB (H/F), vous serez amené à :\r\nProspecter et vendre nos produits à usages B2B (cocktail, plateaux repas, séminaires...) dans le secteur de La Défense - Paris Ouest\r\nNégocier et suivre des partenariats commerciaux\r\nIdentifier les opportunités de développement de nos clients existants et futurs.\r\nParticiper à la définition de nouvelles offres commerciales\r\nRécolter et analyser les besoins de nos clients afin de définir la stratégie et les objectifs commerciaux à destination des comptes clés.\r\nGérer la partie administrative de ses propres comptes (devis, factures, relances…).\r\nLe tout avec l aide et le support de notre Head of Sales.\r\nLe Profil Que L on Recherche :\r\nPermis B indispensable.\r\nÉcole de commerce / BTS commercial ou équivalent.\r\nUne première expérience réussie en tant que business developer (de préférence en BtoB).\r\nUne passion certaine pour la bonne cuisine.\r\nHomme ou femme de terrain avec un excellent sens du relationnel, chaleureux(se) et souriant(e)\r\nCe que l on vous propose :\r\nUn véhicule de fonction\r\nUn téléphone + ordinateur + tablette\r\n30 000€ brut/an\r\nDe bons repas chaque jour\r\nType d emploi : CDI\r\nSalaire : 30 000,00e /an\r\n'),
(6, 'HERTZ', 'HERTZ FRANCE', 102030506, 'GE', 'Montigny-Le-Bretonneux (78)', '3 ans', 'Analyste / Logicisticien chez Hertz', 'C’est à votre tour de nous rejoindre pour vivre une aventure formatrice et passionnante !', 'Vous aimez appréhender les situations dans leur ensemble ?\r\nVous êtes à la recherche de l’optimisation des process et de l’utilisation des activités dont vous avez la charge ?\r\nN’hésitez plus !\r\nNous recherchons un ANALYSTE LOGISTICIEN H/F en CDI\r\npour notre siège social sur MONTIGNY-LE-BRETONNEUX (78)\r\nDirectement rattaché à la Direction Supply chain, nous comptons sur vous pour :\r\nProcéder à l’analyse de l’activité :\r\nIdentification des besoins du Réseau en terme de Mix & Volume (pilotage du niveau de flotte)\r\nPartage de vos analyses de besoin et de vos recommandations avec les équipes Pricing et opérations pour l’optimisation du revenu, la gestion des offsells, et l\'objectif fleet efficiency\r\nSuivi de la Flotte Hors réseau (Franchisés, Etranger, Reprises Garage, ateliers maintenance)\r\nIdentification des sorties Flotte (Qualité et quantité)\r\n\r\nAssurer la gestion des Mouvements de Flotte :\r\nPlanification des Transferts\r\nOptimisation des transferts en travaillant le schéma Logistique (convoyeurs, Transporteurs, réseau SNCF …)\r\nOptimisation du potentiel et de la répartition des Livraisons de véhicules neufs sur le périmètre\r\nCadencement des sorties\r\n'),
(7, 'Holland Bikes', 'Antoine Bikes', 605040506, 'PME', 'Paris (75)', '6 mois', 'Stage assistant E-commerce', 'assister à la refonte des processus internes.', 'Votre mission\r\nDans le cadre de la stratégie web de l’entreprise, votre mission portera sur la définition et la mise en oeuvre d\'un nouveau processus de gestion des commandes et de l’assistance des clients (en ligne et par téléphone).\r\nCeci implique\r\n1. Assister au traitement des commandes clients, au suivi de l\'état des stocks et à l\'organisation des commandes de réassort chez les fournisseurs.\r\n2. Assister au service client (email, téléphone) et piloter les actions en fonction des cas spécifiques.\r\n3. Assister à la valorisation de l\'offre du site grâce à la conception et la mise en ligne des fiches produits.\r\n4. Effectuer des veilles des concurrents et de nouvelles tendances du marché du vélo mobilité.\r\n5. Analyser les processus de gestion internes et proposer des améliorations.\r\nVous travaillerez sous la responsabilité de la manager e-marketing/e-commerce et serez amené(e) à collaborer avec des interlocuteurs variés (clients, fournisseurs, transporteurs, logisticiens, experts internes, ...). Vous aurez ainsi une vision 360° du e-commerce au sein de l\'entreprise.\r\nVotre profil\r\nDe formation école de commerce ou universitaire, vous souhaitez découvrir ou approfondir vos connaissances de l\'environnement du e-commerce. Sérieux, autonome, organisé, ponctuel et sociable, votre capacité à effectuer des tâches avec une grande rigueur et votre envie de vous impliquer sont vos atouts pour réussir dans ce stage.\r\n'),
(8, 'ACDE PUBLIPROVENCE', 'antoine griezzman', 607712820, 'PME', 'Paris 8e (75)', '1 an', 'Secrétaire standardiste', 'Pour standard extérieur cabinets d\'avocats et professions libérales\r\n', 'lundi au vendredi, entre 15 à 20h par semaine selon disponibilités.\r\nPour standard extérieur cabinets d\'avocats et professions libérales, assurer la prise personnalisée de messages téléphoniques sur informatique pour 150 clients.\r\nType d\'emploi : CDI\r\nSalaire : 10,00€ à 11,00€ /heure\r\nLangue:\r\nAnglais (Requis)\r\n'),
(9, 'FNAC', 'BEZIERS', 102030405, 'PME', 'Plaisir (78)', '2 semaines', 'Serveur', 'Assurer le service au Sheraton', 'Vous devrez assurer le service au restaurant du Sheraton à Plaisir.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
