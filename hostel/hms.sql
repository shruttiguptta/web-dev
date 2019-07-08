-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 14, 2018 at 03:35 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1-log
-- PHP Version: 5.6.32-1+ubuntu14.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `usern` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `usern`, `pass`, `email`) VALUES
(1, 'admin', 'admin123', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `usern` varchar(20) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `usern`, `regno`, `gender`, `contact`, `email`, `pass`) VALUES
(1, 'hardik', 'dhamija', 'hardik', '123456', 'male', '9896992949', 'hardik@gmail.com', '123456'),
(2, 'harry', 'dhamija', 'harry', '123', 'male', '9896992949', 'harry@gmail.com', '123456'),
(3, 'shruti', 'gupta', 'guptaji', '147852', 'female', '9896992949', 'gupta@gmail.com', '147852');

-- --------------------------------------------------------

--
-- Table structure for table `roomreg`
--

CREATE TABLE IF NOT EXISTS `roomreg` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `block` varchar(10) NOT NULL,
  `roomno` int(20) NOT NULL,
  `stayfrom` date NOT NULL,
  `duration` int(11) NOT NULL,
  `regno` int(11) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `usern` varchar(40) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `egycontact` bigint(11) NOT NULL,
  `guardianName` varchar(500) NOT NULL,
  `guardianRelation` varchar(500) NOT NULL,
  `guardianContact` bigint(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL,
  `pincode` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `roomreg`
--

INSERT INTO `roomreg` (`id`, `block`, `roomno`, `stayfrom`, `duration`, `regno`, `fname`, `lname`, `usern`, `gender`, `contact`, `email`, `egycontact`, `guardianName`, `guardianRelation`, `guardianContact`, `address`, `city`, `state`, `pincode`) VALUES
(1, 'A', 613, '2018-06-19', 4, 123, 'harry', 'dhamija', 'harry', 'male', 9896992949, 'harry@gmail.com', 999999999, 'hardik', 'adihkj', 98998965, 'nfhadfsh', 'ambala', 'asdnbjd', 132132),
(2, 'B', 401, '2018-06-13', 7, 147852, 'shruti', 'gupta', 'guptaji', 'female', 9896992949, 'gupta@gmail.com', 999999999, 'hardik', 'adihkj', 98998965, 'nfhadfsh', 'ambala', 'asdnbjd', 132132);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
