-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 15, 2019 lúc 04:42 PM
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

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `email`, `name`, `password`) VALUES
(2, 'ndmanhts@gmail.com', 'Manh', '1234'),
(3, 'ndmanhts@gmail.com', '1', '1234'),
(4, 'ndmanhts@gmail.com', '1', '1234'),
(5, 'ndmanhts@gmail.com', '3', '1234'),
(6, 'ndmanhts@gmail.com', 'Hoc', '1234');

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
(1, 'Hành Động', NULL);

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

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `iduser`, `idFilm`, `content`, `time`) VALUES
(56, 31, 104, 'Phim như ... gg', '1997-04-02'),
(57, 31, 104, 'manh', '1997-04-02'),
(58, 31, 104, 'manh', '1997-04-02'),
(59, 31, 104, 'manh', '1997-04-02'),
(60, 31, 104, 'hh', '1997-04-02'),
(61, 31, 104, 'hhh', '1997-04-02'),
(62, 31, 104, 'Manh', '1997-04-02'),
(63, 31, 104, 'Manh', '1997-04-02'),
(64, 31, 104, 'huhu', '1997-04-02'),
(65, 31, 104, 'huhuuh', '1997-04-02'),
(66, 31, 104, 'hhhh', '1997-04-02'),
(67, 31, 104, 'hhh', '1997-04-02'),
(68, 31, 104, 'hhh', '1997-04-02'),
(69, 31, 104, 'huhuhu', '1997-04-02'),
(70, 21, 104, 'Manh', '1997-04-02'),
(71, 21, 104, 'Hùng', '1997-04-02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `idFilm` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `Liked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`idFilm`, `idUser`, `Liked`) VALUES
(104, 30, 1),
(104, 31, 1);

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
  `liked` int(11) DEFAULT NULL,
  `NSX` varchar(255) DEFAULT NULL,
  `unliked` int(11) DEFAULT NULL,
  `content` text,
  `author` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `film`
--

INSERT INTO `film` (`id`, `name`, `hinhanh`, `NoiBat`, `nation`, `year`, `source`, `views`, `liked`, `NSX`, `unliked`, `content`, `author`, `created_at`, `updated_at`) VALUES
(104, 'HH', 'natra1.jpg', 1, 'hh', 111, 'upload/film/cmm.mp4', NULL, NULL, 'd', NULL, 'HHHHH', 'Manh', '2019-05-11 15:45:32', '2019-05-11 15:45:32'),
(106, 'hh', 'natra.jpg', 1, 'HHHH', 1998, 'upload/film/cmm.mp4', NULL, NULL, 'h', NULL, 'fghj', 'HHHHH', '2019-05-13 03:48:12', '2019-05-13 03:48:12'),
(1000, 'd', 'natra2.jpg', 1, 'd', 23, 'upload/film/video1.mp4', NULL, NULL, 'd', NULL, 'd', 'd', '2019-05-13 08:38:30', '2019-05-13 08:38:30'),
(1001, 'f', 'natra1.jpg', 0, 'f', 2345, 'upload/film/video1.mp4', NULL, NULL, 'f', NULL, 'f', 'f', '2019-05-15 02:37:31', '2019-05-15 02:37:31'),
(1002, 'Tây du ký', 'natra2.jpg', 1, 'HHHH', 2344, 'upload/film/cmm.mp4', NULL, NULL, 'd', NULL, 'HH', 'f', '2019-05-15 03:30:55', '2019-05-15 03:30:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `filmandcategory`
--

CREATE TABLE `filmandcategory` (
  `idFilm` int(11) NOT NULL,
  `idCategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `admin` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `phonenumber`, `email`, `admin`) VALUES
(21, 'Thanh', '$2y$10$H5YJnpN3C5LDnujcBNyLNecmAhoMmrAdNF.pRlVGm6rXFhwF6zi.e', '0969183576', 'ndmanhts@gmail.com', 2),
(22, 'abc123', '$2y$10$S1zj3/uSZF.L3C1WreBFc.x0PY6bRLxUtacMZq49LFsEskI/5wu6m', '0969183576', 'ndmanhts@gmail.com', 0),
(23, 'Ngan', '$2y$10$19sDEiivA.cQO0UNIMPv6Onwa.agjwNuNSyMez/8wkuKzaeR8LshG', '0969183576', 'ndmanhts@gmail.com', 0),
(24, 'Hoang', '$2y$10$dYgWZKD4m9/xS8ZfhbViGuTyWCvRw7XvL2xH8Ij5Yf3AUWAUhRHnO', '0969183576', 'ndmanhts@gmail.com', 0),
(25, 'Hung', '$2y$10$Hi33QG7yrpM4XL67p8qiYOy426DXWSAfmBjUHdrrEPHhHu8o.kT0a', '0969183576', 'ndmanhts@gmail.com', 0),
(26, 'hhh', '$2y$10$Kv7TpuJpiu1T1o51sDnRF.v/kDd2lf/nl.k9lyS8VH6bM95.eRT9S', '0969183576', 'ndmanhts@gmail.com', 0),
(27, 'haha', '$2y$10$KIHBObchdl7DcPHDECzUu.kuxYgmaG6/ZS1slLcl0SWYiks4cK6qq', '0969183576', 'ndmanhts@gmail.com', 0),
(28, 'Manh', '$2y$10$VvDsNk6I97bRizkj4bywB.k9q5dbpJ4iFARfZbQEQjr.MMO3Gzf52', '0969183576', 'ndmanhts@gmail.com', 0),
(29, 'Lanh', '$2y$10$t6vIWnnjjm6lQknxtkypLe5HYLkrkOngJNmToDg8FkhyjKvphGZui', '0969183576', 'ndmanhts@gmail.com', 1),
(30, 'dinhmanh', '$2y$10$A4AykdKiCljvSxg4VGm8/OKJg02lU0koO6yAf4nMaVBkFCPS.0I8G', '0969183576', 'manh@gmail.com', 0),
(31, 'MA', '$2y$10$6x3H3QS5NnO2exgCnof2runo/PHxyM8A4uv2xuTYpNAyWjCzs8Juu', '0971412638', 'vuongminhanhsnail@gmail.com', 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
