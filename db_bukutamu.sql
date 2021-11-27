-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2021 at 04:25 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_survey`
--

CREATE TABLE `tb_survey` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `meja` varchar(25) NOT NULL,
  `kepuasan` varchar(50) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_survey`
--

INSERT INTO `tb_survey` (`id`, `tanggal`, `meja`, `kepuasan`, `saran`) VALUES
(2, '2021-10-18', 'Meja 1', 'Sangat Puas', 'petugasnya sangat ramah'),
(3, '2021-10-18', 'Meja 2', 'Sangat Puas', 'Semoga kedepannya lebih baik lagi'),
(4, '2021-10-18', 'Meja 4', 'Sangat Puas', 'petugasnya sangat baik'),
(5, '2021-10-19', 'Meja 3', 'Kurang Puas', 'sangat ramah'),
(6, '2021-10-19', 'Meja 2', 'Puas', 'sangat ramah'),
(7, '2021-10-19', 'Meja 1', 'Kurang Puas', 'petugasnya sangat ramah'),
(8, '2021-10-19', 'Meja 1', 'Sangat Puas', 'sangat ramah'),
(9, '2021-10-19', 'Meja 1', 'Tidak Puas', 'sangat ramah'),
(10, '2021-10-19', 'Meja 2', 'Tidak Puas', 'petugasnya sangat ramah'),
(11, '2021-10-19', 'Meja 3', 'Tidak Puas', 'sangat ramah'),
(12, '2021-10-19', 'Meja 4', 'Tidak Puas', 'petugasnya sangat ramah'),
(13, '2021-10-19', 'Meja 3', 'Sangat Puas', 'petugasnya sangat ramah'),
(14, '2021-10-20', 'Meja 3', 'Sangat Puas', 'Pelayanan yang memuaskan'),
(15, '2021-10-20', 'Meja 2', 'Puas', 'Pelayanan yang memuaskan'),
(16, '2021-10-20', 'Meja 4', 'Puas', 'sangat ramah'),
(17, '2021-10-20', 'Meja 4', 'Puas', 'petugasnya sangat ramah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tamu`
--

CREATE TABLE `tb_tamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `kontak` varchar(60) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `kepentingan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tamu`
--

INSERT INTO `tb_tamu` (`id`, `nama`, `kontak`, `instansi`, `tgl`, `jam`, `tempat`, `kepentingan`) VALUES
(17, 'Darma Ramadhan', '0821285630', 'bri', '2021-10-20', '12:39:58', 'Meja 1', 'tamu ajah'),
(18, 'Umi Reza', '081377586924', 'BRI', '2021-10-19', '13:15:00', 'Meja 1', 'Bertemu Pimpinan'),
(19, 'Umi Reza', '0821285635', 'BRI Cabang Kalianda', '2021-10-20', '19:20:53', 'Meja 3', 'tamu ajah');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` int(100) NOT NULL,
  `penempatan` varchar(50) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `penempatan`, `level`) VALUES
(1, 'Administrator', 'admin', 12345, '', 'admin'),
(2, 'Umi Reza', 'reza', 12345, 'Meja 1', 'user'),
(3, 'Darma Ramadhan', ' ilham', 12345, 'Meja 2', 'user'),
(6, 'Darma Ramadhan', 'darma', 12345, 'Meja 3', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_survey`
--
ALTER TABLE `tb_survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tamu`
--
ALTER TABLE `tb_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_survey`
--
ALTER TABLE `tb_survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_tamu`
--
ALTER TABLE `tb_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
