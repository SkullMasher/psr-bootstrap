-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Ven 13 Juin 2014 à 09:40
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `trek`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE IF NOT EXISTS `actualite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `actualite`
--

INSERT INTO `actualite` (`id`, `titre`, `description`) VALUES
(1, 'Un Tibet en hiver, à Courchevel… tout l’hiver !', 'Suite au succès de l’évènement « Himalaya » à Courchevel lors de la saison 2009-2010, Frédéric Lemalet nous  invite à un nouveau voyage en images dans les hauteurs himalayennes avec son exposition « Un hiver au Tibet ». Grand spécialiste de la région puisqu’il y a passé plus de trois ans, il nous propose une immersion dans la  rudesse de l’hiver tibétain à travers une quarantaine d’images grand format (ci-contre, monastère de Ganzé,  dans la province du Kham, à 3 800 m d''altitude au mois de février 2011). On y découvrira la beauté des paysages  enneigés mais aussi des portraits, des regards, fiers et nobles et dont Frédéric, par son regard sensible, a sût  tirer une grande intimité et beaucoup d’émotion. L’exposition est visible du 03 décembre 2011 au 27 avril 2012,  une première partie se trouvant en plein air au cœur de la station de Courchevel tandis qu’une seconde partie est  exposée en intérieur, dans le bel hôtel Annapurna. L’exposition sera accompagnée tout au long de la saison de soirées  animées par des experts de la culture tibétaine.'),
(2, 'Festival d’Autrans : du 30/11 au 4/12', 'Pour la 28e année, le festival international du film de montagne d’Autrans vous convie sur les plateaux du Vercors  du 30 novembre au 4 décembre pour un long week-end grand spectacle. Dans un contexte et un cadre uniques où la  réalité et la fiction se rejoignent, une sélection internationale des meilleurs films documentaires et de fiction  de montagne seront projetés à Autrans. Le Festival établira pour la seconde fois son camp de base au centre du village  où se dérouleront de nombreuses activités, des rencontres vivantes et humaines et une soirée « Grande Fête de la  Montagne ».Parmi les événements cette année, à noter la diffusion en avant-première de La Nuit nomade, le premier  long-métrage de Marianne Chaud, '),
(3, '[Sécurité] Mali : KO, Mauritanie : OK', 'Après l’enlèvement, jeudi, de deux Français à Hombori et de trois ressortissants européens, vendredi, à Tombouctou  (un quatrième ayant été abattu lors de l’opération), le Quai d’Orsay a modifié sa fiche « Conseils aux voyageurs »  sur le Mali. Le ministère des Affaires étrangères (MAE) évoque ainsi « la zone située au nord d’une ligne Nioro du  Sahel-Mourdhia-Niono-Douentza-Koro », qui est désormais placée en zone rouge. Jusqu’à présent, la zone classée  « rouge » se limitait au nord du fleuve Niger, excluant donc Hombori.');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id`, `libelle`, `categorie`) VALUES
(1, 'Accueil', 'header'),
(2, 'Actualité', 'header'),
(3, 'Article', 'header'),
(4, 'Le mag', 'header'),
(5, 'Trek magazine', 'header'),
(6, 'RSS', 'header'),
(7, 'Qui sommes nous?', 'footer'),
(8, 'Plan du site', 'footer'),
(9, 'Mentions légales', 'footer'),
(10, 'Contact', 'footer');

-- --------------------------------------------------------

--
-- Structure de la table `menu_gauche`
--

CREATE TABLE IF NOT EXISTS `menu_gauche` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `menu_gauche`
--

INSERT INTO `menu_gauche` (`id`, `titre`) VALUES
(1, 'Contact'),
(2, 'Agenda'),
(3, 'Géopolitique'),
(4, 'Culture'),
(5, 'Environnement'),
(6, 'Equipement'),
(7, 'Photo'),
(8, 'Pedago'),
(9, 'Fiche pays'),
(10, 'Topos trek'),
(11, 'Jeux concours'),
(12, 'Offre d''emploi');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
