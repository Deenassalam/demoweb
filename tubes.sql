-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2019 at 04:57 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `bencana`
--

CREATE TABLE `bencana` (
  `id_bencana` int(100) NOT NULL,
  `nama_bencana` varchar(100) NOT NULL,
  `lokasi_bencana` text NOT NULL,
  `waktu_bencana` date NOT NULL,
  `desk_bencana` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bencana`
--

INSERT INTO `bencana` (`id_bencana`, `nama_bencana`, `lokasi_bencana`, `waktu_bencana`, `desk_bencana`) VALUES
(2, 'hujan', 'kaliurang', '2018-12-26', '10 korban luka parah cuy tolong'),
(3, 'banjir', 'jakarta', '2018-12-27', 'rumah terbang'),
(10, 'Topan', 'Belawan', '2018-12-28', 'rumah terbang'),
(11, 'Longsor', 'GUnung Kidul', '2018-12-12', 'Rumah Rusak parah 45, Korban menghilang 2');

-- --------------------------------------------------------

--
-- Table structure for table `bnpb`
--

CREATE TABLE `bnpb` (
  `email_bnpb` varchar(100) NOT NULL,
  `pass_bnpb` varchar(100) NOT NULL,
  `id_bnpb` int(100) NOT NULL,
  `nama_bnpb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bnpb`
--

INSERT INTO `bnpb` (`email_bnpb`, `pass_bnpb`, `id_bnpb`, `nama_bnpb`) VALUES
('amber@gmail.com', '12345', 1, 'amber');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_k` int(100) NOT NULL,
  `nm_keg` varchar(100) NOT NULL,
  `lokasi_keg` text NOT NULL,
  `daerah_keg` text NOT NULL,
  `waktu_keg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_k`, `nm_keg`, `lokasi_keg`, `daerah_keg`, `waktu_keg`) VALUES
(1234359, 'bersih desa', 'bantul ', 'yogyakarta', '2018-12-19'),
(1234360, 'bakti sosial', 'gejayan selatan', 'desa paguyupan asri rt/rw 08/23', '2018-12-19'),
(1234361, 'Bakti sosial gunung Merapi', 'desa cangkirngan', 'dsn kemiri rt /rw 08/09', '2018-12-26'),
(1234362, 'Pelatihan Pertolongan Pertama Korban Gempa', 'Kantor Kecamatan Bantul', 'ds wonosari km 12 rt/rw 12/28', '2018-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `relawan`
--

CREATE TABLE `relawan` (
  `id` int(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `keahlian` varchar(100) NOT NULL,
  `desk_keahlian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relawan`
--

INSERT INTO `relawan` (`id`, `nama_lengkap`, `nik`, `email`, `password`, `asal`, `tempat`, `tgl_lahir`, `alamat`, `keahlian`, `desk_keahlian`) VALUES
(713, 'dewi', '234566', 'dew@gmail.com', '1801bc89e752077204c92b3dd9f9f62d', 'sembung ', 'nganjuk', '2018-12-25', 'lodadi', 'memasak', 'memasak'),
(714, 'safitri', '454445553', 'safitri@gmail.com', 'safitri', 'yogyakarta', 'bantul', '1994-12-22', 'sleman', 'TIM PMI Keadaan darurat', 'mengobati pasien yang terluka akibat infeksi'),
(716, 'Aldhiyatika Amwin', '23332323', 'tika@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'palembang', 'padang', '1999-12-05', 'Nglanjaran', 'tim forensik', 'forensika digital');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bencana`
--
ALTER TABLE `bencana`
  ADD PRIMARY KEY (`id_bencana`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_k`);

--
-- Indexes for table `relawan`
--
ALTER TABLE `relawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bencana`
--
ALTER TABLE `bencana`
  MODIFY `id_bencana` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_k` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234363;

--
-- AUTO_INCREMENT for table `relawan`
--
ALTER TABLE `relawan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=717;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
