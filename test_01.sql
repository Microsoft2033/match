-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 01:30 PM
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
-- Database: `test_01`
--

-- --------------------------------------------------------

--
-- Table structure for table `formtwo`
--

CREATE TABLE `formtwo` (
  `id` int(20) NOT NULL,
  `arrivaldate` varchar(200) NOT NULL,
  `returndate` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formtwo`
--

INSERT INTO `formtwo` (`id`, `arrivaldate`, `returndate`, `email`) VALUES
(15, 'h', 'ko', 'klo'),
(16, 'fj', 'io', ''),
(17, 'fj', 'io', ''),
(18, 'jj', 'klkl', 'nmjk'),
(19, 'hh', 'jkjk', 'jhjh'),
(20, 'hh', 'mk', 'jkj@gmail.com'),
(21, 'jksd', '89', 'eop'),
(22, 'ui', 'op', 'loi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formtwo`
--
ALTER TABLE `formtwo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formtwo`
--
ALTER TABLE `formtwo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
