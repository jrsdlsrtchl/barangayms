-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 03:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activity`
--

CREATE TABLE `tbl_activity` (
  `activity_id` int(11) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `login_time` datetime NOT NULL,
  `logout_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_activity`
--

INSERT INTO `tbl_activity` (`activity_id`, `resident_id`, `browser`, `ip_address`, `login_time`, `logout_time`) VALUES
(1, 20, 'Chrome', '::1', '2024-04-03 02:22:34', '2024-04-03 02:30:04'),
(2, 20, 'Chrome', '::1', '2024-04-03 02:48:42', '2024-04-03 02:49:57'),
(3, 20, 'Chrome', '::1', '2024-04-03 02:50:06', '2024-04-03 02:50:20'),
(4, 37, 'Chrome', '::1', '2024-04-03 02:50:30', '2024-04-03 02:51:08'),
(5, 20, 'Chrome', '::1', '2024-04-04 01:57:26', '0000-00-00 00:00:00'),
(6, 20, 'Chrome', '::1', '2024-04-04 02:00:32', '0000-00-00 00:00:00'),
(7, 20, 'Chrome', '::1', '2024-04-16 12:05:28', '2024-04-16 12:05:59'),
(8, 20, 'Edge', '::1', '2024-04-16 12:06:20', '2024-04-16 12:06:35'),
(9, 20, 'Chrome', '::1', '2024-04-16 01:27:58', '0000-00-00 00:00:00'),
(10, 20, 'Chrome', '::1', '2024-04-17 09:07:28', '0000-00-00 00:00:00'),
(11, 37, 'Chrome', '::1', '2024-04-18 12:18:38', '2024-04-18 12:20:49'),
(12, 3, 'Chrome', '::1', '2024-04-18 12:22:12', '2024-04-18 12:36:10'),
(13, 3, 'Chrome', '::1', '2024-04-18 12:43:18', '2024-04-18 12:44:29'),
(14, 3, 'Chrome', '::1', '2024-04-18 12:44:38', '0000-00-00 00:00:00'),
(15, 20, 'Chrome', '::1', '2024-04-19 01:39:30', '0000-00-00 00:00:00'),
(16, 20, 'Chrome', '::1', '2024-04-19 06:25:05', '0000-00-00 00:00:00'),
(17, 20, 'Chrome', '::1', '2024-04-21 03:50:19', '0000-00-00 00:00:00'),
(18, 20, 'Chrome', '::1', '2024-04-22 10:33:10', '0000-00-00 00:00:00'),
(19, 20, 'Chrome', '::1', '2024-04-22 11:02:32', '0000-00-00 00:00:00'),
(20, 37, 'Chrome', '::1', '2024-04-23 01:17:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assistance`
--

