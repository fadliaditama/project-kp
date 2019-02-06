-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Jan 2019 pada 15.40
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kko`
--

CREATE TABLE `kko` (
  `no` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `upt` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `jam_masuk` text NOT NULL,
  `isi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kko`
--

INSERT INTO `kko` (`no`, `nama`, `upt`, `id`, `jam_masuk`, `isi`, `tanggal`, `jumlah`, `keterangan`) VALUES
(16259, 'C043000400-30004-DEPUTI JKRP', 'Palembang', 30000, '07:54:55', '5102080001-Pemasaran Surat Paket', '2019-01-16', 123412, '12234'),
(16260, 'C083000400-PERWAKILAN SPI', 'Palembang', 30000, '07:59:57', '5104050002-Pengawasan/Pemeriksaan', '2019-01-16', 1000, 'coba'),
(16261, 'C043000400-30004-DEPUTI JKRP', 'Lubuk Linggau', 31600, '08:13:14', '5102020104-Beban Imbal Jasa Agen Pos', '2019-01-16', 10, 'coba'),
(16263, 'C063000400-DEPUTI UMUM', 'Palembang', 30000, '08:52:15', '5101040402-Kesehatan Pensiun', '2019-01-16', 123, '133'),
(16264, 'C043000400-30004-DEPUTI JKRP', 'alip', 2, '08:56:59', '5102020104-Beban Imbal Jasa Agen Pos', '2019-01-16', 12, 'qw'),
(16265, 'C013000400-30004-DEPBISSURKET', '20', 20, '09:00:45', '5102010301-Standar Layanan', '2019-01-16', 20, '20'),
(16267, 'C043000400-30004-DEPUTI JKRP', 'roger', 4, '10:27:12', '5102080003-Pemasaran Jasa Keuangan', '2019-01-16', 12, '12'),
(16268, 'C083000400-PERWAKILAN SPI', 'roger', 4, '07:54:55', '5104050002-Pengawasan/Pemeriksaan', '2020-01-01', 3456, 'coba'),
(16269, 'C083000400-PERWAKILAN SPI', 'Palembang', 30000, '07:59:57', '5104050002-Pengawasan/Pemeriksaan', '2019-02-16', 1000, 'coba'),
(16270, 'C043000400-30004-DEPUTI JKRP', 'rahayu', 3, '12:38:04', '5102080001-Pemasaran Surat Paket', '2019-01-16', 234, '12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kode`
--

