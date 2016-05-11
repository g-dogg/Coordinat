-- phpMyAdmin SQL Dump
-- version 3.3.7deb7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2016 at 02:30 PM
-- Server version: 5.1.73
-- PHP Version: 5.4.45-1~dotdeb+6.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coordinat`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `street` varchar(255) NOT NULL,
  `build` tinyint(3) NOT NULL,
  `corp` varchar(3) DEFAULT NULL,
  `longtitude` decimal(8,8) DEFAULT '0.00000000',
  `latitude` decimal(8,8) DEFAULT '0.00000000',
  `zipid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `street` (`street`),
  KEY `zipid` (`zipid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `street`, `build`, `corp`, `longtitude`, `latitude`, `zipid`) VALUES
(1, 'Леинан', 10, '', 0.00000000, 0.00000000, 2),
(2, 'Ленина', 10, '', 0.00000000, 0.00000000, 7),
(3, 'Завертяева', 112, '1', 0.00000000, 0.00000000, 28);

-- --------------------------------------------------------

--
-- Table structure for table `zipcodes`
--

CREATE TABLE IF NOT EXISTS `zipcodes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zipcode` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `zipcode` (`zipcode`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=99 ;

--
-- Dumping data for table `zipcodes`
--

INSERT INTO `zipcodes` (`id`, `zipcode`) VALUES
(1, 644000),
(2, 644001),
(3, 644002),
(4, 644005),
(5, 644006),
(6, 644007),
(7, 644008),
(8, 644009),
(9, 644010),
(10, 644011),
(11, 644012),
(12, 644013),
(13, 644014),
(14, 644015),
(15, 644016),
(16, 644018),
(17, 644020),
(18, 644021),
(19, 644022),
(20, 644023),
(21, 644024),
(22, 644025),
(23, 644027),
(24, 644029),
(25, 644030),
(26, 644031),
(27, 644032),
(28, 644033),
(29, 644034),
(30, 644035),
(31, 644036),
(32, 644037),
(33, 644039),
(34, 644040),
(35, 644041),
(36, 644042),
(37, 644043),
(38, 644044),
(39, 644045),
(40, 644046),
(41, 644047),
(42, 644048),
(43, 644049),
(44, 644050),
(45, 644052),
(46, 644053),
(47, 644058),
(48, 644060),
(49, 644061),
(50, 644065),
(51, 644069),
(52, 644070),
(53, 644073),
(54, 644074),
(55, 644076),
(56, 644077),
(57, 644079),
(58, 644080),
(59, 644081),
(60, 644082),
(61, 644083),
(62, 644085),
(63, 644086),
(64, 644088),
(65, 644089),
(66, 644090),
(67, 644091),
(68, 644092),
(69, 644094),
(70, 644098),
(71, 644100),
(72, 644103),
(73, 644105),
(74, 644106),
(75, 644109),
(76, 644110),
(77, 644112),
(78, 644113),
(79, 644114),
(80, 644116),
(81, 644117),
(82, 644119),
(83, 644120),
(84, 644121),
(85, 644122),
(86, 644123),
(87, 644506),
(88, 644516),
(89, 644517),
(90, 644520),
(91, 644521),
(92, 644532),
(93, 644546),
(94, 644555),
(95, 644901),
(96, 644902),
(97, 644903),
(98, 644910);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`zipid`) REFERENCES `zipcodes` (`id`);
