-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2020 at 10:20 AM
-- Server version: 10.3.20-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_event`
--

CREATE TABLE `add_event` (
  `id` int(11) NOT NULL,
  `eventname` varchar(65) NOT NULL,
  `eventdate` date NOT NULL,
  `starttime` varchar(6) NOT NULL,
  `endtime` varchar(6) NOT NULL,
  `attendance` text NOT NULL DEFAULT '{"attendance":[]}'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_event`
--

INSERT INTO `add_event` (`id`, `eventname`, `eventdate`, `starttime`, `endtime`, `attendance`) VALUES
(11, 'feeding program', '2018-10-29', '22:57', '10:57', '{\"attendance\":[{\"id\":\"90\",\"present\":\"08:00\",\"dismissal\":\"\"},{\"id\":\"91\",\"present\":\"08:10\",\"dismissal\":\"\"},{\"id\":\"94\",\"present\":\"10:02\",\"dismissal\":\"\"}]}'),
(15, 'Test Event 2', '2020-01-30', '08:14', '23:21', '{\"attendance\":[{\"id\":\"93\",\"present\":\"10:00\",\"dismissal\":\"12:00\"},{\"id\":\"95\",\"present\":\"14:00\",\"dismissal\":\"\"}]}');

-- --------------------------------------------------------

--
-- Table structure for table `add_volunteer`
--

CREATE TABLE `add_volunteer` (
  `id` int(11) NOT NULL,
  `firstname` varchar(65) NOT NULL,
  `middlename` varchar(65) NOT NULL,
  `lastname` varchar(65) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `contact` varchar(65) NOT NULL,
  `address` varchar(65) NOT NULL,
  `account_status` varchar(65) NOT NULL,
  `photo` varchar(65) DEFAULT NULL,
  `status` varchar(65) NOT NULL,
  `skills` varchar(65) NOT NULL,
  `education` varchar(65) NOT NULL,
  `profession` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_volunteer`
--

INSERT INTO `add_volunteer` (`id`, `firstname`, `middlename`, `lastname`, `birthdate`, `gender`, `email`, `contact`, `address`, `account_status`, `photo`, `status`, `skills`, `education`, `profession`) VALUES
(22, 'Test', 'Test', 'Test', '2000-01-01', '1', 'test@test.com', '0999848199941', 'Test098', '1', NULL, '1', 'Test', 'Test', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `qrcodes`
--

CREATE TABLE `qrcodes` (
  `id` int(11) NOT NULL,
  `qrImg` varchar(250) NOT NULL,
  `qrlink` text NOT NULL,
  `qrfirstname` varchar(65) NOT NULL,
  `qrmiddlename` varchar(65) NOT NULL,
  `qrlastname` varchar(65) NOT NULL,
  `qrbirthdate` date NOT NULL,
  `qrgender` varchar(11) NOT NULL,
  `qrfathersname` varchar(65) NOT NULL,
  `qrmothersname` varchar(65) NOT NULL,
  `qrbloodtype` varchar(6) NOT NULL,
  `qrcontactperson` varchar(50) NOT NULL,
  `qraddress` varchar(65) NOT NULL,
  `qraccountstatus` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qrcodes`
--

INSERT INTO `qrcodes` (`id`, `qrImg`, `qrlink`, `qrfirstname`, `qrmiddlename`, `qrlastname`, `qrbirthdate`, `qrgender`, `qrfathersname`, `qrmothersname`, `qrbloodtype`, `qrcontactperson`, `qraddress`, `qraccountstatus`) VALUES
(90, 'aasdasdasdasd1471791822.png', 'localhost/qrcodeaasdasdasdasd1471791822.png', 'aasdasd', 'asdasd', 'asdasd', '2018-11-29', '2', 'dasdas', 'aasdad', '2', '0', 'asdasd', '2'),
(91, 'jeffjeff944076395.png', 'localhost/qrcodejeffjeff944076395.png', 'jeff', 'jef', 'jeff', '2019-11-29', '2', 'a', 'Roberto Oledan', '2', '123456', 'usa', '1'),
(92, 'sdasda274414491.png', 'localhost/qrcodesdasda274414491.png', 'sdasd', 'a', 'a', '2018-11-29', '2', 'o', 'Mildred Oledan', '2', '2', 'a', '2'),
(93, 'DanTest948417005.png', 'localhost/qrcodeDanTest948417005.png', 'Dan', 'Mazo', 'Test', '2016-10-13', '1', 'Test', 'Test', '1', 'Test', 'Test', '1'),
(94, 'ExampleTest1158192610.png', 'localhost/qrcodeExampleTest1158192610.png', 'Example', 'X', 'Test', '2009-09-13', '1', 'Test', 'Test', '1', 'Test', 'Test', '1'),
(95, 'BorsGum1150493517.png', 'localhost/qrcodeBorsGum1150493517.png', 'Bors', 'Gen', 'Gum', '1998-10-14', '1', 'Test', 'Test', '1', 'Test', 'Test', '1');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `firstname` varchar(65) NOT NULL,
  `middlename` varchar(65) NOT NULL,
  `lastname` varchar(65) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(65) NOT NULL,
  `contact` int(12) NOT NULL,
  `address` varchar(65) NOT NULL,
  `account_status` varchar(65) NOT NULL,
  `photo` varchar(65) DEFAULT NULL,
  `status` varchar(65) NOT NULL,
  `account_type` varchar(11) NOT NULL,
  `education` varchar(255) NOT NULL,
  `skills` varchar(65) NOT NULL,
  `profession` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `password`, `firstname`, `middlename`, `lastname`, `birthdate`, `gender`, `email`, `contact`, `address`, `account_status`, `photo`, `status`, `account_type`, `education`, `skills`, `profession`) VALUES
(27, 'jeff', 'oledan', 'jeff', 'oledan', 'oledan', '2018-10-28', '2', 'jeffoledan321@gmail.com', 123456, 'none', '1', 'avatar.png', '1', '1', 'none', 'none', 'none'),
(29, 'testuseradmin', 'testpass', 'testadmin', 'testadmin', 'testadmin', '2014-10-28', '1', 'test@test123.com', 22200, 'Test098', '1', NULL, '1', '2', 'test', 'test', 'tedt'),
(30, 'testadmin', 'testpass', 'testadmin', 'testadmin', 'testadmin', '2015-09-27', '1', 'test@test123.com', 22200, 'test', '1', NULL, '1', '2', 'test', 'test', 'tedt'),
(31, 'testuserstaff', 'testpass', 'teststaff', 'teststaff', 'teststaff', '2013-09-27', '1', 'teststaff@staff.com', 22200, 'test', '1', NULL, '1', '3', 'test', 'test', 'tedt'),
(32, 'teststaff', 'testpass', 'teststaff', 'teststaff', 'teststaff', '2011-08-25', '1', 'teststaff@staff.com', 22200, 'teststaff', '1', NULL, '1', '3', 'teststaff', 'teststaff', 'teststaff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_event`
--
ALTER TABLE `add_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_volunteer`
--
ALTER TABLE `add_volunteer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qrcodes`
--
ALTER TABLE `qrcodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_event`
--
ALTER TABLE `add_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `add_volunteer`
--
ALTER TABLE `add_volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `qrcodes`
--
ALTER TABLE `qrcodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
