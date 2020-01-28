-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2020 at 08:35 PM
-- Server version: 10.4.6-MariaDB
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
-- Database: `yii`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `date`, `nim`, `nama`, `status`) VALUES
(5, '2019-12-18', 'G.211.19.0016', 'Satrio N W', 'Masuk'),
(6, '2019-12-19', 'G.211.19.0021', 'Fendy N P', 'Masuk'),
(7, '2019-12-20', 'G.231.17.0032', 'Qiswatul Ulfah', 'Masuk');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id_invent` varchar(50) NOT NULL,
  `nama_brg` varchar(255) DEFAULT NULL,
  `harga` float UNSIGNED ZEROFILL DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `timestamp` varchar(50) DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id_invent`, `nama_brg`, `harga`, `keterangan`, `timestamp`) VALUES
('1', 'Laptop Acer V5-471', 000001500000, 'Laptop Acer V5-471\r\n\r\nSpesifikasi :\r\n- RAM 8GB\r\n- ROM 512GB\r\n- Processor Intel Core i3 2356M\r\n- Graphic Card Intel HD Graphic 3000', ''),
('2', 'Apple Ipad Mini 1', 000002500000, 'Apple Ipad Mini 1\r\n\r\nSpesifikasi :\r\n- RAM 512MB\r\n- ROM 64GB\r\n- Processor Apple A5\r\n- Graphic Card PowerVR SGX543MP2', '');

-- --------------------------------------------------------

--
-- Table structure for table `kas`
--

CREATE TABLE `kas` (
  `id_kas` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `setor` float DEFAULT NULL,
  `tgl_setor` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kas`
--

INSERT INTO `kas` (`id_kas`, `nim`, `setor`, `tgl_setor`) VALUES
(1, 'G.211.19.0016', 1500, '2019-12-26 21:11:01');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `semester` int(11) UNSIGNED ZEROFILL DEFAULT NULL,
  `jenis_kel` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `jurusan`, `semester`, `jenis_kel`, `agama`, `kelas`) VALUES
('G.211.19.0016', 'Satrio N W', 'In there', 'Teknik Informatika', 00000000001, 'L', 'Islam', 'A'),
('G.211.19.0021', 'Fendy N P', 'In there', 'Teknik Informatika', 00000000001, 'L', 'Islam', 'A'),
('G.231.17.0032', 'Qiswatul Ulfah', 'In there', 'Teknik Informatika', 00000000003, 'P', 'Islam', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` varchar(255) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `jumlah` float UNSIGNED ZEROFILL DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `timestamp` varchar(255) DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `nim`, `jumlah`, `keterangan`, `timestamp`) VALUES
('PENG012000001', 'G.211.19.0016', 000000500000, 'Dana Pembelian Aset', ''),
('PENG012000002', 'G.211.19.0021', 000006400000, 'Biaya Pengembalian APBD', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `auth_key` varchar(50) DEFAULT NULL,
  `accessToken` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `auth_key`, `accessToken`, `role`) VALUES
(1, 'admin', 'admin', 'test100-key', '100-token', 'admin'),
(3, 'user', 'user', 'user101-key', '101-token', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_invent`);

--
-- Indexes for table `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id_kas`,`nim`) USING BTREE;

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`,`nim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kas`
--
ALTER TABLE `kas`
  MODIFY `id_kas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
