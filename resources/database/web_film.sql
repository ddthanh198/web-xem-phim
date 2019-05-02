-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 02, 2019 lúc 06:11 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_film`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `numFilm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `numFilm`) VALUES
(1, 'Hành Động', NULL),
(2, 'Tình Cảm', NULL),
(3, 'Viễn Tưởng', NULL),
(4, 'Hoạt Hình', NULL),
(5, 'Kinh Dị', NULL),
(6, 'Hài Kịch', NULL),
(7, 'Trinh Thám', NULL),
(8, 'Phiêu Lưu', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idFilm` int(11) NOT NULL,
  `content` text NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `idFilm` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `Liked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `hinhanh` varchar(50) DEFAULT NULL,
  `NoiBat` int(11) NOT NULL,
  `nation` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  `source` varchar(50) NOT NULL,
  `views` int(11) DEFAULT NULL,
  `liked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `film`
--

INSERT INTO `film` (`id`, `name`, `hinhanh`, `NoiBat`, `nation`, `year`, `source`, `views`, `liked`) VALUES
(1, 'Tây Du Ký', NULL, 1, 'Trung Quốc', 1996, 'upload/film/TayDuKy.mp4', NULL, 0),
(2, 'Na Tra', NULL, 0, 'Trung Quốc', 2002, 'upload/film/Natra.mp4', NULL, 0),
(3, 'Chiếc Điện Thoại Thần Kỳ', NULL, 1, 'Trung Quốc', 2008, 'upload/film/video1.mp4', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `filmandcategory`
--

CREATE TABLE `filmandcategory` (
  `idFilm` int(11) NOT NULL,
  `idCategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `filmandcategory`
--

INSERT INTO `filmandcategory` (`idFilm`, `idCategory`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` int(11) DEFAULT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `phonenumber`, `email`) VALUES
(1, 'ndmanh', NULL, '0969183576', 'ndmanhts'),
(3, 'Manh', NULL, '0969183576', 'ndmanhts@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_FilmComment` (`iduser`),
  ADD KEY `fk_FilmC` (`idFilm`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`idFilm`,`idUser`),
  ADD KEY `fk_userdanhgia` (`idUser`);

--
-- Chỉ mục cho bảng `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `filmandcategory`
--
ALTER TABLE `filmandcategory`
  ADD PRIMARY KEY (`idFilm`,`idCategory`),
  ADD KEY `fk_Category` (`idCategory`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_FilmC` FOREIGN KEY (`idFilm`) REFERENCES `film` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_FilmComment` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `fk_filmdanhgia` FOREIGN KEY (`idFilm`) REFERENCES `film` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_userdanhgia` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `filmandcategory`
--
ALTER TABLE `filmandcategory`
  ADD CONSTRAINT `fk_Category` FOREIGN KEY (`idCategory`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_Film` FOREIGN KEY (`idFilm`) REFERENCES `film` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
