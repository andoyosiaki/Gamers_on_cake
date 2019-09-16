-- MySQL dump 10.13  Distrib 5.6.44, for Linux (x86_64)
--
-- Host: localhost    Database: gamers
-- ------------------------------------------------------
-- Server version	5.6.44

<<<<<<< HEAD
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
=======
CREATE DATABASE gamers;
USE gamers;
>>>>>>> origin/master

--
-- Table structure for table `posts`
--

<<<<<<< HEAD
DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
=======
>>>>>>> origin/master
CREATE TABLE `posts` (
  `title` varchar(255) NOT NULL,
  `hardware` varchar(255) NOT NULL,
  `texts` text NOT NULL,
  `image` text NOT NULL,
  `itemurl` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) NOT NULL,
  `authoricon` int(11) NOT NULL,
  `authorname` varchar(255) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
<<<<<<< HEAD
/*!40101 SET character_set_client = @saved_cs_client */;
=======
>>>>>>> origin/master

--
-- Dumping data for table `posts`
--

<<<<<<< HEAD
LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

=======
>>>>>>> origin/master
--
-- Table structure for table `users`
--

<<<<<<< HEAD
DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
=======
>>>>>>> origin/master
CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
<<<<<<< HEAD
/*!40101 SET character_set_client = @saved_cs_client */;
=======

>>>>>>> origin/master

--
-- Dumping data for table `users`
--

<<<<<<< HEAD
LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('takahasio','$2y$10$QaqAFMB5q2RKyhlk92vbjeg0mW118A3T9PYzufMp70cfFr8bdsVti','user','0',1),('takahas','$2y$10$aJ.Vm22a8FZ/m5D6tFYw1uMyOnvNofsBUPh1Zjld2qQS/ZZRoSbqe','user','0',2),('test','$2y$10$Cekrw5LZOtCv.QuqIaSA.u7mU.0XA7mP239lrEkNEKttDo5qGSWf.','user','0',3);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
=======
INSERT INTO `users` VALUES ('test','$2y$10$Cekrw5LZOtCv.QuqIaSA.u7mU.0XA7mP239lrEkNEKttDo5qGSWf.','admin','0',1);

>>>>>>> origin/master

-- Dump completed on 2019-09-02  8:34:19
