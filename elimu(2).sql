-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 13, 2013 at 10:26 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elimu`
--

-- --------------------------------------------------------

--
-- Table structure for table `academics`
--

CREATE TABLE IF NOT EXISTS `academics` (
  `Admission_No` varchar(40) NOT NULL,
  `Subject` varchar(40) NOT NULL,
  `Opening` int(3) NOT NULL,
  `Midterm` int(3) NOT NULL,
  `Final` int(3) NOT NULL,
  `Total` int(40) NOT NULL,
  `Grade` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academics`
--

INSERT INTO `academics` (`Admission_No`, `Subject`, `Opening`, `Midterm`, `Final`, `Total`, `Grade`) VALUES
('c025-1610/2009', 'English', 25, 20, 30, 75, 'A'),
('', 'English', 17, 33, 33, 0, ''),
('', 'English', 0, 0, 0, 0, ''),
('', 'English', 0, 0, 0, 0, ''),
('C025-023/2003', 'English', 23, 23, 24, 70, 'b');

-- --------------------------------------------------------

--
-- Table structure for table `displinary`
--

CREATE TABLE IF NOT EXISTS `displinary` (
  `Admission_No` varchar(40) NOT NULL,
  `Date` varchar(40) NOT NULL,
  `Category` varchar(40) NOT NULL,
  `Details` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `displinary`
--

INSERT INTO `displinary` (`Admission_No`, `Date`, `Category`, `Details`) VALUES
('C025-023/2003', '21/06/2013', '', 'punishment');

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE IF NOT EXISTS `finance` (
  `Total_fee` varchar(40) NOT NULL,
  `Fee_paid` varchar(40) NOT NULL,
  `Date_paid` varchar(40) NOT NULL,
  `Balance` int(40) NOT NULL,
  `Overpaid` int(40) NOT NULL,
  `Admission_Number` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`Total_fee`, `Fee_paid`, `Date_paid`, `Balance`, `Overpaid`, `Admission_Number`) VALUES
('20000', '2000', '21/06/2013', 0, 0, 'C025-023/2003');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE IF NOT EXISTS `parent` (
  `Surname` varchar(40) NOT NULL,
  `First` varchar(40) NOT NULL,
  `Middle` varchar(40) NOT NULL,
  `Telephone` int(10) NOT NULL,
  `Residence` varchar(40) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `IDNumber` int(8) NOT NULL,
  `Admission_Number` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`Surname`, `First`, `Middle`, `Telephone`, `Residence`, `Address`, `Email`, `IDNumber`, `Admission_Number`) VALUES
('m', '', '', 0, '', '', '', 0, 'c025-1610/2009'),
('Munyao', 'Cosmas', 'Kimanthi', 720205186, 'Kitui', '', 'cosmas@gmail.com', 23365689, 'C025-023/2003'),
('muh', 'hbuhu', 'buhuh', 215641, 'kjhih', '', 'cheruiyotclackson@yahoo.com', 265656, 'C025-023/2003'),
('lkk', 'knkj', 'knkjh', 0, '', '', '', 0, 'c025-1610/2009');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Admision_No` varchar(40) NOT NULL,
  `Surname` varchar(40) NOT NULL,
  `First` varchar(40) NOT NULL,
  `Middle` varchar(40) NOT NULL,
  `Gender` varchar(40) NOT NULL,
  `Form` varchar(40) NOT NULL,
  `admission_date` varchar(30) NOT NULL,
  `Date_of_birth` varchar(40) NOT NULL,
  PRIMARY KEY (`Admision_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Admision_No`, `Surname`, `First`, `Middle`, `Gender`, `Form`, `admission_date`, `Date_of_birth`) VALUES
('C025-023/2003', 'Munyao', 'Stephen', 'Kimanthi', 'Male', 'Form 2', '2003', ''),
('c025-1610/2009', 'mknki', 'mj', 'klkl', 'Male', 'Form 3', '2003', '');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE IF NOT EXISTS `updates` (
  `Admision_No` varchar(40) NOT NULL,
  `Event_Name` varchar(40) NOT NULL,
  `Date` int(12) NOT NULL,
  `Venue` varchar(40) NOT NULL,
  `Details` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`Admision_No`, `Event_Name`, `Date`, `Venue`, `Details`) VALUES
('C025-023/2003', 'eventname', 21, 'mess', 'come early'),
('C025-023/2003', 'eventname', 21, 'mess', 'come one come all');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'elimu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
