-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 11:44 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbtik`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawabsiswa`
--

CREATE TABLE `jawabsiswa` (
  `id` int(11) NOT NULL,
  `id_materi` int(11) DEFAULT NULL,
  `hasil_mudah` int(11) DEFAULT NULL,
  `hasil_sedang` int(11) DEFAULT NULL,
  `hasil_sulit` int(11) DEFAULT NULL,
  `kesimpulan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawabsiswa`
--

INSERT INTO `jawabsiswa` (`id`, `id_materi`, `hasil_mudah`, `hasil_sedang`, `hasil_sulit`, `kesimpulan`) VALUES
(1, 1, 0, 0, 0, 'Belum bisa'),
(2, 2, 0, 0, 0, 'Belum bisa'),
(3, 3, 0, 0, 0, 'Belum bisa');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `materi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `materi`) VALUES
(1, 'variabel'),
(2, 'operator'),
(3, 'percabangan');

-- --------------------------------------------------------

--
-- Table structure for table `materidependansi`
--

CREATE TABLE `materidependansi` (
  `id` int(11) NOT NULL,
  `id_materi` int(11) DEFAULT NULL,
  `id_dependen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materidependansi`
--

INSERT INTO `materidependansi` (`id`, `id_materi`, `id_dependen`) VALUES
(1, 3, 1),
(2, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id` int(11) NOT NULL,
  `id_materi` int(11) DEFAULT NULL,
  `no_soal` int(11) DEFAULT NULL,
  `pertanyaan` longblob,
  `jawaban` longblob,
  `opsia` varchar(255) DEFAULT NULL,
  `opsib` varchar(255) DEFAULT NULL,
  `opsic` varchar(255) DEFAULT NULL,
  `opsid` varchar(255) DEFAULT NULL,
  `kesulitan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id`, `id_materi`, `no_soal`, `pertanyaan`, `jawaban`, `opsia`, `opsib`, `opsic`, `opsid`, `kesulitan`) VALUES
