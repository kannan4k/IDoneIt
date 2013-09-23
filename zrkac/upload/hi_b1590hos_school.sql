-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2013 at 11:20 AM
-- Server version: 5.1.66-cll
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `b1590hos_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `passwd`) VALUES
(1, 'ravi', 'peter'),
(2, 'eduards', 'eduards');

-- --------------------------------------------------------

--
-- Table structure for table `zrkac`
--

CREATE TABLE IF NOT EXISTS `zrkac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` date NOT NULL,
  `timefrom` time NOT NULL,
  `timeto` time NOT NULL,
  `name` varchar(250) NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `classroom` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `zrkac`
--

INSERT INTO `zrkac` (`id`, `day`, `timefrom`, `timeto`, `name`, `teacher`, `classroom`) VALUES
(2, '2013-01-17', '12:12:00', '14:12:00', 'C++', 'Prakash', '134'),
(3, '2013-01-01', '11:11:00', '11:11:00', 'Python2', 'Selva2', '232'),
(4, '2013-01-02', '12:12:00', '15:12:00', 'Physics', 'Kannan', 'XYF'),
(5, '2013-01-29', '04:56:00', '00:00:00', 'Environmental Science', 'John', '5RT');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
