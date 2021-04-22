-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2021 pada 11.32
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elitbang-cilacap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` int(1) NOT NULL,
  `jabatan` varchar(10) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `username`, `password`, `nama`, `level`, `jabatan`, `status`) VALUES
(4, 'superadmin', '$2y$10$8Y59ILjJJpJsJwDyDcPVTu4tmtW7PNsGdEfq9EH77U.X/pHZdqQlu', 'Abdul Aziz', 0, 'superadmin', 'YA'),
(5, 'bappeda', '$2y$10$z8epyR6o3sy7t/auITh71.wxhXPtPyI8pQ65zX5eQi/Lek/nHP5Cq', 'Admin Litbang', 1, 'bappeda', 'YA'),
(6, 'kesbangpol', '$2y$10$jajZSgD4oyc1BoTCp5aBseJ7INSJi2530dD08YM98MJvIQNBWb0l6', 'Kesbangpol', 2, 'kesbangpol', 'YA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_permohonan`
--

CREATE TABLE `tbl_permohonan` (
  `id_permohonan` int(10) NOT NULL,
  `id_peserta` int(10) NOT NULL,
  `jenis_permohonan` varchar(20) NOT NULL,
  `surat_dari` varchar(500) NOT NULL,
  `tujuan` varchar(500) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `lokasi` text NOT NULL,
  `awal_pelaksanaan` date NOT NULL,
  `akhir_pelaksanaan` date NOT NULL,
  `penanggung_jawab` varchar(100) NOT NULL,
  `narahubung` varchar(100) NOT NULL,
  `tanggal_permohonan` date NOT NULL,
  `status_permohonan` varchar(50) NOT NULL,
  `no_rekomendasi` varchar(50) DEFAULT NULL,
  `awal_rekomendasi` date DEFAULT NULL,
  `akhir_rekomendasi` date DEFAULT NULL,
  `tanggal_rekomendasi` date DEFAULT NULL,
  `status_rekomendasi` varchar(20) DEFAULT NULL,
  `no_izin` varchar(50) DEFAULT NULL,
  `awal_berlaku` date DEFAULT NULL,
  `akhir_berlaku` date DEFAULT NULL,
  `tanggal_izin` date DEFAULT NULL,
  `ttd_bappeda` varchar(100) DEFAULT NULL,
  `ttd_kesbangpol` varchar(100) DEFAULT NULL,
  `berkas_permohonan` text DEFAULT NULL,
  `berkas_laporan` text DEFAULT NULL,
  `tembusan_rekomendasi` text DEFAULT NULL,
  `tembusan_izin` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peserta`
--

CREATE TABLE `tbl_peserta` (
  `id_peserta` int(10) NOT NULL,
  `nama_peserta` varchar(200) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `pekerjaan` varchar(500) DEFAULT NULL,
  `kewarganegaraan` varchar(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_peserta`
--

INSERT INTO `tbl_peserta` (`id_peserta`, `nama_peserta`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `no_hp`, `alamat`, `pekerjaan`, `kewarganegaraan`, `email`, `password`) VALUES
(1, 'asd', 'asd', '2021-04-22', 'Laki-laki', '2', 'asd', 'asd', 'WNI', 'superadmin@s.c', '$2y$10$Mksk1TZ/oJ8Dnup57G37HuRr//Rm4uXFNCeU/M6S2TmIwgMmfbofm'),
(2, 'Abdul Aziz', 'Cilacap', '2021-04-22', 'Laki-laki', '0', 'Cek', 'cek', 'WNI', 'aziz@gmail.com', '$2y$10$zK1O21WzhL4Ml1kdZziAEu.hVczNxbFONeBFX32fKLma9cNA2Uuhe'),
(4, '', '', '0000-00-00', '', '', '', '', '', '', '$2y$10$iF0G5H9l35qG3RyyoFyReuFVa.f2L32fd4EdwjwDEGlsIrVQIsZCG'),
(7, 'Maya Triyanti', 'Cilacap', '2021-04-22', 'Perempuan', '0111111', 'Cilacap', 'Karyawan', 'WNI', 'maya@gmail.com', '$2y$10$m3pa0J694yHrWRdZvAVaR.u0.2toGtgcnxDF7hnnc/Lslkmcp75PO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ttd`
--

CREATE TABLE `tbl_ttd` (
  `id_ttd` int(10) NOT NULL,
  `nama_ttd` varchar(100) NOT NULL,
  `nip_ttd` varchar(100) NOT NULL,
  `jabatan_ttd` varchar(100) NOT NULL,
  `pangkat_ttd` varchar(100) NOT NULL,
  `atas_nama_ttd` text NOT NULL,
  `status_ttd` varchar(20) NOT NULL,
  `jenis_ttd` varchar(20) NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ttd`
--

INSERT INTO `tbl_ttd` (`id_ttd`, `nama_ttd`, `nip_ttd`, `jabatan_ttd`, `pangkat_ttd`, `atas_nama_ttd`, `status_ttd`, `jenis_ttd`, `foto`) VALUES
(2, 'EDY SUPRIYONO, S.Sos., M.M.', '197203142005011006', 'Pembina', 'Golongan IV', 'a.n KEPALA BAPPEDA KAB. CILACAP<br>SEKRETARIS<BR>u.b. <BR>KABID PROGRAM DAN EVALUASI', 'on', 'bappeda', '1595485162.png'),
(5, 'HARY MULYONO, SH', '19680626 198903 1010', 'Pembina', 'GolonganIV', 'a.n KEPALA BADAN KESATUAN BANGSA DAN POLITIK<br>KABUPATEN CILACAP<br>Kepala Bidang Fasilitasi Politik Dan Keamanan', 'on', 'kesbangpol', '1593664476.png'),
(14, 'Ir. LYDIA RETNONINGSIH, M.A.', '196703221996032002', 'PEMBINA', 'IVa', 'a.n KEPALA BAPPEDA KAB. CILACAP<br>SEKRETARIS<BR>u.b. <br> KABID PENELITIAN DAN PENGEMBANGAN', 'on', 'bappeda', '1593920679.png'),
(15, 'TITI SUWARNI, SH., M.Si', '196801041990032005', 'Pembina', '5', 'a.n KEPALA BADAN KESATUAN BANGSA DAN POLITIK<br>KABUPATEN CILACAP<br>Kabid Wawasan Kebangsaan', 'on', 'kesbangpol', '1593590649.png'),
(16, 'Ir. SRI SUPARTINI., M.M', '1964 07191993032003', 'Pembina Tingkat I', '5', 'a.n<br>KEPALA BADAN KESATUAN BANGSA DAN POLITIK<br>KABUPATEN CILACAP<br>SEKRETARIS', 'on', 'kesbangpol', '1593590825.png'),
(17, 'SUMBOWO, S.Sos, M.Si', '19691113 199001 1 001', 'PEMBINA UTAMA MUDA', '5', 'KEPALA BAPPEDA KAB. CILACAP', 'on', 'bappeda', '1593663640.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `tbl_permohonan`
--
ALTER TABLE `tbl_permohonan`
  ADD PRIMARY KEY (`id_permohonan`);

--
-- Indeks untuk tabel `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD UNIQUE KEY `eml` (`email`),
  ADD UNIQUE KEY `no_hp` (`no_hp`);

--
-- Indeks untuk tabel `tbl_ttd`
--
ALTER TABLE `tbl_ttd`
  ADD PRIMARY KEY (`id_ttd`),
  ADD UNIQUE KEY `nip_ttd` (`nip_ttd`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_permohonan`
--
ALTER TABLE `tbl_permohonan`
  MODIFY `id_permohonan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  MODIFY `id_peserta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_ttd`
--
ALTER TABLE `tbl_ttd`
  MODIFY `id_ttd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
