-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 16, 2021 at 06:27 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_akademi`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(191) NOT NULL,
  `tingkat_kelas` varchar(191) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `guru_id` int(11) NOT NULL DEFAULT 4
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `tingkat_kelas`, `created_at`, `updated_at`, `guru_id`) VALUES
(1, 'hardware', 'dasar', '2021-10-10 06:44:29', NULL, 4),
(2, 'network', 'dasar', '2021-10-10 06:44:29', NULL, 4),
(6, 'Programming', 'dasar', NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_siswa`
--

CREATE TABLE `kelas_siswa` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `completion` int(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas_siswa`
--

INSERT INTO `kelas_siswa` (`id`, `siswa_id`, `kelas_id`, `created_at`, `updated_at`, `completion`) VALUES
(1, 5, 1, '2021-10-10 13:58:23', '2021-10-10 13:58:23', 60);

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `judul_materi` varchar(191) NOT NULL,
  `keterangan` text NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `isi_materi` text NOT NULL,
  `file` varchar(191) NOT NULL,
  `tingkat` enum('dasar','lanjut') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `judul_materi`, `keterangan`, `kelas_id`, `isi_materi`, `file`, `tingkat`, `created_at`, `updated_at`) VALUES
(1, 'Sejarah Komputer', 'materi', 1, 'Sejarah komputer dimulai pada', 'Software QA Test - Intermediate.pdf', 'dasar', NULL, NULL),
(9, 'python', 'materi', 1, 'a', 'CV_M_Bagas_Setia02.pdf', 'dasar', '2021-10-12 03:56:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `progress_siswa`
--

CREATE TABLE `progress_siswa` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `materi_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `progress_siswa`
--

INSERT INTO `progress_siswa` (`id`, `siswa_id`, `materi_id`, `created_at`, `updated_at`) VALUES
(6, 5, 1, '2021-10-15 04:50:34', NULL),
(7, 5, 9, '2021-10-15 04:51:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `level` enum('admin','siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `created_at`, `updated_at`, `level`) VALUES
(4, 'M. Bagas Setia', 'bagassetia271@gmail.com', '$2y$10$VMv/Axzwi/gibMYcv0Em1eQHjZ.2GHNUjr70Z9oYRAAutIc1gzx0y', '2021-10-08 11:09:10', NULL, 'admin'),
(5, 'Devi Ratna Daniati', 'deviratna@gmail.com', '$2y$10$VMv/Axzwi/gibMYcv0Em1eQHjZ.2GHNUjr70Z9oYRAAutIc1gzx0y', '2021-10-09 11:15:07', NULL, 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guru_id` (`guru_id`);

--
-- Indexes for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_id` (`kelas_id`),
  ADD KEY `kelas_siswa_ibfk_2` (`siswa_id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materi_ibfk_1` (`kelas_id`);

--
-- Indexes for table `progress_siswa`
--
ALTER TABLE `progress_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswa_id` (`siswa_id`),
  ADD KEY `materi_id` (`materi_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `progress_siswa`
--
ALTER TABLE `progress_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`guru_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD CONSTRAINT `kelas_siswa_ibfk_1` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_siswa_ibfk_2` FOREIGN KEY (`siswa_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `progress_siswa`
--
ALTER TABLE `progress_siswa`
  ADD CONSTRAINT `progress_siswa_ibfk_1` FOREIGN KEY (`siswa_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `progress_siswa_ibfk_2` FOREIGN KEY (`materi_id`) REFERENCES `materi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
