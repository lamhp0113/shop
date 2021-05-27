-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 27, 2021 lúc 04:35 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopping`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_don_hangs`
--

CREATE TABLE `chi_tiet_don_hangs` (
  `id` int(11) NOT NULL,
  `id_hang_hoa` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `id_Don_hang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_don_hangs`
--

INSERT INTO `chi_tiet_don_hangs` (`id`, `id_hang_hoa`, `gia`, `so_luong`, `id_Don_hang`) VALUES
(435, 35, 59800000, 2, 355),
(468, 33, 31800000, 2, 413),
(488, 34, 52900000, 1, 429),
(493, 37, 50000000, 1, 430),
(495, 33, 15900000, 1, 431),
(561, 98, 1300000, 13, 452),
(562, 33, 15900000, 1, 452),
(563, 97, 400000, 4, 453),
(564, 98, 1300000, 13, 453);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_hang_hoa` int(11) NOT NULL,
  `id_khach_hang` int(11) NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `id_hang_hoa`, `id_khach_hang`, `noi_dung`) VALUES
(62, 37, 70, 'sản phẩm tuyệt vời, Pin sd tốt,'),
(63, 35, 71, 'adsdsdds');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hangs`
--

CREATE TABLE `don_hangs` (
  `id` int(11) NOT NULL,
  `ten_khach_hang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ngay_Dat_Hang` date NOT NULL DEFAULT current_timestamp(),
  `Trang_Thai` int(11) NOT NULL,
  `tong_tien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hangs`
--

INSERT INTO `don_hangs` (`id`, `ten_khach_hang`, `email`, `so_dien_thoai`, `dia_chi`, `Ngay_Dat_Hang`, `Trang_Thai`, `tong_tien`) VALUES
(355, 'nguyen anh my', '', '32132131', 'hai phong', '2021-05-04', 2, 148700000),
(413, 'nguyen anh my', 'lamhp0115@gmail.com', '1231231231', 'hai phong', '2021-05-17', 2, 31800000),
(418, 'nguyen anh my', 'lamhp0115@gmail.com', '213123213', 'Hai phongđ', '2021-05-17', 1, 15900000),
(419, 'nguyen anh my', 'lamhp0113@gmail.com', '213123213', 'Hai phongđ', '2021-05-17', 1, 15900000),
(429, 'Nguyễn Tùng Lâm', 'lamhp0113@gmail.com', '21312323', 'hai phong', '2021-05-17', 1, 131700000),
(430, 'Nguyễn Tùng Lâm', 'lamhp0113@gmail.com', '21312323', 'hai phong', '2021-05-17', 1, 131700000),
(431, 'Nguyễn Tùng Lâm', 'lamhp0113@gmail.com', '21312323', 'hai phong', '2021-05-17', 1, 131700000),
(432, 'Nguyễn Tùng Lâm', 'lamhp0113@gmail.com', '21312323', 'hai phong', '2021-05-17', 1, 131700000),
(433, 'Nguyễn Tùng Lâm', 'lamhp0113@gmail.com', '21312323', 'hai phong213213213', '2021-05-17', 1, 131700000),
(434, 'Nguyễn Tùng Lâm', 'lamhp0113@gmail.com', '21312323', 'hai phong213213213', '2021-05-17', 1, 131700000),
(435, 'Nguyễn Tùng Lâm', 'lamhp0113@gmail.com', '21312323', 'hai phong213213213', '2021-05-17', 1, 131700000),
(436, 'Nguyễn Tùng Lâm', 'lamhp0113@gmail.com', '21312323', 'hai phong213213213', '2021-05-17', 1, 131700000),
(437, 'Nguyễn Tùng Lâm', 'lamhp0113@gmail.com', '21312323', 'hai phong213213213', '2021-05-17', 1, 131700000),
(438, 'nguyen anh my', 'lamhp0113@gmail.com', '123123', 'Hai phongđ', '2021-05-17', 1, 65900000),
(439, 'nguyen anh my', 'lamhp0113@gmail.com', '123123', 'Hai phongđ', '2021-05-17', 1, 65900000),
(440, 'nguyen anh my', 'lamhp0113@gmail.com', '123123', 'Hai phongđ', '2021-05-17', 1, 65900000),
(441, 'nguyen anh my', 'lamhp0113@gmail.com', '123123', 'Hai phongđ', '2021-05-17', 1, 65900000),
(442, 'nguyen anh my', 'lamhp0113@gmail.com', '123123', 'Hai phongđ', '2021-05-17', 1, 65900000),
(443, 'nguyen anh my', 'lamhp0113@gmail.com', '123123', 'Hai phongđ', '2021-05-17', 1, 65900000),
(444, 'nguyen anh my', 'lamhp0113@gmail.com', '123123', 'Hai phongđ', '2021-05-17', 1, 65900000),
(445, 'Nguyễn Tùng Lâm', 'lamhp0113@gmail.com', '123', 'Hai phongđ', '2021-05-17', 1, 197700000),
(446, 'Nguyễn Tùng Lâm', 'lamhp0113@gmail.com', '123', 'Hai phongđ', '2021-05-17', 1, 197700000),
(447, 'Nguyễn Tùng Lâm', 'lamhp0113@gmail.com', '123', 'Hai phongđ', '2021-05-17', 1, 197700000),
(448, 'Nguyễn Tùng Lâm', 'lamhp0113@gmail.com', '123445667', 'Hai phongđ', '2021-05-18', 1, 17600000),
(449, 'Nguyễn Tùng Lâm', 'lamhp0113@gmail.com', '123445667', 'Hai phongđ', '2021-05-18', 1, 17600000),
(450, 'Nguyễn Tùng Lâm', 'lamhp0113@gmail.com', '123445667', 'Hai phongđ', '2021-05-18', 1, 17600000),
(451, 'Nguyễn Tùng Lâm', 'lamhp0113@gmail.com', '123445667', 'Hai phongđ', '2021-05-18', 1, 17600000),
(452, 'Nguyễn Tùng Lâm', 'lamhp0113@gmail.com', '123445667', 'Hai phongđ', '2021-05-18', 1, 17600000),
(453, 'Nguyễn Tùng Lâm', 'lamhp0113@gmail.com', '123445667', 'Hai phongđ', '2021-05-18', 1, 17600000),
(454, 'Nguyễn Tùng Lâm', 'lamhp0113@gmail.com', '123445667', 'Hai phongđ', '2021-05-18', 1, 17600000),
(455, 'Nguyễn Tùng Lâm', 'lamhp0113@gmail.com', '123445667', 'Hai phongđ', '2021-05-18', 1, 17600000),
(456, 'Nguyễn Tùng Lâm', 'lamhp0115@gmail.com', '213213123', 'hai phong', '2021-05-18', 1, 17600000),
(457, 'Nguyen Tung Duong 1', 'lamhp0113@gmail.com', '0987213231', 'hai phong', '2021-05-18', 1, 30200000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoas`
--

CREATE TABLE `hang_hoas` (
  `id` int(11) NOT NULL,
  `Ten_hang_hoa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_search` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia` int(11) NOT NULL,
  `so_luong_hang` int(11) NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_loai` int(11) NOT NULL,
  `lvproduct` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_hoas`
--

INSERT INTO `hang_hoas` (`id`, `Ten_hang_hoa`, `ma_code`, `name_search`, `gia`, `so_luong_hang`, `hinh`, `id_loai`, `lvproduct`) VALUES
(33, 'Laptop Apple MacBook Air 20178', 'APPLE_MACBOOK_01', 'Điện-thoại-Samsung-Galaxy-Note-10-', 15900000, 90, 'images/apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg', 5, '0'),
(34, 'Điện thoại Samsung Galaxy A21s ', '34', 'Điện-thoại-Samsung-Galaxy-A21s-(6GB-64GB)', 52900000, 96, 'images/lam.png', 6, '0'),
(35, 'Điện thoại Samsung Galaxy Note 20 Ultra', '545', 'Điện-thoại-Samsung-Galaxy-Note-20-Ultra', 29900000, 100, 'images/samsung-galaxy-a21s-055620-045627-400x460.png', 5, '0'),
(36, 'Điện thoại Samsung Galaxy Z Flip', '454', 'Điện-thoại-Samsung-Galaxy-Z-Flip', 36000000, 96, 'images/samsung-galaxy-z-fold-2-123620-093621-400x460.png', 6, '0'),
(37, 'Điện thoại Samsung Galaxy Z Fold2 5G', '3123', 'Điện-thoại-Samsung-Galaxy-20Z-Fold2-5G', 50000000, 97, 'images/samsung-galaxy-z-flip-chitiet-2-788x544.png', 6, '0'),
(38, 'Điện thoại iPhone 8 Plus 128GB', '343', 'Điện-thoại-iPhone-8-Plus-128GB', 14900000, 99, 'images/ip8s.jpg', 10, '0.5'),
(40, 'Điện thoại iPhone SE 64GB (2020)', '458', 'Điện-thoại-iPhone-SE-64GB-(2020)', 12900000, 49, 'images/iphone-se-2020-do-400x460-400x460.png', 10, 'NAN'),
(42, 'Điện thoại iPhone Xs 64GB', '88', 'Điện-thoại-iPhone-Xs-64GB', 17900000, 50, 'images/iphone-xs-gold-400x460-1-400x460.png', 10, '0'),
(43, 'Laptop Apple MacBook Air 2017', '213', 'Laptop-Apple-MacBook-Air-2017-i5-1.8GHz-8GB-128GB-(MQD32SA-A)', 213, 213, 'images/similar2.jpg', 5, '0.5'),
(97, 'latop', '213', '', 213, 213, 'images/two.png', 5, '2'),
(98, 'nguyễn tùng lâm ddep trai', '213123123', '', 213123123, 213123123, 'images/one.png', 5, '2'),
(102, '21312321', 'sadsa', NULL, 21312, 2, 'images/lam.jpg', 5, '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int(11) NOT NULL,
  `ten_khach_hang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `ten_khach_hang`, `email`, `so_dien_thoai`) VALUES
(37, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(38, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(39, 'Võ Khánh Duy', 'vkduy240398@gmail.com', '0123456789'),
(40, 'Võ Khánh Duy', 'zzskillzzzzz@gmail.com', '0982824398'),
(41, 'Võ Khánh Duy', 'admin@gmail.com', '0123456789'),
(42, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0982824398'),
(43, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(44, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(45, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(46, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(47, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0982824398'),
(48, 'Duy Khánh Võ', 'vkduy.ktpm0116@ctuet.edu.vn', '0982824398'),
(49, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(50, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(51, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(52, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(53, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(54, 'sadsad', 'zzskillzzzz@gmail.com', '0123456789'),
(55, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(56, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(57, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(58, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(59, 'Võ Khánh Duy', 'admin@gmail.com', '0982824398'),
(60, 'sdas', 'zzskillzzzz@gmail.com', '0123456789'),
(61, 'asdas', 'zzskillzzzz@gmail.com', '0123456789'),
(62, 'asdas', 'zzskillzzzz@gmail.com', '0123456789'),
(63, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(64, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(65, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(66, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(67, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(68, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(69, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(70, 'Võ Khánh Duy', 'zzskillzzzz@gmail.com', '0123456789'),
(71, 'Võ Khánh Duy', '0982824398', '0123456789');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_hang_hoas`
--

CREATE TABLE `loai_hang_hoas` (
  `id` int(11) NOT NULL,
  `Ten_loai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_hang_hoas`
--

INSERT INTO `loai_hang_hoas` (`id`, `Ten_loai`) VALUES
(5, 'Laptop'),
(6, 'SamSung'),
(10, 'Iphone'),
(35, 'lâmm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(100) NOT NULL,
  `tieude` varchar(200) NOT NULL,
  `noidung` text NOT NULL,
  `mota` text NOT NULL,
  `hinhanh` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `noidung`, `mota`, `hinhanh`) VALUES
(11, 'LAM DEP TRAI', '11111111111', '<p>m&ocirc; tả ngắn</p>', 'images/176319589_2972513516317340_14552645339269439_n.jpg'),
(12, 'nguyễn tùng lâm', '11111111111', 'mô tả ngắn', 'images/175666185_2837091486545462_2173936834379723633_n.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dia_Chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `So_Dien_Thoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `Dia_Chi`, `So_Dien_Thoai`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'khanh duy', 'sdfsdfsdf', '0982824398', 'admin@gmail.com', NULL, '123456', NULL, NULL, NULL),
(7, 'lam111', '', '', 'lamhp0113@gmail.com', NULL, '123456', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chi_tiet_don_hangs`
--
ALTER TABLE `chi_tiet_don_hangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Don_hang` (`id_Don_hang`),
  ADD KEY `id_hang_hoa` (`id_hang_hoa`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_hang_hoa` (`id_hang_hoa`),
  ADD KEY `id_khach_hang` (`id_khach_hang`);

--
-- Chỉ mục cho bảng `don_hangs`
--
ALTER TABLE `don_hangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Trang_Thai` (`Trang_Thai`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hang_hoas`
--
ALTER TABLE `hang_hoas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_loai` (`id_loai`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_hang_hoas`
--
ALTER TABLE `loai_hang_hoas`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chi_tiet_don_hangs`
--
ALTER TABLE `chi_tiet_don_hangs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=577;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `don_hangs`
--
ALTER TABLE `don_hangs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=458;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hang_hoas`
--
ALTER TABLE `hang_hoas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `loai_hang_hoas`
--
ALTER TABLE `loai_hang_hoas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chi_tiet_don_hangs`
--
ALTER TABLE `chi_tiet_don_hangs`
  ADD CONSTRAINT `chi_tiet_don_hangs_ibfk_1` FOREIGN KEY (`id_Don_hang`) REFERENCES `don_hangs` (`id`),
  ADD CONSTRAINT `chi_tiet_don_hangs_ibfk_2` FOREIGN KEY (`id_hang_hoa`) REFERENCES `hang_hoas` (`id`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_hang_hoa`) REFERENCES `hang_hoas` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_khach_hang`) REFERENCES `khach_hang` (`id`);

--
-- Các ràng buộc cho bảng `hang_hoas`
--
ALTER TABLE `hang_hoas`
  ADD CONSTRAINT `hang_hoas_ibfk_1` FOREIGN KEY (`id_loai`) REFERENCES `loai_hang_hoas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
