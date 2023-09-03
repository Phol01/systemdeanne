-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 04:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unilink`
--

-- --------------------------------------------------------

--
-- Table structure for table `activityform`
--

CREATE TABLE `activityform` (
  `no` int(100) NOT NULL,
  `activity_title` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `partner` varchar(100) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `partner_name` varchar(100) NOT NULL,
  `roles` varchar(100) NOT NULL,
  `rationale` varchar(200) NOT NULL,
  `objectives` varchar(255) NOT NULL,
  `budget_source` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activityform`
--

INSERT INTO `activityform` (`no`, `activity_title`, `college`, `program`, `partner`, `start_date`, `end_date`, `partner_name`, `roles`, `rationale`, `objectives`, `budget_source`) VALUES
(1, '', '', 'Bachelor of Science in Industrial Technology', '', NULL, NULL, '', '', '', '', 0),
(2, '', '', 'Bachelor of Science in Computer Engineering', '', NULL, NULL, '', '', '', '', 0),
(3, '', '', 'Bachelor of Science in Computer Science', '', NULL, NULL, '', '', '', '', 0),
(4, '', 'CICS', 'Bachelor of Science in Computer Science', '', NULL, NULL, '', '', '', '', 0),
(5, '', 'CIT', 'Bachelor of Science in Industrial Technology', '', NULL, NULL, '', '', '', '', 0),
(6, 'Graduation Party-Speaker', 'CABEIHM', 'Bachelor of Science in Accountancy', '', NULL, NULL, '', '', '', '', 0),
(7, 'Graduation Party-Speaker', 'CONAHS', 'Bachelor of Science in Nursing', '', NULL, NULL, '', '', '', '', 0),
(8, 'Graduation Party-Speaker fdsfsfsdfsdfsdfsgfsgfgggfsgvfgtdhdh', 'CABEIHM', 'Bachelor of Science in Accountancy', 'international', NULL, NULL, '', '', '', '', 0),
(9, 'deanne', 'CICS', 'Bachelor of Science in Computer Science', 'international', NULL, NULL, '', '', '', '', 0),
(10, 'Graduation Party-Speaker fdsfsfsdfsdfsdfsgfsgfgggfsgvfgtdhdh', 'CICS', 'Bachelor of Science in Computer Science', 'International', NULL, NULL, '', '', '', '', 0),
(11, 'Graduation Party-Speaker fdsfsfsdfsdfsdfsgfsgfgggfsgvfgtdhdh', 'CAS', 'Bachelor of Arts in Communication', 'International', NULL, NULL, '', '', '', '', 0),
(12, 'Graduation Party-Speaker', 'CICS', 'Bachelor of Science in Computer Science', 'International', NULL, NULL, '', '', '', '', 0),
(13, 'deanne', 'CABEIHM', 'Bachelor of Science in Accountancy', '', NULL, NULL, '', '', '', '', 0),
(14, 'deanne', 'CAS', 'Bachelor of Arts in Communication', '', NULL, NULL, '', '', '', '', 0),
(15, 'Graduation Party-Speaker', 'CICS', 'Bachelor of Science in Computer Science', 'International', NULL, NULL, '', '', '', '', 0),
(16, 'Graduation Party-Speaker', 'CICS', 'Bachelor of Science in Computer Science', 'Local', '2023-09-02', '2023-09-04', '', '', 'hmmm', 'hmmm', 0),
(17, 'Tree Planting', 'CTE', 'Bachelor of Secondary Education major in English', 'Local', '2023-09-03', '2023-09-04', '', '', 'hhhh', 'jsjsjs', 0),
(18, 'Seminar of Waste Disposal', 'CAS', 'Bachelor of Arts in Communication', 'Local', '2023-09-04', '2023-09-05', '', '', '444', 'ee4', 0);

-- --------------------------------------------------------

--
-- Table structure for table `localactive`
--

CREATE TABLE `localactive` (
  `id` int(100) NOT NULL,
  `partnerName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `localactive`
--

INSERT INTO `localactive` (`id`, `partnerName`) VALUES
(1, 'RGO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activityform`
--
ALTER TABLE `activityform`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `localactive`
--
ALTER TABLE `localactive`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activityform`
--
ALTER TABLE `activityform`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `localactive`
--
ALTER TABLE `localactive`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
