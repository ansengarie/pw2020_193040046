-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 06:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040046`
--

-- --------------------------------------------------------

--
-- Table structure for table `elektronik`
--

CREATE TABLE `elektronik` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `seri` varchar(50) NOT NULL,
  `spesifikasi` varchar(100) NOT NULL,
  `fitur` varchar(100) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elektronik`
--

INSERT INTO `elektronik` (`id`, `foto`, `seri`, `spesifikasi`, `fitur`, `harga`) VALUES
(1, '1.png', 'Galaxy A01', 'RAM 2 GB, ROM 16 GB	', 'Dual Camera, Face Unlock', 1499000),
(2, '2.jpeg', 'Galaxy S10 Lite', 'RAM 8 GB, ROM 128 GB', 'Super Steady Camera, Fast Charging', 8999000),
(3, '3.jpg', 'Galaxy S20+', 'RAM 12 GB, ROM 512/256/128 GB', 'Super Resolution Zoom 30X, 64 MP Camera, 8K Video', 14499000),
(4, '4.jpg', 'Galaxy S20', 'RAM 12 GB, ROM 128 GB', 'Super Resolution Zoom 30X, 64 MP Camera', 12999000),
(5, '5.jpg', 'Galaxy S20 Ultra', 'RAM 12/16 GB, ROM 128/256/512 GB', 'Super Resolution Zoom 100X, 108 MP Camera, 8K Video', 18499000),
(6, '6.png', 'Galaxy Z Flip', 'RAM 8GB, ROM 256 GB', 'Flip Phone, 4K UHD Recording, NFC, Finger Print', 21888000),
(7, '7.jpg', 'Galaxy A71', 'RAM 8 GB, ROM 128 GB', '64 MP Quad Camera with Macro Lens, Infinity O-display & Super AMOLED Plus, Ultra Wide Angle Camera', 6099000),
(8, '8.jpg', 'Galaxy A51', 'RAM 8 GB, ROM 128 GB', 'Quad Camera with Super Steady, Super AMOLED Infinity-O Display, Samsung Pay & NFC', 4599000),
(9, '9.jpg', 'Galaxy Fold', 'RAM 12 GB, ROM 512 GB', 'Fold Screen, Dual Battery, Face Recognition, Finger Print', 30888000),
(10, '10.jpg', 'Galaxy M30S', 'RAM 4 GB, ROM 64 GB', 'Finger Print, Face Recognition, Long Battery 6000 mAH', 3299000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
