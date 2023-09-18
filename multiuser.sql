-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2023 at 06:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_peng` int(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `level` enum('user','petugas','viewer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_peng`, `nama`, `username`, `password`, `level`) VALUES
(1, 'joko', 'joko', 'joko', ''),
(2, 'petugas', 'petugas', 'petugas', 'petugas'),
(3, 'user', 'user', 'user', 'user'),
(4, '', 'ricy', 'ricy', ''),
(5, 'nisa', 'nisa', 'nisa', ''),
(6, 'nisa', 'annisaku', '123', 'petugas'),
(7, 'Ricky Darmawan', 'dwn', '123', 'user'),
(8, 'Dimas', 'dims', '123', 'viewer');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_resepsionis`
--

CREATE TABLE `tabel_resepsionis` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `asal_perusahaan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `keperluan` text NOT NULL,
  `status` enum('mendesak','normal') NOT NULL,
  `tanggal_janji` datetime NOT NULL,
  `tanggal_buat` datetime NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `tujuan` enum('Pesan','Janji','Penitipan') NOT NULL,
  `divisi` enum('Marketing','IT','Sales') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_resepsionis`
--

INSERT INTO `tabel_resepsionis` (`id`, `nama`, `asal_perusahaan`, `alamat`, `no_hp`, `email`, `keperluan`, `status`, `tanggal_janji`, `tanggal_buat`, `jenis_kelamin`, `tujuan`, `divisi`) VALUES
(7, 'Ramdan Wijaya', 'pt.jaya makmur', 'jakarta timur', '8892941', 'rdms@gmail.com', '<p>bertemu dengan pak suhae</p>', 'normal', '2023-08-21 08:49:00', '2023-09-08 08:53:00', 'Pria', 'Pesan', 'IT'),
(8, 'Adam12', 'Ada', 'jakarta', '988821', 'rajawali@gmail.com', '<p>Untuk keperluan rapat pada hari minggu</p>', 'normal', '2023-08-05 09:58:00', '2023-08-21 08:58:00', 'Wanita', 'Pesan', 'Marketing'),
(12, 'RickyGanteng', '2WJGsmzd8D', 'FrRnviKl3y', 'roeFDrQvXE', 'NEqJU3eUpZ', '<p>TIdaktau</p>', 'mendesak', '2023-09-02 04:27:00', '2023-08-31 00:31:00', 'Pria', 'Pesan', 'Sales'),
(13, 'Vdtf9ibt5x', 'TZbfT74Np0', 'FKuvYu8nBM', 'S8kQBJsFTG', 'Mcctf1PArX', 'hoIVvrDYvc', 'mendesak', '2023-09-02 04:27:00', '2023-08-31 00:31:00', 'Wanita', 'Pesan', 'Marketing'),
(14, 'Ricky', 'FO9BtgYMcd', 'ywGpM5IHEL', 'rVtV4byomq', 'yD8ZdVKIYH', 'RR2HFLuQMy', 'mendesak', '2023-09-02 04:27:00', '2023-08-31 00:31:00', 'Wanita', 'Pesan', 'Marketing'),
(16, 'rickyuganteng', 'pjNGg4SGTs', 'Ps5VkaCuWy', 'Y72c0FAt9m', '8xl1ssZRhz', 'LRyOUnICai', 'mendesak', '2023-09-02 04:27:00', '2023-08-31 00:31:00', 'Wanita', 'Pesan', 'Marketing'),
(17, 'lol', 'JRzxrxmXxm', 'AoN0Po4jOU', 'sT7ZO3K6ZF', '74EwuvAwUM', 'ykxQvD1wRg', 'mendesak', '2023-09-02 04:27:00', '2023-08-31 00:31:00', 'Wanita', 'Pesan', 'Marketing'),
(18, 'nisacantik', 'FwWzhEZxWP', 'wcWJ406Rf1', 'jHsqUvk3Uc', 'rj1J4pMf12', 'TKwGKVAjoh', 'mendesak', '2023-09-02 04:27:00', '2023-08-31 00:31:00', 'Wanita', 'Pesan', 'Marketing'),
(19, 'rickygantengsedunia', 'FwWzhEZxWP', 'wcWJ406Rf1', 'jHsqUvk3Uc', 'rj1J4pMf12', 'TKwGKVAjoh', 'mendesak', '2023-09-02 04:27:00', '2023-08-31 00:31:00', 'Wanita', 'Pesan', 'Marketing'),
(20, 'rickygantengsedunia', 'OOzphxu33c', '3hxkmpoETC', 'S4v6cS1a6f', 'ROPo3h9e0x', 'biy01Nyx5i', 'mendesak', '2023-09-02 04:27:00', '2023-08-31 00:31:00', 'Wanita', 'Pesan', 'Marketing'),
(22, 'Provident consectet', 'Excepturi id et vol', 'Doloremque amet tem', 'Voluptates amet', 'canuhen@mailinator.com', '', 'mendesak', '1993-07-10 03:49:00', '1993-09-11 04:33:00', 'Wanita', 'Janji', 'Sales'),
(23, 'Neque unde deserunt ', 'Aliquid dolores vel ', 'Quis eum ut perferen', 'Reprehenderit n', 'jylaru@mailinator.com', '', 'mendesak', '1983-06-02 19:58:00', '2010-08-10 10:20:00', 'Wanita', 'Pesan', 'IT'),
(24, 'Awwe', 'kocak', 'Dolor minima aperiam', 'Recusandae Et l', 'fowajyhaq@mailinator.com', '', 'mendesak', '1991-01-10 04:58:00', '1999-11-26 07:26:00', 'Pria', 'Janji', 'IT'),
(25, 'NbnSAZqEgI', 'vVF5O7w3HW', 'kGOvhqLyrK', 'EdjnaouUJp', 'XckIgSlJ3i', 'XrbBxZTC0G', 'mendesak', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Pria', 'Pesan', 'Marketing'),
(26, 'Doloribus ipsa cons', 'Et consequatur Aute', 'Exercitation veritat', 'Est vel ipsa ei', 'mevaweser@mailinator.com', '', 'normal', '2012-04-04 18:58:00', '2020-08-09 02:43:00', 'Pria', 'Janji', 'Sales'),
(27, 'Aut corrupti aliqua', 'Numquam magna volupt', 'Soluta excepteur lab', 'Commodi reprehe', 'gyhev@mailinator.com', '', 'mendesak', '2023-06-19 05:20:00', '1992-02-19 23:27:00', 'Pria', 'Janji', 'IT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_peng`);

--
-- Indexes for table `tabel_resepsionis`
--
ALTER TABLE `tabel_resepsionis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_peng` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tabel_resepsionis`
--
ALTER TABLE `tabel_resepsionis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
