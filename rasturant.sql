-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2018 at 03:11 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rasturant`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE IF NOT EXISTS `admin_panel` (
  `s_no` int(10) NOT NULL AUTO_INCREMENT,
  `admin_id` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`s_no`, `admin_id`, `password`, `status`) VALUES
(1, 'Milan', '12345', ''),
(2, 'Navneet', '123456', '');

-- --------------------------------------------------------

--
-- Table structure for table `food_item`
--

CREATE TABLE IF NOT EXISTS `food_item` (
  `food_id` int(100) NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `food_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'on',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `food_item`
--

INSERT INTO `food_item` (`food_id`, `id`, `food_name`, `price`, `status`) VALUES
(1, 1, 'Packaged Drinking Water', '10', 'on'),
(1, 2, 'Fresh Lime Soda', '20', 'on'),
(1, 3, 'Iced Tea', '30', 'on'),
(1, 4, 'Bunta Soda', '40', 'on'),
(1, 5, 'Aam Ka Panna', '50', 'on'),
(2, 6, 'Shorba', '10', 'on'),
(2, 7, 'Tomato Shorba', '30', 'on'),
(2, 8, 'Dal Shorba', '30', 'on'),
(2, 9, 'Murgh Shorba', '40', 'on'),
(2, 10, 'Murgh Shorba', '50', 'on'),
(3, 12, 'Tandoori Salad', '10', 'on'),
(3, 13, 'Tandoori Aloo', '20', 'on'),
(3, 14, 'Hara Kebab', '30', 'on'),
(3, 15, 'Dahi De Kebab', '30', 'on'),
(3, 16, 'Veg Kebab Platter', '40', 'on'),
(4, 17, 'Dum Aloo', '10', 'on'),
(4, 18, 'Dal Tadka', '20', 'on'),
(4, 19, 'Mixed Vegetable', '30', 'on'),
(4, 20, 'Dal Makhani', '30', 'on'),
(4, 21, 'Palak Paneer', '50', 'on'),
(5, 22, 'Tandoori Roti', '10', 'on'),
(5, 23, 'Butter Roti', '30', 'on'),
(5, 24, 'Palak Roti', '40', 'on'),
(5, 25, 'Roomali Roti', '40', 'on'),
(5, 26, 'Butter Naan', '50', 'on'),
(6, 27, 'Murgh Saagwala', '10', 'on'),
(6, 28, 'Chicken Tikka Masala', '121', 'on'),
(6, 29, 'Murgh Kadai', '231', 'on'),
(6, 30, 'Murgh Makhani', '234', 'on'),
(6, 31, 'Meat Saagwala', '432', 'on'),
(1, 32, '', '', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `food_type`
--

CREATE TABLE IF NOT EXISTS `food_type` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `imge_name` varchar(100) NOT NULL,
  `food_name` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'on',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `food_type`
--

INSERT INTO `food_type` (`id`, `imge_name`, `food_name`, `status`) VALUES
(1, 'Shuruaat.jpg', 'Shuruaat', 'on'),
(2, 'Shorba.jpg', 'Shorba', 'on'),
(3, 'Khazane-E-Kebab Veg.jpg', 'Khazane-E-Kebab Veg', 'on'),
(4, 'Dal Te Subzian.jpg', 'Dal Te Subzian', 'on'),
(5, 'Rotiyaan.jpg', 'Rotiyaan', 'on'),
(6, 'Murgh Te Meat.jpg', 'Murgh Te Meat', 'on'),
(7, 'Accompaniments.jpg', 'Accompaniments', 'on'),
(8, 'Raita.jpg', 'Raita', 'on'),
(9, 'Khazane-E-Kebab Non Veg.jpg', 'Khazane-E-Kebab Non Veg', 'on');
