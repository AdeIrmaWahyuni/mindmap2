-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2023 pada 14.35
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mindmap2`
--

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
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `pesan`, `created_at`, `updated_at`, `users_id`) VALUES
(1, 'qqqqqqqqq', '2023-05-29 03:48:35', '2023-05-29 03:48:35', 1),
(2, 'Menambah pemisah', '2023-06-12 06:03:00', '2023-06-12 06:03:00', 1),
(3, 'Menghapus Data pemisah', '2023-06-12 06:08:33', '2023-06-12 06:08:33', 1),
(4, 'Menambah Data Penilaian Kerja', '2023-06-12 06:23:37', '2023-06-12 06:23:37', 9),
(5, 'Menghapus Data Penilaian Kerja', '2023-06-12 06:26:17', '2023-06-12 06:26:17', 9),
(6, 'Menambah pemisah', '2023-06-12 06:27:17', '2023-06-12 06:27:17', 9),
(7, 'Memperbarui pemisah', '2023-06-12 06:27:35', '2023-06-12 06:27:35', 9),
(8, 'Menghapus Data pemisah', '2023-06-12 06:27:43', '2023-06-12 06:27:43', 9),
(9, 'Menghapus Data Penilaian Kerja', '2023-06-14 20:46:56', '2023-06-14 20:46:56', 1),
(10, 'Menambah Data Penilaian Kerja', '2023-06-14 21:02:29', '2023-06-14 21:02:29', 1),
(11, 'Menambah Data Penilaian Kerja', '2023-06-16 01:29:39', '2023-06-16 01:29:39', 1),
(12, 'Menambah Data Penilaian Kerja', '2023-06-16 01:35:56', '2023-06-16 01:35:56', 1),
(13, 'Menghapus Data Penilaian Kerja', '2023-06-16 03:03:28', '2023-06-16 03:03:28', 1),
(14, 'Menambah Data Penilaian Kerja', '2023-06-16 03:04:05', '2023-06-16 03:04:05', 1),
(15, 'Menambah Data Penilaian Kerja', '2023-06-16 03:25:56', '2023-06-16 03:25:56', 1),
(16, 'Memperbarui Data Penilaian Kerja', '2023-06-16 03:37:47', '2023-06-16 03:37:47', 1),
(17, 'Menambah pemisahkriteriaau', '2023-06-26 01:37:36', '2023-06-26 01:37:36', 1),
(18, 'Menghapus Data pemisah', '2023-06-26 01:38:41', '2023-06-26 01:38:41', 1),
(19, 'Menambah pemisahnama1', '2023-06-26 01:38:50', '2023-06-26 01:38:50', 1),
(20, 'Menambah pemisahdgdgffe', '2023-06-26 01:46:30', '2023-06-26 01:46:30', 1),
(21, 'Memperbarui Pemisah dgdgffe Menjadi aaaa', '2023-06-26 02:01:34', '2023-06-26 02:01:34', 1),
(22, 'Menambah Data Penilaian Kerja a\nPada Kriteria aaaa', '2023-06-26 02:22:54', '2023-06-26 02:22:54', 1),
(23, 'Memperbarui Data Penilaian Kerja  Pada Kriteria aaaa', '2023-06-26 02:56:44', '2023-06-26 02:56:44', 1),
(24, 'Memperbarui Data Penilaian Kerja \n Nomer Butir ggggg Menjadi hhhh Pada Kriteria aaaa', '2023-06-26 03:02:19', '2023-06-26 03:02:19', 1),
(25, 'Memperbarui Data Penilaian Kerja \n Nomer Butir hhhh Menjadi jjjj\n, Bobot Penilaian a Menjadi jjjj\n, Elemen Penilaian dxgdsgsgsegd Menjadi jjjj\n, Baik Jika fger Menjadi jjjj\n, Penilaian 6 Menjadi 4\n, Hasil Asesmen fesf Menjadi jjj Pada Kriteria nama1', '2023-06-26 03:13:54', '2023-06-26 03:13:54', 1),
(26, 'Menambah pemisah panjang', '2023-06-26 03:19:47', '2023-06-26 03:19:47', 1),
(27, 'Menambah Data Penilaian Kerja a Pada Kriteria Kriteria2 Tata Pamong, Tata Kelola, Kerjasama', '2023-06-26 03:21:02', '2023-06-26 03:21:02', 1),
(28, 'Memperbarui Data Penilaian Kerja \n, Kereteria aaaa Menjadi aaaa', '2023-06-26 03:28:52', '2023-06-26 03:28:52', 1),
(29, 'Memperbarui Data Penilaian Kerja \n, Kereteria panjang Menjadi panjang', '2023-06-26 03:29:51', '2023-06-26 03:29:51', 1),
(30, 'Memperbarui Data Penilaian Kerja \n, Kereteria aaaa Menjadi aaaa', '2023-06-26 03:30:32', '2023-06-26 03:30:32', 1),
(31, 'Memperbarui Data Penilaian Kerja \n, Kereteria Menjadi panjang', '2023-06-26 03:33:35', '2023-06-26 03:33:35', 1),
(32, 'Menghapus Data Penilaian Kerja, dengan no butir jjjjjPada kreteria panjang', '2023-06-26 03:48:57', '2023-06-26 03:48:57', 1),
(33, 'Memperbarui Data Penilaian Kerja \n Nomer Butir 1 Menjadi zambe\n, Penilaian  Menjadi 5 Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-06 02:21:33', '2023-07-06 02:21:33', 1),
(34, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-06 02:38:05', '2023-07-06 02:38:05', 1),
(35, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-06 02:41:35', '2023-07-06 02:41:35', 1),
(36, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-06 02:47:19', '2023-07-06 02:47:19', 1),
(37, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-06 02:48:24', '2023-07-06 02:48:24', 1),
(38, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-06 02:49:50', '2023-07-06 02:49:50', 1),
(39, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-06 03:03:51', '2023-07-06 03:03:51', 1),
(40, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-06 03:05:41', '2023-07-06 03:05:41', 1),
(41, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-06 03:11:43', '2023-07-06 03:11:43', 1),
(42, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-06 03:11:58', '2023-07-06 03:11:58', 1),
(43, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-06 03:12:47', '2023-07-06 03:12:47', 1),
(44, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-06 03:16:26', '2023-07-06 03:16:26', 1),
(45, 'Menambah Data Penilaian Kerja zas Pada Kriteria panjang', '2023-07-06 03:28:31', '2023-07-06 03:28:31', 1),
(46, 'Menghapus Data Penilaian Kerja, Dengan Nomer Butir zas Pada Kriteria panjang', '2023-07-06 03:47:32', '2023-07-06 03:47:32', 1),
(47, 'Menambah Data Penilaian Kerja qwerty Pada Kriteria Kriteria', '2023-07-06 03:49:31', '2023-07-06 03:49:31', 1),
(48, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria', '2023-07-10 01:40:57', '2023-07-10 01:40:57', 1),
(49, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria', '2023-07-10 01:41:40', '2023-07-10 01:41:40', 1),
(50, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria', '2023-07-10 01:42:15', '2023-07-10 01:42:15', 1),
(51, 'Memperbarui Data Penilaian Kerja \n, Penilaian  Menjadi 3 Pada Kriteria Kriteria', '2023-07-10 01:42:30', '2023-07-10 01:42:30', 1),
(52, 'Memperbarui Data Penilaian Kerja \n, Penilaian  Menjadi 2 Pada Kriteria Kriteria', '2023-07-10 01:42:49', '2023-07-10 01:42:49', 1),
(53, 'Memperbarui Data Penilaian Kerja \n, Penilaian  Menjadi 4 Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-10 01:48:11', '2023-07-10 01:48:11', 1),
(54, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria', '2023-07-10 02:01:33', '2023-07-10 02:01:33', 1),
(55, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria', '2023-07-10 02:01:57', '2023-07-10 02:01:57', 1),
(56, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-10 02:07:39', '2023-07-10 02:07:39', 1),
(57, 'Memperbarui Data Penilaian Kerja \n, Penilaian 1 Menjadi 2 Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-10 02:07:54', '2023-07-10 02:07:54', 1),
(58, 'Memperbarui Data Penilaian Kerja \n, Penilaian 2 Menjadi 3 Pada Kriteria Kriteria', '2023-07-10 02:10:17', '2023-07-10 02:10:17', 1),
(59, 'Memperbarui Data Penilaian Kerja \n, Penilaian 4 Menjadi 2 Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-10 02:10:28', '2023-07-10 02:10:28', 1),
(60, 'Memperbarui Data Penilaian Kerja \n, Penilaian  Menjadi 1 Pada Kriteria Kriteria4 Sumber Daya Manusia', '2023-07-10 02:13:19', '2023-07-10 02:13:19', 1),
(61, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria4 Sumber Daya Manusia', '2023-07-10 02:13:33', '2023-07-10 02:13:33', 1),
(62, 'Memperbarui Data Penilaian Kerja \n, Penilaian 1 Menjadi 5 Pada Kriteria Kriteria4 Sumber Daya Manusia', '2023-07-10 02:13:45', '2023-07-10 02:13:45', 1),
(63, 'Memperbarui Data Penilaian Kerja \n, Penilaian 5 Menjadi 1 Pada Kriteria Kriteria4 Sumber Daya Manusia', '2023-07-10 02:13:59', '2023-07-10 02:13:59', 1),
(64, 'Memperbarui Data Penilaian Kerja \n, Penilaian  Menjadi 4 Pada Kriteria Kriteria4 Sumber Daya Manusia', '2023-07-10 02:15:44', '2023-07-10 02:15:44', 1),
(65, 'Memperbarui Data Penilaian Kerja \n, Penilaian  Menjadi 4 Pada Kriteria Kriteria4 Sumber Daya Manusia', '2023-07-10 02:16:26', '2023-07-10 02:16:26', 1),
(66, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria4 Sumber Daya Manusia', '2023-07-10 02:24:12', '2023-07-10 02:24:12', 1),
(67, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria4 Sumber Daya Manusia', '2023-07-10 02:24:34', '2023-07-10 02:24:34', 1),
(68, 'Menambah Data Penilaian Kerja 1 Pada Kriteria Kriteria4 Sumber Daya Manusia', '2023-07-10 02:28:22', '2023-07-10 02:28:22', 1),
(69, 'Memperbarui Data Penilaian Kerja \n, Penilaian 4 Menjadi 5 Pada Kriteria Kriteria4 Sumber Daya Manusia', '2023-07-10 02:29:02', '2023-07-10 02:29:02', 1),
(70, 'Memperbarui Data Penilaian Kerja \n, Penilaian 4 Menjadi 2 Pada Kriteria Kriteria4 Sumber Daya Manusia', '2023-07-10 02:33:10', '2023-07-10 02:33:10', 1),
(71, 'Memperbarui Data Penilaian Kerja \n, Penilaian 2 Menjadi 5 Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-10 02:37:09', '2023-07-10 02:37:09', 1),
(72, 'Memperbarui Data Penilaian Kerja \n, Penilaian 3 Menjadi 4 Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-10 02:42:00', '2023-07-10 02:42:00', 1),
(73, 'Menghapus Data Penilaian Kerja, Dengan Nomer Butir zambe Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-10 02:47:50', '2023-07-10 02:47:50', 1),
(74, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria4 Sumber Daya Manusia', '2023-07-10 02:50:16', '2023-07-10 02:50:16', 1),
(75, 'Memperbarui Data Penilaian Kerja \n, Penilaian 3 Menjadi -1 Pada Kriteria Kriteria', '2023-07-10 03:31:11', '2023-07-10 03:31:11', 1),
(76, 'Memperbarui Data Penilaian Kerja \n, Penilaian -1 Menjadi 4 Pada Kriteria Kriteria', '2023-07-10 03:31:29', '2023-07-10 03:31:29', 1),
(77, 'Menambah Data Penilaian Kerja 1 Pada Kriteria nama1', '2023-07-10 03:32:13', '2023-07-10 03:32:13', 1),
(78, 'Memperbarui Data Penilaian Kerja \n, Link  Menjadi http//google.com Pada Kriteria nama1', '2023-07-10 03:32:39', '2023-07-10 03:32:39', 1),
(79, 'Menambah Data Penilaian Kerja 131 Pada Kriteria panjang', '2023-07-10 03:35:22', '2023-07-10 03:35:22', 9),
(80, 'Memperbarui Data Penilaian Kerja \n, Penilaian 3 Menjadi 4 Pada Kriteria panjang', '2023-07-10 03:35:56', '2023-07-10 03:35:56', 9),
(81, 'Memperbarui Data Penilaian Kerja \n, Kereteria Menjadi aaaa', '2023-07-10 03:36:10', '2023-07-10 03:36:10', 9),
(82, 'Memperbarui Data Penilaian Kerja \n, Elemen Penilaian da Menjadi qwer Pada Kriteria aaaa', '2023-07-10 03:43:59', '2023-07-10 03:43:59', 1),
(83, 'Memperbarui Data Penilaian Kerja \n Nomer Butir 131 Menjadi 130 Pada Kriteria aaaa', '2023-07-10 11:46:34', '2023-07-10 11:46:34', 1),
(84, 'Menghapus Kriteriapanjang', '2023-07-15 11:11:44', '2023-07-15 11:11:44', 1),
(85, 'Menghapus Data Penilaian Kerja, Dengan Nomer Butir 1 Pada Kriteria nama1', '2023-07-15 11:12:28', '2023-07-15 11:12:28', 1),
(86, 'Menghapus Data Penilaian Kerja, Dengan Nomer Butir 130 Pada Kriteria aaaa', '2023-07-15 11:13:49', '2023-07-15 11:13:49', 1),
(87, 'Menghapus Data Penilaian Kerja, Dengan Nomer Butir qwerty Pada Kriteria Kriteria', '2023-07-15 11:14:41', '2023-07-15 11:14:41', 1),
(88, 'Menghapus Kriteriaaaaa', '2023-07-15 11:15:11', '2023-07-15 11:15:11', 1),
(89, 'Menghapus Kriterianama1', '2023-07-15 11:15:21', '2023-07-15 11:15:21', 1),
(90, 'Menghapus Data Penilaian Kerja, Dengan Nomer Butir m Pada Kriteria Kriteria4 Sumber Daya Manusia', '2023-07-15 11:17:34', '2023-07-15 11:17:34', 1),
(91, 'Menghapus Data Penilaian Kerja, Dengan Nomer Butir 1 Pada Kriteria Kriteria4 Sumber Daya Manusia', '2023-07-15 11:17:51', '2023-07-15 11:17:51', 1),
(92, 'Menghapus Data Penilaian Kerja, Dengan Nomer Butir qqqq Pada Kriteria Kriteria4 Sumber Daya Manusia', '2023-07-15 11:18:05', '2023-07-15 11:18:05', 1),
(93, 'Menghapus Data Penilaian Kerja, Dengan Nomer Butir l Pada Kriteria Kriteria4 Sumber Daya Manusia', '2023-07-15 11:18:15', '2023-07-15 11:18:15', 1),
(94, 'Menghapus Data Penilaian Kerja, Dengan Nomer Butir yyyyyyyy Pada Kriteria Kriteria4 Sumber Daya Manusia', '2023-07-15 11:18:27', '2023-07-15 11:18:27', 1),
(95, 'Menghapus Data Penilaian Kerja, Dengan Nomer Butir sq Pada Kriteria Kriteria4 Sumber Daya Manusia', '2023-07-15 11:18:38', '2023-07-15 11:18:38', 1),
(96, 'Menghapus KriteriaKriteria4 Sumber Daya Manusia', '2023-07-15 11:19:00', '2023-07-15 11:19:00', 1),
(97, 'Menambah pemisah Kriteria4 Sumber Daya Manusia', '2023-07-15 11:19:40', '2023-07-15 11:19:40', 1),
(98, 'Memperbarui Data Penilaian Kerja \n Nomer Butir 1 Menjadi 5 Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-15 11:36:15', '2023-07-15 11:36:15', 1),
(99, 'Menambah Data Penilaian Kerja 4 Pada Kriteria Kriteria4 Sumber Daya Manusia', '2023-07-15 11:42:39', '2023-07-15 11:42:39', 1),
(100, 'Menghapus Data Penilaian Kerja, Dengan Nomer Butir n Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-15 11:43:00', '2023-07-15 11:43:00', 1),
(101, 'Menghapus Data Penilaian Kerja, Dengan Nomer Butir 1 Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-15 11:43:12', '2023-07-15 11:43:12', 1),
(102, 'Menghapus Data Penilaian Kerja, Dengan Nomer Butir ef Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-15 11:43:24', '2023-07-15 11:43:24', 1),
(103, 'Menghapus Data Penilaian Kerja, Dengan Nomer Butir 123 Pada Kriteria Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-07-15 11:43:37', '2023-07-15 11:43:37', 1),
(104, 'Menghapus Data Penilaian Kerja, Dengan Nomer Butir 7 Pada Kriteria Kriteria3 Mahasiswa', '2023-07-15 11:43:57', '2023-07-15 11:43:57', 1),
(105, 'Memperbarui Data Penilaian Kerja \n, Penilaian  Menjadi 4 Pada Kriteria Kriteria3 Mahasiswa', '2023-07-15 11:48:48', '2023-07-15 11:48:48', 1),
(106, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria2 Tata Pamong, Tata Kelola, Kerjasama', '2023-07-15 11:53:05', '2023-07-15 11:53:05', 1),
(107, 'Memperbarui Data Penilaian Kerja \n, Penilaian 4 Menjadi 1 Pada Kriteria Kriteria3 Mahasiswa', '2023-07-15 11:53:30', '2023-07-15 11:53:30', 1),
(108, 'Memperbarui Data Penilaian Kerja \n, Penilaian 4 Menjadi 3 Pada Kriteria Kriteria2 Tata Pamong, Tata Kelola, Kerjasama', '2023-07-15 11:53:47', '2023-07-15 11:53:47', 1),
(109, 'Menambah Data Penilaian Kerja A Pada Kriteria Kriteria4 Sumber Daya Manusia', '2023-08-01 03:02:11', '2023-08-01 03:02:11', 1),
(110, 'Memperbarui Data Penilaian Kerja \n, Baik Jika akreditasi Menjadi akreditasi prodi\n, Penilaian 1 Menjadi 4 Pada Kriteria Kriteria4 Sumber Daya Manusia', '2023-08-01 03:03:00', '2023-08-01 03:03:00', 1),
(111, 'Menambah pemisah kriteria5 trpl', '2023-08-01 03:04:38', '2023-08-01 03:04:38', 1),
(112, 'Menambah Data Penilaian Kerja a Pada Kriteria kriteria5 trpl', '2023-08-01 03:05:22', '2023-08-01 03:05:22', 1),
(113, 'Memperbarui Data Penilaian Kerja \n, Penilaian 3 Menjadi 4 Pada Kriteria Kriteria', '2023-08-01 03:26:39', '2023-08-01 03:26:39', 1),
(114, 'Memperbarui Data Penilaian Kerja \n, Link  Menjadi google.com/ Pada Kriteria Kriteria', '2023-08-01 03:27:41', '2023-08-01 03:27:41', 1),
(115, 'Memperbarui Data Penilaian Kerja \n, Link google.com/ Menjadi https://www.google.com/ Pada Kriteria Kriteria', '2023-08-01 03:28:07', '2023-08-01 03:28:07', 1),
(116, 'Memperbarui Data Penilaian Kerja \n, Link https://www.google.com/ Menjadi https://www.google.com/\r\nhttps://www.facebook.com/\r\nhttps://www.youtube.com/ Pada Kriteria Kriteria', '2023-08-01 03:28:50', '2023-08-01 03:28:50', 1),
(117, 'Menambah Data Penilaian Kerja aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa Pada Kriteria Kriteria', '2023-08-09 05:24:00', '2023-08-09 05:24:00', 1),
(118, 'Memperbarui Data Penilaian Kerja  Pada Kriteria Kriteria', '2023-08-09 05:25:41', '2023-08-09 05:25:41', 1),
(119, 'Memperbarui Data Penilaian Kerja \n Nomer Butir aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa Menjadi aaaaaaaaaaa Pada Kriteria Kriteria', '2023-08-09 05:32:50', '2023-08-09 05:32:50', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(2, 'App\\Models\\PenilaianKerja', 16, '720a9538-268e-4462-8989-dc1274872525', 'file', 'aktif-kuliah-dimas', 'aktif-kuliah-dimas.doc', 'application/msword', 'public', 'public', 239104, '[]', '[]', '[]', '[]', 1, '2023-06-12 04:36:30', '2023-06-12 04:36:30'),
(3, 'App\\Models\\PenilaianKerja', 16, '9a2db71b-13c6-4de9-85eb-7bfe38188483', 'file', '39617_aktifkuliah_3q4Oq7551 (1)', '39617_aktifkuliah_3q4Oq7551-(1).docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'public', 'public', 555349, '[]', '[]', '[]', '[]', 2, '2023-06-12 04:36:30', '2023-06-12 04:36:30'),
(21, 'App\\Models\\PenilaianKerja', 2, '020da5ed-94a3-4baa-839f-f9d0fe38a1d2', 'file', 'Pedoman-Penulisan-Skripsi-1', 'Pedoman-Penulisan-Skripsi-1.pdf', 'application/pdf', 'public', 'public', 2579517, '[]', '[]', '[]', '[]', 1, '2023-07-10 03:30:20', '2023-07-10 03:30:20'),
(27, 'App\\Models\\PenilaianKerja', 34, 'd8852094-7959-4254-ae6d-b86d3f7ea444', 'file', 'sertifikat_course_51_1866152_251021101323', 'sertifikat_course_51_1866152_251021101323.pdf', 'application/pdf', 'public', 'public', 926345, '[]', '[]', '[]', '[]', 1, '2023-08-01 03:03:34', '2023-08-01 03:03:34');

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
(5, '2023_03_10_140650_create_permission_tables', 1),
(6, '2023_03_11_005017_create_minumen_table', 2),
(7, '2023_03_11_005313_create_gorengan_table', 3),
(8, '2023_03_11_010611_create_rumahs_table', 4),
(9, '2023_03_11_010732_create_rumahs_table', 5),
(10, '2023_03_11_020552_create_makanans_table', 6),
(11, '2023_06_12_113206_create_media_table', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 5),
(3, 'App\\Models\\User', 6),
(3, 'App\\Models\\User', 7),
(3, 'App\\Models\\User', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nama1@gmail.com', '$2y$10$SB.vLyPgBwkFQ8C5VqvlGug3l7VBi4CLUUSNOcCBr0IKR8o4SaAbO', '2023-03-13 03:21:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemisah`
--

