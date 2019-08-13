-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 11:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp_1819`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `password`) VALUES
(1, 'admin', 'Admin=123');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `downloads` int(11) DEFAULT NULL,
  `trn_date` datetime NOT NULL,
  `submittedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lect1subject1`
--

CREATE TABLE `lect1subject1` (
  `id` int(11) NOT NULL,
  `trn_date` datetime DEFAULT NULL,
  `homework` varchar(255) NOT NULL,
  `duedate` datetime DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lect1subject2`
--

CREATE TABLE `lect1subject2` (
  `id` int(11) NOT NULL,
  `trn_date` datetime DEFAULT NULL,
  `homework` varchar(255) NOT NULL,
  `duedate` datetime DEFAULT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lect1subject3`
--

CREATE TABLE `lect1subject3` (
  `id` int(11) NOT NULL,
  `trn_date` datetime DEFAULT NULL,
  `homework` varchar(255) NOT NULL,
  `duedate` datetime DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `trn_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`id`, `username`, `password`, `email`, `phoneno`, `course`, `trn_date`) VALUES
(1, 'shamala', '763bb890eb80cccd178139c8f8fcc2ed772a2446', 'shamala@uthm.edu.my', '0126908051', 'BIS', '2019-05-24 07:32:27'),
(2, 'azma', '4c3503b7c45a778ed07331b5b0d64c8dae232464', 'azma@uthm.edu.my', '0136748855', 'BIS', '2019-05-24 07:33:10'),
(3, 'chuah', '92b692d0c4a381245b7f4ec53ee4056fabb14407', 'cwchuah@uthm.edu.my', '0175880413', 'BIS', '2019-05-24 07:33:41'),
(4, 'sofia', 'd28287563c789dc85f1d500017ecaff479947f48', 'sofianajwa@uthm.edu.my', '0123456789', 'BIS', '2019-05-24 07:34:17'),
(5, 'zubaile', '799f5aaa6bd8c8363bd164a918fd8c62079bc592', 'zubaile@uthm.edu.my', '0197545727', 'BIS', '2019-05-24 07:34:58');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `password`, `email`, `phoneno`, `course`, `trn_date`) VALUES
(1, 'Chai Cheen Shun', 'df5173a6fa4d5e5d751ec170d0ef2b39b3741580', 'gordoninfosec@gmail.com', '01131935208', 'BIS', '2019-05-24 01:25:38'),
(2, 'Joel Ong', 'dd89dbf9b82076e1c4698dd26ffb9a8d84b32a1b', 'joelong@uthmtionghua.graduanalliance.org', '0177630028', 'BIS', '2019-05-24 07:36:45'),
(3, 'Fatimah anisah bt mohd zuhairi', '535648bee4f050f243e588d5231c2e669c8933af', 'ci160004@siswa.uthm.edu.my', '0193204918', 'BIS', '2019-05-24 07:40:13');

-- --------------------------------------------------------

--
-- Table structure for table `sub1homework1version1`
--

CREATE TABLE `sub1homework1version1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(25) NOT NULL,
  `downloads` int(25) NOT NULL,
  `trn_date` datetime DEFAULT NULL,
  `submittedby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub1homework1version2`
--

CREATE TABLE `sub1homework1version2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(25) NOT NULL,
  `downloads` int(25) NOT NULL,
  `trn_date` datetime DEFAULT NULL,
  `submittedby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub1homework1version3`
--

CREATE TABLE `sub1homework1version3` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(25) NOT NULL,
  `downloads` int(25) NOT NULL,
  `trn_date` datetime DEFAULT NULL,
  `submittedby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub2homework1version1`
--

CREATE TABLE `sub2homework1version1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(25) NOT NULL,
  `downloads` int(25) NOT NULL,
  `trn_date` datetime DEFAULT NULL,
  `submittedby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub2homework1version2`
--

CREATE TABLE `sub2homework1version2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(25) NOT NULL,
  `downloads` int(25) NOT NULL,
  `trn_date` datetime DEFAULT NULL,
  `submittedby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub2homework1version3`
--

CREATE TABLE `sub2homework1version3` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(25) NOT NULL,
  `downloads` int(25) NOT NULL,
  `trn_date` datetime DEFAULT NULL,
  `submittedby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub3homework1version1`
--

CREATE TABLE `sub3homework1version1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(25) NOT NULL,
  `downloads` int(25) NOT NULL,
  `trn_date` datetime DEFAULT NULL,
  `submittedby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub3homework1version2`
--

CREATE TABLE `sub3homework1version2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(25) NOT NULL,
  `downloads` int(25) NOT NULL,
  `trn_date` datetime DEFAULT NULL,
  `submittedby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub3homework1version3`
--

CREATE TABLE `sub3homework1version3` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(25) NOT NULL,
  `downloads` int(25) NOT NULL,
  `trn_date` datetime DEFAULT NULL,
  `submittedby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lect1subject1`
--
ALTER TABLE `lect1subject1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lect1subject2`
--
ALTER TABLE `lect1subject2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lect1subject3`
--
ALTER TABLE `lect1subject3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub1homework1version1`
--
ALTER TABLE `sub1homework1version1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub1homework1version2`
--
ALTER TABLE `sub1homework1version2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub1homework1version3`
--
ALTER TABLE `sub1homework1version3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub2homework1version1`
--
ALTER TABLE `sub2homework1version1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub2homework1version2`
--
ALTER TABLE `sub2homework1version2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub2homework1version3`
--
ALTER TABLE `sub2homework1version3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub3homework1version1`
--
ALTER TABLE `sub3homework1version1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub3homework1version2`
--
ALTER TABLE `sub3homework1version2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub3homework1version3`
--
ALTER TABLE `sub3homework1version3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `lect1subject1`
--
ALTER TABLE `lect1subject1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lect1subject2`
--
ALTER TABLE `lect1subject2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lect1subject3`
--
ALTER TABLE `lect1subject3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub1homework1version1`
--
ALTER TABLE `sub1homework1version1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub1homework1version2`
--
ALTER TABLE `sub1homework1version2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sub1homework1version3`
--
ALTER TABLE `sub1homework1version3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub2homework1version1`
--
ALTER TABLE `sub2homework1version1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub2homework1version2`
--
ALTER TABLE `sub2homework1version2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub2homework1version3`
--
ALTER TABLE `sub2homework1version3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub3homework1version1`
--
ALTER TABLE `sub3homework1version1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub3homework1version2`
--
ALTER TABLE `sub3homework1version2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub3homework1version3`
--
ALTER TABLE `sub3homework1version3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
