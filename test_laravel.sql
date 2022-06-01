-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 06:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_laravel`
--

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
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2022_06_01_121250_data_rumah_sakit', 1),
(13, '2022_06_01_135542_pasien', 1);

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
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `nama_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` bigint(20) NOT NULL,
  `RS` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`ID`, `nama_pasien`, `alamat`, `no_hp`, `RS`, `created_at`, `updated_at`) VALUES
(1, 'Padma Laksita', 'Jln. Kebonjati No. 597, Batam 80613, DIY', 8955, 6, NULL, NULL),
(2, 'Daniswara Wacana', 'Jr. Gardujati No. 790, Ternate 55642, Kalbar', 8222, 3, NULL, NULL),
(3, 'Martana Wardi Permadi', 'Gg. Suprapto No. 557, Sibolga 84188, Kepri', 8532, 9, NULL, NULL),
(4, 'Zizi Queen Hariyah S.I.Kom', 'Dk. Agus Salim No. 624, Administrasi Jakarta Timur 62491, NTT', 8755, 1, NULL, NULL),
(6, 'Irfan Lantar Gunawan', 'Jln. PHH. Mustofa No. 505, Tangerang Selatan 69815, Kalbar', 8440, 9, NULL, NULL),
(7, 'Ilyas Prabowo', 'Gg. Suharso No. 403, Tasikmalaya 81821, Jateng', 8763, 6, NULL, NULL),
(8, 'Sarah Yolanda S.Farm', 'Jr. Gajah No. 846, Dumai 45426, Kalbar', 8723, 6, NULL, NULL),
(9, 'Umay Suryono', 'Jln. Kartini No. 87, Madiun 57486, Maluku', 8867, 6, NULL, NULL),
(10, 'Rahmi Kuswandari', 'Ki. K.H. Wahid Hasyim (Kopo) No. 887, Pematangsiantar 33137, DKI', 8650, 7, NULL, NULL),
(11, 'Mala Hilda Purwanti S.Psi', 'Dk. Cemara No. 425, Bekasi 81823, NTT', 8913, 3, NULL, NULL),
(12, 'Puput Purwanti', 'Jln. S. Parman No. 559, Tangerang Selatan 39308, Kaltara', 8079, 8, NULL, NULL),
(13, 'Bahuraksa Hardiansyah', 'Gg. Taman No. 933, Tarakan 45786, Sumsel', 8769, 1, NULL, NULL),
(14, 'Juli Nuraini', 'Jln. Kusmanto No. 891, Surabaya 64016, Sumbar', 8794, 8, NULL, NULL),
(15, 'Hartana Jailani', 'Gg. Urip Sumoharjo No. 239, Sungai Penuh 59979, Banten', 8402, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rumah_sakit`
--

CREATE TABLE `tb_rumah_sakit` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `nama_RS` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_rumah_sakit`
--

INSERT INTO `tb_rumah_sakit` (`ID`, `nama_RS`, `alamat`, `email`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 'Dasa Nababan', 'Gg. Nangka No. 196, Pagar Alam 65120, Jatim', 'pangestu.nurdiyanti@gmail.com', 8208, NULL, NULL),
(2, 'Galih Nainggolan', 'Gg. Raya Ujungberung No. 318, Banjar 58493, Bengkulu', 'nasyidah.gantar@saptono.id', 8747, NULL, NULL),
(3, 'Karsana Banawi Narpati', 'Kpg. Rumah Sakit No. 708, Tangerang 85267, Jatim', 'wirda21@sudiati.asia', 8081, NULL, NULL),
(4, 'Gilda Puspa Puspasari', 'Gg. Moch. Yamin No. 414, Mataram 54462, Banten', 'bagas.tarihoran@puspita.asia', 8302, NULL, NULL),
(5, 'Asmianto Bahuwarna Marbun M.TI.', 'Ds. Supomo No. 688, Yogyakarta 70555, Babel', 'bwinarsih@gmail.com', 8270, NULL, NULL),
(6, 'Ophelia Rini Hasanah', 'Dk. Bappenas No. 736, Administrasi Jakarta Utara 37169, Bali', 'ina.purwanti@wulandari.ac.id', 8966, NULL, NULL),
(7, 'Karja Kuswoyo', 'Gg. Sutoyo No. 937, Lubuklinggau 37222, Riau', 'knamaga@yahoo.co.id', 8726, NULL, NULL),
(8, 'Hafshah Vanya Halimah S.E.', 'Gg. Raya Ujungberung No. 682, Depok 24196, Kepri', 'zlatupono@gmail.com', 8657, NULL, NULL),
(9, 'Balijan Sinaga', 'Ki. Halim No. 488, Binjai 29818, NTT', 'rhalimah@gmail.com', 8517, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `tb_pasien_rs_foreign` (`RS`);

--
-- Indexes for table `tb_rumah_sakit`
--
ALTER TABLE `tb_rumah_sakit`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_rumah_sakit`
--
ALTER TABLE `tb_rumah_sakit`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD CONSTRAINT `tb_pasien_rs_foreign` FOREIGN KEY (`RS`) REFERENCES `tb_rumah_sakit` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
