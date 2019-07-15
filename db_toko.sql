-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 11:58 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `berandas`
--

CREATE TABLE `berandas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `foto`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'kntl', '1.jpg', 1, '2019-07-14 02:28:16', '2019-07-14 02:37:28'),
(2, 'Asus', '3.jpg', 1, '2019-07-14 02:39:26', '2019-07-14 02:39:46'),
(3, 'daww', '2.jpg', 1, '2019-07-14 21:56:36', '2019-07-14 23:58:49'),
(4, 'Asus', '2.jpg', 1, '2019-07-15 00:01:01', '2019-07-15 00:03:29'),
(5, 'HP', '2.jpg', 1, '2019-07-15 00:03:40', '2019-07-15 02:39:41'),
(6, 'Asus', '1.png', 1, '2019-07-15 00:09:07', '2019-07-15 02:40:54'),
(7, 'Samsung', 'samsung-logo-4.png', 0, '2019-07-15 00:09:15', '2019-07-15 00:09:15'),
(8, 'Dell', 'index.png', 0, '2019-07-15 02:40:00', '2019-07-15 02:40:00');

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
(3, '2019_07_07_122308_create_berandas_table', 1),
(4, '2019_07_08_201023_create_produks_table', 1),
(5, '2019_07_10_202607_create_kategoris_table', 1);

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
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `nama`, `harga`, `kategori`, `ket`, `foto`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'awdawdawda', 122222222, 'dawawdadw', 'wdawddawawd', '2.jpg', 1, '2019-07-14 22:05:31', '2019-07-14 22:05:46'),
(2, 'wdadawdwda', 12111111, 'wdaw', 'awdadawaw', '2.jpg', 1, '2019-07-14 22:06:05', '2019-07-15 02:36:46'),
(3, 'Laptop Acer', 130000000, 'Acer', 'Apakah Anda seorang gamer? Atau anda vlogger yang sedang mencari perangkat laptop yang mumpuni dalam editing video? Jika iya, perkenalkan laptop terbaru keluaran dari Micro Star International atau sering dikenal dengan MSI yaitu MSI GL63. Meski terbilang brand baru dalam bidang perangkat komputer, rupanya MSI cukup menyita perhatian dari banyak pengguna di seluruh dunia, salah satunya Indonesia. Pasalnya, spesifikasi dan performa laptop ini terbilang mumpuni dan tak kalah dengan brand-brand lain yang lebih populer terlebih dulu. Penasaran dengan kinerja laptop ini terutama dalam hal gaming? Yuk simak selengkapnya pada ulasan di bawah ini!\r\nSpesifikasi MSI GL63\r\nProcessor	:	Intel Core i5-8300H Quad Core 2.3 GHz turboBoost up to 4 GHz\r\nMemory	:	4 GB DDR4 2400 MHz upgradeable to 32 GB DDR4\r\nOperating System	:	Ms Windows 10 Home x64\r\nDisplay 	:	15.6 inchi IPS LCD LED backlight resolusi full HD (1920 x 1080) piksel\r\nGraphic	:	Intel HD Graphics 630, NVIDIA GeForce GTX 1050 VRAM 4GB GDDR5\r\nStorage 	:	1TB 7200 RPM support M.2 SSD\r\nOptical Drive	:	Super-Multi DVD\r\nKeyboard	:	Steelseries gaming keyboard\r\nCard Reader	:	(SD/MMC)\r\nWebCam	:	Webcam HD type (30fps @720p)\r\nNetworking	:	Bluetooth\r\nBuilt-in Bluetooth V4.0\r\nWi-Fi\r\nIntegrated 802.11b/g/n\r\nInterface	:	USB 3.0\r\nUSB type C\r\nHDMI\r\nLAN\r\nPort mini display port\r\nAudio	:	2 x 3W stereo speaker\r\nNahimic sound 3 technology\r\nMSI Audio Boost\r\nBattery	:	6 cell 41 Wh Li ion\r\nPower Adapter	:	Output :\r\n19 V DC, 2.47 A, 65 W\r\nPlug Type :ø4 (mm)\r\nDimensions	:	38.3 cm x 26 cm x 2.2-2.9 cm\r\nWeight	:	2,2 kg', '4.jpg', 0, '2019-07-14 23:48:13', '2019-07-14 23:48:13'),
(4, 'Asus TUF Gaming', 12000000, 'Asus', 'Pada bulan Mei 2018 lalu ASUS telah memperkenalkan seri terbaru laptop gaming-nya. Tak tanggung-tanggung, terdapat tiga produk yang diperkenalkan untuk tiga segmen yang berbeda; di mana ketiga laptop gaming tersebut telah awd aawdawdawd menggunakan prosesor Intel generasi kedelapan, Coffe Lake. Salah satu yang diunggulkan adalah varian ASUS TUF Gaming FX504, di mana varian tersebut merupakan produk terbaru ASUS yang diperuntukan bagi gamer yang mencari sebuah laptop gaming berkualitas namun dengan harga yang lebih terjangkau.', 'big-FX504GDRS51-1.jpg', 0, '2019-07-15 00:13:23', '2019-07-15 02:39:09'),
(5, 'Laptop Samsung', 2000000, 'Samsung', 'Tipe	Tipe Laptop\r\n	Ultrabook\r\nSpesifikasi Dasar	CPU\r\n	AMD\r\nModel Prosesor 	AMD A8-4555M\r\nKecepatan Prosesor 	1.6GHz\r\nModel GPU 	AMD Radeon™ HD 7600G + HD 7550M Dual Graphics\r\nMemori & Penyimpanan	RAM\r\n	6GB\r\nTipe Memori 	DDR3\r\nTipe Penyimpanan 	HDD\r\nHDD\r\n	750GB\r\nKecepatan Rotasi 	5400 rpm\r\nLayar	Ukuran Layar\r\n	14.0\" SuperBright 300nit LED Display, Anti-Reflective\r\nResolusi 	1366x768\r\nNetwork	Ethernet 	Gigabit Ethernet [10/100/1000]\r\nWiFi 	802.11a/b/g/n\r\nKonektifitas	Konektifitas 	HDMI , USB2.0 , USB3.0 , Bluetooth , Camera\r\nSoftware	OS\r\n	DOS\r\nOS Ver 	Free DOS, Tidak Termasuk\r\nUkuran	Dimensi 	33,3 x 2,09 x 22,9 cm\r\nBerat 	1.81kg', '4.jpg', 0, '2019-07-15 02:38:19', '2019-07-15 02:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `deleted`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', NULL, '$2y$10$V5.lKA.qsDIh3UBvzlU.UuST5lAkv.zLSo3S5TMkCvPwn2H6PH6L.', 0, NULL, '2019-07-14 20:39:36', '2019-07-14 20:39:36'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$gMZ.yF1Vp4miPb8K13WngeT9UsKkHEp63X5bCzSSwGuTxZMaxHfaS', 0, NULL, '2019-07-15 02:36:07', '2019-07-15 02:36:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berandas`
--
ALTER TABLE `berandas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `berandas`
--
ALTER TABLE `berandas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
