-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 02:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akuphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `akubukaphp`
--

CREATE TABLE `akubukaphp` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akubukaphp`
--

INSERT INTO `akubukaphp` (`id`, `username`, `email`, `password`) VALUES
(1, 'ik8i', 'enderjhass@gmail.com', '123'),
(3, 'alifian', 'jjd@gmail.com', 'dassad'),
(8, 'alifiankasf', 'mda@gmail.com', 'afa'),
(9, 'brokas', 'brokas@gmail.com', 'brokas23'),
(10, '', '', ''),
(11, 'adasfca', 'ibnsd@gmail.com', 'acrgber'),
(12, 'casc', 'asfafg@gmail.com', 'b sgh'),
(13, 'afcasvsa', 'vavggea@gmail.com', 'avdg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akubukaphp`
--
ALTER TABLE `akubukaphp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akubukaphp`
--
ALTER TABLE `akubukaphp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
