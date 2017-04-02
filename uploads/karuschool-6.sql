-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2017 at 01:24 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karuschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentid` int(11) NOT NULL,
  `added_by` int(11) NOT NULL COMMENT 'registration id of the person added',
  `comment` text NOT NULL,
  `added_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentid`, `added_by`, `comment`, `added_time`) VALUES
(1, 3, '', '2017-01-27 20:54:35'),
(2, 3, '', '2017-01-27 20:56:18'),
(3, 3, '', '2017-01-27 21:02:04'),
(4, 3, '', '2017-01-27 21:25:42'),
(5, 3, '', '2017-01-27 21:30:26'),
(6, 3, '', '2017-01-27 21:32:32'),
(7, 3, '', '2017-01-27 21:33:13'),
(8, 3, '', '2017-01-27 21:35:39'),
(9, 3, '', '2017-01-27 21:35:41'),
(10, 3, '', '2017-01-27 21:41:27'),
(11, 3, '', '2017-01-27 21:41:32'),
(12, 3, '', '2017-01-27 21:48:35'),
(13, 3, '', '2017-01-27 23:43:17'),
(14, 3, '', '2017-01-28 05:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `downloadid` int(11) NOT NULL,
  `registrationid` int(11) NOT NULL,
  `eventid` int(11) NOT NULL,
  `fileid` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Eventid` int(11) NOT NULL,
  `Eventname` varchar(30) NOT NULL,
  `Eventdetails` text NOT NULL,
  `registrationid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Eventid`, `Eventname`, `Eventdetails`, `registrationid`) VALUES
(1, 'first', '', 3),
(2, 'first', 'this is the first attempt\r\n', 3);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `registrationid` int(11) NOT NULL,
  `Eventid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` varchar(30) NOT NULL,
  `uploadtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `logid` int(11) NOT NULL,
  `registrationid` int(11) NOT NULL,
  `logintime` datetime NOT NULL,
  `logouttime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`logid`, `registrationid`, `logintime`, `logouttime`) VALUES
(9, 20, '2017-01-25 13:28:24', '2017-01-25 15:24:46'),
(10, 21, '2017-01-25 15:36:01', '2017-01-25 15:36:53'),
(11, 3, '2017-01-25 15:43:48', '2017-01-25 15:44:18'),
(12, 3, '2017-01-25 15:48:56', '2017-01-25 17:19:26'),
(13, 21, '2017-01-25 15:48:39', '2017-01-25 17:19:54'),
(14, 20, '2017-01-25 17:36:34', '2017-01-25 18:24:03'),
(15, 3, '2017-01-25 18:25:25', '2017-01-25 18:29:32'),
(16, 3, '2017-01-26 09:30:31', '2017-01-26 09:38:32'),
(17, 21, '2017-01-26 09:38:45', '2017-01-26 10:06:50'),
(18, 20, '2017-01-26 17:14:26', '2017-01-26 17:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `registrationid` int(4) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `type` varchar(15) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`registrationid`, `firstname`, `lastname`, `dob`, `gender`, `email`, `password`, `type`, `status`, `role`) VALUES
(1, 'c', 'c', '10-11-2016', 'male', 'as@gmail.com', 'cv ', 'student', 'Accepted', NULL),
(2, 'xfv', 'dfvb', '10-05-2016', 'male', 'b@gmail.com', 'gh ', 'student', 'Accepted', NULL),
(3, 'fg', 'fg', '11-07-2016', 'male', 'baby@gmail.com', '1234567', 'teacher', 'active', 3),
(4, 'fg', 'fg', '10-06-2016', 'male', 'bn@gmail.com', 'nm ', 'student', 'Accepted', NULL),
(6, 'xdv', 'xv', '10-17-2016', 'male', 'bvb@gmail.com', 'vb', 'student', 'suspended', NULL),
(7, 'as', 'as', '10-24-2016', 'male', 'cv@gmail.com', 'cv', 'student', 'Accepted', NULL),
(8, 'zzx', 'zzx', '10-03-2016', 'male', 'cvcv@gmail.com', 'xc ', 'student', 'Accepted', NULL),
(9, 'sara', '2ee', '10-24-2016', 'male', 'd@gmail.com', 'ds', 'student', 'Accepted', NULL),
(10, 'dfd', 'hjy', '10-12-2000', 'male', 'der@gmail.com', 'lop', 'parent', 'Accepted', NULL),
(12, 'df', 'dfgdgdfg', '10-14-2003', 'male', 'fgdf@gmail.com', 'mkl', 'student', 'Accepted', NULL),
(15, 'df', 'sdf', '10-04-2016', 'male', 'ga@gmail.com', 'fg ', 'student', 'suspended', 1),
(16, 'karishna', 'gobin', '10-07-2016', 'male', 'gobin@gmail.com', 'vb', 'parent', 'Accepted', NULL),
(17, 'cfb', 'cgb', '10-04-2016', 'male', 'h@gmail.com', '1234567', 'student', 'Active', 1),
(18, 'mala', 'malti', '11-07-2016', 'female', 'mala@gmail.com', '1234567', 'parent', 'Pending', 2),
(19, 'mary', 'lann', '10-06-1999', 'male', 'mary@gmail.com', 'mary ', 'student', 'Rejected', NULL),
(20, 'karishma', 'gobindoo', '11-19-1992', 'female', 'tousa.gobin@gmail.com', '1234567', 'admin', 'Active', 4),
(21, 'karishma', 'zzx', '10-11-2016', 'male', 'v@gmail.com', '1234567', 'student', 'Active', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentid`),
  ADD KEY `fk_commentregistrationid` (`added_by`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`downloadid`),
  ADD KEY `fk_downloadregistrationid` (`registrationid`),
  ADD KEY `fk_downloadfileid` (`fileid`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Eventid`),
  ADD KEY `fk_eventregistrationid` (`registrationid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_filesregistrationid` (`registrationid`),
  ADD KEY `fk_fileseventid` (`Eventid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logid`),
  ADD KEY `fk_registrationid` (`registrationid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`registrationid`),
  ADD UNIQUE KEY `registrationid` (`registrationid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `downloadid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `Eventid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `registrationid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_commentregistrationid` FOREIGN KEY (`added_by`) REFERENCES `registration` (`registrationid`) ON DELETE CASCADE;

--
-- Constraints for table `download`
--
ALTER TABLE `download`
  ADD CONSTRAINT `fk_downloadfileid` FOREIGN KEY (`fileid`) REFERENCES `files` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_downloadregistrationid` FOREIGN KEY (`registrationid`) REFERENCES `registration` (`registrationid`) ON DELETE CASCADE;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `fk_eventregistrationid` FOREIGN KEY (`registrationid`) REFERENCES `registration` (`registrationid`) ON DELETE CASCADE;

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `fk_fileseventid` FOREIGN KEY (`Eventid`) REFERENCES `event` (`Eventid`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_filesregistrationid` FOREIGN KEY (`registrationid`) REFERENCES `registration` (`registrationid`) ON DELETE CASCADE;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `fk_registrationid` FOREIGN KEY (`registrationid`) REFERENCES `registration` (`registrationid`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
