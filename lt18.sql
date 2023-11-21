-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2023 at 08:13 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lt18`
--

-- --------------------------------------------------------

--
-- Table structure for table `flower`
--

CREATE TABLE `flower` (
  `id_hoahong` int NOT NULL,
  `ten_hoahong` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gia_hoahong` double NOT NULL,
  `giamgia_hoahong` double NOT NULL,
  `chitiet_hoahong` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `anh_hoahong` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `flower`
--

INSERT INTO `flower` (`id_hoahong`, `ten_hoahong`, `gia_hoahong`, `giamgia_hoahong`, `chitiet_hoahong`, `anh_hoahong`) VALUES
(2, 'flow wife', 22, 27, 'abc', 'img-2.jpg'),
(3, 'Flow bot', 15.9, 19.5, 'abc', 'img-1.jpg'),
(4, 'flow baby', 22, 27, 'abc', 'img-3.jpg'),
(5, 'Flow husband', 32, 39, 'abc', 'img-4.jpg'),
(6, 'flow lover', 96, 99, 'abc', 'img-5.jpg'),
(7, 'Flow friends', 9, 10, 'abc', 'img-6.png'),
(8, 'flow mother', 88, 89, 'abc', 'img-7.jpg'),
(9, 'Flow boss', 14, 16, 'abc', 'img-8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `flower_hoaly`
--

CREATE TABLE `flower_hoaly` (
  `id_hoaly` int NOT NULL,
  `ten_hoaly` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gia_hoaly` double NOT NULL,
  `giamgia_hoaly` double NOT NULL,
  `chitiet_hoaly` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `anh_hoaly` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `flower_hoaly`
--

INSERT INTO `flower_hoaly` (`id_hoaly`, `ten_hoaly`, `gia_hoaly`, `giamgia_hoaly`, `chitiet_hoaly`, `anh_hoaly`) VALUES
(1, 'Flower Man', 44, 48, 'abc', 'img-12.png'),
(2, 'Flower Man', 44, 48, 'abc', 'img-8.jpg'),
(3, 'Flower colleagues', 22, 56, 'abc', 'img-11.png'),
(4, 'Flower children', 28, 36, 'abc', 'img-10.png'),
(5, 'Flower Baby', 19, 29, 'abc', 'img-9.jpg'),
(6, 'Flower colleagues2', 22, 56, 'abc', 'img-8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` int NOT NULL,
  `message` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `phone`, `message`) VALUES
(1, 'ngấc', 545454545, 'fsffff'),
(2, 'Nguyễn Nam', 934858, 's s s'),
(3, 'Nguyen Nam', 934858, 'vbvbbbb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flower`
--
ALTER TABLE `flower`
  ADD PRIMARY KEY (`id_hoahong`);

--
-- Indexes for table `flower_hoaly`
--
ALTER TABLE `flower_hoaly`
  ADD PRIMARY KEY (`id_hoaly`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flower`
--
ALTER TABLE `flower`
  MODIFY `id_hoahong` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `flower_hoaly`
--
ALTER TABLE `flower_hoaly`
  MODIFY `id_hoaly` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
