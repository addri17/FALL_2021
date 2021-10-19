-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 08:36 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aiub`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_students`
--

CREATE TABLE `new_students` (
  `id` int(11) NOT NULL,
  `name1` varchar(75) NOT NULL,
  `name2` varchar(80) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(85) NOT NULL,
  `phoneNumber` varchar(95) NOT NULL,
  `birth_date` varchar(90) NOT NULL,
  `hsc` varchar(90) NOT NULL,
  `ssc` varchar(90) NOT NULL,
  `course` varchar(100) NOT NULL,
  `year1` varchar(32) NOT NULL,
  `session1` varchar(175) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_students`
--

INSERT INTO `new_students` (`id`, `name1`, `name2`, `email`, `gender`, `phoneNumber`, `birth_date`, `hsc`, `ssc`, `course`, `year1`, `session1`) VALUES
(2, 'a', 'e', 'd@gmail.com', 'Male', '555', '2021-10-14', '5', '4', 'PL2', 'y2', 'Fall');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_students`
--
ALTER TABLE `new_students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_students`
--
ALTER TABLE `new_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
