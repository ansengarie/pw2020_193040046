-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 05:51 PM
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
-- Database: `pw_193040046`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nrp` char(9) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nrp`, `nama`, `email`, `jurusan`, `gambar`) VALUES
(1, '193040046', 'Aji Nuansa Sengarie', 'ansengarie@gmail.com', 'Teknik Informatika', 'aji.jpg'),
(2, '193040056', 'Sahid Jafar', 'sahidjafar@gmail.com', 'Teknik Informatika', 'sahid.jpg'),
(3, '193040043', 'Herlan Nurachman', 'herlannur@gmail.com', 'Teknik Informatika', 'herlan.jpg'),
(4, '193040071', 'Tresna Eka Widiana', 'tresnaeka@gmail.com', 'Teknik Informatika', 'eka.jpg'),
(5, '193040052', 'Adinda Fadhil Patria', 'didapatria@gmail.com', 'Teknik Informatika', 'dida.jpg'),
(6, '193040053', ' Fauzan Nursalma Mawardi', 'fauzannur@gmail.com', 'Teknik Informatika', 'fauzan.jpg'),
(7, '193040070', 'Muhammad Angga Saputra', 'manggasaputra@gmail.com', 'Teknik Informatika', 'angga.jpg'),
(8, '193040069', 'Agam Febriansyah', 'agamfeb@gmail.com', 'Teknik Informatika', 'agam.jpg'),
(9, '193040058', 'Bayu Cucan Herdian', 'bayucucan@gmail.com', 'Teknik Informatika', 'bayu.jpg'),
(10, '193040042', 'Suhendani', 'suhendaniaja@gmail.com', 'Teknik Informatika', 'dani.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
