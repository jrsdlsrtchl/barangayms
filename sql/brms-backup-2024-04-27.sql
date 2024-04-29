-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: brmsdb
-- ------------------------------------------------------
-- Server version 	10.4.24-MariaDB
-- Date: Sat, 27 Apr 2024 17:59:52 +0000

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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_activity`
--

LOCK TABLES `tbl_activity` WRITE;
/*!40000 ALTER TABLE `tbl_activity` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_activity` VALUES (1,20,'Chrome','::1','2024-04-03 02:22:34','2024-04-03 02:30:04'),(2,20,'Chrome','::1','2024-04-03 02:48:42','2024-04-03 02:49:57'),(3,20,'Chrome','::1','2024-04-03 02:50:06','2024-04-03 02:50:20'),(4,37,'Chrome','::1','2024-04-03 02:50:30','2024-04-03 02:51:08'),(5,20,'Chrome','::1','2024-04-04 01:57:26','0000-00-00 00:00:00'),(6,20,'Chrome','::1','2024-04-04 02:00:32','0000-00-00 00:00:00'),(7,20,'Chrome','::1','2024-04-16 12:05:28','2024-04-16 12:05:59'),(8,20,'Edge','::1','2024-04-16 12:06:20','2024-04-16 12:06:35'),(9,20,'Chrome','::1','2024-04-16 01:27:58','0000-00-00 00:00:00'),(10,20,'Chrome','::1','2024-04-17 09:07:28','0000-00-00 00:00:00'),(11,37,'Chrome','::1','2024-04-18 12:18:38','2024-04-18 12:20:49'),(12,3,'Chrome','::1','2024-04-18 12:22:12','2024-04-18 12:36:10'),(13,3,'Chrome','::1','2024-04-18 12:43:18','2024-04-18 12:44:29'),(14,3,'Chrome','::1','2024-04-18 12:44:38','0000-00-00 00:00:00'),(15,20,'Chrome','::1','2024-04-19 01:39:30','0000-00-00 00:00:00'),(16,20,'Chrome','::1','2024-04-19 06:25:05','0000-00-00 00:00:00'),(17,20,'Chrome','::1','2024-04-21 03:50:19','0000-00-00 00:00:00'),(18,20,'Chrome','::1','2024-04-22 10:33:10','0000-00-00 00:00:00'),(19,20,'Chrome','::1','2024-04-22 11:02:32','0000-00-00 00:00:00'),(20,37,'Chrome','::1','2024-04-23 01:17:25','0000-00-00 00:00:00'),(21,37,'Chrome','::1','2024-04-23 10:13:40','0000-00-00 00:00:00'),(22,37,'Chrome','::1','2024-04-24 02:14:18','0000-00-00 00:00:00'),(23,20,'Chrome','::1','2024-04-26 02:43:10','0000-00-00 00:00:00'),(24,37,'Chrome','::1','2024-04-26 05:03:51','0000-00-00 00:00:00'),(25,0,'Chrome','::1','2024-04-27 02:45:11','0000-00-00 00:00:00'),(26,37,'Chrome','::1','2024-04-27 03:57:10','2024-04-27 04:45:06');
/*!40000 ALTER TABLE `tbl_activity` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_activity` with 26 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_assistance`
--

LOCK TABLES `tbl_assistance` WRITE;
/*!40000 ALTER TABLE `tbl_assistance` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_assistance` VALUES (53,'2024-04-03',11,4,2,'2024-04-18'),(54,'2024-04-03',11,6,2,'2024-04-18'),(55,'2024-04-03',11,7,2,'2024-04-18'),(56,'2024-04-03',11,8,2,'2024-04-18'),(57,'2024-04-08',1,1,2,'2024-04-23'),(58,'2024-04-08',1,4,2,'2024-04-23'),(59,'2024-04-08',1,6,2,'2024-04-23'),(60,'2024-04-08',1,7,2,'2024-04-23');
/*!40000 ALTER TABLE `tbl_assistance` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_assistance` with 8 row(s)
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
INSERT INTO `tbl_certificate` VALUES (1,'Certificate of Residency','A document issued by the smallest administrative division in the Philippines, certifying residency, employment, and legal purposes, often requiring personal information.'),(2,'Barangay Certification','A local residency certificate issued by the barangay, confirming an individual\'s compliance with local requirements and obligations.'),(3,'Barangay Indigency','To certify that an individual or family is considered indigent or financially disadvantaged'),(8,'Barangay Business Permit','');
/*!40000 ALTER TABLE `tbl_certificate` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_certificate` with 4 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_household`
--

LOCK TABLES `tbl_household` WRITE;
/*!40000 ALTER TABLE `tbl_household` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_household` VALUES (1,'Kissiah Kilfedder',4),(2,'Hillard Buse',6),(3,'Kerry Cannaway',7),(4,'Markos Epine',4),(5,'Clayborne Blinckhorne',1),(6,'Karlene Daglish',4),(7,'Kay Gundry',6),(8,'Jillayne Burgan',3),(9,'Sheila Shawcroft',5),(10,'Leelah Arlt',4),(12,'Barnie Dodman',4),(13,'Emlen Orriss',2),(14,'Mel Mariyushkin',6),(15,'Libbey Lambden',4),(16,'Mikol McTiernan',1),(17,'Oralla Pocknoll',7),(18,'Tabbie McKeever',7),(19,'Marlane Strover',2),(21,'Lonnie Degoe',2),(22,'Jean Brace',5),(23,'Poul Mattiassi',6),(25,'Innis Manna',3),(26,'Sebastiano Sarjent',4),(27,'Micheil Cogar',6),(28,'Anneliese Rainard',5),(29,'Erny Giorgini',7),(30,'Renault Lamshead',7),(31,'Chao Yang',3),(32,'King Kong',6),(34,'Tyrese Halliburton',5);
/*!40000 ALTER TABLE `tbl_household` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_household` with 30 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_official`
--

LOCK TABLES `tbl_official` WRITE;
/*!40000 ALTER TABLE `tbl_official` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_official` VALUES (1,'Councilor-1','First','Committee on Education','Committee on Appropriation','Active',2,3,'Fut0zIHV5qK6k2OIg4O88DE5ASR5nygbHL'),(2,'Captain','Second','Committee on Peace and Order','Committee on Ways and Means','Active',37,7,'WWo74VazELQ0XytyNETl4l6UwJEEnA'),(3,'Councilor-1','Second','Committee on Peace and Order','Committee on Ways and Means','Active',11,3,'78beedfda030d74a52be1adf6e3da3a0');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_requested_cert`
--

LOCK TABLES `tbl_requested_cert` WRITE;
/*!40000 ALTER TABLE `tbl_requested_cert` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_requested_cert` VALUES (12,'2024-04-21 05:23:53','For Scholarship','Cancelled',2,20,1,'f23a349d899ce5e45d7693e1ef0e118b'),(13,'2024-04-21 05:23:55','For Scholarship','Pending',3,20,0,'517bfce8834af2c58ddf0b1af0a91934'),(16,'2024-04-25 04:35:36','For Job','Approved',1,20,1,'adc1dd1b3aa52eeff2dd50a23c18c479'),(17,'2024-04-21 05:16:34','For Clearance','Pending',3,20,0,'29b386cfb06e5c42d04d4777eb008cbf'),(18,'2024-04-21 05:19:06','Sample only','Pending',1,20,0,'aa99653b51904320fd9ef9cbd61c891c'),(19,'2024-04-21 06:02:02','Work','Pending',3,20,0,'9171556b93365040f4ed6a5f2d1c6743'),(20,'2024-04-22 10:34:06','ssss','Pending',2,20,0,'d7c1495d401e4d8899bdab30220303b4'),(23,'2024-04-23 01:17:42','For Scholarship','Pending',1,37,0,'c58cc09716a68c73391f70412063dc0a'),(24,'2024-04-23 10:13:54','Wala lang','Pending',2,37,0,'d0a611ee3ae24ab8bec087c7dd5d2e00'),(25,'2024-04-23 13:17:52','wala lang','Pending',3,37,0,'cb10d0c8f7b653b99d7ec188e967f7a7');
/*!40000 ALTER TABLE `tbl_requested_cert` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_requested_cert` with 10 row(s)
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
  `purok_id` int(11) NOT NULL,
  `household_id` int(11) NOT NULL,
  PRIMARY KEY (`resident_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_resident`
--

LOCK TABLES `tbl_resident` WRITE;
/*!40000 ALTER TABLE `tbl_resident` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_resident` VALUES (1,'Tattersall','Jacinda','Gotecliffe','','Female','48','2023-11-09','USA','Cohabitation','Cebuano','Teacher','Filipino','','','355-845-6043','No','No','No','0025B','A519EztXUhMVTeIbUntjzRqKD5upFq',4,4),(4,'Posner','Biddy','Devo','','Female','52','2023-10-12','Tokyo','Married','Cebuano','Pilot','Filipino','','','845-579-9953','No','Yes','Yes','0017C','HBCw9Fx01RizP30iwpKWpg23C98iGa',4,6),(6,'Killough','Jordain','Schuelcke','','','77','2023-10-20','Australia','Separated','Illonggo','Athlete','Filipino','','Islam','865-421-5664','Yes','Yes','Yes','0017C','6TJtl0GBP298m19N5S13qUu35K96b0',4,6),(7,'Bathersby','Cecelia','Sager','Jr','Female','26','2023-06-08','France','Cohabitation','Illonggo','Artist','Filipino','','Baptist','684-545-8845','No','Yes','No','0017C','cGf8dE4P6K1CoCuAo8oc8FyLb0oCGY',1,5),(8,'Yegorev','Merilee','Nisby','','Female','20','2023-11-21','France','Married','Ilocano','Artist','Filipino','','','854-343-4616','No','No','Yes','0019B','CDlz637NOJWj3lFe3G483RkeQYZrX0',4,1),(9,'Lauderdale','Delia','Digg','','Female','92','2023-04-09','Australia','Cohabitation','Tagalog','Artist','Filipino','','','959-634-7996','No','Yes','No','0021A','Gnz4F2ndc987H8i247jd28YPAhV8O3',1,5),(10,'Galilee','Neda','Lovatt','','Female','56','2023-03-27','Japan','Married','Tagalog','Athlete','Filipino','','','387-243-4939','Yes','Yes','No','0019B','vwA321QRN3h43Cf1Hf2912exhx3X3i',4,4),(13,'Sully','Allene','Lening','','Female','96','2023-02-26','Sydney','','Illonggo','Pilot','Filipino','','','329-476-9885','No','Yes','Yes','0023A','9Jc4CR44KKDWUNAUvwSY422f202r3G',7,3),(14,'Reeders','Madelin','Piddlesden','','Female','31','2023-06-04','Japan','Separated','Cebuano','Pilot','Filipino','','Islam','108-897-1538','Yes','No','Yes','0019B','sov5lNwf7ru7s1IFygtjq5gZ0Lx7s3',7,3),(15,'Maund','Llewellyn','Roget','','Male','71','2023-12-19','Tokyo','Cohabitation','Illonggo','Engineer','Filipino','','','260-430-2930','Yes','Yes','Yes','0023A','QWLhdQHZVy94SdI1gJTDI11Z9D36w4',4,6),(17,'Chel','Kelcie','O\'Dowgaine','II','Female','38','2023-09-22','USA','Single','Illonggo','Scientist','Filipino','Professional Degree','Roman Catholic','489-585-7231','Yes','Yes','Yes','0025B','9IBcS0J5b3uw7W98UkS2z1B7xy6374',1,5),(18,'Sheasby','Mehetabel','Profit','','Female','80','2023-09-23','France','Cohabitation','Illonggo','Artist','Filipino','','Islam','786-279-7727','Yes','No','Yes','0025B','g0mI8kZ9yTmnR7HLg99DK1o6H25hMi',4,4),(19,'Maxted','Katerina','Shergold','','','71','2023-05-01','Rio de Janeiro','Married','Illonggo','Writer','Filipino','','','998-929-2690','No','Yes','Yes','0025B','drBFAUKqD58yq7itKRswobHmTuhU93',4,4),(20,'Macarambon','Karl','Mcapagal','','Male','31','2000-05-24','Australia','Single','Cebuano','Police','Filipino','','Roman Catholic','+649-221-1212','No','Yes','Yes','0023A','306GW3knFPsgnyZsG5D051AfZ4tbvO',7,3),(37,'John lloyd','Ritchel','Jumawan','Jr.','Male','23','2000-02-14','Auraora, Zamboanga del Sur','Single','Cebuano','Student','Filipino','College Undergrad','Roman Catholic','09811043220','No','No','No','0023A','23cbcf652f5882e9d2e802c4611b9c',6,32);
/*!40000 ALTER TABLE `tbl_resident` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_resident` with 15 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_resident_store`
--

LOCK TABLES `tbl_resident_store` WRITE;
/*!40000 ALTER TABLE `tbl_resident_store` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_resident_store` VALUES (32,20,'','','Mcapagal','','','',NULL,'','','','','','','','','','','','','','','Approved','2024-04-18 13:04:29'),(33,37,'','','','','','','2000-05-24','','','','','','','','','','','','','','','Approved','2024-04-18 13:04:29'),(35,20,'Macarambon','','','','','','2000-05-24','','','','','','','','','','','','','','','Approved','2024-04-18 13:04:29'),(36,37,'Rachelle','','','','','','2000-02-14','','','','','','','','','','','','','','','Pending','2024-04-18 13:04:29'),(37,3,'Kim','','','','','','2024-01-28','','','','','','','','','','','','','','','Approved','2024-04-18 13:04:29'),(41,3,'','','','','','','2024-01-28','','','','','','','Iglesia Ni Cristo','','','','','','','','Pending','2024-04-18 13:04:29'),(42,3,'','','','','','','2024-01-28','','','','','','Vocational','','','','','','','','','Pending','2024-04-18 13:04:29'),(43,3,'','','','','','','2024-01-28','','','Tagalog','','','','','','','','','','','','Pending','2024-04-18 13:04:29'),(44,3,'Luhh','','','','','','2024-01-28','','','','','','','','','','','','','','','Pending','2024-04-18 13:04:29'),(45,3,'adsad','','','','','','2024-01-28','','','','','','','','','','','','','','','Pending','2024-04-18 13:04:29'),(46,3,'szzz','','','','','','2024-01-28','','','','','','','','','','','','','','','Pending','2024-04-18 13:05:32'),(47,37,'John lloyd','','','','','','2000-02-14','','','','','','','','','','','','','','','Approved','2024-04-24 02:17:58');
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_user` VALUES (2,'karl','1234567','Resident',20,'3adb338bf49c00004de1e90ba86a41b2'),(9,'chel','1234567','Resident',37,'43f77a9edf699334c2375ae029784f39');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_user` with 2 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_activity`
--

LOCK TABLES `tbl_activity` WRITE;
/*!40000 ALTER TABLE `tbl_activity` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_activity` VALUES (1,20,'Chrome','::1','2024-04-03 02:22:34','2024-04-03 02:30:04'),(2,20,'Chrome','::1','2024-04-03 02:48:42','2024-04-03 02:49:57'),(3,20,'Chrome','::1','2024-04-03 02:50:06','2024-04-03 02:50:20'),(4,37,'Chrome','::1','2024-04-03 02:50:30','2024-04-03 02:51:08'),(5,20,'Chrome','::1','2024-04-04 01:57:26','0000-00-00 00:00:00'),(6,20,'Chrome','::1','2024-04-04 02:00:32','0000-00-00 00:00:00'),(7,20,'Chrome','::1','2024-04-16 12:05:28','2024-04-16 12:05:59'),(8,20,'Edge','::1','2024-04-16 12:06:20','2024-04-16 12:06:35'),(9,20,'Chrome','::1','2024-04-16 01:27:58','0000-00-00 00:00:00'),(10,20,'Chrome','::1','2024-04-17 09:07:28','0000-00-00 00:00:00'),(11,37,'Chrome','::1','2024-04-18 12:18:38','2024-04-18 12:20:49'),(12,3,'Chrome','::1','2024-04-18 12:22:12','2024-04-18 12:36:10'),(13,3,'Chrome','::1','2024-04-18 12:43:18','2024-04-18 12:44:29'),(14,3,'Chrome','::1','2024-04-18 12:44:38','0000-00-00 00:00:00'),(15,20,'Chrome','::1','2024-04-19 01:39:30','0000-00-00 00:00:00'),(16,20,'Chrome','::1','2024-04-19 06:25:05','0000-00-00 00:00:00'),(17,20,'Chrome','::1','2024-04-21 03:50:19','0000-00-00 00:00:00'),(18,20,'Chrome','::1','2024-04-22 10:33:10','0000-00-00 00:00:00'),(19,20,'Chrome','::1','2024-04-22 11:02:32','0000-00-00 00:00:00'),(20,37,'Chrome','::1','2024-04-23 01:17:25','0000-00-00 00:00:00'),(21,37,'Chrome','::1','2024-04-23 10:13:40','0000-00-00 00:00:00'),(22,37,'Chrome','::1','2024-04-24 02:14:18','0000-00-00 00:00:00'),(23,20,'Chrome','::1','2024-04-26 02:43:10','0000-00-00 00:00:00'),(24,37,'Chrome','::1','2024-04-26 05:03:51','0000-00-00 00:00:00'),(25,0,'Chrome','::1','2024-04-27 02:45:11','0000-00-00 00:00:00'),(26,37,'Chrome','::1','2024-04-27 03:57:10','2024-04-27 04:45:06');
/*!40000 ALTER TABLE `tbl_activity` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_activity` with 26 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_assistance`
--

LOCK TABLES `tbl_assistance` WRITE;
/*!40000 ALTER TABLE `tbl_assistance` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_assistance` VALUES (53,'2024-04-03',11,4,2,'2024-04-18'),(54,'2024-04-03',11,6,2,'2024-04-18'),(55,'2024-04-03',11,7,2,'2024-04-18'),(56,'2024-04-03',11,8,2,'2024-04-18'),(57,'2024-04-08',1,1,2,'2024-04-23'),(58,'2024-04-08',1,4,2,'2024-04-23'),(59,'2024-04-08',1,6,2,'2024-04-23'),(60,'2024-04-08',1,7,2,'2024-04-23');
/*!40000 ALTER TABLE `tbl_assistance` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_assistance` with 8 row(s)
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
INSERT INTO `tbl_certificate` VALUES (1,'Certificate of Residency','A document issued by the smallest administrative division in the Philippines, certifying residency, employment, and legal purposes, often requiring personal information.'),(2,'Barangay Certification','A local residency certificate issued by the barangay, confirming an individual\'s compliance with local requirements and obligations.'),(3,'Barangay Indigency','To certify that an individual or family is considered indigent or financially disadvantaged'),(8,'Barangay Business Permit','');
/*!40000 ALTER TABLE `tbl_certificate` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_certificate` with 4 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_household`
--

LOCK TABLES `tbl_household` WRITE;
/*!40000 ALTER TABLE `tbl_household` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_household` VALUES (1,'Kissiah Kilfedder',4),(2,'Hillard Buse',6),(3,'Kerry Cannaway',7),(4,'Markos Epine',4),(5,'Clayborne Blinckhorne',1),(6,'Karlene Daglish',4),(7,'Kay Gundry',6),(8,'Jillayne Burgan',3),(9,'Sheila Shawcroft',5),(10,'Leelah Arlt',4),(12,'Barnie Dodman',4),(13,'Emlen Orriss',2),(14,'Mel Mariyushkin',6),(15,'Libbey Lambden',4),(16,'Mikol McTiernan',1),(17,'Oralla Pocknoll',7),(18,'Tabbie McKeever',7),(19,'Marlane Strover',2),(21,'Lonnie Degoe',2),(22,'Jean Brace',5),(23,'Poul Mattiassi',6),(25,'Innis Manna',3),(26,'Sebastiano Sarjent',4),(27,'Micheil Cogar',6),(28,'Anneliese Rainard',5),(29,'Erny Giorgini',7),(30,'Renault Lamshead',7),(31,'Chao Yang',3),(32,'King Kong',6),(34,'Tyrese Halliburton',5);
/*!40000 ALTER TABLE `tbl_household` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_household` with 30 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_official`
--

LOCK TABLES `tbl_official` WRITE;
/*!40000 ALTER TABLE `tbl_official` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_official` VALUES (1,'Councilor-1','First','Committee on Education','Committee on Appropriation','Active',2,3,'Fut0zIHV5qK6k2OIg4O88DE5ASR5nygbHL'),(2,'Captain','Second','Committee on Peace and Order','Committee on Ways and Means','Active',37,7,'WWo74VazELQ0XytyNETl4l6UwJEEnA'),(3,'Councilor-1','Second','Committee on Peace and Order','Committee on Ways and Means','Active',11,3,'78beedfda030d74a52be1adf6e3da3a0');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_requested_cert`
--

LOCK TABLES `tbl_requested_cert` WRITE;
/*!40000 ALTER TABLE `tbl_requested_cert` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_requested_cert` VALUES (12,'2024-04-21 05:23:53','For Scholarship','Cancelled',2,20,1,'f23a349d899ce5e45d7693e1ef0e118b'),(13,'2024-04-21 05:23:55','For Scholarship','Pending',3,20,0,'517bfce8834af2c58ddf0b1af0a91934'),(16,'2024-04-25 04:35:36','For Job','Approved',1,20,1,'adc1dd1b3aa52eeff2dd50a23c18c479'),(17,'2024-04-21 05:16:34','For Clearance','Pending',3,20,0,'29b386cfb06e5c42d04d4777eb008cbf'),(18,'2024-04-21 05:19:06','Sample only','Pending',1,20,0,'aa99653b51904320fd9ef9cbd61c891c'),(19,'2024-04-21 06:02:02','Work','Pending',3,20,0,'9171556b93365040f4ed6a5f2d1c6743'),(20,'2024-04-22 10:34:06','ssss','Pending',2,20,0,'d7c1495d401e4d8899bdab30220303b4'),(23,'2024-04-23 01:17:42','For Scholarship','Pending',1,37,0,'c58cc09716a68c73391f70412063dc0a'),(24,'2024-04-23 10:13:54','Wala lang','Pending',2,37,0,'d0a611ee3ae24ab8bec087c7dd5d2e00'),(25,'2024-04-23 13:17:52','wala lang','Pending',3,37,0,'cb10d0c8f7b653b99d7ec188e967f7a7');
/*!40000 ALTER TABLE `tbl_requested_cert` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_requested_cert` with 10 row(s)
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
  `purok_id` int(11) NOT NULL,
  `household_id` int(11) NOT NULL,
  PRIMARY KEY (`resident_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_resident`
--

LOCK TABLES `tbl_resident` WRITE;
/*!40000 ALTER TABLE `tbl_resident` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_resident` VALUES (1,'Tattersall','Jacinda','Gotecliffe','','Female','48','2023-11-09','USA','Cohabitation','Cebuano','Teacher','Filipino','','','355-845-6043','No','No','No','0025B','A519EztXUhMVTeIbUntjzRqKD5upFq',4,4),(4,'Posner','Biddy','Devo','','Female','52','2023-10-12','Tokyo','Married','Cebuano','Pilot','Filipino','','','845-579-9953','No','Yes','Yes','0017C','HBCw9Fx01RizP30iwpKWpg23C98iGa',4,6),(6,'Killough','Jordain','Schuelcke','','','77','2023-10-20','Australia','Separated','Illonggo','Athlete','Filipino','','Islam','865-421-5664','Yes','Yes','Yes','0017C','6TJtl0GBP298m19N5S13qUu35K96b0',4,6),(7,'Bathersby','Cecelia','Sager','Jr','Female','26','2023-06-08','France','Cohabitation','Illonggo','Artist','Filipino','','Baptist','684-545-8845','No','Yes','No','0017C','cGf8dE4P6K1CoCuAo8oc8FyLb0oCGY',1,5),(8,'Yegorev','Merilee','Nisby','','Female','20','2023-11-21','France','Married','Ilocano','Artist','Filipino','','','854-343-4616','No','No','Yes','0019B','CDlz637NOJWj3lFe3G483RkeQYZrX0',4,1),(9,'Lauderdale','Delia','Digg','','Female','92','2023-04-09','Australia','Cohabitation','Tagalog','Artist','Filipino','','','959-634-7996','No','Yes','No','0021A','Gnz4F2ndc987H8i247jd28YPAhV8O3',1,5),(10,'Galilee','Neda','Lovatt','','Female','56','2023-03-27','Japan','Married','Tagalog','Athlete','Filipino','','','387-243-4939','Yes','Yes','No','0019B','vwA321QRN3h43Cf1Hf2912exhx3X3i',4,4),(13,'Sully','Allene','Lening','','Female','96','2023-02-26','Sydney','','Illonggo','Pilot','Filipino','','','329-476-9885','No','Yes','Yes','0023A','9Jc4CR44KKDWUNAUvwSY422f202r3G',7,3),(14,'Reeders','Madelin','Piddlesden','','Female','31','2023-06-04','Japan','Separated','Cebuano','Pilot','Filipino','','Islam','108-897-1538','Yes','No','Yes','0019B','sov5lNwf7ru7s1IFygtjq5gZ0Lx7s3',7,3),(15,'Maund','Llewellyn','Roget','','Male','71','2023-12-19','Tokyo','Cohabitation','Illonggo','Engineer','Filipino','','','260-430-2930','Yes','Yes','Yes','0023A','QWLhdQHZVy94SdI1gJTDI11Z9D36w4',4,6),(17,'Chel','Kelcie','O\'Dowgaine','II','Female','38','2023-09-22','USA','Single','Illonggo','Scientist','Filipino','Professional Degree','Roman Catholic','489-585-7231','Yes','Yes','Yes','0025B','9IBcS0J5b3uw7W98UkS2z1B7xy6374',1,5),(18,'Sheasby','Mehetabel','Profit','','Female','80','2023-09-23','France','Cohabitation','Illonggo','Artist','Filipino','','Islam','786-279-7727','Yes','No','Yes','0025B','g0mI8kZ9yTmnR7HLg99DK1o6H25hMi',4,4),(19,'Maxted','Katerina','Shergold','','','71','2023-05-01','Rio de Janeiro','Married','Illonggo','Writer','Filipino','','','998-929-2690','No','Yes','Yes','0025B','drBFAUKqD58yq7itKRswobHmTuhU93',4,4),(20,'Macarambon','Karl','Mcapagal','','Male','31','2000-05-24','Australia','Single','Cebuano','Police','Filipino','','Roman Catholic','+649-221-1212','No','Yes','Yes','0023A','306GW3knFPsgnyZsG5D051AfZ4tbvO',7,3),(37,'John lloyd','Ritchel','Jumawan','Jr.','Male','23','2000-02-14','Auraora, Zamboanga del Sur','Single','Cebuano','Student','Filipino','College Undergrad','Roman Catholic','09811043220','No','No','No','0023A','23cbcf652f5882e9d2e802c4611b9c',6,32);
/*!40000 ALTER TABLE `tbl_resident` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_resident` with 15 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_resident_store`
--

LOCK TABLES `tbl_resident_store` WRITE;
/*!40000 ALTER TABLE `tbl_resident_store` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_resident_store` VALUES (32,20,'','','Mcapagal','','','',NULL,'','','','','','','','','','','','','','','Approved','2024-04-18 13:04:29'),(33,37,'','','','','','','2000-05-24','','','','','','','','','','','','','','','Approved','2024-04-18 13:04:29'),(35,20,'Macarambon','','','','','','2000-05-24','','','','','','','','','','','','','','','Approved','2024-04-18 13:04:29'),(36,37,'Rachelle','','','','','','2000-02-14','','','','','','','','','','','','','','','Pending','2024-04-18 13:04:29'),(37,3,'Kim','','','','','','2024-01-28','','','','','','','','','','','','','','','Approved','2024-04-18 13:04:29'),(41,3,'','','','','','','2024-01-28','','','','','','','Iglesia Ni Cristo','','','','','','','','Pending','2024-04-18 13:04:29'),(42,3,'','','','','','','2024-01-28','','','','','','Vocational','','','','','','','','','Pending','2024-04-18 13:04:29'),(43,3,'','','','','','','2024-01-28','','','Tagalog','','','','','','','','','','','','Pending','2024-04-18 13:04:29'),(44,3,'Luhh','','','','','','2024-01-28','','','','','','','','','','','','','','','Pending','2024-04-18 13:04:29'),(45,3,'adsad','','','','','','2024-01-28','','','','','','','','','','','','','','','Pending','2024-04-18 13:04:29'),(46,3,'szzz','','','','','','2024-01-28','','','','','','','','','','','','','','','Pending','2024-04-18 13:05:32'),(47,37,'John lloyd','','','','','','2000-02-14','','','','','','','','','','','','','','','Approved','2024-04-24 02:17:58');
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_user` VALUES (2,'karl','1234567','Resident',20,'3adb338bf49c00004de1e90ba86a41b2'),(9,'chel','1234567','Resident',37,'43f77a9edf699334c2375ae029784f39');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_user` with 2 row(s)
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

-- Dump completed on: Sat, 27 Apr 2024 17:59:52 +0000
