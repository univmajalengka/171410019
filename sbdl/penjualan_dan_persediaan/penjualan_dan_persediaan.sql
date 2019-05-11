-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Bulan Mei 2019 pada 06.47
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan_dan_persediaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_barang`
--

CREATE TABLE `table_barang` (
  `kode_barang` int(15) NOT NULL,
  `nama_barang` text NOT NULL,
  `harga_barang` int(5) NOT NULL,
  `jumlah_barang` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_barang`
--

INSERT INTO `table_barang` (`kode_barang`, `nama_barang`, `harga_barang`, `jumlah_barang`) VALUES
(1, 'citra', 2000, 30),
(2, 'bimoli', 10000, 20),
(3, 'beras', 10000, 100),
(4, 'mie', 2000, 15),
(5, 'garam', 3000, 30),
(6, 'rokok', 15000, 10),
(7, 'galon', 15000, 20),
(8, 'kopi', 1000, 15),
(9, 'telur', 10000, 25),
(10, 'terigu', 1500, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_detail_jual`
--

CREATE TABLE `table_detail_jual` (
  `faktur` int(10) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `jumlah_jual` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_detail_jual`
--

INSERT INTO `table_detail_jual` (`faktur`, `kode_barang`, `jumlah_jual`) VALUES
(111, '1', 10),
(120, '10', 3),
(112, '2', 5),
(113, '3', 30),
(114, '4', 6),
(115, '5', 10),
(116, '6', 2),
(117, '7', 5),
(118, '8', 1),
(119, '9', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_karyawan`
--

CREATE TABLE `table_karyawan` (
  `kode_karyawan` varchar(20) NOT NULL,
  `nama_karyawan` text NOT NULL,
  `password_karyawan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_karyawan`
--

INSERT INTO `table_karyawan` (`kode_karyawan`, `nama_karyawan`, `password_karyawan`) VALUES
('K1', 'Tanjing', 'apaansih12345'),
('K10', 'Fadli', 'fadlizonpolitik'),
('K2', 'Azi', 'aisiaeuy'),
('K3', 'Adit', 'katasandi123'),
('K4', 'Andri', 'jkt48910'),
('K5', 'Adi', 'opahkorea'),
('K6', 'Risti', 'lagisyantik'),
('K7', 'Vita', 'avaanluhh'),
('K8', 'Surpan', 'aingkumisaneuy'),
('K9', 'Riko', 'rikosimanjuntak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_penjualan`
--

CREATE TABLE `table_penjualan` (
  `faktur` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` datetime NOT NULL,
  `jumlah_harga` int(5) NOT NULL,
  `jumlah_item` int(20) NOT NULL,
  `jumlah_kembali` int(4) NOT NULL,
  `kode_karyawan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_penjualan`
--

INSERT INTO `table_penjualan` (`faktur`, `tanggal`, `jam`, `jumlah_harga`, `jumlah_item`, `jumlah_kembali`, `kode_karyawan`) VALUES
(111, '2019-04-01', '2019-04-01 09:17:16', 4000, 2, 6000, 'K1'),
(120, '2019-04-03', '2019-04-03 14:25:10', 10500, 7, 500, 'K10'),
(112, '2019-04-01', '2019-04-01 10:14:27', 30000, 3, 20000, 'K2'),
(113, '2019-04-01', '2019-04-01 12:17:36', 20000, 2, 30000, 'K3'),
(114, '2019-04-01', '2019-04-01 16:20:39', 2000, 1, 3000, 'K4'),
(115, '2019-04-01', '2019-04-01 17:23:10', 15000, 5, 5000, 'K5'),
(116, '2019-04-02', '2019-04-02 09:36:17', 60000, 4, 40000, 'K6'),
(117, '2019-04-02', '2019-04-02 13:35:17', 135000, 9, 15000, 'K7'),
(118, '2019-04-02', '2019-04-02 17:19:46', 8000, 8, 2000, 'K8'),
(119, '2019-04-03', '2019-04-03 11:13:43', 50000, 5, 50000, 'K9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_transaksi`
--

CREATE TABLE `table_transaksi` (
  `no` int(11) DEFAULT NULL,
  `kode` int(15) NOT NULL,
  `nama` text NOT NULL,
  `harga` int(5) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_transaksi`
--

INSERT INTO `table_transaksi` (`no`, `kode`, `nama`, `harga`, `jumlah`, `total`) VALUES
(1, 1, 'citra', 2000, 2, 4000),
(2, 2, 'bimoli', 10000, 5, 50000),
(3, 3, 'beras', 10000, 2, 20000),
(4, 4, 'mie', 2000, 5, 10000),
(5, 5, 'garam', 3000, 3, 9000),
(6, 6, 'rokok', 15000, 2, 30000),
(7, 7, 'galon', 15000, 2, 30000),
(8, 8, 'kopi', 1000, 15, 15000),
(9, 9, 'telur', 10000, 2, 20000),
(10, 10, 'terigu', 1500, 2, 3000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_user`
--

CREATE TABLE `table_user` (
  `id_usser` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `ussername` varchar(20) NOT NULL,
  `hakakses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_user`
--

INSERT INTO `table_user` (`id_usser`, `password`, `ussername`, `hakakses`) VALUES
('aepuloh', 'saepulohdusta', 'saepul', 'usser'),
('danihaji', 'duniafana', 'hajiii', 'usser'),
('dn', 'admin', 'admin', 'admin'),
('dull', 'dulohaelah', 'dulmantap123', 'admin'),
('ende', 'endehendah', 'endehmetal', 'usser'),
('epulcannabiz', 'cannabizkulon', 'cannabiz', 'usser'),
('erwin', 'thepanasdalam', 'erwinpanasdalam', 'usser'),
('mamansutarman', 'sutarmanmaman', 'mamans', 'usser'),
('odong', 'laukodong', 'odongjiwalupat', 'usser'),
('sarju', 'sarjuanamarijuana', 'marijuana', 'admin'),
('toto', 'totototo', 'totoajah', 'usser');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `table_barang`
--
ALTER TABLE `table_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indeks untuk tabel `table_detail_jual`
--
ALTER TABLE `table_detail_jual`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indeks untuk tabel `table_karyawan`
--
ALTER TABLE `table_karyawan`
  ADD PRIMARY KEY (`kode_karyawan`);

--
-- Indeks untuk tabel `table_penjualan`
--
ALTER TABLE `table_penjualan`
  ADD PRIMARY KEY (`kode_karyawan`);

--
-- Indeks untuk tabel `table_transaksi`
--
ALTER TABLE `table_transaksi`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id_usser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
