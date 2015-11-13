-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2015 at 06:43 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `askon`
--

-- --------------------------------------------------------

--
-- Table structure for table `cl`
--

CREATE TABLE IF NOT EXISTS `cl` (
  `cl_id` int(11) NOT NULL AUTO_INCREMENT,
  `container_id` varchar(11) NOT NULL,
  `booking_id` varchar(20) NOT NULL,
  `in_date` date NOT NULL,
  `out_date` date NOT NULL,
  `activity` varchar(50) NOT NULL,
  `haulage` varchar(50) NOT NULL,
  `size_type` varchar(5) NOT NULL,
  `vessel_voyage` varchar(50) NOT NULL,
  PRIMARY KEY (`cl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Truncate table before insert `cl`
--

TRUNCATE TABLE `cl`;
--
-- Dumping data for table `cl`
--

INSERT INTO `cl` (`cl_id`, `container_id`, `booking_id`, `in_date`, `out_date`, `activity`, `haulage`, `size_type`, `vessel_voyage`) VALUES
(1, 'TEST0000001', 'BOOK01020304', '2015-10-15', '2015-10-15', 'SAMPLE', 'SAMPLE', '20GP', 'SAMPLE 00001'),
(2, 'TEST0000001', 'BOOK02030405', '2015-10-15', '2015-10-15', 'SAMPLE', 'SAMPLE', '20GP', 'SAMPLE 00001'),
(3, 'TEST0000001', 'BOOK03040506', '2015-10-15', '2015-10-15', 'SAMPLE', 'SAMPLE', '20GP', 'SAMPLE 00001'),
(4, 'TEST0000001', 'BOOK04050607', '2015-10-15', '2015-10-15', 'SAMPLE', 'SAMPLE', '20GP', 'SAMPLE 00001'),
(5, 'TEST0000002', 'BOOK01020304', '2015-10-15', '2015-10-15', 'SAMPLE', 'SAMPLE', '40GP', 'SAMPLE 00002'),
(6, 'TEST0000002', 'BOOK02030405', '2015-10-15', '2015-10-15', 'SAMPLE', 'SAMPLE', '40GP', 'SAMPLE 00002'),
(7, 'TEST0000002', 'BOOK03040506', '2015-10-15', '2015-10-15', 'SAMPLE', 'SAMPLE', '40GP', 'SAMPLE 00002'),
(8, 'TEST0000002', 'BOOK04050607', '2015-10-15', '2015-10-15', 'SAMPLE', 'SAMPLE', '40GP', 'SAMPLE 00002'),
(9, 'TEST0000003', 'BOOK01020304', '2015-10-15', '2015-10-15', 'SAMPLE', 'SAMPLE', '40RC', 'SAMPLE 00003'),
(10, 'TEST0000003', 'BOOK02030405', '2015-10-15', '2015-10-15', 'SAMPLE', 'SAMPLE', '40RC', 'SAMPLE 00003'),
(11, 'TEST0000003', 'BOOK03040506', '2015-10-15', '2015-10-15', 'SAMPLE', 'SAMPLE', '40RC', 'SAMPLE 00003'),
(12, 'TEST0000003', 'BOOK04050607', '2015-10-15', '2015-10-15', 'SAMPLE', 'SAMPLE', '40RC', 'SAMPLE 00003'),
(13, 'TEST0000004', 'BOOK01020304', '2015-10-15', '2015-10-15', 'SAMPLE', 'SAMPLE', '45HC', 'SAMPLE 00004'),
(14, 'TEST0000004', 'BOOK02030405', '2015-10-15', '2015-10-15', 'SAMPLE', 'SAMPLE', '45HC', 'SAMPLE 00004'),
(15, 'TEST0000004', 'BOOK03040506', '2015-10-15', '2015-10-15', 'SAMPLE', 'SAMPLE', '45HC', 'SAMPLE 00004'),
(16, 'TEST0000004', 'BOOK04050607', '2015-10-15', '2015-10-15', 'SAMPLE', 'SAMPLE', '45HC', 'SAMPLE 00004');

-- --------------------------------------------------------

--
-- Table structure for table `dmin`
--

CREATE TABLE IF NOT EXISTS `dmin` (
  `dmin_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` varchar(11) NOT NULL,
  `consignee` varchar(50) NOT NULL,
  `vessel voyage` varchar(50) NOT NULL,
  `conds` varchar(2) NOT NULL,
  `remarks` text,
  `in_date` date NOT NULL,
  `in_time` time NOT NULL,
  `block` varchar(4) NOT NULL,
  PRIMARY KEY (`dmin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Truncate table before insert `dmin`
--

TRUNCATE TABLE `dmin`;
--
-- Dumping data for table `dmin`
--

INSERT INTO `dmin` (`dmin_id`, `unit_id`, `consignee`, `vessel voyage`, `conds`, `remarks`, `in_date`, `in_time`, `block`) VALUES
(1, 'TEST0000001', 'SAMPLE', 'SAMPLE 00001', 'AV', NULL, '2015-10-15', '10:00:00', 'A1'),
(2, 'TEST0000002', 'SAMPLE', 'SAMPLE 00002', 'DM', 'Remark Sample', '2015-10-15', '10:00:00', 'B2'),
(3, 'TEST0000003', 'SAMPLE', 'SAMPLE 00003', 'AV', NULL, '2015-10-15', '10:00:00', 'A1'),
(4, 'TEST0000004', 'SAMPLE', 'SAMPLE 00004', 'DM', 'Longer Remarks: Remarks 1, Remarks 2, Remarks 3, Remarks 4, Remarks 5, Remarks 6, Remarks 7, Remarks 8, Remarks 9, Remarks 10', '2015-10-15', '10:00:00', 'B2');

-- --------------------------------------------------------

--
-- Table structure for table `dmout`
--

CREATE TABLE IF NOT EXISTS `dmout` (
  `dmout_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` varchar(11) NOT NULL,
  `consignee` varchar(50) NOT NULL,
  `vessel voyage` varchar(50) NOT NULL,
  `conds` varchar(2) NOT NULL,
  `remarks` text,
  `out_date` date NOT NULL,
  `out_time` time NOT NULL,
  `block` varchar(4) NOT NULL,
  PRIMARY KEY (`dmout_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Truncate table before insert `dmout`
--

TRUNCATE TABLE `dmout`;
--
-- Dumping data for table `dmout`
--

INSERT INTO `dmout` (`dmout_id`, `unit_id`, `consignee`, `vessel voyage`, `conds`, `remarks`, `out_date`, `out_time`, `block`) VALUES
(1, 'TEST0000001', 'SAMPLE', 'SAMPLE 00001', 'AV', NULL, '2015-10-15', '10:00:00', 'A1'),
(2, 'TEST0000002', 'SAMPLE', 'SAMPLE 00002', 'DM', 'Remark Sample', '2015-10-15', '10:00:00', 'B2'),
(3, 'TEST0000003', 'SAMPLE', 'SAMPLE 00003', 'AV', NULL, '2015-10-15', '10:00:00', 'A1'),
(4, 'TEST0000004', 'SAMPLE', 'SAMPLE 00004', 'DM', 'Longer Remarks: Remarks 1, Remarks 2, Remarks 3, Remarks 4, Remarks 5, Remarks 6, Remarks 7, Remarks 8, Remarks 9, Remarks 10', '2015-10-15', '10:00:00', 'B2');

-- --------------------------------------------------------

--
-- Table structure for table `ds`
--

CREATE TABLE IF NOT EXISTS `ds` (
  `ds_id` int(11) NOT NULL AUTO_INCREMENT,
  `container_id` varchar(11) NOT NULL,
  `in_date` date NOT NULL,
  `in_time` time NOT NULL,
  `conds` varchar(2) NOT NULL,
  `aging` int(4) NOT NULL,
  `haulage` varchar(50) NOT NULL,
  `bookout_id` varchar(20) NOT NULL,
  PRIMARY KEY (`ds_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Truncate table before insert `ds`
--

TRUNCATE TABLE `ds`;
--
-- Dumping data for table `ds`
--

INSERT INTO `ds` (`ds_id`, `container_id`, `in_date`, `in_time`, `conds`, `aging`, `haulage`, `bookout_id`) VALUES
(1, 'TEST0000001', '2015-10-15', '10:00:00', 'AV', 256, 'SAMPLE', 'BOOK01020304'),
(2, 'TEST0000002', '2015-10-15', '10:00:00', 'DM', 256, 'SAMPLE', 'BOOK02030405'),
(3, 'TEST0000003', '2015-10-15', '10:00:00', 'AV', 256, 'SAMPLE', 'BOOK03040506'),
(4, 'TEST0000004', '2015-10-15', '10:00:00', 'DM', 256, 'SAMPLE', 'BOOK04050607');

-- --------------------------------------------------------

--
-- Table structure for table `errors`
--

CREATE TABLE IF NOT EXISTS `errors` (
  `err_code` int(4) NOT NULL,
  `err_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`err_code`),
  UNIQUE KEY `err_code` (`err_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `errors`
--

TRUNCATE TABLE `errors`;
--
-- Dumping data for table `errors`
--

INSERT INTO `errors` (`err_code`, `err_desc`) VALUES
(0, NULL),
(100, 'Continue'),
(101, 'Switching Protocols'),
(200, 'OK'),
(201, 'Created'),
(202, 'Accepted'),
(203, 'Non-Authoritative Information'),
(204, 'No Content'),
(205, 'Reset Content'),
(206, 'Partial Content'),
(300, 'Multiple Choices'),
(301, 'Moved Permanently'),
(302, 'Found'),
(303, 'See Other'),
(304, 'Not Modified'),
(305, 'Use Proxy'),
(306, NULL),
(307, 'Temporary Redirect'),
(400, 'Bad Request'),
(401, 'Unauthorized'),
(402, 'Payment Required'),
(403, 'Forbidden'),
(404, 'Not Found'),
(405, 'Method Not Allowed'),
(406, 'Not Acceptable'),
(407, 'Proxy Authentication Required'),
(408, 'Request Timeout'),
(409, 'Conflict'),
(410, 'Gone'),
(411, 'Length Required'),
(412, 'Precondition Failed'),
(413, 'Request Entity Too Large'),
(414, 'Request-URI Too Long'),
(415, 'Unsupported Media Type'),
(416, 'Requested Range Not Satisfiable'),
(417, 'Expectation Failed'),
(500, 'Internal Server Error'),
(501, 'Not Implemented'),
(502, 'Bad Gateway'),
(503, 'Service Unavailable'),
(504, 'Gateway Timeout'),
(505, 'HTTP Version Not Supported'),
(1001, 'Login Failed: Wrong username or password'),
(1002, 'Login Successful'),
(1003, 'Logout Successful');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_code` varchar(11) NOT NULL,
  `menu_desc` varchar(50) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Truncate table before insert `menu`
--

TRUNCATE TABLE `menu`;
--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_code`, `menu_desc`) VALUES
(1, 'dmin', 'Daily Movement: IN'),
(2, 'dmout', 'Daily Movement: OUT'),
(3, 'ds', 'Daily Stock'),
(4, 'sc', 'Seal Collection'),
(5, 'cl', 'Container Log');

-- --------------------------------------------------------

--
-- Table structure for table `sc`
--

CREATE TABLE IF NOT EXISTS `sc` (
  `sc_id` int(11) NOT NULL AUTO_INCREMENT,
  `seal_id` varchar(15) NOT NULL,
  `booking_id` varchar(20) NOT NULL,
  `container_id` varchar(11) NOT NULL,
  `size_type` varchar(5) NOT NULL,
  `out_date` date NOT NULL,
  `out_time` time NOT NULL,
  PRIMARY KEY (`sc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Truncate table before insert `sc`
--

TRUNCATE TABLE `sc`;
--
-- Dumping data for table `sc`
--

INSERT INTO `sc` (`sc_id`, `seal_id`, `booking_id`, `container_id`, `size_type`, `out_date`, `out_time`) VALUES
(1, 'S123456789', 'BOOK01020304', 'TEST0000001', '20GP', '2015-10-15', '10:00:00'),
(2, 'S987654321', 'BOOK02030405', 'TEST0000002', '40GP', '2015-10-15', '10:00:00'),
(3, 'S567891234', 'BOOK03040506', 'TEST0000003', '40RC', '2015-10-15', '10:00:00'),
(4, 'S432198765', 'BOOK04050607', 'TEST0000004', '40HC', '2015-10-15', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(20) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `password_checksum` char(128) NOT NULL,
  `user_privilege` int(1) NOT NULL DEFAULT '4',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_username` (`user_username`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_password`, `password_checksum`, `user_privilege`) VALUES
(1, 'superadmin', '*240107317205B9F031FD583F032790289AE6F185', '964a5502faec7a27f63ab5f7bddbe1bd8a685616a90ffcba633b5ad404569bd8fed4693cc00474a4881f636f3831a3e5a36bda049c568a89cfe54b1285b0c13e', 1),
(2, 'admin', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 2),
(3, 'superuser', '*F5AB3475E4D0309381498567B7C7A270ADED2652', '2cff38a527697f0c8df41a644671718d7d139c9b6d836e126b62677d8b57b1598874b6b0595c10358f59ca4e943d8fd2aa57327db011a421a80ec65945ea210b', 3),
(4, 'user', '*D5D9F81F5542DE067FFF5FF7A4CA4BDD322C578F', 'b14361404c078ffd549c03db443c3fede2f3e534d73f78f77301ed97d4a436a9fd9db05ee8b325c0ad36438b43fec8510c204fc1c1edb21d0941c00e9e2c1ce2', 4),
(5, 'guest', '*11DB58B0DD02E290377535868405F11E4CBEFF58', 'b0e0ec7fa0a89577c9341c16cff870789221b310a02cc465f464789407f83f377a87a97d635cac2666147a8fb5fd27d56dea3d4ceba1fc7d02f422dda6794e3c', 5),
(6, 'blocked', '*5A1413839946EFE71C7731FFAD1E98BC6DC3AFD5', '49cb48cd62b153a8871386c310f66579642c1cd45f4c481291358bbfe11259642d867cf960c82b0492cd13152e7c183a10492130858a7b38f554d90adf44d34f', 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
