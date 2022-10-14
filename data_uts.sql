-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 10:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `category_name`) VALUES
(1, 'Python'),
(2, 'HTML'),
(3, 'C/C++'),
(4, 'CSS'),
(5, 'JavaScript'),
(6, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `komentar_user_nama` varchar(100) NOT NULL,
  `komentar_thread` int(11) NOT NULL,
  `isi_komentar` varchar(250) NOT NULL,
  `tanggal_komentar` datetime NOT NULL,
  `komentar_img` varchar(100) NOT NULL,
  `komentar_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `komentar_user_nama`, `komentar_thread`, `isi_komentar`, `tanggal_komentar`, `komentar_img`, `komentar_userid`) VALUES
(2, 'Liu', 5, 'tesss', '2022-10-15 03:49:01', '1453980607_maxresdefault.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `suka`
--

CREATE TABLE `suka` (
  `id_suka` int(11) NOT NULL,
  `suka_user` int(11) NOT NULL,
  `suka_thread` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `id_thread` int(11) NOT NULL,
  `thread_user` int(11) NOT NULL,
  `judul_thread` varchar(100) NOT NULL,
  `isi_thread` varchar(300) NOT NULL,
  `tanggal_thread` datetime NOT NULL,
  `thread_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`id_thread`, `thread_user`, `judul_thread`, `isi_thread`, `tanggal_thread`, `thread_category`) VALUES
(5, 3, 'Testing', 'Ahihihi dar', '2022-10-14 20:18:12', 1),
(7, 2, 'Testing', 'sdasdad', '2022-10-15 02:04:10', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_nama` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_gender` varchar(15) NOT NULL,
  `user_birthplace` varchar(30) NOT NULL,
  `user_birthdate` date NOT NULL,
  `user_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_nama`, `user_email`, `user_password`, `user_gender`, `user_birthplace`, `user_birthdate`, `user_img`) VALUES
(2, 'Liu', 'paullmich28@gmail.com', '$2y$10$ecX/tffkGdjph8TRC/egrOVNSElPEauLIM6dV09ejFXxvH4OUCDQO', '', 'Konoha', '2003-01-28', '1453980607_maxresdefault.jpg'),
(3, 'BWDamen', 'usernamebw@gmail.com', '$2y$10$gnPw4jb/6v4G4/CML3uAKOiOVsklwXzqdrCr/Y2U9pFMHSXlzdbum', 'Laki-laki', 'Wakanda', '2003-09-29', '1484119464_profile.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `suka`
--
ALTER TABLE `suka`
  ADD PRIMARY KEY (`id_suka`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`id_thread`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suka`
--
ALTER TABLE `suka`
  MODIFY `id_suka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `id_thread` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
