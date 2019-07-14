-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2019 pada 13.25
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_template`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isiberita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `judul`, `isiberita`, `foto`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'MEMBANGUN', 'MEMBANGUN', 'foto/20190714074025.png', NULL, '2019-07-14 00:40:25', '2019-07-14 00:40:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `act` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `logs`
--

INSERT INTO `logs` (`id`, `id_user`, `act`, `created_at`, `updated_at`) VALUES
(1, '1', 'TAMBAH PROFILE', '2019-07-12 21:04:16', '2019-07-12 21:04:16'),
(2, '1', 'TAMBAH PROFILE', '2019-07-12 21:36:54', '2019-07-12 21:36:54'),
(3, '1', 'EDIT PROFIL DESA', '2019-07-12 21:41:58', '2019-07-12 21:41:58'),
(4, '1', 'DELETE PROFILE', '2019-07-12 21:42:25', '2019-07-12 21:42:25'),
(5, '1', 'TAMBAH SEJARAH DESA', '2019-07-14 00:36:24', '2019-07-14 00:36:24'),
(6, '1', 'DELETE SEJARAH DESA', '2019-07-14 00:38:07', '2019-07-14 00:38:07'),
(7, '1', 'TAMBAH BERITA', '2019-07-14 00:40:25', '2019-07-14 00:40:25'),
(8, '1', 'TAMBAH PENDUDUK', '2019-07-14 00:48:25', '2019-07-14 00:48:25'),
(9, '1', 'TAMBAH VISI MISI', '2019-07-14 01:27:38', '2019-07-14 01:27:38'),
(10, '1', 'TAMBAH PROFILE', '2019-07-14 01:27:52', '2019-07-14 01:27:52'),
(11, '1', 'TAMBAH SEJARAH DESA', '2019-07-14 01:28:04', '2019-07-14 01:28:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_04_081947_create_table_penduduk', 1),
(4, '2019_05_09_141124_create_table_visimisi', 1),
(5, '2019_07_07_061940_create_table_blog', 1),
(6, '2019_07_10_024956_create_table_logs', 1),
(7, '2019_07_13_032111_create_table_profil', 1),
(8, '2019_07_14_072025_create_table_sejarah', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `kk` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_perkawinan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gol_darah` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warga_negara` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`kk`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `rt`, `rw`, `desa`, `kecamatan`, `agama`, `status_perkawinan`, `pekerjaan`, `gol_darah`, `warga_negara`, `deleted_at`, `created_at`, `updated_at`) VALUES
('12345', 12345, 'Gunawan', 'Tegal', '2019-07-01', 'L', 'Jalan Temanggung Margadana', '3', '6', 'Margadana', 'Margadana', 'islam', 'belum', 'pns', 'b', 'wni', NULL, '2019-07-14 00:48:25', '2019-07-14 00:48:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kepala` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `kepala`, `sejarah`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Gunawan', 'HEBAT', '2019-07-13 04:30:35', '2019-07-12 21:04:16', '2019-07-12 21:30:35'),
(2, 'Gunawan', 'SUKSES SELALU', '2019-07-13 04:42:25', '2019-07-12 21:36:55', '2019-07-12 21:42:25'),
(3, 'Gunawan', 'Adalah', NULL, '2019-07-14 01:27:52', '2019-07-14 01:27:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah`
--

CREATE TABLE `sejarah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sejarah` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sejarah`
--

INSERT INTO `sejarah` (`id`, `sejarah`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'SEJARAH', '2019-07-14 07:38:07', '2019-07-14 00:36:24', '2019-07-14 00:38:07'),
(2, 'Bermula .....', NULL, '2019-07-14 01:28:04', '2019-07-14 01:28:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gunawan', 'gunawanr14@gmail.com', NULL, '$2y$10$CL9NDpqRpOPd/YuO7TtodO8YKjAW40A8EJqNXiMdOTN4TkXSizSAS', NULL, '2019-07-12 20:57:47', '2019-07-12 20:57:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visimisi`
--

CREATE TABLE `visimisi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `visimisi`
--

INSERT INTO `visimisi` (`id`, `visi`, `misi`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Membangun Desa', 'Membangun Desa', NULL, '2019-07-14 01:27:38', '2019-07-14 01:27:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
