-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 09:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nurulhuda`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2021_01_28_014905_create_tb_pengguna_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_calon_santri`
--

CREATE TABLE `tb_calon_santri` (
  `nis` varchar(20) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nama_santri` varchar(255) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `anak_ke` varchar(255) NOT NULL,
  `prestasi` varchar(255) NOT NULL,
  `hafalan` varchar(255) NOT NULL,
  `cita_cita` varchar(255) NOT NULL,
  `hobi` text NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `no_telp_ayah` varchar(15) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `no_telp_ibu` varchar(15) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `persetujuan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_lembaga`
--

CREATE TABLE `tb_lembaga` (
  `id_lembaga` int(5) NOT NULL,
  `nama_lembaga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `nik` bigint(15) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `id_lembaga` int(5) NOT NULL,
  `bln_masuk` int(3) NOT NULL,
  `thn_masuk` int(4) NOT NULL,
  `masa_pengabdian` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`nik`, `nama_pegawai`, `jenis_kelamin`, `tempat`, `tgl_lahir`, `alamat`, `pendidikan_terakhir`, `id_lembaga`, `bln_masuk`, `thn_masuk`, `masa_pengabdian`) VALUES
(20160810127, 'Marwan Dhiaur Rahman', 'L', 'Kuningan', '10 April 1', 'Kertawangunan, Sindangagung', 'Universitas Kuningan', 1, 4, 2020, 1),
(20160810128, 'Muhammad Jahidin', 'L', 'Kuningan', '10 April 1', 'Kertawangunan, Sindangagung', 'Universitas Kuningan', 1, 4, 2020, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` bigint(20) UNSIGNED NOT NULL,
  `nama_pengguna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_pengguna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` bigint(20) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user_grup` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `email_pengguna`, `no_telp`, `username`, `password`, `gambar`, `id_user_grup`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Jahidin', 'mujahid.tib2016@gmail.com', 89123456789, 'jahidin', 'fcea920f7412b5da7be0cf42b8c93759', 'profile.png', 1, 1, '2021-01-28 01:58:18', '2021-01-29 01:58:18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa_ma`
--

CREATE TABLE `tb_siswa_ma` (
  `id_siswa_ma` int(5) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nisn` varchar(20) DEFAULT NULL,
  `thn_masuk` int(11) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `program` varchar(255) NOT NULL,
  `jalur` int(5) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `tingkat` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `no_telp_ayah` int(15) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `no_telp_ibu` varchar(15) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa_ma`
--

INSERT INTO `tb_siswa_ma` (`id_siswa_ma`, `nis`, `nisn`, `thn_masuk`, `nama_siswa`, `tempat`, `tgl_lahir`, `program`, `jalur`, `no_telp`, `tingkat`, `alamat`, `provinsi`, `kota`, `kecamatan`, `desa`, `nama_ayah`, `pekerjaan_ayah`, `no_telp_ayah`, `nama_ibu`, `pekerjaan_ibu`, `no_telp_ibu`, `alamat_ortu`, `created_at`, `updated_at`) VALUES
(1, '20160810129', '', 2020, 'Muhammad Jahidin', 'Cirebon', '10 April 1998', 'Keagamaan', 1, '089123456789', 1, 'Sindangagung', 'Jawa Barat', 'Kuningan', 'Sindangagung', 'kertawangunan', 'suwatmo', 'wiraswasta', 891234567, 'sunengsih', 'ibu rumah tangga', '0', 'sindangagung', NULL, NULL),
(2, '2016081009', NULL, 2021, 'Marwan Dhiaur Rahman', 'Cirebon', '10/04/1998', '1', 1, '089123456789', 1, 'ciledug', 'Jawa Barat', 'Kabupaten Cirebon', 'Cipicung', 'cipicung', 'fulan', 'wiraswasta', 812345678, 'fulanah', 'ibu rumah tangga', '08712345678', 'ciledug', '2021-01-31 21:26:11', '2021-01-31 21:26:11'),
(3, '2016081010', NULL, 2021, 'Maulana Harun', 'Cirebon', '10/04/1998', '1', 2, '089123456789', 2, 'ciledug', 'Jawa Timur', 'Kabupaten Purwakarta', 'Karangkancana', 'lebakwangi', 'fulan', 'wiraswasta', 812345678, 'fulanah', 'ibu rumah tangga', '08712345678', 'ciledug', '2021-01-31 21:43:16', '2021-01-31 21:43:16'),
(4, '2016081012', NULL, 2021, 'Marwan Dhiaur Rahman', 'Cirebon', '10/04/1998', '1', 1, '089123456789', 1, 'ciledug', 'Banten', 'Kabupaten Bandung Barat', 'Ciawigebang', 'lebakwangi', 'fulan', 'wiraswasta', 812345678, 'fulanah', 'ibu rumah tangga', '08712345678', 'adasd', '2021-01-31 21:45:40', '2021-01-31 21:45:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_calon_santri`
--
ALTER TABLE `tb_calon_santri`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tb_lembaga`
--
ALTER TABLE `tb_lembaga`
  ADD PRIMARY KEY (`id_lembaga`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_siswa_ma`
--
ALTER TABLE `tb_siswa_ma`
  ADD PRIMARY KEY (`id_siswa_ma`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_lembaga`
--
ALTER TABLE `tb_lembaga`
  MODIFY `id_lembaga` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_siswa_ma`
--
ALTER TABLE `tb_siswa_ma`
  MODIFY `id_siswa_ma` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
