-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 02:32 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gom2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_user` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `nama`, `jenis_kelamin`, `no_telepon`, `alamat`, `level_user`, `created_at`, `updated_at`, `deleted_at`) VALUES
('199305282019032024', 'Alifia Puspaningrum', 'Perempuan', '081234567890', 'Dirumah', 'Dosen', '2020-04-04 07:37:44', '2020-04-05 04:25:21', NULL),
('324234', 'sfdfdsf', 'Laki-laki', '253523', 'sdasd', 'Mahasiswa', '2020-04-04 07:38:04', '2020-04-04 07:38:04', NULL),
('345345', 'dfsdfsdf', 'Perempuan', '345345345', 'dfsdfsdfsdf', 'Dosen', '2020-04-04 07:41:04', '2020-04-04 07:41:04', NULL),
('1', 'a', 'Laki-laki', '1', 'a', 'Mahasiswa', '2020-04-04 07:51:02', '2020-04-04 07:52:25', '2020-04-04 07:52:25');

-- --------------------------------------------------------

--
-- Table structure for table `chiefs`
--

CREATE TABLE `chiefs` (
  `id_kajur` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_user` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chiefs`
--

INSERT INTO `chiefs` (`id_kajur`, `nama`, `jenis_kelamin`, `no_telepon`, `alamat`, `level_user`, `created_at`, `updated_at`, `deleted_at`) VALUES
('12345', 'Iryanto', 'Laki-laki', '08909876543', 'Dirumah', 'Ketua Jurusan', '2020-04-05 04:28:20', '2020-04-05 04:28:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id_barang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_barang` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merek_barang` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_barang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi_barang` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id_barang`, `jenis_barang`, `merek_barang`, `jumlah_barang`, `kondisi_barang`, `created_at`, `updated_at`, `deleted_at`) VALUES
('1', 'Proyektor', 'Philips', '30', 'Baik', '2020-04-05 04:30:03', '2020-04-05 04:30:03', NULL),
('2', 'Tablet', 'Apple', '10', 'Baik', '2020-04-05 04:30:25', '2020-04-05 04:30:25', NULL),
('3', 'Laptop', 'Zyrex', '20', 'Baik', '2020-04-05 04:30:56', '2020-04-05 04:30:56', NULL);

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
(4, '2020_03_26_032838_create_people_table', 2),
(5, '2020_03_27_085537_add_soft_delete_to_people', 2),
(6, '2020_03_27_180828_create_chiefs_table', 2),
(7, '2020_03_27_181058_add_soft_delete_to_chiefs', 2),
(8, '2020_03_27_203043_create_admins_table', 2),
(9, '2020_03_27_203118_add_soft_delete_to_admins', 2),
(10, '2020_03_27_215756_create_rooms_table', 2),
(11, '2020_03_27_215801_add_soft_delete_to_rooms', 2),
(12, '2020_03_27_220807_create_items_table', 2),
(13, '2020_03_27_220857_add_soft_delete_to_items', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('yoga_rizkipratama@yahoo.com', '$2y$10$zE8/RmfVctOya8w00UU5/OsjxPuXMfii4OITi7XB7hodtVdA3WQZe', '2020-04-02 03:47:10');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id_user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_user` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id_user`, `nama`, `jenis_kelamin`, `no_telepon`, `alamat`, `level_user`, `created_at`, `updated_at`, `deleted_at`) VALUES
('1805029', 'Yoga Rizki Pratama', 'Laki-laki', '085659637488', 'dirumah', 'Mahasiswa', '2020-04-02 05:41:39', '2020-04-02 05:41:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id_ruangan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ruangan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_ruangan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id_ruangan`, `nama_ruangan`, `jenis_ruangan`, `created_at`, `updated_at`, `deleted_at`) VALUES
('1', 'Multimedia', 'Lab', '2020-04-05 04:32:09', '2020-04-05 04:32:09', NULL),
('2', 'A', 'RK', '2020-04-05 04:32:23', '2020-04-05 04:32:23', NULL),
('3', 'Pemrograman', 'Lab', '2020-04-05 04:32:45', '2020-04-05 04:32:45', NULL);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'yoga', 'yoga_rizkipratama@yahoo.com', NULL, '$2y$10$Ap3hKH81GsJqZnHneYqFr.mp4PGSMMKx9FhXvRdzdQ4zWhIT9xa9m', 'iguUChkRa6TpiaevAOyCqA9DDd8pA3HepGnVlSHZORha4BHgRBX0rlHxJaF3', '2020-04-02 03:45:41', '2020-04-02 03:45:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
