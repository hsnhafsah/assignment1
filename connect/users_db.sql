-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 07:42 PM
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
-- Database: `users_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `username` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `id` int(20) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`username`, `name`, `id`, `email`, `password`) VALUES
('hsnhafsah', 'Hafsah', 2, 'hsnhafsah@gmail.com', '$2y$10$Dz8BbMtv74HagfkrR8ii4uvcba8kQWKEg1qDWUX8tGELB3/8aSQsW'),
('qwerty', 'sdfghjkl;', 8, 'qwert@gmail.com', '$2y$10$XittWHWAb1paITun8nnIrek6Y3HeD2AuyRT3V8bUEvuRdTPV7WycO'),
('H', 'Hawi', 9, 'j@gmail.com', '$2y$10$K7mxMjab2WrSdEMBwbWdMunxAM8ynID53nQqun0PL0dOQM4maCJr.'),
('h', 'Herway', 10, 'h@gmail.com', '$2y$10$XiG/t1L3zLmHn4rraBUy5eiJbTXXAb9YBOR5.rLwY70cElMKOYQbO'),
('peter', 'pint', 14, 'p@gmail.com', '$2y$10$zgBOlq6IdtJyW8bWKi6qLufIJdQcHThaOX1KnrZxXC7.npJeLPbua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
