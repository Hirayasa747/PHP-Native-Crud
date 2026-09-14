-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2026 at 05:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siswa`
--
CREATE DATABASE IF NOT EXISTS `db_siswa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_siswa`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `foto_siswa` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `umur` int(111) NOT NULL,
  `email` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nisn`, `nama_siswa`, `jenis_kelamin`, `foto_siswa`, `alamat`, `umur`, `email`) VALUES
(1, '11233', 'Suzumiya Haruhi', 'Perempuan', 'img1.jpg', 'Nishinomiya', 18, 'haruhi@email.com'),
(3, '115664', 'Azusa Nakano', 'Perempuan', 'Azusa Chan!.jpg', 'Toyosato', 17, 'Azusa@email.com'),
(4, '112443', 'Jax', 'Laki-laki', 'img4.jpg', 'Madrid', 20, 'Jax@email.com'),
(5, '1456535', 'speed', 'Laki-laki', 'download.jpg', 'Berlin', 25, 'Speed@email.com'),
(16, '1224445', 'Tsumugi', 'Perempuan', '⚘ ⦂ TSUMUGI KOTOBUKI ☆.jpg', 'Toyosato', 18, 'Mugi@email.com'),
(20, '447', 'Hayase Yuuka', 'Perempuan', '447.jpg', 'Jakarta', 18, 'yuuka@email.com'),
(30, '343', 'ruka', 'Perempuan', '343.jpeg', 'jepang', 19, 'ruka@email.com'),
(31, '232', 'shion', 'Laki-laki', '232.jpg', 'nagoya', 77, 'shion@email.com'),
(32, '3678', 'yae', 'Perempuan', '3678.jpg', 'inazuma', 78, 'yae@email.com'),
(33, '34334', 'azz', 'Laki-laki', '34334.jpg', 'hamburg', 65, 'azz@emai.com'),
(34, '839', 'Maka', 'Laki-laki', '839.jpg', 'Deease', 17, 'maka@email.com'),
(35, '334', 'cc', 'Perempuan', '334.jpg', 'britania', 99, 'catyln@email.com'),
(36, '452557', 'vvs', 'Perempuan', '452557.jpg', 'London', 634, 'vaas@email.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
