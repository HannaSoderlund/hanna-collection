# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.35)
# Database: hanna-collection
# Generation Time: 2021-09-28 08:28:43 +0000
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
	(1,'Tomato','Aurora','Solanaceae','','Rich soil. Sun. Some support. Weekly feeding during fruiting.','Wet summers. Lack of calcium. Erratic watering.'),
	(2,'Climbing French bean','Lazy Housewife','Fabaceae','','likes...','dislikes...'),
	(3,'Pak choi','Joi Choi','Brassicaceae','','likes...','dislikes...'),
	(4,'Turnip','Snowball','Brassicaceae','','likes...','dislikes...'),
	(5,'Lettuce','Reine des Glaces','Asteraceae','','likes...','dislikes...'),
	(6,'Carrot','Touchon','Apiaceae','','likes...','dislikes...'),
	(7,'Mustard greens','Dragon\'s Tongue','Brassicaceae','','likes...','dislikes...'),
	(8,'Broccoli','Calabrese Chevalier F1','Brassicaceae','','likes...','dislikes...'),
	(9,'Spring onion','White Lisbon','Amarylidaceae','','likes...','dislikes...'),
	(10,'Cabbage','Marabel F1','Brassicaceae','','likes...','dislikes...'),
	(11,'Kale','Cavolo nero','Brassicaceae','','likes...','dislikes...'),
	(12,'Beetroot','Wodan','Chenopodiaceae','','likes...','dislikes...'),
	(13,'Lettuce','Rossa di Trevise','Brassicaceae','','likes...','dislikes...'),
	(14,'Mustard greens','Nine Headed Bird','Brassicaceae','','likes...','dislikes...'),
	(15,'Courgette','Romanesco','Cucurbitaceae','','likes...','dislikes...'),
	(16,'Cucumber','Party Time','Cucurbitaceae','','likes...','dislikes...'),
	(17,'Parsley','Gigante di Napoli','Apiaceae','','likes...','dislikes...'),
	(18,'Fennel','Colossal','Apiaceae','','likes...','dislikes...'),
	(19,'Leek','Blue Solaise','Amarylidaceae','','likes...','dislikes...');

/*!40000 ALTER TABLE `vegetables` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
