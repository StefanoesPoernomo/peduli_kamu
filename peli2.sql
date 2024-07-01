-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2024 at 09:53 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peli2`
--

-- --------------------------------------------------------

--
-- Table structure for table `catatankesehatan`
--

CREATE TABLE `catatankesehatan` (
  `id_catatan` int NOT NULL,
  `kode_vaksin` int NOT NULL,
  `NIK` int NOT NULL,
  `tanggal` date NOT NULL,
  `dosis` int NOT NULL,
  `id_faskes` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `catatankesehatan`
--

INSERT INTO `catatankesehatan` (`id_catatan`, `kode_vaksin`, `NIK`, `tanggal`, `dosis`, `id_faskes`) VALUES
(9, 3, 369875552, '2024-06-21', 2, 13);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `NIK` int NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Email` text NOT NULL,
  `HP` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`NIK`, `Nama`, `Email`, `HP`) VALUES
(6234165, 'gilbert', 'gio@gmail.com', 7890025),
(369875552, 'BUDI TATE', 'BUDI@gmail.com', 78940887);

-- --------------------------------------------------------

--
-- Table structure for table `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `id_faskes` int NOT NULL,
  `nama_faskes` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`id_faskes`, `nama_faskes`, `alamat`) VALUES
(11, 'test', 'testt'),
(12, 'Sehat selalu', 'sudirman'),
(13, 'RUMAH KUBUR', 'AKU SAKIT');

-- --------------------------------------------------------

--
-- Table structure for table `vaksin`
--

CREATE TABLE `vaksin` (
  `kode_vaksin` int NOT NULL,
  `Nama_vaksin` varchar(50) NOT NULL,
  `dosis` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vaksin`
--

INSERT INTO `vaksin` (`kode_vaksin`, `Nama_vaksin`, `dosis`) VALUES
(1, 'Ketawa', 1),
(2, 'Aezakmi', 2),
(3, 'Test', 23),
(5, 'coba', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catatankesehatan`
--
ALTER TABLE `catatankesehatan`
  ADD PRIMARY KEY (`id_catatan`),
  ADD UNIQUE KEY `NIK` (`NIK`),
  ADD UNIQUE KEY `kode_vaksin` (`kode_vaksin`),
  ADD UNIQUE KEY `id_faskes` (`id_faskes`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  ADD PRIMARY KEY (`id_faskes`);

--
-- Indexes for table `vaksin`
--
ALTER TABLE `vaksin`
  ADD PRIMARY KEY (`kode_vaksin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catatankesehatan`
--
ALTER TABLE `catatankesehatan`
  MODIFY `id_catatan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `NIK` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=369875553;

--
-- AUTO_INCREMENT for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  MODIFY `id_faskes` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `vaksin`
--
ALTER TABLE `vaksin`
  MODIFY `kode_vaksin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catatankesehatan`
--
ALTER TABLE `catatankesehatan`
  ADD CONSTRAINT `catatankesehatan_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `pengguna` (`NIK`),
  ADD CONSTRAINT `catatankesehatan_ibfk_2` FOREIGN KEY (`kode_vaksin`) REFERENCES `vaksin` (`kode_vaksin`),
  ADD CONSTRAINT `catatankesehatan_ibfk_3` FOREIGN KEY (`id_faskes`) REFERENCES `rumah_sakit` (`id_faskes`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
