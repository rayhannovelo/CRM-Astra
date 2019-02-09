-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2019 at 03:59 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm-astra`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat_pembeli`
--

CREATE TABLE `alamat_pembeli` (
  `id_alamat` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `rt` char(2) NOT NULL,
  `rw` char(2) NOT NULL,
  `kelurahan` char(20) NOT NULL,
  `kecamatan` char(20) NOT NULL,
  `kota` char(20) NOT NULL,
  `provinsi` char(20) NOT NULL,
  `kode_pos` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alamat_pembeli`
--

INSERT INTO `alamat_pembeli` (`id_alamat`, `id_pembeli`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `kode_pos`) VALUES
(15, 12, 'annisa', 'an', 'an', 'annisa', 'annisa', 'annisa', 'annisa', 'annis');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `foto_kendaraan` varchar(255) NOT NULL,
  `thumbnail_kendaraan` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `harga_dp` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `jumlah_stok` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `merk`, `tipe`, `warna`, `foto_kendaraan`, `thumbnail_kendaraan`, `harga`, `harga_dp`, `kategori`, `jumlah_stok`, `deskripsi`) VALUES
(7, '', 'Scoopy', 'Merah', '90973.png', '90973_thumb.png', 18100000, 5000000, 'Matic', 4, ''),
(8, '', 'CBR150R', 'Merah', '95980.png', '95980_thumb.png', 34300000, 8000000, 'Sport', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal_komentar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_pembeli`, `komentar`, `tanggal_komentar`) VALUES
(7, 12, '<p>thank you<br></p>', '2018-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `perihal` varchar(55) NOT NULL,
  `bank_pengirim` varchar(55) NOT NULL,
  `nomor_rekening` varchar(55) NOT NULL,
  `nama_pengirim` varchar(55) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `jumlah_pembayaran` varchar(55) NOT NULL,
  `foto_pembayaran` varchar(55) NOT NULL,
  `catatan` text NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `no_ktp` char(12) NOT NULL,
  `foto_ktp` varchar(255) NOT NULL,
  `nama_pembeli` char(40) NOT NULL,
  `jenis_kelamin` varchar(55) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(55) NOT NULL,
  `status_rumah` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `facebook` varchar(55) NOT NULL,
  `twitter` varchar(55) NOT NULL,
  `instagram` varchar(55) NOT NULL,
  `youtube` varchar(55) NOT NULL,
  `hobi` varchar(55) NOT NULL,
  `pekerjaan` varchar(55) NOT NULL,
  `pengeluaran` varchar(55) NOT NULL,
  `pendidikan_terakhir` varchar(55) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `no_telepon` varchar(12) NOT NULL,
  `status_hp` varchar(55) NOT NULL,
  `status_informasi` varchar(55) NOT NULL,
  `merk_motor` varchar(55) NOT NULL,
  `jenis_motor` varchar(55) NOT NULL,
  `tanggal_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `id_pengguna`, `no_ktp`, `foto_ktp`, `nama_pembeli`, `jenis_kelamin`, `tanggal_lahir`, `agama`, `status_rumah`, `email`, `facebook`, `twitter`, `instagram`, `youtube`, `hobi`, `pekerjaan`, `pengeluaran`, `pendidikan_terakhir`, `no_hp`, `no_telepon`, `status_hp`, `status_informasi`, `merk_motor`, `jenis_motor`, `tanggal_daftar`) VALUES
(12, 3, 'annisa', '84631.jpg', 'annisa', 'Laki-laki', '2018-06-01', 'Islam', 'Rumah Sendiri', 'annisa@annisa', 'annisa', 'annisa', 'annisa', 'annisa', 'annisa', 'Pegawai Negeri', '< Rp 900.000,-', 'Tidak Tamat SD', 'annisa', 'annisa', 'Pra Bayar (Isi Ulang)', 'Ya', 'Honda', 'Sport', '2018-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `level`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
(2, 'manajer', '69b731ea8f289cf16a192ce78a37b4f0', 2, 1),
(3, 'annisa', 'c9d2cce909ea37234be8af1a1f958805', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_alamat` int(11) NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `no_invoice` varchar(55) NOT NULL,
  `jenis_pembelian` varchar(55) NOT NULL,
  `kegunaan` varchar(55) NOT NULL,
  `pengguna` varchar(55) NOT NULL,
  `catatan` text NOT NULL,
  `jenis_pembayaran` varchar(55) NOT NULL,
  `status_pembayaran` varchar(55) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `status_transaksi` varchar(55) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `nama_pengirim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat_pembeli`
--
ALTER TABLE `alamat_pembeli`
  ADD PRIMARY KEY (`id_alamat`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_alamat` (`id_alamat`),
  ADD KEY `id_pembeli` (`id_pembeli`),
  ADD KEY `id_kendaraan` (`id_kendaraan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamat_pembeli`
--
ALTER TABLE `alamat_pembeli`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `alamat_pembeli`
--
ALTER TABLE `alamat_pembeli`
  ADD CONSTRAINT `alamat_pembeli_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD CONSTRAINT `pembeli_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_alamat`) REFERENCES `alamat_pembeli` (`id_alamat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`id_kendaraan`) REFERENCES `kendaraan` (`id_kendaraan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
