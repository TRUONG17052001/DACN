-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th2 04, 2023 lúc 03:02 AM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

DROP TABLE IF EXISTS `cthoadon`;
CREATE TABLE IF NOT EXISTS `cthoadon` (
  `mact` int(11) NOT NULL AUTO_INCREMENT,
  `mahd` int(11) NOT NULL,
  `masp` varchar(20) CHARACTER SET armscii8 NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `kichthuoc` varchar(20) CHARACTER SET armscii8 NOT NULL,
  `soluong` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL,
  PRIMARY KEY (`mact`),
  KEY `mahd` (`mahd`),
  KEY `masp` (`masp`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cthoadon`
--

INSERT INTO `cthoadon` (`mact`, `mahd`, `masp`, `mausac`, `kichthuoc`, `soluong`, `tongtien`) VALUES
(5, 1670642279, 'sp01', 'Đen', 'M', 2, 1790000),
(6, 1670642279, 'sp02', 'Đen', 'M', 1, 850000),
(7, 1670642420, 'sp01', 'Đen', 'M', 2, 1790000),
(8, 1670642420, 'sp02', 'Đen', 'M', 1, 850000),
(9, 1670642420, 'sp03', 'Trắng', 'L', 1, 695000),
(10, 1670642552, 'sp01', 'Đen', 'M', 2, 1790000),
(11, 1670642552, 'sp02', 'Đen', 'M', 1, 850000),
(12, 1670642552, 'sp03', 'Trắng', 'L', 1, 695000),
(13, 1670642552, 'sp04', 'Trắng', 'XL', 1, 750000),
(14, 1670642631, 'sp01', 'Đen', 'M', 2, 1790000),
(15, 1670679260, 'sp01', 'Đen', 'M', 1, 895000),
(16, 1670726224, 'sp09', 'Trắng', 'M', 1, 865000),
(17, 1670758056, 'sp02', 'Đen', 'M', 3, 2550000),
(18, 1670813234, 'sp02', 'Đen', 'M', 3, 2550000),
(19, 1670813234, 'sp03', 'Trắng', 'XL', 105, 72975000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

DROP TABLE IF EXISTS `danhmuc`;
CREATE TABLE IF NOT EXISTS `danhmuc` (
  `madm` varchar(20) CHARACTER SET armscii8 NOT NULL,
  `tendm` varchar(30) NOT NULL,
  `soluong` int(11) NOT NULL,
  PRIMARY KEY (`madm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`madm`, `tendm`, `soluong`) VALUES
('dm01', 'Quần âu', 120),
('dm02', 'Quần jean', 100),
('dm03', 'Quần ngắn', 150),
('dm04', 'Quần kaki', 120),
('dm05', 'Quần thể dục', 250),
('dm06', 'Áo polo', 125);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `mahd` int(11) NOT NULL,
  `username` varchar(20) CHARACTER SET armscii8 NOT NULL,
  `tongtien` varchar(20) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtoan` varchar(30) NOT NULL,
  `tinhtrang` varchar(20) NOT NULL,
  PRIMARY KEY (`mahd`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `username`, `tongtien`, `soluong`, `thanhtoan`, `tinhtrang`) VALUES
(1670642279, 'tronghieu', '2,640,000', 3, 'Trực tiếp', 'Đã giao'),
(1670642420, 'tronghieu', '3,335,000', 4, 'Trực tiếp', 'Đã giao'),
(1670642552, 'tronghieu', '4,085,000', 5, 'Trực tiếp', 'Đã giao'),
(1670642631, 'tronghieu', '1,790,000', 2, 'Trực tiếp', 'Đang giao'),
(1670679260, 'truong', '895,000', 1, 'Trực tiếp', 'Đã giao'),
(1670726224, 'truong', '865,000', 1, 'Trực tiếp', 'Đang giao'),
(1670758056, 'truong', '2,550,000', 3, 'Trực tiếp', 'Chờ xác nhận'),
(1670813234, 'tronghieu', '75,525,000', 108, 'Trực tiếp', 'Chờ xác nhận');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `masp` varchar(20) CHARACTER SET armscii8 NOT NULL,
  `madm` varchar(20) CHARACTER SET armscii8 NOT NULL,
  `tensp` varchar(50) DEFAULT NULL,
  `donvitinh` varchar(10) NOT NULL,
  `giasp` int(11) NOT NULL,
  `anhsp` varchar(50) CHARACTER SET armscii8 DEFAULT NULL,
  `motasp` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`masp`),
  KEY `madm` (`madm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `madm`, `tensp`, `donvitinh`, `giasp`, `anhsp`, `motasp`) VALUES
