-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2015 at 09:36 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `real_estate`
--
CREATE DATABASE IF NOT EXISTS `real_estate` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `real_estate`;

-- --------------------------------------------------------

--
-- Table structure for table `info_form`
--

CREATE TABLE IF NOT EXISTS `info_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `plot_area` float NOT NULL,
  `rakba` float NOT NULL,
  `face` varchar(20) NOT NULL,
  `booking_amount` int(11) NOT NULL,
  `owner_name` varchar(60) NOT NULL,
  `father_name` varchar(60) NOT NULL,
  `address` varchar(250) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `owner_rakba` float NOT NULL,
  `project_name` varchar(60) NOT NULL,
  `booking_date` varchar(20) NOT NULL,
  `registration_date` varchar(20) NOT NULL,
  `posesion_date` varchar(20) NOT NULL,
  `pramanikarna_date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `info_form`
--

INSERT INTO `info_form` (`id`, `name`, `plot_area`, `rakba`, `face`, `booking_amount`, `owner_name`, `father_name`, `address`, `mobile_no`, `owner_rakba`, `project_name`, `booking_date`, `registration_date`, `posesion_date`, `pramanikarna_date`) VALUES
(1, 'dinesh shukla', 45, 10, '', 0, 'asd', 'sdm', 'sdd', 9907129816, 23, 'mmm', '1426719600', '1426719600', '1426719600', '1426806000'),
(2, 'Shimran', 45, 62, '', 0, 'Mukhesh', 'vinode', 'shanti bhihar colone', 7415691805, 456, 'Rakhu', '1425423600', '1426806000', '1426719600', '1427666400'),
(3, 'Shimran', 45, 62, '', 0, 'Mukhesh', 'vinode', 'shanti bhihar colone', 7415691805, 456, 'Rakhu', '1425423600', '1426806000', '1426719600', '1427666400'),
(4, 'Shimran', 45, 62, '', 3000, 'prakash', 'hera', 'bilaspur', 789546321, 546, 'Rakhu', '1426028400', '1427410800', '1426719600', '1426114800'),
(5, 'Shimran', 45, 62, 'south', 3000, 'prakash', 'hera', 'bilaspur', 789546321, 546, 'Rakhu', '1426028400', '1427410800', '1426719600', '1426114800'),
(6, 'Shimran', 45, 62, 'south', 3000, 'prakash', 'hera', 'bilaspur', 789546321, 546, 'Rakhu', '1426028400', '1427410800', '1426719600', '1426114800'),
(7, 'Shimran', 45, 62, 'south', 3000, 'prakash', 'hera', 'bilaspur', 789546321, 546, 'Rakhu', '1426028400', '1427410800', '1426719600', '1426114800'),
(8, 'Shimran', 45, 62, 'south', 3000, 'prakash', 'hera', 'dd', 4567891234565656, 456, 'Rakhu', '1426028400', '1426114800', '1426114800', '1426114800'),
(9, 'Shimran', 45, 62, 'south', 3000, 'prakash', 'hera', 'bilaspur', 789546321, 546, 'Rakhu', '1426028400', '1427410800', '1426719600', '1426114800'),
(10, 'Shimran', 45, 62, 'south', 3000, 'prakash', 'hera', 'bilaspur', 789546321, 546, 'Rakhu', '1426028400', '1427410800', '1426719600', '1426114800'),
(11, 'Shimran', 45, 62, 'south', 3000, 'Mukhesh', 'hera', 'd', 7415691805, 546, 'Rakhu', '1425942000', '1427324400', '1426719600', '1426806000'),
(12, 'Shimran', 45, 62, 'south', 3000, 'Mukhesh', 'hera', 'd', 7415691805, 546, 'Rakhu', '1425942000', '1427324400', '1426719600', '1426806000'),
(13, 'Shimran', 45, 62, 'south', 3000, 'Mukhesh', 'hera', 'd', 7415691805, 546, 'Rakhu', '1425942000', '1427324400', '1426719600', '1426806000'),
(14, 'Shimran', 45, 62, 'south', 3000, 'Mukhesh', 'hera', 'd', 7415691805, 546, 'Rakhu', '1425942000', '1427324400', '1426719600', '1426806000'),
(15, 'Shimran', 45, 62, 'south', 3000, 'Mukhesh', 'hera', 'd', 7415691805, 546, 'Rakhu', '1425942000', '1427324400', '1426719600', '1426806000'),
(16, 'Shimran', 45, 62, 'south', 3000, 'prakash', 'hera', 'korba', 7415691805, 546, 'Rakhu', '1428012000', '1426114800', '1426719600', '1426719600'),
(17, 'Shimran', 45, 62, 'south', 456978, 'prakash', 'vinode', 'korba', 7415691805, 546, 'Rakhu', '1426633200', '1426114800', '1426719600', '1426719600'),
(18, 'Shimran', 45, 62, 'south', 3000, 'prakash', 'hera', 'korba', 7415691805, 546, 'Rakhu', '1426114800', '1426114800', '1426719600', '1426719600'),
(19, 'shimran', 45, 62, 'south', 156, 'gomed', 'GHJHG', 'korba', 987654321, 546, 'on line voting', '1429048800', '1451516400', '1451516400', '1451516400');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `v_no` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `perpose` varchar(15) NOT NULL,
  `amount` float NOT NULL,
  `remark` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `customer_id`, `v_no`, `date`, `perpose`, `amount`, `remark`) VALUES
(1, 19, 123, '987285600', 'booking', 156, 'Just Booking amount');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
