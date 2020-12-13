-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2018 at 03:53 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalcar_rpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `id_pengembalian` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `id_owner` int(11) NOT NULL,
  `merk_mobil` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `no_polisi` varchar(100) NOT NULL,
  `no_mesin` int(11) NOT NULL,
  `no_bpkb` int(11) NOT NULL,
  `jumlah_kursi` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `id_owner`, `merk_mobil`, `warna`, `no_polisi`, `no_mesin`, `no_bpkb`, `jumlah_kursi`, `status`, `harga`, `image`) VALUES
(1, 1, 'Avanza', 'Silver', 'D 123 ID', 98767, 98765, 6, 'Tersedia', 300000, 'avanza.jpg'),
(3, 2, 'Rush', 'Silver', 'D 125 ID', 98769, 98767, 8, 'Tidak Tersedia', 400000, 'rush.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id_owner` int(11) NOT NULL,
  `nama_owner` varchar(100) NOT NULL,
  `notlp_owner` int(12) NOT NULL,
  `alamat_owner` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id_owner`, `nama_owner`, `notlp_owner`, `alamat_owner`) VALUES
(1, 'Budi', 98765, 'Bandung'),
(2, 'Asep', 98764, 'Bandung'),
(6, 'Tia ', 812251320, 'Gegerkalong Girang');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `notlp_pemesan` varchar(100) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `waktu_pengambilan` datetime NOT NULL,
  `waktu_pengembalian` datetime NOT NULL,
  `lokasi_pengambilan` varchar(300) NOT NULL,
  `lokasi_pengembalian` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_mobil`, `nama_pemesan`, `notlp_pemesan`, `tanggal_pemesanan`, `waktu_pengambilan`, `waktu_pengembalian`, `lokasi_pengambilan`, `lokasi_pengembalian`) VALUES
(1, 1, 'Winda Mauli', '082210728211', '2018-06-02', '2018-06-03 06:16:00', '2018-06-11 07:00:00', 'Setiabudi', 'Setiabudi'),
(2, 6, 'Iqdam Mussayyad', '0899789021', '2018-06-03', '2018-06-05 05:00:00', '2018-06-07 07:00:00', 'Gegerkalong Girang', 'Gegerkalong Girang'),
(24, 7, 'Tia Pusparini', '08215637410', '2018-06-02', '2018-06-08 02:00:00', '2018-06-09 02:00:00', 'Ciamis', 'Ciamis');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `uang_dp` int(11) NOT NULL,
  `jaminan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_pemesanan`, `total_harga`, `uang_dp`, `jaminan`) VALUES
(4, 24, 300000, 100000, 'KTP');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `tgl_seharusnya` date NOT NULL,
  `ketelatan` int(11) NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `no_ktp` int(11) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `notlp_pengguna` int(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `no_ktp`, `alamat`, `notlp_pengguna`, `email`, `password`) VALUES
(1, 'admin', 'admin', 32100000, 'Bandung', 822188000, 'admin', 'admin'),
(2, 'Winda Mauli', 'winda', 98765, 'Bandung', 98765, 'winda@gmail.com', 'qwerty'),
(3, 'Gugum Gumelar', 'gugum', 98764, 'Bandung', 98764, 'gugum@live.com', 'asdfg'),
(4, 'Mauli Kristy', 'mauli', 9876, 'hsj', 9876, 'windamkristy@gmail.com', 'asdfgh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `id_peminjaman` (`id_peminjaman`),
  ADD KEY `id_pengembalian` (`id_pengembalian`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`),
  ADD KEY `id_owner` (`id_owner`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id_owner`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_mobil` (`id_mobil`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `id_peminjaman` (`id_peminjaman`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id_owner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id_peminjaman`),
  ADD CONSTRAINT `laporan_ibfk_2` FOREIGN KEY (`id_pengembalian`) REFERENCES `pengembalian` (`id_pengembalian`),
  ADD CONSTRAINT `laporan_ibfk_4` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`);

--
-- Constraints for table `mobil`
--
ALTER TABLE `mobil`
  ADD CONSTRAINT `mobil_ibfk_1` FOREIGN KEY (`id_owner`) REFERENCES `owner` (`id_owner`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
