-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 06:58 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

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
-- Table structure for table `add_director`
--

CREATE TABLE `add_director` (
  `id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `firstname` varchar(65) NOT NULL,
  `middlename` varchar(65) NOT NULL,
  `lastname` varchar(65) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `contact` int(11) NOT NULL,
  `address` varchar(65) NOT NULL,
  `account_status` varchar(65) NOT NULL,
  `photo` varchar(65) NOT NULL,
  `status` varchar(65) NOT NULL,
  `profession` varchar(65) NOT NULL,
  `education` varchar(65) NOT NULL,
  `skills` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_director`
--

INSERT INTO `add_director` (`id`, `username`, `password`, `firstname`, `middlename`, `lastname`, `birthdate`, `gender`, `email`, `contact`, `address`, `account_status`, `photo`, `status`, `profession`, `education`, `skills`) VALUES
(36, 'shaneabs', 'asdasd', 'jef', 'jeferson', 'jef', '2018-11-30', '2', 'shanyz15@sdasd', 2147483647, 'sadad', '2', '', 'q', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `add_event`
--

CREATE TABLE `add_event` (
  `id` int(11) NOT NULL,
  `eventname` varchar(65) NOT NULL,
  `eventdate` date NOT NULL,
  `starttime` varchar(6) NOT NULL,
  `endtime` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `add_staff`
--

CREATE TABLE `add_staff` (
  `id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `firstname` varchar(65) NOT NULL,
  `middlename` varchar(65) NOT NULL,
  `lastname` varchar(65) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `contact` int(11) NOT NULL,
  `address` varchar(65) NOT NULL,
  `account_type` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `contact` int(65) NOT NULL,
  `address` varchar(65) NOT NULL,
  `account_status` varchar(65) NOT NULL,
  `photo` varchar(65) NOT NULL,
  `status` varchar(65) NOT NULL,
  `skills` varchar(65) NOT NULL,
  `education` varchar(65) NOT NULL,
  `profession` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_volunteer`
--

INSERT INTO `add_volunteer` (`id`, `firstname`, `middlename`, `lastname`, `birthdate`, `gender`, `email`, `contact`, `address`, `account_status`, `photo`, `status`, `skills`, `education`, `profession`) VALUES
(21, 'e', 'jef', 'jef', '2018-10-30', '2', 'shanyz15@gmail.com', 132, 'usa', '1', 'avatar5.png', '2', 'q', 'pogi', 'Game Developer');

-- --------------------------------------------------------

--
-- Table structure for table `director_profile`
--

CREATE TABLE `director_profile` (
  `education` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `motto` varchar(500) NOT NULL,
  `id` int(11) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `director_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `director_profile`
--

INSERT INTO `director_profile` (`education`, `location`, `skills`, `motto`, `id`, `profession`, `director_id`) VALUES
('ffa', 'ffa', 'fa', 'fa', 15, 'ga', 36);

-- --------------------------------------------------------

--
-- Table structure for table `profileimg`
--

CREATE TABLE `profileimg` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `qrgender` varchar(6) NOT NULL,
  `qrfathersname` varchar(65) NOT NULL,
  `qrmothersname` varchar(65) NOT NULL,
  `qrbloodtype` varchar(4) NOT NULL,
  `qrcontactperson` int(11) NOT NULL,
  `qraddress` varchar(65) NOT NULL,
  `qraccountstatus` varchar(11) NOT NULL,
  `photo` varchar(65) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qrcodes`
--

INSERT INTO `qrcodes` (`id`, `qrImg`, `qrlink`, `qrfirstname`, `qrmiddlename`, `qrlastname`, `qrbirthdate`, `qrgender`, `qrfathersname`, `qrmothersname`, `qrbloodtype`, `qrcontactperson`, `qraddress`, `qraccountstatus`, `photo`) VALUES
(71, 'asdasOledan1522279524.png', 'localhost/qrcodeasdasOledan1522279524.png', 'asdas', 'sdas', 'Oledan', '2017-10-29', '2', 'jeff', 'a', '2', 2, 'usa', '1', '');

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
  `photo` varchar(65) NOT NULL,
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
(25, 'dsadad', 'dasda', 'dsada', 'dasda', 'dsada', '2019-10-31', '1', 'dasdad@gmail', 123456789, 'sadadad', '1', 'avatar.png', '1', '2', 'sad', 'asda', 'sadadads');

-- --------------------------------------------------------

--
-- Table structure for table `staff_profile`
--

CREATE TABLE `staff_profile` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `motto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_profile`
--

INSERT INTO `staff_profile` (`id`, `name`, `work`, `education`, `location`, `skills`, `motto`) VALUES
(3, 'jeff@sds', 'jeff', 'jeff', 'jeff', 'jeff', 'jeff'),
(4, 'jeff@sds', 'jeff', 'jeff', 'jeff', 'jeff', 'jeff');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(65) NOT NULL,
  `lastname` varchar(65) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_director`
--
ALTER TABLE `add_director`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_event`
--
ALTER TABLE `add_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_staff`
--
ALTER TABLE `add_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_volunteer`
--
ALTER TABLE `add_volunteer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `director_profile`
--
ALTER TABLE `director_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `director_id` (`director_id`);

--
-- Indexes for table `profileimg`
--
ALTER TABLE `profileimg`
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
-- Indexes for table `staff_profile`
--
ALTER TABLE `staff_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_director`
--
ALTER TABLE `add_director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `add_event`
--
ALTER TABLE `add_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `add_staff`
--
ALTER TABLE `add_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_volunteer`
--
ALTER TABLE `add_volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `director_profile`
--
ALTER TABLE `director_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `profileimg`
--
ALTER TABLE `profileimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qrcodes`
--
ALTER TABLE `qrcodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `staff_profile`
--
ALTER TABLE `staff_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `director_profile`
--
ALTER TABLE `director_profile`
  ADD CONSTRAINT `director_profile_ibfk_1` FOREIGN KEY (`director_id`) REFERENCES `add_director` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
