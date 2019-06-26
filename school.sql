-- MySQL dump 10.13  Distrib 8.0.16, for macos10.14 (x86_64)
--
-- Host: localhost    Database: csc
-- ------------------------------------------------------
-- Server version 8.0.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `classes` (
  `classId` int(11) NOT NULL AUTO_INCREMENT,
  `ClassDate` varchar(20) NOT NULL,
  `classPeriod` int(10) DEFAULT NULL,
  `classMax` int(11) NOT NULL,
  `classVenueId` int(11) NOT NULL,
  `classCreated` datetime DEFAULT CURRENT_TIMESTAMP,
  `classUpdated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `classCode` varchar(45) NOT NULL,
  `classTitle` varchar(225) NOT NULL,
  PRIMARY KEY (`classId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classes`
--

LOCK TABLES `classes` WRITE;
/*!40000 ALTER TABLE `classes` DISABLE KEYS */;
INSERT INTO `classes` VALUES (1,'12/2/2019',1,30,2,'2019-06-25 15:53:32','2019-06-25 15:53:32','csc102','computer engineering'),(2,'12/2/2019',1,30,2,'2019-06-25 15:54:02','2019-06-25 15:54:02','csc103','Algorithm'),(3,'2019-06-08T08:00',1,30,2,'2019-06-26 10:11:06','2019-06-26 10:11:06','csc104','data structures');
/*!40000 ALTER TABLE `classes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `links` (
  `linkId` int(11) NOT NULL AUTO_INCREMENT,
  `linkUserId` int(11) NOT NULL,
  `linkClassId` int(11) NOT NULL,
  `linkCreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `linkUpdated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`linkId`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `links`
--

LOCK TABLES `links` WRITE;
/*!40000 ALTER TABLE `links` DISABLE KEYS */;
/*!40000 ALTER TABLE `links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metrics`
--

DROP TABLE IF EXISTS `metrics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `metrics` (
  `metricId` int(11) NOT NULL AUTO_INCREMENT,
  `metricClassId` int(11) NOT NULL,
  `metricTotal` int(11) NOT NULL,
  `metricCreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `metricUpdated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`metricId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metrics`
--

LOCK TABLES `metrics` WRITE;
/*!40000 ALTER TABLE `metrics` DISABLE KEYS */;
/*!40000 ALTER TABLE `metrics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rules`
--

DROP TABLE IF EXISTS `rules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `rules` (
  `rulesId` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `closeTime` datetime NOT NULL,
  PRIMARY KEY (`rulesId`,`title`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rules`
--

LOCK TABLES `rules` WRITE;
/*!40000 ALTER TABLE `rules` DISABLE KEYS */;
INSERT INTO `rules` VALUES (1,'close','2019-09-25 00:00:00');
/*!40000 ALTER TABLE `rules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` varchar(10) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Haruna Ahmadu','akhmadharuna@gmail.com','$2y$12$xU1vT9MEQBAnzaxOG6mj/eKnV7kvAIhFnKWoq2/AzujDUV.wjovj.','user','2019-06-24 08:40:25','2019-06-24 08:40:25'),(2,'Haruna Ahmadu','haruna@gmail.com','$2y$12$DsdMm42pZb6jl4DTfacEtOBtCCHK//Z1M36oMqaNAGMS/Zz6tuJDW','admin','2019-06-24 08:40:57','2019-06-24 08:40:57'),(3,'Haruna Ahmadu','una@gmail.com','$2y$12$Lmg8kKxoxfP3M6XG0o.5Re790e5Ct184n5qSee2CoBsjG0958DqwO','','2019-06-24 22:29:33','2019-06-24 22:29:33'),(4,'Haruna Ahmadu','runa@gmail.com','$2y$12$W9OJf0EjuLS5YjDDVE8mZeEPmJGd1HRZoZZ3W6AbABHjH7/coLcFa','user','2019-06-24 22:32:21','2019-06-24 22:32:21');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venues`
--

DROP TABLE IF EXISTS `venues`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `venues` (
  `venueId` int(11) NOT NULL AUTO_INCREMENT,
  `venue` varchar(225) NOT NULL,
  `venueCreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `venueUpdated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`venueId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venues`
--

LOCK TABLES `venues` WRITE;
/*!40000 ALTER TABLE `venues` DISABLE KEYS */;
INSERT INTO `venues` VALUES (1,'lt014','2019-06-24 22:25:53','2019-06-24 22:25:53'),(2,'lt011','2019-06-24 22:41:51','2019-06-24 22:41:51');
/*!40000 ALTER TABLE `venues` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-26 11:38:20
