-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2021 pada 10.43
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

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
-- Struktur dari tabel `dinas_biro`
--

CREATE TABLE `dinas_biro` (
  `id_dinasbiro` int(11) NOT NULL,
  `id_kepengurusan` int(11) NOT NULL,
  `nama_dinasbiro` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dinas_biro`
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
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `kepengurusan`
--

CREATE TABLE `kepengurusan` (
  `id_kepengurusan` int(11) NOT NULL,
  `nama_kabinet` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kepengurusan` int(11) NOT NULL,
  `logo_kabinet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kepengurusan`
--

INSERT INTO `kepengurusan` (`id_kepengurusan`, `nama_kabinet`, `periode`, `status_kepengurusan`, `logo_kabinet`) VALUES
(1, 'GEMA', '2019', 0, 'navigasi.jpg'),
(3, 'Start Up', '2021', 0, 'profile.png'),
(4, 'Cakrawala', '2022', 1, 'start-up.jpeg'),
(7, 'start-up', '2020', 0, 'WhatsApp Image 2021-09-26 at 10.06.59.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
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
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
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
  `surat_pernyataan` varchar(255) NOT NULL,
  `status_kelulusan` int(11) NOT NULL,
  `tahun_daftar` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `id_kepengurusan`, `nama`, `nim`, `jurusan`, `email`, `no_hp`, `tempat_lahir`, `tgl_lahir`, `transkrip_nilai`, `krs`, `foto`, `motto`, `kelebihan`, `kekurangan`, `motivasi`, `surat_pernyataan`, `status_kelulusan`, `tahun_daftar`) VALUES
(21001, 4, 'Latifatuzikra Suhairi', '1911522005', 2, 'latifatuzikra@gmail.com', '08126783993', 'Padang', '2001-10-09', '1911522005_LatifatuzikraSuhairi_TranskripNilai.pdf-1640030953-pdf', '1911522005_LatifatuzikraSuhairi_KRS.pdf-1640030953-pdf', '1911522005_LatifatuzikraSuhairi_KRS.pdf-1640030953-jpg', 'YOLO', 'Pekerja keras', 'Perfeksionis', 'Membenahi BEM', '1911522005_LatifatuzikraSuhairi_Surat Pernyataan.pdf-1640030953-pdf', 1, 2021),
(21002, 4, 'Laila Rahmatul Aufa', '1911523005', 2, 'laila@gmail.com', '08126783991', 'Padang', '2001-12-21', '1911522005_LatifatuzikraSuhairi_TranskripNilai.pdf-1640043040-pdf', '1911522005_LatifatuzikraSuhairi_KRS.pdf-1640043040-pdf', '1911522005_LatifatuzikraSuhairi_KRS.pdf-1640043040-jpg', 'YOI', 'Rajin', 'Perfeksionis', 'Mengasah kemampuan', '1911522005_LatifatuzikraSuhairi_Surat Pernyataan.pdf-1640043040-pdf', 1, 2021);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus`
--

CREATE TABLE `pengurus` (
  `id_pengurus` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `id_dinasbiro` int(11) NOT NULL,
  `alamat_skrng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goldar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `riwayat_penyakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anak_ke` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_saudara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sosmed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orang_tua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_ukt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cita_cita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prestasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organisasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beasiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bisnis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_mentoring` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengurus`
--

INSERT INTO `pengurus` (`id_pengurus`, `id_pendaftaran`, `id_dinasbiro`, `alamat_skrng`, `alamat_asal`, `goldar`, `riwayat_penyakit`, `suku`, `anak_ke`, `jumlah_saudara`, `sosmed`, `orang_tua`, `level_ukt`, `cita_cita`, `hobi`, `prestasi`, `organisasi`, `beasiswa`, `bisnis`, `status_mentoring`, `jabatan`, `password`, `role`) VALUES
(17, 21001, 4, 'jl jaya', 'jl saaa', '1', 'tidak ada', 'Minang', '1 (satu)', '1 (satu)', 'ig @latifa', 'Saaa', '3', 'Programmer', 'Mendaki', 'Juara 2 Lomba essay nasional', 'Belum ada', 'Tidak ada', 'Belum ada', '2', 'Sekretaris bidang', '$2y$10$VtsnXUFKxWoJIPUR0AaCLuRS80tiPTAVFgoYucyBzafe25.wM9Wb2', ''),
(18, 21002, 3, 'jl sinaga', 'jl bayangan', '2', 'Tidak ada', 'Minang', '4 (empat)', '4 (empat)', 'ig @lailaaa', 'Darman', '3', 'Sistem Analis', 'Berenang', 'Juara 1 Lomba Berenang', 'Anggota BEM 2021', 'Beasiswa BNI', 'Belum ada', '1', 'Sekretaris', '$2y$10$3.vLD7IvarW3oiXl0vJup.exE1qG7alARTJoN3L/mttBb8W3333Q6', 'pengurus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `pilihan_daftar`
--

CREATE TABLE `pilihan_daftar` (
  `id_pilihan_dinas_biro` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `id_pilihan` int(11) NOT NULL,
  `alasan_pil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pilihan_daftar`
--

INSERT INTO `pilihan_daftar` (`id_pilihan_dinas_biro`, `id_pendaftaran`, `id_pilihan`, `alasan_pil`) VALUES
(9, 21001, 6, 'Menyejahterakan mahasiswa'),
(10, 21001, 5, 'Mengembangkan SDM FTI'),
(11, 21002, 7, 'Menjaga Hubungan Masayaratkat Internal dan Eksternal FTI'),
(12, 21002, 3, 'Mengembangkan SDM FTI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Indeks untuk tabel `dinas_biro`
--
ALTER TABLE `dinas_biro`
  ADD PRIMARY KEY (`id_dinasbiro`),
  ADD KEY `dinas_biro_kepengurusan` (`id_kepengurusan`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kepengurusan`
--
ALTER TABLE `kepengurusan`
  ADD PRIMARY KEY (`id_kepengurusan`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `pendaftaran_kepengurusan` (`id_kepengurusan`);

--
-- Indeks untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id_pengurus`),
  ADD KEY `pendaftaran_pengurus` (`id_pendaftaran`),
  ADD KEY `dinasbiro_pengurus` (`id_dinasbiro`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pilihan_daftar`
--
ALTER TABLE `pilihan_daftar`
  ADD PRIMARY KEY (`id_pilihan_dinas_biro`),
  ADD KEY `pilihan_daftar_dinas_biro` (`id_pilihan`),
  ADD KEY `pendaftaran_pilihan_daftar` (`id_pendaftaran`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dinas_biro`
--
ALTER TABLE `dinas_biro`
  MODIFY `id_dinasbiro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kepengurusan`
--
ALTER TABLE `kepengurusan`
  MODIFY `id_kepengurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pilihan_daftar`
--
ALTER TABLE `pilihan_daftar`
  MODIFY `id_pilihan_dinas_biro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dinas_biro`
--
ALTER TABLE `dinas_biro`
  ADD CONSTRAINT `dinas_biro_kepengurusan` FOREIGN KEY (`id_kepengurusan`) REFERENCES `kepengurusan` (`id_kepengurusan`);

--
-- Ketidakleluasaan untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_kepengurusan` FOREIGN KEY (`id_kepengurusan`) REFERENCES `kepengurusan` (`id_kepengurusan`);

--
-- Ketidakleluasaan untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  ADD CONSTRAINT `dinasbiro_pengurus` FOREIGN KEY (`id_dinasbiro`) REFERENCES `dinas_biro` (`id_dinasbiro`),
  ADD CONSTRAINT `pendaftaran_pengurus` FOREIGN KEY (`id_pendaftaran`) REFERENCES `pendaftaran` (`id_pendaftaran`);

--
-- Ketidakleluasaan untuk tabel `pilihan_daftar`
--
ALTER TABLE `pilihan_daftar`
  ADD CONSTRAINT `pendaftaran_pilihan_daftar` FOREIGN KEY (`id_pendaftaran`) REFERENCES `pendaftaran` (`id_pendaftaran`),
  ADD CONSTRAINT `pilihan_daftar_dinas_biro` FOREIGN KEY (`id_pilihan`) REFERENCES `dinas_biro` (`id_dinasbiro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
