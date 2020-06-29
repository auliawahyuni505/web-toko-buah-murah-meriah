-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2020 pada 06.00
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_buah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buah`
--

CREATE TABLE IF NOT EXISTS `tb_buah` (
  `kd_buah` int(11) NOT NULL AUTO_INCREMENT,
  `nama_buah` varchar(40) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  PRIMARY KEY (`kd_buah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `tb_buah`
--

INSERT INTO `tb_buah` (`kd_buah`, `nama_buah`, `kategori`) VALUES
(1, 'Salak', 'Import'),
(8, 'Apel', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE IF NOT EXISTS `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pelanggan` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `no_telp`) VALUES
(1, 'Suriani', 'Leworeng', '082147483647');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_satuan`
--

CREATE TABLE IF NOT EXISTS `tb_satuan` (
  `id_satuan` int(11) NOT NULL AUTO_INCREMENT,
  `nm_satuan` varchar(30) NOT NULL,
  `harga` varchar(20) NOT NULL,
  PRIMARY KEY (`id_satuan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tb_satuan`
--

INSERT INTO `tb_satuan` (`id_satuan`, `nm_satuan`, `harga`) VALUES
(1, 'box', '100000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_supplier`
--

CREATE TABLE IF NOT EXISTS `tb_supplier` (
  `id_supplier` int(11) NOT NULL AUTO_INCREMENT,
  `nama_supplier` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_tlp` varchar(12) NOT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_supplier`
--

INSERT INTO `tb_supplier` (`id_supplier`, `nama_supplier`, `alamat`, `email`, `no_tlp`) VALUES
(1, 'Pt buah sejahatera', 'soppeng', 'supplier1@gmail.com', '082111333444');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE IF NOT EXISTS `tb_transaksi` (
  `kd_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int(11) NOT NULL,
  `kd_buah` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `total_harga` varchar(20) NOT NULL,
  `jumlah_bayar` varchar(20) NOT NULL,
  PRIMARY KEY (`kd_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`kd_transaksi`, `id_pelanggan`, `kd_buah`, `id_satuan`, `harga`, `jumlah`, `total_harga`, `jumlah_bayar`) VALUES
(1, 1, 0, 1, '1000000', '1', '1000000', '1000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tr_supplier`
--

CREATE TABLE IF NOT EXISTS `tr_supplier` (
  `kd_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_supplier` varchar(20) NOT NULL,
  `kd_buah` varchar(20) NOT NULL,
  `id_satuan` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `jumlah_beli` varchar(20) NOT NULL,
  `total_harga` varchar(20) NOT NULL,
  `jumlah_bayar` varchar(20) NOT NULL,
  PRIMARY KEY (`kd_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tr_supplier`
--

INSERT INTO `tr_supplier` (`kd_transaksi`, `id_supplier`, `kd_buah`, `id_satuan`, `harga`, `jumlah_beli`, `total_harga`, `jumlah_bayar`) VALUES
(2, '', '1', '', '1000000', '1', '1000000', '1000000'),
(3, '1', '1', '', '1000000', '1', '1000000', '1000000');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_supplier`
--
CREATE TABLE IF NOT EXISTS `view_supplier` (
`kd_transaksi` int(11)
,`id_supplier` int(11)
,`nama_supplier` varchar(40)
,`id_satuan` int(11)
,`nm_satuan` varchar(30)
,`kd_buah` int(11)
,`nama_buah` varchar(40)
,`harga` varchar(20)
,`jumlah_beli` varchar(20)
,`total_harga` varchar(20)
,`jumlah_bayar` varchar(20)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_transaksi`
--
CREATE TABLE IF NOT EXISTS `vw_transaksi` (
`kd_transaksi` int(11)
,`id_pelanggan` int(11)
,`nama_pelanggan` varchar(40)
,`kd_buah` int(11)
,`nama_buah` varchar(40)
,`id_satuan` int(11)
,`nm_satuan` varchar(30)
,`harga` varchar(20)
,`jumlah` varchar(20)
,`total_harga` varchar(20)
,`jumlah_bayar` varchar(20)
);
-- --------------------------------------------------------

--
-- Struktur untuk view `view_supplier`
--
DROP TABLE IF EXISTS `view_supplier`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_supplier` AS select `tr_supplier`.`kd_transaksi` AS `kd_transaksi`,`tb_supplier`.`id_supplier` AS `id_supplier`,`tb_supplier`.`nama_supplier` AS `nama_supplier`,`tb_satuan`.`id_satuan` AS `id_satuan`,`tb_satuan`.`nm_satuan` AS `nm_satuan`,`tb_buah`.`kd_buah` AS `kd_buah`,`tb_buah`.`nama_buah` AS `nama_buah`,`tr_supplier`.`harga` AS `harga`,`tr_supplier`.`jumlah_beli` AS `jumlah_beli`,`tr_supplier`.`total_harga` AS `total_harga`,`tr_supplier`.`jumlah_bayar` AS `jumlah_bayar` from (((`tr_supplier` join `tb_supplier`) join `tb_satuan`) join `tb_buah`);

-- --------------------------------------------------------

--
-- Struktur untuk view `vw_transaksi`
--
DROP TABLE IF EXISTS `vw_transaksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_transaksi` AS select `tb_transaksi`.`kd_transaksi` AS `kd_transaksi`,`tb_pelanggan`.`id_pelanggan` AS `id_pelanggan`,`tb_pelanggan`.`nama_pelanggan` AS `nama_pelanggan`,`tb_buah`.`kd_buah` AS `kd_buah`,`tb_buah`.`nama_buah` AS `nama_buah`,`tb_satuan`.`id_satuan` AS `id_satuan`,`tb_satuan`.`nm_satuan` AS `nm_satuan`,`tb_transaksi`.`harga` AS `harga`,`tb_transaksi`.`jumlah` AS `jumlah`,`tb_transaksi`.`total_harga` AS `total_harga`,`tb_transaksi`.`jumlah_bayar` AS `jumlah_bayar` from (((`tb_transaksi` join `tb_buah`) join `tb_pelanggan`) join `tb_satuan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
