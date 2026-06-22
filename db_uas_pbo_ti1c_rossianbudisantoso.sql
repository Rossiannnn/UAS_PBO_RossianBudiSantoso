-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2026 at 09:39 AM
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
-- Database: `db_uas_pbo_ti1c_rossianbudisantoso`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `hari_kerja` int(11) NOT NULL,
  `gaji_dasar_per_hari` decimal(15,2) NOT NULL,
  `jenis_karyawan` enum('kontrak','tetap','magang') NOT NULL,
  `durasi_kontrak_bulan` int(11) DEFAULT NULL,
  `agensi_penyalur` varchar(100) DEFAULT NULL,
  `tunjangan_kesehatan` decimal(15,2) DEFAULT NULL,
  `opsi_saham_id` int(11) DEFAULT NULL,
  `uang_saku_bulanan` decimal(15,2) DEFAULT NULL,
  `sertifikat_kampus_merdeka` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `departemen`, `hari_kerja`, `gaji_dasar_per_hari`, `jenis_karyawan`, `durasi_kontrak_bulan`, `agensi_penyalur`, `tunjangan_kesehatan`, `opsi_saham_id`, `uang_saku_bulanan`, `sertifikat_kampus_merdeka`) VALUES
(1, 'Budi Santoso', 'IT', 22, 300000.00, 'tetap', NULL, NULL, 1500000.00, 101, NULL, NULL),
(2, 'Siti Aminah', 'HR', 22, 250000.00, 'tetap', NULL, NULL, 1200000.00, 102, NULL, NULL),
(3, 'Andi Wijaya', 'Finance', 20, 350000.00, 'tetap', NULL, NULL, 2000000.00, 103, NULL, NULL),
(4, 'Rina Melati', 'Marketing', 22, 280000.00, 'tetap', NULL, NULL, 1500000.00, 104, NULL, NULL),
(5, 'Dewi Lestari', 'Operations', 24, 260000.00, 'tetap', NULL, NULL, 1200000.00, NULL, NULL, NULL),
(6, 'Fajar Pratama', 'IT', 22, 400000.00, 'tetap', NULL, NULL, 2500000.00, 105, NULL, NULL),
(7, 'Nina Susanti', 'Legal', 20, 320000.00, 'tetap', NULL, NULL, 1800000.00, 106, NULL, NULL),
(8, 'Ahmad Fauzi', 'IT', 22, 200000.00, 'kontrak', 12, 'PT Karya Tech', NULL, NULL, NULL, NULL),
(9, 'Diana Putri', 'Marketing', 20, 180000.00, 'kontrak', 6, 'PT Solusi SDM', NULL, NULL, NULL, NULL),
(10, 'Eko Prasetyo', 'Operations', 24, 150000.00, 'kontrak', 24, 'PT Bina Pekerja', NULL, NULL, NULL, NULL),
(11, 'Gita Gutawa', 'HR', 22, 170000.00, 'kontrak', 12, 'PT Mandiri Jaya', NULL, NULL, NULL, NULL),
(12, 'Hadi Sucipto', 'Finance', 20, 190000.00, 'kontrak', 6, 'PT Solusi SDM', NULL, NULL, NULL, NULL),
(13, 'Intan Permata', 'Customer Service', 24, 140000.00, 'kontrak', 12, 'PT Bina Pekerja', NULL, NULL, NULL, NULL),
(14, 'Joko Anwar', 'Logistics', 22, 160000.00, 'kontrak', 24, 'PT Karya Tech', NULL, NULL, NULL, NULL),
(15, 'Kiki Amalia', 'IT', 20, 50000.00, 'magang', NULL, NULL, NULL, NULL, 1500000.00, 'KM-Batch-4-001'),
(16, 'Lukman Hakim', 'Marketing', 20, 45000.00, 'magang', NULL, NULL, NULL, NULL, 1200000.00, 'KM-Batch-4-002'),
(17, 'Maya Safira', 'Operations', 20, 40000.00, 'magang', NULL, NULL, NULL, NULL, 1000000.00, NULL),
(18, 'Nabil Makarim', 'Finance', 20, 50000.00, 'magang', NULL, NULL, NULL, NULL, 1500000.00, 'KM-Batch-5-103'),
(19, 'Oki Setiana', 'HR', 20, 45000.00, 'magang', NULL, NULL, NULL, NULL, 1200000.00, 'KM-Batch-5-104'),
(20, 'Putra Bangsa', 'Logistics', 20, 40000.00, 'magang', NULL, NULL, NULL, NULL, 1000000.00, NULL),
(21, 'Qori Anisa', 'Legal', 20, 50000.00, 'magang', NULL, NULL, NULL, NULL, 1500000.00, 'KM-Batch-5-105');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
