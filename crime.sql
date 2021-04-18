

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




--
-- Database: `crime`
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `criminal`
--


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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `fir`
--


-- --------------------------------------------------------

--
-- Table structure for table `login`
--
CREATE TABLE IF NOT EXISTS `login` (
     `name` varchar(50) DEFAULT NULL,
      `sex` varchar(50) DEFAULT NULL,
      `age` varchar(50) DEFAULT NULL,
      `dob` varchar(50) DEFAULT NULL,
    `phone` varchar(50) DEFAULT NULL,
  `address`  varchar(50) DEFAULT NULL,
    `email` varchar(50) DEFAULT NULL,
 `username` varchar(50) NOT NULL DEFAULT '',
 `usertype` varchar(50) DEFAULT NULL,
 `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1
  
  
CREATE TABLE IF NOT EXISTS `login` (
     `name` varchar(50) DEFAULT NULL,
      `sex` varchar(50) DEFAULT NULL,
      `age` varchar(50) DEFAULT NULL,
      `dob` varchar(50) DEFAULT NULL,
    `phone` varchar(50) DEFAULT NULL,
  `address`  varchar(50) DEFAULT NULL,
    `email` varchar(50) DEFAULT NULL,
 `username` varchar(50) NOT NULL DEFAULT '',
 `usertype` varchar(50) DEFAULT NULL,
 `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `login` (`name`, `sex`, `age`,  `dob`,  `phone`, `address`, `email`, `username`, `usertype`, `password`) VALUES
			('Mehak Koul',  'Female', '19', '2001-08-16', '9797039291', 'Jammu', 'mehakkoul@gmail.com', 'admin', 'admin', 'mehak@123');
			('Mehak Koul',  'Female', '19', '2001-08-16', '9797979797', 'Jammu', 'mehakkoul@gmail.com', 'user', 'user', 'mehak@123');


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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `postmortem`
--


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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `suspect`
--


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

