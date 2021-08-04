-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2020 pada 22.07
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `kd_dokter` varchar(125) NOT NULL,
  `nm_dokter` varchar(125) NOT NULL,
  `spesialis` enum('Spesialis Anak','Spesialis Mata','Spesialis Kandungan','Spesialis Penyakit Dalam','Spesialis Gigi','Dokter Umum') NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(125) NOT NULL,
  `no_tlp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `kd_dokter`, `nm_dokter`, `spesialis`, `jk`, `alamat`, `no_tlp`) VALUES
(10, 'DR010', 'dr. Liu Sukirman, Sp.OG', 'Spesialis Kandungan', 'Laki-laki', 'Kemang', '0967-3332-0988'),
(11, 'DR011', 'dr. Steven Aristida, Sp.OG', 'Spesialis Kandungan', 'Laki-laki', 'Grogol ', '0857-5767-0009'),
(12, 'DR012', 'dr. Hasanuddin Alim, Sp.PD', 'Spesialis Penyakit Dalam', 'Laki-laki', 'Bekasi Timur', '0887-3320-0485'),
(13, 'DR013', 'dr. Riski Muhaimin, Sp.A', 'Spesialis Anak', 'Laki-laki', 'Kemayoran', '0884-8473-9993'),
(14, 'DR014', 'dr. Dimas Dwi Saputro, Sp.A', 'Spesialis Anak', 'Laki-laki', 'Bekasi', '0896-7654-4434'),
(15, 'DR015', 'dr. Putra Agung Wisnu Murti, Sp.OG', 'Spesialis Kandungan', 'Laki-laki', 'Jatinegara', '0887-0998-3456'),
(16, 'DR016', 'dr. Isyfahani, Sp.M', 'Spesialis Mata', 'Laki-laki', 'Pondok Indah', '0998-3466-7745'),
(17, 'DR017', 'dr. Istiqomah, Sp.KG', 'Spesialis Gigi', 'Perempuan', 'Depok', '0878-3654-8779'),
(18, 'DR018', 'dr. Imam', 'Dokter Umum', 'Laki-laki', 'Puri Indah', '0998-9987-3231'),
(19, 'DR019', 'dr. Mely', 'Dokter Umum', 'Perempuan', 'Kemanggisan', '0876-2424-0999'),
(20, 'DR020', 'dr. Ridho', 'Dokter Umum', 'Laki-laki', 'Cilandak', '0983-2321-1112'),
(21, 'DR021', 'dr. Niken', 'Dokter Umum', 'Perempuan', 'Tangerang', '0823-1213-3334'),
(22, 'DR022', 'dr. Ayu', 'Dokter Umum', 'Perempuan', 'Cipete', '0821-0990-0002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `kd_obat` varchar(50) NOT NULL,
  `nm_obat` varchar(125) NOT NULL,
  `keterangan` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `kd_obat`, `nm_obat`, `keterangan`) VALUES
(12, 'HRB001', 'Acarbose', 'Antidiabetes'),
(14, 'HRB013', 'Ambroxol', 'Obat batuk pengencer dahak'),
(15, 'HRB015', 'Amil Nitrit', 'Vasodilator'),
(16, 'HRB016', 'Amoxicillin', 'Antibiotik'),
(17, 'HRB017', 'Antangin', 'Obat untuk masuk angin'),
(18, 'HRB018', 'Betadine', 'Antiseptic'),
(19, 'HRB019', 'Bisolvon', 'Meredakan batuk'),
(20, 'HRB020', 'Busulfan', 'Kemoterapi Sitotoksik'),
(21, 'HRB021', 'Bleomycin', 'Antikanker'),
(22, 'HRB022', 'Cefixime', 'Antibiotik golongan sefalosporin'),
(23, 'HRB023', 'Cetirizine', 'Antialergi'),
(24, 'HRB024', 'Codeine', 'Obat untuk nyeri'),
(25, 'HRB025', 'Dermatix', 'Membantu menghaluskan bekas luka'),
(27, 'HRB026', 'Degirol', 'Antiseptic'),
(28, 'HRB028', 'Diapet', 'Obat mengatasi Diare'),
(29, 'HRB029', 'Diphencyprone (DPCP)', 'Imunoterapi'),
(30, 'HRB030', 'Digoxin', 'Glikosida Jantung'),
(31, 'HRB031', 'Eperisone', 'Relaxan Otot'),
(32, 'HRB032', 'Estriol', 'Terapi penggantian hormon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `no_rm` varchar(20) NOT NULL,
  `nm_pasien` varchar(50) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `gol_darah` enum('A','B','AB','O') NOT NULL,
  `tempat_lahir` varchar(125) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `no_rm`, `nm_pasien`, `jk`, `gol_darah`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_tlp`) VALUES
