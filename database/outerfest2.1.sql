-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 05:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iben`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `password`) VALUES
(1, 'ngadimin', 'admin@admin.com', '$2y$10$rG19cKUodfBqAca10Jl/hu5ZRoWU9emss2TI.aX9Ebn5DZJYNgRHm');

-- --------------------------------------------------------

--
-- Table structure for table `bukti_transfer`
--

CREATE TABLE `bukti_transfer` (
  `id_buktitransfer` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bukti_transfer`
--

INSERT INTO `bukti_transfer` (`id_buktitransfer`, `url`, `id_peserta`, `id_event`, `total`, `date_created`) VALUES
(4, 'http://localhost/uploads/bukti_transfer/51199015_2084583464962819_7418210308981784576_n.jpg', 5, 1, 50005, '2019-04-23 12:18:01'),
(5, 'http://localhost/uploads/bukti_transfer/53807459_2273524526224037_4209254063897837568_n.jpg', 6, 2, 50006, '2019-04-23 14:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id_event` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id_event`, `nama`, `harga`) VALUES
(1, 'NPC Junior', 50000),
(2, 'NPC Senior', 50000),
(3, 'NLC', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `date_created` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `title`, `description`, `id_admin`, `date_created`) VALUES
(1, 'Perubahan Timeline NPC Junior dan Senior', 'bacot', 1, '21 April 2019'),
(2, 'Judul mu', 'jadi gitu gan', 1, '23 April 2019'),
(3, 'asfdfghjlk;;\'\'', 'ewrtyuoio', 1, '23 April 2019');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `idline` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `id_event` varchar(11) NOT NULL,
  `identitas` varchar(255) NOT NULL,
  `id_buktitransfer` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `nama`, `instansi`, `email`, `asal`, `nohp`, `idline`, `password`, `id_event`, `identitas`, `id_buktitransfer`, `status`) VALUES
(5, 'Anvaqta Tangguh', 'Telkom University', 'kak.tangguh@gmail.com', 'Purwodadi', '082226808866', 'anvaqta', '$2y$10$s0F9pweQ7P8Miig0MDsdnOpQDTJLt./AEVCgCOCbKm4pxin1lrJzW', '3', '5.jpg', 4, 3),
(6, 'Anvaqta Tangguh', 'Telkom University', 'anvaqta@live.com', 'Purwodadi', '082226808866', 'anvaqta', '$2y$10$jdS1B3rYQTM0oZYGtYv2gOpHnuX4nUP0qhmnhH5rRrBuxH0G1g3gW', '2', '6.jpg', 5, 2),
(7, 'Fauzi', 'Telkom University', 'fauzi@gmail.com', 'Bandung', '082226808866', 'anvaqta', '$2y$10$gaLEFmZ/xNIfVYdfdeSzyui2a427f3..EOqGfi7kLJ5yeZWan.ewW', '2', '7.jpg', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bukti_transfer`
--
ALTER TABLE `bukti_transfer`
  ADD PRIMARY KEY (`id_buktitransfer`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bukti_transfer`
--
ALTER TABLE `bukti_transfer`
  MODIFY `id_buktitransfer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
