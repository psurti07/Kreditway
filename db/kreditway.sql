-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 24, 2026 at 04:30 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kreditway`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

DROP TABLE IF EXISTS `administration`;
CREATE TABLE IF NOT EXISTS `administration` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime DEFAULT NULL,
  `fullname` varchar(80) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int NOT NULL DEFAULT '1' COMMENT '0=Admin, 1=Employee',
  `isActive` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`id`, `rec_date`, `fullname`, `mobile`, `emailid`, `password`, `role`, `isActive`, `isDelete`) VALUES
(1, '2023-10-28 16:45:00', 'Developer', '9904466599', 'info@verloopweb.com', '3fdc2b96e5de6df321152e254d28ddac', 0, 1, 0),
(2, '2024-06-18 17:46:32', 'Mehul Menia', '9723682913', 'info@rupaycredit.com', '52795e2fccd2bcf7c281ec3d184473ca', 0, 0, 1),
(3, '2024-06-19 16:57:00', 'Admin', '6358988761', 'admin@kreditbazar.com', '4e58867bdd582123c1f05946346ce097', 0, 1, 0),
(4, '2024-08-29 10:10:55', 'Usha', '8238303700', 'ushamiyatra1990@gmail.com', '104f45b9ae24e51f7311d850ae75d186', 1, 0, 1),
(5, '2024-10-26 11:50:48', '	info@verloopweb.com', '9904466599', 'info@rupaycredit.com', 'af67e010b721e4ab40ce6af881ceb0fe', 0, 1, 0),
(6, '2024-10-26 12:00:48', 'Mehul Meniya', '9723682913', 'meniyamehulm3@gmail.com', '43a57b28575e0bfcabeed74e36ef2dd9', 1, 0, 1),
(7, '2024-10-26 17:12:55', 'Mehul Meniya', '9723682913', 'meniyamehulm3@gmail.com', '43a57b28575e0bfcabeed74e36ef2dd9', 0, 1, 0),
(8, '2024-11-13 14:10:33', 'Abhishek Navathe', '9409492661', 'abhishek.navathe@gmail.com', 'ad65912db0531e1320b75e863b292242', 0, 1, 0),
(9, '2024-12-11 11:55:02', 'Pranjal solanki', '9537985788', 'solanki.pranjal1702@gmail.com', 'ab80ba8cd88c40cb3a7b1308be75efb1', 1, 0, 1),
(10, '2024-12-23 13:59:53', 'Pranjal solanki', '9527985788', 'solanki.pranjal1702@gmail.com', 'ff5c90252a3a2eb1795cf56fd150f90d', 1, 0, 1),
(11, '2025-03-05 13:26:18', 'Usha Miyatra', '8238303700', 'ushamiyatra1990@gmail.com', 'd8bb424fc2750c877c33b61ce2bec3d1', 1, 0, 1),
(12, '2025-03-05 13:26:18', 'Usha Miyatra', '8238303700', 'ushamiyatra1990@gmail.com', 'd8bb424fc2750c877c33b61ce2bec3d1', 1, 1, 0),
(13, '2025-03-22 11:53:55', 'Nilam Pandav', '9328594814', 'nilampandav06@gmail.com', '89b93cc53b8d4f7368e6b402b2fb899f', 1, 1, 0),
(14, '2025-03-22 11:53:55', 'Nilam Pandav', '9328594814', 'nilampandav06@gmail.com', '89b93cc53b8d4f7368e6b402b2fb899f', 1, 0, 1),
(15, '2025-04-01 11:12:59', 'vipali raval', '6358958074', 'vipaliraval18@gmail.com', '669b25ae54d5143853177ec9ac402db5', 1, 0, 1),
(16, '2025-04-01 11:13:37', 'vipali raval', '6358958074', 'vipaliraval18@gmail.com', '669b25ae54d5143853177ec9ac402db5', 0, 0, 1),
(17, '2025-05-06 16:53:40', 'Urvisha GhoGhari', '9979038724', 'urvisha2581997@gmail.com', '1ea8b563c08c1ee1e4dfee90bd1e5f75', 1, 1, 0),
(18, '2025-05-13 14:54:02', 'Nidhi Parmar', '8487840554', 'nidhiparmar120304@gmail.com', '2fb9354553d13e66d580b531bbfc8930', 1, 0, 1),
(19, '2025-05-22 22:57:33', 'Nidhi Parmar', '8487840554', 'nidhiparmar120304@gmail.com', '2fb9354553d13e66d580b531bbfc8930', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `administration_log`
--

DROP TABLE IF EXISTS `administration_log`;
CREATE TABLE IF NOT EXISTS `administration_log` (
  `id` int NOT NULL AUTO_INCREMENT,
  `adminid` int NOT NULL,
  `login_at` datetime DEFAULT NULL,
  `logout_at` datetime DEFAULT NULL,
  `server_ip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `adscontent`
--

DROP TABLE IF EXISTS `adscontent`;
CREATE TABLE IF NOT EXISTS `adscontent` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ad_type` tinyint NOT NULL DEFAULT '1' COMMENT '1=Text, 2=Image',
  `ad_content` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `isDelete` tinyint NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adsdata`
--

DROP TABLE IF EXISTS `adsdata`;
CREATE TABLE IF NOT EXISTS `adsdata` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `partnertype` int NOT NULL DEFAULT '1' COMMENT '1=Channel, 2=Associate',
  `partnerid` int NOT NULL DEFAULT '0',
  `fbpage` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `instapage` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `businessid` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `pixelid` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `isVerified` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `allremarks`
--

DROP TABLE IF EXISTS `allremarks`;
CREATE TABLE IF NOT EXISTS `allremarks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `module` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `linkid` int NOT NULL,
  `notetext` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bankapplylink`
--

DROP TABLE IF EXISTS `bankapplylink`;
CREATE TABLE IF NOT EXISTS `bankapplylink` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `loantype` int NOT NULL,
  `bankid` int NOT NULL,
  `applyurl` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `isDelete` tinyint NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

