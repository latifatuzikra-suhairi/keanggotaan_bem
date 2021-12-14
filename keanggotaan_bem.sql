-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Dec 13, 2021 at 08:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keanggotaan_bem`
--

-- --------------------------------------------------------

--
-- Table structure for table `dinas_biro`
--

CREATE TABLE `dinas_biro` (
  `id_dinasbiro` int(11) NOT NULL,
  `id_kepengurusan` int(11) NOT NULL,
  `nama_dinasbiro` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dinas_biro`
--

INSERT INTO `dinas_biro` (`id_dinasbiro`, `id_kepengurusan`, `nama_dinasbiro`) VALUES
(1, 3, 'Dinas Pengembangan Sumber Daya Manusia'),
(2, 3, 'Dinas Advokasi dan Kesejahteraan Mahasiswa'),
(3, 4, 'Dinas Pengembangan Sumber Daya Manusia'),
(4, 4, 'Dinas Advokasi Kesejahteraan Mahasiswa'),
(5, 4, 'Dinas Pengembangan Sumber Daya Manusia'),
(6, 4, 'Dinas Advokasi dan Kesejahteraan Mahasiswa'),
(7, 4, 'Dinas Hubungan Masyarakat'),
(8, 4, 'Dinas Sosial Masyarakat'),
(9, 4, 'Dinas Komunikasi dan Informasi'),
(10, 4, 'Dinas Kajian Strategis'),
(11, 4, 'Biro Audit Internal'),
(12, 4, 'Biro Bisnis dan Technopreneur'),
(13, 4, 'Biro Kesekretariatan');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kepengurusan`
--

CREATE TABLE `kepengurusan` (
  `id_kepengurusan` int(11) NOT NULL,
  `nama_kabinet` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kepengurusan` int(11) NOT NULL,
  `logo_kabinet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kepengurusan`
--

INSERT INTO `kepengurusan` (`id_kepengurusan`, `nama_kabinet`, `periode`, `status_kepengurusan`, `logo_kabinet`) VALUES
(1, 'GEMA', '2019', 0, NULL),
(3, 'Start Up', '2021', 0, NULL),
(4, 'Cakrawala', '2022', 1, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_25_031542_create_dinas_biro', 1),
(6, '2021_11_25_031842_create_kepengurusan', 2),
(7, '2021_11_25_032602_create_pendaftaran', 2),
(8, '2021_11_25_032625_create_pengurus', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_kepengurusan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jurusan` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `transkrip_nilai` varchar(255) NOT NULL,
  `krs` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `motto` varchar(255) NOT NULL,
  `kelebihan` varchar(255) NOT NULL,
  `kekurangan` varchar(255) NOT NULL,
  `motivasi` varchar(255) NOT NULL,
  `id_pilihan_1` int(11) NOT NULL,
  `alasan_pil_1` varchar(255) NOT NULL,
  `id_pilihan_2` int(11) NOT NULL,
  `alasan_pil_2` varchar(255) NOT NULL,
  `surat_pernyataan` varchar(255) NOT NULL,
  `status_kelulusan` int(11) NOT NULL,
  `tahun_daftar` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `id_kepengurusan`, `nama`, `nim`, `jurusan`, `email`, `no_hp`, `tempat_lahir`, `tgl_lahir`, `transkrip_nilai`, `krs`, `foto`, `motto`, `kelebihan`, `kekurangan`, `motivasi`, `id_pilihan_1`, `alasan_pil_1`, `id_pilihan_2`, `alasan_pil_2`, `surat_pernyataan`, `status_kelulusan`, `tahun_daftar`) VALUES
(1, 4, 'Latifatuzikra Suhairi', '1911522005', 2, 'latifatuzikra@gmail.com', '08126783993', 'Padang', '2001-02-09', '1911522005_LatifatuzikraSuhairi_TranskripNilai.pdf-1639424577-pdf', '1911522005_LatifatuzikraSuhairi_KRS.pdf-1639424577-pdf', '1911522005_LatifatuzikraSuhairi_KRS.pdf-1639424577-jpg', 'YOLO', 'Baik Hati', 'Perfeksionis', 'Ingin menambah isi CV', 11, 'Mau', 7, 'Mau', '1911522005_LatifatuzikraSuhairi_KK.pdf-1639424577-pdf', 0, 2021),
(2, 4, 'William Wahyu', '1911523005', 2, 'william@gmail.com', '0821368851932', 'Padang', '2001-11-02', '1911522005_LatifatuzikraSuhairi_TranskripNilai.pdf-1639425018-pdf', '1911522005_LatifatuzikraSuhairi_KRS.pdf-1639425018-pdf', '1911522005_LatifatuzikraSuhairi_KRS.pdf-1639425018-jpg', 'YOI', 'Rajin', 'Pemalas', 'Menambah CV', 5, 'Memajukan SDM FTI', 8, 'Menjaga hubungan sosmas', '1911522005_LatifatuzikraSuhairi_KK.pdf-1639425018-pdf', 0, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dinas_biro`
--
ALTER TABLE `dinas_biro`
  ADD PRIMARY KEY (`id_dinasbiro`),
  ADD KEY `dinas_biro_kepengurusan` (`id_kepengurusan`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
  ADD PRIMARY KEY (`id_kepengurusan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `pendaftaran_kepengurusan` (`id_kepengurusan`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dinas_biro`
--
ALTER TABLE `dinas_biro`
  MODIFY `id_dinasbiro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
  MODIFY `id_kepengurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dinas_biro`
--
ALTER TABLE `dinas_biro`
  ADD CONSTRAINT `dinas_biro_kepengurusan` FOREIGN KEY (`id_kepengurusan`) REFERENCES `kepengurusan` (`id_kepengurusan`);

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_kepengurusan` FOREIGN KEY (`id_kepengurusan`) REFERENCES `kepengurusan` (`id_kepengurusan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
