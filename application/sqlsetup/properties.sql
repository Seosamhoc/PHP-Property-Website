-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 30, 2013 at 07:13 AM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `properties`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `user_id` int(1) NOT NULL,
  `username` varchar(5) NOT NULL,
  `password` varchar(7) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'letmein');

-- --------------------------------------------------------

--
-- Table structure for table `counties`
--

CREATE TABLE `counties` (
  `county_id` int(11) NOT NULL AUTO_INCREMENT,
  `county` varchar(10) NOT NULL,
  PRIMARY KEY (`county_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `counties`
--

INSERT INTO `counties` (`county_id`, `county`) VALUES
(1, 'Antrim'),
(2, 'Armagh'),
(3, 'Carlow'),
(4, 'Cavan'),
(5, 'Clare'),
(6, 'Cork'),
(7, 'Derry'),
(8, 'Donegal'),
(9, 'Down'),
(10, 'Dublin'),
(11, 'Fermanagh'),
(12, 'Galway'),
(13, 'Kerry'),
(14, 'Kildare'),
(15, 'Kilkenny'),
(16, 'Laois'),
(17, 'Leitrim'),
(18, 'Limerick'),
(19, 'Longford'),
(20, 'Louth'),
(21, 'Mayo'),
(22, 'Meath'),
(23, 'Monaghan'),
(24, 'Offaly'),
(25, 'Roscommon'),
(26, 'Sligo'),
(27, 'Tipperary'),
(28, 'Tyrone'),
(29, 'Waterford'),
(30, 'Westmeath'),
(31, 'Wexford'),
(32, 'Wicklow');

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `housetype_id` int(11) NOT NULL AUTO_INCREMENT,
  `housetype` varchar(20) NOT NULL,
  PRIMARY KEY (`housetype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`housetype_id`, `housetype`) VALUES
(1, 'Detached'),
(2, 'Semi-detached'),
(3, 'Terraced');

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `listing_id` int(11) NOT NULL AUTO_INCREMENT,
  `price` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  `housetype_id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `sold` varchar(3) NOT NULL DEFAULT '0',
  `imagefile` varchar(50) NOT NULL,
  `dateuploaded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`listing_id`),
  KEY `county_id` (`county_id`),
  KEY `housetype_id` (`housetype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`listing_id`, `price`, `county_id`, `housetype_id`, `address`, `sold`, `imagefile`, `dateuploaded`) VALUES
(52, 1500000, 10, 1, 'Rich Street', '0', '1.jpg', '2013-12-30 05:37:47'),
(54, 500000, 6, 2, '123 Fake Street', '1', 'green-houses-01.jpg', '2013-12-30 05:39:27'),
(55, 250000, 31, 3, '742 Evergreen Terrace', '0', 'happy-smiling-houses.jpg', '2013-12-30 05:41:36'),
(56, 300000, 23, 1, '90210', '0', 'house  image.jpg', '2013-12-30 05:42:22'),
(57, 750000, 11, 1, 'Crane Street', '1', 'houses-of-parliament-cape-town.jpg', '2013-12-30 05:50:02');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `listings`
--
ALTER TABLE `listings`
  ADD CONSTRAINT `listings_ibfk_2` FOREIGN KEY (`county_id`) REFERENCES `counties` (`county_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `listings_ibfk_3` FOREIGN KEY (`housetype_id`) REFERENCES `houses` (`housetype_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
