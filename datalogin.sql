-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 08:21 PM
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
-- Database: `pendaftaran_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `datalogin`
--

CREATE TABLE `datalogin` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `tanggal` varchar(32) NOT NULL,
  `jeniskelamin` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datalogin`
--

INSERT INTO `datalogin` (`id`, `username`, `email`, `password`, `tanggal`, `jeniskelamin`, `created_at`) VALUES
(1, 'Joni_Kun', 'Joni', '123', '2014-05-28', 'Pria', '2024-05-12 08:35:32'),
(5, 'Agus', ' Agus@gmail.com', '123', '2024-05-01', 'on', '0000-00-00 00:00:00'),
(8, 'Wati', 'Wati@gmail.com', 'Wati1223', '2023-07-27', 'on', '0000-00-00 00:00:00'),
(9, 'Bambang', 'Bambang@gmail.com', 'Bambang123', '2009-06-22', 'on', '0000-00-00 00:00:00'),
(10, 'Bimbing', 'Bimbing@gmail.com', 'Bimbing123', '2024-05-09', 'on', '0000-00-00 00:00:00'),
(11, 'Sapi', 'Sapi@gmail.com', 'Sapi123', '2024-05-11', 'on', '0000-00-00 00:00:00'),
(16, 'Rahman', 'Rahman@gmail.com', 'Rahman123', '2007-08-19', 'on', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datalogin`
--
ALTER TABLE `datalogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datalogin`
--
ALTER TABLE `datalogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
