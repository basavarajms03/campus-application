-- phpMyAdmin SQL Dump
-- version 3.4.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 19, 2020 at 04:37 AM
-- Server version: 5.5.17
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `campusrecruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `college_registration`
--

CREATE TABLE IF NOT EXISTS `college_registration` (
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_registration`
--

CREATE TABLE IF NOT EXISTS `company_registration` (
  `company_id` varchar(30) NOT NULL,
  `company_name` varchar(70) NOT NULL,
  `location` varchar(50) NOT NULL,
  `email_id` varchar(60) NOT NULL,
  `no_employees` int(4) NOT NULL,
  `description` longtext NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_registration`
--

INSERT INTO `company_registration` (`company_id`, `company_name`, `location`, `email_id`, `no_employees`, `description`, `password`) VALUES
('1234', 'BMS SOLUTIONS', 'bangalore', 'basavaraj.sangur12345@gmail.com', 12, 'BMS Solutions Infomation', '829128');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `skills` varchar(30) NOT NULL,
  `salary` int(11) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `GMarks` varchar(30) NOT NULL,
  `PMarks` varchar(30) NOT NULL,
  `HMarks` varchar(30) NOT NULL,
  `test` varchar(2) NOT NULL,
  `department` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company_id`, `designation`, `skills`, `salary`, `description`, `date`, `GMarks`, `PMarks`, `HMarks`, `test`, `department`) VALUES
(1, '1234', 'Manager', 'Java', 1234, 'Computer Science\r\n', '2020-12-31', '', '10', '10', '1', 'CS'),
(2, '1234', 'Civil Engineer', 'Civil', 1120, 'Civil Engineer\r\n', '2020-12-31', '', '10', '10', '0', 'Civil');

-- --------------------------------------------------------

--
-- Table structure for table `selected_candidates`
--

CREATE TABLE IF NOT EXISTS `selected_candidates` (
  `company_id` varchar(30) NOT NULL,
  `jobid` varchar(30) NOT NULL,
  `usn` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selected_candidates`
--

INSERT INTO `selected_candidates` (`company_id`, `jobid`, `usn`) VALUES
('1234', '1', '1234'),
('1234', '2', '5678');

-- --------------------------------------------------------

--
-- Table structure for table `students_registration`
--

CREATE TABLE IF NOT EXISTS `students_registration` (
  `usn` varchar(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile_number` varchar(70) NOT NULL,
  `UgUniversity` varchar(70) NOT NULL,
  `UgPass` int(5) NOT NULL,
  `UgAgg` float(10,2) NOT NULL,
  `PDBoard` varchar(70) NOT NULL,
  `PDPass` int(5) NOT NULL,
  `PDAgg` float(10,2) NOT NULL,
  `HBoard` varchar(70) NOT NULL,
  `HPass` int(5) NOT NULL,
  `HAgg` float(10,2) NOT NULL,
  `Achievements` longtext NOT NULL,
  `Projects` longtext NOT NULL,
  `password` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_registration`
--

INSERT INTO `students_registration` (`usn`, `name`, `dob`, `email`, `mobile_number`, `UgUniversity`, `UgPass`, `UgAgg`, `PDBoard`, `PDPass`, `PDAgg`, `HBoard`, `HPass`, `HAgg`, `Achievements`, `Projects`, `password`, `department`) VALUES
('1234', 'BASAVARAJ M SANGUR', '1996-06-04', 'basavaraj.mallappa@amazecodes.com', '1234567890', '', 0, 0.00, 'BTE', 2015, 23.80, 'HIGH', 2012, 70.00, 'NOTHING', 'NO INFORMATION', '909225', 'CS'),
('5678', 'BASU M S', '2019-02-03', 'basavaraj.sangur12345@gmai.com', '1234567890', '', 0, 0.00, 'BTE', 30, 49.00, 'VTU', 40, 40.00, 'NOITHING', 'NOTHIN\r\n', '973468', 'Civil');

-- --------------------------------------------------------

--
-- Table structure for table `students_test_clear`
--

CREATE TABLE IF NOT EXISTS `students_test_clear` (
  `usn` varchar(10) DEFAULT NULL,
  `company_id` varchar(10) DEFAULT NULL,
  `jobid` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students_test_taken`
--

CREATE TABLE IF NOT EXISTS `students_test_taken` (
  `usn` varchar(12) NOT NULL,
  `company_id` varchar(12) NOT NULL,
  `jobid` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `text_id` int(10) NOT NULL AUTO_INCREMENT,
  `company_id` varchar(20) DEFAULT NULL,
  `job_id` int(20) DEFAULT NULL,
  `question` text,
  `a` varchar(2) DEFAULT NULL,
  `b` varchar(2) DEFAULT NULL,
  `c` varchar(2) DEFAULT NULL,
  `d` varchar(2) DEFAULT NULL,
  `crct_answer` varchar(2) NOT NULL,
  PRIMARY KEY (`text_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
