-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 14, 2021 at 02:08 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `wpsmt5`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `sekolah_asal` varchar(20) NOT NULL,
  `foto_maba` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `foto_maba`) VALUES
(2, 'Sukisno', 'perum 1', 'laki -lak', 'Islam', 'SMA 109', 'foto2.png'),
(3, 'Maulia Mahardika', 'Mauk, Kab Tangerang', 'Perempuan', 'Islam', 'SMA 1 Mauk', 'foto1.png'),
(4, 'Ricko Alamsyah', 'Jayanti, Kab Tangerang', 'laki laki', 'Islam', 'SMA 112 Serang', 'foto2.png'),
(5, 'Rheza Maulana', 'Pakuhaji, Kab Tangerang', 'laki laki', 'Islam', 'SMA 1 Mauk', 'foto1.png'),
(7, 'Muhammad Rizky Hananda', 'cipondoh, kota tangerang', 'laki laki', 'Islam', 'SMA 1 Tangerang', 'foto1.jpg'),
(8, 'Hayunda Avianingtyas', 'ciledug, kota Tangerang', 'Perempuan', 'Islam', 'SMA 109', 'foto2.png'),
(9, 'Ahmad Fauzi', 'Kronjo, Kab Tangerang', 'laki laki', 'Islam', 'SMA 1 Mauk', 'foto1.png'),
(10, 'Mikhayla Prasetiyani', 'Grand Batavia', 'Perempuan', 'Islam', 'SMA 1 Tangerang', 'foto1.jpg'),
(24, 'jono', '&lt;h1&gt;halo&lt;/h1&gt;', 'Laki Laki', 'Islam', 'SMK 1 Tangerang', 'qwqwq'),
(25, 'selly sri', 'perum3', 'Perempuan', 'Islam', 'smk nusantara', 'seli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
