-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 01, 2019 at 06:53 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsevent`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventtable`
--

DROP TABLE IF EXISTS `eventtable`;
CREATE TABLE IF NOT EXISTS `eventtable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `dob` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `gender` varchar(10) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventtable`
--

INSERT INTO `eventtable` (`id`, `fname`, `lname`, `uname`, `dob`, `gender`, `password`) VALUES
(1, 'Elevation', 'Stephen King', NULL, NULL, NULL, NULL),
(5, 'Baldeo', 'Bhavish', NULL, NULL, NULL, NULL),
(6, '', '', NULL, NULL, NULL, NULL),
(7, 'Baldeo', 'Bhavish', 'Baldeo369', '2019-11-01 18:43:55', NULL, NULL),
(8, 'Baldeo', 'Bhavish', 'Baldeo369', '2019-11-01 18:51:52', 'Male', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
