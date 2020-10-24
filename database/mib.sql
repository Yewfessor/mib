-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2020 at 06:56 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mib`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_hero`
--

CREATE TABLE `tb_hero` (
  `hero_id` int(11) NOT NULL,
  `hero_images` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `list_no` int(11) NOT NULL,
  `addby` int(11) NOT NULL,
  `updateby` int(11) NOT NULL,
  `adddate` datetime NOT NULL,
  `lastupdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_hero`
--

INSERT INTO `tb_hero` (`hero_id`, `hero_images`, `list_no`, `addby`, `updateby`, `adddate`, `lastupdate`) VALUES
(15, '221020190158.jpg', 0, 0, 0, '2020-10-22 19:01:58', '0000-00-00 00:00:00'),
(16, '221020190208.jpg', 0, 0, 0, '2020-10-22 19:02:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_herounder`
--

CREATE TABLE `tb_herounder` (
  `herounder_id` int(11) NOT NULL,
  `herounder_images` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `list_no` int(11) NOT NULL,
  `addby` int(11) NOT NULL,
  `updateby` int(11) NOT NULL,
  `adddate` datetime NOT NULL,
  `lastupdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_herounder`
--

INSERT INTO `tb_herounder` (`herounder_id`, `herounder_images`, `list_no`, `addby`, `updateby`, `adddate`, `lastupdate`) VALUES
(1, '221020215441.jpg', 0, 0, 0, '2020-10-22 21:54:41', '0000-00-00 00:00:00'),
(2, '221020215500.jpg', 0, 0, 0, '2020-10-22 21:55:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `news_id` int(11) NOT NULL,
  `news_image` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `news_description_th` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `news_description_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `new_detail_th` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `new_detail_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `list_no` int(11) NOT NULL,
  `addby` int(11) NOT NULL,
  `adddate` datetime NOT NULL,
  `lastupdate` datetime NOT NULL,
  `updateby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `product_name_th` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_name_en` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_brand` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_description_th` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_description_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_detail_th` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_detail_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_image` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `list_no` int(11) NOT NULL,
  `addby` int(11) NOT NULL,
  `adddate` datetime NOT NULL,
  `updateby` int(11) NOT NULL,
  `lastupdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_username`, `user_password`) VALUES
(1, 'admin', '12345'),
(2, 'user', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_hero`
--
ALTER TABLE `tb_hero`
  ADD PRIMARY KEY (`hero_id`);

--
-- Indexes for table `tb_herounder`
--
ALTER TABLE `tb_herounder`
  ADD PRIMARY KEY (`herounder_id`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_hero`
--
ALTER TABLE `tb_hero`
  MODIFY `hero_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_herounder`
--
ALTER TABLE `tb_herounder`
  MODIFY `herounder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
