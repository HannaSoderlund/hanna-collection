# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.35)
# Database: hanna-collection
# Generation Time: 2021-09-29 13:21:20 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table vegetables
# ------------------------------------------------------------

DROP TABLE IF EXISTS `vegetables`;

CREATE TABLE `vegetables` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `common-name` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `cultivar-name` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `family` enum('Solanaceae','Fabaceae','Brassicaceae','Asteraceae','Apiaceae','Amarylidaceae','Chenopodiaceae','Cucurbitaceae') COLLATE latin1_general_ci DEFAULT NULL,
  `image` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `likes` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `dislikes` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

LOCK TABLES `vegetables` WRITE;
/*!40000 ALTER TABLE `vegetables` DISABLE KEYS */;

INSERT INTO `vegetables` (`id`, `common-name`, `cultivar-name`, `family`, `image`, `likes`, `dislikes`)
VALUES
	(1,'Tomato','Aurora','Solanaceae','tomato.jpeg','Rich soil. Sun. Some support. Weekly feeding during fruiting.','Wet summers. Lack of calcium. Erratic watering.'),
	(2,'Climbing French bean','Lazy Housewife','Fabaceae','beans.jpeg','Something to climb up. Lots of water when pods are forming.','Slugs when young. '),
	(3,'Pak choi','Joi Choi','Brassicaceae','pakchoi.jpeg','Decent amount of water to prevent bolting. ','Flea beetles.'),
	(4,'Turnip','Snowball','Brassicaceae','turnip.jpeg','Lovely cool, moist soil.','Cabbage root fly.'),
	(5,'Lettuce','Reine des Glaces','Asteraceae','lettuce.jpeg','Frogs to help defend against slugs.','Hot hot sun.'),
	(6,'Carrot','Touchon','Apiaceae','carrot.jpeg','Loose soil, a dry spring.','Too much nitrogen and you\'ll have foliage but no roots :('),
	(7,'Mustard greens','Dragon\'s Tongue','Brassicaceae','mustard.jpeg','Enjoys the company of onions.','But not of tomatoes!'),
	(8,'Broccoli','Calabrese Chevalier F1','Brassicaceae','broccoli.jpeg','A light frost and a quick blanch.','The heat of midsummer.'),
	(9,'Spring onion','White Lisbon','Amarylidaceae','onion.jpeg','To be kept moist while young.','Competition from weeds.'),
	(11,'Kale','Cavolo nero','Brassicaceae','cavolo.jpeg','Cold British winters - frost improves flavour.','Cramped conditions. '),
	(12,'Beetroot','Wodan','Chenopodiaceae','beetroot.jpeg','A nice vinegar bath. ','Stony soil and hungry birds.');

/*!40000 ALTER TABLE `vegetables` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
