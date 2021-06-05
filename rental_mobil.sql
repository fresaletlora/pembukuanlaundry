-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 04, 2021 at 11:54 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `nama_admin` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE IF NOT EXISTS `mobil` (
`id_mobil` int(3) NOT NULL,
  `merk` varchar(25) NOT NULL,
  `no_plat` varchar(10) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `status` varchar(10) NOT NULL,
  `harga_sewa` int(7) NOT NULL,
  `denda` int(7) NOT NULL,
  `transmisi` int(1) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `merk`, `no_plat`, `warna`, `tahun`, `status`, `harga_sewa`, `denda`, `transmisi`, `gambar`) VALUES
(8, 'Honda CR-V', 'F 1023 YQ', 'Putih', '2018', '1', 500000, 450000, 1, 'cr-v1.jpg'),
(9, 'Mini Cooper', 'B 1495 BNR', 'Kuning', '2019', '0', 900000, 800000, 1, 'mini_cooper.jpg'),
(10, 'Toyota Vios', 'F 5235 BD', 'Merah', '2016', '1', 450000, 300000, 0, 'vios3.jpg'),
(13, 'Nissan March', 'B 1023 LW', 'Orange', '2018', '1', 600000, 350000, 0, 'march1.jpg'),
(14, 'Toyota Alphard', 'B 1920 HWJ', 'Putih', '2019', '1', 1000000, 900000, 1, 'alphard2.jpg'),
(15, 'Honda Brio', 'F 5712 MP', 'Merah', '2017', '1', 450000, 450000, 1, 'brio.jpg'),
(16, 'Toyota Rush', 'B 1225 NRX', 'Putih', '2018', '1', 700000, 450000, 0, 'rush2.jpg'),
(17, 'Honda Yaris', 'B 1923 YJ', 'Kuning', '2017', '1', 600000, 350000, 1, 'yaris1.jpg'),
(18, 'Honda Jazz', 'F 1238 WJL', 'Putih', '2018', '1', 550000, 450000, 1, 'jazz.jpg'),
(19, 'Nissan X-Trail', 'F 1982 IMV', 'Putih', '2018', '1', 800000, 400000, 1, 'xtrails.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE IF NOT EXISTS `rental` (
`id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`id_rental` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `id_mobil` int(3) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `harga_sewa` int(7) NOT NULL,
  `denda` int(7) NOT NULL,
  `total_denda` int(15) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(15) NOT NULL,
  `status_rental` varchar(15) NOT NULL,
  `bukti_pembayaran` varchar(120) NOT NULL,
  `status_pembayaran` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_rental`, `id_user`, `id_mobil`, `tanggal_rental`, `tanggal_kembali`, `harga_sewa`, `denda`, `total_denda`, `tanggal_pengembalian`, `status_pengembalian`, `status_rental`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(3, 19, 8, '2021-01-01', '2021-01-02', 500000, 450000, 0, '2021-01-02', 'Kembali', 'Selesai', '1920x1080_Jakiro_Minimalist_Dota_21.jpg', 1),
(4, 19, 9, '2021-01-02', '2021-01-03', 900000, 800000, 800000, '2021-01-04', 'Kembali', 'Selesai', '1920x1080_Jakiro_Minimalist_Dota_22.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
`id_type` int(11) NOT NULL,
  `kode_type` varchar(10) NOT NULL,
  `nama_type` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `kode_type`, `nama_type`) VALUES
(1, 'HTB', 'Hatchback'),
(3, 'MPV', 'Multi-Purpose Vehicle'),
(4, 'SUV', 'Sport Utility Vehicle'),
(5, 'CTC', 'City Car'),
(6, 'MHL', 'Mahal');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `no_ktp` varchar(15) NOT NULL,
  `password` varchar(35) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `alamat`, `gender`, `no_telepon`, `no_ktp`, `password`, `role_id`) VALUES
(4, 'Adi', 'adi', 'Bogor', 'Laki-laki', '082391237492', '8134723691231', '202cb962ac59075b964b07152d234b70', 2),
(5, 'Admin', 'admin', 'Bekasi', 'Laki-laki', '082371742537', '2348239842498', '21232f297a57a5a743894a0e4a801fc3', 1),
(8, 'Wanto', 'wanto', 'Tangerang', 'Laki-laki', '081374381906', '8134958691231', '202cb962ac59075b964b07152d234b70', 2),
(10, 'James', 'james', 'Cianjur', 'Laki-laki', '081728478129', '8102933691983', '202cb962ac59075b964b07152d234b70', 2),
(11, 'Clara', 'clara', 'Lampung', 'Perempuan', '080129381906', '8123829301231', '202cb962ac59075b964b07152d234b70', 2),
(12, 'Yuni', 'yuni', 'Cikarang', 'Perempuan', '081921036502', '8123493201983', '202cb962ac59075b964b07152d234b70', 2),
(13, 'Curry', 'curry', 'Lenteng Agung', 'Laki-laki', '089210945734', '8123843082221', '202cb962ac59075b964b07152d234b70', 2),
(14, 'Ujang', 'ujang', 'Cilacap', 'Laki-laki', '081372435906', '8134955291231', '202cb962ac59075b964b07152d234b70', 2),
(15, 'Justin', 'justin', 'Singkawang', 'Laki-laki', '082124567492', '8123823123463', '202cb962ac59075b964b07152d234b70', 2),
(16, 'Manji', 'manji', 'Cipularang', 'Laki-laki', '081721231437', '8134723691231', '202cb962ac59075b964b07152d234b70', 2),
(17, 'Supriyanto', 'supriyanto', 'Cipularang', 'Laki-laki', '081728472837', '8134723691231', '202cb962ac59075b964b07152d234b70', 2),
(18, 'Yuna', 'yuna', 'Kampung Rambutan', 'Perempuan', '081374381906', '8123823691567', '202cb962ac59075b964b07152d234b70', 2),
(19, 'mikhael', 'mikhael', 'wakwaww', 'Laki-laki', '081392182391', '12323950132', '202cb962ac59075b964b07152d234b70', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
 ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
 ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
 ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
MODIFY `id_mobil` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id_rental` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
