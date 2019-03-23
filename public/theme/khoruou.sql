-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 06:26 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khoruou`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` int(10) UNSIGNED NOT NULL,
  `MaRuou` int(10) UNSIGNED NOT NULL,
  `SoLuong` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHD`, `MaRuou`, `SoLuong`, `created_at`, `updated_at`) VALUES
(2, 2, 1, '2019-03-15 10:40:39', '2019-03-15 10:40:39'),
(2, 3, 2, '2019-03-15 10:40:39', '2019-03-15 10:40:39'),
(5, 1, 1, '2019-03-15 10:44:47', '2019-03-15 10:44:47'),
(5, 2, 1, '2019-03-15 10:44:46', '2019-03-15 10:44:46'),
(5, 3, 3, '2019-03-15 10:44:46', '2019-03-15 10:44:46'),
(6, 1, 1, '2019-03-18 05:33:57', '2019-03-18 05:33:57'),
(6, 2, 4, '2019-03-18 05:33:57', '2019-03-18 05:33:57'),
(6, 3, 3, '2019-03-18 05:33:57', '2019-03-18 05:33:57'),
(7, 1, 1, '2019-03-18 05:41:19', '2019-03-18 05:41:19'),
(7, 2, 3, '2019-03-18 05:41:19', '2019-03-18 05:41:19'),
(7, 3, 2, '2019-03-18 05:41:19', '2019-03-18 05:41:19'),
(8, 1, 1, '2019-03-18 05:46:12', '2019-03-18 05:46:12'),
(8, 2, 1, '2019-03-18 05:46:12', '2019-03-18 05:46:12'),
(9, 1, 4, '2019-03-18 05:49:03', '2019-03-18 05:49:03'),
(9, 2, 5, '2019-03-18 05:49:03', '2019-03-18 05:49:03'),
(9, 3, 4, '2019-03-18 05:49:03', '2019-03-18 05:49:03'),
(10, 2, 10, '2019-03-18 05:55:22', '2019-03-18 05:55:22'),
(10, 3, 6, '2019-03-18 05:55:22', '2019-03-18 05:55:22'),
(11, 1, 2, '2019-03-18 07:50:32', '2019-03-18 07:50:32'),
(11, 2, 1, '2019-03-18 07:50:32', '2019-03-18 07:50:32'),
(11, 3, 1, '2019-03-18 07:50:32', '2019-03-18 07:50:32'),
(12, 1, 2, '2019-03-18 07:51:40', '2019-03-18 07:51:40'),
(12, 2, 3, '2019-03-18 07:51:40', '2019-03-18 07:51:40'),
(12, 3, 1, '2019-03-18 07:51:40', '2019-03-18 07:51:40'),
(13, 1, 2, '2019-03-18 07:58:56', '2019-03-18 07:58:56'),
(13, 2, 1, '2019-03-18 07:58:56', '2019-03-18 07:58:56'),
(13, 3, 1, '2019-03-18 07:58:56', '2019-03-18 07:58:56'),
(14, 1, 4, '2019-03-18 08:03:49', '2019-03-18 08:03:49'),
(14, 2, 3, '2019-03-18 08:03:49', '2019-03-18 08:03:49'),
(14, 3, 1, '2019-03-18 08:03:49', '2019-03-18 08:03:49'),
(15, 1, 2, '2019-03-18 08:08:47', '2019-03-18 08:08:47'),
(15, 2, 1, '2019-03-18 08:08:47', '2019-03-18 08:08:47'),
(16, 1, 2, '2019-03-18 08:14:50', '2019-03-18 08:14:50'),
(16, 2, 1, '2019-03-18 08:14:50', '2019-03-18 08:14:50'),
(17, 1, 1, '2019-03-18 08:15:30', '2019-03-18 08:15:30'),
(17, 3, 2, '2019-03-18 08:15:30', '2019-03-18 08:15:30'),
(18, 1, 2, '2019-03-18 08:17:05', '2019-03-18 08:17:05'),
(18, 3, 2, '2019-03-18 08:17:05', '2019-03-18 08:17:05'),
(19, 1, 2, '2019-03-23 07:56:03', '2019-03-23 07:56:03'),
(19, 2, 3, '2019-03-23 07:56:03', '2019-03-23 07:56:03'),
(20, 1, 1, '2018-03-23 15:06:18', '2018-03-23 15:06:18'),
(20, 2, 2, '2018-03-23 15:06:18', '2018-03-23 15:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `chucvu`
--

CREATE TABLE `chucvu` (
  `MaCV` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenCV` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chucvu`
--

INSERT INTO `chucvu` (`MaCV`, `TenCV`, `created_at`, `updated_at`) VALUES
('GD', 'Giám Đốc', '2019-03-15 07:48:15', '2019-03-15 07:48:15'),
('NV', 'Nhân Viên', '2019-03-15 07:48:15', '2019-03-15 07:48:15'),
('QL', 'Quản Lý', '2019-03-15 07:48:15', '2019-03-15 07:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(10) UNSIGNED NOT NULL,
  `MaKH` int(10) UNSIGNED NOT NULL,
  `MaNV` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaKH`, `MaNV`, `created_at`, `updated_at`) VALUES
