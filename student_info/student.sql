-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 25, 2023 at 11:27 AM
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
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `id` int(11) NOT NULL,
  `enr` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `course` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`id`, `enr`, `name`, `email`, `password`, `contact`, `course`) VALUES
(1, '101', 'Ayushi Mehta', 'ayushi@gmail.com', '12345', '1234567890', 'BSCIT'),
(2, '102', 'Hetal Bharadiya', 'hetal@gmail.com', '12345', '1234567890', 'BSCIT'),
(3, '103', 'Kinjal Barot', 'kinjal@gmail.com', '12345', '1234567890', 'BSCIT'),
(4, '104', 'Mosam Kumbhani', 'mosam@gmail.com', '12345', '1234567890', 'BSCIT'),
(5, '105', 'Feny Khant', 'feny@gmail.com', '12345', '1234567890', 'BSCIT'),
(6, '106', 'Rohina Parasara', 'rohina@gmail.com', '12345', '1234567890', 'BSCIT'),
(7, '107', 'Kiran Prasad', 'kiran@gmail.com', '12345', '1234567890', 'BSCIT'),
(8, '108', 'Anjali Parmar', 'anjali@gmail.com', '12345', '1234567890', 'BBA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stud`
--
ALTER TABLE `stud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stud`
--
ALTER TABLE `stud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