(46, 1, 1, 0x4d616e616b6168207469706520646174612079616e67206461706174206d656e616d70756e67206b6172616b746572206875727566, 0x737472696e67, 'int', 'string', 'float', 'double', 'mudah'),
(47, 1, 2, 0x4d616e616b6168207469706520646174612079616e67206461706174206d656e616d70756e672062696c616e67616e20646573696d616c, 0x666c6f6174, 'int', 'string', 'float', 'char', 'mudah'),
(48, 1, 3, 0x4170616b6168207469706520646174612063686172206461706174206d656e616d70756e67206265626572617061206b617461, 0x746964616b2062697361, 'bisa', 'tidak bisa', 'mungkin', 'sangat bisa', 'mudah'),
(49, 1, 4, 0x44617061746b616820766172696162656c20737472696e672064696973692064656e67616e20616e676b61, 0x62697361, 'bisa', 'tidak bisa', 'mungkin', 'sangat bisa', 'sedang'),
(50, 1, 5, 0x4170616b616820616b616e207465726a616469206572726f72206a696b61206b697461206d656d6173756b6b616e20616e676b61206b652064616c616d20766172696162656c2064656e67616e2074697065206461746120737472696e67, 0x746964616b206572726f72, 'error', 'tidak error', 'mungkin error', 'tidak dapat di compile', 'sedang'),
(51, 1, 6, 0x4d616e616b61682079616e672062756b616e206d65727570616b616e20746970652064617461, 0x62696c616e67616e, 'int', 'string', 'boolean', 'bilangan', 'sedang'),
(52, 1, 7, 0x696e742069203d20627564693b3c62722f3e3c62722f3e0d0a09094170616b61682070726f6772616d20646170617420646920636f6d70696c65, 0x746964616b2062697361, 'bisa', 'tidak bisa', 'mungkin', 'sangat bisa', 'sulit'),
(53, 1, 8, 0x696e7420692c206a3b3c62722f3e3c62722f3e0d0a09094170616b61682064656b6c617261736920766172696162656c207465727365627574206269736120646920636f6d70696c65, 0x62697361, 'bisa', 'tidak bisa', 'mungkin bisa', 'error', 'sulit'),
(54, 1, 9, 0x696e742069203d20353b3c62722f3e0d0a0909696e74206a203d20693b3c62722f3e3c62722f3e0d0a090962657270616b6168206e696c61692064617269206a, 0x35, '1', '3', '5', '7', 'sulit'),
(55, 2, 1, 0x4d616e616b6168207469706520646174612079616e67206461706174206d656e616d70756e67206b6172616b746572206875727566, 0x737472696e67, 'int', 'string', 'float', 'double', 'mudah'),
(56, 2, 2, 0x4d616e616b6168207469706520646174612079616e67206461706174206d656e616d70756e672062696c616e67616e20646573696d616c, 0x666c6f6174, 'int', 'string', 'float', 'char', 'mudah'),
(57, 2, 3, 0x4170616b6168207469706520646174612063686172206461706174206d656e616d70756e67206265626572617061206b617461, 0x746964616b2062697361, 'bisa', 'tidak bisa', 'mungkin', 'sangat bisa', 'mudah'),
(58, 2, 4, 0x44617061746b616820766172696162656c20737472696e672064696973692064656e67616e20616e676b61, 0x62697361, 'bisa', 'tidak bisa', 'mungkin', 'sangat bisa', 'sedang'),
(59, 2, 5, 0x4170616b616820616b616e207465726a616469206572726f72206a696b61206b697461206d656d6173756b6b616e20616e676b61206b652064616c616d20766172696162656c2064656e67616e2074697065206461746120737472696e67, 0x746964616b206572726f72, 'error', 'tidak error', 'mungkin error', 'tidak dapat di compile', 'sedang'),
(60, 2, 6, 0x4d616e616b61682079616e672062756b616e206d65727570616b616e20746970652064617461, 0x62696c616e67616e, 'int', 'string', 'boolean', 'bilangan', 'sedang'),
(61, 2, 7, 0x696e742069203d20627564693b3c62722f3e3c62722f3e0d0a09094170616b61682070726f6772616d20646170617420646920636f6d70696c65, 0x746964616b2062697361, 'bisa', 'tidak bisa', 'mungkin', 'sangat bisa', 'sulit'),
(62, 2, 8, 0x696e7420692c206a3b3c62722f3e3c62722f3e0d0a09094170616b61682064656b6c617261736920766172696162656c207465727365627574206269736120646920636f6d70696c65, 0x62697361, 'bisa', 'tidak bisa', 'mungkin bisa', 'error', 'sulit'),
(63, 2, 9, 0x696e742069203d20353b3c62722f3e0d0a0909696e74206a203d20693b3c62722f3e3c62722f3e0d0a090962657270616b6168206e696c61692064617269206a, 0x35, '1', '3', '5', '7', 'sulit');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `level` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `level`, `username`, `password`) VALUES
(1, 1, 'adam', 'adam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawabsiswa`
--
ALTER TABLE `jawabsiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_materi` (`id_materi`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materidependansi`
--
ALTER TABLE `materidependansi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_materi` (`id_materi`),
  ADD KEY `id_dependen` (`id_dependen`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_materi` (`id_materi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawabsiswa`
--
ALTER TABLE `jawabsiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `materidependansi`
--
ALTER TABLE `materidependansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawabsiswa`
--
ALTER TABLE `jawabsiswa`
  ADD CONSTRAINT `jawabsiswa_ibfk_1` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id`);

--
-- Constraints for table `materidependansi`
--
ALTER TABLE `materidependansi`
  ADD CONSTRAINT `materidependansi_ibfk_1` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id`),
  ADD CONSTRAINT `materidependansi_ibfk_2` FOREIGN KEY (`id_dependen`) REFERENCES `materi` (`id`);

--
-- Constraints for table `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `soal_ibfk_1` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
