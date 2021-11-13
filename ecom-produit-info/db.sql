-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 15 Janvier 2020 à 10:00
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `db`
--

-- --------------------------------------------------------

--
-- Structure de la table `ad_log`
--

CREATE TABLE IF NOT EXISTS `ad_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(20) DEFAULT NULL,
  `apwd` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `aname` (`aname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `ad_log`
--

INSERT INTO `ad_log` (`id`, `aname`, `apwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(20) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(17, '127.0.0.1', 1),
(19, '::1', 0),
(20, '127.0.0.1', 1);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `cat_title` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'PC'),
(3, 'PC Bureau'),
(4, 'Cameras'),
(5, 'Smartphone');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_clt` int(11) NOT NULL AUTO_INCREMENT,
  `nom_clt` varchar(30) NOT NULL,
  `pren_clt` varchar(35) NOT NULL,
  `adr_post_clt` varchar(255) NOT NULL,
  `email_clt` varchar(100) NOT NULL,
  `sexe_clt` varchar(10) NOT NULL,
  `tel_clt` int(15) NOT NULL,
  `date_nes_clt` date NOT NULL,
  `nom_utul_clt` varchar(30) NOT NULL,
  `mdp_clt` varchar(255) NOT NULL,
  PRIMARY KEY (`id_clt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_clt`, `nom_clt`, `pren_clt`, `adr_post_clt`, `email_clt`, `sexe_clt`, `tel_clt`, `date_nes_clt`, `nom_utul_clt`, `mdp_clt`) VALUES
(1, 'ikhlass', 'Ammar', 'qsdqsd', 'safaalatrech@gmail.com', 'F', 12345678, '2019-01-09', 'ikhlass', 'ikhlass');

-- --------------------------------------------------------

--
-- Structure de la table `marques`
--

CREATE TABLE IF NOT EXISTS `marques` (
  `brand_id` int(100) NOT NULL AUTO_INCREMENT,
  `brand_title` text NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `marques`
--

INSERT INTO `marques` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'Asus'),
(3, 'Dell'),
(4, 'Toshiba'),
(5, 'Samsung');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `prd_id` int(100) NOT NULL AUTO_INCREMENT,
  `prd_cat` int(100) NOT NULL,
  `prd_brand` int(100) NOT NULL,
  `prd_title` varchar(255) NOT NULL,
  `prd_price` int(100) NOT NULL,
  `prd_desc` text NOT NULL,
  `prd_img` text NOT NULL,
  `prd_keyword` text NOT NULL,
  PRIMARY KEY (`prd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`prd_id`, `prd_cat`, `prd_brand`, `prd_title`, `prd_price`, `prd_desc`, `prd_img`, `prd_keyword`) VALUES
(14, 4, 5, 'Samsung webcam', 6500, 'digital webcam with optical zoom', 'camera.png', 'webcam,samsung,camera,samsung camera,cameras'),
(15, 5, 7, 'Motorola maxi m23', 3800, '5 MP Primary Camera\n2 MP Secondary Camera\nDual Sim (GSM + UMTS)\nAndroid v4.4 (KitKat)', '20140904-193820-moto-e.jpg', 'motorola mobile,android,motorola,android phone,android mobiles'),
(16, 5, 7, 'Moto-Turbo mx888', 4800, '\nAndroid v4.4.4 OS\nDual Sim (GSM + GSM)\n5 inch HD Screen\n8 MP Primary Camera', '20150312-04712-moto-turbo.jpg', 'motorola mobile,android,motorola,android phone,android mobiles'),
(17, 5, 2, 'Asus568-molixva', 4300, '1 GB RAM\n8 MP Primary Camera\n2 MP Secondary Camera\n1.2 Ghz Quad Core', 'asus-ze550ml-ze550ml-1a076ww-125x125-imae6qafassv5kcz.jpeg', 'Asus mobile,android,asus,android phone,android mobiles'),
(18, 5, 5, 'Samsung galaxy ace', 5000, '5 Inch Super AMOLED ...\nDual SIM (LTE + GSM)\n13 MP | 5 MP Camera ...\n2600 mAh Battery', 'samsung-galaxy-ace-nxt-sm-g313hrwdinu-sm-g313hrwdins-125x125-imae2fjadm7qrghm.jpeg', 'samsung mobile,android,samsung,android phone,android mobiles,galaxy,ace'),
(19, 2, 8, 'Intel DZ68BC Motherboard', 6999, 'form factor:ATX\r\nCore i7\r\nLGA1155\r\nDDR3 SDRAM\r\nGigabit Ethernet', '$_35.JPG', 'motherboard,intel,core i7,ethernet'),
(20, 2, 2, 'ASUS M5A78L-M LX Motherboard', 3895, 'Form Factor Micro-ATX\r\nSocket type AM3+\r\nAudio Codec Realtec ALC887\r\nBuffered Memory', '18279201679984motherboard138606973113875996181389273744.jpg', 'asus,gaming,raltek,motherboard'),
(21, 1, 1, 'HP Pavilion P245SA', 33990, 'OS W8.1\r\nNotebook\r\n1TB Hard disk\r\n15.6" screen size ', '$_35(2).JPG', 'notebook,1tb,hp,laptop'),
(23, 4, 4, 'Nikon Coolpix P600  Optical Zoom', 18000, '16.1 Megapixel,\r\ncolor:black,\r\n60X Otical Zoom,\r\nISO 100 to 6400 Senstivity,\r\n3 inch vari Angle Display', 'digital-camera-391444626208.jpg', 'nikon,camera,black,zoom,cameras');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
