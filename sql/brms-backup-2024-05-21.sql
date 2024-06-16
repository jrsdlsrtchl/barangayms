-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: brmsdb
-- ------------------------------------------------------
-- Server version 	10.4.24-MariaDB
-- Date: Tue, 21 May 2024 21:45:27 +0800

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40101 SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_activity`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_activity` (
  `activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `resident_id` int(11) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `login_time` datetime NOT NULL,
  `logout_time` datetime NOT NULL,
  PRIMARY KEY (`activity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_activity`
--

LOCK TABLES `tbl_activity` WRITE;
/*!40000 ALTER TABLE `tbl_activity` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_activity` VALUES (1,20,'Chrome','::1','2024-04-03 02:22:34','2024-04-03 02:30:04'),(2,20,'Chrome','::1','2024-04-03 02:48:42','2024-04-03 02:49:57'),(3,20,'Chrome','::1','2024-04-03 02:50:06','2024-04-03 02:50:20'),(4,37,'Chrome','::1','2024-04-03 02:50:30','2024-04-03 02:51:08'),(5,20,'Chrome','::1','2024-04-04 01:57:26','0000-00-00 00:00:00'),(6,20,'Chrome','::1','2024-04-04 02:00:32','0000-00-00 00:00:00'),(7,20,'Chrome','::1','2024-04-16 12:05:28','2024-04-16 12:05:59'),(8,20,'Edge','::1','2024-04-16 12:06:20','2024-04-16 12:06:35'),(9,20,'Chrome','::1','2024-04-16 01:27:58','0000-00-00 00:00:00'),(10,20,'Chrome','::1','2024-04-17 09:07:28','0000-00-00 00:00:00'),(11,37,'Chrome','::1','2024-04-18 12:18:38','2024-04-18 12:20:49'),(12,3,'Chrome','::1','2024-04-18 12:22:12','2024-04-18 12:36:10'),(13,3,'Chrome','::1','2024-04-18 12:43:18','2024-04-18 12:44:29'),(14,3,'Chrome','::1','2024-04-18 12:44:38','0000-00-00 00:00:00'),(15,20,'Chrome','::1','2024-04-19 01:39:30','0000-00-00 00:00:00'),(16,20,'Chrome','::1','2024-04-19 06:25:05','0000-00-00 00:00:00'),(17,20,'Chrome','::1','2024-04-21 03:50:19','0000-00-00 00:00:00'),(18,20,'Chrome','::1','2024-04-22 10:33:10','0000-00-00 00:00:00'),(19,20,'Chrome','::1','2024-04-22 11:02:32','0000-00-00 00:00:00'),(20,37,'Chrome','::1','2024-04-23 01:17:25','0000-00-00 00:00:00'),(21,37,'Chrome','::1','2024-04-23 10:13:40','0000-00-00 00:00:00'),(22,37,'Chrome','::1','2024-04-24 02:14:18','0000-00-00 00:00:00'),(23,20,'Chrome','::1','2024-04-26 02:43:10','0000-00-00 00:00:00'),(24,37,'Chrome','::1','2024-04-26 05:03:51','0000-00-00 00:00:00'),(25,0,'Chrome','::1','2024-04-27 02:45:11','0000-00-00 00:00:00'),(26,37,'Chrome','::1','2024-04-27 03:57:10','2024-04-27 04:45:06'),(27,20,'Chrome','::1','2024-04-29 03:35:33','2024-04-29 03:35:54'),(28,20,'Chrome','::1','2024-04-29 07:19:15','2024-04-29 08:45:40'),(29,20,'Chrome','::1','2024-04-29 08:54:53','0000-00-00 00:00:00'),(30,20,'Chrome','::1','2024-04-30 01:00:42','2024-04-30 01:45:30'),(31,4,'Chrome','::1','2024-04-30 01:45:38','2024-04-30 05:31:55'),(32,37,'Chrome','::1','2024-04-30 05:32:02','2024-04-30 06:20:34'),(33,37,'Chrome','::1','2024-04-30 06:20:40','2024-04-30 06:20:48'),(34,20,'Chrome','::1','2024-04-30 06:22:06','2024-04-30 06:48:49'),(35,37,'Chrome','::1','2024-04-30 06:49:21','0000-00-00 00:00:00'),(36,37,'Chrome','::1','2024-04-30 09:11:03','0000-00-00 00:00:00'),(37,37,'Chrome','::1','2024-04-30 09:11:48','2024-04-30 09:13:59'),(38,20,'Chrome','::1','2024-04-30 09:14:24','2024-04-30 09:17:28'),(39,37,'Chrome','::1','2024-04-30 09:17:39','0000-00-00 00:00:00'),(40,37,'Chrome','::1','2024-04-30 09:22:12','2024-04-30 09:23:04'),(41,20,'Chrome','::1','2024-04-30 09:31:31','0000-00-00 00:00:00'),(42,20,'Chrome','::1','2024-04-30 12:01:22','0000-00-00 00:00:00'),(43,37,'Chrome','::1','2024-04-30 12:05:37','2024-04-30 12:21:55'),(44,20,'Chrome','::1','2024-04-30 12:22:20','2024-04-30 12:36:28'),(45,20,'Chrome','::1','2024-04-30 12:36:35','2024-04-30 12:36:40'),(46,37,'Chrome','::1','2024-04-30 12:36:55','0000-00-00 00:00:00'),(47,20,'Chrome','::1','2024-05-01 02:31:24','0000-00-00 00:00:00'),(48,20,'Chrome','::1','2024-05-01 03:48:42','2024-05-01 03:51:53'),(49,37,'Chrome','::1','2024-05-01 03:52:05','2024-05-01 04:14:31'),(50,1,'Chrome','::1','2024-05-02 12:15:56','2024-05-02 12:21:57'),(51,1,'Chrome','::1','2024-05-02 12:46:35','2024-05-02 12:46:41'),(52,1,'Chrome','::1','2024-05-02 12:51:21','2024-05-02 12:51:29'),(53,1,'Chrome','::1','2024-05-02 01:09:08','2024-05-02 01:09:16'),(54,1,'Chrome','::1','2024-05-02 01:28:39','0000-00-00 00:00:00'),(55,1,'Chrome','::1','2024-05-02 02:45:29','2024-05-02 02:49:45'),(56,19,'Chrome','::1','2024-05-02 02:49:51','2024-05-02 03:07:52'),(57,19,'Chrome','::1','2024-05-02 03:08:51','2024-05-02 03:14:53'),(58,20,'Chrome','::1','2024-05-02 08:20:41','2024-05-02 09:03:44'),(59,1,'Chrome','::1','2024-05-04 10:31:26','2024-05-04 10:31:46'),(60,46,'Chrome','::1','2024-05-20 06:15:33','0000-00-00 00:00:00'),(61,19,'Chrome','::1','2024-05-21 11:24:37','2024-05-21 12:03:28'),(62,20,'Chrome','::1','2024-05-21 01:07:25','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `tbl_activity` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_activity` with 62 row(s)
--

--
-- Table structure for table `tbl_assistance`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_assistance` (
  `assistance_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_receive` date NOT NULL,
  `type_assistance_id` int(11) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `official_id` int(11) NOT NULL,
  `distribute_date` date NOT NULL,
  PRIMARY KEY (`assistance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_assistance`
--

LOCK TABLES `tbl_assistance` WRITE;
/*!40000 ALTER TABLE `tbl_assistance` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_assistance` VALUES (57,'2024-04-08',1,1,2,'2024-04-23'),(58,'2024-04-08',1,4,2,'2024-04-23'),(59,'2024-04-08',1,6,2,'2024-04-23'),(60,'2024-04-08',1,7,2,'2024-04-23'),(61,'2024-04-08',1,37,2,'2024-04-23'),(62,'2024-04-02',6,4,5,'2024-04-17'),(63,'2024-04-02',6,6,5,'2024-04-17'),(64,'2024-04-02',6,7,5,'2024-04-17'),(65,'2024-04-02',6,10,5,'2024-04-17'),(67,'2024-04-08',1,46,2,'2024-04-23');
/*!40000 ALTER TABLE `tbl_assistance` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_assistance` with 10 row(s)
--

--
-- Table structure for table `tbl_certificate`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_certificate` (
  `certificate_id` int(11) NOT NULL AUTO_INCREMENT,
  `certificate_type` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  PRIMARY KEY (`certificate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_certificate`
--

LOCK TABLES `tbl_certificate` WRITE;
/*!40000 ALTER TABLE `tbl_certificate` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_certificate` VALUES (1,'Certificate of Residency','A document issued by the smallest administrative division in the Philippines, certifying residency, employment, and legal purposes, often requiring personal information.'),(2,'Barangay Certification','A local residency certificate issued by the barangay, confirming an individual\'s compliance with local requirements and obligations.'),(3,'Barangay Indigency','To certify that an individual or family is considered indigent or financially disadvantaged');
/*!40000 ALTER TABLE `tbl_certificate` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_certificate` with 3 row(s)
--

--
-- Table structure for table `tbl_household`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_household` (
  `household_id` int(11) NOT NULL AUTO_INCREMENT,
  `household_desc` varchar(50) NOT NULL,
  `purok_id` int(11) NOT NULL,
  PRIMARY KEY (`household_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_household`
--

LOCK TABLES `tbl_household` WRITE;
/*!40000 ALTER TABLE `tbl_household` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_household` VALUES (1,'Kissiah Kilfedder',4),(2,'Hillard Buse',6),(3,'Kerry Cannaway',7),(4,'Markos Epine',4),(5,'Clayborne Blinckhorne',1),(6,'Karlene Daglish',4),(7,'Kay Gundry',6),(8,'Jillayne Burgan',3),(9,'Sheila Shawcroft',5),(10,'Leelah Arlt',4),(12,'Barnie Dodman',4),(13,'Emlen Orriss',2),(14,'Mel Mariyushkin',6),(15,'Libbey Lambden',4),(17,'Oralla Pocknoll',7),(18,'Tabbie McKeever',7),(19,'Marlane Strover',2),(21,'Lonnie Degoe',2),(22,'Jean Brace',5),(23,'Poul Mattiassi',6),(25,'Innis Manna',3),(29,'Erny Giorgini',7),(30,'Renault Lamshead',7),(31,'Chao Yang',3),(32,'King Kong',6),(34,'Tyrese Halliburton',5);
/*!40000 ALTER TABLE `tbl_household` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_household` with 26 row(s)
--

--
-- Table structure for table `tbl_log`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` int(11) NOT NULL,
  `log_date` datetime NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_log`
--

LOCK TABLES `tbl_log` WRITE;
/*!40000 ALTER TABLE `tbl_log` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `tbl_log` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_log` with 0 row(s)
--

--
-- Table structure for table `tbl_notification`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_notification` (
  `notif_id` int(11) NOT NULL AUTO_INCREMENT,
  `resident_id` int(11) NOT NULL,
  `doc_type` int(11) DEFAULT NULL,
  `image_notif` varchar(255) NOT NULL,
  `date_notif` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`notif_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_notification`
--

LOCK TABLES `tbl_notification` WRITE;
/*!40000 ALTER TABLE `tbl_notification` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_notification` VALUES (4,4,3,'http://localhost/barangayrms//public/profile_pics/1714441872_4d5b98d13b36d94bb641.jpg','2024-04-30 02:53:04'),(5,4,2,'http://localhost/barangayrms//public/profile_pics/1714441872_4d5b98d13b36d94bb641.jpg','2024-04-30 03:38:38'),(8,20,2,'http://localhost/barangayrms//public/profile_pics/1714400013_3a35a7adf19e8d1b822a.jpg','2024-04-30 06:22:16'),(9,20,2,'http://localhost/barangayrms//public/profile_pics/1714400013_3a35a7adf19e8d1b822a.jpg','2024-04-30 06:32:10'),(10,20,3,'http://localhost/barangayrms//public/profile_pics/1714400013_3a35a7adf19e8d1b822a.jpg','2024-04-30 06:32:23'),(11,20,3,'http://localhost/barangayrms//public/profile_pics/1714400013_3a35a7adf19e8d1b822a.jpg','2024-04-30 06:33:01'),(12,20,2,'http://localhost/barangayrms//public/profile_pics/1714400013_3a35a7adf19e8d1b822a.jpg','2024-04-30 06:33:23'),(13,20,1,'http://localhost/barangayrms//public/profile_pics/1714400013_3a35a7adf19e8d1b822a.jpg','2024-04-30 06:33:44'),(14,37,2,'http://localhost/barangayrms/public/profile_pics/1714459821_9cc449cd366dfdfdab67.jpg','2024-04-30 06:50:45'),(15,37,3,'http://localhost/barangayrms//public/profile_pics/1714460006_2fd100e9b0d8b25c0195.jpg','2024-04-30 06:54:04'),(16,37,3,'http://localhost/barangayrms/public/profile_pics/1714536464_e8e7e323dead25817242.jpg','2024-05-01 04:09:28'),(17,1,2,'http://localhost/barangayrms/public/profile_pics/1714609153_0480550b608ea4518c6b.jpg','2024-05-02 00:19:37'),(18,19,3,'http://localhost/barangayrms/public/profile_pics/1714618302_e35b783e31db11954ea8.jpg','2024-05-02 03:09:11'),(19,20,1,'http://localhost/barangayrms/public/profile_pics/1714480573_ef15d60fd8d01583077e.jpg','2024-05-02 08:23:51'),(20,46,2,'','2024-05-20 06:18:19'),(21,46,3,'','2024-05-20 06:20:42');
/*!40000 ALTER TABLE `tbl_notification` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_notification` with 16 row(s)
--

--
-- Table structure for table `tbl_notif_user`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_notif_user` (
  `usernotif_id` int(11) NOT NULL AUTO_INCREMENT,
  `resident_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `certificate_id` int(11) NOT NULL,
  `req_status` varchar(15) NOT NULL,
  `usernotif_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`usernotif_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_notif_user`
--

LOCK TABLES `tbl_notif_user` WRITE;
/*!40000 ALTER TABLE `tbl_notif_user` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_notif_user` VALUES (2,37,19,2,'Approved','2024-04-30 08:41:02'),(3,37,19,2,'Cancelled','2024-04-30 09:21:48'),(4,20,19,3,'Approved','2024-05-02 00:03:07'),(5,20,19,3,'Cancelled','2024-05-02 00:03:15'),(6,1,19,2,'Approved','2024-05-02 00:20:28'),(7,20,19,1,'Approved','2024-05-02 08:25:09'),(8,46,19,2,'Approved','2024-05-20 06:18:54');
/*!40000 ALTER TABLE `tbl_notif_user` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_notif_user` with 7 row(s)
--

--
-- Table structure for table `tbl_official`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_official` (
  `official_id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(30) NOT NULL,
  `term` varchar(50) NOT NULL,
  `committee` varchar(50) NOT NULL,
  `vice_committee` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `purok_id` int(11) NOT NULL,
  `off_uniid` varchar(50) NOT NULL,
  PRIMARY KEY (`official_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_official`
--

LOCK TABLES `tbl_official` WRITE;
/*!40000 ALTER TABLE `tbl_official` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_official` VALUES (2,'Captain','Second','Committee on Peace and Order','Committee on Ways and Means','Active',37,7,'WWo74VazELQ0XytyNETl4l6UwJEEnA'),(5,'Councilor-1','Second','Committee on Education','Committee on Education','Active',6,4,'a072ff5b55affa024fbef31438bd4e47'),(6,'Councilor-4','Third','Committee on Ways and Means','Committee on Agriculture','Active',18,7,'632c06c702491cee7306484aa5926231');
/*!40000 ALTER TABLE `tbl_official` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_official` with 3 row(s)
--

--
-- Table structure for table `tbl_purok`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_purok` (
  `purok_id` int(11) NOT NULL AUTO_INCREMENT,
  `purok_desc` varchar(30) NOT NULL,
  PRIMARY KEY (`purok_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_purok`
--

LOCK TABLES `tbl_purok` WRITE;
/*!40000 ALTER TABLE `tbl_purok` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_purok` VALUES (1,'Purok-1'),(2,'Purok-2'),(3,'Purok-3'),(4,'Purok-4'),(5,'Purok-5'),(6,'Purok-6'),(7,'Purok-7');
/*!40000 ALTER TABLE `tbl_purok` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_purok` with 7 row(s)
--

--
-- Table structure for table `tbl_requested_cert`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_requested_cert` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `purpose` varchar(100) NOT NULL,
  `request_status` varchar(30) NOT NULL DEFAULT 'Pending',
  `certificate_id` int(11) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `official_id` int(11) NOT NULL,
  `tracking_id` varchar(33) NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_requested_cert`
--

LOCK TABLES `tbl_requested_cert` WRITE;
/*!40000 ALTER TABLE `tbl_requested_cert` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_requested_cert` VALUES (12,'2024-04-21 05:23:53','For Scholarship','Cancelled',2,20,1,'f23a349d899ce5e45d7693e1ef0e118b'),(13,'2024-05-02 00:03:07','For Scholarship','Approved',3,20,19,'517bfce8834af2c58ddf0b1af0a91934'),(16,'2024-04-25 04:35:36','For Job','Approved',1,20,1,'adc1dd1b3aa52eeff2dd50a23c18c479'),(17,'2024-05-02 00:03:15','For Clearance','Cancelled',3,20,19,'29b386cfb06e5c42d04d4777eb008cbf'),(18,'2024-04-29 07:10:00','Sample only','Approved',1,20,19,'aa99653b51904320fd9ef9cbd61c891c'),(19,'2024-04-21 06:02:02','Work','Pending',3,20,0,'9171556b93365040f4ed6a5f2d1c6743'),(20,'2024-04-30 08:25:29','ssss','Approved',2,20,19,'d7c1495d401e4d8899bdab30220303b4'),(23,'2024-05-20 14:53:17','For Scholarship','Approved',1,37,19,'c58cc09716a68c73391f70412063dc0a'),(24,'2024-04-30 08:41:02','Wala lang','Approved',2,37,19,'d0a611ee3ae24ab8bec087c7dd5d2e00'),(25,'2024-04-23 13:17:52','wala lang','Pending',3,37,0,'cb10d0c8f7b653b99d7ec188e967f7a7'),(26,'2024-04-30 02:27:32','For Internship','Pending',3,4,0,'a167eb3ccd3b63e1ff2963210da61e70'),(27,'2024-04-30 02:33:30','Tambay','Pending',2,4,0,'7556fa06809e3a90d72f9ceea8c089b6'),(28,'2024-04-30 02:47:57','','Pending',0,4,0,'e1560b12d44dbd3e771643912016e861'),(29,'2024-04-30 02:48:51','Tambay','Pending',1,4,0,'ca44bf6eff96f22fe9d8ba4911b1c3b7'),(30,'2024-04-30 02:49:35','For Scholarship','Pending',1,4,0,'33058d55ba4b9636cfb54fc6858c1449'),(31,'2024-04-30 02:53:04','Sample only','Pending',3,4,0,'60e56b407055422f0b8cbea139175dca'),(32,'2024-04-30 03:38:38','Tambay','Pending',2,4,0,'6790ae3df53d0d2593bd730c143626af'),(33,'2024-04-30 05:32:12','For Scholarship','Pending',3,37,0,'e3507e1f44e369beef0140b066d8316c'),(34,'2024-04-30 09:18:20','For OJT','Cancelled',2,37,0,'08544dbfaac183459e00c33344bd949e'),(35,'2024-05-20 14:59:05','Tambay','Approved',2,20,0,'c7cc441bb94f86f99ea36bf9f105165e'),(37,'2024-04-30 06:32:23','','Pending',3,20,0,'4d93f88db5a5a432b7112b2a181f49f0'),(38,'2024-04-30 06:33:01','For Internship','Pending',3,20,0,'63433f0d8899de8b9181ccc30b083c6f'),(39,'2024-05-20 15:03:54','','Approved',2,20,0,'2a17dba5ff2d1a0cfe0fe87423714d39'),(40,'2024-05-20 14:56:15','','Approved',1,20,0,'a5c4cd6d3fb604f06058e6721d902e16'),(41,'2024-04-30 09:21:48','Tambay','Cancelled',2,37,19,'1399d2fcf161941314a803d0928fb139'),(42,'2024-04-30 06:54:04','For Scholarship','Pending',3,37,0,'acaff1613d1c45f4a022256f3ef4a306'),(43,'2024-05-20 14:52:01','wala lang','Approved',1,37,0,'a3b79a05e580b5d2483083c123eb996b'),(44,'2024-05-01 04:09:28','Tambay','Pending',3,37,0,'970b55146c8dc049ea0f45a913f42634'),(45,'2024-05-02 00:20:28','Tambay','Approved',2,1,19,'0e3e6b5340848f96b2013f941f635569'),(46,'2024-05-02 03:09:11','For OJT','Pending',3,19,0,'5a2fdc6dfbb86d9d149ab57d982c5ce5'),(47,'2024-05-02 08:25:09','For Scholarship','Approved',1,20,19,'b5d8ea6a26b14cd18c32e2b75ac1212b'),(48,'2024-05-20 06:18:54','for tambay only','Approved',2,46,19,'37b03e35e4548d1d78628bfa8ee908fb'),(49,'2024-05-20 06:20:42','for glitzwyn','Pending',3,46,0,'07c9a70284ed39c80acf0c37c2f5faba');
/*!40000 ALTER TABLE `tbl_requested_cert` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_requested_cert` with 33 row(s)
--

--
-- Table structure for table `tbl_resident`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_resident` (
  `resident_id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `suffix` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` varchar(5) NOT NULL,
  `datebirth` date NOT NULL,
  `placebirth` varchar(50) NOT NULL,
  `civilstatus` varchar(20) NOT NULL,
  `ethnicity` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `citizenship` varchar(30) NOT NULL,
  `education` varchar(50) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `for4ps` varchar(5) NOT NULL,
  `pwd` varchar(5) NOT NULL,
  `senior` varchar(5) NOT NULL,
  `precinct` varchar(15) NOT NULL,
  `uniid` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `purok_id` int(11) NOT NULL,
  `household_id` int(11) NOT NULL,
  PRIMARY KEY (`resident_id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_resident`
--

LOCK TABLES `tbl_resident` WRITE;
/*!40000 ALTER TABLE `tbl_resident` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_resident` VALUES (1,'Tattersall','Jacinda','Gotecliffe','','Female','48','2023-11-09','USA','Cohabitation','Cebuano','Teacher','Filipino','','Islam','355-845-6043','No','No','No','0025B','A519EztXUhMVTeIbUntjzRqKD5upFq','http://localhost/barangayrms/public/profile_pics/1714609153_0480550b608ea4518c6b.jpg',4,4),(6,'Killough','Jordain','Schuelcke','','','77','2023-10-20','Australia','Separated','Illonggo','Athlete','Filipino','','Islam','865-421-5664','Yes','Yes','Yes','0017C','6TJtl0GBP298m19N5S13qUu35K96b0','',4,6),(7,'Bathersby','Cecelia','Sager','Jr','Female','26','2023-06-08','France','Cohabitation','Illonggo','Artist','Filipino','','Baptist','684-545-8845','No','Yes','No','0017C','cGf8dE4P6K1CoCuAo8oc8FyLb0oCGY','',1,5),(8,'Yegorev','Merilee','Nisby','','Female','20','2023-11-21','France','Married','Ilocano','Artist','Filipino','','Roman Catholic','854-343-4616','No','No','Yes','0019B','CDlz637NOJWj3lFe3G483RkeQYZrX0','',4,1),(9,'Lauderdale','Delia','Digg','','Female','92','2023-04-09','Australia','Cohabitation','Tagalog','Artist','Filipino','','','959-634-7996','No','Yes','No','0021A','Gnz4F2ndc987H8i247jd28YPAhV8O3','',1,5),(10,'Galilee','Neda','Lovatt','','Female','56','2023-03-27','Japan','Married','Tagalog','Athlete','Filipino','','','387-243-4939','Yes','Yes','No','0019B','vwA321QRN3h43Cf1Hf2912exhx3X3i','',4,4),(13,'Sully','Allene','Lening','','Female','96','2023-02-26','Sydney','Single','Illonggo','Pilot','Filipino','','','329-476-9885','No','Yes','Yes','0023A','9Jc4CR44KKDWUNAUvwSY422f202r3G','',7,3),(14,'Reeders','Madelin','Piddlesden','','Female','31','2023-06-04','Japan','Separated','Cebuano','Pilot','Filipino','','Islam','108-897-1538','Yes','No','Yes','0019B','sov5lNwf7ru7s1IFygtjq5gZ0Lx7s3','',7,3),(15,'Maund','Llewellyn','Roget','','Male','71','2023-12-19','Tokyo','Cohabitation','Illonggo','Engineer','Filipino','','','260-430-2930','Yes','Yes','Yes','0023A','QWLhdQHZVy94SdI1gJTDI11Z9D36w4','',4,6),(17,'Chel','Kelcie','O\'Dowgaine','II','Female','38','2023-09-22','USA','Single','Illonggo','Scientist','Filipino','Professional Degree','Roman Catholic','489-585-7231','Yes','Yes','Yes','0025B','9IBcS0J5b3uw7W98UkS2z1B7xy6374','',1,5),(18,'Sheasby','Mehetabel','Profit','','Female','80','2023-09-23','France','Cohabitation','Illonggo','Artist','Filipino','','Islam','786-279-7727','Yes','No','Yes','0025B','g0mI8kZ9yTmnR7HLg99DK1o6H25hMi','',4,4),(19,'Lopez','Ross','Shergold','','Female','71','2023-05-01','Rio de Janeiro','Married','Illonggo','Writer','Filipino','','','998-929-2690','No','Yes','Yes','0025B','drBFAUKqD58yq7itKRswobHmTuhU93','http://localhost/barangayrms/public/profile_pics/1716291382_a1b45683953a51777599.jpg',4,4),(20,'Tamad','Karl','Mcapagal','','Male','31','1970-01-01','Australia','Single','Cebuano','Police','Filipino','','Roman Catholic','+649-221-1212','No','Yes','Yes','0023A','306GW3knFPsgnyZsG5D051AfZ4tbvO','http://localhost/barangayrms/public/profile_pics/1714480573_ef15d60fd8d01583077e.jpg',7,3),(37,'John lloyd','Ritchel','Jumawan','Jr.','Male','23','2000-02-14','Auraora, Zamboanga del Sur','Single','Cebuano','Student','Filipino','College Undergrad','Roman Catholic','09811043220','No','No','No','0023A','23cbcf652f5882e9d2e802c4611b9c','http://localhost/barangayrms/public/profile_pics/1714536464_e8e7e323dead25817242.jpg',6,7),(40,'Shackesby','Sandye','Ajsik','','Female','47','2012-01-27','Sydney','Separated','Ilocano','Engineer','Filipino','','Islam','898-894-1159','Yes','Yes','Yes','0021A','8TC79u7Q16nSH81eQVroA5MglC5a8u','',2,21),(41,'Ewbank','Cory','Weight','','Female','82','1967-01-14','Brazil','Married','Bisaya','Engineer','Filipino','PhD','Buddhism','840-128-1647','No','Yes','Yes','0019B','jc8778yM27ec99buirZ71oa52h4Zf5','',4,4),(42,'Spittles','Godard','Weeks','','Male','52','1962-07-21','Sydney','Widow/er','Bisaya','Engineer','Filipino','Associate\'s Degree','Judaism','889-659-9429','No','Yes','Yes','0023A','ssxy7tSp307AmD64l3ZQBWj3Gyb0Am','',7,2),(43,'Lansdown','Fulton','Postill','Jr','','56','1956-06-29','Australia','Cohabitation','Illonggo','Athlete','Filipino','','','203-912-2793','No','No','No','0025B','5c6667LpVuv61V2yT5P04h4Xf6gonh','',7,29),(44,'Brockhurst','Gabriell','Ianson','','Female','85','2020-07-21','France','Single','Cebuano','Engineer','Filipino','','Islam','827-431-0134','No','No','Yes','0025B','rhc5299EMMy0JOEA4qy1at36USt7nQ','',7,17),(45,'Szimon','Grover','Dunmore','','','50','1951-06-10','Australia','Separated','Illonggo','Chef','Filipino','','','159-970-2927','No','Yes','No','0017C','2sf139XTNF8iP5Zj0Q5XVS3BVET2m7','',4,4),(46,'Coal','Meagan','Galloway','','Female','68','1974-01-11','New York','Married','Cebuano','Doctor','Filipino','Master\'s Degree','Judaism','529-270-0656','Yes','Yes','Yes','0025B','VLSc91fHylj0L9Ba6327f9IrqQ2jw0','',7,3),(47,'Messer','Amabelle','Skinley','III','Female','90','1985-04-23','Australia','Separated','Ilocano','Engineer','Filipino','','','365-997-3621','No','No','Yes','0025B','CrUWLtt1BoLc6E47Dl2ujgytvyur47','',6,14),(48,'Bonus','Worden','Yaakov','','Male','42','1970-11-18','Sydney','Cohabitation','Cebuano','Teacher','Filipino','','','460-775-5712','No','No','Yes','0025B','a2xrOcdqVX3LNRBlNW429l88vWk910','',5,9),(49,'Haberfield','Camala','Pillington','','Female','53','1958-03-29','Australia','Single','Cebuano','Artist','Filipino','','','444-958-0046','Yes','Yes','Yes','0021A','5264k30u16A92K9D7Ey22ncki157A9','',6,2),(50,'Chatelet','Christel','Monini','','Female','29','1954-08-01','Rio de Janeiro','Separated','Cebuano','Musician','Filipino','','Islam','816-860-2900','Yes','No','Yes','0017C','vict11Aka7jhdWqk12F35U3n6n5HVi','',2,13),(51,'Whelpton','Dannel','Hamber','','Male','19','1986-08-28','Rio de Janeiro','Married','Bisaya','Engineer','Filipino','','','737-739-8805','No','Yes','No','0023A','vgpdRjLu56i49I2wHD9jsK68s7M8cb','',1,5),(52,'Sanney','Ilaire','Crayk','IV','Male','41','1958-02-22','Sydney','Single','Ilocano','Pilot','Filipino','Master\'s Degree','Buddhism','186-631-6603','No','Yes','Yes','0025B','2d85veK2aj38j62C354k49d7XPTpT1','',1,5),(53,'Lundon','Farly','Capron','','Male','59','1965-09-27','Sydney','Single','Illonggo','Pilot','Filipino','','','641-539-1590','Yes','Yes','Yes','0023A','9fno7C8H0WNQiqqhMY4k1C5304MQXx','',4,10),(54,'Dearnley','Aprilette','Ousley','','Female','28','1953-02-12','New York','Cohabitation','Tagalog','Writer','Filipino','PhD','Islam','426-613-4505','Yes','No','No','0017C','SHXuE5pHWz0c5izSr1A188BCv3G6Jk','',4,1),(55,'Ruffles','Zorina','Czaple','','Female','91','1967-09-13','Rio de Janeiro','Separated','Tagalog','Teacher','Filipino','','','467-106-5758','No','Yes','No','0017C','58U1NydJU0dOLzkcd1i3V79iw27R06','',6,32),(56,'Sterry','Donal','de Merida','Jr','Male','91','1997-12-21','France','Cohabitation','Bisaya','Doctor','Filipino','','','254-146-5355','No','Yes','Yes','0019B','7J0e56sso93UI412LWuh9667pCh6y1','',4,1),(57,'Ellen','Lonna','Armatys','','Female','47','1976-09-11','Australia','','Bisaya','Musician','Filipino','','','638-409-0500','Yes','No','No','0025B','ArvZd0ew1II8zYiQ4I9I4N8kyAQL5X','',1,5),(58,'Keri','Jaimie','Winger','','Female','48','1960-08-15','Australia','Cohabitation','Illonggo','Doctor','Filipino','','Islam','236-672-3812','No','Yes','No','0025B','pJblM1iH9m4D05cK8jzR6NyG6N36pF','',3,31),(59,'Feldbau','Jayme','Treadgall','II','Male','31','1968-06-26','Paris','Married','Cebuano','Doctor','Filipino','','','564-961-7709','Yes','Yes','Yes','0017C','7hV7al7AAqxHY8S99EfjuSbQ22luvx','',4,6),(60,'Dyerson','Amalie','Calveley','','Female','58','1962-08-19','France','Cohabitation','Tagalog','Pilot','Filipino','','Islam','972-638-3444','No','No','No','0019B','xL1Yo2MkXZg0nAwTCWNeC9RP2lz19z','',7,29),(61,'Loughlan','Elysha','Cristofalo','','Female','74','1991-10-21','Japan','Single','Tagalog','Chef','Filipino','','','242-966-6657','Yes','Yes','Yes','0017C','aE4t40i46Z0vTy2lyop38ADFsFI3Ip','',1,5),(62,'Dionisetti','Elayne','Loffill','','Female','100','1969-09-01','New York','Married','Tagalog','Artist','Filipino','','Islam','741-484-7571','Yes','Yes','Yes','0021A','e2mXALMX4VT3tEhx56rT9dDygE6DEy','',7,18),(63,'Felton','Lorette','Titcomb','','Female','42','1990-04-16','Rio de Janeiro','Cohabitation','Ilocano','Musician','Filipino','','','771-312-7703','No','No','No','0021A','KemL7QlAOow9JbZ4ET8KDo5ttKi981','',2,19),(64,'Templeton','Tadeo','Gosswell','III','Male','56','2008-08-17','New York','','Cebuano','Pilot','Filipino','','','963-290-9194','No','Yes','No','0023A','yDQ3c42k53FET43WBJM0AP0pL7ly9h','',2,21),(65,'Looney','Bruce','Steart','','Male','93','1985-01-07','France','','Bisaya','Artist','Filipino','','Islam','900-729-4861','Yes','No','Yes','0023A','Haj8J8RVAt2295f97W454QKR3W547T','',5,22),(66,'Paydon','Deana','Pynner','','Female','65','1980-12-02','Rio de Janeiro','Separated','Cebuano','Teacher','Filipino','','Islam','975-188-9386','Yes','Yes','Yes','0021A','pUs0P14c1G7y5nU46XMCUc5HamZPUX','',1,5),(67,'Calender','Ede','Rallin','','Female','21','1984-08-14','Sydney','Single','Tagalog','Teacher','Filipino','','','399-171-9071','No','Yes','No','0025B','9H34VC971WWqEm6XKNJ57jGS3RWslB','',5,22),(68,'Brodnecke','Ruben','Bentote','','Male','33','2006-03-23','Rio de Janeiro','Separated','Bisaya','Artist','Filipino','','','669-979-2968','Yes','No','No','0019B','t06ERJlU26m0JzlD88Nok5KK751355','',3,25),(69,'Floyed','Burg','Andriss','','','100','2020-07-03','New York','Single','Cebuano','Chef','Filipino','','','185-321-4625','Yes','No','No','0025B','1ME6xo4c50N5Kk0L58efO86C2Vjb7e','',3,25),(70,'Shadbolt','Dinnie','Lenard','Sr','Female','38','1961-01-05','USA','Cohabitation','Tagalog','Teacher','Filipino','High School Diploma','Islam','734-800-9562','Yes','Yes','Yes','0023A','4tcSce7Y6Qk63jTUJmtna9j2D851T9','',7,3),(71,'Backes','Mirilla','Gowman','','Female','97','1968-10-27','Tokyo','Widow/er','Bisaya','Athlete','Filipino','High School Diploma','Judaism','856-723-7890','Yes','Yes','Yes','0017C','6k9ytCp7fL99QEneKh98y0OWA2HOuv','',7,3),(72,'Poller','Guthry','Bolesma','','Male','83','1957-06-08','Paris','Single','Bisaya','Chef','Filipino','','','734-324-2689','No','Yes','Yes','0017C','r5LH2955vrF68RKBZVi9W9yw4C5rY9','',2,19),(73,'Maple','Beale','Salvin','','Male','74','2009-03-14','Rio de Janeiro','Separated','Illonggo','Musician','Filipino','','','299-585-0238','No','Yes','No','0021A','Qtf3SxKVd5cjET3s8VcXHT5BH8rLJ7','',7,30),(74,'Sullivan','Joey','Burstow','Jr','','50','2005-04-25','Australia','Separated','Illonggo','Scientist','Filipino','','','432-209-8923','No','No','Yes','0023A','d750A00CnIL5HoT21tUDHwhjgoFXR3','',3,31),(75,'Streak','Alexio','Karpychev','II','Male','51','1993-07-18','Rio de Janeiro','Cohabitation','Tagalog','Athlete','Filipino','','','448-503-5573','Yes','No','No','0017C','onUtN3g7Q6q2E0EWOC2T2GeliDvFX6','',3,31),(76,'Fetherston','Ransell','Kindleside','','Male','64','1973-09-20','Rio de Janeiro','Single','Cebuano','Musician','Filipino','','','501-602-6598','No','Yes','Yes','0023A','Rev3JL8O16npNYLG6RAud95b7lng7X','',5,22),(77,'Elvin','Mable','Tynemouth','','Female','63','1962-09-20','Brazil','Cohabitation','Bisaya','Chef','Filipino','','','320-813-4954','No','No','No','0025B','4f8xr8174OUgvW7QZI0ruIUoarR6vm','',1,5),(78,'Birchner','Kailey','Southam','','Female','34','1999-09-05','France','','Bisaya','Writer','Filipino','','','489-460-3584','No','No','Yes','0025B','D7k0YEigDXA0cDistET1YJwgQj8zqJ','',3,25),(79,'Francisco','Elliott','Lenton','','Male','21','1994-04-21','France','Single','Tagalog','Scientist','Filipino','','','771-582-8281','Yes','Yes','Yes','0021A','tp6CJTaBVgfAa9DVT8lVcpA4P6888R','',1,5),(80,'Hinstridge','Ahmed','Strode','','Male','33','2022-03-07','Japan','Cohabitation','Illonggo','Engineer','Filipino','','','796-180-4781','Yes','Yes','No','0017C','0gM3x3Bm4gSkM9MA87Q37cLP76ZF4X','',7,29),(81,'Cloney','Rosamond','Barnett','IV','Female','20','1989-10-11','USA','Separated','Illonggo','Writer','Filipino','','Islam','585-537-9476','No','No','No','0021A','IRFTpraQ1nS2PQWt8o46TT7kSkCuTm','',1,5),(82,'Asals','Newton','Janikowski','','Male','72','1961-09-28','Australia','Cohabitation','Ilocano','Doctor','Filipino','','','732-193-4478','Yes','Yes','No','0021A','AF455dR52NQ6I1VSbuoc61UXXzet36','',3,8),(83,'Whitebrook','Lilias','Halpin','','Female','66','1963-11-20','Sydney','Single','Bisaya','Musician','Filipino','','','534-405-2509','Yes','Yes','Yes','0023A','2XZONowXYRz4xWBew6fH7QzMraflGf','',7,3),(84,'Pencott','Filide','Napolione','','Female','39','2011-02-19','Sydney','Cohabitation','Bisaya','Engineer','Filipino','','Islam','228-317-9868','Yes','No','Yes','0021A','MCVYpvOh9LiKk44k8U06wEkaZ900i2','',6,23),(85,'Bambrough','Abagael','Wason','IV','Female','72','2003-03-01','Sydney','Separated','Cebuano','Musician','Filipino','','','934-119-8621','No','No','Yes','0017C','yh4u4cV77TMgOSNYR9JX8cp253M7cC','',3,8),(86,'Baber','Ave','Caldwell','','Male','56','2015-11-29','Tokyo','Cohabitation','Bisaya','Athlete','Filipino','','','109-176-7094','Yes','No','Yes','0025B','hXru90AQYoOn2naI1Is6y99R19rLJh','',3,8),(87,'Walklett','Jasun','Meere','Sr','Genderflui','53','2007-05-15','France','Cohabitation','Ilocano','Athlete','Filipino','Associate\'s Degree','Buddhism','363-482-2309','Yes','Yes','No','0019B','QH4cH3VD6t4tLGL6eklX0p9ZSjzNfQ','',4,4),(88,'Codrington','Clare','Benzing','','Female','98','1970-05-14','Australia','Cohabitation','Illonggo','Engineer','Filipino','','Islam','550-435-7080','No','No','No','0025B','2n37lbdpoF60V8s08dvkfZAu8t45vE','',5,34),(89,'Lammerich','Leonard','Asquith','','Male','65','1996-07-29','Brazil','','Bisaya','Artist','Filipino','','','440-580-0144','No','No','Yes','0021A','q57Nu0Zc4hzhJez6LUfHsU6gQKAGZZ','',4,4),(90,'*','','','','','','1970-01-01','','','','','','','','','','','','','dc425cac1c5d9b5cdb10150b269c8d','',0,0),(91,'','','','','','','2025-09-27','','','','','','','','','','','','','6bb86d6236ece13c587cc345951285','',0,0),(95,'Hello World','','','','','','1970-01-01','','','','','','','','','','','','','6a8fc0b5d12838363d0343db77abf0','',1,5),(97,'Dela Cruz','Juan','Batumbakal','III','Male','35','1989-05-01','Maranding, Lala, Lanao del Norte','Married','Bisaya','Fisherman','Filipino','Elem. Graduate','Roman Catholic','09101001221','Yes','No','No','0025B','f4e78d5739f720e14ee38da8a4aee8','',6,2);
/*!40000 ALTER TABLE `tbl_resident` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_resident` with 68 row(s)
--

--
-- Table structure for table `tbl_resident_store`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_resident_store` (
  `resident_id_store` int(11) NOT NULL AUTO_INCREMENT,
  `resident_id` int(11) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `suffix` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` varchar(5) NOT NULL,
  `datebirth` date DEFAULT NULL,
  `placebirth` varchar(50) NOT NULL,
  `civilstatus` varchar(20) NOT NULL,
  `ethnicity` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `citizenship` varchar(30) NOT NULL,
  `education` varchar(50) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `for4ps` varchar(5) NOT NULL,
  `pwd` varchar(5) NOT NULL,
  `senior` varchar(5) NOT NULL,
  `precinct` varchar(15) NOT NULL,
  `purok_id` varchar(11) NOT NULL,
  `household_id` varchar(11) NOT NULL,
  `resident_status` varchar(30) NOT NULL DEFAULT 'Pending',
  `date_requested` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`resident_id_store`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_resident_store`
--

LOCK TABLES `tbl_resident_store` WRITE;
/*!40000 ALTER TABLE `tbl_resident_store` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_resident_store` VALUES (33,37,'','','','','','','2000-05-24','','','','','','','','','','','','','','','Approved','2024-04-18 13:04:29'),(36,37,'Rachelle','','','','','','2000-02-14','','','','','','','','','','','','','','','Pending','2024-04-18 13:04:29'),(37,3,'Kim','','','','','','2024-01-28','','','','','','','','','','','','','','','Approved','2024-04-18 13:04:29'),(41,3,'','','','','','','2024-01-28','','','','','','','Iglesia Ni Cristo','','','','','','','','Pending','2024-04-18 13:04:29'),(42,3,'','','','','','','2024-01-28','','','','','','Vocational','','','','','','','','','Pending','2024-04-18 13:04:29'),(43,3,'','','','','','','2024-01-28','','','Tagalog','','','','','','','','','','','','Pending','2024-04-18 13:04:29'),(44,3,'Luhh','','','','','','2024-01-28','','','','','','','','','','','','','','','Pending','2024-04-18 13:04:29'),(45,3,'adsad','','','','','','2024-01-28','','','','','','','','','','','','','','','Pending','2024-04-18 13:04:29'),(46,3,'szzz','','','','','','2024-01-28','','','','','','','','','','','','','','','Pending','2024-04-18 13:05:32'),(47,37,'John lloyd','','','','','','2000-02-14','','','','','','','','','','','','','','','Approved','2024-04-24 02:17:58'),(48,20,'Deles','','','','','','1970-01-01','','','','','','','','','','','','','','','Approved','2024-05-02 08:21:32'),(49,20,'Tamad','','','','','','1970-01-01','','','','','','','','','','','','','','','Approved','2024-05-21 13:08:51');
/*!40000 ALTER TABLE `tbl_resident_store` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_resident_store` with 12 row(s)
--

--
-- Table structure for table `tbl_type_assistance`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_type_assistance` (
  `type_assistance_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_assistance` varchar(30) NOT NULL,
  PRIMARY KEY (`type_assistance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_type_assistance`
--

LOCK TABLES `tbl_type_assistance` WRITE;
/*!40000 ALTER TABLE `tbl_type_assistance` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_type_assistance` VALUES (1,'Financial Aid'),(2,'Health and Services for Kids'),(5,'Optical Assistance'),(6,'Dental Assistance for Kids'),(10,'Gadgets Assistance'),(11,'AICS');
/*!40000 ALTER TABLE `tbl_type_assistance` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_type_assistance` with 6 row(s)
--

--
-- Table structure for table `tbl_user`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `user_uniid` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_user` VALUES (2,'karl','123123123','Resident',20,'3adb338bf49c00004de1e90ba86a41b2'),(9,'chel','1234567','Resident',37,'43f77a9edf699334c2375ae029784f39'),(13,'admin','adminadmin','Admin',19,'5ae92571ffb24cae2b50ff50f5533ff6'),(14,'posner','1234567','Resident',4,'84b9ad406ce2d301fd3c1fe005a70c54'),(15,'resident','resident','Resident',1,'9b8ffa43a285e2f6b901e7c67926aa27'),(16,'katrina','katrina123','Resident',19,'5ec4dba31a1b30219c8a667a3725f860'),(17,'megan','meganmegan','Resident',46,'6a6ecdf82bc22a94b1b6d5c562b3dd3a');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_user` with 7 row(s)
--

--
-- Table structure for table `tbl_activity`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_activity` (
  `activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `resident_id` int(11) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `login_time` datetime NOT NULL,
  `logout_time` datetime NOT NULL,
  PRIMARY KEY (`activity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_activity`
--

LOCK TABLES `tbl_activity` WRITE;
/*!40000 ALTER TABLE `tbl_activity` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_activity` VALUES (1,20,'Chrome','::1','2024-04-03 02:22:34','2024-04-03 02:30:04'),(2,20,'Chrome','::1','2024-04-03 02:48:42','2024-04-03 02:49:57'),(3,20,'Chrome','::1','2024-04-03 02:50:06','2024-04-03 02:50:20'),(4,37,'Chrome','::1','2024-04-03 02:50:30','2024-04-03 02:51:08'),(5,20,'Chrome','::1','2024-04-04 01:57:26','0000-00-00 00:00:00'),(6,20,'Chrome','::1','2024-04-04 02:00:32','0000-00-00 00:00:00'),(7,20,'Chrome','::1','2024-04-16 12:05:28','2024-04-16 12:05:59'),(8,20,'Edge','::1','2024-04-16 12:06:20','2024-04-16 12:06:35'),(9,20,'Chrome','::1','2024-04-16 01:27:58','0000-00-00 00:00:00'),(10,20,'Chrome','::1','2024-04-17 09:07:28','0000-00-00 00:00:00'),(11,37,'Chrome','::1','2024-04-18 12:18:38','2024-04-18 12:20:49'),(12,3,'Chrome','::1','2024-04-18 12:22:12','2024-04-18 12:36:10'),(13,3,'Chrome','::1','2024-04-18 12:43:18','2024-04-18 12:44:29'),(14,3,'Chrome','::1','2024-04-18 12:44:38','0000-00-00 00:00:00'),(15,20,'Chrome','::1','2024-04-19 01:39:30','0000-00-00 00:00:00'),(16,20,'Chrome','::1','2024-04-19 06:25:05','0000-00-00 00:00:00'),(17,20,'Chrome','::1','2024-04-21 03:50:19','0000-00-00 00:00:00'),(18,20,'Chrome','::1','2024-04-22 10:33:10','0000-00-00 00:00:00'),(19,20,'Chrome','::1','2024-04-22 11:02:32','0000-00-00 00:00:00'),(20,37,'Chrome','::1','2024-04-23 01:17:25','0000-00-00 00:00:00'),(21,37,'Chrome','::1','2024-04-23 10:13:40','0000-00-00 00:00:00'),(22,37,'Chrome','::1','2024-04-24 02:14:18','0000-00-00 00:00:00'),(23,20,'Chrome','::1','2024-04-26 02:43:10','0000-00-00 00:00:00'),(24,37,'Chrome','::1','2024-04-26 05:03:51','0000-00-00 00:00:00'),(25,0,'Chrome','::1','2024-04-27 02:45:11','0000-00-00 00:00:00'),(26,37,'Chrome','::1','2024-04-27 03:57:10','2024-04-27 04:45:06'),(27,20,'Chrome','::1','2024-04-29 03:35:33','2024-04-29 03:35:54'),(28,20,'Chrome','::1','2024-04-29 07:19:15','2024-04-29 08:45:40'),(29,20,'Chrome','::1','2024-04-29 08:54:53','0000-00-00 00:00:00'),(30,20,'Chrome','::1','2024-04-30 01:00:42','2024-04-30 01:45:30'),(31,4,'Chrome','::1','2024-04-30 01:45:38','2024-04-30 05:31:55'),(32,37,'Chrome','::1','2024-04-30 05:32:02','2024-04-30 06:20:34'),(33,37,'Chrome','::1','2024-04-30 06:20:40','2024-04-30 06:20:48'),(34,20,'Chrome','::1','2024-04-30 06:22:06','2024-04-30 06:48:49'),(35,37,'Chrome','::1','2024-04-30 06:49:21','0000-00-00 00:00:00'),(36,37,'Chrome','::1','2024-04-30 09:11:03','0000-00-00 00:00:00'),(37,37,'Chrome','::1','2024-04-30 09:11:48','2024-04-30 09:13:59'),(38,20,'Chrome','::1','2024-04-30 09:14:24','2024-04-30 09:17:28'),(39,37,'Chrome','::1','2024-04-30 09:17:39','0000-00-00 00:00:00'),(40,37,'Chrome','::1','2024-04-30 09:22:12','2024-04-30 09:23:04'),(41,20,'Chrome','::1','2024-04-30 09:31:31','0000-00-00 00:00:00'),(42,20,'Chrome','::1','2024-04-30 12:01:22','0000-00-00 00:00:00'),(43,37,'Chrome','::1','2024-04-30 12:05:37','2024-04-30 12:21:55'),(44,20,'Chrome','::1','2024-04-30 12:22:20','2024-04-30 12:36:28'),(45,20,'Chrome','::1','2024-04-30 12:36:35','2024-04-30 12:36:40'),(46,37,'Chrome','::1','2024-04-30 12:36:55','0000-00-00 00:00:00'),(47,20,'Chrome','::1','2024-05-01 02:31:24','0000-00-00 00:00:00'),(48,20,'Chrome','::1','2024-05-01 03:48:42','2024-05-01 03:51:53'),(49,37,'Chrome','::1','2024-05-01 03:52:05','2024-05-01 04:14:31'),(50,1,'Chrome','::1','2024-05-02 12:15:56','2024-05-02 12:21:57'),(51,1,'Chrome','::1','2024-05-02 12:46:35','2024-05-02 12:46:41'),(52,1,'Chrome','::1','2024-05-02 12:51:21','2024-05-02 12:51:29'),(53,1,'Chrome','::1','2024-05-02 01:09:08','2024-05-02 01:09:16'),(54,1,'Chrome','::1','2024-05-02 01:28:39','0000-00-00 00:00:00'),(55,1,'Chrome','::1','2024-05-02 02:45:29','2024-05-02 02:49:45'),(56,19,'Chrome','::1','2024-05-02 02:49:51','2024-05-02 03:07:52'),(57,19,'Chrome','::1','2024-05-02 03:08:51','2024-05-02 03:14:53'),(58,20,'Chrome','::1','2024-05-02 08:20:41','2024-05-02 09:03:44'),(59,1,'Chrome','::1','2024-05-04 10:31:26','2024-05-04 10:31:46'),(60,46,'Chrome','::1','2024-05-20 06:15:33','0000-00-00 00:00:00'),(61,19,'Chrome','::1','2024-05-21 11:24:37','2024-05-21 12:03:28'),(62,20,'Chrome','::1','2024-05-21 01:07:25','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `tbl_activity` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_activity` with 62 row(s)
--

--
-- Table structure for table `tbl_assistance`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_assistance` (
  `assistance_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_receive` date NOT NULL,
  `type_assistance_id` int(11) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `official_id` int(11) NOT NULL,
  `distribute_date` date NOT NULL,
  PRIMARY KEY (`assistance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_assistance`
--

LOCK TABLES `tbl_assistance` WRITE;
/*!40000 ALTER TABLE `tbl_assistance` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_assistance` VALUES (57,'2024-04-08',1,1,2,'2024-04-23'),(58,'2024-04-08',1,4,2,'2024-04-23'),(59,'2024-04-08',1,6,2,'2024-04-23'),(60,'2024-04-08',1,7,2,'2024-04-23'),(61,'2024-04-08',1,37,2,'2024-04-23'),(62,'2024-04-02',6,4,5,'2024-04-17'),(63,'2024-04-02',6,6,5,'2024-04-17'),(64,'2024-04-02',6,7,5,'2024-04-17'),(65,'2024-04-02',6,10,5,'2024-04-17'),(67,'2024-04-08',1,46,2,'2024-04-23');
/*!40000 ALTER TABLE `tbl_assistance` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_assistance` with 10 row(s)
--

--
-- Table structure for table `tbl_certificate`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_certificate` (
  `certificate_id` int(11) NOT NULL AUTO_INCREMENT,
  `certificate_type` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  PRIMARY KEY (`certificate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_certificate`
--

LOCK TABLES `tbl_certificate` WRITE;
/*!40000 ALTER TABLE `tbl_certificate` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_certificate` VALUES (1,'Certificate of Residency','A document issued by the smallest administrative division in the Philippines, certifying residency, employment, and legal purposes, often requiring personal information.'),(2,'Barangay Certification','A local residency certificate issued by the barangay, confirming an individual\'s compliance with local requirements and obligations.'),(3,'Barangay Indigency','To certify that an individual or family is considered indigent or financially disadvantaged');
/*!40000 ALTER TABLE `tbl_certificate` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_certificate` with 3 row(s)
--

--
-- Table structure for table `tbl_household`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_household` (
  `household_id` int(11) NOT NULL AUTO_INCREMENT,
  `household_desc` varchar(50) NOT NULL,
  `purok_id` int(11) NOT NULL,
  PRIMARY KEY (`household_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_household`
--

LOCK TABLES `tbl_household` WRITE;
/*!40000 ALTER TABLE `tbl_household` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_household` VALUES (1,'Kissiah Kilfedder',4),(2,'Hillard Buse',6),(3,'Kerry Cannaway',7),(4,'Markos Epine',4),(5,'Clayborne Blinckhorne',1),(6,'Karlene Daglish',4),(7,'Kay Gundry',6),(8,'Jillayne Burgan',3),(9,'Sheila Shawcroft',5),(10,'Leelah Arlt',4),(12,'Barnie Dodman',4),(13,'Emlen Orriss',2),(14,'Mel Mariyushkin',6),(15,'Libbey Lambden',4),(17,'Oralla Pocknoll',7),(18,'Tabbie McKeever',7),(19,'Marlane Strover',2),(21,'Lonnie Degoe',2),(22,'Jean Brace',5),(23,'Poul Mattiassi',6),(25,'Innis Manna',3),(29,'Erny Giorgini',7),(30,'Renault Lamshead',7),(31,'Chao Yang',3),(32,'King Kong',6),(34,'Tyrese Halliburton',5);
/*!40000 ALTER TABLE `tbl_household` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_household` with 26 row(s)
--

--
-- Table structure for table `tbl_log`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` int(11) NOT NULL,
  `log_date` datetime NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_log`
--

LOCK TABLES `tbl_log` WRITE;
/*!40000 ALTER TABLE `tbl_log` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `tbl_log` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_log` with 0 row(s)
--

--
-- Table structure for table `tbl_notification`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_notification` (
  `notif_id` int(11) NOT NULL AUTO_INCREMENT,
  `resident_id` int(11) NOT NULL,
  `doc_type` int(11) DEFAULT NULL,
  `image_notif` varchar(255) NOT NULL,
  `date_notif` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`notif_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_notification`
--

LOCK TABLES `tbl_notification` WRITE;
/*!40000 ALTER TABLE `tbl_notification` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_notification` VALUES (4,4,3,'http://localhost/barangayrms//public/profile_pics/1714441872_4d5b98d13b36d94bb641.jpg','2024-04-30 02:53:04'),(5,4,2,'http://localhost/barangayrms//public/profile_pics/1714441872_4d5b98d13b36d94bb641.jpg','2024-04-30 03:38:38'),(8,20,2,'http://localhost/barangayrms//public/profile_pics/1714400013_3a35a7adf19e8d1b822a.jpg','2024-04-30 06:22:16'),(9,20,2,'http://localhost/barangayrms//public/profile_pics/1714400013_3a35a7adf19e8d1b822a.jpg','2024-04-30 06:32:10'),(10,20,3,'http://localhost/barangayrms//public/profile_pics/1714400013_3a35a7adf19e8d1b822a.jpg','2024-04-30 06:32:23'),(11,20,3,'http://localhost/barangayrms//public/profile_pics/1714400013_3a35a7adf19e8d1b822a.jpg','2024-04-30 06:33:01'),(12,20,2,'http://localhost/barangayrms//public/profile_pics/1714400013_3a35a7adf19e8d1b822a.jpg','2024-04-30 06:33:23'),(13,20,1,'http://localhost/barangayrms//public/profile_pics/1714400013_3a35a7adf19e8d1b822a.jpg','2024-04-30 06:33:44'),(14,37,2,'http://localhost/barangayrms/public/profile_pics/1714459821_9cc449cd366dfdfdab67.jpg','2024-04-30 06:50:45'),(15,37,3,'http://localhost/barangayrms//public/profile_pics/1714460006_2fd100e9b0d8b25c0195.jpg','2024-04-30 06:54:04'),(16,37,3,'http://localhost/barangayrms/public/profile_pics/1714536464_e8e7e323dead25817242.jpg','2024-05-01 04:09:28'),(17,1,2,'http://localhost/barangayrms/public/profile_pics/1714609153_0480550b608ea4518c6b.jpg','2024-05-02 00:19:37'),(18,19,3,'http://localhost/barangayrms/public/profile_pics/1714618302_e35b783e31db11954ea8.jpg','2024-05-02 03:09:11'),(19,20,1,'http://localhost/barangayrms/public/profile_pics/1714480573_ef15d60fd8d01583077e.jpg','2024-05-02 08:23:51'),(20,46,2,'','2024-05-20 06:18:19'),(21,46,3,'','2024-05-20 06:20:42');
/*!40000 ALTER TABLE `tbl_notification` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_notification` with 16 row(s)
--

--
-- Table structure for table `tbl_notif_user`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_notif_user` (
  `usernotif_id` int(11) NOT NULL AUTO_INCREMENT,
  `resident_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `certificate_id` int(11) NOT NULL,
  `req_status` varchar(15) NOT NULL,
  `usernotif_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`usernotif_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_notif_user`
--

LOCK TABLES `tbl_notif_user` WRITE;
/*!40000 ALTER TABLE `tbl_notif_user` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_notif_user` VALUES (2,37,19,2,'Approved','2024-04-30 08:41:02'),(3,37,19,2,'Cancelled','2024-04-30 09:21:48'),(4,20,19,3,'Approved','2024-05-02 00:03:07'),(5,20,19,3,'Cancelled','2024-05-02 00:03:15'),(6,1,19,2,'Approved','2024-05-02 00:20:28'),(7,20,19,1,'Approved','2024-05-02 08:25:09'),(8,46,19,2,'Approved','2024-05-20 06:18:54');
/*!40000 ALTER TABLE `tbl_notif_user` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_notif_user` with 7 row(s)
--

--
-- Table structure for table `tbl_official`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_official` (
  `official_id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(30) NOT NULL,
  `term` varchar(50) NOT NULL,
  `committee` varchar(50) NOT NULL,
  `vice_committee` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `purok_id` int(11) NOT NULL,
  `off_uniid` varchar(50) NOT NULL,
  PRIMARY KEY (`official_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_official`
--

LOCK TABLES `tbl_official` WRITE;
/*!40000 ALTER TABLE `tbl_official` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_official` VALUES (2,'Captain','Second','Committee on Peace and Order','Committee on Ways and Means','Active',37,7,'WWo74VazELQ0XytyNETl4l6UwJEEnA'),(5,'Councilor-1','Second','Committee on Education','Committee on Education','Active',6,4,'a072ff5b55affa024fbef31438bd4e47'),(6,'Councilor-4','Third','Committee on Ways and Means','Committee on Agriculture','Active',18,7,'632c06c702491cee7306484aa5926231');
/*!40000 ALTER TABLE `tbl_official` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_official` with 3 row(s)
--

--
-- Table structure for table `tbl_purok`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_purok` (
  `purok_id` int(11) NOT NULL AUTO_INCREMENT,
  `purok_desc` varchar(30) NOT NULL,
  PRIMARY KEY (`purok_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_purok`
--

LOCK TABLES `tbl_purok` WRITE;
/*!40000 ALTER TABLE `tbl_purok` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_purok` VALUES (1,'Purok-1'),(2,'Purok-2'),(3,'Purok-3'),(4,'Purok-4'),(5,'Purok-5'),(6,'Purok-6'),(7,'Purok-7');
/*!40000 ALTER TABLE `tbl_purok` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_purok` with 7 row(s)
--

--
-- Table structure for table `tbl_requested_cert`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_requested_cert` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `purpose` varchar(100) NOT NULL,
  `request_status` varchar(30) NOT NULL DEFAULT 'Pending',
  `certificate_id` int(11) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `official_id` int(11) NOT NULL,
  `tracking_id` varchar(33) NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_requested_cert`
--

LOCK TABLES `tbl_requested_cert` WRITE;
/*!40000 ALTER TABLE `tbl_requested_cert` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_requested_cert` VALUES (12,'2024-04-21 05:23:53','For Scholarship','Cancelled',2,20,1,'f23a349d899ce5e45d7693e1ef0e118b'),(13,'2024-05-02 00:03:07','For Scholarship','Approved',3,20,19,'517bfce8834af2c58ddf0b1af0a91934'),(16,'2024-04-25 04:35:36','For Job','Approved',1,20,1,'adc1dd1b3aa52eeff2dd50a23c18c479'),(17,'2024-05-02 00:03:15','For Clearance','Cancelled',3,20,19,'29b386cfb06e5c42d04d4777eb008cbf'),(18,'2024-04-29 07:10:00','Sample only','Approved',1,20,19,'aa99653b51904320fd9ef9cbd61c891c'),(19,'2024-04-21 06:02:02','Work','Pending',3,20,0,'9171556b93365040f4ed6a5f2d1c6743'),(20,'2024-04-30 08:25:29','ssss','Approved',2,20,19,'d7c1495d401e4d8899bdab30220303b4'),(23,'2024-05-20 14:53:17','For Scholarship','Approved',1,37,19,'c58cc09716a68c73391f70412063dc0a'),(24,'2024-04-30 08:41:02','Wala lang','Approved',2,37,19,'d0a611ee3ae24ab8bec087c7dd5d2e00'),(25,'2024-04-23 13:17:52','wala lang','Pending',3,37,0,'cb10d0c8f7b653b99d7ec188e967f7a7'),(26,'2024-04-30 02:27:32','For Internship','Pending',3,4,0,'a167eb3ccd3b63e1ff2963210da61e70'),(27,'2024-04-30 02:33:30','Tambay','Pending',2,4,0,'7556fa06809e3a90d72f9ceea8c089b6'),(28,'2024-04-30 02:47:57','','Pending',0,4,0,'e1560b12d44dbd3e771643912016e861'),(29,'2024-04-30 02:48:51','Tambay','Pending',1,4,0,'ca44bf6eff96f22fe9d8ba4911b1c3b7'),(30,'2024-04-30 02:49:35','For Scholarship','Pending',1,4,0,'33058d55ba4b9636cfb54fc6858c1449'),(31,'2024-04-30 02:53:04','Sample only','Pending',3,4,0,'60e56b407055422f0b8cbea139175dca'),(32,'2024-04-30 03:38:38','Tambay','Pending',2,4,0,'6790ae3df53d0d2593bd730c143626af'),(33,'2024-04-30 05:32:12','For Scholarship','Pending',3,37,0,'e3507e1f44e369beef0140b066d8316c'),(34,'2024-04-30 09:18:20','For OJT','Cancelled',2,37,0,'08544dbfaac183459e00c33344bd949e'),(35,'2024-05-20 14:59:05','Tambay','Approved',2,20,0,'c7cc441bb94f86f99ea36bf9f105165e'),(37,'2024-04-30 06:32:23','','Pending',3,20,0,'4d93f88db5a5a432b7112b2a181f49f0'),(38,'2024-04-30 06:33:01','For Internship','Pending',3,20,0,'63433f0d8899de8b9181ccc30b083c6f'),(39,'2024-05-20 15:03:54','','Approved',2,20,0,'2a17dba5ff2d1a0cfe0fe87423714d39'),(40,'2024-05-20 14:56:15','','Approved',1,20,0,'a5c4cd6d3fb604f06058e6721d902e16'),(41,'2024-04-30 09:21:48','Tambay','Cancelled',2,37,19,'1399d2fcf161941314a803d0928fb139'),(42,'2024-04-30 06:54:04','For Scholarship','Pending',3,37,0,'acaff1613d1c45f4a022256f3ef4a306'),(43,'2024-05-20 14:52:01','wala lang','Approved',1,37,0,'a3b79a05e580b5d2483083c123eb996b'),(44,'2024-05-01 04:09:28','Tambay','Pending',3,37,0,'970b55146c8dc049ea0f45a913f42634'),(45,'2024-05-02 00:20:28','Tambay','Approved',2,1,19,'0e3e6b5340848f96b2013f941f635569'),(46,'2024-05-02 03:09:11','For OJT','Pending',3,19,0,'5a2fdc6dfbb86d9d149ab57d982c5ce5'),(47,'2024-05-02 08:25:09','For Scholarship','Approved',1,20,19,'b5d8ea6a26b14cd18c32e2b75ac1212b'),(48,'2024-05-20 06:18:54','for tambay only','Approved',2,46,19,'37b03e35e4548d1d78628bfa8ee908fb'),(49,'2024-05-20 06:20:42','for glitzwyn','Pending',3,46,0,'07c9a70284ed39c80acf0c37c2f5faba');
/*!40000 ALTER TABLE `tbl_requested_cert` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_requested_cert` with 33 row(s)
--

--
-- Table structure for table `tbl_resident`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_resident` (
  `resident_id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `suffix` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` varchar(5) NOT NULL,
  `datebirth` date NOT NULL,
  `placebirth` varchar(50) NOT NULL,
  `civilstatus` varchar(20) NOT NULL,
  `ethnicity` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `citizenship` varchar(30) NOT NULL,
  `education` varchar(50) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `for4ps` varchar(5) NOT NULL,
  `pwd` varchar(5) NOT NULL,
  `senior` varchar(5) NOT NULL,
  `precinct` varchar(15) NOT NULL,
  `uniid` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `purok_id` int(11) NOT NULL,
  `household_id` int(11) NOT NULL,
  PRIMARY KEY (`resident_id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_resident`
--

LOCK TABLES `tbl_resident` WRITE;
/*!40000 ALTER TABLE `tbl_resident` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_resident` VALUES (1,'Tattersall','Jacinda','Gotecliffe','','Female','48','2023-11-09','USA','Cohabitation','Cebuano','Teacher','Filipino','','Islam','355-845-6043','No','No','No','0025B','A519EztXUhMVTeIbUntjzRqKD5upFq','http://localhost/barangayrms/public/profile_pics/1714609153_0480550b608ea4518c6b.jpg',4,4),(6,'Killough','Jordain','Schuelcke','','','77','2023-10-20','Australia','Separated','Illonggo','Athlete','Filipino','','Islam','865-421-5664','Yes','Yes','Yes','0017C','6TJtl0GBP298m19N5S13qUu35K96b0','',4,6),(7,'Bathersby','Cecelia','Sager','Jr','Female','26','2023-06-08','France','Cohabitation','Illonggo','Artist','Filipino','','Baptist','684-545-8845','No','Yes','No','0017C','cGf8dE4P6K1CoCuAo8oc8FyLb0oCGY','',1,5),(8,'Yegorev','Merilee','Nisby','','Female','20','2023-11-21','France','Married','Ilocano','Artist','Filipino','','Roman Catholic','854-343-4616','No','No','Yes','0019B','CDlz637NOJWj3lFe3G483RkeQYZrX0','',4,1),(9,'Lauderdale','Delia','Digg','','Female','92','2023-04-09','Australia','Cohabitation','Tagalog','Artist','Filipino','','','959-634-7996','No','Yes','No','0021A','Gnz4F2ndc987H8i247jd28YPAhV8O3','',1,5),(10,'Galilee','Neda','Lovatt','','Female','56','2023-03-27','Japan','Married','Tagalog','Athlete','Filipino','','','387-243-4939','Yes','Yes','No','0019B','vwA321QRN3h43Cf1Hf2912exhx3X3i','',4,4),(13,'Sully','Allene','Lening','','Female','96','2023-02-26','Sydney','Single','Illonggo','Pilot','Filipino','','','329-476-9885','No','Yes','Yes','0023A','9Jc4CR44KKDWUNAUvwSY422f202r3G','',7,3),(14,'Reeders','Madelin','Piddlesden','','Female','31','2023-06-04','Japan','Separated','Cebuano','Pilot','Filipino','','Islam','108-897-1538','Yes','No','Yes','0019B','sov5lNwf7ru7s1IFygtjq5gZ0Lx7s3','',7,3),(15,'Maund','Llewellyn','Roget','','Male','71','2023-12-19','Tokyo','Cohabitation','Illonggo','Engineer','Filipino','','','260-430-2930','Yes','Yes','Yes','0023A','QWLhdQHZVy94SdI1gJTDI11Z9D36w4','',4,6),(17,'Chel','Kelcie','O\'Dowgaine','II','Female','38','2023-09-22','USA','Single','Illonggo','Scientist','Filipino','Professional Degree','Roman Catholic','489-585-7231','Yes','Yes','Yes','0025B','9IBcS0J5b3uw7W98UkS2z1B7xy6374','',1,5),(18,'Sheasby','Mehetabel','Profit','','Female','80','2023-09-23','France','Cohabitation','Illonggo','Artist','Filipino','','Islam','786-279-7727','Yes','No','Yes','0025B','g0mI8kZ9yTmnR7HLg99DK1o6H25hMi','',4,4),(19,'Lopez','Ross','Shergold','','Female','71','2023-05-01','Rio de Janeiro','Married','Illonggo','Writer','Filipino','','','998-929-2690','No','Yes','Yes','0025B','drBFAUKqD58yq7itKRswobHmTuhU93','http://localhost/barangayrms/public/profile_pics/1716291382_a1b45683953a51777599.jpg',4,4),(20,'Tamad','Karl','Mcapagal','','Male','31','1970-01-01','Australia','Single','Cebuano','Police','Filipino','','Roman Catholic','+649-221-1212','No','Yes','Yes','0023A','306GW3knFPsgnyZsG5D051AfZ4tbvO','http://localhost/barangayrms/public/profile_pics/1714480573_ef15d60fd8d01583077e.jpg',7,3),(37,'John lloyd','Ritchel','Jumawan','Jr.','Male','23','2000-02-14','Auraora, Zamboanga del Sur','Single','Cebuano','Student','Filipino','College Undergrad','Roman Catholic','09811043220','No','No','No','0023A','23cbcf652f5882e9d2e802c4611b9c','http://localhost/barangayrms/public/profile_pics/1714536464_e8e7e323dead25817242.jpg',6,7),(40,'Shackesby','Sandye','Ajsik','','Female','47','2012-01-27','Sydney','Separated','Ilocano','Engineer','Filipino','','Islam','898-894-1159','Yes','Yes','Yes','0021A','8TC79u7Q16nSH81eQVroA5MglC5a8u','',2,21),(41,'Ewbank','Cory','Weight','','Female','82','1967-01-14','Brazil','Married','Bisaya','Engineer','Filipino','PhD','Buddhism','840-128-1647','No','Yes','Yes','0019B','jc8778yM27ec99buirZ71oa52h4Zf5','',4,4),(42,'Spittles','Godard','Weeks','','Male','52','1962-07-21','Sydney','Widow/er','Bisaya','Engineer','Filipino','Associate\'s Degree','Judaism','889-659-9429','No','Yes','Yes','0023A','ssxy7tSp307AmD64l3ZQBWj3Gyb0Am','',7,2),(43,'Lansdown','Fulton','Postill','Jr','','56','1956-06-29','Australia','Cohabitation','Illonggo','Athlete','Filipino','','','203-912-2793','No','No','No','0025B','5c6667LpVuv61V2yT5P04h4Xf6gonh','',7,29),(44,'Brockhurst','Gabriell','Ianson','','Female','85','2020-07-21','France','Single','Cebuano','Engineer','Filipino','','Islam','827-431-0134','No','No','Yes','0025B','rhc5299EMMy0JOEA4qy1at36USt7nQ','',7,17),(45,'Szimon','Grover','Dunmore','','','50','1951-06-10','Australia','Separated','Illonggo','Chef','Filipino','','','159-970-2927','No','Yes','No','0017C','2sf139XTNF8iP5Zj0Q5XVS3BVET2m7','',4,4),(46,'Coal','Meagan','Galloway','','Female','68','1974-01-11','New York','Married','Cebuano','Doctor','Filipino','Master\'s Degree','Judaism','529-270-0656','Yes','Yes','Yes','0025B','VLSc91fHylj0L9Ba6327f9IrqQ2jw0','',7,3),(47,'Messer','Amabelle','Skinley','III','Female','90','1985-04-23','Australia','Separated','Ilocano','Engineer','Filipino','','','365-997-3621','No','No','Yes','0025B','CrUWLtt1BoLc6E47Dl2ujgytvyur47','',6,14),(48,'Bonus','Worden','Yaakov','','Male','42','1970-11-18','Sydney','Cohabitation','Cebuano','Teacher','Filipino','','','460-775-5712','No','No','Yes','0025B','a2xrOcdqVX3LNRBlNW429l88vWk910','',5,9),(49,'Haberfield','Camala','Pillington','','Female','53','1958-03-29','Australia','Single','Cebuano','Artist','Filipino','','','444-958-0046','Yes','Yes','Yes','0021A','5264k30u16A92K9D7Ey22ncki157A9','',6,2),(50,'Chatelet','Christel','Monini','','Female','29','1954-08-01','Rio de Janeiro','Separated','Cebuano','Musician','Filipino','','Islam','816-860-2900','Yes','No','Yes','0017C','vict11Aka7jhdWqk12F35U3n6n5HVi','',2,13),(51,'Whelpton','Dannel','Hamber','','Male','19','1986-08-28','Rio de Janeiro','Married','Bisaya','Engineer','Filipino','','','737-739-8805','No','Yes','No','0023A','vgpdRjLu56i49I2wHD9jsK68s7M8cb','',1,5),(52,'Sanney','Ilaire','Crayk','IV','Male','41','1958-02-22','Sydney','Single','Ilocano','Pilot','Filipino','Master\'s Degree','Buddhism','186-631-6603','No','Yes','Yes','0025B','2d85veK2aj38j62C354k49d7XPTpT1','',1,5),(53,'Lundon','Farly','Capron','','Male','59','1965-09-27','Sydney','Single','Illonggo','Pilot','Filipino','','','641-539-1590','Yes','Yes','Yes','0023A','9fno7C8H0WNQiqqhMY4k1C5304MQXx','',4,10),(54,'Dearnley','Aprilette','Ousley','','Female','28','1953-02-12','New York','Cohabitation','Tagalog','Writer','Filipino','PhD','Islam','426-613-4505','Yes','No','No','0017C','SHXuE5pHWz0c5izSr1A188BCv3G6Jk','',4,1),(55,'Ruffles','Zorina','Czaple','','Female','91','1967-09-13','Rio de Janeiro','Separated','Tagalog','Teacher','Filipino','','','467-106-5758','No','Yes','No','0017C','58U1NydJU0dOLzkcd1i3V79iw27R06','',6,32),(56,'Sterry','Donal','de Merida','Jr','Male','91','1997-12-21','France','Cohabitation','Bisaya','Doctor','Filipino','','','254-146-5355','No','Yes','Yes','0019B','7J0e56sso93UI412LWuh9667pCh6y1','',4,1),(57,'Ellen','Lonna','Armatys','','Female','47','1976-09-11','Australia','','Bisaya','Musician','Filipino','','','638-409-0500','Yes','No','No','0025B','ArvZd0ew1II8zYiQ4I9I4N8kyAQL5X','',1,5),(58,'Keri','Jaimie','Winger','','Female','48','1960-08-15','Australia','Cohabitation','Illonggo','Doctor','Filipino','','Islam','236-672-3812','No','Yes','No','0025B','pJblM1iH9m4D05cK8jzR6NyG6N36pF','',3,31),(59,'Feldbau','Jayme','Treadgall','II','Male','31','1968-06-26','Paris','Married','Cebuano','Doctor','Filipino','','','564-961-7709','Yes','Yes','Yes','0017C','7hV7al7AAqxHY8S99EfjuSbQ22luvx','',4,6),(60,'Dyerson','Amalie','Calveley','','Female','58','1962-08-19','France','Cohabitation','Tagalog','Pilot','Filipino','','Islam','972-638-3444','No','No','No','0019B','xL1Yo2MkXZg0nAwTCWNeC9RP2lz19z','',7,29),(61,'Loughlan','Elysha','Cristofalo','','Female','74','1991-10-21','Japan','Single','Tagalog','Chef','Filipino','','','242-966-6657','Yes','Yes','Yes','0017C','aE4t40i46Z0vTy2lyop38ADFsFI3Ip','',1,5),(62,'Dionisetti','Elayne','Loffill','','Female','100','1969-09-01','New York','Married','Tagalog','Artist','Filipino','','Islam','741-484-7571','Yes','Yes','Yes','0021A','e2mXALMX4VT3tEhx56rT9dDygE6DEy','',7,18),(63,'Felton','Lorette','Titcomb','','Female','42','1990-04-16','Rio de Janeiro','Cohabitation','Ilocano','Musician','Filipino','','','771-312-7703','No','No','No','0021A','KemL7QlAOow9JbZ4ET8KDo5ttKi981','',2,19),(64,'Templeton','Tadeo','Gosswell','III','Male','56','2008-08-17','New York','','Cebuano','Pilot','Filipino','','','963-290-9194','No','Yes','No','0023A','yDQ3c42k53FET43WBJM0AP0pL7ly9h','',2,21),(65,'Looney','Bruce','Steart','','Male','93','1985-01-07','France','','Bisaya','Artist','Filipino','','Islam','900-729-4861','Yes','No','Yes','0023A','Haj8J8RVAt2295f97W454QKR3W547T','',5,22),(66,'Paydon','Deana','Pynner','','Female','65','1980-12-02','Rio de Janeiro','Separated','Cebuano','Teacher','Filipino','','Islam','975-188-9386','Yes','Yes','Yes','0021A','pUs0P14c1G7y5nU46XMCUc5HamZPUX','',1,5),(67,'Calender','Ede','Rallin','','Female','21','1984-08-14','Sydney','Single','Tagalog','Teacher','Filipino','','','399-171-9071','No','Yes','No','0025B','9H34VC971WWqEm6XKNJ57jGS3RWslB','',5,22),(68,'Brodnecke','Ruben','Bentote','','Male','33','2006-03-23','Rio de Janeiro','Separated','Bisaya','Artist','Filipino','','','669-979-2968','Yes','No','No','0019B','t06ERJlU26m0JzlD88Nok5KK751355','',3,25),(69,'Floyed','Burg','Andriss','','','100','2020-07-03','New York','Single','Cebuano','Chef','Filipino','','','185-321-4625','Yes','No','No','0025B','1ME6xo4c50N5Kk0L58efO86C2Vjb7e','',3,25),(70,'Shadbolt','Dinnie','Lenard','Sr','Female','38','1961-01-05','USA','Cohabitation','Tagalog','Teacher','Filipino','High School Diploma','Islam','734-800-9562','Yes','Yes','Yes','0023A','4tcSce7Y6Qk63jTUJmtna9j2D851T9','',7,3),(71,'Backes','Mirilla','Gowman','','Female','97','1968-10-27','Tokyo','Widow/er','Bisaya','Athlete','Filipino','High School Diploma','Judaism','856-723-7890','Yes','Yes','Yes','0017C','6k9ytCp7fL99QEneKh98y0OWA2HOuv','',7,3),(72,'Poller','Guthry','Bolesma','','Male','83','1957-06-08','Paris','Single','Bisaya','Chef','Filipino','','','734-324-2689','No','Yes','Yes','0017C','r5LH2955vrF68RKBZVi9W9yw4C5rY9','',2,19),(73,'Maple','Beale','Salvin','','Male','74','2009-03-14','Rio de Janeiro','Separated','Illonggo','Musician','Filipino','','','299-585-0238','No','Yes','No','0021A','Qtf3SxKVd5cjET3s8VcXHT5BH8rLJ7','',7,30),(74,'Sullivan','Joey','Burstow','Jr','','50','2005-04-25','Australia','Separated','Illonggo','Scientist','Filipino','','','432-209-8923','No','No','Yes','0023A','d750A00CnIL5HoT21tUDHwhjgoFXR3','',3,31),(75,'Streak','Alexio','Karpychev','II','Male','51','1993-07-18','Rio de Janeiro','Cohabitation','Tagalog','Athlete','Filipino','','','448-503-5573','Yes','No','No','0017C','onUtN3g7Q6q2E0EWOC2T2GeliDvFX6','',3,31),(76,'Fetherston','Ransell','Kindleside','','Male','64','1973-09-20','Rio de Janeiro','Single','Cebuano','Musician','Filipino','','','501-602-6598','No','Yes','Yes','0023A','Rev3JL8O16npNYLG6RAud95b7lng7X','',5,22),(77,'Elvin','Mable','Tynemouth','','Female','63','1962-09-20','Brazil','Cohabitation','Bisaya','Chef','Filipino','','','320-813-4954','No','No','No','0025B','4f8xr8174OUgvW7QZI0ruIUoarR6vm','',1,5),(78,'Birchner','Kailey','Southam','','Female','34','1999-09-05','France','','Bisaya','Writer','Filipino','','','489-460-3584','No','No','Yes','0025B','D7k0YEigDXA0cDistET1YJwgQj8zqJ','',3,25),(79,'Francisco','Elliott','Lenton','','Male','21','1994-04-21','France','Single','Tagalog','Scientist','Filipino','','','771-582-8281','Yes','Yes','Yes','0021A','tp6CJTaBVgfAa9DVT8lVcpA4P6888R','',1,5),(80,'Hinstridge','Ahmed','Strode','','Male','33','2022-03-07','Japan','Cohabitation','Illonggo','Engineer','Filipino','','','796-180-4781','Yes','Yes','No','0017C','0gM3x3Bm4gSkM9MA87Q37cLP76ZF4X','',7,29),(81,'Cloney','Rosamond','Barnett','IV','Female','20','1989-10-11','USA','Separated','Illonggo','Writer','Filipino','','Islam','585-537-9476','No','No','No','0021A','IRFTpraQ1nS2PQWt8o46TT7kSkCuTm','',1,5),(82,'Asals','Newton','Janikowski','','Male','72','1961-09-28','Australia','Cohabitation','Ilocano','Doctor','Filipino','','','732-193-4478','Yes','Yes','No','0021A','AF455dR52NQ6I1VSbuoc61UXXzet36','',3,8),(83,'Whitebrook','Lilias','Halpin','','Female','66','1963-11-20','Sydney','Single','Bisaya','Musician','Filipino','','','534-405-2509','Yes','Yes','Yes','0023A','2XZONowXYRz4xWBew6fH7QzMraflGf','',7,3),(84,'Pencott','Filide','Napolione','','Female','39','2011-02-19','Sydney','Cohabitation','Bisaya','Engineer','Filipino','','Islam','228-317-9868','Yes','No','Yes','0021A','MCVYpvOh9LiKk44k8U06wEkaZ900i2','',6,23),(85,'Bambrough','Abagael','Wason','IV','Female','72','2003-03-01','Sydney','Separated','Cebuano','Musician','Filipino','','','934-119-8621','No','No','Yes','0017C','yh4u4cV77TMgOSNYR9JX8cp253M7cC','',3,8),(86,'Baber','Ave','Caldwell','','Male','56','2015-11-29','Tokyo','Cohabitation','Bisaya','Athlete','Filipino','','','109-176-7094','Yes','No','Yes','0025B','hXru90AQYoOn2naI1Is6y99R19rLJh','',3,8),(87,'Walklett','Jasun','Meere','Sr','Genderflui','53','2007-05-15','France','Cohabitation','Ilocano','Athlete','Filipino','Associate\'s Degree','Buddhism','363-482-2309','Yes','Yes','No','0019B','QH4cH3VD6t4tLGL6eklX0p9ZSjzNfQ','',4,4),(88,'Codrington','Clare','Benzing','','Female','98','1970-05-14','Australia','Cohabitation','Illonggo','Engineer','Filipino','','Islam','550-435-7080','No','No','No','0025B','2n37lbdpoF60V8s08dvkfZAu8t45vE','',5,34),(89,'Lammerich','Leonard','Asquith','','Male','65','1996-07-29','Brazil','','Bisaya','Artist','Filipino','','','440-580-0144','No','No','Yes','0021A','q57Nu0Zc4hzhJez6LUfHsU6gQKAGZZ','',4,4),(90,'*','','','','','','1970-01-01','','','','','','','','','','','','','dc425cac1c5d9b5cdb10150b269c8d','',0,0),(91,'','','','','','','2025-09-27','','','','','','','','','','','','','6bb86d6236ece13c587cc345951285','',0,0),(95,'Hello World','','','','','','1970-01-01','','','','','','','','','','','','','6a8fc0b5d12838363d0343db77abf0','',1,5),(97,'Dela Cruz','Juan','Batumbakal','III','Male','35','1989-05-01','Maranding, Lala, Lanao del Norte','Married','Bisaya','Fisherman','Filipino','Elem. Graduate','Roman Catholic','09101001221','Yes','No','No','0025B','f4e78d5739f720e14ee38da8a4aee8','',6,2);
/*!40000 ALTER TABLE `tbl_resident` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_resident` with 68 row(s)
--

--
-- Table structure for table `tbl_resident_store`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_resident_store` (
  `resident_id_store` int(11) NOT NULL AUTO_INCREMENT,
  `resident_id` int(11) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `suffix` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` varchar(5) NOT NULL,
  `datebirth` date DEFAULT NULL,
  `placebirth` varchar(50) NOT NULL,
  `civilstatus` varchar(20) NOT NULL,
  `ethnicity` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `citizenship` varchar(30) NOT NULL,
  `education` varchar(50) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `for4ps` varchar(5) NOT NULL,
  `pwd` varchar(5) NOT NULL,
  `senior` varchar(5) NOT NULL,
  `precinct` varchar(15) NOT NULL,
  `purok_id` varchar(11) NOT NULL,
  `household_id` varchar(11) NOT NULL,
  `resident_status` varchar(30) NOT NULL DEFAULT 'Pending',
  `date_requested` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`resident_id_store`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_resident_store`
--

LOCK TABLES `tbl_resident_store` WRITE;
/*!40000 ALTER TABLE `tbl_resident_store` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_resident_store` VALUES (33,37,'','','','','','','2000-05-24','','','','','','','','','','','','','','','Approved','2024-04-18 13:04:29'),(36,37,'Rachelle','','','','','','2000-02-14','','','','','','','','','','','','','','','Pending','2024-04-18 13:04:29'),(37,3,'Kim','','','','','','2024-01-28','','','','','','','','','','','','','','','Approved','2024-04-18 13:04:29'),(41,3,'','','','','','','2024-01-28','','','','','','','Iglesia Ni Cristo','','','','','','','','Pending','2024-04-18 13:04:29'),(42,3,'','','','','','','2024-01-28','','','','','','Vocational','','','','','','','','','Pending','2024-04-18 13:04:29'),(43,3,'','','','','','','2024-01-28','','','Tagalog','','','','','','','','','','','','Pending','2024-04-18 13:04:29'),(44,3,'Luhh','','','','','','2024-01-28','','','','','','','','','','','','','','','Pending','2024-04-18 13:04:29'),(45,3,'adsad','','','','','','2024-01-28','','','','','','','','','','','','','','','Pending','2024-04-18 13:04:29'),(46,3,'szzz','','','','','','2024-01-28','','','','','','','','','','','','','','','Pending','2024-04-18 13:05:32'),(47,37,'John lloyd','','','','','','2000-02-14','','','','','','','','','','','','','','','Approved','2024-04-24 02:17:58'),(48,20,'Deles','','','','','','1970-01-01','','','','','','','','','','','','','','','Approved','2024-05-02 08:21:32'),(49,20,'Tamad','','','','','','1970-01-01','','','','','','','','','','','','','','','Approved','2024-05-21 13:08:51');
/*!40000 ALTER TABLE `tbl_resident_store` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_resident_store` with 12 row(s)
--

--
-- Table structure for table `tbl_type_assistance`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_type_assistance` (
  `type_assistance_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_assistance` varchar(30) NOT NULL,
  PRIMARY KEY (`type_assistance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_type_assistance`
--

LOCK TABLES `tbl_type_assistance` WRITE;
/*!40000 ALTER TABLE `tbl_type_assistance` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_type_assistance` VALUES (1,'Financial Aid'),(2,'Health and Services for Kids'),(5,'Optical Assistance'),(6,'Dental Assistance for Kids'),(10,'Gadgets Assistance'),(11,'AICS');
/*!40000 ALTER TABLE `tbl_type_assistance` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_type_assistance` with 6 row(s)
--

--
-- Table structure for table `tbl_user`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `user_uniid` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_user` VALUES (2,'karl','123123123','Resident',20,'3adb338bf49c00004de1e90ba86a41b2'),(9,'chel','1234567','Resident',37,'43f77a9edf699334c2375ae029784f39'),(13,'admin','adminadmin','Admin',19,'5ae92571ffb24cae2b50ff50f5533ff6'),(14,'posner','1234567','Resident',4,'84b9ad406ce2d301fd3c1fe005a70c54'),(15,'resident','resident','Resident',1,'9b8ffa43a285e2f6b901e7c67926aa27'),(16,'katrina','katrina123','Resident',19,'5ec4dba31a1b30219c8a667a3725f860'),(17,'megan','meganmegan','Resident',46,'6a6ecdf82bc22a94b1b6d5c562b3dd3a');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_user` with 7 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET AUTOCOMMIT=@OLD_AUTOCOMMIT */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Tue, 21 May 2024 21:45:27 +0800
