-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 05:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_perpus`
--

CREATE TABLE `admin_perpus` (
  `id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_perpus`
--

INSERT INTO `admin_perpus` (`id`, `Nama`, `Username`, `Email`, `Password`) VALUES
(1, 'Admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_buku`
--

CREATE TABLE `tabel_buku` (
  `idbuku` varchar(20) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `namabuku` varchar(100) DEFAULT NULL,
  `harga` decimal(20,0) DEFAULT NULL,
  `stok` int(20) DEFAULT NULL,
  `penerbit` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_buku`
--

INSERT INTO `tabel_buku` (`idbuku`, `kategori`, `namabuku`, `harga`, `stok`, `penerbit`) VALUES
('N005', 'Novel', 'aku ingin cerita part 02', 23000, 2, 'grandmedia'),
('N006', 'Novel', 'siksa neraka', 20000, 1, 'grandmedia'),
('N007', 'cerpen', 'masa depan yang indah', 20000, 1, 'grandmedia'),
('N009', 'Novel', 'Cara Bikin Codingan CRUD Di C#', 20000, 2, 'grandmedia'),
('N011', 'cerpen', 'cara belajar cepat', 20000, 4, 'grandmedia'),
('N1002', 'Novel', 'Aku Ingin Cerita', 48000, 12, 'Danendraiueo');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_penerbit`
--

CREATE TABLE `tabel_penerbit` (
  `idpenerbit` varchar(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_penerbit`
--

INSERT INTO `tabel_penerbit` (`idpenerbit`, `nama`, `alamat`, `kota`, `telepon`) VALUES
('SP01', 'Penerbit Informatika', 'Jl. Buah Batu No. 121', 'Bandung', '0813-2220-1946'),
('SP02', 'Andi Offset', 'Jl. Suryalaya IX No.3', 'Bandung', '0878-3903-0688'),
('SP03', 'Danendra', 'Jl Moch. Toha 44', 'Bandung', '022-5201215');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Nama`, `Username`, `Email`, `Password`) VALUES
(1, 'deniel', 'deniel12', 'denielbest@gmail.com', '4321'),
(2, 'allfariz rajih', 'all', 'allfarizrajih@gmail.com', '1234'),
(3, 'Admin', 'admin', 'admin', 'admin'),
(4, 'f', 'f', 'farhan@gmail.com', 'f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  ADD PRIMARY KEY (`idbuku`);

--
-- Indexes for table `tabel_penerbit`
--
ALTER TABLE `tabel_penerbit`
  ADD PRIMARY KEY (`idpenerbit`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
