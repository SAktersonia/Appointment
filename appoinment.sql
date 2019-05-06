-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 10:13 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appoinment`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(100) NOT NULL,
  `Patientname` varchar(100) NOT NULL,
  `Phone` int(13) NOT NULL,
  `date` date NOT NULL,
  `doctorid` int(10) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `Patientname`, `Phone`, `date`, `doctorid`, `message`) VALUES
(1, 'shamima', 2147483647, '2018-06-19', 1235, 'hi'),
(2, 'shamima rahmah', 2147483647, '2018-06-20', 123, 'hellow'),
(3, 'rumi', 167263, '2018-07-17', 1223, 'legs pain');

-- --------------------------------------------------------

--
-- Table structure for table `dr`
--

CREATE TABLE `dr` (
  `id` int(11) NOT NULL,
  `drDep` varchar(100) NOT NULL,
  `drName` varchar(100) NOT NULL,
  `drID` varchar(100) NOT NULL,
  `drDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dr`
--

INSERT INTO `dr` (`id`, `drDep`, `drName`, `drID`, `drDesc`) VALUES
(1, 'Medicin', 'Dr Shamim Nath ', '101', 'Dr Vishwambhar Nath is Chief of Urology,\r\nSenior Consultant Urologist &\r\nRenal Transplant Surgeon at Continental Hospitals.\r\nHe has over 3 decades of experience in Urology with\r\n24 years as Consultant – in India, UK and UAE.\r\nDr. Nath has been appointed in various educational positions throughout his career,\r\nas Professor of Urology, Post Graduate Teacher of Urology and MCh Examiner.\r\nDr. Nath was an invited faculty for various national and international conferences.\r\nHe has written over 50 scientific papers and publications in peer reviewed journals and major conferences.'),
(2, 'Heart', 'Dr Vish Nath', '102', 'Dr Vishwambhar Nath is Chief of Urology,\r\nSenior Consultant Urologist &\r\nRenal Transplant Surgeon at Continental Hospitals.\r\nHe has over 3 decades of experience in Urology with\r\n24 years as Consultant – in India, UK and UAE.\r\nDr. Nath has been appointed in various educational positions throughout his career,\r\nas Professor of Urology, Post Graduate Teacher of Urology and MCh Examiner.\r\nDr. Nath was an invited faculty for various national and international conferences.\r\nHe has written over 50 scientific papers and publications in peer reviewed journals and major conferences.'),
(3, 'Kidney', 'Dr Vishwambhar Nath ', '103', 'Dr Vishwambhar Nath is Chief of Urology,\r\nSenior Consultant Urologist &\r\nRenal Transplant Surgeon at Continental Hospitals.\r\nHe has over 3 decades of experience in Urology with\r\n24 years as Consultant – in India, UK and UAE.\r\nDr. Nath has been appointed in various educational positions throughout his career,\r\nas Professor of Urology, Post Graduate Teacher of Urology and MCh Examiner.\r\nDr. Nath was an invited faculty for various national and international conferences.\r\nHe has written over 50 scientific papers and publications in peer reviewed journals and major conferences.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `password`) VALUES
(1, 'shamima', '123'),
(2, 'q', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dr`
--
ALTER TABLE `dr`
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
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dr`
--
ALTER TABLE `dr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