(2, 1, 4, '2019-03-15 10:40:38', '2019-03-15 10:40:38'),
(3, 1, 4, '2019-03-15 10:42:02', '2019-03-15 10:42:02'),
(4, 1, 4, '2019-03-15 10:43:11', '2019-03-15 10:43:11'),
(5, 1, 4, '2019-03-15 10:44:46', '2019-03-15 10:44:46'),
(6, 1, 4, '2019-03-18 05:33:57', '2019-03-18 05:33:57'),
(7, 1, 4, '2019-03-18 05:41:19', '2019-03-18 05:41:19'),
(8, 1, 4, '2019-03-18 05:46:11', '2019-03-18 05:46:11'),
(9, 1, 4, '2019-03-18 05:49:02', '2019-03-18 05:49:02'),
(10, 1, 4, '2019-03-18 05:55:22', '2019-03-18 05:55:22'),
(11, 1, 4, '2019-03-18 07:50:31', '2019-03-18 07:50:31'),
(12, 1, 4, '2019-03-18 07:51:40', '2019-03-18 07:51:40'),
(13, 1, 4, '2019-03-18 07:58:55', '2019-03-18 07:58:55'),
(14, 1, 4, '2019-03-18 08:03:49', '2019-03-18 08:03:49'),
(15, 1, 4, '2019-03-18 08:08:47', '2019-03-18 08:08:47'),
(16, 1, 4, '2019-03-18 08:14:50', '2019-03-18 08:14:50'),
(17, 1, 4, '2019-03-18 08:15:30', '2019-03-18 08:15:30'),
(18, 1, 4, '2019-03-18 08:17:05', '2019-03-18 08:17:05'),
(19, 1, 4, '2019-03-23 07:56:03', '2019-03-23 07:56:03'),
(20, 1, 4, '2018-03-23 15:06:18', '2018-03-23 15:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(10) UNSIGNED NOT NULL,
  `TenKH` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `DiaChi`, `SDT`, `created_at`, `updated_at`) VALUES
(1, 'Nhiên', '128 abc', '0337247773', '2019-03-15 07:48:16', '2019-03-15 07:48:16'),
(2, 'Viên', '128 abc', '0337247771', '2019-03-15 07:48:16', '2019-03-15 07:48:16'),
(3, 'Nhện', '128 abc', '0337247777', '2019-03-15 07:48:16', '2019-03-15 07:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_03_06_140233_create_chucvu_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2018_03_06_134642_create_phanloai_table', 1),
(5, '2018_03_06_134834_create_nhasanxuat_table', 1),
(6, '2018_03_06_134947_create_nhacungcap_table', 1),
(7, '2018_03_06_135800_create_khachhang_table', 1),
(8, '2019_03_06_133853_create_ruou_table', 1),
(9, '2019_03_06_135049_create_hoadon_table', 1),
(10, '2019_03_06_135335_create_chitiethoadon_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`id`, `name`) VALUES
(1, 'Tháng 1'),
(2, 'Tháng 2'),
(3, 'Tháng 3'),
(4, 'Tháng 4'),
(5, 'Tháng 5'),
(6, 'Tháng 6'),
(7, 'Tháng 7'),
(8, 'Tháng 8'),
(9, 'Tháng 9'),
(10, 'Tháng 10'),
(11, 'Tháng 11'),
(12, 'Tháng 12');

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `MaNCC` int(10) UNSIGNED NOT NULL,
  `TenNCC` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`MaNCC`, `TenNCC`, `created_at`, `updated_at`) VALUES
