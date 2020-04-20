-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2020 at 09:43 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medgency`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `id_user`, `id_mitra`, `id_dokter`, `keterangan`) VALUES
(1, 1, 1, 1, 'suka sakit dada'),
(3, 4, 1, 2, 'sakti help...'),
(4, 2, 1, 1, 'oyee'),
(5, 2, 1, 1, 'sakit hati dok'),
(11, 4, 1, 5, 'oyee'),
(12, 2, 1, 1, 'oy masuk dong');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `id_mitra`, `nama`, `spesialis`, `waktu`) VALUES
(1, 1, 'dr. Tirta', 'jantung', '9.00 AM - 5.00 PM'),
(2, 1, 'dr. Farrel', 'Paru-Paru', '5.00 PM - 10.00 PM'),
(5, 1, 'arinda', 'Anak & Kandungan', 'kapan pun bisa'),
(6, 4, 'Ansellma', 'Anak & Kandungan', '24 Jam');

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id`, `nama`, `address`, `waktu`, `username`, `password`, `jenis`, `url`) VALUES
(1, 'Siloam', 'bandung', '24 Jam', 'siloam', '123', 'rumah sakit', ''),
(3, 'Klinik Cijantung', 'Jakarta Timur', '9.00-21.00', 'cijantung', '123', 'clinic', ''),
(4, 'rumah sakit ciputra', 'jakarta barat', '24 Jam', 'ciputra', '123', 'rumah sakit', ''),
(5, 'Klinic telkom medika', 'bandung', '9.00-21.00', 'medika', '123', 'clinic', ''),
(6, 'Rumah sakit Pertamina', 'Balikpapan', '24 Jam', 'pertamina', '123', 'rumah sakit', '');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `username`, `url`) VALUES
(2, 'siloam', 'Capture.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `email`, `password`, `phonenumber`, `address`, `role`) VALUES
(1, 'maul', 'Maulana Irfan', '123@gmail.com', '123', '123', '123', '1'),
(2, 'farrelm__', 'Muhammad Farrel', 'farrelmuhammad0410@gmail.com', '123', '08114551997', 'BDI Blok A No 14, Balikpapan', '1'),
(4, 'apink', 'Naufal Alvin', '123@gmail.com', '123', '123', '123', '1'),
(5, 'daffa', 'Daffashiddiq', 'daffa@gmail.com', '1234', '1234', 'pbb', '1'),
(6, 'aye', 'oyee', 'aye@gmail.com', '123', '123', '123', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_mitra` (`id_mitra`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mitra` (`id_mitra`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `FK id_mitra` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
