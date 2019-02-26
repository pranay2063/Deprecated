-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2015 at 07:44 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `contests`
--

CREATE TABLE IF NOT EXISTS `contests` (
`CONTEST_CODE` int(11) NOT NULL,
  `CONTEST_NAME` varchar(60) DEFAULT NULL,
  `CONTEST_DATE` date NOT NULL,
  `CONTEST_TIME` time NOT NULL,
  `CONTEST_LINK` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1; 

--
-- Dumping data for table `contests`
--

INSERT INTO `contests` (`CONTEST_CODE`, `CONTEST_NAME`, `CONTEST_DATE`, `CONTEST_TIME`, `CONTEST_LINK`) VALUES
(1, 'CODECHEF LONG', '2015-04-06', '15:00:00', ''),
(2, 'CODEFORCES DIV 300', '2015-04-02', '22:00:00', ''),
(3, 'CODEFORCES DIV 301', '2015-04-04', '22:00:00', ''),
(4, 'CODEFORCES DIV 302', '2015-04-12', '22:00:00', ''),
(5, 'HACKEREARTH ALKWARIZM', '2015-03-21', '19:00:00', ''),
(7, 'Codeforces Round #299', '2015-04-14', '22:00:00', 'http://codeforces.com/contests/535,536');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contests`
--
ALTER TABLE `contests`
 ADD PRIMARY KEY (`CONTEST_CODE`), ADD UNIQUE KEY `CONTEST_CODE` (`CONTEST_CODE`), ADD UNIQUE KEY `CONTEST_CODE_2` (`CONTEST_CODE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contests`
--
ALTER TABLE `contests`
MODIFY `CONTEST_CODE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