(14, 'RM001', 'An. Henry Saputra', 'Laki-Laki', 'O', 'Jakarta', '2016-02-09', 'Jembatan Dua', '0999-8886-8865'),
(15, 'RM015', 'Ny.  Safitri', 'Perempuan', 'A', 'Palembang', '1987-02-10', 'Grogol ', '0988-6785-9789'),
(16, 'RM016', 'An. Andi Odang', 'Laki-Laki', 'O', 'Jakarta', '2011-02-01', 'Pluit', '0812-4343-0909'),
(17, 'RM017', 'An. Angelin Sahara', 'Perempuan', 'B', 'Jakarta', '2017-02-13', 'Grogol ', '0874-2423-8324'),
(18, 'RM018', 'By. Ny. Safitri', 'Perempuan', 'A', 'Jakarta', '2020-07-08', 'Grogol ', '0988-6785-9789'),
(19, 'RM019', 'Tn. Tono Martono', 'Laki-Laki', 'AB', 'Tulungagung', '1980-09-01', 'Pluit', '0896-2422-2424'),
(20, 'RM020', 'An. Riana Putri', 'Perempuan', 'O', 'Jakarta', '2015-07-16', 'Jl. Kalianyar X ', '0887-0098-4222'),
(21, 'RM021', 'An. Eko Saputra', 'Laki-Laki', 'O', 'Jakarta', '2005-01-11', 'Jl. Dr. Semeru III', '0887-2234-1111'),
(22, 'RM022', 'An. Bunga Azzahra', 'Perempuan', 'AB', 'Jakarta', '2013-02-08', 'Jembatan Dua', '0891-1231-5764'),
(23, 'RM023', 'An. Dina Erianti', 'Perempuan', 'AB', 'Jakarta', '2002-06-11', 'Jl. Setia Kawan Roxi', '0876-0923-5682');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poliklinik`
--

CREATE TABLE `poliklinik` (
  `id_poli` int(11) NOT NULL,
  `nm_poli` varchar(125) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `poliklinik`
--

INSERT INTO `poliklinik` (`id_poli`, `nm_poli`, `harga`) VALUES
(2, 'Poliklinik Anak', 100000),
(3, 'Poliklinik Mata', 100000),
(4, 'Poliklinik Obgyn', 100000),
(5, 'Poliklinik Penyakit Dalam', 100000),
(7, 'Poliklinik Gigi', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id_registrasi` int(11) NOT NULL,
  `no_regis` varchar(125) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tgl_regis` date NOT NULL,
  `biaya` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`id_registrasi`, `no_regis`, `id_dokter`, `id_poli`, `id_pasien`, `tgl_regis`, `biaya`) VALUES
(2, 'REG002', 3, 4, 4, '2020-06-10', 0),
(3, 'REG003', 3, 4, 5, '2020-06-10', 0),
(4, 'REG004', 3, 2, 5, '2020-07-23', 0),
(5, 'REG005', 2, 2, 9, '2020-07-07', 0),
(6, 'REG006', 2, 2, 10, '2020-07-07', 0),
(7, 'REG007', 3, 4, 11, '2020-07-07', 0),
(8, 'REG008', 5, 4, 13, '2020-07-07', 0),
(9, 'REG009', 5, 4, 12, '2020-07-07', 0),
(10, 'REG0010', 21, 2, 14, '2020-11-01', 25000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `id_resep` int(11) NOT NULL,
  `kd_resep` varchar(125) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`id_resep`, `kd_resep`, `id_dokter`, `id_obat`, `id_pasien`, `keterangan`) VALUES
(2, 'RSP002', 3, 1, 4, '2x Sehari'),
(3, 'RSP003', 2, 4, 2, '2x Sehari'),
(4, 'RSP004', 2, 4, 7, 'Untuk Sakit Gigi'),
(5, 'RSP005', 3, 5, 6, 'Untuk Sakit Gigi'),
(6, 'RSP006', 10, 31, 22, 'asd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rkmedis`
--

CREATE TABLE `rkmedis` (
  `id_pasien` int(11) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `keluhan` varchar(125) NOT NULL,
  `tensi` varchar(125) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `diagnosa` varchar(125) NOT NULL,
  `id_poli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rkmedis`
--

INSERT INTO `rkmedis` (`id_pasien`, `tgl_periksa`, `keluhan`, `tensi`, `id_dokter`, `diagnosa`, `id_poli`) VALUES
(2, '2020-07-01', 'Batuk', '120', 3, 'ICD', 2),
(5, '2020-07-01', 'Batuk', '120', 5, 'ICD', 5),
(6, '2020-07-02', 'Batuk', '120', 2, 'sdfsdf', 5),
(7, '2020-11-01', 'sad', 'asd', 22, 'asd', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempattidur`
--

CREATE TABLE `tempattidur` (
  `id` int(11) NOT NULL,
  `bed_isi_kelas1` int(11) NOT NULL,
  `bed_kosong_kelas1` int(11) NOT NULL,
  `bed_isi_kelas2` int(11) NOT NULL,
  `bed_kosong_kelas2` int(11) NOT NULL,
  `bed_isi_kelas3` int(11) NOT NULL,
  `bed_kosong_kelas3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tempattidur`
--

INSERT INTO `tempattidur` (`id`, `bed_isi_kelas1`, `bed_kosong_kelas1`, `bed_isi_kelas2`, `bed_kosong_kelas2`, `bed_isi_kelas3`, `bed_kosong_kelas3`) VALUES
(1, 3, 4, 3, 4, 3, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `image` varchar(125) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`) VALUES
(7, 'admin', 'admin@gmail.com', 'IMG_20191202_232630_832.jpg', '$2y$10$0eVfVENM898k7WfVRNxVheBUpFgqGTbI3tc8hov9lx4oN5PCAq8je', 1),
(11, 'dokter', 'dokter@gmail.com', 'default.jpg', '$2y$10$ucDSijohmSFwWPxqWHqRde7DbDflVBVLprzBE5LTbqSYZEdVFWXNC', 2),
(14, 'apoteker', 'apoteker@gmail.com', 'default.jpg', '$2y$10$QhCyVCfAfcvKNO2MdPfSPeIDareMYoLaRhHDLOauzTdLx7Un8D0Nq', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id_registrasi`);

--
-- Indeks untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`);

--
-- Indeks untuk tabel `rkmedis`
--
ALTER TABLE `rkmedis`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `tempattidur`
--
ALTER TABLE `tempattidur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `poliklinik`
--
ALTER TABLE `poliklinik`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id_registrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `resep`
--
ALTER TABLE `resep`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `rkmedis`
--
ALTER TABLE `rkmedis`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tempattidur`
--
ALTER TABLE `tempattidur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
