-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 02, 2020 at 11:15 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_interview`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

DROP TABLE IF EXISTS `applicant`;
CREATE TABLE IF NOT EXISTS `applicant` (
  `app_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `mobile` text NOT NULL,
  `country` text NOT NULL,
  `city` text NOT NULL,
  `postcode` varchar(8) NOT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`app_id`, `f_name`, `l_name`, `mobile`, `country`, `city`, `postcode`) VALUES
(1, 'John', 'Mark', '07812345678', 'United Kingdom', 'BedFord', 'MK41 7PZ'),
(2, 'Athar', 'Naqvi', '07815675656', 'United Kingdom', 'Milton Keynes', 'MK13 8ES');

-- --------------------------------------------------------

--
-- Table structure for table `app_profile`
--

DROP TABLE IF EXISTS `app_profile`;
CREATE TABLE IF NOT EXISTS `app_profile` (
  `app_profile_id` int(11) NOT NULL AUTO_INCREMENT,
  `cv_file` blob NOT NULL,
  `statement_file` blob NOT NULL,
  `current_job_status` text NOT NULL,
  `current_job_title` text NOT NULL,
  `industry` text NOT NULL,
  `specialisation` text NOT NULL,
  `highest_degree` text NOT NULL,
  `certifications` text NOT NULL,
  PRIMARY KEY (`app_profile_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `mail_from` text NOT NULL,
  `phone` text NOT NULL,
  `con_subject` text NOT NULL,
  `con_message` text NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `f_name`, `l_name`, `mail_from`, `phone`, `con_subject`, `con_message`) VALUES
(1, 'Syed Athar', 'atharnaqvi@gmail.com', 'atharnaqvi@gmail.com', '07815675656', 'MockInterview', 'This is my first message...'),
(2, 'Syed Athar', 'Naqvi', 'atharnaqvi@gmail.com', '07815675656', 'cv', 'This is my second message'),
(3, 'Tim', 'John', 'athar.naqvi@matssoft.com', '07812345678', 'billing', 'fasfsaf safdasdf'),
(4, 'Laura', 'z@abc.co.uk', 'z@abc.co.uk', '07812345678', 'complaint', 'I have lots of complaints\r\n1- amount\r\n2- test \r\n3- interview\r\nplease help');

-- --------------------------------------------------------

--
-- Table structure for table `mock_interview`
--

DROP TABLE IF EXISTS `mock_interview`;
CREATE TABLE IF NOT EXISTS `mock_interview` (
  `mock_interview_id` int(11) NOT NULL AUTO_INCREMENT,
  `interviewer_id` int(11) NOT NULL,
  `moderator_id` int(11) NOT NULL,
  `date_of_application` date NOT NULL,
  `date_of_interview` date NOT NULL,
  `interviewer_comments` text NOT NULL,
  `moderator_comments` text NOT NULL,
  `interview_result` text NOT NULL,
  `areas_to_improve` text NOT NULL,
  `follow_up_date` date NOT NULL,
  PRIMARY KEY (`mock_interview_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

DROP TABLE IF EXISTS `pwdreset`;
CREATE TABLE IF NOT EXISTS `pwdreset` (
  `pwdResetId` int(11) NOT NULL AUTO_INCREMENT,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL,
  PRIMARY KEY (`pwdResetId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tcompany`
--

DROP TABLE IF EXISTS `tcompany`;
CREATE TABLE IF NOT EXISTS `tcompany` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) NOT NULL,
  `Postcode` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUsers` int(11) NOT NULL AUTO_INCREMENT,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  PRIMARY KEY (`idUsers`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'athar', 'atharnaqvi@gmail.com', '$2y$10$wAUUJzbX1qVgX4br85cRmOVX4LUw/0tbuodM1zc5Zg/Idr7.iJgsC'),
(2, 'asdfasdfa', 'atharnaqvi@gmail.com', '$2y$10$3JFolVcQRAMvgfVaXSRN0.iCbaVIFMAPaL/NQXcSpoyxiA6udLfUy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
