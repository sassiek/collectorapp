# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.34)
# Database: supercarcollectorapp
# Generation Time: 2021-06-01 13:45:41 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table supercars
# ------------------------------------------------------------

DROP TABLE IF EXISTS `supercars`;

CREATE TABLE `supercars` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `bhp` int(11) NOT NULL,
  `top speed (mph)` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

LOCK TABLES `supercars` WRITE;
/*!40000 ALTER TABLE `supercars` DISABLE KEYS */;

INSERT INTO `supercars` (`id`, `make`, `model`, `bhp`, `top speed (mph)`)
VALUES
	(1,'Aston Martin','One-77',750,220),
	(2,'Bugatti','Chiron',1479,261),
	(3,'Ferrari','488 Spider',660,203),
	(4,'Lamborghini','Huracan Performante',631,204),
	(5,'McLaren','720S',710,212),
	(6,'Porsche','911 GT3',503,198),
	(7,'Rimac','Nevera',1888,258),
	(8,'Ford','GT Mk II',647,216);

/*!40000 ALTER TABLE `supercars` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
