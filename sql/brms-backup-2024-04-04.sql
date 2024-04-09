-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: brmsdb
-- ------------------------------------------------------
-- Server version 	10.4.24-MariaDB
-- Date: Thu, 04 Apr 2024 02:04:03 +0000

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_activity`
--

LOCK TABLES `tbl_activity` WRITE;
/*!40000 ALTER TABLE `tbl_activity` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_activity` VALUES (1,20,'Chrome','::1','2024-04-03 02:22:34','2024-04-03 02:30:04'),(2,20,'Chrome','::1','2024-04-03 02:48:42','2024-04-03 02:49:57'),(3,20,'Chrome','::1','2024-04-03 02:50:06','2024-04-03 02:50:20'),(4,37,'Chrome','::1','2024-04-03 02:50:30','2024-04-03 02:51:08'),(5,20,'Chrome','::1','2024-04-04 01:57:26','0000-00-00 00:00:00'),(6,20,'Chrome','::1','2024-04-04 02:00:32','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `tbl_activity` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_activity` with 6 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_assistance`
--

LOCK TABLES `tbl_assistance` WRITE;
/*!40000 ALTER TABLE `tbl_assistance` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_assistance` VALUES (26,'2024-03-07',1,1,1,'2024-03-27'),(27,'2024-03-07',1,3,1,'2024-03-27'),(28,'2024-03-07',1,4,1,'2024-03-27'),(29,'2024-03-07',1,5,1,'2024-03-27'),(30,'2024-03-07',1,6,1,'2024-03-27'),(32,'2024-03-07',1,37,1,'2024-03-27'),(33,'2024-04-03',5,2,3,'2024-04-30'),(34,'2024-04-03',5,13,3,'2024-04-30'),(35,'2024-04-03',5,16,3,'2024-04-30'),(36,'2024-04-03',5,19,3,'2024-04-30'),(37,'2024-04-03',5,25,3,'2024-04-30'),(40,'2024-04-03',5,37,3,'2024-04-30');
/*!40000 ALTER TABLE `tbl_assistance` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_assistance` with 12 row(s)
--

--
-- Table structure for table `tbl_certificate`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_certificate` (
  `certificate_id` int(11) NOT NULL AUTO_INCREMENT,
  `certificate_type` varchar(30) NOT NULL,
  `description` varchar(250) NOT NULL,
  PRIMARY KEY (`certificate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_certificate`
--

LOCK TABLES `tbl_certificate` WRITE;
/*!40000 ALTER TABLE `tbl_certificate` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_certificate` VALUES (1,'Barangay Certificate','A barangay clearance is a document issued by the smallest administrative division in the Philippines, certifying residency, employment, and legal purposes, often requiring personal information.'),(2,'Barangay Indigency','Barangay Indigency certification in the Philippines is issued to economically disadvantaged individuals or families, providing proof of financial status for government benefits and services.'),(3,'Barangay Clearance','A Barangay Clearance is a local residency certificate issued by the barangay, confirming an individual\'s compliance with local requirements and obligations.');
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
INSERT INTO `tbl_official` VALUES (1,'Councilor-1','First','Committee on Education','Committee on Appropriation','Active',2,3,'Fut0zIHV5qK6k2OIg4O88DE5ASR5nygbHL'),(2,'Councilor-1','Second','Committee on Peace and Order','Committee on Ways and Means','Active',37,7,'WWo74VazELQ0XytyNETl4l6UwJEEnA'),(3,'Captain','Second','Committee on Peace and Order','Committee on Ways and Means','Active',11,3,'78beedfda030d74a52be1adf6e3da3a0');
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_requested_cert`
--

LOCK TABLES `tbl_requested_cert` WRITE;
/*!40000 ALTER TABLE `tbl_requested_cert` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_requested_cert` VALUES (8,'2024-04-03 04:32:51','For Internship','Cancelled',3,20,1,'c2147b5a2b8f37e5d723e2d1fd2c9eba'),(9,'2024-04-03 09:31:12','For Scholarship','Pending',2,37,2,'73828acaf0ae878e3335d71c3fbaea2c'),(10,'2024-03-27 02:28:25','For tambay purposes','Approved',3,20,3,'c35429fd9faa04948af8f6302bc87699');
/*!40000 ALTER TABLE `tbl_requested_cert` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_requested_cert` with 3 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_resident`
--

LOCK TABLES `tbl_resident` WRITE;
/*!40000 ALTER TABLE `tbl_resident` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_resident` VALUES (1,'Tattersall','Jacinda','Gotecliffe','','Female','48','2023-11-09','USA','Cohabitation','Cebuano','Teacher','Filipino','','','355-845-6043','No','No','No','0025B','A519EztXUhMVTeIbUntjzRqKD5upFq',4,4),(2,'Beevis','Haily','Gatward','Sr','Male','44','2023-09-07','USA','Separated','Cebuano','Doctor','Filipino','','','694-806-1696','Yes','No','Yes','0019B','PmN1o36A85zl19r4261vB30XjJrdgI',6,2),(3,'Gulliver','Drona','Edmands','','Female','56','2024-01-28','Japan','','Tagalog','Pilot','Filipino','','','378-928-6355','Yes','No','No','0021A','ngg9AycOH0yc0TvWTLBdCD3JSj8cO8',7,3),(4,'Posner','Biddy','Devo','','Female','52','2023-10-12','Tokyo','Married','Cebuano','Pilot','Filipino','','','845-579-9953','No','Yes','Yes','0017C','HBCw9Fx01RizP30iwpKWpg23C98iGa',4,6),(5,'Hercock','Hyatt','Kebell','Sr','Male','20','2023-07-25','Tokyo','Separated','Bisaya','Artist','Filipino','','','572-751-9775','No','Yes','Yes','0019B','56QbV0RwGszUn6BXEWG594947lc04m',4,1),(6,'Killough','Jordain','Schuelcke','','','77','2023-10-20','Australia','Separated','Illonggo','Athlete','Filipino','','Islam','865-421-5664','Yes','Yes','Yes','0017C','6TJtl0GBP298m19N5S13qUu35K96b0',4,6),(7,'Bathersby','Cecelia','Sager','Jr','Female','26','2023-06-08','France','Cohabitation','Illonggo','Artist','Filipino','','','684-545-8845','No','Yes','No','0017C','cGf8dE4P6K1CoCuAo8oc8FyLb0oCGY',1,5),(8,'Yegorev','Merilee','Nisby','','Female','20','2023-11-21','France','Married','Ilocano','Artist','Filipino','','','854-343-4616','No','No','Yes','0019B','CDlz637NOJWj3lFe3G483RkeQYZrX0',4,1),(9,'Lauderdale','Delia','Digg','','Female','92','2023-04-09','Australia','Cohabitation','Tagalog','Artist','Filipino','','','959-634-7996','No','Yes','No','0021A','Gnz4F2ndc987H8i247jd28YPAhV8O3',1,5),(10,'Galilee','Neda','Lovatt','','Female','56','2023-03-27','Japan','Married','Tagalog','Athlete','Filipino','','','387-243-4939','Yes','Yes','No','0019B','vwA321QRN3h43Cf1Hf2912exhx3X3i',4,4),(11,'Poulglais','Vladimir','Lowle','','Male','52','2023-12-06','Brazil','Married','Illonggo','Writer','Filipino','','Islam','903-283-3872','No','Yes','Yes','0025B','21M591W0Xf97y2sl31l89UcOQ74e3k',4,4),(12,'Worlidge','Sergio','Honsch','III','Male','100','2023-10-25','Australia','Single','Tagalog','Scientist','Filipino','','','488-937-6412','No','No','No','0021A','s6o31VJ5xYvCZB8K5r0HT6E92XyMME',4,4),(13,'Sully','Allene','Lening','','Female','96','2023-02-26','Sydney','','Illonggo','Pilot','Filipino','','','329-476-9885','No','Yes','Yes','0023A','9Jc4CR44KKDWUNAUvwSY422f202r3G',7,3),(14,'Reeders','Madelin','Piddlesden','','Female','31','2023-06-04','Japan','Separated','Cebuano','Pilot','Filipino','','Islam','108-897-1538','Yes','No','Yes','0019B','sov5lNwf7ru7s1IFygtjq5gZ0Lx7s3',7,3),(15,'Maund','Llewellyn','Roget','','Male','71','2023-12-19','Tokyo','Cohabitation','Illonggo','Engineer','Filipino','','','260-430-2930','Yes','Yes','Yes','0023A','QWLhdQHZVy94SdI1gJTDI11Z9D36w4',4,6),(17,'Chel','Kelcie','O\'Dowgaine','II','Female','38','2023-09-22','USA','Single','Illonggo','Scientist','Filipino','Professional Degree','Roman Catholic','489-585-7231','Yes','Yes','Yes','0025B','9IBcS0J5b3uw7W98UkS2z1B7xy6374',1,5),(18,'Sheasby','Mehetabel','Profit','','Female','80','2023-09-23','France','Cohabitation','Illonggo','Artist','Filipino','','Islam','786-279-7727','Yes','No','Yes','0025B','g0mI8kZ9yTmnR7HLg99DK1o6H25hMi',4,4),(19,'Maxted','Katerina','Shergold','','','71','2023-05-01','Rio de Janeiro','Married','Illonggo','Writer','Filipino','','','998-929-2690','No','Yes','Yes','0025B','drBFAUKqD58yq7itKRswobHmTuhU93',4,4),(20,'Macarambon','Karl','Mcapagal','','Male','31','2000-05-24','Australia','Single','Cebuano','Police','Filipino','','Roman Catholic','+649-221-1212','No','Yes','Yes','0023A','306GW3knFPsgnyZsG5D051AfZ4tbvO',7,3),(37,'Deles','Ritchel','Jumawan','Jr.','Male','23','2000-02-14','Auraora, Zamboanga del Sur','Single','Cebuano','Student','Filipino','College Undergrad','Roman Catholic','09811043220','No','No','No','0023A','23cbcf652f5882e9d2e802c4611b9c',6,32);
/*!40000 ALTER TABLE `tbl_resident` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_resident` with 20 row(s)
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
  PRIMARY KEY (`resident_id_store`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_resident_store`
--

LOCK TABLES `tbl_resident_store` WRITE;
/*!40000 ALTER TABLE `tbl_resident_store` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_resident_store` VALUES (26,20,'Abuton','Karl','','','','','2023-07-22','','','','','','','','','','','','','','','Approved'),(32,20,'','','Mcapagal','','','',NULL,'','','','','','','','','','','','','','','Approved'),(33,37,'','','','','','','2000-05-24','','','','','','','','','','','','','','','Approved'),(35,20,'Macarambon','','','','','','2000-05-24','','','','','','','','','','','','','','','Approved');
/*!40000 ALTER TABLE `tbl_resident_store` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_resident_store` with 4 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_type_assistance`
--

LOCK TABLES `tbl_type_assistance` WRITE;
/*!40000 ALTER TABLE `tbl_type_assistance` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_type_assistance` VALUES (1,'Financial Aid'),(2,'Health and Services for Kids'),(5,'Optical Assistance'),(6,'Dental Assistance for Kids');
/*!40000 ALTER TABLE `tbl_type_assistance` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_type_assistance` with 4 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_user` VALUES (1,'default','1234','Resident',0,'5804d774f9717899929976f8a95f6e5a'),(2,'karl','1234567','Resident',20,'3adb338bf49c00004de1e90ba86a41b2'),(3,'CECELIABATHERSBY','CECELIASAGER','Resident',7,'9c3935ae379f6b7f80b04a29be81275d'),(6,'DRONAGULLIVER','GULLIVERDRONAEDMANDS','Resident',3,'4701721555f47c2fc4613c6325af0433'),(7,'HYATTHERCOCK','HERCOCKHYATTKEBELL','Resident',5,'817a496ebda176524247163c76759f97'),(9,'chel','1234567','Resident',37,'43f77a9edf699334c2375ae029784f39'),(10,'cheladmin','1234567','Admin',12,'dc07b46756209c1006f56300009f041a');
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

-- Dump completed on: Thu, 04 Apr 2024 02:04:04 +0000
