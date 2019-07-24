-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 09:34 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sharemebekasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id_saran` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telfon` varchar(15) NOT NULL,
  `saran` text NOT NULL,
  `target` enum('pemda','rumahsakit','polda','kelurahan','kecamatan','imigrasi','lainnya') NOT NULL,
  `status` enum('tdkaktif','aktif') NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id_saran`, `username`, `nama`, `telfon`, `saran`, `target`, `status`, `date`) VALUES
(1, 'coba', 'datacoba', '123456789101', 'asdasda', 'pemda', 'aktif', '2018-11-12 08:06:04'),
(3, 'coba1', 'dada', '12345623211', 'afadas', 'imigrasi', 'aktif', '2018-11-12 08:17:31'),
(4, 'coba', 'datacoba', '12312', 'asdasd', 'kelurahan', 'tdkaktif', '2018-11-12 08:18:53');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telfon` varchar(15) NOT NULL,
  `saran` text NOT NULL,
  `target` enum('trotoar','jembatan','zebracross','halte','terminal','stasiun','lainnya') NOT NULL,
  `status` enum('tdkaktif','aktif') NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id_saran`, `username`, `nama`, `telfon`, `saran`, `target`, `status`, `date`) VALUES
(2, 'coba', 'datacoba', '9786786875756', 'ggjjfdffj', 'jembatan', 'aktif', '2018-11-12 08:05:19'),
(3, 'coba1', 'dada', '123123123', 'dadada', 'trotoar', 'aktif', '2018-11-12 08:12:19'),
(4, 'coba', 'datacoba', '12312312', 'dadsada', 'halte', 'tdkaktif', '2018-11-12 08:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nik` varchar(35) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` enum('admin','warga') NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nik`, `nama`, `username`, `password`, `email`, `level`, `waktu`) VALUES
('00000000', 'admin', 'admin', 'admin', 'admin@admin.com', 'admin', '2018-11-12 05:30:56'),
('12345', 'datacoba', 'coba', 'c3ec0f7b054e729c5a716c8125839829', 'coba@coba.com', 'warga', '2018-11-12 05:29:56'),
('123456', 'datacobake2', 'cobaa', '7e6750a177bdb38d67980de28a884681', 'coba@coba.com', 'warga', '2018-11-12 05:30:03'),
('1234567', 'dada', 'coba1', 'bf0c95ff56e3b2598456cd455a8684c1', 'coba@coba.com', 'warga', '2018-11-12 05:30:10'),
('6464647447', 'apa aja', 'apaja', '202cb962ac59075b964b07152d234b70', 'coba@coba.com', 'warga', '2018-11-12 05:30:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
