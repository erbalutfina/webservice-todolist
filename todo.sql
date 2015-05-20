-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2015 at 04:56 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ws_todolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE IF NOT EXISTS `todo` (
`id` int(11) NOT NULL,
  `aktivitas` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `aktivitas`, `deskripsi`, `tanggal`, `status`, `create_at`, `update_at`) VALUES
(1, 'Makan', 'enak, kenyang, warek', '2015-05-21', 1, '2015-05-20 09:11:08', '0000-00-00 00:00:00'),
(26, 'Minum Kopi Di Siang Hari', 'biar ga ngantuk', '2015-05-21', 0, '2015-05-20 04:17:25', '0000-00-00 00:00:00'),
(27, 'Nonton Drama', 'apik', '2015-05-22', 0, '2015-05-20 04:17:54', '0000-00-00 00:00:00'),
(28, 'Tidur di kelas', 'ngantuk ok', '2015-05-20', 1, '2015-05-20 04:18:16', '2015-05-20 04:55:37'),
(29, 'mandi', 'tapi males', '2015-05-30', 1, '2015-05-20 04:44:33', '2015-05-20 04:48:31'),
(30, 'makan', 'ngeleh', '2015-05-22', 0, '2015-05-20 04:46:26', '0000-00-00 00:00:00'),
(31, 'nyapu', 'lantai', '2015-05-29', 0, '2015-05-20 04:48:21', '0000-00-00 00:00:00'),
(32, 'ngemil', 'enak', '2015-05-20', 0, '2015-05-20 04:56:01', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
