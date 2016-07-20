# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: nerf
# Generation Time: 2016-07-20 02:04:43 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table checkouts
# ------------------------------------------------------------

DROP DATABASE IF EXISTS `nerf`;
CREATE DATABASE `nerf`;
USE `nerf`;

DROP TABLE IF EXISTS `checkouts`;

CREATE TABLE `checkouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gun_id` int(11) NOT NULL,
  `people_id` int(11) NOT NULL,
  `time_checked_out` datetime NOT NULL,
  `time_checked_in` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `checkouts` WRITE;
/*!40000 ALTER TABLE `checkouts` DISABLE KEYS */;

INSERT INTO `checkouts` (`id`, `gun_id`, `people_id`, `time_checked_out`, `time_checked_in`)
VALUES
	(1,3,3,'2016-07-19 21:59:46',NULL),
	(2,2,4,'2016-07-19 21:59:46',NULL),
	(3,1,4,'2016-07-19 21:59:46',NULL),
	(4,4,7,'2016-07-19 21:59:46',NULL);

/*!40000 ALTER TABLE `checkouts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table guns
# ------------------------------------------------------------

DROP TABLE IF EXISTS `guns`;

CREATE TABLE `guns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `ammo_count` int(11) NOT NULL,
  `date_purchased` date NOT NULL,
  `location_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `guns` WRITE;
/*!40000 ALTER TABLE `guns` DISABLE KEYS */;

INSERT INTO `guns` (`id`, `name`, `ammo_count`, `date_purchased`, `location_id`)
VALUES
	(1,'NerfBlaster 3000',150,'2016-05-14',1),
	(2,'NerfFury 2.5',6,'2016-06-14',5),
	(3,'Rinky Dink HandGun',5,'2016-07-11',7),
	(4,'Rinky Dink HandGun 2.0',5,'2016-07-15',6),
	(5,'Devil\'s Revent Blaster',15,'2016-05-14',2);

/*!40000 ALTER TABLE `guns` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table locations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `locations`;

CREATE TABLE `locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `capacity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;

INSERT INTO `locations` (`id`, `description`, `capacity`)
VALUES
	(1,'Front office closet',15),
	(2,'Back office closet',15),
	(3,'Ben\'s super secret compartment',2),
	(4,'Dev area left gun rack',10),
	(5,'Dev area left right rack',10),
	(6,'Bathroom',3);

/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table people
# ------------------------------------------------------------

DROP TABLE IF EXISTS `people`;

CREATE TABLE `people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `people` WRITE;
/*!40000 ALTER TABLE `people` DISABLE KEYS */;

INSERT INTO `people` (`id`, `first_name`, `last_name`, `email`)
VALUES
	(1,'David','Almacy','david@engagedc.com'),
	(2,'Rob','Bartnichak','rob@engagedc.com'),
	(3,'Mike','Calvo','mike@engagedc.com'),
	(4,'Matthew','Deluca','matthew@engagedc.com'),
	(5,'Ryan','Fraase','ryan@engagedc.com'),
	(6,'Shane','Helm','shane@engagedc.com'),
	(7,'Spencer','Jones','specner@engagedc.com'),
	(8,'Margaret','Larkin','margaret@engagedc.com'),
	(9,'Benjamin ','Locher','benjamin@engagedc.com'),
	(10,'Leah','Metoudi','leah@engagedc.com'),
	(11,'Lee','Moran','lee@engagedc.com'),
	(12,'Aidan','Quinlan-Walshe','aidan@engagedc.com'),
	(13,'Erik','Rapprich','erik@engagedc.com'),
	(14,'Darby','Rosseau','darby@engagedc.com'),
	(15,'Patrick','Ruffini','patrick@engagedc.com'),
	(16,'Nick','Schaper','nick@engagedc.com'),
	(17,'Ryan','Slater','ryan@engagedc.com'),
	(18,'Jeff','Waddell','jeff@engagedc.com'),
	(19,'Mimi','Wertz','mimi@engagedc.com');

/*!40000 ALTER TABLE `people` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
