-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2015 at 05:03 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project_management`
--
CREATE DATABASE IF NOT EXISTS `Project_Management` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Project_Management`;

-- --------------------------------------------------------

--
-- Table structure for table `current`
--

CREATE TABLE IF NOT EXISTS `current` (
  `key` int(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `current`
--

INSERT INTO `current` (`key`, `name`) VALUES
(1, 'FINAL PHASE');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation1`
--

CREATE TABLE IF NOT EXISTS `evaluation1` (
  `guide1` varchar(30) NOT NULL,
  `guide2` varchar(30) NOT NULL,
  `guide3` varchar(30) NOT NULL,
  `date1` varchar(20) NOT NULL,
  `pno` varchar(2) NOT NULL,
  `time1` varchar(20) NOT NULL,
  `s1` varchar(20) NOT NULL,
  `s2` varchar(20) NOT NULL,
  `s3` varchar(29) NOT NULL,
  PRIMARY KEY (`pno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation1`
--

INSERT INTO `evaluation1` (`guide1`, `guide2`, `guide3`, `date1`, `pno`, `time1`, `s1`, `s2`, `s3`) VALUES
('RMS', 'BKS', 'RR', '2015-05-07', '1', '12:00', '1RV12IS001', '1RV12IS002', '1RV12IS003');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation2`
--

CREATE TABLE IF NOT EXISTS `evaluation2` (
  `m1` float NOT NULL,
  `m2` float NOT NULL,
  `m3` float NOT NULL,
  `usn` varchar(20) NOT NULL,
  `guide1` varchar(30) NOT NULL,
  `guide2` varchar(30) NOT NULL,
  `guide3` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation2`
--

INSERT INTO `evaluation2` (`m1`, `m2`, `m3`, `usn`, `guide1`, `guide2`, `guide3`, `title`) VALUES
(5, 34, 40, '1RV12IS001', 'BMS', 'RMS', 'BKS', 'software oracle'),
(12, 8, 40, '1RV12IS002', 'BMS', 'RMS', 'BKS', 'attendence management'),
(10, 9, 25, '1RV12IS003', 'BMS', 'RMS', 'BKS', 'canteen mangement'),
(21, 0, 0, '1RV12IS004', 'BMS', 'MM', 'RR', 'library management'),
(0, 0, 0, '1RV12IS011', 'GCN', 'RMS', 'RR', 'Online Test Monitoring tool'),
(0, 0, 0, '1RV12IS012', 'GCN', 'BKS', 'RR', 'Online Test Monitoring tool'),
(0, 0, 0, '1RV12IS013', 'GCN', 'BMS', 'RMS', 'Online Test Monitoring tool'),
(0, 0, 0, '1RV12IS015', 'RR', 'GNS', 'SRN', 'Inventory Management'),
(0, 0, 0, '1RV12IS016', 'RR', 'SRN', 'GNS', 'banking website'),
(0, 0, 0, '1RV12IS017', 'RR', 'SRN', 'BKS', 'grievence Management'),
(0, 0, 0, '1RV12IS057', 'BMS', 'RR', 'GV', 'library management');

-- --------------------------------------------------------

--
-- Table structure for table `faclogin`
--

CREATE TABLE IF NOT EXISTS `faclogin` (
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `val` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faclogin`
--

INSERT INTO `faclogin` (`id`, `password`, `val`) VALUES
('', '', 0),
('3', 'qwerty', 0),
('admin', 'a', 1),
('BKS', 'password', 0),
('BMS', 'bms', 0),
('RMS', 'rms', 0),
('SRN', 'srn', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `specialty` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `specialty`) VALUES
('', '', ''),
('3', 'RMS', 'TOC'),
('BKS', 'Srinivas B K', 'System Software'),
('BMS', 'BM Sagar', 'Algorithms'),
('GCN', 'Nagaraj G Cholli', 'Object Oriented'),
('RMS', 'Rajashekara Murthy', 'Algorithms'),
('RR', 'Rashmi R', 'Web Programming'),
('SRN', 'Shantaram Nayak', 'SW Testing');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `usn` varchar(20) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `weekno` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`usn`, `feedback`, `weekno`) VALUES
('1RV11IS001', 'Met and took a topic', '1'),
('1RV12IS003', 'Draw DFD for your Project', ''),
('1RV11IS001', 'Project is good need to improve some points', '1'),
('1RV11IS001', 'qwertyuiasdfghjkxcvbnm,', '10'),
('1RV11IS001', 'dfghjklcvbnm,rtyuio', '3'),
('1RV11IS002', 'qwerty', '1'),
('1RV11IS002', 'its working', '3');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `password`) VALUES
('1RV11IS001', '123'),
('1RV12IS002', 'b'),
('1RV12IS003', 'c'),
('1RV12IS004', 'd'),
('1RV12IS005', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `past`
--

CREATE TABLE IF NOT EXISTS `past` (
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `no` int(2) NOT NULL,
  `title` varchar(50) NOT NULL,
  `dis` varchar(50) NOT NULL,
  `max` varchar(11) NOT NULL,
  `guide` varchar(20) NOT NULL DEFAULT 'notallotted',
  `s1` varchar(20) NOT NULL,
  `s2` varchar(20) NOT NULL,
  `s3` varchar(20) NOT NULL,
  `s4` varchar(20) NOT NULL,
  `allot` varchar(3) NOT NULL,
  `area` varchar(10) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`no`, `title`, `dis`, `max`, `guide`, `s1`, `s2`, `s3`, `s4`, `allot`, `area`) VALUES
(1, 'library management', 'automate library', '3', 'BMS', '1RV12IS001', '1RV12IS002', '1RV12IS003', '', 'yes', 'data'),
(2, 'software oracle', 'about manage oracle db', '3', 'GCN', '1RV12IS025', '1RV12IS076', '1RV12IS075', '', 'yes', 'DBMS'),
(4, 'Inventory Management', 'How to Maintain Inventory', '4', 'RR', '1RV12IS015', '1RV12IS016', '1RV12IS017', '', 'no', 'WP'),
(5, 'Online Test Monitoring tool', 'Tool used to mange online exam ', '3', 'GCN', '1RV12IS011', '1RV12IS012', '1RV12IS013', '', 'yes', 'WP'),
(10, 'Faculty Management System', 'This project help to manage faculty database and a', '3', 'RR', '1RV12IS008', '1RV12IS18', '1RV12IS042', '', 'yes', 'Database a'),
(15, 'Operational Management', 'Project Manage Operational Project', '4', 'RR', '1RV12IS009', '1RV12IS065', '1RV12IS088', '', 'no', 'DATABASE'),
(16, 'matrrmonial database', 'realtional database management', '10', 'BKS', '1RV12IS056', '1RV12IS069', '1RV12IS022', '', 'no', 'RDBMS'),
(17, 'faculty award management', 'management of faculty award', '10', 'RMS', '1RV12IS086', '1RV12IS070', '1RV12IS055', '', 'no', 'sysbase');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `usn` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `guide` varchar(20) NOT NULL,
  `proj` varchar(2) NOT NULL DEFAULT '0',
  `marks` float NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `name`, `guide`, `proj`, `marks`) VALUES
('1RV11IS001', 'abhijith', 'RMS', '1', 24),
('1RV11IS002', 'saurabh', 'GNS', '1', 37),
('1RV11IS003', 'Abhi', 'GV', '0', 40),
('1RV11IS004', 'Rahul', 'MM', '3', 80),
('1RV12IS015', 'Varun', 'BMS', '10', 45),
('1RV12IS016', 'Rachana', 'RR', '10', 48),
('1RV12IS017', 'Shilpa', 'RR', '10', 47);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