CREATE TABLE `tbl_assistance` (
  `assistance_id` int(11) NOT NULL,
  `date_receive` date NOT NULL,
  `type_assistance_id` int(11) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `official_id` int(11) NOT NULL,
  `distribute_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_assistance`
--

INSERT INTO `tbl_assistance` (`assistance_id`, `date_receive`, `type_assistance_id`, `resident_id`, `official_id`, `distribute_date`) VALUES
(26, '2024-03-07', 1, 1, 1, '2024-03-27'),
(27, '2024-03-07', 1, 3, 1, '2024-03-27'),
(28, '2024-03-07', 1, 4, 1, '2024-03-27'),
(29, '2024-03-07', 1, 5, 1, '2024-03-27'),
(30, '2024-03-07', 1, 6, 1, '2024-03-27'),
(32, '2024-03-07', 1, 37, 1, '2024-03-27'),
(33, '2024-04-03', 5, 2, 3, '2024-04-30'),
(34, '2024-04-03', 5, 13, 3, '2024-04-30'),
(35, '2024-04-03', 5, 16, 3, '2024-04-30'),
(36, '2024-04-03', 5, 19, 3, '2024-04-30'),
(37, '2024-04-03', 5, 25, 3, '2024-04-30'),
(40, '2024-04-03', 5, 37, 3, '2024-04-30'),
(41, '1970-01-01', 11, 1, 1, '1970-01-01'),
(42, '1970-01-01', 11, 3, 1, '1970-01-01'),
(43, '1970-01-01', 11, 4, 1, '1970-01-01'),
(44, '1970-01-01', 11, 7, 1, '1970-01-01'),
(45, '2024-04-16', 10, 1, 3, '2024-04-30'),
(46, '2024-04-16', 10, 3, 3, '2024-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_certificate`
--

CREATE TABLE `tbl_certificate` (
  `certificate_id` int(11) NOT NULL,
  `certificate_type` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_certificate`
--

INSERT INTO `tbl_certificate` (`certificate_id`, `certificate_type`, `description`) VALUES
(1, 'Certificate of Residency', 'A document issued by the smallest administrative division in the Philippines, certifying residency, employment, and legal purposes, often requiring personal information.'),
(2, 'Barangay Clearance', 'A local residency certificate issued by the barangay, confirming an individual\'s compliance with local requirements and obligations.'),
(3, 'Barangay Indigency', 'To certify that an individual or family is considered indigent or financially disadvantaged'),
(4, 'Barangay Business Permit', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_household`
--

CREATE TABLE `tbl_household` (
  `household_id` int(11) NOT NULL,
  `household_desc` varchar(50) NOT NULL,
  `purok_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_household`
--

INSERT INTO `tbl_household` (`household_id`, `household_desc`, `purok_id`) VALUES
(1, 'Kissiah Kilfedder', 4),
(2, 'Hillard Buse', 6),
(3, 'Kerry Cannaway', 7),
(4, 'Markos Epine', 4),
(5, 'Clayborne Blinckhorne', 1),
(6, 'Karlene Daglish', 4),
(7, 'Kay Gundry', 6),
(8, 'Jillayne Burgan', 3),
(9, 'Sheila Shawcroft', 5),
(10, 'Leelah Arlt', 4),
(12, 'Barnie Dodman', 4),
(13, 'Emlen Orriss', 2),
(14, 'Mel Mariyushkin', 6),
(15, 'Libbey Lambden', 4),
(16, 'Mikol McTiernan', 1),
(17, 'Oralla Pocknoll', 7),
(18, 'Tabbie McKeever', 7),
(19, 'Marlane Strover', 2),
(21, 'Lonnie Degoe', 2),
(22, 'Jean Brace', 5),
(23, 'Poul Mattiassi', 6),
(25, 'Innis Manna', 3),
(26, 'Sebastiano Sarjent', 4),
(27, 'Micheil Cogar', 6),
(28, 'Anneliese Rainard', 5),
(29, 'Erny Giorgini', 7),
(30, 'Renault Lamshead', 7),
(31, 'Chao Yang', 3),
(32, 'King Kong', 6),
(34, 'Tyrese Halliburton', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_official`
--

CREATE TABLE `tbl_official` (
  `official_id` int(11) NOT NULL,
  `position` varchar(30) NOT NULL,
  `term` varchar(50) NOT NULL,
  `committee` varchar(50) NOT NULL,
  `vice_committee` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `purok_id` int(11) NOT NULL,
  `off_uniid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_official`
--

INSERT INTO `tbl_official` (`official_id`, `position`, `term`, `committee`, `vice_committee`, `status`, `resident_id`, `purok_id`, `off_uniid`) VALUES
(1, 'Councilor-1', 'First', 'Committee on Education', 'Committee on Appropriation', 'Active', 2, 3, 'Fut0zIHV5qK6k2OIg4O88DE5ASR5nygbHL'),
(2, 'Councilor-1', 'Second', 'Committee on Peace and Order', 'Committee on Ways and Means', 'Active', 37, 7, 'WWo74VazELQ0XytyNETl4l6UwJEEnA'),
(3, 'Captain', 'Second', 'Committee on Peace and Order', 'Committee on Ways and Means', 'Active', 11, 3, '78beedfda030d74a52be1adf6e3da3a0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purok`
--

CREATE TABLE `tbl_purok` (
  `purok_id` int(11) NOT NULL,
  `purok_desc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_purok`
--

INSERT INTO `tbl_purok` (`purok_id`, `purok_desc`) VALUES
(1, 'Purok-1'),
(2, 'Purok-2'),
(3, 'Purok-3'),
(4, 'Purok-4'),
(5, 'Purok-5'),
(6, 'Purok-6'),
(7, 'Purok-7');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_requested_cert`
--

CREATE TABLE `tbl_requested_cert` (
  `request_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `purpose` varchar(100) NOT NULL,
  `request_status` varchar(30) NOT NULL DEFAULT 'Pending',
  `certificate_id` int(11) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `official_id` int(11) NOT NULL,
  `tracking_id` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_requested_cert`
--

INSERT INTO `tbl_requested_cert` (`request_id`, `date`, `purpose`, `request_status`, `certificate_id`, `resident_id`, `official_id`, `tracking_id`) VALUES
(12, '2024-04-21 05:23:53', 'For Scholarship', 'Cancelled', 2, 20, 1, 'f23a349d899ce5e45d7693e1ef0e118b'),
(13, '2024-04-21 05:23:55', 'For Scholarship', 'Pending', 3, 20, 0, '517bfce8834af2c58ddf0b1af0a91934'),
(16, '2024-04-21 05:24:02', 'For Job', 'Pending', 1, 20, 0, 'adc1dd1b3aa52eeff2dd50a23c18c479'),
(17, '2024-04-21 05:16:34', 'For Clearance', 'Pending', 3, 20, 0, '29b386cfb06e5c42d04d4777eb008cbf'),
(18, '2024-04-21 05:19:06', 'Sample only', 'Pending', 1, 20, 0, 'aa99653b51904320fd9ef9cbd61c891c'),
(19, '2024-04-21 06:02:02', 'Work', 'Pending', 3, 20, 0, '9171556b93365040f4ed6a5f2d1c6743'),
(20, '2024-04-22 10:34:06', 'ssss', 'Pending', 2, 20, 0, 'd7c1495d401e4d8899bdab30220303b4'),
(22, '2024-04-22 11:02:42', 'Tambay', 'Pending', 4, 20, 0, '5f03c0791f3d1eed3d9138fb5d15cad1'),
(23, '2024-04-23 01:17:42', 'For Scholarship', 'Pending', 1, 37, 0, 'c58cc09716a68c73391f70412063dc0a');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resident`
--

CREATE TABLE `tbl_resident` (
  `resident_id` int(11) NOT NULL,
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
  `household_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_resident`
--

INSERT INTO `tbl_resident` (`resident_id`, `lastname`, `firstname`, `middlename`, `suffix`, `gender`, `age`, `datebirth`, `placebirth`, `civilstatus`, `ethnicity`, `occupation`, `citizenship`, `education`, `religion`, `mobile`, `for4ps`, `pwd`, `senior`, `precinct`, `uniid`, `purok_id`, `household_id`) VALUES
(1, 'Tattersall', 'Jacinda', 'Gotecliffe', '', 'Female', '48', '2023-11-09', 'USA', 'Cohabitation', 'Cebuano', 'Teacher', 'Filipino', '', '', '355-845-6043', 'No', 'No', 'No', '0025B', 'A519EztXUhMVTeIbUntjzRqKD5upFq', 4, 4),
(2, 'Beevis', 'Haily', 'Gatward', 'Sr', 'Male', '44', '2023-09-07', 'USA', 'Separated', 'Cebuano', 'Doctor', 'Filipino', '', '', '694-806-1696', 'Yes', 'No', 'Yes', '0019B', 'PmN1o36A85zl19r4261vB30XjJrdgI', 6, 2),
(3, 'Kim', 'Drona', 'Edmands', '', 'Female', '56', '2024-01-28', 'Japan', '', 'Tagalog', 'Pilot', 'Filipino', '', '', '378-928-6355', 'Yes', 'No', 'No', '0021A', 'ngg9AycOH0yc0TvWTLBdCD3JSj8cO8', 7, 3),
(4, 'Posner', 'Biddy', 'Devo', '', 'Female', '52', '2023-10-12', 'Tokyo', 'Married', 'Cebuano', 'Pilot', 'Filipino', '', '', '845-579-9953', 'No', 'Yes', 'Yes', '0017C', 'HBCw9Fx01RizP30iwpKWpg23C98iGa', 4, 6),
(5, 'Hercock', 'Hyatt', 'Kebell', 'Sr', 'Male', '20', '2023-07-25', 'Tokyo', 'Separated', 'Bisaya', 'Artist', 'Filipino', '', '', '572-751-9775', 'No', 'Yes', 'Yes', '0019B', '56QbV0RwGszUn6BXEWG594947lc04m', 4, 1),
(6, 'Killough', 'Jordain', 'Schuelcke', '', '', '77', '2023-10-20', 'Australia', 'Separated', 'Illonggo', 'Athlete', 'Filipino', '', 'Islam', '865-421-5664', 'Yes', 'Yes', 'Yes', '0017C', '6TJtl0GBP298m19N5S13qUu35K96b0', 4, 6),
(7, 'Bathersby', 'Cecelia', 'Sager', 'Jr', 'Female', '26', '2023-06-08', 'France', 'Cohabitation', 'Illonggo', 'Artist', 'Filipino', '', '', '684-545-8845', 'No', 'Yes', 'No', '0017C', 'cGf8dE4P6K1CoCuAo8oc8FyLb0oCGY', 1, 5),
(8, 'Yegorev', 'Merilee', 'Nisby', '', 'Female', '20', '2023-11-21', 'France', 'Married', 'Ilocano', 'Artist', 'Filipino', '', '', '854-343-4616', 'No', 'No', 'Yes', '0019B', 'CDlz637NOJWj3lFe3G483RkeQYZrX0', 4, 1),
(9, 'Lauderdale', 'Delia', 'Digg', '', 'Female', '92', '2023-04-09', 'Australia', 'Cohabitation', 'Tagalog', 'Artist', 'Filipino', '', '', '959-634-7996', 'No', 'Yes', 'No', '0021A', 'Gnz4F2ndc987H8i247jd28YPAhV8O3', 1, 5),
(10, 'Galilee', 'Neda', 'Lovatt', '', 'Female', '56', '2023-03-27', 'Japan', 'Married', 'Tagalog', 'Athlete', 'Filipino', '', '', '387-243-4939', 'Yes', 'Yes', 'No', '0019B', 'vwA321QRN3h43Cf1Hf2912exhx3X3i', 4, 4),
(11, 'Poulglais', 'Vladimir', 'Lowle', '', 'Male', '52', '2023-12-06', 'Brazil', 'Married', 'Illonggo', 'Writer', 'Filipino', '', 'Islam', '903-283-3872', 'No', 'Yes', 'Yes', '0025B', '21M591W0Xf97y2sl31l89UcOQ74e3k', 4, 4),
(12, 'Worlidge', 'Sergio', 'Honsch', 'III', 'Male', '50', '2023-10-25', 'Australia', 'Single', 'Tagalog', 'Scientist', 'Filipino', '', '', '488-937-6412', 'No', 'No', 'No', '0021A', 's6o31VJ5xYvCZB8K5r0HT6E92XyMME', 4, 4),
(13, 'Sully', 'Allene', 'Lening', '', 'Female', '96', '2023-02-26', 'Sydney', '', 'Illonggo', 'Pilot', 'Filipino', '', '', '329-476-9885', 'No', 'Yes', 'Yes', '0023A', '9Jc4CR44KKDWUNAUvwSY422f202r3G', 7, 3),
(14, 'Reeders', 'Madelin', 'Piddlesden', '', 'Female', '31', '2023-06-04', 'Japan', 'Separated', 'Cebuano', 'Pilot', 'Filipino', '', 'Islam', '108-897-1538', 'Yes', 'No', 'Yes', '0019B', 'sov5lNwf7ru7s1IFygtjq5gZ0Lx7s3', 7, 3),
(15, 'Maund', 'Llewellyn', 'Roget', '', 'Male', '71', '2023-12-19', 'Tokyo', 'Cohabitation', 'Illonggo', 'Engineer', 'Filipino', '', '', '260-430-2930', 'Yes', 'Yes', 'Yes', '0023A', 'QWLhdQHZVy94SdI1gJTDI11Z9D36w4', 4, 6),
(17, 'Chel', 'Kelcie', 'O\'Dowgaine', 'II', 'Female', '38', '2023-09-22', 'USA', 'Single', 'Illonggo', 'Scientist', 'Filipino', 'Professional Degree', 'Roman Catholic', '489-585-7231', 'Yes', 'Yes', 'Yes', '0025B', '9IBcS0J5b3uw7W98UkS2z1B7xy6374', 1, 5),
(18, 'Sheasby', 'Mehetabel', 'Profit', '', 'Female', '80', '2023-09-23', 'France', 'Cohabitation', 'Illonggo', 'Artist', 'Filipino', '', 'Islam', '786-279-7727', 'Yes', 'No', 'Yes', '0025B', 'g0mI8kZ9yTmnR7HLg99DK1o6H25hMi', 4, 4),
(19, 'Maxted', 'Katerina', 'Shergold', '', '', '71', '2023-05-01', 'Rio de Janeiro', 'Married', 'Illonggo', 'Writer', 'Filipino', '', '', '998-929-2690', 'No', 'Yes', 'Yes', '0025B', 'drBFAUKqD58yq7itKRswobHmTuhU93', 4, 4),
(20, 'Macarambon', 'Karl', 'Mcapagal', '', 'Male', '31', '2000-05-24', 'Australia', 'Single', 'Cebuano', 'Police', 'Filipino', '', 'Roman Catholic', '+649-221-1212', 'No', 'Yes', 'Yes', '0023A', '306GW3knFPsgnyZsG5D051AfZ4tbvO', 7, 3),
(37, 'Deles', 'Ritchel', 'Jumawan', 'Jr.', 'Male', '23', '2000-02-14', 'Auraora, Zamboanga del Sur', 'Single', 'Cebuano', 'Student', 'Filipino', 'College Undergrad', 'Roman Catholic', '09811043220', 'No', 'No', 'No', '0023A', '23cbcf652f5882e9d2e802c4611b9c', 6, 32);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resident_store`
--

CREATE TABLE `tbl_resident_store` (
  `resident_id_store` int(11) NOT NULL,
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
  `date_requested` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_resident_store`
--

INSERT INTO `tbl_resident_store` (`resident_id_store`, `resident_id`, `lastname`, `firstname`, `middlename`, `suffix`, `gender`, `age`, `datebirth`, `placebirth`, `civilstatus`, `ethnicity`, `occupation`, `citizenship`, `education`, `religion`, `mobile`, `for4ps`, `pwd`, `senior`, `precinct`, `purok_id`, `household_id`, `resident_status`, `date_requested`) VALUES
(32, 20, '', '', 'Mcapagal', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Approved', '2024-04-18 13:04:29'),
(33, 37, '', '', '', '', '', '', '2000-05-24', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Approved', '2024-04-18 13:04:29'),
(35, 20, 'Macarambon', '', '', '', '', '', '2000-05-24', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Approved', '2024-04-18 13:04:29'),
(36, 37, 'Rachelle', '', '', '', '', '', '2000-02-14', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', '2024-04-18 13:04:29'),
(37, 3, 'Kim', '', '', '', '', '', '2024-01-28', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Approved', '2024-04-18 13:04:29'),
(41, 3, '', '', '', '', '', '', '2024-01-28', '', '', '', '', '', '', 'Iglesia Ni Cristo', '', '', '', '', '', '', '', 'Pending', '2024-04-18 13:04:29'),
(42, 3, '', '', '', '', '', '', '2024-01-28', '', '', '', '', '', 'Vocational', '', '', '', '', '', '', '', '', 'Pending', '2024-04-18 13:04:29'),
(43, 3, '', '', '', '', '', '', '2024-01-28', '', '', 'Tagalog', '', '', '', '', '', '', '', '', '', '', '', 'Pending', '2024-04-18 13:04:29'),
(44, 3, 'Luhh', '', '', '', '', '', '2024-01-28', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', '2024-04-18 13:04:29'),
(45, 3, 'adsad', '', '', '', '', '', '2024-01-28', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', '2024-04-18 13:04:29'),
(46, 3, 'szzz', '', '', '', '', '', '2024-01-28', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', '2024-04-18 13:05:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type_assistance`
--

CREATE TABLE `tbl_type_assistance` (
  `type_assistance_id` int(11) NOT NULL,
  `type_assistance` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_type_assistance`
--

INSERT INTO `tbl_type_assistance` (`type_assistance_id`, `type_assistance`) VALUES
(1, 'Financial Aid'),
(2, 'Health and Services for Kids'),
(5, 'Optical Assistance'),
(6, 'Dental Assistance for Kids'),
(10, 'Gadgets Assistance'),
(11, 'AICS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `user_uniid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `password`, `usertype`, `resident_id`, `user_uniid`) VALUES
(1, 'default', '1234', 'Resident', 0, '5804d774f9717899929976f8a95f6e5a'),
(2, 'karl', '1234567', 'Resident', 20, '3adb338bf49c00004de1e90ba86a41b2'),
(6, 'kim', 'kim12345', 'Resident', 3, '4701721555f47c2fc4613c6325af0433'),
(7, 'sittie', 'sittie12345', 'Resident', 5, '817a496ebda176524247163c76759f97'),
(9, 'chel', '1234567', 'Resident', 37, '43f77a9edf699334c2375ae029784f39'),
(10, 'cheladmin', '1234567', 'Admin', 12, 'dc07b46756209c1006f56300009f041a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_activity`
--
ALTER TABLE `tbl_activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `tbl_assistance`
--
ALTER TABLE `tbl_assistance`
  ADD PRIMARY KEY (`assistance_id`);

--
-- Indexes for table `tbl_certificate`
--
ALTER TABLE `tbl_certificate`
  ADD PRIMARY KEY (`certificate_id`);

--
-- Indexes for table `tbl_household`
--
ALTER TABLE `tbl_household`
  ADD PRIMARY KEY (`household_id`);

--
-- Indexes for table `tbl_official`
--
ALTER TABLE `tbl_official`
  ADD PRIMARY KEY (`official_id`);

--
-- Indexes for table `tbl_purok`
--
ALTER TABLE `tbl_purok`
  ADD PRIMARY KEY (`purok_id`);

--
-- Indexes for table `tbl_requested_cert`
--
ALTER TABLE `tbl_requested_cert`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `tbl_resident`
--
ALTER TABLE `tbl_resident`
  ADD PRIMARY KEY (`resident_id`);

--
-- Indexes for table `tbl_resident_store`
--
ALTER TABLE `tbl_resident_store`
  ADD PRIMARY KEY (`resident_id_store`);

--
-- Indexes for table `tbl_type_assistance`
--
ALTER TABLE `tbl_type_assistance`
  ADD PRIMARY KEY (`type_assistance_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_activity`
--
ALTER TABLE `tbl_activity`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_assistance`
--
ALTER TABLE `tbl_assistance`
  MODIFY `assistance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_certificate`
--
ALTER TABLE `tbl_certificate`
  MODIFY `certificate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_household`
--
ALTER TABLE `tbl_household`
  MODIFY `household_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_official`
--
ALTER TABLE `tbl_official`
  MODIFY `official_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_purok`
--
ALTER TABLE `tbl_purok`
  MODIFY `purok_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_requested_cert`
--
ALTER TABLE `tbl_requested_cert`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_resident`
--
ALTER TABLE `tbl_resident`
  MODIFY `resident_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_resident_store`
--
ALTER TABLE `tbl_resident_store`
  MODIFY `resident_id_store` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_type_assistance`
--
ALTER TABLE `tbl_type_assistance`
  MODIFY `type_assistance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
