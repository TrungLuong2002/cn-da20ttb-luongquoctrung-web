-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 08, 2023 lúc 08:01 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `QL_CVHT`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cvht`
--

CREATE TABLE `cvht` (
  `CVHT_id` int(11) NOT NULL,
  `Ma_NH` varchar(15) NOT NULL,
  `Ma_Lop` varchar(15) NOT NULL,
  `Ten_Lop` varchar(30) NOT NULL,
  `Ma_GV` varchar(15) NOT NULL,
  `Ten_GV` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `SDT` int(11) NOT NULL,
  `So_QĐ_ĐN` int(20) NOT NULL,
  `Ngay_QĐ_ĐN` date NOT NULL,
  `Ghi_Chu` text DEFAULT NULL,
  `id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giang_vien`
--

CREATE TABLE `giang_vien` (
  `GV_id` int(11) NOT NULL,
  `Ma_GV` varchar(15) NOT NULL,
  `Ten_GV` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `Khoa_id` int(11) NOT NULL,
  `Ma_Khoa` varchar(15) NOT NULL,
  `Ten_Khoa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `Lop_id` int(11) NOT NULL,
  `Ma_Lop` varchar(15) NOT NULL,
  `Ten_Lop` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop_khoa`
--

CREATE TABLE `lop_khoa` (
  `Lop_Khoa_id` int(11) NOT NULL,
  `Ma_Lop` varchar(15) NOT NULL,
  `Ma_Khoa` varchar(15) NOT NULL,
  `Ten_Lop` varchar(30) NOT NULL,
  `Ten_Khoa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nam_hoc`
--

CREATE TABLE `nam_hoc` (
  `NH_id` int(100) NOT NULL,
  `Ma_NH` varchar(20) NOT NULL,
  `Ten_NH` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cvht`
--
ALTER TABLE `cvht`
  ADD PRIMARY KEY (`CVHT_id`),
  ADD KEY `Ma_NH` (`Ma_NH`),
  ADD KEY `Ma_Lop` (`Ma_Lop`),
  ADD KEY `Ma_GV` (`Ma_GV`);

--
-- Chỉ mục cho bảng `giang_vien`
--
ALTER TABLE `giang_vien`
  ADD PRIMARY KEY (`GV_id`),
  ADD UNIQUE KEY `Ma_GV` (`Ma_GV`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`Khoa_id`),
  ADD UNIQUE KEY `Ma_Khoa` (`Ma_Khoa`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`Lop_id`),
  ADD UNIQUE KEY `Ma_Lop` (`Ma_Lop`);

--
-- Chỉ mục cho bảng `lop_khoa`
--
ALTER TABLE `lop_khoa`
  ADD PRIMARY KEY (`Lop_Khoa_id`),
  ADD KEY `Ma_Lop` (`Ma_Lop`),
  ADD KEY `lop_khoa_ibfk_1` (`Ma_Khoa`);

--
-- Chỉ mục cho bảng `nam_hoc`
--
ALTER TABLE `nam_hoc`
  ADD PRIMARY KEY (`NH_id`),
  ADD UNIQUE KEY `Ma_NH` (`Ma_NH`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cvht`
--
ALTER TABLE `cvht`
  MODIFY `CVHT_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giang_vien`
--
ALTER TABLE `giang_vien`
  MODIFY `GV_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khoa`
--
ALTER TABLE `khoa`
  MODIFY `Khoa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lop`
--
ALTER TABLE `lop`
  MODIFY `Lop_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lop_khoa`
--
ALTER TABLE `lop_khoa`
  MODIFY `Lop_Khoa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nam_hoc`
--
ALTER TABLE `nam_hoc`
  MODIFY `NH_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cvht`
--
ALTER TABLE `cvht`
  ADD CONSTRAINT `cvht_ibfk_1` FOREIGN KEY (`Ma_NH`) REFERENCES `nam_hoc` (`Ma_NH`),
  ADD CONSTRAINT `cvht_ibfk_2` FOREIGN KEY (`Ma_Lop`) REFERENCES `lop` (`Ma_Lop`),
  ADD CONSTRAINT `cvht_ibfk_3` FOREIGN KEY (`Ma_GV`) REFERENCES `giang_vien` (`Ma_GV`);

--
-- Các ràng buộc cho bảng `lop_khoa`
--
ALTER TABLE `lop_khoa`
  ADD CONSTRAINT `lop_khoa_ibfk_1` FOREIGN KEY (`Ma_Khoa`) REFERENCES `khoa` (`Ma_Khoa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
