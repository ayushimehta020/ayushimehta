-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 06:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `salary` varchar(10) NOT NULL,
  `emp_leave` varchar(2) NOT NULL,
  `joining_date` date NOT NULL,
  `resign_data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_name`, `department`, `salary`, `emp_leave`, `joining_date`, `resign_data`) VALUES
(1, 'Ayushi Mehta', 'Sales', '7000', '10', '2016-12-03', '2023-02-01'),
(2, 'Jagruti Zala', 'Marketing', '3000', '7', '2019-10-17', '2023-02-18'),
(3, 'Krishna Sadikot', 'IT Admin', '1900', '15', '2019-04-12', '2022-12-02'),
(4, 'Khushi Dholakiya', 'Sales', '1700', '14', '2019-02-01', '2022-12-02'),
(5, 'Lakshmi Shah', 'Marketing', '2200', '11', '2017-09-12', '2023-02-01'),
(6, 'Kashish Mahida', 'Sales', '3000', '7', '2022-07-04', '2023-02-01'),
(7, 'Pooja Khant', 'Marketing', '3200', '14', '2019-02-01', '2023-02-01'),
(8, 'Karishma Jalavani', 'IT Admin', '4500', '13', '2019-06-14', '2023-02-19'),
(9, 'Hetal Sheikh', 'IT', '1990', '4', '2020-02-14', '2023-02-02'),
(10, 'Kaveri Bharadiya', 'Marketing', '1600', '3', '2018-02-09', '2023-02-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
