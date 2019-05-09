-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 08, 2019 at 01:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_film`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `numFilm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
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
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idFilm` int(11) NOT NULL,
  `content` text NOT NULL,
  `time` date NOT NULL,
  `subid` int(11) NOT NULL DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `iduser`, `idFilm`, `content`, `time`, `subid`) VALUES
(1, 3, 1, 'DKM thang manh', '2019-05-15', -1),
(3, 1, 1, 'dfsdfsdfsdjsadhsgfhavwa hawqrehjgrbdflksfesgfdnfswfkaegsfbnd k wr wq ức r  a wqfey gegwafa', '1997-04-02', -1),
(4, 1, 1, 'ádasdsadassasdc', '1997-04-02', -1),
(5, 1, 1, 'ádasdsadassasdc', '1997-04-02', -1),
(7, 1, 1, 'qwertyukwerrthj', '1997-04-02', -1),
(8, 1, 1, 'qwertyukwerrthjwqerwtyu', '1997-04-02', -1),
(9, 1, 1, 'qwertyukwerrthjwqerwtyu', '1997-04-02', -1),
(10, 1, 1, 'qwertyukwerrthjwqerwtyu', '1997-04-02', -1),
(11, 1, 1, 'qwertyukwerrthjwqerwtyu', '1997-04-02', -1),
(12, 1, 1, 'qwertyukwerrthjwqerwtyuwrerttyytukyilu', '1997-04-02', -1),
(13, 1, 1, 'qwertyukwerrthjwqerwtyuwrerttyytukyilu', '1997-04-02', -1),
(14, 1, 1, 'qwertyukwerrthjwqerwtyuwrerttyytukyilusadasd asdasd asdasds', '1997-04-02', -1),
(15, 1, 1, 'qwertyukwerrthjwqerwtyuwrerttyytukyilusadasd asdasd asdasdsadasdsad', '1997-04-02', -1),
(16, 1, 1, 'qwertyukwerrthjwqerwtyuwrerttyytukyilusadasd asdasd asdasdsadasdsadsada', '1997-04-02', -1),
(17, 1, 1, 'asdsdas', '1997-04-02', -1),
(18, 1, 1, 'DU Xuan Phong Ngan', '1997-04-02', -1),
(19, 1, 1, 'Hello Ngan day', '2019-05-08', -1);

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `idFilm` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `Liked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `danhgia`
--

INSERT INTO `danhgia` (`idFilm`, `idUser`, `Liked`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `film`
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
  `liked` int(11) NOT NULL,
  `unliked` int(11) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `author` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `name`, `hinhanh`, `NoiBat`, `nation`, `year`, `source`, `views`, `liked`, `unliked`, `content`, `author`) VALUES
(1, 'Tây Du Ký', '/images/logo.png', 1, 'Trung Quốc', 1996, 'upload/film/TayDuKy.mp4', NULL, 3, 1, 'Noi dung phim Tay du ky. link fake deo hieu sao cho ban tin thoi su vao ạ', ''),
(2, 'Na Tra', NULL, 0, 'Trung Quốc', 2002, 'upload/film/Natra.mp4', NULL, 0, 0, '', ''),
(3, 'Chiếc Điện Thoại Thần Kỳ', NULL, 1, 'Trung Quốc', 2008, 'upload/film/video1.mp4', NULL, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `filmandcategory`
--

CREATE TABLE `filmandcategory` (
  `idFilm` int(11) NOT NULL,
  `idCategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `filmandcategory`
--

INSERT INTO `filmandcategory` (`idFilm`, `idCategory`) VALUES
(1, 1),
(1, 3),
(1, 4),
(2, 1),
(2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` int(11) DEFAULT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `avatar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `phonenumber`, `email`, `avatar`) VALUES
(1, 'ndmanh', NULL, '0969183576', 'ndmanhts', ''),
(3, 'Manh', NULL, '0969183576', 'ndmanhts@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_FilmComment` (`iduser`),
  ADD KEY `fk_FilmC` (`idFilm`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`idFilm`,`idUser`),
  ADD KEY `fk_userdanhgia` (`idUser`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filmandcategory`
--
ALTER TABLE `filmandcategory`
  ADD PRIMARY KEY (`idFilm`,`idCategory`),
  ADD KEY `fk_Category` (`idCategory`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_FilmC` FOREIGN KEY (`idFilm`) REFERENCES `film` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_FilmComment` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `fk_filmdanhgia` FOREIGN KEY (`idFilm`) REFERENCES `film` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_userdanhgia` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `filmandcategory`
--
ALTER TABLE `filmandcategory`
  ADD CONSTRAINT `fk_Category` FOREIGN KEY (`idCategory`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_Film` FOREIGN KEY (`idFilm`) REFERENCES `film` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
