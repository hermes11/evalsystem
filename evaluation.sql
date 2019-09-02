-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2019 at 02:17 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evaluation`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_q1`
--

CREATE TABLE `tbl_q1` (
  `q1_id` int(11) NOT NULL,
  `q1_choices` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_q1`
--

INSERT INTO `tbl_q1` (`q1_id`, `q1_choices`) VALUES
(1, 'Satisfied');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_q2`
--

CREATE TABLE `tbl_q2` (
  `q2_id` int(11) NOT NULL,
  `q2_choices` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_q2`
--

INSERT INTO `tbl_q2` (`q2_id`, `q2_choices`) VALUES
(1, 'Strongly Dissatisfied'),
(2, 'Neutral');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_q3`
--

CREATE TABLE `tbl_q3` (
  `q3_id` int(11) NOT NULL,
  `q3_choices` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_q3`
--

INSERT INTO `tbl_q3` (`q3_id`, `q3_choices`) VALUES
(1, 'Strongly Dissatisfied');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_q4`
--

CREATE TABLE `tbl_q4` (
  `q4_id` int(11) NOT NULL,
  `q4_choices` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_q5`
--

CREATE TABLE `tbl_q5` (
  `q5_id` int(11) NOT NULL,
  `q5_choices` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_q5`
--

INSERT INTO `tbl_q5` (`q5_id`, `q5_choices`) VALUES
(1, 'Strongly Satisfied');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_q6`
--

CREATE TABLE `tbl_q6` (
  `q6_id` int(11) NOT NULL,
  `q6_choices` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_q6`
--

INSERT INTO `tbl_q6` (`q6_id`, `q6_choices`) VALUES
(1, 'Neutral');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `age` int(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `age`, `email`, `created_at`) VALUES
(1, 'psalter11', 'psalter', 'Psalter', 'Naruto', 23, 'psalter@gmail.com', '2019-09-02 12:08:57'),
(2, 'hunter11', 'hunter', 'Gon', 'Freecs', 23, 'gon@gmail.com', '2019-09-02 12:15:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_q1`
--
ALTER TABLE `tbl_q1`
  ADD PRIMARY KEY (`q1_id`);

--
-- Indexes for table `tbl_q2`
--
ALTER TABLE `tbl_q2`
  ADD PRIMARY KEY (`q2_id`);

--
-- Indexes for table `tbl_q3`
--
ALTER TABLE `tbl_q3`
  ADD PRIMARY KEY (`q3_id`);

--
-- Indexes for table `tbl_q4`
--
ALTER TABLE `tbl_q4`
  ADD PRIMARY KEY (`q4_id`);

--
-- Indexes for table `tbl_q5`
--
ALTER TABLE `tbl_q5`
  ADD PRIMARY KEY (`q5_id`);

--
-- Indexes for table `tbl_q6`
--
ALTER TABLE `tbl_q6`
  ADD PRIMARY KEY (`q6_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_q1`
--
ALTER TABLE `tbl_q1`
  MODIFY `q1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_q2`
--
ALTER TABLE `tbl_q2`
  MODIFY `q2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_q3`
--
ALTER TABLE `tbl_q3`
  MODIFY `q3_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_q4`
--
ALTER TABLE `tbl_q4`
  MODIFY `q4_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_q5`
--
ALTER TABLE `tbl_q5`
  MODIFY `q5_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_q6`
--
ALTER TABLE `tbl_q6`
  MODIFY `q6_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
