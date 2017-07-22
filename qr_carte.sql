-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `carte`;
CREATE TABLE `carte` (
  `id_carte` int(11) NOT NULL AUTO_INCREMENT,
  `actif` int(11) NOT NULL DEFAULT '0',
  `numero_carte` int(11) NOT NULL,
  `date_activation` datetime DEFAULT NULL,
  `date_expiration` datetime DEFAULT NULL,
  PRIMARY KEY (`id_carte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `chauffeur`;
CREATE TABLE `chauffeur` (
  `id_chauffeur` int(11) NOT NULL AUTO_INCREMENT,
  `type_piece` int(11) NOT NULL,
  `numero_piece_chauffeur` varchar(15) NOT NULL,
  `nom_chauffeur` char(20) NOT NULL,
  `prenom_chauffeur` char(20) NOT NULL,
  `sexe_chauffeur` char(1) NOT NULL,
  `date_naissance_chauffeur` datetime NOT NULL,
  `lieu_naissance_chauffeur` varchar(20) NOT NULL,
  `ville_chauffeur` varchar(20) NOT NULL,
  `commune_chauffeur` varchar(10) NOT NULL,
  `quartier_chauffeur` varchar(30) DEFAULT NULL,
  `numero_tel_chauffeur` int(11) NOT NULL,
  `numero2_tel_chauffeur` int(11) DEFAULT NULL,
  `email_chauffeur` varchar(20) DEFAULT NULL,
  `boite_postale` varchar(15) DEFAULT NULL,
  `secret` varchar(80) DEFAULT NULL,
  `date_inscription` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id_chauffeur`),
  UNIQUE KEY `uni_numero` (`numero_tel_chauffeur`),
  UNIQUE KEY `uni_numero2` (`numero2_tel_chauffeur`),
  UNIQUE KEY `uni_secret` (`secret`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `chauffeur` (`id_chauffeur`, `type_piece`, `numero_piece_chauffeur`, `nom_chauffeur`, `prenom_chauffeur`, `sexe_chauffeur`, `date_naissance_chauffeur`, `lieu_naissance_chauffeur`, `ville_chauffeur`, `commune_chauffeur`, `quartier_chauffeur`, `numero_tel_chauffeur`, `numero2_tel_chauffeur`, `email_chauffeur`, `boite_postale`, `secret`, `date_inscription`) VALUES
(1,	0,	'aex12',	'papou',	'drissa',	'M',	'2000-12-03 12:03:00',	'abobo',	'abidjan',	'yopougon',	'niangon nord',	8103968,	NULL,	NULL,	NULL,	NULL,	NULL),
(2,	0,	'aes12',	'richard',	'adou',	'M',	'2000-12-03 12:03:00',	'cocody',	'abidjan',	'2 plateaux',	'angre',	8103963,	NULL,	NULL,	NULL,	NULL,	NULL),
(3,	0,	'kon12',	'kone',	'landry',	'M',	'2000-12-03 12:03:00',	'riviera',	'abidjan',	'abobo',	'pk18',	8103928,	NULL,	NULL,	NULL,	NULL,	NULL),
(4,	0,	'her12',	'hermann',	'paul',	'M',	'2000-12-03 12:03:00',	'zone4',	'abidjan',	'yopougon',	'niangon sud',	8303968,	NULL,	NULL,	NULL,	NULL,	NULL),
(5,	0,	'aex12',	'manou',	'splace',	'M',	'2000-12-03 12:03:00',	'abobo',	'abidjan',	'yopougon',	'niangon nord',	9103968,	NULL,	NULL,	NULL,	NULL,	NULL),
(6,	0,	'aex12',	'papou',	'drissa',	'M',	'2000-12-03 12:03:00',	'abobo',	'abidjan',	'yopougon',	'niangon nord',	8453968,	NULL,	NULL,	NULL,	NULL,	NULL),
(7,	0,	'aex12',	'papou',	'drissa',	'M',	'2000-12-03 12:03:00',	'abobo',	'abidjan',	'yopougon',	'niangon nord',	8873968,	NULL,	NULL,	NULL,	NULL,	NULL),
(8,	0,	'aex12',	'papou',	'drissa',	'M',	'2000-12-03 12:03:00',	'abobo',	'abidjan',	'yopougon',	'niangon nord',	8097968,	NULL,	NULL,	NULL,	NULL,	NULL);

DROP TABLE IF EXISTS `client`;
CREATE TABLE `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `type_piece` varchar(12) NOT NULL,
  `numero_piece` varchar(15) NOT NULL,
  `nom_client` char(20) NOT NULL,
  `prenom_client` char(20) NOT NULL,
  `sexe_client` char(1) NOT NULL,
  `date_naissance_client` date DEFAULT NULL,
  `lieu_naissance_client` varchar(20) NOT NULL,
  `ville_client` varchar(20) NOT NULL,
  `commune_client` varchar(30) NOT NULL,
  `quartier_client` varchar(30) NOT NULL,
  `numero_tel_client` varchar(15) NOT NULL,
  `numero2_tel_client` varchar(15) DEFAULT NULL,
  `email_client` varchar(255) DEFAULT NULL,
  `boite_postale` varchar(15) DEFAULT NULL,
  `id_qr_carte` varchar(80) DEFAULT NULL,
  `secret` varchar(80) DEFAULT NULL,
  `date_inscription` datetime DEFAULT NULL,
  `qr` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_client`),
  KEY `uni_secret` (`secret`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `client` (`id_client`, `type_piece`, `numero_piece`, `nom_client`, `prenom_client`, `sexe_client`, `date_naissance_client`, `lieu_naissance_client`, `ville_client`, `commune_client`, `quartier_client`, `numero_tel_client`, `numero2_tel_client`, `email_client`, `boite_postale`, `id_qr_carte`, `secret`, `date_inscription`, `qr`) VALUES
(1,	'cni',	'axtr0012',	'HOUESSINON',	'Landry',	'M',	'1996-02-17',	'abobo',	'abidjan',	'ypougon',	'niangon nord',	'87460257',	'41922375',	'houessinonlandry@gmail.com',	'',	'0',	'5972ec23abbedON5972ec23abbf4tr00125972ec23abbfaLand',	'2017-07-22 06:09:39',	'Qr/5972ec23abbedON5972ec23abbf4tr00125972ec23abbfaLand/5972ec23abbedON5972ec23abbf4tr00125972ec23abbfaLand.png');

-- 2017-07-22 07:53:24
