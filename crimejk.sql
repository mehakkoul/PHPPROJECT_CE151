-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2021 at 09:16 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crimejk`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `IDno` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` text NOT NULL,
  `adress` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `complain` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`ID`, `IDno`, `name`, `sex`, `adress`, `phone`, `occupation`, `time`, `date`, `complain`) VALUES
(9, '122', 'sohail Gupta', 'Male', 'p.o.box23', 2147483647, 'student', '00:00:00', '2015-04-20', 'phone stolen');

-- --------------------------------------------------------

--
-- Table structure for table `criminal`
--

CREATE TABLE IF NOT EXISTS `criminal` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `IDno` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `sex` text NOT NULL,
  `age` int(20) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `crimetype` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `wanted` varchar(50) NOT NULL,
  `image1` varchar(900) NOT NULL,
  `image2` varchar(900) NOT NULL,
  `image3` varchar(900) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `criminal`
--

INSERT INTO `criminal` (`id`, `IDno`, `name`, `nickname`, `sex`, `age`, `occupation`, `crimetype`, `adress`, `wanted`, `image1`, `image2`, `image3`) VALUES
(58, '180007', 'Rahul Singh', 'munna', 'Male', 27, 'driver', '', 'Jammu', 'MostWanted', 'photo1.png', 'photo2.png', 'photo3.png');

-- --------------------------------------------------------

--
-- Table structure for table `fir`
--

CREATE TABLE IF NOT EXISTS `fir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firno` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `choose` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `infotype` varchar(100) NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `fir`
--

INSERT INTO `fir` (`id`, `firno`, `date`, `address`, `district`, `choose`, `place`, `infotype`, `info`) VALUES
(12, '180005', '2021-04-17', 'NewPlot', 'Jammu', 'Foreign', 'Newplot', 'Murdere', 'Murder of a man in night.'),
(13, '180005', '2021-04-17', 'NewPlot', 'Jammu', 'Foreign', 'Newplot', 'Murdere', 'Murder of a man in night.'),
(14, '180007', '2021-04-17', 'daily excelsior land', 'Jammu', 'Foreign', 'Daily Excelsior Land', 'Robbery', 'A robbery in a house at night.'),
(15, '180007', '2021-04-17', 'daily excelsior land', 'Jammu', 'Foreign', 'Daily Excelsior Land', 'Robbery', 'A robbery in a house at night.'),
(16, '180010', '2021-04-17', 'Jammu', 'Jammu', 'Foreign', 'Newplot', 'Robbery', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `name` varchar(50) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `age` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `usertype` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `sex`, `age`, `dob`, `phone`, `address`, `email`, `username`, `usertype`, `password`) VALUES
('Mehak Koul', 'Female', '21', '2000-03-20', '9797979797', 'Jammu', 'mehakkoul@gmail.com', 'admin', 'admin', 'mehak@123'),
('mehak koul', 'Female', '27', '0000-00-00', '9797979797', 'Jammu', 'mehakkoul@gmail.com', 'user', 'user', 'mehak@123');

-- --------------------------------------------------------

--
-- Table structure for table `postmortem`
--

CREATE TABLE IF NOT EXISTS `postmortem` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `image` varchar(400) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `FirNo` varchar(50) NOT NULL,
  `ResultMortem` text NOT NULL,
  `DateDeath` date NOT NULL,
  `info` text NOT NULL,
  `House` varchar(50) NOT NULL,
  `Doctor` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `postmortem`
--

INSERT INTO `postmortem` (`id`, `image`, `name`, `sex`, `FirNo`, `ResultMortem`, `DateDeath`, `info`, `House`, `Doctor`) VALUES
(43, 'photo1.png', 'Rahul Singh', 'Male', '1245', 'not murdered', '2021-04-17', 'accident', 'jammu', 'aman raina');

-- --------------------------------------------------------

--
-- Table structure for table `suspect`
--

CREATE TABLE IF NOT EXISTS `suspect` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` text NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `officer` varchar(50) NOT NULL,
  `remark` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `suspect`
--

INSERT INTO `suspect` (`id`, `name`, `age`, `sex`, `occupation`, `address`, `height`, `weight`, `time`, `date`, `officer`, `remark`) VALUES
(5, 'Rahul Singh', 33, 'Male', 'driver', 'Jammu', 11, 52, '00:00:00', '2021-04-17', 'aman raina', '                 bad                       ');

-- --------------------------------------------------------

--
-- Table structure for table `wanted`
--

CREATE TABLE IF NOT EXISTS `wanted` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `sex` text NOT NULL,
  `age` int(11) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(900) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `wanted`
--

INSERT INTO `wanted` (`id`, `name`, `nickname`, `sex`, `age`, `date`, `location`, `description`, `image`) VALUES
(11, 'meenakshi bali', 'meena', 'Female', 25, '2021-04-14', 'samba', 'bank robbery. ', '131120131108.jpg');
