-- phpMyAdmin SQL Dump
-- version 3.4.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2014 at 06:59 PM
-- Server version: 5.5.33
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bocapstone2`
--

-- --------------------------------------------------------

--
-- Table structure for table `Stroke`
--

CREATE TABLE IF NOT EXISTS `Stroke` (
  `Stroke_Num` int(11) NOT NULL AUTO_INCREMENT,
  `Stroke_Type` char(20) NOT NULL,
  `Distance` int(11) NOT NULL,
  PRIMARY KEY (`Stroke_Num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `Stroke`
--

INSERT INTO `Stroke` (`Stroke_Num`, `Stroke_Type`, `Distance`) VALUES
(1, 'Free', 50),
(2, 'Free', 100),
(3, 'Free', 200),
(4, 'Free', 500),
(5, 'Free', 1000),
(6, 'Free', 1650),
(7, 'Fly', 50),
(8, 'Fly', 100),
(9, 'Fly', 200),
(10, 'Back', 50),
(11, 'Back', 100),
(12, 'Back', 200),
(13, 'Breast', 50),
(14, 'Breast', 100),
(15, 'Breast', 200),
(16, 'IM', 100),
(17, 'IM', 200),
(18, 'IM', 400);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
