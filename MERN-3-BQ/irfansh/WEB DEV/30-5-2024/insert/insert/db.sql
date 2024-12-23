-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 09:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `dob` date NOT NULL,
  `color` varchar(300) NOT NULL,
  `luckyno` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `skill` varchar(50) NOT NULL,
  `province` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `password`, `email`, `dob`, `color`, `luckyno`, `gender`, `skill`, `province`) VALUES
(1, 'ahmed', '123', 'rubabjavaid@ucp.edu.pk', '0000-00-00', '', 0, '', '', ''),
(3, 'ahmed', '34444', 'rubabjavaid@ucp.edu.pk', '0000-00-00', '', 0, '', '', ''),
(4, 'asign', 'wweerr', 'abc@fmail.com', '0000-00-00', '', 0, '', '', ''),
(5, 'ahmed', '23454', 'rubabjavaid@ucp.edu.pk', '2024-05-15', '', 0, '', '', ''),
(6, 'asign', '233', 'abc@fmail.com', '2024-05-22', '', 0, '', '', ''),
(7, 'ahmed', '12345', 'rubabjavaid@ucp.edu.pk', '2024-05-08', '', 0, '', '', ''),
(8, 'ahmed', '3434', 'rubabjavaid@ucp.edu.pk', '2024-05-17', '#834444', 2, 'on', '', ''),
(9, 'saba', '43445', 'rubabjavaid@ucp.edu.pk', '2024-05-24', '#000000', 7, 'female', '', ''),
(10, 'sara ahmad', 'asdf12', 'rubabjavaid@ucp.edu.pk', '2024-04-30', '#a50909', 6, 'female', '', ''),
(11, 'saba ', '1232454', 'abc@fgmail.com', '2024-04-29', '#bea423', 6, 'on', '', ''),
(12, 'saleem', 'qwerty@gmail.com', 'qwerty@gmail.com', '2024-05-09', '#963131', 90, 'male', '', 'KPK'),
(13, 'abc', '1234', 'qwerty@gmail.com', '2024-05-09', '#000000', 90, 'male', 'Array', 'Sindh'),
(14, 'abc12', '123344', 'qwerty@gmail.com', '2024-05-31', '#3db351', 9, 'male', 'Reading Book,Playing', 'KPK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
