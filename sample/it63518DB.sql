-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: it63518
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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

--
-- Table structure for table `subTickets`
--

DROP TABLE IF EXISTS `subTickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subTickets` (
  `subTicketID` int(11) NOT NULL AUTO_INCREMENT,
  `ticketID` int(11) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `assignedTo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`subTicketID`),
  KEY `ticketID` (`ticketID`),
  CONSTRAINT `subTickets_ibfk_1` FOREIGN KEY (`ticketID`) REFERENCES `tickets` (`ticketID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subTickets`
--

LOCK TABLES `subTickets` WRITE;
/*!40000 ALTER TABLE `subTickets` DISABLE KEYS */;
INSERT INTO `subTickets` VALUES (1,NULL,'testing create ticket','23123123123',NULL,'open','admin'),(2,NULL,'test','test123',NULL,'open','arun'),(3,NULL,'testing create ticket','eestsetsdfsdfSD',NULL,'open','admin'),(4,3,'testing create ticket','testtesttest',NULL,'open','admin'),(5,10,'example defect','example',NULL,'open','admin'),(6,10,'asda','asdasd',NULL,'open','admin'),(7,2,'1212','12121212',NULL,'open','admin');
/*!40000 ALTER TABLE `subTickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tickets` (
  `ticketID` int(10) NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `assignedTo` varchar(255) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ticketID`),
  KEY `id` (`id`),
  CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tickets`
--

LOCK TABLES `tickets` WRITE;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
INSERT INTO `tickets` VALUES (1,'test','test description','fixed','Completed','arun',NULL),(2,'Defect Connecting to DB','credentials are being rejected even though they are correct','Working on it will get back to you','In Progress',NULL,NULL),(3,'test','testdesc','testcomments','open',NULL,NULL),(4,'test','testdesc','testcomments','open',NULL,2),(5,':subject',':description',NULL,':status',':assignedTo',NULL),(6,':subject',':description',NULL,':status',':assignedTo',NULL),(7,'testing create ticket','test123',NULL,'status','arun',NULL),(8,'test','qweqwe',NULL,'open','50',NULL),(9,'There is a Issue with logging in','User is having trouble accessing desktop',NULL,'open','arun',NULL),(10,'test','test','10','open','admin',NULL),(11,'qdw','asd',' ','open','admin',NULL);
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `islocked` tinyint(1) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','5f4dcc3b5aa765d61d8327deb882cf99',0,'admin'),(2,'arun','34819d7beeabb9260a5c854bc85b3e44',0,NULL),(3,'djkehoe','827ccb0eea8a706c4c34a16891f84e7b',NULL,'admin');
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

-- Dump completed on 2018-03-21 14:00:53
