-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2017 at 02:49 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tokosepatu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `id_admin` varchar(5) NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `id_admin`, `password`) VALUES
('ADMIN', '01', 'enjisf');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` varchar(5) NOT NULL,
  `nama_barang` varchar(50) CHARACTER SET utf8 NOT NULL,
  `harga_jual` int(15) NOT NULL,
  `berat_barang` int(12) NOT NULL,
  `stok` int(4) NOT NULL,
  `deskripsi` text CHARACTER SET utf8 NOT NULL,
  `gambar` varchar(100) CHARACTER SET utf8 NOT NULL,
  `id_kategori` varchar(5) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--


-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE IF NOT EXISTS `detail_transaksi` (
  `id_detail` int(11) NOT NULL AUTO_INCREMENT,
  `no_transaksi` varchar(8) CHARACTER SET utf8 NOT NULL,
  `harga` int(15) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `id_pembeli` varchar(5) NOT NULL,
  PRIMARY KEY (`id_detail`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `detail_transaksi`
--


-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` varchar(5) CHARACTER SET utf8 NOT NULL,
  `nama_kategori` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--


-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE IF NOT EXISTS `konfirmasi` (
  `id_konfirmasi` int(4) NOT NULL,
  `id_pengiriman` varchar(5) CHARACTER SET utf8 NOT NULL,
  `nama_pembeli` varchar(50) CHARACTER SET utf8 NOT NULL,
  `jumlah_transfer` int(12) NOT NULL,
  `keterangan` text CHARACTER SET utf8 NOT NULL,
  `tanggal` date NOT NULL,
  `file` text NOT NULL,
  PRIMARY KEY (`id_konfirmasi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi`
--


-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE IF NOT EXISTS `pembeli` (
  `id_pembeli` varchar(6) CHARACTER SET utf8 NOT NULL,
  `nama_pembeli` text CHARACTER SET utf8 NOT NULL,
  `tgl_lahir` varchar(50) CHARACTER SET utf8 NOT NULL,
  `gender` text CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `telepon` varchar(30) CHARACTER SET utf8 NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tgl_daftar` date NOT NULL,
  PRIMARY KEY (`id_pembeli`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--


-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id_pesan` varchar(5) CHARACTER SET utf8 NOT NULL,
  `tgl_pesan` date NOT NULL,
  `nama_pelanggan` text CHARACTER SET utf8 NOT NULL,
  `transfer` int(50) NOT NULL,
  `status_pembayaran` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--


-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE IF NOT EXISTS `pengiriman` (
  `id_pengiriman` int(5) NOT NULL,
  `no_transaksi` varchar(8) CHARACTER SET utf8 NOT NULL,
  `nama_penerima` varchar(30) CHARACTER SET utf8 NOT NULL,
  `no_resi` varchar(20) CHARACTER SET utf8 NOT NULL,
  `status_pembayaran` text CHARACTER SET utf8 NOT NULL,
  `tgl_kirim` date NOT NULL,
  PRIMARY KEY (`id_pengiriman`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiriman`
--


-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `kode_provinsi` varchar(5) CHARACTER SET utf8 NOT NULL,
  `nama_provinsi` varchar(50) CHARACTER SET utf8 NOT NULL,
  `biaya_kirim` int(12) NOT NULL,
  PRIMARY KEY (`kode_provinsi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--


-- --------------------------------------------------------

--
-- Table structure for table `temp_keranjang`
--

CREATE TABLE IF NOT EXISTS `temp_keranjang` (
  `id_temp` int(11) NOT NULL,
  `id_barang` varchar(5) CHARACTER SET utf8 NOT NULL,
  `harga` int(12) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pembeli` varchar(6) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_temp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_keranjang`
--


-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `no_transaksi` varchar(8) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `nama_penerima` text CHARACTER SET utf8 NOT NULL,
  `alamat_lengkap` text CHARACTER SET utf8 NOT NULL,
  `kode_provinsi` varchar(3) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `kode_pos` int(6) NOT NULL,
  `telepon` int(20) NOT NULL,
  `status_bayar` varchar(30) NOT NULL,
  `id_barang` varchar(5) NOT NULL,
  PRIMARY KEY (`no_transaksi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