CREATE TABLE `pemisah` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pemisah`
--

INSERT INTO `pemisah` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Kriteria', '2023-05-29 03:08:05', '2023-06-08 02:54:29'),
(2, 'Kriteria1 Visi, Misi, Tujuan dan Strategi', '2023-05-29 04:11:35', '2023-06-08 02:56:55'),
(4, 'Kriteria2 Tata Pamong, Tata Kelola, Kerjasama', '2023-06-08 02:56:18', '2023-06-08 02:56:18'),
(5, 'Kriteria3 Mahasiswa', '2023-06-08 02:57:22', '2023-06-08 02:57:22'),
(13, 'Kriteria4 Sumber Daya Manusia', '2023-07-15 11:19:40', '2023-07-15 11:19:40'),
(14, 'kriteria5 trpl', '2023-08-01 03:04:38', '2023-08-01 03:04:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian_kerja`
--

CREATE TABLE `penilaian_kerja` (
  `id` int(11) NOT NULL,
  `no_butir` varchar(255) DEFAULT NULL,
  `bobot_penilaian` int(11) DEFAULT NULL,
  `elemen_penilaian` varchar(255) DEFAULT NULL,
  `deskriptor` varchar(255) DEFAULT NULL,
  `baik_jika` varchar(255) DEFAULT NULL,
  `penilaian` int(11) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `hasil_asesmen` varchar(255) DEFAULT NULL,
  `lokasi_penyimpanan` varchar(240) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pemisah_id` int(11) NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `penilaian_kerja`
--

INSERT INTO `penilaian_kerja` (`id`, `no_butir`, `bobot_penilaian`, `elemen_penilaian`, `deskriptor`, `baik_jika`, `penilaian`, `link`, `hasil_asesmen`, `lokasi_penyimpanan`, `created_at`, `updated_at`, `pemisah_id`, `users_id`) VALUES
(2, 'A', 8, 'Kondisi Eksternal', 'Kemampuan UPPS dalam menganalisis aspek-aspek', 'UPPS mampu menganalisis aspek-aspek', 4, 'https://www.google.com/\r\nhttps://www.facebook.com/\r\nhttps://www.youtube.com/', 'Tersedia analisis Aspek-Aspek Makro&Mikro', NULL, '2023-05-29 03:25:39', '2023-08-01 03:28:50', 1, 1),
(4, '5', 1, 'A. Ketersediaan dokumen kebijakan, standar, IKU, dan IKT yang berkaitan dengan Visi, Misi, Tujuan, Strategi (VMTS) UPPS dan PS', 'A. Rumusan VMTS UPPS dan PS yang sesuai dengan VMTS PT, memayungi visi keilmuan program studi dan melibatkan pemangku kepentingan internal dan eksternal.', 'Tersedianya rumusan VMTS UPPS dan PS yang sangat sesuai dengan VMTS PT, memayungi visi keilmuan program studi dan melibatkan pemangku kepentingan internal dan eksternal', 4, NULL, 'Data yang ada lengkap dan sudah memenuhi syarat', NULL, '2023-05-29 04:00:05', '2023-07-15 11:36:15', 2, 1),
(5, 'B', 6, 'Kondisi Eksternal', 'Kemampuan UPPS dalam menyajikan informasi', 'Kemampuan UPPS dalam menyajikan informasi', 4, NULL, 'Ketersediaan Dokumen', NULL, '2023-05-29 04:01:16', '2023-08-01 03:26:39', 1, 1),
(16, '3', 1, 'A. Ketersediaan dokumen kebijakan, standar, IKU, dan IKT yang berkaitan dengan mahasiswa', 'Sistem rekrutmen dan proses seleksi calon mahasiswa', 'Tersedianya sistem rekrutmen calon mahasiswa yang sahih dan sangat lengkap', 1, NULL, 'Data yang ada lengkap dan sudah memenuhi syarat', NULL, '2023-06-12 04:36:30', '2023-07-15 11:53:30', 5, 1),
(27, '2', 1, 'Ketersediaan dokumen yang berkaitan dengan tata kelola,tata pamong', 'Sistem tata pamong yang memenuhi aspek adil, transparan', 'Tersedianya dokumen tata pamong yang memenuhi aspek adil, transparan', 3, NULL, '4', NULL, '2023-06-26 03:21:01', '2023-07-15 11:53:47', 4, 1),
(33, '4', 2, 'Ketersediaan dokumen yang berkaitan dengan SDM', 'Ketersediaan profil DTPR(kecukupan jumlah,beban kerja EWMP dan sertifikasi kompetensi', 'Tersedianya profil DTPR disertai bukti yang sahih dan sangat lengkap', 4, NULL, 'Data yang ada lengkap dan sudah memenuhi syarat', NULL, '2023-07-15 11:42:38', '2023-07-15 11:42:38', 13, 1),
(34, 'A', 2, 'prodi', 'trpl', 'akreditasi prodi', 4, NULL, 'hasil', NULL, '2023-08-01 03:02:11', '2023-08-01 03:02:59', 13, 1),
(35, 'a', 2, 'hasil', 'trpl', 'prodi', 4, NULL, 'trpl', NULL, '2023-08-01 03:05:22', '2023-08-01 03:05:22', 14, 1),
(36, 'aaaaaaaaaaa', 3, 'aaaaaaaaaaaa', 'aaaaa', 'aaaaaaa', 6, 'https://chat.openai.com/c/8efbc79b-bca5-4b02-afb4-4aa51146d986', 'aaaaaaaa', 'aaaaaaaaab', '2023-08-09 05:23:59', '2023-08-09 05:32:50', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Edit Pengguna', 'web', '2023-03-13 01:35:44', '2023-03-13 01:48:12'),
(2, 'Hapus Data', 'web', '2023-03-13 01:47:57', '2023-03-13 01:47:57'),
(3, 'Tambah Data', 'web', '2023-03-13 01:48:31', '2023-03-13 01:48:31'),
(4, 'lihat data', 'web', '2023-03-13 01:50:55', '2023-03-13 01:51:06');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-03-10 20:50:39', '2023-03-10 20:50:39'),
(3, 'dosen', 'web', '2023-03-13 00:39:15', '2023-05-29 00:54:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'nama1@gmail.com', NULL, '$2y$10$m.Yq6w.yC/jyjs5XQnRueewcVdSBKD.grrmYMZAEkl0NgjI/OeocK', NULL, '2023-03-10 06:20:56', '2023-06-08 02:42:43', NULL),
(7, 'nama 2', 'nama2@gmail.com', NULL, '$2y$10$x/8.DLKkxjDw.4UHrZow2eMS5EY.kK2tFKDO3Fb4V38zR3UH5CtYa', NULL, '2023-03-13 01:06:37', '2023-05-29 05:06:16', '2023-05-29 05:06:16'),
(8, 'Koir herianto', 'koir.harianto@gmail.com', NULL, '$2y$10$JOg5YDPWZbTfrWHfbtvvReNMe4CYBVAPlTLQINzItdfkow5Ed01A2', NULL, '2023-03-20 21:30:11', '2023-05-29 05:06:23', '2023-05-29 05:06:23'),
(9, 'Pak Asep', 'pakasep@coy.com', NULL, '$2y$10$34viYqjOYpN8VMvg.JP.E.63B5JnRkTjU.7BcK3RvDMG.tm.586i.', NULL, '2023-06-12 06:16:44', '2023-06-12 06:16:44', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_log_users1_idx` (`users_id`);

--
-- Indeks untuk tabel `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pemisah`
--
ALTER TABLE `pemisah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penilaian_kerja`
--
ALTER TABLE `penilaian_kerja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_penilaian_kerja_pemisah1_idx` (`pemisah_id`),
  ADD KEY `fk_penilaian_kerja_users1_idx` (`users_id`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT untuk tabel `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pemisah`
--
ALTER TABLE `pemisah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `penilaian_kerja`
--
ALTER TABLE `penilaian_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `fk_log_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penilaian_kerja`
--
ALTER TABLE `penilaian_kerja`
  ADD CONSTRAINT `fk_penilaian_kerja_pemisah1` FOREIGN KEY (`pemisah_id`) REFERENCES `pemisah` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_penilaian_kerja_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
