-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 01:41 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `best_vaccine`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `lct_id` int(12) NOT NULL,
  `lct_name` varchar(64) DEFAULT NULL,
  `lct_max` int(12) NOT NULL DEFAULT 0,
  `lct_capa` int(12) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`lct_id`, `lct_name`, `lct_max`, `lct_capa`) VALUES
(1, 'สภานีกลางบางซื่อ', 0, 0),
(2, 'โรงพยาบาลบางโพ', 0, 0),
(3, 'โรงพยาบาลรามาธิบดี', 0, 0),
(4, 'โรงพยาบาลธนบุรี 2', 0, 0),
(5, 'โรงพยาบาลบางพลี', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `queues`
--

CREATE TABLE `queues` (
  `que_idcard` varchar(20) NOT NULL,
  `que_no` int(12) NOT NULL DEFAULT 0,
  `locationid` int(12) NOT NULL DEFAULT 0,
  `que_status` enum('stable','cancel') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `queues`
--

INSERT INTO `queues` (`que_idcard`, `que_no`, `locationid`, `que_status`) VALUES
('1446956215912', 1002, 2, 'stable'),
('1869900440502', 1003, 2, 'stable'),
('9893488537869', 1001, 3, 'stable'),
('NULL', 1001, 2, 'cancel');

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `res_idcard` varchar(20) NOT NULL,
  `res_fname` varchar(64) DEFAULT NULL,
  `res_lname` varchar(64) DEFAULT NULL,
  `res_age` int(12) NOT NULL DEFAULT 0,
  `res_address` varchar(64) DEFAULT NULL,
  `res_phone` varchar(20) DEFAULT NULL,
  `res_sex` varchar(64) DEFAULT NULL,
  `res_birth` date NOT NULL,
  `res_disease` varchar(64) DEFAULT NULL,
  `res_email` varchar(128) DEFAULT NULL,
  `res_getvac` tinyint(1) NOT NULL,
  `res_vactype` varchar(64) DEFAULT NULL,
  `res_needles` int(12) NOT NULL DEFAULT 0,
  `res_locationid` int(12) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`res_idcard`, `res_fname`, `res_lname`, `res_age`, `res_address`, `res_phone`, `res_sex`, `res_birth`, `res_disease`, `res_email`, `res_getvac`, `res_vactype`, `res_needles`, `res_locationid`) VALUES
('1446956215912', 'ศักรินทร์', 'สิมมา', 21, 'dczxczxc', '0944353453', 'male', '2021-11-01', 'ไม่มี', 'Test112233@gmail.com', 0, 'Pifzer', 2, 2),
('1869900440502', 'ศักรินทร์', 'สิมมา', 20, 'sdaxzc', '0616450118', 'male', '2021-11-03', 'ไม่มี', 'fullyz1532@gmail.com', 0, 'AstraZeneca', 2, 2),
('9893488537869', 'ฟหกหฟ', 'ผปแผป', 21, 'xddzsd', '0989455467', 'male', '2021-11-11', 'โรคหัวใจและหลอดเลือด', 'Test12345@gmail.com', 0, 'AstraZeneca', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `vac_id` int(12) NOT NULL,
  `vac_name` varchar(64) DEFAULT NULL,
  `vac_detail` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`vac_id`, `vac_name`, `vac_detail`) VALUES
(1, 'Sinovac', NULL),
(2, 'AstraZeneca', NULL),
(3, 'Pifzer', NULL),
(4, 'Moderna', NULL),
(5, 'Sinopharm', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`lct_id`);

--
-- Indexes for table `queues`
--
ALTER TABLE `queues`
  ADD PRIMARY KEY (`que_idcard`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`res_idcard`),
  ADD UNIQUE KEY `res_phone` (`res_phone`),
  ADD UNIQUE KEY `res_email` (`res_email`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`vac_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `lct_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `vac_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