CREATE TABLE `tb_kode` (
  `id_kode` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kode`
--

INSERT INTO `tb_kode` (`id_kode`, `nama`, `id`) VALUES
(1, '5102010301-Standar Layanan', 1),
(2, '5102010302-Peningkatan Mutu', 1),
(3, '5102010303-Insentip Antaran', 1),
(4, '5102020102-Gudang dan Pengepakan', 1),
(5, '5102020103-Uang Pengawal Pos', 1),
(6, '5102030102-Angkutan Air DN', 1),
(7, '5102030103-Angkutan Darat', 1),
(8, '5102030104-Angkutan Pos Setempat', 1),
(9, '5102050002-Sewa Kendaraan Roda 4&6', 1),
(10, '5102050003-Service/Suku Cadang', 1),
(11, '5102050004-BBM&Pelumas', 1),
(12, '5102050005-Pajak dan Retribusi', 1),
(13, '5102080001-Pemasaran Surat Paket', 1),
(14, '5102090001-Penyisihan Piutang Usaha', 1),
(15, '5102010302-Peningkatan Mutu', 2),
(16, '5102020104-Beban Imbal Jasa Agen Pos', 2),
(17, '5102080001-Pemasaran Surat Paket', 2),
(18, '5102080003-Pemasaran Jasa Keuangan', 2),
(19, '5102080004-Pemasaran Ritel', 2),
(20, '5102080005-Pemasaran Filateri', 2),
(21, '5104050002-Pengawasan/Pemeriksaan', 2),
(22, '5101010101-Gaji Pokok', 3),
(23, '5101010102-Tunjangan Konjungtur', 3),
(24, '5101010103-Tunjangan Grade', 3),
(25, '5101010104-Tunjangan Jabatan', 3),
(26, '5101010105-Tunjangan Representasi', 3),
(27, '5101010106-Tunjangan Transportasi', 3),
(28, '5101010107-Tunjangan Penghasilan Lain', 3),
(29, '5101010201-Beban Kerja Kontrak', 3),
(30, '5101030001-Kontrak Rumah Pegawai', 3),
(31, '5101030002-Uang Cuti Tahunan', 3),
(32, '5101030003-Tunjangan Hari Raya', 3),
(33, '5101030004-Jasa Produksi/Bonus', 3),
(34, '5101030005-Tunjangan Kinerja Unit', 3),
(35, '5101040301-Uang Pesangon', 3),
(36, '5101040401-Kompensasi Cuti Besar', 3),
(37, '5101040402-Kesehatan Pensiun', 3),
(38, '5101050001-Kesehatan Pegawai', 3),
(39, '5101050002-Bina Jasmani Rohani', 3),
(40, '5101050003-Beasiswa Pendidikan', 3),
(41, '5101050004-Penghargaan Kepada Pegawai', 3),
(42, '5102010202-Pelatihan', 3),
(43, '5102010203-Uang Pindah Pegawai', 3),
(44, '5102040001-Sewa Tanah dan Gedung Kantor', 3),
(45, '5102040002-Peliharaan Gedung/Ruang Kantor', 3),
(46, '5102040004-Instal Listrik/Telp/Air', 3),
(47, '5102040005-Kebersihan dan Penerangan', 3),
(48, '5102050002-Sewa Kendaraan Roda 4&6', 3),
(49, '5102050003-Service/Suku Cadang', 3),
(50, '5102050004-BBM&Pelumas', 3),
(51, '5102050005-Pajak dan Retribusi', 3),
(52, '5102060001-Pemeliharaan Komputer', 3),
(53, '5102060002-Pemeliharaan Alat Kantor', 3),
(54, '5102060003-Pemeliharaan Kotak Pos', 3),
(55, '5102060004-Pemeliharaan Alat Pos', 3),
(56, '5102070003-Operasional Teknologi', 3),
(57, '5103010001-Alat Tulis Menulis', 3),
(58, '5103010002-Perlengkapan Kantor', 3),
(59, '5103010003-Pemakaian Fotocopy', 3),
(60, '5103010004-Beban Administrasi Bank', 3),
(61, '5104010001-Langganan Majalah/dll', 3),
(62, '5104010002-Pemakaian Telpon/Fax', 3),
(63, '5104010003-Pemakaian Listrik', 3),
(64, '5104010004-Pemakaian Air/Gas', 3),
(65, '5104010005-Uang Jaga Keamanan', 3),
(66, '5104010006-Pajak Bumi dan Bangunan', 3),
(67, '5104010007-Sert Tanah Non HM', 3),
(68, '5104020001-Uang Makan dan Lembur', 3),
(69, '5104030001- Perj Dinas DN', 3),
(70, '5104040002-Penyelenggaraan Rapat', 3),
(71, '5104070001-K-3', 3),
(72, '5104070002-Pengelolaan Treasury', 3),
(73, '5104090002-Py Piut Kerugian', 3),
(74, '5107000001-Penyusutan Gedung', 3),
(75, '5107000003-Penyusutan Inventaris', 3),
(76, '5107000006-Amortisasi', 3),
(77, '5104050002-Pengawasan/Pemeriksaan', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_korek`
--

CREATE TABLE `tb_korek` (
  `kode` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_korek`
--

INSERT INTO `tb_korek` (`kode`, `nama`, `keterangan`, `id`) VALUES
('C013000400', 'C013000400-30004-DEPBISSURKET', '0', 1),
('C043000400', 'C043000400-30004-DEPUTI JKRP', '1', 2),
('C063000400', 'C063000400-DEPUTI UMUM', '3', 3),
('C083000400', 'C083000400-PERWAKILAN SPI', '4', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','user','super') NOT NULL,
  `blokir` enum('Y','N') NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `id`, `username`, `password`, `level`, `blokir`, `nama_lengkap`) VALUES
(2, 3, 'ayu', '29c65f781a1068a41f735e1b092546de', 'user', 'N', 'rahayu'),
(3, 4, 'roger', '484ea5618aaf3e9c851c28c6dbca6a1f', 'user', 'N', 'roger'),
(5, 19, 'super', '1b3231655cebb7a1f783eddf27d254ca', 'super', 'N', 'super admin'),
(7, 40, 'adm', 'b09c600fddc573f117449b3723f23d64', 'admin', 'N', 'adm'),
(8, 30000, '30000', '5ecc613150de01b7e6824594426f24f4', 'user', 'N', 'Palembang'),
(9, 31100, '31100', '77c33d0fb152118e33778d34ae8a0473', 'user', 'N', 'Prabumulih'),
(10, 31300, '31300', 'c7602768a214451d3d91346fed37176b', 'user', 'N', 'Muara Enim'),
(11, 31400, '31400', 'e81ec2afd5cff35ce2d033ebb9558bc3', 'user', 'N', 'Lahat'),
(12, 31600, '31600', '6b565d0a913ddcbf3dd4f619e323417c', 'user', 'N', 'Lubuk Linggau'),
(13, 32100, '32100', 'ddba48fbf653b9fb30d6992ccc821c9d', 'user', 'N', 'Baturaja'),
(14, 33100, '33100', '7b1b6d2fdf573b01058f16f6e398b69c', 'user', 'N', 'Pangkal Pinang'),
(15, 33400, '33400', '966154d33f4c9b724441a2e8251e189d', 'user', 'N', 'Tanjung Pandan'),
(16, 34100, '34100', '3bba69a182957d20ed02f89a5ad436ba', 'user', 'N', 'Metro'),
(17, 34500, '34500', '696e8c935c8ce98badc28242fad73dfb', 'user', 'N', 'Kota Bumi'),
(18, 35000, '35000', 'ce28c97dcd8381b7d5a093ffd1deae38', 'user', 'N', 'Bandar Lampung'),
(19, 36000, '36000', 'aefa72019c21020d838fad6cdbf155e8', 'user', 'N', 'Jambi'),
(20, 37100, '37100', 'b9a940dfdf43aacaa686ba8247c528b5', 'user', 'N', 'Sungai Penuh'),
(21, 37200, '37200', 'c832b63f097faf197cdb1f16f78c89bb', 'user', 'N', 'Muara Bungo'),
(22, 38000, '38000', '4f4b5b9aa70e09f4baa8ea207702d42e', 'user', 'N', 'Bengkulu'),
(23, 39100, '39100', 'f55e60acffb1a69a5ecc2abef59c8665', 'user', 'N', 'Curup'),
(28, 2, 'alip', '827ccb0eea8a706c4c34a16891f84e7b', 'user', 'N', 'alip'),
(30, 12, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'N', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kko`
--
ALTER TABLE `kko`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_kode`
--
ALTER TABLE `tb_kode`
  ADD PRIMARY KEY (`id_kode`);

--
-- Indexes for table `tb_korek`
--
ALTER TABLE `tb_korek`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_3` (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kko`
--
ALTER TABLE `kko`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16271;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