(1, 'Công ty TNHH Đông Á', '2019-03-15 07:48:15', '2019-03-15 07:48:15'),
(2, 'Công ty TNHH Phương Phương', '2019-03-15 07:48:15', '2019-03-15 07:48:15'),
(3, 'Công ty TNHH Con Cá', '2019-03-15 07:48:15', '2019-03-15 07:48:15'),
(4, 'Công ty TNHH Bà Ba', '2019-03-15 07:48:15', '2019-03-15 07:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `MaNSX` int(10) UNSIGNED NOT NULL,
  `TenNSX` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`MaNSX`, `TenNSX`, `created_at`, `updated_at`) VALUES
(1, 'NSX Phương Đông', '2019-03-15 07:48:15', '2019-03-15 07:48:15'),
(2, 'NSX Rồng Vàng', '2019-03-15 07:48:15', '2019-03-15 07:48:15'),
(3, 'NSX Quảng Châu', '2019-03-15 07:48:15', '2019-03-15 07:48:15'),
(4, 'NSX Ipresso', '2019-03-15 07:48:15', '2019-03-15 07:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phanloai`
--

CREATE TABLE `phanloai` (
  `MaLoai` int(10) UNSIGNED NOT NULL,
  `TenLoai` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phanloai`
--

INSERT INTO `phanloai` (`MaLoai`, `TenLoai`, `created_at`, `updated_at`) VALUES
(1, 'Rượu Việt', '2019-03-15 07:48:16', '2019-03-15 07:48:16'),
(2, 'Rượu Nga', '2019-03-15 07:48:16', '2019-03-15 07:48:16'),
(3, 'Rượu Mỹ', '2019-03-15 07:48:16', '2019-03-15 07:48:16'),
(4, 'Rượu Pháp', '2019-03-15 07:48:16', '2019-03-15 07:48:16'),
(5, 'Rượu Ý', '2019-03-15 07:48:16', '2019-03-15 07:48:16'),
(6, 'Rượu Đức', '2019-03-15 07:48:16', '2019-03-15 07:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `ruou`
--

CREATE TABLE `ruou` (
  `MaRuou` int(10) UNSIGNED NOT NULL,
  `TenRuou` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AnhRuou` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SoLuong` int(10) UNSIGNED NOT NULL,
  `Mota` text COLLATE utf8mb4_unicode_ci,
  `DonGia` int(10) UNSIGNED NOT NULL,
  `MaNSX` int(10) UNSIGNED NOT NULL,
  `MaLoai` int(10) UNSIGNED NOT NULL,
  `MaNCC` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ruou`
--

INSERT INTO `ruou` (`MaRuou`, `TenRuou`, `AnhRuou`, `SoLuong`, `Mota`, `DonGia`, `MaNSX`, `MaLoai`, `MaNCC`, `created_at`, `updated_at`) VALUES
(1, 'Rượu Bàu Đá', 'http://file.vforum.vn/hinh/2016/08/hinh-anh-chai-ruu-dep-12.jpg', 2, '2qưedqwedf', 300000, 2, 1, 3, '2019-03-15 07:48:16', '2019-03-15 07:48:16'),
(2, 'Rượu Chivas', 'http://4.bp.blogspot.com/-pxJPyugRfBQ/VXsC7BXfp1I/AAAAAAAAALs/3zKyfAAY-iI/s640/54954125.jpg', 2, '2qưedqwedf', 200000, 4, 2, 3, '2019-03-15 07:48:16', '2019-03-15 07:48:16'),
(3, 'Rượu Russian', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0b9ozFEqlhb8ASZCRfj2NyH4PuGc6A1CJkNsp3JBGpNQie29C2g', 2, '2qưedqwedf', 200000, 1, 3, 2, '2019-03-15 07:48:16', '2019-03-15 07:48:16');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tongtien_cachd`
-- (See below for the actual view)
--
CREATE TABLE `tongtien_cachd` (
`MaHD` int(10) unsigned
,`thanhtien` decimal(42,0)
,`year` int(4)
,`month` int(2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tongtien_cthd`
-- (See below for the actual view)
--
CREATE TABLE `tongtien_cthd` (
`MaHD` int(10) unsigned
,`tongtien` bigint(20) unsigned
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDienThoai` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DChi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaCV` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `SoDienThoai`, `DChi`, `image`, `MaCV`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nhi', '128bc@gmail.com', NULL, '$2y$10$Uzjg6822zi9Uh8.rjbsyJOGi5vnqlV4de2R7fC3ihbYQPyUpgtfqG', '0337247773', '82 nguyễn xí', NULL, 'NV', NULL, '2019-03-15 07:48:16', '2019-03-15 07:48:16'),
(2, 'Nhím', '128bcd@gmail.com', NULL, '$2y$10$CD61YUl55A3Z1bZJZrBh2usklci2zZOSAL6BPzvCaxv9469gjCpG2', '0337247773', '823 nguyễn xí', NULL, 'QL', NULL, '2019-03-15 07:48:16', '2019-03-15 07:48:16'),
(3, 'Nhã', '128b@gmail.com', NULL, '$2y$10$LnNB8EkhbJpORi/VnPtLbuo3SBwA8qXqx/QdxqUtxOM6Rz3SW18HS', '0337247774', '8 nguyễn xí', NULL, 'GD', NULL, '2019-03-15 07:48:16', '2019-03-15 07:48:16'),
(4, 'Phú', 'admin@gmail.com', NULL, '$2y$10$YhTO2WvWGQ41RpNqbuGeEeTZRD1HHFkbwS95GhuFSoYz1ZIxEeJQm', '0337247774', '8 nguyễn xí', 'https://guzelresimler.info/content/photos/5970/bi/1ok_spring.jpg', 'GD', NULL, '2019-03-15 07:48:17', '2019-03-15 07:48:17');

-- --------------------------------------------------------

--
-- Structure for view `tongtien_cachd`
--
DROP TABLE IF EXISTS `tongtien_cachd`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tongtien_cachd`  AS  select `tongtien_cthd`.`MaHD` AS `MaHD`,sum(`tongtien_cthd`.`tongtien`) AS `thanhtien`,year(`tongtien_cthd`.`updated_at`) AS `year`,month(`tongtien_cthd`.`updated_at`) AS `month` from `tongtien_cthd` group by `tongtien_cthd`.`MaHD` ;

-- --------------------------------------------------------

--
-- Structure for view `tongtien_cthd`
--
DROP TABLE IF EXISTS `tongtien_cthd`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tongtien_cthd`  AS  select `cthd`.`MaHD` AS `MaHD`,(`cthd`.`SoLuong` * `ruou`.`DonGia`) AS `tongtien`,`cthd`.`created_at` AS `created_at`,`cthd`.`updated_at` AS `updated_at` from (`chitiethoadon` `cthd` join `ruou`) where (`cthd`.`MaRuou` = `ruou`.`MaRuou`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaHD`,`MaRuou`),
  ADD KEY `chitiethoadon_maruou_foreign` (`MaRuou`);

--
-- Indexes for table `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`MaCV`),
  ADD UNIQUE KEY `chucvu_macv_unique` (`MaCV`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `hoadon_makh_foreign` (`MaKH`),
  ADD KEY `hoadon_manv_foreign` (`MaNV`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `months`
--
ALTER TABLE `months`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`MaNCC`);

--
-- Indexes for table `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`MaNSX`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `phanloai`
--
ALTER TABLE `phanloai`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `ruou`
--
ALTER TABLE `ruou`
  ADD PRIMARY KEY (`MaRuou`),
  ADD KEY `ruou_mansx_foreign` (`MaNSX`),
  ADD KEY `ruou_maloai_foreign` (`MaLoai`),
  ADD KEY `ruou_mancc_foreign` (`MaNCC`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_macv_foreign` (`MaCV`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `months`
--
ALTER TABLE `months`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `MaNCC` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `MaNSX` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `phanloai`
--
ALTER TABLE `phanloai`
  MODIFY `MaLoai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ruou`
--
ALTER TABLE `ruou`
  MODIFY `MaRuou` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_mahd_foreign` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_maruou_foreign` FOREIGN KEY (`MaRuou`) REFERENCES `ruou` (`MaRuou`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_makh_foreign` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`) ON UPDATE CASCADE,
  ADD CONSTRAINT `hoadon_manv_foreign` FOREIGN KEY (`MaNV`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `ruou`
--
ALTER TABLE `ruou`
  ADD CONSTRAINT `ruou_maloai_foreign` FOREIGN KEY (`MaLoai`) REFERENCES `phanloai` (`MaLoai`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ruou_mancc_foreign` FOREIGN KEY (`MaNCC`) REFERENCES `nhacungcap` (`MaNCC`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ruou_mansx_foreign` FOREIGN KEY (`MaNSX`) REFERENCES `nhasanxuat` (`MaNSX`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_macv_foreign` FOREIGN KEY (`MaCV`) REFERENCES `chucvu` (`MaCV`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
