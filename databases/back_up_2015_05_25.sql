
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 26 Mai 2015 à 01:26
-- Version du serveur: 5.1.71
-- Version de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `u888448271_ntci`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `url_photo_admin` varchar(200) NOT NULL,
  `name_admin` varchar(150) NOT NULL,
  `surname_admin` varchar(200) NOT NULL,
  `mail_admin` varchar(255) NOT NULL,
  `login_admin` varchar(50) NOT NULL,
  `pass_admin` varchar(100) NOT NULL,
  `agency` varchar(5) NOT NULL,
  `screen` varchar(5) NOT NULL,
  `ads` varchar(5) NOT NULL,
  `admin` varchar(5) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `url_photo_admin`, `name_admin`, `surname_admin`, `mail_admin`, `login_admin`, `pass_admin`, `agency`, `screen`, `ads`, `admin`) VALUES
(1, '', 'Traore', 'Harouna', 'harounclub@gmail.com', 'harounclub@gmail.com', '123', '1', '0', '0', '0'),
(2, '', 'Conde', 'Franck', 'franck@gmail.com', 'franck', '123', '1', '1', '1', ''),
(3, '', 'Ble', 'Romuald', 'able@ravelabs.com', 'abel', 'abel123', '1', '0', '0', '');

-- --------------------------------------------------------

--
-- Structure de la table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id_ads` int(11) NOT NULL AUTO_INCREMENT,
  `id_agency` int(11) NOT NULL,
  `id_screen` int(11) NOT NULL,
  `url_ads` varchar(255) NOT NULL,
  `text_ads` varchar(255) NOT NULL,
  `begin_ads` date NOT NULL,
  `end_ads` date NOT NULL,
  PRIMARY KEY (`id_ads`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Structure de la table `agency`
--

CREATE TABLE IF NOT EXISTS `agency` (
  `id_agency` int(11) NOT NULL AUTO_INCREMENT,
  `name_agency` varchar(255) NOT NULL,
  `location_agency` varchar(200) NOT NULL,
  `long_agency` varchar(200) NOT NULL,
  `lat_agency` varchar(200) NOT NULL,
  `type_agency` int(11) NOT NULL,
  PRIMARY KEY (`id_agency`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `agency`
--

INSERT INTO `agency` (`id_agency`, `name_agency`, `location_agency`, `long_agency`, `lat_agency`, `type_agency`) VALUES
(2, 'Plateaux sud', 'Abidjan,Plateau,BCAO', '5.123', '6.123', 1),
(3, 'Adjame Nangui', 'Abidjan,Adjame,Nangui-abrogoua', '5.123', '6.123', 1),
(5, 'Plateaux Centre', 'Abidjan,Rue des banques', '5.123', '6.546', 1);

-- --------------------------------------------------------

--
-- Structure de la table `agency_type`
--

CREATE TABLE IF NOT EXISTS `agency_type` (
  `id_agencetype` int(11) NOT NULL AUTO_INCREMENT,
  `name_agencetype` varchar(200) NOT NULL,
  `comment_agencetype` varchar(255) NOT NULL,
  PRIMARY KEY (`id_agencetype`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `agency_type`
--

INSERT INTO `agency_type` (`id_agencetype`, `name_agencetype`, `comment_agencetype`) VALUES
(1, 'Principale', 'ce somt des agences principale'),
(2, 'Secondaire', 'ce sont des agences secondaires');

-- --------------------------------------------------------

--
-- Structure de la table `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
  `id_counter` int(11) NOT NULL AUTO_INCREMENT,
  `date_counter` date NOT NULL,
  `id_agency` int(11) NOT NULL,
  `id_screen` int(11) NOT NULL,
  `value_counter` int(11) NOT NULL,
  `begin_counter` time NOT NULL,
  `end_counter` time NOT NULL,
  `id_admin` int(11) NOT NULL,
  PRIMARY KEY (`id_counter`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `screen`
--

CREATE TABLE IF NOT EXISTS `screen` (
  `id_screen` int(11) NOT NULL AUTO_INCREMENT,
  `brand_screen` varchar(100) NOT NULL,
  `width_screen` varchar(50) NOT NULL,
  `technologie_screen` varchar(100) NOT NULL,
  `serial_screen` varchar(150) NOT NULL,
  PRIMARY KEY (`id_screen`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `screen`
--

INSERT INTO `screen` (`id_screen`, `brand_screen`, `width_screen`, `technologie_screen`, `serial_screen`) VALUES
(1, 'Nasco', '42 pouces', 'LED', '4562178LGD'),
(2, 'Samsung', '42 pouces', 'Plasma', 'S56478KL'),
(3, 'Huawei', '42 pouces', 'LED', 'HU15456444');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