DROP TABLE IF EXISTS `banks`;
CREATE TABLE IF NOT EXISTS `banks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bank_name` varchar(100) NOT NULL,
  `bank_image` varchar(255) NOT NULL,
  `order_no` int NOT NULL DEFAULT '0',
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `rec_date`, `bank_name`, `bank_image`, `order_no`, `isDelete`) VALUES
(1, '2019-12-21 16:57:32', 'Axis Bank', '001.png', 1, 1),
(2, '2019-12-21 16:57:32', 'Yes Bank', '002.png', 2, 1),
(3, '2019-12-21 16:58:04', 'ICICI Bank', '003.png', 3, 1),
(4, '2019-12-21 16:58:04', 'Kotak Mahindra Bank', '004.png', 4, 1),
(5, '2019-12-21 16:58:18', 'HDFC Bank', '005.png', 5, 1),
(6, '2019-12-21 16:59:08', 'TATA Capital', '006.png', 6, 1),
(7, '2019-12-21 16:59:08', 'Indusind Bank', '007.png', 7, 1),
(8, '2021-03-23 12:18:01', 'SBI Bank', '008.png', 8, 1),
(9, '2019-12-21 16:59:38', 'IDBI Bank', '009.png', 9, 1),
(10, '2019-12-21 17:00:10', 'Bandhan Bank', '010.png', 10, 1),
(11, '2019-12-21 17:00:10', 'Union Bank', '011.png', 11, 1),
(12, '2019-12-21 17:00:10', 'RBL Bank', '012.png', 12, 1),
(13, '2019-12-21 17:00:10', 'Aditya Birla Capital', '013.png', 13, 1),
(14, '2020-03-02 20:50:08', 'Indiabulls', '014.png', 14, 1),
(15, '2020-03-02 20:50:08', 'Faircent.com', '015.png', 15, 0),
(16, '2020-03-02 20:50:48', 'Fullertor India', '016.png', 16, 1),
(17, '2020-03-02 20:50:48', 'DCB Bank', '017.png', 17, 1),
(18, '2020-03-02 20:51:27', 'Grihashakti', '018.png', 18, 1),
(19, '2020-03-02 20:51:27', 'PaySense', '019.png', 19, 0),
(20, '2021-03-23 12:17:34', 'Lendingkart', '023.png', 20, 0),
(21, '2020-03-02 20:51:27', 'Indifi', '021.png', 21, 1),
(22, '2023-05-20 14:56:28', 'Money View', '022.png', 22, 0),
(23, '2021-07-27 15:00:49', 'Other Bank', '099.png', 99, 1),
(24, '2021-09-03 13:56:55', 'Moneytap', '024.png', 24, 1),
(25, '2021-09-03 13:57:20', 'IDFC First Bank', '025.png', 25, 1),
(26, '2021-09-03 13:57:48', 'Bajaj Finserv', '026.png', 26, 1),
(27, '2021-09-03 13:59:18', 'Ziploan', '028.png', 28, 1),
(28, '2021-10-25 11:01:50', 'Credit Enable', '029.png', 29, 1),
(29, '2021-10-25 11:02:35', 'Hero Fincorp', '030.png', 30, 1),
(30, '2021-10-25 11:03:20', 'Monexo', '031.png', 31, 1),
(31, '2021-10-25 11:03:20', 'NeoGrowth', '032.png', 32, 1),
(32, '2021-10-25 11:03:20', 'Capital Float', '033.png', 33, 1),
(33, '2021-10-25 11:03:20', 'WeRize', '034.png', 34, 0),
(34, '2021-10-25 11:03:20', 'FinBox', '035.png', 35, 1),
(35, '2021-10-25 11:03:20', 'HDB Financial Business', '036.png', 36, 1),
(36, '2021-10-25 11:03:20', 'Upwards', '037.png', 37, 0),
(37, '2021-10-25 11:03:20', 'Finnable', '038.png', 38, 1),
(38, '2021-10-25 11:03:20', 'IIFL', '039.png', 39, 1),
(39, '2021-10-25 11:03:20', 'Piramal', '040.png', 40, 0),
(40, '2023-05-16 14:46:43', 'CASH E', '041.png', 41, 0),
(41, '2023-06-03 13:34:50', 'Upscale', '042.png', 42, 1),
(42, '2023-06-30 15:00:42', 'L & T Financial Services', '043.png', 43, 1),
(43, '2023-09-18 16:12:43', 'INVESTKRAFT', 'Investkraft.png', 1, 0),
(44, '2024-11-12 15:22:11', 'fibe', 'Frame_5470.png', 45, 0),
(45, '2024-11-12 15:21:59', 'prefr', 'Frame_5471.png', 44, 1),
(46, '2025-03-20 10:06:12', 'Incred', 'WhatsApp_Image_2025-03-20_at_10_05_51_AM.jpeg', 46, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bulksms`
--

DROP TABLE IF EXISTS `bulksms`;
CREATE TABLE IF NOT EXISTS `bulksms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fullname` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mobileno` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `emailid` varchar(80) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cardoffer_order`
--

DROP TABLE IF EXISTS `cardoffer_order`;
CREATE TABLE IF NOT EXISTS `cardoffer_order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `offerpage` int NOT NULL DEFAULT '1',
  `fullname` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `emailid` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `card_number` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `registration_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `amount` float(11,2) NOT NULL,
  `paymentid` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `isCustomer` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `isActive` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No. 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `career_enquiry`
--

DROP TABLE IF EXISTS `career_enquiry`;
CREATE TABLE IF NOT EXISTS `career_enquiry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `applyfor` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `qualifications` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `keyskills` longtext NOT NULL,
  `city` varchar(256) DEFAULT NULL,
  `server_ip` varchar(256) DEFAULT NULL,
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `career_opening`
--

DROP TABLE IF EXISTS `career_opening`;
CREATE TABLE IF NOT EXISTS `career_opening` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `descriptions` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `isActive` int NOT NULL DEFAULT '1' COMMENT '0=No, 1=Yes',
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('14sgm6horbq8um0v1ddn5napf77giqkb', '::1', 1790167765, 0x5f5f63695f6c6173745f726567656e65726174657c693a313739303136373736353b6170706c7969647c733a313a2233223b5f5f63695f766172737c613a323a7b733a373a226170706c796964223b693a313739303137313333363b733a31323a22636f6d70616e79656d61696c223b693a313739303137313333363b7d636f6d70616e79656d61696c7c733a31383a22696e666f406b72656469747761792e636f6d223b),
('1jkpe9fhc954n5u6kofqorb16kh019i5', '::1', 1790081137, 0x5f5f63695f6c6173745f726567656e65726174657c693a313739303038313133373b636f6d70616e79656d61696c7c733a31383a22696e666f406b72656469747761792e636f6d223b5f5f63695f766172737c613a343a7b733a31323a22636f6d70616e79656d61696c223b693a313739303038343733373b733a373a226170706c796964223b693a313739303038343733373b733a31343a22757365726c6f616e616d6f756e74223b693a313739303038313830343b733a31303a22757365726d6f62696c65223b693a313739303038313830343b7d6170706c7969647c733a313a2232223b757365726c6f616e616d6f756e747c733a363a22363330303030223b757365726d6f62696c657c733a31303a2239373536303030303030223b),
('2duvpp9he5sab17rtif0qseq568he7fv', '::1', 1790143224, 0x5f5f63695f6c6173745f726567656e65726174657c693a313739303134333232343b636f6d70616e79656d61696c7c733a31383a22696e666f406b72656469747761792e636f6d223b5f5f63695f766172737c613a343a7b733a31323a22636f6d70616e79656d61696c223b693a313739303134353030333b733a31343a22757365726c6f616e616d6f756e74223b693a313739303134323036383b733a31303a22757365726d6f62696c65223b693a313739303134323036383b733a373a226170706c796964223b693a313739303134353030333b7d757365726c6f616e616d6f756e747c733a363a22343730303030223b757365726d6f62696c657c733a31303a2239393939393030303030223b6170706c7969647c733a313a2233223b),
('8fstjjs1olqj0c80jvndtl6ar49t0q5a', '::1', 1790154047, 0x5f5f63695f6c6173745f726567656e65726174657c693a313739303135323035363b6170706c7969647c733a313a2233223b5f5f63695f766172737c613a323a7b733a373a226170706c796964223b693a313739303135373634353b733a31323a22636f6d70616e79656d61696c223b693a313739303135373634353b7d636f6d70616e79656d61696c7c733a31383a22696e666f406b72656469747761792e636f6d223b),
('ek68roabqttgqfr65c5nsig5gqs06udp', '::1', 1790168158, 0x5f5f63695f6c6173745f726567656e65726174657c693a313739303136373736353b6170706c7969647c733a313a2233223b5f5f63695f766172737c613a323a7b733a373a226170706c796964223b693a313739303137313735353b733a31323a22636f6d70616e79656d61696c223b693a313739303137313735353b7d636f6d70616e79656d61696c7c733a31383a22696e666f406b72656469747761792e636f6d223b),
('fq4223voqrvdvedcibjbcm0q6c5nc6ra', '::1', 1790081137, 0x5f5f63695f6c6173745f726567656e65726174657c693a313739303038313133373b636f6d70616e79656d61696c7c733a31383a22696e666f406b72656469747761792e636f6d223b5f5f63695f766172737c613a343a7b733a31323a22636f6d70616e79656d61696c223b693a313739303038313833363b733a373a226170706c796964223b693a313739303038313833363b733a31343a22757365726c6f616e616d6f756e74223b693a313739303038313830343b733a31303a22757365726d6f62696c65223b693a313739303038313830343b7d6170706c7969647c733a313a2232223b757365726c6f616e616d6f756e747c733a363a22363330303030223b757365726d6f62696c657c733a31303a2239373536303030303030223b),
('ibfoicg5ol7dvvgq4hcac81e0j6c4nkh', '::1', 1790077443, 0x5f5f63695f6c6173745f726567656e65726174657c693a313739303037373434333b636f6d70616e79656d61696c7c733a31383a22696e666f406b72656469747761792e636f6d223b5f5f63695f766172737c613a323a7b733a31323a22636f6d70616e79656d61696c223b693a313739303038313030323b733a373a226170706c796964223b693a313739303038313030323b7d6170706c7969647c733a313a2231223b),
('j12soqdf0b9cruvdovf7720772bb7kva', '::1', 1790074417, 0x5f5f63695f6c6173745f726567656e65726174657c693a313739303037343431373b636f6d70616e79656d61696c7c733a31383a22696e666f406b72656469747761792e636f6d223b5f5f63695f766172737c613a323a7b733a31323a22636f6d70616e79656d61696c223b693a313739303037373937363b733a373a226170706c796964223b693a313739303037373937363b7d6170706c7969647c733a313a2231223b),
('ov79373oq6h1rutp4lt1voihfu53tu0m', '::1', 1790071416, 0x5f5f63695f6c6173745f726567656e65726174657c693a313739303037313431363b),
('s5jqe816mi9viens4hp8ou92g2jl7kfk', '::1', 1790145481, 0x5f5f63695f6c6173745f726567656e65726174657c693a313739303134333232343b636f6d70616e79656d61696c7c733a31383a22696e666f406b72656469747761792e636f6d223b5f5f63695f766172737c613a323a7b733a31323a22636f6d70616e79656d61696c223b693a313739303134393038303b733a373a226170706c796964223b693a313739303134393038303b7d6170706c7969647c733a313a2233223b),
('tvqhb3tsketprlgpon6u0kju1u3rafhl', '::1', 1790164754, 0x5f5f63695f6c6173745f726567656e65726174657c693a313739303136343735343b6170706c7969647c733a313a2233223b5f5f63695f766172737c613a323a7b733a373a226170706c796964223b693a313739303136363732373b733a31323a22636f6d70616e79656d61696c223b693a313739303136363732373b7d636f6d70616e79656d61696c7c733a31383a22696e666f406b72656469747761792e636f6d223b),
('uralcki21pqq3t1ftato7gk1g4f7u9fa', '::1', 1790071417, 0x5f5f63695f6c6173745f726567656e65726174657c693a313739303037313431363b);

-- --------------------------------------------------------

--
-- Table structure for table `contact_enquiry`
--

DROP TABLE IF EXISTS `contact_enquiry`;
CREATE TABLE IF NOT EXISTS `contact_enquiry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `server_ip` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `customer_log`
--

DROP TABLE IF EXISTS `customer_log`;
CREATE TABLE IF NOT EXISTS `customer_log` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customerid` int NOT NULL,
  `login_at` datetime DEFAULT NULL,
  `logout_at` datetime DEFAULT NULL,
  `server_ip` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_list`
--

DROP TABLE IF EXISTS `email_list`;
CREATE TABLE IF NOT EXISTS `email_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `portal` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `module` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `isActive` tinyint NOT NULL DEFAULT '1' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE IF NOT EXISTS `enquiry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `fullname` varchar(256) NOT NULL,
  `email` varchar(256) DEFAULT NULL,
  `mobile` varchar(50) NOT NULL,
  `persontype` int NOT NULL DEFAULT '0' COMMENT '0=Salaried; 1=Self Employed',
  `loanamount` int NOT NULL DEFAULT '0',
  `loantype` int DEFAULT NULL,
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `important_update`
--

DROP TABLE IF EXISTS `important_update`;
CREATE TABLE IF NOT EXISTS `important_update` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tags` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `descriptions` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `isActive` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `userid` int NOT NULL,
  `cardid` int NOT NULL DEFAULT '0',
  `inv_for` int NOT NULL COMMENT '0=None, 1=PL, 2=BL, 3=Channel',
  `inv_prefix` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `inv_number` int NOT NULL,
  `inv_date` date DEFAULT NULL,
  `inv_price` float(11,2) NOT NULL,
  `inv_cgst` float(11,2) NOT NULL,
  `inv_sgst` float(11,2) NOT NULL,
  `inv_igst` float(11,2) NOT NULL,
  `inv_grandtotal` float(11,2) NOT NULL,
  `remarks` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loanlist`
--

DROP TABLE IF EXISTS `loanlist`;
CREATE TABLE IF NOT EXISTS `loanlist` (
  `id` int NOT NULL AUTO_INCREMENT,
  `loanname` varchar(255) NOT NULL,
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `loanlist`
--

INSERT INTO `loanlist` (`id`, `loanname`, `isDelete`) VALUES
(1, 'Personal Loan', 0),
(2, 'Car Loan', 0),
(3, 'Education Loan', 0),
(4, 'Business Loan', 0),
(5, 'Home Loan', 0),
(6, 'Mortgage Loan', 0),
(7, 'Cibil Loan', 0),
(8, 'Franchise Loan', 0),
(9, 'Home Loan B.T. & Top-up', 0),
(10, 'Mortgage Loan B.T. & Top-up', 0),
(11, 'Digital Personal Loan', 0),
(12, 'Digital Business Loan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loanstatus`
--

DROP TABLE IF EXISTS `loanstatus`;
CREATE TABLE IF NOT EXISTS `loanstatus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statusname` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `priorityno` int NOT NULL DEFAULT '1',
  `colorclass` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loanstatus`
--

INSERT INTO `loanstatus` (`id`, `rec_date`, `statusname`, `priorityno`, `colorclass`, `isDelete`) VALUES
(1, '2020-10-13 19:30:40', 'Approved', 2, 'success', 0),
(2, '2020-10-13 19:30:40', 'Rejected', 3, 'danger', 0),
(3, '2020-10-13 19:30:40', 'In Process', 1, 'info', 0),
(4, '2021-08-28 08:03:33', 'Query Process', 4, 'warning', 0),
(5, '2021-10-29 11:04:29', 'File Reopen', 5, 'info', 0),
(6, '2024-06-11 17:04:14', 'Verification', 1, 'success', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loanstatus_remarks`
--

DROP TABLE IF EXISTS `loanstatus_remarks`;
CREATE TABLE IF NOT EXISTS `loanstatus_remarks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `remarks` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `statusid` int NOT NULL DEFAULT '0',
  `isDelete` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loanstatus_remarks`
--

INSERT INTO `loanstatus_remarks` (`id`, `rec_date`, `title`, `remarks`, `statusid`, `isDelete`) VALUES
(1, '2024-09-09 16:41:30', 'Verification Successful', 'Dear Customer, Congratulations! Your verification is successfully done. The Login Department has asked you for the required documents. Kindly submit the documents in your customer portal in the next 24 to 48 hours. Please stay in contact with the company for the next 7 working days. If you have any doubts or queries, call on _________ . You can call us between 10 AM to 5 PM (Monday to Saturday - only business days).', 6, 0),
(2, '2024-09-09 16:41:16', '4 day documents pending new (document warning)', 'Dear Customer, you\'ve still not submitted the documents for the loan process. Kindly submit the documents in your customer portal in 24-48 hours else your file will be automatically rejected from the system – and the same would be updated in your portal. For more info, you can call us on _________  between 10 AM to 5 PM (Monday to Saturday - only business days).', 3, 0),
(3, '2025-01-22 13:06:49', '4 day documents pending new (documents reject)', 'Dear Customer, the company has yet not received any documents or information from your side – and due to this, your file has been rejected. You can reapply for a loan after 3 months. For more info, you can call us on  between 10 AM to 5 PM (Monday to Saturday - only business days).', 2, 0),
(4, '2024-09-09 16:40:40', 'OTP Not Given (OTP warning remark)', 'Dear Customer, our company asked you for the OTP for your loan process but you denied to share the OTP. As per bank rules, OPT is a must for the loan process. So, if you wish to give OTP for your loan process, kindly call us on _________  in the next 24-48 hours else your file will be automatically rejected from our system. You can call us between 10 AM to 5 PM (Monday to Saturday - only business days).', 3, 0),
(5, '2024-09-09 16:40:25', 'OTP Not Given (OTP reject)', 'Dear Customer, we are sorry to inform you that your Personal Loan application in our organization has been declined because you didn’t provide the required OTP for further processes. For more info, you can call us on  between 10 AM to 5 PM (Monday to Saturday - only business days).', 2, 0),
(6, '2024-09-09 16:39:21', 'Customer not connect 2 days new (warning)', 'Dear Customer, our login department is trying to contact you for the loan process for the last 3 days. But you\'ve not responded or you\'re not coming in contact with the company. If you\'re willing to go ahead with your loan process, kindly call on _________  in the next 24-48 hours (between 10 AM – 5 PM; between Monday and Saturday – only business days); otherwise, your file will be automatically rejected from the system.', 3, 0),
(7, '2024-09-09 16:39:06', 'Customer not connect 2 days new (reject)', 'Dear Customer, the company\'s Login Department has tried contacting you regarding the loan process – to which you\'ve not responded or you\'re not coming in contact with us, and due to this your file has been automatically rejected from the system – and the same has been updated and shown in your portal. For more info, you can call us on  between 10 AM to 5 PM (Monday to Saturday - only business days).', 2, 0),
(8, '2024-09-09 16:38:46', 'File Reject (ABP Low, CIBIL Low, PL Inquiry)', 'Dear Customer, we are sorry to inform you that your application for a loan in our organization has been rejected because you do not meet the required criteria (Average Banking, PL inquiries, Obligations, CIBIL low, ABP low, etc.). For more info, you can call us on  between 10 AM to 5 PM (Monday to Saturday - only business days).', 2, 0),
(9, '2024-09-09 16:38:26', 'Language issue (warning)', 'Dear Customer, our Login Department contacted you but the process couldn\'t proceed due to unclear or non-understandable communication/language from your end. We suggest you make a trusted person/third-party call on your behalf within the next 24-48 hours and communicate in an understandable language/manner – failing in doing so would lead to automatic rejection of your file from the system. You can call us on _________  between 10 AM to 5 PM (Monday to Saturday - only business days).', 3, 0),
(10, '2024-09-09 16:38:11', 'Language Issue (reject)', 'Dear Customer, we are sorry to inform you that your Personal Loan application in our organization has been declined due to unclear or non-understandable communication from your end. For more info, you can call us on  between 10 AM to 5 PM (Monday to Saturday - only business days).', 2, 0),
(11, '2024-09-09 16:37:22', 'NR Switched Off At Login Time (warning)', 'Dear Customer, our login department called you at the Customer Login Time but either your contact number was switched off or unreachable. If you wish to proceed with your loan process, kindly call us on _________  within the next 24-48 hours else your file will be automatically rejected in the system. You can call us between 10 AM to 5 PM (Monday to Saturday - only business days).', 3, 0),
(12, '2024-09-09 16:37:06', 'NR Switched Off At Login Time (reject)', 'Dear Customer, we are sorry to inform you that your application for a personal loan in our organization has been declined because even after several tries of reaching out, you are unreachable or your registered mobile number is switched off. For more info call on  You can call us between 10 AM to 5 PM (Monday to Saturday - only business days).', 2, 0),
(13, '2024-09-09 16:36:47', 'Loan Approval Confirmation', 'Dear Customer, Congratulations! Your Personal Loan of amount ________ is approved. For more info, you can call us on  between 10 AM to 5 PM (Monday to Saturday - only business days).', 1, 0),
(14, '2024-09-09 16:36:32', 'Application Reopened', 'Dear Customer, you had applied to our company for a loan but as you were not in contact with our company, your file is closed - the reason could be one of the following: (1) You didn\'t submit your document to the company for the login process; (2) You didn\'t respond to our calls; (3) You didn\'t send any of OTP for the login process, etc. So now, as you contacted us again to reopen your file, we are re-opening your file for the loan process and after that, you have to be in contact with our company for 7 days. For more info, you can call us on _________  between 10 AM to 5 PM (Monday to Saturday - only business days).', 3, 0),
(15, '2024-09-09 16:36:21', 'Customer not interested (warning)', 'Dear Customer, when our login department called you regarding your loan process, you expressed uninterest. If you want to take your loan process forward, call us on _________  within the next 24-48 hours else your file will be automatically rejected in the system. You can call us between 10 AM to 5 PM (Monday to Saturday - only business days).', 3, 0),
(16, '2024-09-09 16:36:01', 'Customer not interested (reject)', 'Dear Customer, we are sorry to inform you that your Loan application in our organization has been declined because of the uninterest shown by you due to any reason(s). For more info, you can call us on  between 10 AM to 5 PM (Monday to Saturday - only business days).', 2, 0),
(17, '2025-01-17 13:19:54', 'On Hold', 'Dear Customer,\r\nAs requested by you, we have paused your loan process. Whenever you’re willing to start your loan process, kindly call the company on _________ between 10 AM to 5 PM (Monday to Saturday - only business days).', 2, 0),
(18, '2024-10-05 10:46:54', 'Application Reopened', 'Dear Customer, You applied to our company for a loan process but as you were not in contact with our company, your file is closed – the reason could be one of the following: (1) You didn\'t submit your document to the company for the login process; (2) You didn\'t respond to our calls; (3) You didn\'t send any of OTP for the login process, etc. Now, as you contacted us again to reopen your file, we are re-opening your file for the loan process and after that, you have to be in contact with our company for 7 days. Thanks, Rupaycredit', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `meta_keywords`
--

DROP TABLE IF EXISTS `meta_keywords`;
CREATE TABLE IF NOT EXISTS `meta_keywords` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `slug` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `descriptions` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `keywords` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meta_keywords`
--

INSERT INTO `meta_keywords` (`id`, `rec_date`, `slug`, `title`, `descriptions`, `keywords`) VALUES
(1, '2021-07-08 19:28:54', 'home', 'RupayCredit - Quick Digital Loans for Instant Financial Solutions', 'Get instant personal loans from RupayCredit with seamless online processes and fast approvals. Simplify your financial needs today with hassle-free solutions.', 'digital loans, personal loans, instant loan approvals, hassle-free loans, RupayCredit, online loan application'),
(2, '2021-07-08 19:28:54', 'company', 'Rupaycredit – Personal Loan and Business Loan', 'Rupaycredit offers instant personal loans and business loans at attractive interest rates &amp; easy EMI options. Apply now!', 'Rupaycredit , personal loan, instant personal loan,Rupaycredit personal loan,Rupaycredit  india personal loans, instant loan in india, online loan in india, personal loan india'),
(3, '2021-07-08 19:30:16', 'contact', 'Rupaycredit – Personal Loan and Business Loan', 'Rupaycredit offers instant personal loans and business loans at attractive interest rates &amp; easy EMI options. Apply now!', 'Rupaycredit , personal loan, instant personal loan,Rupaycredit personal loan,Rupaycredit  india personal loans, instant loan in india, online loan in india, personal loan india'),
(4, '2021-07-08 19:30:16', 'career', 'Rupaycredit – Personal Loan and Business Loan', 'Rupaycredit offers instant personal loans and business loans at attractive interest rates &amp; easy EMI options. Apply now!', 'Rupaycredit , personal loan, instant personal loan,Rupaycredit personal loan,Rupaycredit  india personal loans, instant loan in india, online loan in india, personal loan india'),
(5, '2021-07-08 19:31:43', 'privacy-policy', 'Rupaycredit – Personal Loan and Business Loan', 'Rupaycredit offers instant personal loans and business loans at attractive interest rates &amp; easy EMI options. Apply now!', 'Rupaycredit , personal loan, instant personal loan,Rupaycredit personal loan,Rupaycredit  india personal loans, instant loan in india, online loan in india, personal loan india'),
(6, '2021-07-08 19:31:43', 'terms', 'Rupaycredit – Personal Loan and Business Loan', 'Rupaycredit offers instant personal loans and business loans at attractive interest rates &amp; easy EMI options. Apply now!', 'Rupaycredit , personal loan, instant personal loan,Rupaycredit personal loan,Rupaycredit  india personal loans, instant loan in india, online loan in india, personal loan india'),
(7, '2021-07-08 19:32:28', 'blog', 'Rupaycredit – Personal Loan and Business Loan', 'Rupaycredit offers instant personal loans and business loans at attractive interest rates &amp; easy EMI options. Apply now!', 'Rupaycredit , personal loan, instant personal loan,Rupaycredit personal loan,Rupaycredit  india personal loans, instant loan in india, online loan in india, personal loan india'),
(8, '2021-07-08 19:33:51', 'personal-loan', 'Apply for a Personal Loan Online - RupayCredit', 'Apply online for personal loans with RupayCredit. Enjoy instant approvals, simple terms, and a hassle-free loan process. Start your application today!', 'apply for loan, personal loan online, instant loan approval, hassle-free loan process, RupayCredit loans'),
(9, '2021-07-08 19:33:51', 'business-loan', 'Rupaycredit – Personal Loan and Business Loan', 'Rupaycredit offers instant personal loans and business loans at attractive interest rates &amp; easy EMI options. Apply now!', 'Rupaycredit , personal loan, instant personal loan,Rupaycredit personal loan,Rupaycredit  india personal loans, instant loan in india, online loan in india, personal loan india'),
(10, '2021-07-08 19:34:47', 'home-loan', 'Rupaycredit – Personal Loan and Business Loan', 'Rupaycredit offers instant personal loans and business loans at attractive interest rates &amp; easy EMI options. Apply now!', 'Rupaycredit , personal loan, instant personal loan,Rupaycredit personal loan,Rupaycredit  india personal loans, instant loan in india, online loan in india, personal loan india'),
(11, '2021-07-08 19:34:47', 'mortgage-loan', 'Rupaycredit – Personal Loan and Business Loan', 'Rupaycredit offers instant personal loans and business loans at attractive interest rates &amp; easy EMI options. Apply now!', 'Rupaycredit , personal loan, instant personal loan,Rupaycredit personal loan,Rupaycredit  india personal loans, instant loan in india, online loan in india, personal loan india'),
(12, '2021-07-08 19:36:13', 'digital-personal', 'Rupaycredit – Personal Loan and Business Loan', 'Rupaycredit offers instant personal loans and business loans at attractive interest rates &amp; easy EMI options. Apply now!', 'Rupaycredit , personal loan, instant personal loan, Rupaycredit personal loan, Rupaycredit  india personal loans, instant loan in india, online loan in india, personal loan india'),
(13, '2021-07-08 19:36:13', 'digital-business', 'Rupaycredit – Personal Loan and Business Loan', 'Rupaycredit offers instant personal loans and business loans at attractive interest rates &amp; easy EMI options. Apply now!', 'Rupaycredit , personal loan, instant personal loan, Rupaycredit personal loan, Rupaycredit  india personal loans, instant loan in india, online loan in india, personal loan india'),
(14, '2021-07-09 11:09:44', 'apply-personal-loan', 'Rupaycredit – Personal Loan and Business Loan', 'Rupaycredit offers instant personal loans and business loans at attractive interest rates &amp; easy EMI options. Apply now!', 'Rupaycredit , personal loan, instant personal loan, Rupaycredit personal loan, Rupaycredit  india personal loans, instant loan in india, online loan in india, personal loan india'),
(15, '2021-07-09 11:10:28', 'apply-business-loan', 'Rupaycredit – Personal Loan and Business Loan', 'Rupaycredit offers instant personal loans and business loans at attractive interest rates &amp; easy EMI options. Apply now!', 'Rupaycredit , personal loan, instant personal loan, Rupaycredit personal loan, Rupaycredit  india personal loans, instant loan in india, online loan in india, personal loan india'),
(16, '2021-07-09 11:11:10', 'apply-home-loan', 'Rupaycredit – Personal Loan and Business Loan', 'Rupaycredit offers instant personal loans and business loans at attractive interest rates &amp; easy EMI options. Apply now!', 'Rupaycredit , personal loan, instant personal loan, Rupaycredit personal loan, Rupaycredit  india personal loans, instant loan in india, online loan in india, personal loan india'),
(17, '2021-07-09 11:12:01', 'apply-mortgage-loan', 'Rupaycredit – Personal Loan and Business Loan', 'Rupaycredit offers instant personal loans and business loans at attractive interest rates &amp; easy EMI options. Apply now!', 'Rupaycredit , personal loan, instant personal loan, Rupaycredit personal loan, Rupaycredit  india personal loans, instant loan in india, online loan in india, personal loan india'),
(18, '2021-07-09 11:12:01', 'portal-channel', 'Rupaycredit – Personal Loan and Business Loan', 'Rupaycredit offers instant personal loans and business loans at attractive interest rates &amp; easy EMI options. Apply now!', 'Rupaycredit , personal loan, instant personal loan, Rupaycredit personal loan, Rupaycredit  india personal loans, instant loan in india, online loan in india, personal loan india'),
(19, '2021-07-09 11:12:01', 'portal-customer', 'Rupaycredit – Personal Loan and Business Loan', 'Rupaycredit offers instant personal loans and business loans at attractive interest rates &amp; easy EMI options. Apply now!', 'Rupaycredit , personal loan, instant personal loan, Rupaycredit personal loan, Rupaycredit  india personal loans, instant loan in india, online loan in india, personal loan india'),
(21, '2021-07-21 14:29:51', 'our-product', 'Rupaycredit – Personal Loan and Business Loan', 'Rupaycredit offers instant personal loans and business loans at attractive interest rates &amp; easy EMI options. Apply now!', 'Rupaycredit , personal loan, instant personal loan, Rupaycredit personal loan, Rupaycredit  india personal loans, instant loan in india, online loan in india, personal loan india'),
(22, '2021-08-03 13:51:12', 'premium-membership-card', 'Rupaycredit – Personal Loan and Business Loan', 'Rupaycredit offers instant personal loans and business loans at attractive interest rates &amp; easy EMI options. Apply now!', 'Rupaycredit , personal loan, instant personal loan, Rupaycredit personal loan, Rupaycredit  india personal loans, instant loan in india, online loan in india, personal loan india'),
(23, '2021-08-03 13:51:49', 'platinum-membership-card', 'Rupaycredit – Personal Loan and Business Loan', 'Rupaycredit offers instant personal loans and business loans at attractive interest rates &amp; easy EMI options. Apply now!', 'Rupaycredit , personal loan, instant personal loan, Rupaycredit personal loan, Rupaycredit  india personal loans, instant loan in india, online loan in india, personal loan india');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscribe`
--

DROP TABLE IF EXISTS `newsletter_subscribe`;
CREATE TABLE IF NOT EXISTS `newsletter_subscribe` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `subscribeemail` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `isActive` int NOT NULL DEFAULT '1' COMMENT '0=No, 1=Yes',
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `otpverification`
--

DROP TABLE IF EXISTS `otpverification`;
CREATE TABLE IF NOT EXISTS `otpverification` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` date DEFAULT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `otpcode` varchar(10) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `otpverification`
--

INSERT INTO `otpverification` (`id`, `rec_date`, `mobile`, `email`, `otpcode`) VALUES
(1, '2026-09-22', '9650000001', '', '3418'),
(2, '2026-09-22', '9650000001', '', '4459'),
(3, '2026-09-22', '9756000000', '', '8499'),
(4, '2026-09-23', '9999900000', '', '9049');

-- --------------------------------------------------------

--
-- Table structure for table `paygic_entry`
--

DROP TABLE IF EXISTS `paygic_entry`;
CREATE TABLE IF NOT EXISTS `paygic_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryfor` int NOT NULL DEFAULT '0' COMMENT '1=Customer, 2=Channel, 11=Digital PL, 12=Digital BL',
  `userid` int NOT NULL,
  `orderid` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `transactionid` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `statuscode` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `paymentmode` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payu_entry`
--

DROP TABLE IF EXISTS `payu_entry`;
CREATE TABLE IF NOT EXISTS `payu_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryfor` int NOT NULL DEFAULT '0' COMMENT '1=Customer, 2=Channel, 11=Digital PL, 12=Digital BL',
  `userid` int NOT NULL,
  `orderid` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `referenceid` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `txstatus` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `paymentmode` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phonepe_entry`
--

DROP TABLE IF EXISTS `phonepe_entry`;
CREATE TABLE IF NOT EXISTS `phonepe_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryfor` int NOT NULL DEFAULT '0' COMMENT '1=Customer, 2=Channel, 11=Digital PL, 12=Digital BL',
  `productid` int DEFAULT NULL,
  `packageid` int DEFAULT NULL,
  `userid` int NOT NULL,
  `orderid` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `referenceid` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `txstatus` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `paymentmode` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `productname` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `productslug` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `amount` float(11,2) NOT NULL,
  `offeramount` float(11,2) NOT NULL,
  `inOffer` tinyint NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `rec_date`, `productname`, `productslug`, `amount`, `offeramount`, `inOffer`) VALUES
(1, '2023-02-01 16:43:01', 'Personal Subscription Plan', 'personal-subscription-plan', 2999.00, 499.00, 1),
(2, '2023-02-01 16:43:01', 'Business Subscription Plan', 'business-subscription-plan', 2999.00, 499.00, 1),
(3, '2023-02-01 13:35:15', 'Card Offer', 'card-offer', 2999.00, 499.00, 1),
(4, '2023-02-01 13:35:15', 'IVR Payment Offer', 'ivrpayment-offer', 2999.00, 499.00, 1),
(5, '2023-02-01 13:35:15', 'Special offer', 'special-offer', 2999.00, 499.00, 1),
(6, '2023-02-01 13:35:15', 'Bumper offer', 'bumper-offer', 2999.00, 499.00, 1),
(7, '2023-02-01 13:35:15', 'Festival offer', 'festival-offer', 2999.00, 499.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `razorpay_entry`
--

DROP TABLE IF EXISTS `razorpay_entry`;
CREATE TABLE IF NOT EXISTS `razorpay_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryfor` int NOT NULL DEFAULT '0' COMMENT '1=Customer, 2=Channel, 11=Digital PL, 12=Digital BL',
  `userid` int NOT NULL,
  `orderid` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `referenceid` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `txstatus` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `paymentmode` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `refund`
--

DROP TABLE IF EXISTS `refund`;
CREATE TABLE IF NOT EXISTS `refund` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ref_for` int NOT NULL,
  `userid` int NOT NULL,
  `invoiceid` int NOT NULL,
  `ref_date` date DEFAULT NULL,
  `ref_number` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_price` float(11,2) NOT NULL,
  `ref_cgst` float(11,2) NOT NULL,
  `ref_sgst` float(11,2) NOT NULL,
  `ref_igst` float(11,2) NOT NULL,
  `ref_grandtotal` float(11,2) NOT NULL,
  `paymentid` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remarks` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roipackages`
--

DROP TABLE IF EXISTS `roipackages`;
CREATE TABLE IF NOT EXISTS `roipackages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `loantype` int NOT NULL,
  `bankid` int NOT NULL,
  `roi` float(11,2) NOT NULL,
  `termsyears` float(11,2) NOT NULL,
  `termsmonths` int NOT NULL,
  `isPreapproval` int NOT NULL DEFAULT '0',
  `isDelete` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roipackages`
--

INSERT INTO `roipackages` (`id`, `rec_date`, `loantype`, `bankid`, `roi`, `termsyears`, `termsmonths`, `isPreapproval`, `isDelete`) VALUES
(1, '2021-10-23 14:14:14', 11, 6, 10.99, 6.00, 72, 0, 0),
(2, '2021-10-23 14:14:14', 11, 30, 9.50, 5.00, 60, 0, 0),
(3, '2021-10-23 14:16:03', 11, 25, 10.49, 5.00, 60, 0, 0),
(4, '2021-10-23 14:16:03', 11, 31, 7.73, 4.00, 48, 0, 0),
(5, '2021-10-23 14:17:16', 12, 6, 10.99, 5.00, 72, 0, 0),
(6, '2021-10-23 14:17:16', 12, 21, 10.00, 5.00, 60, 0, 0),
(7, '2021-10-23 14:20:04', 12, 30, 10.50, 5.00, 60, 0, 0),
(8, '2021-10-23 14:20:04', 12, 20, 15.00, 3.00, 36, 0, 0),
(9, '2021-10-23 14:20:51', 12, 25, 11.50, 5.00, 60, 0, 0),
(10, '2021-10-23 14:20:51', 12, 32, 13.00, 1.50, 18, 0, 0),
(11, '2021-10-23 14:21:28', 12, 29, 14.00, 3.00, 36, 0, 0),
(12, '2021-10-23 14:21:28', 12, 28, 10.00, 5.00, 60, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `site_faqs`
--

DROP TABLE IF EXISTS `site_faqs`;
CREATE TABLE IF NOT EXISTS `site_faqs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `faq_type` int NOT NULL DEFAULT '1',
  `faq_question` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `faq_answer` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `isDelete` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `site_faqs`
--

INSERT INTO `site_faqs` (`id`, `rec_date`, `faq_type`, `faq_question`, `faq_answer`, `isDelete`) VALUES
(43, '2022-06-28 17:18:22', 1, 'What is a Personal Loan?', '<p>A personal loan is an unsecured loan, which means you don\'t need to pledge collateral to receive funds.</p>', 0),
(44, '2022-06-28 17:18:22', 1, 'Where can a Personal Loan be used?', '<p>Personal Loans can be used for any personal expense, like Shopping, Home Renovation, Higher Education, Debt Consolidation, Tour Travel, Wedding, Medical emergency, etc.</p>', 0),
(45, '2022-06-28 17:18:53', 1, 'What is the eligibility for a Personal Loan?', '<p>The following people are eligible to apply for an Instant Personal Loan:</p>\r\n <ul>\r\n <li>Individuals between 21 and 60 years of age.</li>\r\n <li>Individuals who have had a job for at least 1 year.</li>\r\n <li>Employees of private limited companies, employees from public sector undertakings, including central, state and local bodies.</li>\r\n <li>Those who earn a minimum of Rs. 15,000/- net income per month – credited to their bank.</li>\r\n </ul>', 0),
(46, '2023-02-10 10:36:27', 1, 'How to apply for a Personal Loan in our Partnered NBFCs?', '<p>With Kreditbea\'s Subscription Plan, people can apply for a Personal Loan in our Partnered NBFCs.</p>', 1),
(47, '2023-02-10 10:36:56', 1, 'What credit score is required for a Personal Loan?', '<p>Generally, the required credit score for a Personal Loan is 650 or more.</p>', 0),
(48, '2023-02-10 10:38:09', 1, 'What CIBIL score is required for a Personal Loan?', '<p>Generally, the required CIBIL score for a Personal Loan is 650 or more.</p>', 0),
(49, '2023-02-10 10:38:27', 1, 'How long will it take for my Personal Loan to be processed?', '<p>Once your application is submitted along with your documents, it can take anywhere between 1-7 days for your personal loan to get approved and a couple of days after that for the disbursement.</p>', 0),
(50, '2023-02-10 10:38:43', 1, 'Can my CIBIL Score affect my loan sanction?', '<p>Yes, your CIBIL score is one of the most important factors that play a crucial role in your loan process and sanctions.</p>', 0),
(51, '2023-02-10 10:39:14', 1, 'Can I claim tax benefits on personal loan?', '<p>Yes, only if you use your personal loan amount for certain purposes like investing in a business, buying a residential property, investing in other assets, etc.</p>', 0),
(52, '2023-02-10 10:39:14', 1, 'Can I apply for a personal loan online?', '<p>Yes, you can apply for a personal loan in our Partnered NBFCs by taking our Subscription Plan.</p>', 0),
(53, '2023-02-10 10:40:12', 1, 'Can I take a personal loan to repay my education loan?', '<p>A personal loan can be taken to effectively pay back the educational loan or any sort of loan or debt.</p>', 0),
(54, '2023-02-10 10:40:12', 1, 'What are 3 things banks consider when giving loans?', '<ul>\r\n<li>CIBIL Score</li>\r\n<li>Income Proof & Stability</li>\r\n<li>Age of the loan applicant</li>\r\n</ul>', 0),
(55, '2023-02-10 10:40:46', 2, 'What is a Business Loan?', '<p>A business loan is an unsecured credit you can avail to meet your urgent business requirements. Business loans allow you to usher in funds for your enterprise to expand your business.</p>', 0),
(56, '2023-02-10 10:40:46', 2, 'Where can a Business Loan be used?', '<p>You can use that money for any business expense like business expansion, boost production, buying new machinery, etc.</p>', 0),
(57, '2023-02-10 10:41:42', 2, 'What is the eligibility for a Business Loan?', '<p>The following people are eligible to apply for an Instant Business Loan:</p>\r\n<ul>\r\n<li>Age should be between 21 to 65 years.</li>\r\n<li>CIBIL score must be 700 or more.</li>\r\n<li>The candidate should own a business at least profitable for three successive financial years.</li>\r\n<li>The business turnover must display an upward trend.</li>\r\n<li>Your balance sheet must be audited by a registered Chartered Accountant (CA).</li>\r\n</ul>\r\n', 0),
(58, '2023-02-10 10:42:18', 2, 'How to apply for a Business Loan in our Partnered NBFCs?', '<p>With Kreditbea\'s Subscription Plan, people can apply for a Business Loan in our Partnered NBFCs.</p>', 1),
(59, '2023-02-10 10:42:18', 2, 'What credit score is required for a Business Loan?', '<p>Generally, the required credit score for a Business Loan is 650 or more.</p>', 0),
(60, '2023-02-10 10:43:31', 2, 'What CIBIL score is required for a Business Loan?', '<p>Generally, the required CIBIL score for a Business Loan is 650 or more.</p>', 0),
(61, '2023-02-10 10:43:31', 2, 'How long will it take for my Business Loan to be processed?', '<p>Once your application is submitted along with your documents, it can take anywhere between 1-7 days for your business loan to get approved and a couple of days after that for the disbursement.</p>', 0),
(62, '2023-02-10 10:45:05', 2, 'Can my CIBIL Score affect my loan sanction?', '<p>Yes, your CIBIL score is one of the most important factors that play a crucial role in your loan process and sanctions.</p>', 0),
(63, '2023-02-10 10:45:05', 2, 'What are the documents required for Instant Business Loan?', '<p>Following documents are required for availing a business loan:</p>\r\n<ul>\r\n<li>Business Proof</li>\r\n<li>KYC documents of the company</li>\r\n<li>KYC documents of the business owners</li>\r\n<li>Photo Identity Proof (Aadhar card/ Driving license/ Voter ID/ Passport)</li>\r\n<li>Last six months company bank statements</li>\r\n<li>GST Certificate</li>\r\n<li>Last two years Income Tax Returns</li>\r\n<li>Last two years Balance sheet and Profit & Loss accounts</li>\r\n<li>A report with detailed information about how the candidate will utilise the business loan</li>\r\n</ul>', 0),
(64, '2023-02-10 10:46:07', 3, 'What is the advantage of being a Kreditbea Channel Partner?', '<p>With a fantastic earning opportunity with very low investment, Kreditbea provides a personal dashboard to their Channel Partners where they can get Commission Report, Sharing Report, Payout Report, Profile Information, etc.</p>', 0),
(65, '2023-02-10 10:46:07', 3, 'How can we join the Kreditbea Channel Partner Program?', '<p>You can join the Kreditbea Channel Partner Program through the Channel Partner section of this website. You’ll be guided with all the required steps.</p>', 0),
(66, '2023-02-10 10:46:49', 3, 'Why should I join Kreditbea Channel Partner Program?', '<p>Kreditbea is a rapidly growing company and its Channel Partner Program is the most rewarding program in India. As a Kreditbea Channel Partner, you not only get to earn unbeatable commissions but also you can offer a delightful and convenient financial consultation and service to your customers.</p>', 0),
(67, '2023-02-10 10:46:49', 3, 'How much can I earn with the Channel Partner Program?', '<p>With the Kreditbea Channel Partner Program, you get paid on a sales conversion basis, depending on how many transactions your referrals complete. The better they do, the more you earn. There is no cap on how much you can earn.</p>', 0),
(68, '2023-02-10 10:47:58', 3, 'How can I track my earnings?', '<p>You can instantly manage your customers as well as track your earnings directly from your Channel Partner dashboard on Kreditbea.com.</p>', 0),
(69, '2023-02-10 10:47:58', 3, 'Who can join Kreditbea Channel Partner Program?', '<p>If you\'re aged between 18 and 62 years, you can join the Kreditbea Channel Partner Program. Apart from this, there are no other criteria.</p>', 0),
(70, '2023-02-10 10:48:51', 4, 'What is Kreditbea Subscription Plan?', '<p>Kreditbea\'s Subscription Plan is the most optimised way to get the industry-best financial consultation and services and relish some other great benefits as well.</p>', 0),
(71, '2023-02-10 10:48:51', 4, 'How can I buy a Subscription Plan?', '<p>Just after a quick registration, you can choose the convenient Subscription Plan and purchase it.</p>', 0),
(72, '2023-02-10 10:49:40', 4, 'Which Subscription Plan should I buy?', '<p>Kreditbea offers two types of Subscription Plans:</p>\r\n<ol>\r\n<li>Personal Subscription Plan for expert financial consultation for individuals.</li>\r\n<li>Business Subscription Plan for expert financial consultation for businesses.</li>\r\n</ol>\r\n', 0),
(73, '2023-02-10 10:50:27', 4, 'What are the benefits of buying a Subscription Plan?', '<ul>\r\n<li>File Login in Multiple NBFCs</li>\r\n<li>100% Online Process</li>\r\n<li>Get Personalized Tracking Portal</li>\r\n<li>On-Call Expert Consultation</li>\r\n<li>Dedicated Loan Expert Assigned</li>\r\n<li>CIBIL Remains Unaffected</li>\r\n</ul>', 0),
(74, '2023-02-10 10:52:26', 4, 'What if I, by mistake, do more than 1 payment? Am I eligible for a refund?', '<p>In case a customer has mistakenly made more than a single payment, the customer will be eligible to get a refund. The customer will have to request a refund within 48 hours of the payment through the Raising A Request section of the website or by calling on the company\\\'s registered contact number.</p>', 0),
(75, '2023-02-10 10:52:26', 4, 'Can I get a refund if I buy Subscriptions/Memberships from multiple companies that belong to your group of companies?', '<p>In case a customer has bought Subscriptions/Memberships from multiple companies that belong to our group of companies, the customer will be eligible to get a refund. The customer will have to request a refund within 48 hours of the payment through the Raising A Request section of the website or by calling on the company\\\'s registered contact number.</p>', 0),
(76, '2023-02-10 10:54:47', 5, 'I have already paid. But, my account has not yet been created. What should I do?', 'This could happen if the payment gateway is still holding your funds and has not credited them to the company\'s account. Once the funds are credited to the company\'s account, your account will be created, and you will be notified by email. Otherwise, the payment gateway will refund your funds in accordance with their policies.', 0),
(77, '2023-02-10 10:55:23', 5, ' I have yet to receive my refund, even after so many days. What should I do? ', 'This may occur if your funds are held by the payment gateway/bank. The refund will be processed in accordance with the bank\'s/payment gateway\'s policies and procedures.', 0),
(78, '2023-02-10 10:55:48', 5, 'I misunderstood the company\'s service and/or paid by mistake. Is there a way to get a refund? \n', 'Subscription plan fees are only refundable if you adhere to the company\'s cancellation & refund policy. For more information,  <a href=\"https://rupaycredit.com/refund-policy\"> click here.</a> ', 0),
(80, '2023-02-10 10:56:06', 5, 'During the application process, I received pre-approval loan offers based on my eligibility. But I did not get a loan. Why? ', 'To learn more about the Pre-Approved Loan offer and eligibility, go to the Terms & Conditions page and read the \'PRE-APPROVAL LOAN OFFER TERMS AND CONDITIONS\' section. <a href=\"https://rupaycredit.com/terms-conditions\"> click here.</a> ', 0),
(81, '2023-02-10 10:56:27', 5, 'Who can claim a GST refund? ', 'Customers who have updated their GST information on their portal are eligible to file GST returns. ', 0),
(82, '2023-02-10 10:57:04', 5, 'I have changed my mind and no longer want to use the company\'s services. Can I get a refund?\n', 'Subscription Plan fees are only refundable in accordance with the cancellation and refund policy: <a href=\"https://rupaycredit.com/refund-policy\"> click here</a> for more information. ', 0),
(83, '2023-02-10 10:57:41', 5, 'I unintentionally made multiple payments. Is it possible to get a refund? \n', 'If a customer accidentally makes multiple payments, they are entitled to a refund. The customer must request a refund within 48 hours of making the payment, either by using the website\'s Raising A Request section or by calling the company\'s registered phone number.\n', 0),
(84, '2023-02-10 10:57:58', 5, 'Is it possible to receive a refund if I buy a membership or subscription plan from another company in your group? ', 'Customers who purchase a membership or subscription from another company in our group are eligible for a refund. The customer must request a refund within 48 hours of making the payment, either by using the website\'s Raising A Request section or by calling the company\'s registered phone number.\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `site_options`
--

DROP TABLE IF EXISTS `site_options`;
CREATE TABLE IF NOT EXISTS `site_options` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `option_key` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `option_value` longtext COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `site_options`
--

INSERT INTO `site_options` (`id`, `rec_date`, `option_key`, `option_value`) VALUES
(25, '2024-06-12 18:12:51', 'privacy-policy', '<p>The privacy of every user of Rupay Credit is crucial for the company. This Privacy Policy mentions the data and information we gather about you, how we treat it, with whom we share it, and how we preserve and protect it.</p>\r\n\r\n<p>In the regular course of our business through this website, we gather your personal information through several sources, including:</p>\r\n\r\n<ul>\r\n	<li>Information from you, such as applications or other sources which includes your name, address, marital status, employment, assets and income; and</li>\r\n	<li>Information about you, your accounts, and your holdings and transactions that we receive from you or others, such as account custodians, brokers, and other financial services firms, banks, etc.</li>\r\n</ul>\r\n\r\n<p>We&#39;re also dedicated to protecting the users of our website by addressing potential privacy concerns. Our privacy guidelines apply to all users globally. This policy applies to all information, in whatever form, relating to Rupay Credit&rsquo;s business activities across the world, and to all information handled by Rupay Credit relating to other companies and organizations with whom it deals. It also covers all IT and information communications facilities operated by Rupay Credit or on its behalf.</p>\r\n\r\n<p>This Privacy Policy covers the security, information, IT equipment and use of Rupay Credit, a company incorporated under the laws, presently in force in India and has its registered office at Surat, Gujarat and all its affiliates. It also includes the use of email, internet, voice and mobile IT equipment. This policy applies to all Rupay Credit Users, Clients, and employees (hereafter referred to as &#39;individuals&#39;).</p>\r\n\r\n<p>Subject to arbitration, only the courts and tribunals of Surat, Gujarat shall have exclusive jurisdiction with respect to any suit, action or any other proceedings arising out of or in relation to the Loan Documents. Nothing contained in this clause shall limit any right of the Lender to commence any legal action or proceedings arising in relation to the Loan or the Loan Documents in any other court, tribunal or another appropriate forum, competent jurisdiction and the Borrower and/or the Guarantor hereby consent to that jurisdiction.</p>\r\n\r\n<h3><strong>How Rupay Credit manages and protects Your Personal Information? </strong></h3>\r\n\r\n<p>Rupay Credit doesn&rsquo;t sell or trade information about current or former clients to third parties. We may disclose your personal information as necessary to:</p>\r\n\r\n<ul>\r\n	<li>Effect, administer, or enforce a transaction that you request or authorize;</li>\r\n	<li>Process or service a financial product or service that you request or authorize; or</li>\r\n	<li>Maintain or service your account with us or with another entity.</li>\r\n</ul>\r\n\r\n<p>Rupay Credit may also disclose your personal information and data for everyday business purposes to organizations or firms who provide consulting, technology or other services for us and agree to maintain its confidentiality; others, such as attorneys, trustees, family members, or others who are authorized to represent you, your estate, or a joint or co-owner of your account; regulatory agencies; or as we are otherwise permitted or required by law or process of law.</p>\r\n\r\n<p>Rupay Credit restricts access to your personal information to our employees and to permitted third-parties who need to know that information to provide products or services for us, or to provide, process, or maintain any security, account, or investment product, service or program for you or your benefit. To protect your personal information from unauthorized access and use, we have adopted administrative, technical, and physical security procedures that comply with the Laws in India. These measures include computer safeguards and secured files and buildings.</p>\r\n\r\n<h3><strong>What Rupay Credit can do with your personal information: </strong></h3>\r\n\r\n<p>We may use your personal information that we collect, or that is provided to us for the following reasons:</p>\r\n\r\n<ol>\r\n	<li>Considering any application for an account or service;</li>\r\n	<li>Carrying out our business functions and activities;</li>\r\n	<li>Collecting amounts you owe us, including taking enforcement action;</li>\r\n	<li>Exercising our rights and fulfilling our obligations under any agreement with you;</li>\r\n	<li>Exercising our rights and fulfilling our obligations for the purposes of complying with all applicable laws, including those relating to money laundering, terrorist financing, bribery, corruption, tax evasion, fraud, and similar; and managing all economic and trade sanction risks;</li>\r\n	<li>Generally administering and monitoring services provided to you (or any related entity); and</li>\r\n	<li>Providing you with information about our other services, or the services of selected third parties in which we think you may have an interest, including by post, telephone and electronic message &ndash; you can opt-out of receiving information about our other services and/or the services of selected third parties by informing us in writing.</li>\r\n</ol>\r\n\r\n<h3><strong>Sharing of Personal Information with Third Parties: </strong></h3>\r\n\r\n<p>Rupay Credit does not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect our or others&#39; rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.</p>\r\n\r\n<h3><strong>Security and Confidentiality: </strong></h3>\r\n\r\n<p>The protection and security of your personal information are important to us. We generally follow industry-standard information security tools and measures, as well as internal procedures and strict guidelines to prevent information submitted to us, both during transmission and once we receive it from misuse and data leakage. No method of transmission over the internet, or method of electronic storage, is 100% secure, however. Therefore, while we strive to use commercially acceptable means to protect your personal information, which considerably reduces the risks of data misuse, we cannot guarantee its absolute security. To notify the Company about any security vulnerability or potential data breach, please contact us at: info@rupaycredit.com&nbsp;and we will take the appropriate measures to address such an incident, as deemed necessary.</p>\r\n\r\n<p>Our employees can access the information on a &quot;need-to-know&quot; basis and are subject to confidentiality obligations.</p>\r\n\r\n<h3><strong>DATA ACCURACY </strong></h3>\r\n\r\n<p>Personal Data must be accurate and, where necessary, kept up to date. It must be corrected or deleted without delay when inaccurate. It is advisable that you ensure that the Personal Data we use and hold is accurate, complete, kept up to date and relevant to the purpose for which we collected it. You must check the accuracy of any Personal Data at the point of collection and at regular intervals afterwards. You must take all reasonable steps to destroy or amend inaccurate or out-of-date Personal Data.</p>\r\n\r\n<h3><strong>LIMIT OF LIABILITY </strong></h3>\r\n\r\n<p>We shall not be liable for any confusion caused as a result of any of your actions or omission of any action, anything as a result of your viewing, reading or listening of any content. Although we will do our best to provide constant, uninterrupted access to our website, we accept no responsibility or liability for any interruption or delay. In no event will our total liability to you for all damages arising from your use of the service or information, materials or products included on or otherwise made available to you through the service exceed the amount you paid for the service related to your claim.</p>\r\n\r\n<p>We have no liability for any loss, damage or misappropriation of your files under any circumstances or for any consequences related to changes, restrictions, suspension or termination of your service or the agreement. These liabilities shall apply to you even if their remedies shall fail their essential purpose.</p>\r\n\r\n<h3><strong>USAGE OF ADVERTISING ID </strong></h3>\r\n\r\n<p>When you are using our application that incorporates our Services, we may also automatically record your Google and/or any other Advertising ID (if you are using an Android device) or your Advertising Identifier (IDFA - if you are using an IOS device; together with the Google and/or any other Advertising ID-&quot;Mobile Advertising IDs&quot;), for advertising or analytics purposes. The said Advertising ID is an anonymous identifier, provided by Google. If your device has an Advertising ID, we may collect and use it for advertising and user analytics purposes. If your device does not have an Advertising ID, we may use other persistent identifiers. The information collected may also be stored on your device. You can reset your mobile Advertising ID or opt-out of receiving targeted ads through your mobile Advertising IDs which are provided in our settings.</p>\r\n\r\n<h3><strong>COMPLIANCE &amp; COOPERATION WITH REGULATORS </strong></h3>\r\n\r\n<p>We regularly review this Privacy Policy and make sure that we process your personal information in ways that comply with regulations currently in force in India. We firmly comply with legal frameworks including data protection laws relating to the transfer of data.</p>\r\n\r\n<h3><strong>CONSENT </strong></h3>\r\n\r\n<p>By using our website, you consent to our website&#39;s Privacy Policy. The usage of the website shall be construed as an acceptance of the Privacy Policy.</p>\r\n\r\n<h3><strong>GRIEVANCES </strong></h3>\r\n\r\n<p>For any complaints and/or inquiries, you can send us formal written inquiries or complaints at info@rupaycredit.com. All inquiries and/or complaints shall be examined and will be resolved expeditiously. Our team of experts will respond by contacting the person who made such inquiries and/or complaints. We work with the appropriate regulatory authorities, including local data protection authorities, to resolve any complaints regarding the transfer of your data that we cannot resolve with you directly.</p>\r\n\r\n<h3><strong>MODIFICATION OF THE POLICY </strong></h3>\r\n\r\n<p>We reserve the right to modify this Privacy Policy at our own independent decision at any time. If the changes are significant, the Company shall spare no efforts to apprise its clientele and provide a prominent notice (including, for certain services, email notification of Privacy Policy changes). It is pertinent to remember that it shall be the Clients&#39; responsibility to read the Policy as amended every once in a while.</p>\r\n\r\n<h3><strong>USAGE OF COOKIES/COOKIES POLICY </strong></h3>\r\n\r\n<p>Cookies are small files that a site or its service provider transfers to your computer&#39;s hard drive through your web browser with your permission which enables the site or service provider&#39;s systems to recognize your browser and capture and remember certain information. We use cookies to help us understand and save your preferences for future visits, keep track of advertisements and compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.</p>\r\n');
INSERT INTO `site_options` (`id`, `rec_date`, `option_key`, `option_value`) VALUES
(26, '2024-06-12 18:11:25', 'terms-conditions', '<p>In these Terms &amp; Conditions, the words such as &ldquo;we&rdquo;, &ldquo;our&rdquo;, &ldquo;company&rdquo;, and &ldquo;us&rdquo; refer to Rupay Credit and its undertaken system. And the words such as &ldquo;you&rdquo;, &ldquo;your&rdquo; refer to Rupay Credit users, customers, etc.</p>\r\n\r\n<p>Here are the terms and conditions for Customers, Employees, and every user of our website - www.rupaycredit.com. So, the terms and conditions are applied as per your role. You must read all the below-mentioned Terms &amp; Conditions carefully.</p>\r\n\r\n<p>The Company wishes to offer the services under the terms and conditions set forth and the user/customer wishes to be associated unconditionally with these terms and conditions. Therefore, in consideration of the agreements contained in this, the parties, intending to be legally bound, agree to the correctness and authenticity of the following details given to the company:</p>\r\n\r\n<ul>\r\n	<li>Information from you, such as applications or other forms (which include your name, address, marital status, employment, assets and income); and</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Information about you, your accounts, and your holdings and transactions that we receive from you or others, such as account custodians, brokers, and other financial services firms, banks, etc.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\">If the company by any source finds out anyone bad-mouthing or defaming the company&#39;s reputation or company&#39;s members then strict legal action will be taken against the individual or group.</p>\r\n\r\n<p dir=\"ltr\">We&#39;re also serious about protecting our users by addressing potential privacy concerns. Our terms and condition guidelines apply to all users across the world. These terms and conditions apply to all information, in whatever form, relating to Rupay Credit&#39;s business activities worldwide, and to all information handled by Rupay Credit, relating to other organizations with whom it deals. It also covers all IT and information communications facilities operated by Rupay Credit or on its behalf.</p>\r\n\r\n<h3 dir=\"ltr\"><strong>SUBSCRIPTION TERMS AND CONDITIONS: </strong></h3>\r\n\r\n<ol dir=\"ltr\">\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The payment of subscription fees is refundable only in accordance with the company&#39;s Cancellation &amp; Refund Policy.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Rupay Credit subscription is not transferable and is only valid up to its date of expiry (valid as per subscription) and the subscription may not be used by any person other than the purchaser.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Renewal terms and conditions are at the discretion of Rupay Credit.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The subscription can only be used on/for our website.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p dir=\"ltr\"><strong>CUSTOMER TERMS AND CONDITIONS:</strong></p>\r\n\r\n<ol>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The payment of Subscription fees is refundable only in accordance with the company&#39;s Cancellation &amp; Refund Policy.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company only takes the cost of the Subscription. No other tip of service is charged.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Customers can use the Subscription only for loan purposes with given benefits. Also, buying a Subscription lets you apply for a loan and it doesn&rsquo;t guarantee loan approval as the final loan approval depends on the banks and the customer profile. If the loan is rejected, you can still avail other benefits of the Subscription.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If a customer is viewing any advertisement/promotional content of the company and then approaching the company thinking that he/she will get the loan approval based on the advertisement, then it must be noted that a loan application will only be submitted once the customer buys Rupay Credit&rsquo;s Subscription. Even after buying the Subscription, the final loan approval depends on the bank(s) and customer profile. If the customer&rsquo;s profile doesn&rsquo;t match loan eligibility criteria, he/she won&rsquo;t be able to get a loan. Still, they can avail other benefits of the Subscription.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Subscription can be used only by the persons who have purchased it and not by any other person(s), source or third party.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If a customer reference does payment through the customer&#39;s own referral link which is provided by the company and if that shows in the customer&#39;s portal then the only company will give the reference payout of that customer.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If the customer loan is approved in our company and he/she denies that loan approval then also Subscription payment would not be refundable.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The documents, cheques, and OTP that the company&#39;s employee asks the customer are for the processing of the loan only and the company never misuses them. Just for security, after completing the loan process, the customer can go to the concerned bank and cancel their cheque. The company is not responsible if any problems/disputes arise in the future.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If you do not give the OTP, documents, or document query for verification to the company&#39;s employee for the loan process, then your file will be rejected. (According to the criteria, if your file matches without OTP, your loan will be processed).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If our company&#39;s executive asks you for any payment transaction OTP, do not provide it. If the customer pays any charges other than the charge of the Subscription, the company won&rsquo;t be responsible for the same.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If a customer has any queries regarding the loan process then he/she would have to contact the department where their files are in process.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">We will verify your documents in multiple banks; so whatever documents are submitted by customers in our company that will match with any bank criteria, in that bank only we will proceed with the loan process. For example, if your file will match in 2 banks then our company&#39;s login department will login your document only in that 2 banks. The verification is done by the company&#39;s employee and there is no proof available for the same.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The document will be verified by the company in multiple banks. If your documents match the criteria of the bank, then the login process will be done in that bank. If your documents do not match the criteria of a bank, the company will give you a solution. You can take the solution and reapply after a certain period (as per Subscription) - and this will be shown on the customer portal.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">It is not fixed that the customer file will be logged in only in the banks listed on the company website. It may be logged in/verified in other banks also, depending on the customer file.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Our company is not taking extra charges other than Subscription charges. If any third-party charges you then our company is not responsible for that.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">There are no processing or file charges for customer loan approval. There is only one charge and that&#39;s only for the Subscription - validity as per Subscription.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Our company will log in customer files as per their requirements. (Example: If customer requirement is INR 1 lakh and if some bank criteria is up to INR 50,000 then we will not log in their file in that bank).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Wherever the customer file is logged in by the company, these details will not be given to any customer in written or digital form.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Loan offers and the pre-approval loans process depend only on the bank&#39;s rules and that type of loan is given only on customer behaviour. So, there is so much difference between that type of process and the company&#39;s process. If that loan is rejected in our company but gets approved by another company/source then the customer can&#39;t blame our company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Loan approval depends on your profile so if your documents are perfect and as per the bank criteria then you will get a loan through our company</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The loan information is only given to the person who has applied for the loan.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">During the loan processing time, if any customer would not be in contact with us for 3 days, then that file will be rejected by our company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If your file is rejected in our company, then the customer has to make sure that they have to re-submit their documents, with the implemented company-suggested solution, in our company after a certain period (as per Subscription).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company is not responsible if the customer loan is rejected by any queries.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If the customer will apply for the first time but his/her loan is rejected in our company then the company will give them a reason and solution for that. So at re-applying time if the customer will not resubmit a file with the solution implemented then the file will be again rejected in our company for the same reason. Still, the final loan approval will depend on the customer profile and the bank&#39;s criteria and rules &amp; regulations.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company will provide only the reason for rejection to the customer and it would not be provided in the form of hard or soft copy - it will only be shown in the customer portal. Some banks only provide general reasons, they don&#39;t give us any specific reason so the customer should not complain about that.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The customer has to give correct information about their CIBIL SCORE and PROFILE. If the customer gives wrong information, then the company will not be responsible for loan rejection.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company will not be providing any CIBIL REPORT in digital or hard copy to any customer in any situation.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Bank charges are applicable as per banks&#39; rules and regulations.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company will take legal action against the customer who submitted fake documents. And the company won&rsquo;t take any responsibility for the loan process in this case.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">After the customer&rsquo;s file is logged in, the customer has to contact only the login department and coordinate with them &ndash; not any telecaller or other department of the company. The further process has to be done according to the login department.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">During the loan process if the rules of any bank change, then we have to follow those new rules.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The customer has to give their registered phone number for being contacted by the login department.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">During the loan processing time, if the company gets any queries and it is not solving that in the given time, then the company has the authority to take more time to address the query. So, the customer must not complain about the same.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If the customer wants to reapply in our company after file rejection or approval, then he/she has to re-submit their documents in the customer portal.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">When you are applying for a loan on our website, we are showing you only your Eligibility for the loan. So whatever details you enter on the website are accepted by software only, and that only shows your pre-approval and not your final loan approval. Approval only depends on your documents and the banks&#39; rules and regulations. We are not giving you any guarantee for the final loan approval.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">All the detailed criteria, terms, and information behind any of the company&rsquo;s concise promotional content (social media ads, banners, SMS, advertisements, emails, etc.) are stated in the Terms &amp; Conditions and Privacy Policy sections of the website. Any concerned person (customer, employee, etc.) must check and accept all the rules and regulations before availing any of the company&rsquo;s services. If any person has confusion, they can call on the company&rsquo;s customer care number to gain clarity before availing company&rsquo;s services.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The customer&#39;s payment is executed by third-party payment sources. So whenever payment would be received by the company then only a Subscription will be activated for the customer. If a customer&#39;s payment would be debited from his/her account but we don&#39;t receive any payment in the company&#39;s account then the company will not be responsible for that.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">For any reference customer&#39;s payout, their account verification is compulsory. After verification, if the payout amount is debited from the company&rsquo;s account and if it does not credit/reflect in the reference customer&rsquo;s account &ndash; the company won&rsquo;t be responsible for this issue.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Our company is a private limited company and we are tied up with banks and corporate DSA. We are providing loans through banks only.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Multiple partnered banks&#39; logos are shown on our website and our promotional content across many mediums &ndash; these are shown only for our company&#39;s marketing purpose. It might be possible that certain banks, whose logos are shown on our website/promotional content, are not partnered with our company. Also, these should not be assumed as any bank&#39;s advertisement.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If anyone takes any legal action against the company then only our legal advisor would be dealing with that and Surat, Gujarat will only remain the junction for any legal procedure. No one would be able to contact any employee or director of our company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If any person has a doubt/question regarding any of the company&rsquo;s terms and conditions, they can contact the company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The eligibility age for buying a Subscription is 18 - 62 years. The persons in this age bracket can avail benefits of the Subscription.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">For the Reference Customers who have given customer referrals to the company, it would be compulsory for them to submit their Payout Documents to the company within 30 days. If not submitted, all the payouts of the Reference Customer will be automatically cancelled. To get the cancelled payout, you can contact the company and discuss it.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Every reference payout will have a deduction of 5% TDS.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">For the loan process, the company will only coordinate with the person who has purchased the Subscription and has an ongoing loan process &ndash; the company won&rsquo;t coordinate with any third party.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Every bank payout will have tax deductions as per the bank&rsquo;s rules and regulations.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The Company&#39;s authorized person can change any rules and regulations at any time; the concerned person must be regularly updated with the company&rsquo;s terms and conditions and has to accept them unconditionally.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company will provide the appropriate loan services but the responsibility of customer handling will be of the reference customer.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If any bank&#39;s rules or company&#39;s rules are changing during the processing time of the loan then the customer has to follow those new rules.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The office holidays and bank holidays will not be counted as working days/business days. The company&rsquo;s office work will be done on working days only.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Our promotional content may communicate messages like &#39;Get Personal Loan in 30 mins&#39; or &#39;Get Rs.5,00,000 in 5 mins&#39; on our company&rsquo;s social media, blogs/articles, ads, websites, emails, SMS, or any other medium &ndash; it must be carefully noted that these messages are only meant for marketing and promotional purposes. All the numerical values that depict time/number of steps/number of clicks &ndash; are for marketing and promotional purposes only. The final loan approval and process depend on the customer profile and the bank/NBFCs&rsquo; rules, regulations and criteria. If you have any sort of doubt before starting the process, you can call our customer care number (10 am to 5 pm &ndash; Monday to Saturday).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">As per the details/information entered by the user, even if the actual pre-approved amount is lesser than 2 Lakhs, the pre-approved amount shown on the website will be Rs.2 Lakhs (minimum). And, even if the actual pre-approved amount is more than 8.5 Lakhs, the pre-approved amount shown on the website will be Rs.8.5 Lakhs (maximum). The pre-approved amount/pre-approved loan offers are tentative &ndash; the final loan approval, loan sanction, and disbursement depend on the customer profile and the NBFCs&rsquo; rules and regulations.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The first login of the customer&rsquo;s file will be handled and executed by the company. To avail the reapplying option, the customer will have to perform the self-login(s).</p>\r\n	</li>\r\n</ol>\r\n\r\n<h3 dir=\"ltr\"><strong>REFERENCE TERMS AND CONDITIONS:</strong></h3>\r\n\r\n<ol>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Reference payout would be given to reference customers as per rules and regulations of our company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Our company will give payout only on Subscription; it does not depend on the reference customer&#39;s loan approval or rejection.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Whether the customer loan will be approved or not depends on the customer profile and the company does not give any guarantee for that.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If customers are giving a reference in our company for loan purposes, for that we have some criteria. The customer has to give a reference based on that criteria. The company is not giving you any type of guarantee for the loan approval in any situation at any cost so customers who give a reference have to agree with the decision of that file&#39;s login department.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company will take legal action against the reference partner/customer who submitted fake documents. And the company won&rsquo;t take any responsibility for the loan process in this case.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;The Customer&#39;s terms and conditions are also applicable to the reference person&#39;s customers.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;Reference customer&#39;s payment is done through third-party payment sources. So whenever payment would be received by the company then only the Subscription will be activated. If the customer&#39;s payment is debited from his/her account but the company doesn&#39;t receive any payment in the company&#39;s account then the company will not be responsible for any queries.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;During loan offers, if any reference person will do the online loan process then the company will give the payout up to 40% per Subscription to the reference person. But before that, invoice generation is most important for any payout process.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If the customer of reference will do an online process then the customer&#39;s payout will be given to the referral partner. But during processing time, if the company would refund that amount to the customer for any reason, then that customer&#39;s payout will be cut out from the reference person&#39;s next payout.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;Whatever documents are submitted by a reference person, they will be secure in our company. If documents will be misused by any other sources in future then our company is not responsible for that.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">For the Reference Customers who have given customer referrals to the company, it would be compulsory for them to submit their Payout Documents to the company within 30 days. If not submitted, all the payouts of the Reference Customer will be automatically cancelled. To get the cancelled payout, you can contact the company and discuss it.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If anyone takes any legal action against the company then only our legal advisor would be dealing with that and Surat, Gujarat remains the only junction for any legal procedure. No one can contact any employee or director of our company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If any person has a doubt/question regarding any of the company&rsquo;s terms and conditions, they can contact the company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;Every reference payout will have a deduction of 5% TDS.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The office holidays and bank holidays will not be counted as working days/business days. The company&rsquo;s office work will be done on working days only.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The Company will have no responsibility for the promotions conducted and undertaken by the Customer Reference. The Customer Reference agrees that the promotions done by them are at their own risk, and the Customer Reference cannot hold the Company responsible for any sort of losses faced due to the promotions.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p dir=\"ltr\"><strong>GENERAL TERMS AND CONDITIONS:</strong></p>\r\n\r\n<ol>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If the login department fails to solve the customer queries with accuracy, dedication and responsibility, then the login department agency will be cancelled by the company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The Customer&#39;s loan process will take more days due to any festival.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If anyone has GST then they have to add the GST number in their portal so that the company can provide a GST Return to them. If you haven&rsquo;t received your GST Return &ndash; you can raise a request or call on company&rsquo;s customer care number between 10 AM to 5 PM (Monday to Saturday &ndash; only business days).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The Company is using Blogs for their advertising, so that content could be of the third party, so the company doesn&#39;t take guarantee of the information to be correct or incorrect.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If customers, employees, any other person, or any other party has a problem with the company then they have to inform that problem to our company through notice; so, we can try to give you a solution of that but after that, any of them want to take a legal action then they have to inform the company through notice. Only then, the legal process will be started.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If customers, employees, any other person, any other third party has a problem/dispute/misunderstanding with the company, the right to take the final decision over the concerned issue is reserved with the company and the concerned person will have to accept the solution provided by the company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The documents, cheques, and OTP that the company&#39;s employee asks the customer are for the processing of the loan, the company is not responsible if any problems/disputes arise in the future.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">During any process on the website, if there is any kind of mistake that happens due to the software or website technical problems, the final decision on such disputes can only be taken by the company and it has to be accepted by anyone concerned.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The Company&#39;s authorized person can change any rules and regulations at any time; the concerned person must be regularly updated with the company&rsquo;s terms and conditions and has to accept them unconditionally.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">All the commitments made by the company&rsquo;s employees (any employee/person from the company), telecallers, or salespersons, etc. should be cross-checked by any concerned person (customer/any other person) from the Terms &amp; Conditions section of www.rupaycredit.com&nbsp;before availing any of the company&rsquo;s services. Only the rules and regulations stated on the company website will be considered official.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">All the detailed criteria, terms, and information behind any of the company&rsquo;s concise promotional content (social media ads, banners, SMS, advertisements, emails, etc.) are stated in the Terms &amp; Conditions and Privacy Policy sections of the website. Any concerned person (customer, employee, etc.) must check and accept all the rules and regulations before availing any of the company&rsquo;s services. If any person has confusion, they can call on the company&rsquo;s customer care number to gain clarity before availing company&rsquo;s services.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If any Customer Referral&rsquo;s customer gets a refund (due to any dispute like payment gateway problem or any other issue) then the referral payout will not be provided (if provided, it would be deducted from the next payout of the customer referral).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">While generating the payout for Customer Referrals, the company uses a third-party payment gateway. So, if the payout is stuck and put on hold due to any payment gateway issue (or any other issue), then the payout would be delayed and all the terms and conditions of the third-party payment gateway would be applied. In such cases, the payout will be released only when the third-party payment gateway releases the stuck payment. In case of a payout dispute with any bank, the bank&rsquo;s criteria will be applied and the payout will be released only when the bank approves the payment.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If there is any dispute that arises between any concerned user (customer, customer referral, etc.) and the company, their account will be disabled immediately by the company. In such a case, the user would be needed to contact the company for any query.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;All of the promotional content put and shared by the company, either on its website or any platform, is only for advertisement purposes. Any person should not assume it as the final loan approval or details of the loan. The final loan approval and specifics of the loan depend on the rules and regulations of various banks (or the concerned bank) and the customer profile. Every customer, or any other user must accept this clause and consider the bank&rsquo;s loan processing time only.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The loan-related figures, rates, and information used in the promotional content of the company are general and for promotional purposes. The final nature and specifics of the loan in terms of the loan amount, interest rate, repayment tenure, loan processing fees, loan insurance, etc., depends solely on the customer profile and the rules and regulations stated by the concerned bank. The final loan details depend on the criteria set by the concerned bank(s).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Rupay Credit&#39;s company name, logo, content, business concept, software and system, pattern, website structure and design, and business process and offers are copyrighted with the company. If any individual or organization uses/copies any of the above-mentioned by even 1%, legal action may be taken against them.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If any person (customer, employee, etc.) is involved in any of the company&#39;s processes then the company is authorized to record the phone calls with that person.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If any customer applies for a loan in our company and if any other external person/organization commits fraud with that customer in terms of taking money from you or in any other way then, it will not be the company&rsquo;s responsibility for any kind of loss faced by the customer.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Whatever loan offer is given to the customer is according to the customer profile. The customer will have to compulsorily accept the loan offer &ndash; he/she cannot deny the loan offer.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company has full authority to use the customer&rsquo;s information for purposes such as testimonials, advertisements, marketing, SMS, etc. The customer agrees that regulations of Do Not Disturb(DND)/National Do Not Call(NDNC) won&rsquo;t be applied in such practices.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If any person (user, customer, etc.) visits our website and indulges in any activity &ndash; like clicking a button, link, filling forms, or any other activity on the website, it will clearly mean and express that the person agrees to and acknowledges all terms &amp; conditions, rules &amp; regulations, and policies of the company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">After the loan approval, the bank charges will be applied as per the bank&rsquo;s rules and regulations.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;No customer can contact the bank&rsquo;s employees to inquire about/get any information on the loan file processes.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The customer, whose loan has been approved, must read and understand the bank agreement and the bank&rsquo;s terms and conditions carefully. After the loan process is done, the company can&rsquo;t be held responsible or liable for anything.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company will take legal action against the customer, reference customer, or any other person who submitted fake documents. And the company won&#39;t take any responsibility for the loan process in this case.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;Multiple partnered banks&#39; logos are shown on our website and our promotional content across many mediums &ndash; these are shown only for our company&#39;s marketing purpose. It might be possible that certain banks, whose logos are shown on our website/promotional content, are not partnered with our company. Also, these should not be assumed as any bank&#39;s advertisement.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If anyone takes any legal action against the company then only our legal advisor would be dealing with that and Surat, Gujarat, will only remain the junction for any legal procedure. No one would be able to contact any employee or director of our company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Any wrong/fake commitment or vocal statement given by the company&rsquo;s employees, etc. would be considered invalid. Only the solutions or solution-related vocal statements would be considered valid. All the company&rsquo;s Terms &amp; Conditions, Privacy Policy, Disclaimer, all other rules will be final and have to be followed.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If any person has a doubt/question regarding any of the company&rsquo;s terms and conditions, they can contact the company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;The office holidays and bank holidays will not be counted as working days/business days. The company&rsquo;s office work will be done on working days only.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Loan processing time might get delayed because of any public holiday, technical problems, customer issues, etc.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The Company will not be providing any proof for rejection in hard or soft copy.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">It might be possible that the content/figures/information shown on our website are not updated. So, to get the exact information regarding any of our website&rsquo;s content, Terms &amp; Conditions, Privacy Policy, Disclaimer, etc., you can call on our customer care number.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;After the purchase of the Subscription, the Company Executive will call the concerned person within 24-48 hours (it could be delayed due to any reason) for the loan process or partner process. If the concerned person doesn&rsquo;t get a call, they can call on the company&rsquo;s customer care number.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If the login process is going on and there has been no response from the login department, then the customer can call on the company&rsquo;s customer care number.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The content and any process on the website can be changed or modified at any instance. So, the older version of the content and process won&rsquo;t be functional, valid, or a subject of argument for any person &ndash; and the customers, users, etc. have to stay timely updated and accept all the changes unconditionally. Only the current content and process of the website will be considered valid.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;By accessing our website, you affirm your age as 18 years or more. If you&rsquo;re someone below 18 years, we advise you not to access our website or the services</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;Any processes regarding the loan might get delayed due to public holidays, technical problems/software issues, etc.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;In case the update email/message regarding the processes of loan is not received by the customer due to a delay because of technical problems, software issues, or any other issue &ndash; they can call on the company&rsquo;s customer care between 10 AM to 5 PM (Monday to Saturday &ndash; only business days).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;In case the user, customer, any other person, or organization has a query/problem/issue or wants to raise a dispute with the company &ndash; they can either raise a request ticket or call on the company&rsquo;s customer care number between 10 AM to 5 PM (Monday to Saturday &ndash; only business days).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Due to a software/system issue, it might happen that the dates mentioned in the Loan Status are late by 3-4 days.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">To get the TDS Return, the reference customer has to submit all the details/documents asked in their portal. Note: The TDS Return will be given starting from the financial year in which all the details/documents are submitted. The TDS Return won&rsquo;t be provided for the financial year(s) that are prior to the financial year in which the details/documents were submitted.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The general criteria to apply for a personal loan by a salaried individual are &ndash; Min. Age: 21 years; Min. Salary: Rs.15,000/month (credited in the bank account); Salary Slips available; and Job Stability proof available. Final loan approval completely depends on the customer profile and the bank&rsquo;s rules and criteria.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;The general criteria to apply for a personal loan by a self-employed individual are &ndash; Min. Age: 21 years; IT Returns available (min. 1 year); Business Stability proof available; and Current Account in a bank. Final loan approval completely depends on the customer profile and the bank&rsquo;s rules and criteria.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The general criteria to apply for a business loan by a small business person are &ndash; Min. Age: 21 years; IT Returns available (min. 1 year); and Business Stability proof available (min. 1 year). Final loan approval completely depends on the customer profile and the bank&rsquo;s rules and criteria.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The general criteria to apply for a business loan by an audited report business person are &ndash; Min. Age: 21 years; Min. Rs.1 Crore+ Yearly Turnover; and Min. 2 Years Audited Report. Final loan approval completely depends on the customer profile and the bank&rsquo;s rules and criteria.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;The eligible age for buying a Subscription is 18 - 62 years. The persons in this age bracket can avail benefits of the Subscription offered by the company. The company only offers Subscription and provides its benefits to the customers. The final loan approval depends on the customer profile and the bank&rsquo;s rules and criteria.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">For the Reference Customers who have given customer referrals to the company, it would be compulsory for them to submit their Payout Documents to the company within 30 days. If not submitted, all the payouts of the Reference Customers will be automatically cancelled. To get the cancelled payout, you can contact the company and discuss it.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;Any information/flow/system regarding our website shown in the videos posted on social media (or any platform) may be inaccurate, outdated, or different from our actual website. Only the most updated version of the website, terms &amp; conditions, and other policies shall be valid.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The banks&rsquo; logos used in our ads, social media posts, blogs, emails, or any other medium is for promotional purposes only. The process will be done in that bank only under whose criteria the customer profile gets matched. The final loan approval and final loan process completely depend on the customer profile and the bank&rsquo;s criteria and rules and regulations.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The banks&rsquo; logos shown on our website and the pre-approved offer displayed on our website are tentative only. The process will be done in that bank only under whose criteria the customer profile gets matched. The final loan approval and final loan process completely depend on the customer profile and the bank&rsquo;s criteria and rules and regulations.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">By purchasing the company&rsquo;s Subscription, the customer is applying to get the company&rsquo;s services. All the benefits of the Subscription will be given to the customer by the company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If any customer data &amp; information, KYC documents, or OTP is misused in future by any third-party, our company and its directors, employees, or any individuals associated with the company cannot be held responsible for the same in any matter whatsoever including any loss, harm, or damage due to the usage of information from the portal. Customers are advised to bring in their own discretion in such matters. The information provided on the website is of financial nature. It is a mutual understanding that customers association with the website will be at the customer&#39;s will, preference and risk.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If any customer&rsquo;s documents are found to be fraud by the bank/financial institution or there&rsquo;s any sort of an issue with any customer&rsquo;s repayment of the loan to the banks/financial institution &ndash; then these matters have to be solely between the customer and the bank/financial institution. Our company and its directors, employees, or any other individual associated with the company cannot be held responsible in such cases. If the customer documents are found to be fake and fraud and are used anywhere for any purpose, the company cannot be held responsible for the same.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If any third-party gets a loan approved on someone else&rsquo;s identity and documents, then our company and its directors, employees, or any other individual associated with the company cannot be held responsible.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If any of the company&rsquo;s customers or any third-party wants a legal course, action and proceedings with the company, then only the company&rsquo;s legal team can be involved. There will absolutely be no involvement of the company&rsquo;s directors, any other individual associated with the company, or employees in any legal proceeding. For any legal action or proceeding involving our company, Surat, Gujarat shall remain the only jurisdiction.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">TDS will be given only to the ones whose referral payout has been generated. If your TDS is deducted, you can contact your CA. If your TDS has been deducted and it&rsquo;s not showing, then you can contact the company&rsquo;s customer care number between 10 AM to 5 PM &ndash; Monday to Saturday (only business days).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If any person enters incorrect information and starts the loan process on our website, and if this leads to any sort of fraud in future, the company, its directors, employees, any other individual associated with the company cannot be held responsible for the same.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The pre-approved loan offers shown are from those banks/NBFCs that have eligibility criteria to which the customer&rsquo;s profile matches (profile evaluated as per the information entered by the customer). These pre-approved loan offers are tentative only &ndash; the final loan approval, loan sanction, and disbursement depend on the NBFC(s) and their rules and regulations. The company will only log in the customer&rsquo;s file in those NBFCs with which the company has tie-ups/partnerships/collaborations and where the customer&rsquo;s profile matches the NBFC eligibility criteria.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Our company&rsquo;s services are strictly for the residents of India only &ndash; not for the non-residents. If any non-resident purchases our Subscription, they can request for a refund as per the company&rsquo;s Cancellation &amp; Refund Policy.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">In case a customer has mistakenly made more than a single payment, the customer will be eligible to get a refund. The customer will have to request a refund within 48 hours of the payment through the Raising A Request section of the website or by calling on the company&rsquo;s registered contact number.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">In case a customer has bought Subscriptions from multiple companies that belong to our group of companies, the customer will be eligible to get a refund. The customer will have to request a refund within 48 hours of the payment through the Raising A Request section of the website or by calling on the company&rsquo;s registered contact number.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">As we provide digital services only, shipping policy or service is not applicable to our company and business.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Company Branding name is rupaycredit and register Name is ONEPRO FINANCE SOLUTIONS PRIVATE LIMITED.</p>\r\n	</li>\r\n</ol>\r\n\r\n<h3 dir=\"ltr\"><strong>PRE-APPROVAL LOAN OFFER TERMS AND CONDITIONS:</strong></h3>\r\n\r\n<p dir=\"ltr\">The Pre-Approved Loan Offer and the amount mentioned in it are solely shown based on the software calculation done on Monthly Income and Current Monthly EMI entered by the person. This &quot;Pre-Approved Loan Offer&quot; is tentative and not the final loan approval (this is already mentioned on the Pre-Approved loan Offer page) &ndash; as the final loan approval is given by the bank only; based on the bank&rsquo;s rules and regulations and the customer profile. And this is clearly stated in the company&rsquo;s Terms &amp; Conditions which is agreed by the person before registration.</p>\r\n\r\n<p dir=\"ltr\">Here&#39;s an example to know how the &lsquo;Pre-Approved Loan Offer&rsquo; is shown: Consider that a person (named &lsquo;John&rsquo;) enters the following details in our website:<br />\r\nMonthly Income: Rs.1,00,000<br />\r\nCurrent Monthly EMI: Rs.30,000</p>\r\n\r\n<p dir=\"ltr\">Based on these details, John is left with Rs.70,000 in hand (deducting current EMI) every month. So, according to the general rules of the banks, the EMI of 50% of the in-hand amount can be approved. So, the loan amount that allows a maximum of Rs.35,000 (70,000/2) EMI can be approved. And based on the EMI and rate of interest (11% tentatively), the eligible amount is shown in the Pre-Approved Loan Offer. And based on this Rs.1903/lakh EMI is shown.</p>\r\n\r\n<p dir=\"ltr\"><strong>CANDIDATE TERMS AND CONDITIONS</strong></p>\r\n\r\n<ol>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The interview time is fixed.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The interview can&#39;t be taken any other time than the time decided by the company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;The Company can ask any questions in the interview.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The candidate will have to appear for the interview as many times as the company asks.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">A resume (Xerox) will be mandatory for the interview. The resume will not be returned.&nbsp; There will be no misuse of the resume.</p>\r\n	</li>\r\n</ol>\r\n\r\n<h3 dir=\"ltr\"><strong>USAGE OF COOKIES / COOKIES POLICY</strong></h3>\r\n\r\n<p dir=\"ltr\">Cookies are small files that a site or its service provider transfers to your computer&#39;s hard drive through your web browser with your permission which enables the site or service provider&#39;s systems to recognize your browser and capture and remember certain information. We use cookies to help us understand and save your preferences for future visits, keep track of advertisements and compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.</p>\r\n\r\n<p dir=\"ltr\">The user, customer, or any other person accessing our website clearly expresses and agrees that they have fully read and understood the Terms &amp; Conditions and Privacy Policy of Rupay Credit &ndash; and they accept them unconditionally.</p>\r\n\r\n<ol dir=\"ltr\">\r\n</ol>\r\n'),
(27, '2024-10-22 17:25:36', 'welcome-status', '1'),
(28, '2025-03-15 09:28:32', 'welcome-message', '');
INSERT INTO `site_options` (`id`, `rec_date`, `option_key`, `option_value`) VALUES
(29, '2024-06-12 18:13:18', 'disclaimer', '<p>Rupay Credit and its customers and employees use and present www.rupaycredit.com&nbsp;(the &ldquo;Website&rdquo;) for personal and informational purposes only. In addition, we further expressly disclaim any warranties or representations (expressed or implied) in respect of quality, suitability, accuracy, reliability, completeness, timeliness, performance for a particular purpose or legality of the services listed or displayed or transacted or the content on the website. You must not perceive and construe any such information or other material as legal, tax, investment, financial, or other advice. You completely acknowledge and undertake that you are accessing the services on the Rupay Credit website and transacting at your own risk only and are using your best and prudent judgement before entering into and making any transactions through the website. You alone assume the sole responsibility of evaluating the merits and risks associated with the use of any information or other Content contained on the Rupay Credit Website before making any decisions based on such information or other Content.</p>\r\n\r\n<p>Nothing contained on our Website constitutes a solicitation, recommendation, endorsement, or offer by Rupay Credit to buy or sell any securities or other financial instruments in this or in any other jurisdiction in which such solicitation or offer would be unlawful under the securities laws of such jurisdiction. You further acknowledge that at no time shall any right, title or interest in the services sold through or displayed on the website vest with Rupay Credit nor shall Rupay Credit have any obligations or liabilities in respect of any transactions on the website.</p>\r\n\r\n<p>After you enter your details on our website for any purpose, the company takes no responsibility in case you come across instances of data misusage of any form.</p>\r\n'),
(30, '2025-04-19 20:04:33', 'facebookpixel', '871947101003923'),
(31, '2024-06-29 14:45:28', 'facebookdomain', '8kbldfwszo0lp18hdqsaj425sig1f8'),
(32, '2025-03-15 09:28:26', 'account-msg-customer', ''),
(33, '2021-07-25 07:52:52', 'account-msg-channel', ''),
(34, '2025-05-23 08:22:49', 'newinvoiceno', '9264'),
(35, '2025-02-14 15:20:32', 'refund-policy', '<p dir=\"ltr\"><strong>What are the criteria for our customers to Request a Refund?</strong></p>\r\n\r\n<ol dir=\"ltr\">\r\n	<li>A customer can be eligible for a refund if an email requesting a refund is sent by the customer (with the registered email id) to info@rupaycredit.com&nbsp;within 48 hours of purchasing the Subscription plan. The payment mode for the refund will be the same as the mode through which the customer&#39;s payment was received. As per the banks, the refund can be received within 7 to 8 working days.<br />\r\n	&nbsp;</li>\r\n	<li>If the customer is unable to communicate with the company in English, Hindi, or Gujarati, they can apply for a refund within 48 hours of purchasing the Subscription plan.<br />\r\n	&nbsp;</li>\r\n	<li>There are certain areas/locations in which our company does not provide its services. If any customer has bought our Subscription plan and belongs to such areas/locations, they can apply for a refund within 48 hours of purchasing the Subscription plan.</li>\r\n</ol>\r\n\r\n<p>If you have any query/doubt regarding our policy, please contact us by writing at info@rupaycredit.com&nbsp;or calling on 086453-22449&nbsp;between 10 AM to 5 PM (business days only). &nbsp;</p>\r\n'),
(36, '2024-04-29 14:05:58', 'customer-legal-agreement', '<h3>CUSTOMER TERMS AND CONDITIONS</h3>\r\n\r\n<ol>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The payment of Subscription fees is refundable only in accordance with the company&#39;s Cancellation &amp; Refund Policy.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company only takes the cost of the Subscription. No other tip of service is charged.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Customers can use the Subscription only for loan purposes with given benefits. Also, buying a Subscription lets you apply for a loan and it doesn&rsquo;t guarantee loan approval as the final loan approval depends on the banks and the customer profile. If the loan is rejected, you can still avail other benefits of the Subscription.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If a customer is viewing any advertisement/promotional content of the company and then approaching the company thinking that he/she will get the loan approval based on the advertisement, then it must be noted that a loan application will only be submitted once the customer buys Rupay Credit&rsquo;s Subscription. Even after buying the Subscription, the final loan approval depends on the bank(s) and customer profile. If the customer&rsquo;s profile doesn&rsquo;t match loan eligibility criteria, he/she won&rsquo;t be able to get a loan. Still, they can avail other benefits of the Subscription.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Subscription can be used only by the persons who have purchased it and not by any other person(s), source or third party.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If a customer reference does payment through the customer&#39;s own referral link which is provided by the company and if that shows in the customer&#39;s portal then the only company will give the reference payout of that customer.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If the customer loan is approved in our company and he/she denies that loan approval then also Subscription payment would not be refundable.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The documents, cheques, and OTP that the company&#39;s employee asks the customer are for the processing of the loan only and the company never misuses them. Just for security, after completing the loan process, the customer can go to the concerned bank and cancel their cheque. The company is not responsible if any problems/disputes arise in the future.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If you do not give the OTP, documents, or document query for verification to the company&#39;s employee for the loan process, then your file will be rejected. (According to the criteria, if your file matches without OTP, your loan will be processed).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If our company&#39;s executive asks you for any payment transaction OTP, do not provide it. If the customer pays any charges other than the charge of the Subscription, the company won&rsquo;t be responsible for the same.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If a customer has any queries regarding the loan process then he/she would have to contact the department where their files are in process.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">We will verify your documents in multiple banks; so whatever documents are submitted by customers in our company that will match with any bank criteria, in that bank only we will proceed with the loan process. For example, if your file will match in 2 banks then our company&#39;s login department will login your document only in that 2 banks. The verification is done by the company&#39;s employee and there is no proof available for the same.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The document will be verified by the company in multiple banks. If your documents match the criteria of the bank, then the login process will be done in that bank. If your documents do not match the criteria of a bank, the company will give you a solution. You can take the solution and reapply after a certain period (as per Subscription) - and this will be shown on the customer portal.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">It is not fixed that the customer file will be logged in only in the banks listed on the company website. It may be logged in/verified in other banks also, depending on the customer file.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Our company is not taking extra charges other than Subscription charges. If any third-party charges you then our company is not responsible for that.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">There are no processing or file charges for customer loan approval. There is only one charge and that&#39;s only for the Subscription - validity as per Subscription.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Our company will log in customer files as per their requirements. (Example: If customer requirement is INR 1 lakh and if some bank criteria is up to INR 50,000 then we will not log in their file in that bank).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Wherever the customer file is logged in by the company, these details will not be given to any customer in written or digital form.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Loan offers and the pre-approval loans process depend only on the bank&#39;s rules and that type of loan is given only on customer behaviour. So, there is so much difference between that type of process and the company&#39;s process. If that loan is rejected in our company but gets approved by another company/source then the customer can&#39;t blame our company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Loan approval depends on your profile so if your documents are perfect and as per the bank criteria then you will get a loan through our company</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The loan information is only given to the person who has applied for the loan.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">During the loan processing time, if any customer would not be in contact with us for 3 days, then that file will be rejected by our company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If your file is rejected in our company, then the customer has to make sure that they have to re-submit their documents, with the implemented company-suggested solution, in our company after a certain period (as per Subscription).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company is not responsible if the customer loan is rejected by any queries.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If the customer will apply for the first time but his/her loan is rejected in our company then the company will give them a reason and solution for that. So at re-applying time if the customer will not resubmit a file with the solution implemented then the file will be again rejected in our company for the same reason. Still, the final loan approval will depend on the customer profile and the bank&#39;s criteria and rules &amp; regulations.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company will provide only the reason for rejection to the customer and it would not be provided in the form of hard or soft copy - it will only be shown in the customer portal. Some banks only provide general reasons, they don&#39;t give us any specific reason so the customer should not complain about that.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The customer has to give correct information about their CIBIL SCORE and PROFILE. If the customer gives wrong information, then the company will not be responsible for loan rejection.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company will not be providing any CIBIL REPORT in digital or hard copy to any customer in any situation.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Bank charges are applicable as per banks&#39; rules and regulations.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company will take legal action against the customer who submitted fake documents. And the company won&rsquo;t take any responsibility for the loan process in this case.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">After the customer&rsquo;s file is logged in, the customer has to contact only the login department and coordinate with them &ndash; not any telecaller or other department of the company. The further process has to be done according to the login department.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">During the loan process if the rules of any bank change, then we have to follow those new rules.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The customer has to give their registered phone number for being contacted by the login department.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">During the loan processing time, if the company gets any queries and it is not solving that in the given time, then the company has the authority to take more time to address the query. So, the customer must not complain about the same.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If the customer wants to reapply in our company after file rejection or approval, then he/she has to re-submit their documents in the customer portal.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">When you are applying for a loan on our website, we are showing you only your Eligibility for the loan. So whatever details you enter on the website are accepted by software only, and that only shows your pre-approval and not your final loan approval. Approval only depends on your documents and the banks&#39; rules and regulations. We are not giving you any guarantee for the final loan approval.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">All the detailed criteria, terms, and information behind any of the company&rsquo;s concise promotional content (social media ads, banners, SMS, advertisements, emails, etc.) are stated in the Terms &amp; Conditions and Privacy Policy sections of the website. Any concerned person (customer, employee, etc.) must check and accept all the rules and regulations before availing any of the company&rsquo;s services. If any person has confusion, they can call on the company&rsquo;s customer care number to gain clarity before availing company&rsquo;s services.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The customer&#39;s payment is executed by third-party payment sources. So whenever payment would be received by the company then only a Subscription will be activated for the customer. If a customer&#39;s payment would be debited from his/her account but we don&#39;t receive any payment in the company&#39;s account then the company will not be responsible for that.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">For any reference customer&#39;s payout, their account verification is compulsory. After verification, if the payout amount is debited from the company&rsquo;s account and if it does not credit/reflect in the reference customer&rsquo;s account &ndash; the company won&rsquo;t be responsible for this issue.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Our company is a private limited company and we are tied up with banks and corporate DSA. We are providing loans through banks only.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Multiple partnered banks&#39; logos are shown on our website and our promotional content across many mediums &ndash; these are shown only for our company&#39;s marketing purpose. It might be possible that certain banks, whose logos are shown on our website/promotional content, are not partnered with our company. Also, these should not be assumed as any bank&#39;s advertisement.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If anyone takes any legal action against the company then only our legal advisor would be dealing with that and Surat, Gujarat will only remain the junction for any legal procedure. No one would be able to contact any employee or director of our company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If any person has a doubt/question regarding any of the company&rsquo;s terms and conditions, they can contact the company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The eligibility age for buying a Subscription is 18 - 62 years. The persons in this age bracket can avail benefits of the Subscription.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">For the Reference Customers who have given customer referrals to the company, it would be compulsory for them to submit their Payout Documents to the company within 30 days. If not submitted, all the payouts of the Reference Customer will be automatically cancelled. To get the cancelled payout, you can contact the company and discuss it.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Every reference payout will have a deduction of 5% TDS.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">For the loan process, the company will only coordinate with the person who has purchased the Subscription and has an ongoing loan process &ndash; the company won&rsquo;t coordinate with any third party.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Every bank payout will have tax deductions as per the bank&rsquo;s rules and regulations.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The Company&#39;s authorized person can change any rules and regulations at any time; the concerned person must be regularly updated with the company&rsquo;s terms and conditions and has to accept them unconditionally.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company will provide the appropriate loan services but the responsibility of customer handling will be of the reference customer.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If any bank&#39;s rules or company&#39;s rules are changing during the processing time of the loan then the customer has to follow those new rules.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The office holidays and bank holidays will not be counted as working days/business days. The company&rsquo;s office work will be done on working days only.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Our promotional content may communicate messages like &#39;Get Personal Loan in 30 mins&#39; or &#39;Get Rs.5,00,000 in 5 mins&#39; on our company&rsquo;s social media, blogs/articles, ads, websites, emails, SMS, or any other medium &ndash; it must be carefully noted that these messages are only meant for marketing and promotional purposes. All the numerical values that depict time/number of steps/number of clicks &ndash; are for marketing and promotional purposes only. The final loan approval and process depend on the customer profile and the bank/NBFCs&rsquo; rules, regulations and criteria. If you have any sort of doubt before starting the process, you can call our customer care number (10 am to 5 pm &ndash; Monday to Saturday).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">As per the details/information entered by the user, even if the actual pre-approved amount is lesser than 2 Lakhs, the pre-approved amount shown on the website will be Rs.2 Lakhs (minimum). And, even if the actual pre-approved amount is more than 8.5 Lakhs, the pre-approved amount shown on the website will be Rs.8.5 Lakhs (maximum). The pre-approved amount/pre-approved loan offers are tentative &ndash; the final loan approval, loan sanction, and disbursement depend on the customer profile and the NBFCs&rsquo; rules and regulations.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The first login of the customer&rsquo;s file will be handled and executed by the company. To avail the reapplying option, the customer will have to perform the self-login(s).</p>\r\n	</li>\r\n</ol>\r\n\r\n<p dir=\"ltr\">The Customer clearly expresses and agrees that they have fully read and understood the Terms &amp; Conditions mentioned in this Agreement &ndash; and they accept them unconditionally.</p>\r\n'),
(37, '2023-02-18 17:52:56', 'channel-legal-agreement', '<h3>CHANNEL TERMS AND CONDITIONS</h3>'),
(38, '2024-12-17 10:17:12', 'smssenderid', 'RUPCDT'),
(39, '2025-04-08 17:37:18', 'pl-remarketing-sms', 'Update: Your Personal L0AN Offer of Rs.<#cronamount>\r\n-Ready for credit in 15Min\r\n-Not Cibil Required\r\nApply https://rupaycredit.com/onlineprocess/applynow Rupaycredit'),
(40, '2025-04-08 17:37:10', 'bl-remarketing-sms', 'Update: Your Personal L0AN Offer of Rs.<#cronamount>\r\n-Ready for credit in 15Min\r\n-Not Cibil Required\r\nApply https://rupaycredit.com/onlineprocess/applynow Rupaycredit'),
(41, '2025-02-28 13:57:53', 'pl-process-sms', ''),
(42, '2025-02-28 13:57:36', 'bl-process-sms', ''),
(43, '2024-10-07 12:42:03', 'pl-offer-sms', 'Update: Your Personal L0AN Offer of Rs.<#preamount> is ready for credit in 15 Min. Apply Now https://rupaycredit.com/onlineprocess/applynow Rupaycredit'),
(44, '2024-10-07 14:31:58', 'bl-offer-sms', 'Update: Your Personal L0AN Offer of Rs.<#preamount> is ready for credit in 15 Min. Apply Now https://rupaycredit.com/onlineprocess/applynow Rupaycredit'),
(45, '2024-06-21 10:43:45', 'account-sms', 'Dear Customer, Congratulations! Your loan application has been successfully submitted. Please check your registered email id and login to the Customer Portal to submit the required documents. Thanks, Rupaycredit\r\n'),
(46, '2022-02-01 14:07:12', 'cp-account-sms', 'Congrats! Your Partner Application is successfully submitted. Kindly check your Registered Email and login into the Channel Partner Portal. Please submit the required documents for account activation. Our Company Executive will be in touch soon. Regards, KreditBea'),
(47, '2022-03-25 12:05:49', 'cp-offer-sms', ''),
(48, '2024-10-29 12:28:46', 'payment-fail-sms', 'Sorry, your payment for Rupaycredit subscription was not successful. Try Another Payment Method here https://rupaycredit.com/specialoffer Rupaycredit'),
(49, '2025-04-19 20:06:08', 'fbaccesstokendigital', 'EAAOIAzLMnTsBOZBLkZCJLSZATDgev0EyfFBRB8V1jsekxBV7bT7pOUrVgJcpO6J3NvwiZAZAHpmGrvO7I5YrCA9tOojlmFYPslOwuQGJz7sT9ILrY6ZC3ZC3Sl2Fe79ww5IWZATn2WAJgGIOC5wEjoYcVYXZB3Y1VkmqmAM23eWkkZARbZCZCwdSovSKWSMwzZC9SvfTEcQZDZD'),
(50, '2024-08-13 11:26:19', 'fbeventnamedigital', 'Purchase'),
(51, '2025-04-19 20:05:09', 'fbeventiddigital', '1381830919461048'),
(52, '2023-11-03 10:53:46', 'fbaccesstokenpartner', 'fbaccesstokenpartner'),
(53, '2023-11-03 10:53:58', 'fbeventnamepartner', 'fbeventnamepartner'),
(54, '2023-11-03 10:53:58', 'fbeventidpartner', 'fbeventidpartner'),
(55, '2025-05-14 15:26:09', 'wpcampaignmain', '14may_auto'),
(56, '2025-05-14 15:26:11', 'wpcampaignoffer', '14may_get'),
(57, '2024-06-21 10:23:16', 'wpcampaignsuccess', '#'),
(58, '2025-03-29 17:43:18', 'intekt_get_offer_name', '#'),
(59, '2025-04-02 12:03:49', 'intekt_rm_offer_name', '#'),
(60, '2024-11-09 15:41:25', 'intkt_userwelcomename', 'cred_4sep'),
(61, '2024-10-30 19:13:35', 'intkt_payment_success', '#');

-- --------------------------------------------------------

--
-- Table structure for table `sms_list`
--

DROP TABLE IF EXISTS `sms_list`;
CREATE TABLE IF NOT EXISTS `sms_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `portal` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `module` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `message` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `isActive` tinyint NOT NULL DEFAULT '1' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sms_log`
--

DROP TABLE IF EXISTS `sms_log`;
CREATE TABLE IF NOT EXISTS `sms_log` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `crontype` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'company',
  `parentid` int NOT NULL DEFAULT '1',
  `cronname` varchar(256) COLLATE utf8mb3_unicode_ci NOT NULL,
  `msgcount` int NOT NULL,
  `msgresponse` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subpaisa_entry`
--

DROP TABLE IF EXISTS `subpaisa_entry`;
CREATE TABLE IF NOT EXISTS `subpaisa_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryfor` int NOT NULL DEFAULT '0' COMMENT '1=Customer, 2=Channel, 11=Digital PL, 12=Digital BL',
  `userid` int NOT NULL,
  `orderid` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `referenceid` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `txstatus` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `paymentmode` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_order`
--

DROP TABLE IF EXISTS `subscription_order`;
CREATE TABLE IF NOT EXISTS `subscription_order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int NOT NULL,
  `productid` int NOT NULL DEFAULT '0',
  `packageid` int NOT NULL DEFAULT '0',
  `registration_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `card_number` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `amount` float(11,2) NOT NULL,
  `paymentid` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `isActive` int NOT NULL DEFAULT '1',
  `isDelete` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_request`
--

DROP TABLE IF EXISTS `support_request`;
CREATE TABLE IF NOT EXISTS `support_request` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL,
  `ticketno` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `usertype` tinyint NOT NULL COMMENT '1=CUSTOMER, 0=GUEST',
  `fullname` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `emailid` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `cardnumber` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `issuetype` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `message` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '0=No, 1=Yes',
  `server_ip` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `isDelete` tinyint NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_request_chat`
--

DROP TABLE IF EXISTS `support_request_chat`;
CREATE TABLE IF NOT EXISTS `support_request_chat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `requestid` int NOT NULL,
  `remarks` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `staffid` int NOT NULL,
  `isDelete` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `reviewpage` int NOT NULL DEFAULT '1' COMMENT '1=Site,2=Customer, 3=Partner',
  `fullname` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `ratings` float(11,2) NOT NULL DEFAULT '0.00',
  `photo` varchar(256) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'placeholder.jpg',
  `reviews` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unsubscription_logs`
--

DROP TABLE IF EXISTS `unsubscription_logs`;
CREATE TABLE IF NOT EXISTS `unsubscription_logs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int NOT NULL,
  `user_type` int NOT NULL COMMENT '1=PL, 2=BL, 3=Channel',
  `mobile_no` varchar(55) COLLATE utf8mb4_general_ci NOT NULL,
  `reason` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_application`
--

DROP TABLE IF EXISTS `user_application`;
CREATE TABLE IF NOT EXISTS `user_application` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int NOT NULL,
  `loantype` int NOT NULL,
  `loanamount` bigint NOT NULL,
  `cibilscore` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `loanpurpose` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `income` bigint NOT NULL,
  `currentemi` int NOT NULL,
  `emibounce` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `loantenure` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '1=New, 2=Approve, 3=Reject',
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_application`
--

INSERT INTO `user_application` (`id`, `rec_date`, `userid`, `loantype`, `loanamount`, `cibilscore`, `loanpurpose`, `income`, `currentemi`, `emibounce`, `loantenure`, `status`, `isDelete`) VALUES
(1, '2026-09-22 16:14:00', 1, 11, 0, '', '', 0, 0, 0, NULL, 1, 0),
(2, '2026-09-22 17:27:16', 2, 11, 630000, '', '', 0, 0, 0, NULL, 1, 0),
(3, '2026-09-23 11:30:25', 3, 11, 470000, '650 - 700', 'Personal Use', 35000, 1000, 0, 24, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_application_status`
--

DROP TABLE IF EXISTS `user_application_status`;
CREATE TABLE IF NOT EXISTS `user_application_status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `applicationid` int NOT NULL,
  `statusid` int NOT NULL,
  `statusdate` date DEFAULT NULL,
  `bankid` int NOT NULL,
  `loanamount` int NOT NULL,
  `loanroi` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `loanterms` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `processfees` int NOT NULL,
  `insurance` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `monthlyemi` int NOT NULL,
  `remarks` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `sanction_letter` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `staffid` int NOT NULL,
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_documents`
--

DROP TABLE IF EXISTS `user_documents`;
CREATE TABLE IF NOT EXISTS `user_documents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int NOT NULL,
  `profilephoto` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aadharcard` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aadharcard_number` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pancard` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pancard_number` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cancelcheque` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lightbill` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bankstatement` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `formsixteen` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `salaryslip` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `businessproof` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `itreturn` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remarks` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `isVerified` tinyint NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_payout_documents`
--

DROP TABLE IF EXISTS `user_payout_documents`;
CREATE TABLE IF NOT EXISTS `user_payout_documents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int NOT NULL,
  `gstdoc` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gstdoc_number` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aadharcard` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aadharcard_number` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pancard` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pancard_number` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cancelcheque` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remarks` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `isVerified` tinyint NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

DROP TABLE IF EXISTS `user_registration`;
CREATE TABLE IF NOT EXISTS `user_registration` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fullname` varchar(256) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'noname',
  `mobile` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `state` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `usertype` int NOT NULL,
  `cardtype` int DEFAULT NULL,
  `refcode` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gstno` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `process_step` int NOT NULL DEFAULT '1',
  `isUser` int NOT NULL DEFAULT '0' COMMENT '0=None, 1=Steps, 2=Register',
  `isDnd` tinyint NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `iAgree` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `isActive` int NOT NULL DEFAULT '1' COMMENT '0=No, 1=Yes',
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `rec_date`, `update_date`, `fullname`, `mobile`, `email`, `password`, `city`, `state`, `usertype`, `cardtype`, `refcode`, `gstno`, `process_step`, `isUser`, `isDnd`, `iAgree`, `isActive`, `isDelete`) VALUES
(1, '2026-09-22 16:14:00', '2026-09-22 17:22:18', 'test', '9650000001', 'test@g.com', '', '', NULL, 1, 11, NULL, NULL, 1, 1, 0, 0, 1, 0),
(2, '2026-09-22 17:27:16', '2026-09-22 17:27:16', 'admin', '9756000000', 'bimalverloop@gmail.com', '', '', NULL, 1, 11, NULL, NULL, 1, 1, 0, 0, 1, 0),
(3, '2026-09-23 10:11:20', '2026-09-23 11:30:25', 'test', '9999900000', 'test@g.com', '', 'surat', 'Gujarat', 1, 11, NULL, NULL, 3, 1, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_tree`
--

DROP TABLE IF EXISTS `user_tree`;
CREATE TABLE IF NOT EXISTS `user_tree` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `refferaltype` int NOT NULL DEFAULT '1' COMMENT '1=Customer, 2=Channel',
  `refferaluserid` int NOT NULL,
  `subuserid` int NOT NULL,
  `payout` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `payout_date` date DEFAULT NULL,
  `payout_amount` float(11,2) NOT NULL,
  `order_amount` float(11,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `worldline_entry`
--

DROP TABLE IF EXISTS `worldline_entry`;
CREATE TABLE IF NOT EXISTS `worldline_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `productid` int DEFAULT NULL,
  `packageid` int DEFAULT NULL,
  `userid` int NOT NULL,
  `orderid` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `referenceid` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `txstatus` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `paymentmode` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zaakpay_entry`
--

DROP TABLE IF EXISTS `zaakpay_entry`;
CREATE TABLE IF NOT EXISTS `zaakpay_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryfor` int NOT NULL DEFAULT '0' COMMENT '1=Customer, 2=Channel, 11=Digital PL, 12=Digital BL',
  `userid` int NOT NULL,
  `orderid` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `statuscode` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `transactionid` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `paymentmode` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
