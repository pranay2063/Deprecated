-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2015 at 07:38 PM
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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `USER_ADDRESS` varchar(60) DEFAULT NULL,
  `USER_HANDLE` varchar(60) NOT NULL,
  `USER_PASSWORD` varchar(60) NOT NULL,
  `USER_NAME` varchar(60) DEFAULT NULL,
  `USER_EMAIL` varchar(60) NOT NULL,
  `USER_CONTACT_NO` varchar(60) DEFAULT NULL,
  `USER_SECURITY` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USER_ADDRESS`, `USER_HANDLE`, `USER_PASSWORD`, `USER_NAME`, `USER_EMAIL`, `USER_CONTACT_NO`, `USER_SECURITY`) VALUES
('', 'darknight', '1234', '', 'batman@gmail.com', '', 'qwerty'),
('', 'pranay2063', '12', 'Pranay Ranjan', 'pranayranjan420@gmail.com', '', 'qwerty'),
('manit', 'rohit2012', '2034', 'ROHIT TILWANI', 'tilwanirohit@gmail.com', '7691999330', 'FACEBOOK'),
('manit', 'sourabh70', '70', 'sourabh', 'asatisourabh894@gmail.com', '8461903423', 'cshub');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`USER_HANDLE`), ADD UNIQUE KEY `USER_HANDLE` (`USER_HANDLE`), ADD UNIQUE KEY `USER_NAME` (`USER_NAME`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
