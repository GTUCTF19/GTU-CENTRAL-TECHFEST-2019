-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 01, 2019 at 02:44 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `techfest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_pannel`
--

CREATE TABLE IF NOT EXISTS `admin_pannel` (
  `u_name` varchar(40) NOT NULL,
  `u_id` varchar(10) NOT NULL,
  `u_pass` varchar(20) NOT NULL,
  `role` int(2) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_pannel`
--

INSERT INTO `admin_pannel` (`u_name`, `u_id`, `u_pass`, `role`) VALUES
('atv2@gmail.com', 'ATV', 'mainatv2', 6),
('bshah@gmail.com', 'b5', 'bs12', 8),
('entresum@gmail.com', 'ENSM', 'mainentresum', 4),
('nontechevents@gmail.com', 'NONTECH', 'mainnontech', 3),
('robotics@gmail.com', 'ROBO', 'mainrobotics', 7),
('techevents@gmail.com', 'TECH', 'maintechevent', 2),
('main@gmail.com', 'WEB', 'mainwebteam', 1),
('workshop@gmail.com', 'WKSP', 'mainworkshop', 5);
