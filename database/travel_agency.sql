-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 08:41 PM
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
-- Database: `travel_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `boooking`
--

CREATE TABLE `boooking` (
  `id_booking` int(11) NOT NULL,
  `fullName` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `mySelect` varchar(10) NOT NULL,
  `guests` int(11) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `boooking`
--

INSERT INTO `boooking` (`id_booking`, `fullName`, `email`, `phone`, `address`, `mySelect`, `guests`, `arrivals`, `leaving`) VALUES
(1, 'Mohamed Razzouq', 'Mohamedrazzouq3110@gmail.com', '9876536278', 'jwshgd ,w dyw ', 'option2', 2, '2023-07-14', '2023-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `destination` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `destination`) VALUES
(3, 'Rabat'),
(5, 'Agadir'),
(6, 'Rabat'),
(7, 'Agadir'),
(8, 'Tanger'),
(9, 'Fes'),
(10, 'Marrakech'),
(11, 'Mekness'),
(12, 'CHefchaouen'),
(13, 'Ifran'),
(14, 'Essaouira');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `id` int(11) NOT NULL,
  `driver_name` varchar(30) NOT NULL,
  `driver_phone_number` varchar(30) NOT NULL,
  `driver_address` varchar(50) NOT NULL,
  `bus_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Mohamed', 'Razzouq', 'mohamedrazzouq3110@gmail.com', 'dmjdsdh'),
(2, 'Mohamed', 'Razzouq', 'mohamedrazzouq3110@gmail.com', 'dmjdsdh'),
(3, 'ss', '', 'mohamedrazzouq3110@gmail.com', 'dmjdsdh'),
(4, 'ma', '', 'mohamedrazzouq3110@gmail.com', 'dmjdsdh'),
(5, '', '', 'mohamedrazzouq3110@gmail.com', 'dmjdsdh'),
(6, 'omar', '', 'mohamedrazzouq3110@gmail.com', 'dmjdsdh'),
(7, 'saida', '', 'mohamedrazzouq3110@gmail.com', 'dmjdsdh'),
(8, 'meed', '', 'mohamedrazzouq3110@gmail.com', 'dmjdsdh'),
(9, 'mohamed', 'razzouq', 'mohamedrazzouq3110@gmail.com ', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boooking`
--
ALTER TABLE `boooking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boooking`
--
ALTER TABLE `boooking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
