-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 05:36 PM
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
-- Database: `d_modul5`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_jurnal1`
--

CREATE TABLE `t_jurnal1` (
  `nim` bigint(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `komentar` varchar(40) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `jurusan` varchar(35) NOT NULL,
  `fakultas` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jurnal1`
--

INSERT INTO `t_jurnal1` (`nim`, `nama`, `email`, `komentar`, `tanggallahir`, `jeniskelamin`, `jurusan`, `fakultas`) VALUES
(6701172133, 'RIZKI SAPUTRA YUSUF', 'rizkisaputra@gmail.com', 'fadsdfefr', '2018-10-16', 'Laki-Laki', 'MI', 'FIT'),
(6701172133, 'RIZKI SAPUTRA YUSUF', 'rizkisaputra@gmail.com', 'fadsdfefr', '2018-10-16', 'Laki-Laki', 'MI', 'FIT'),
(6701172133, '', 'rizki@gmail.com', 'apalah', '2018-10-31', 'Laki-Laki', 'MBTI', 'FKB'),
(6701172133, '', 'rizkisaputra@gmail.com', 'sdgdf', '2018-10-09', '', 'MI', 'FIT'),
(6701172122, '', 'rizkisaputra@gmail.com', 'fadsdfefr', '2018-10-02', 'Laki-Laki', 'MI', 'FIT'),
(6701172122, '', 'rizkisaputra@gmail.com', 'fadsdfefr', '2018-10-02', 'Laki-Laki', 'MI', 'FIT'),
(6701172122, 'khgkhg', 'rizkisaputra@gmail.com', 'fadsdfefr', '2018-10-02', 'Laki-Laki', 'MI', 'FIT'),
(6701172122, 'jgcffy', 'rizkisaputra@gmail.com', 'fadsdfefr', '2018-10-02', 'Laki-Laki', 'MI', 'FIT');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
