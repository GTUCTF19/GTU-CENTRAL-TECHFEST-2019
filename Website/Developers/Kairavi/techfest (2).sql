-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 03, 2019 at 06:41 PM
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
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_pannel`
--

INSERT INTO `admin_pannel` (`u_name`, `u_id`, `u_pass`) VALUES
('atv2@gmail.com', 'ATV', 'mainatv2'),
('bshah@gmail.com', 'b5', 'bs12'),
('entresum@gmail.com', 'ENSM', 'mainentresum'),
('nontechevents@gmail.com', 'NONTECH', 'mainnontech'),
('robotics@gmail.com', 'ROBO', 'mainrobotics'),
('techevents@gmail.com', 'TECH', 'maintechevent'),
('main@gmail.com', 'WEB', 'mainwebteam'),
('workshop@gmail.com', 'WKSP', 'mainworkshop');

-- --------------------------------------------------------

--
-- Table structure for table `atv`
--

CREATE TABLE IF NOT EXISTS `atv` (
  `e_id` int(3) NOT NULL,
  `e_name` varchar(40) NOT NULL,
  `abstract` varchar(20) NOT NULL,
  `rules` varchar(58) NOT NULL,
  `fees` int(5) NOT NULL,
  `min_members` int(2) NOT NULL,
  `max_members` int(2) NOT NULL,
  `scope` int(5) NOT NULL,
  `m_id` int(3) NOT NULL,
  PRIMARY KEY (`e_id`),
  KEY `m_id` (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atv`
--


-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE IF NOT EXISTS `coordinator` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`id`, `name`, `phone`, `email`, `department`, `status`) VALUES
(3, 'drashti mashru', 2147483647, 'drashti@yahoo.com', 'Entresum', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `d_id` varchar(11) NOT NULL,
  `d_name` varchar(40) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`d_id`, `d_name`) VALUES
('D1', 'Tech'),
('D2', 'non-tech'),
('D3', 'ATV'),
('D4', 'Robotics'),
('D5', 'Workshop'),
('D6', 'EntreSum');

-- --------------------------------------------------------

--
-- Table structure for table `entresum`
--

CREATE TABLE IF NOT EXISTS `entresum` (
  `e_id` varchar(5) NOT NULL,
  `e_name` varchar(40) NOT NULL,
  `abstract` varchar(20) NOT NULL,
  `rules` varchar(58) NOT NULL,
  `fees` int(5) NOT NULL,
  `min_members` int(2) NOT NULL,
  `max_members` int(2) NOT NULL,
  `scope` int(5) NOT NULL,
  `m_id` int(3) NOT NULL,
  PRIMARY KEY (`e_id`),
  UNIQUE KEY `m_id_2` (`m_id`),
  UNIQUE KEY `m_id_3` (`m_id`),
  KEY `m_id` (`m_id`),
  KEY `m_id_4` (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entresum`
--


-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `m_id` int(3) NOT NULL AUTO_INCREMENT,
  `department` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`m_id`, `department`, `name`, `phone`, `status`) VALUES
(1, 'ATV', 'cghg', 7802016969, 1);

-- --------------------------------------------------------

--
-- Table structure for table `non_tech`
--

CREATE TABLE IF NOT EXISTS `non_tech` (
  `e_id` varchar(5) NOT NULL,
  `e_name` varchar(40) NOT NULL,
  `abstract` varchar(20) NOT NULL,
  `rules` varchar(58) NOT NULL,
  `fees` int(5) NOT NULL,
  `min_members` int(2) NOT NULL,
  `max_members` int(2) NOT NULL,
  `scope` int(5) NOT NULL,
  `m_id` int(3) NOT NULL,
  PRIMARY KEY (`e_id`),
  KEY `m_id` (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `non_tech`
--


-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `college` varchar(100) NOT NULL,
  `enroll` bigint(15) DEFAULT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_leader` int(1) NOT NULL DEFAULT '0',
  `gender` varchar(20) NOT NULL,
  `fees` int(5) NOT NULL,
  `e_id` varchar(5) NOT NULL,
  `no_tmember` int(5) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `v_id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstName`, `lastName`, `email`, `phone`, `college`, `enroll`, `team_name`, `team_leader`, `gender`, `fees`, `e_id`, `no_tmember`, `status`, `v_id`, `date`) VALUES
(2, 'drashti', 'mas', '', 0, '', NULL, '0', 0, '', 0, '0', 0, 1, 0, '0000-00-00 00:00:00'),
(3, 'drashti', 'mashru', 'drashti@yahoo.com', 213457156, 'vgec', 21741758, '1', 1, 'female', 111, 'nt1', 5, 1, 0, '2019-03-02 02:00:00'),
(4, 'drashti', 'mashru', 'drashti@yahoo.com', 2852654828, 'aaaa', 121211111111, '', 0, 'female', 0, '0', 0, 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `robotics`
--

CREATE TABLE IF NOT EXISTS `robotics` (
  `e_id` varchar(5) NOT NULL,
  `e_name` varchar(40) NOT NULL,
  `abstract` varchar(20) NOT NULL,
  `rules` varchar(58) NOT NULL,
  `fees` int(5) NOT NULL,
  `min_members` int(2) NOT NULL,
  `max_members` int(2) NOT NULL,
  `scope` int(5) NOT NULL,
  `m_id` int(3) NOT NULL,
  PRIMARY KEY (`e_id`),
  KEY `m_id` (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `robotics`
--


-- --------------------------------------------------------

--
-- Table structure for table `tech`
--

CREATE TABLE IF NOT EXISTS `tech` (
  `e_id` varchar(5) NOT NULL,
  `e_name` varchar(40) NOT NULL,
  `abstract` varchar(20) NOT NULL,
  `rules` varchar(58) NOT NULL,
  `fees` int(5) NOT NULL,
  `min_members` int(2) NOT NULL,
  `max_members` int(2) NOT NULL,
  `scope` int(5) NOT NULL,
  `m_id` int(3) NOT NULL,
  PRIMARY KEY (`e_id`),
  KEY `m_id` (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tech`
--


-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `name`, `phone`, `status`, `email`) VALUES
(25, 'kairavi', 8887975454, 1, '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `atv`
--
ALTER TABLE `atv`
  ADD CONSTRAINT `atv_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `manager` (`m_id`);

--
-- Constraints for table `entresum`
--
ALTER TABLE `entresum`
  ADD CONSTRAINT `entresum_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `manager` (`m_id`);

--
-- Constraints for table `non_tech`
--
ALTER TABLE `non_tech`
  ADD CONSTRAINT `non_tech_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `manager` (`m_id`);

--
-- Constraints for table `robotics`
--
ALTER TABLE `robotics`
  ADD CONSTRAINT `robotics_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `manager` (`m_id`);

--
-- Constraints for table `tech`
--
ALTER TABLE `tech`
  ADD CONSTRAINT `tech_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `manager` (`m_id`);