('sp01', 'dm01', 'Quần Âu - Aristino - ATRR15', 'Cái', 895000, 'Quan-au-Aristino-ATRR15.png', 'Bán chạy'),
('sp02', 'dm01', 'Quần Âu - Aristino - ATRR12', 'Cái', 850000, 'quan-au-nam-aristino-ATRR12.png', NULL),
('sp03', 'dm02', 'Quần Jean - Aristino - AJNR01', 'Cái', 695000, 'quan-jean-nam-aristino-AJNR01.png', NULL),
('sp04', 'dm02', 'Quần Jean - Aristino - AJNR02', 'Cái', 750000, 'quan-jean-nam-aristino-AJNR02.png', NULL),
('sp05', 'dm04', 'Quần Kaki - Aristino - AKK02307', 'Cái', 800000, 'quan-kaki-nam-AKK02307.png', NULL),
('sp06', 'dm04', 'Quần Kaki - Aristino - AKK00201', 'Cái', 760000, 'quan-kaki-nam-aristino-AKK00201.png', NULL),
('sp07', 'dm05', 'Quần thu đông - Aristino - APA004W2', 'Cái', 652000, 'Quan-thu-dong-Aristino-APA004W2.png', NULL),
('sp08', 'dm05', 'Quần thu đông - Aristino - APA005W2', 'Cái', 654000, 'Quan-thu-dong-Aristino-APA005W2.png', NULL),
('sp09', 'dm06', 'Áo Polo - Aristino - 1PS014S2', 'Cái', 865000, 'ao-polo-nam-1PS014S2.webp', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

DROP TABLE IF EXISTS `taikhoan`;
CREATE TABLE IF NOT EXISTS `taikhoan` (
  `username` varchar(50) CHARACTER SET armscii8 NOT NULL,
  `password` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `tenht` varchar(50) DEFAULT NULL,
  `diachi` varchar(200) DEFAULT NULL,
  `sdt` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `quyen` varchar(10) CHARACTER SET armscii8 NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`username`, `password`, `tenht`, `diachi`, `sdt`, `email`, `quyen`) VALUES
('tronghieu', '$2a$12$BGgazYS6pX38FKgc.dD3bedp/JxpO6ainiCObz9FaI2FyYAvclIFq', 'Trọng Hiếuu', 'Hiệp Phước', '0123456789', 'dh51901234@student.stu.edu.vn', 'KH'),
('truong', '$2y$10$C2.WoYVoYg2gdJwFbPU1X..ExRDghYMoGH6DlnVsMxR0P6fXVlXG.', 'Trần Quang Trường', 'Long Thới', '0937800432', 'dh51902909@student.stu.edu.vn', 'KH'),
('truongtran', '$2a$12$QMQ.zFNDNBau9cPixycFKOVSrqbmgXPrt2FOfxeyaPkPo8Y3fzqx2', 'Quang Trường', 'Long Thới, Nhà Bè', '0794194208', 'dh51902909@student.stu.edu.vn', 'QL');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD CONSTRAINT `cthoadon_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`),
  ADD CONSTRAINT `cthoadon_ibfk_2` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `FK_HD_TK` FOREIGN KEY (`username`) REFERENCES `taikhoan` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`madm`) REFERENCES `danhmuc` (`madm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
