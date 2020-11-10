-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 03:09 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `hero_images` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
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
(23, '2410202150385f945456ee6a4.jpg', 0, 0, 0, '2020-10-24 21:50:38', '0000-00-00 00:00:00'),
(46, '0111201338175f9e6cf1d19d3.jpg', 1, 0, 0, '2020-11-01 13:38:17', '0000-00-00 00:00:00'),
(50, '0211202219575fa038b5442cc.jpg', 1, 0, 0, '2020-11-02 22:19:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_herounder`
--

CREATE TABLE `tb_herounder` (
  `herounder_id` int(11) NOT NULL,
  `herounder_images` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
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
-- Table structure for table `tb_link`
--

CREATE TABLE `tb_link` (
  `link_id` int(11) NOT NULL,
  `link_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `list_no` int(11) NOT NULL,
  `addby` int(11) NOT NULL,
  `updateby` int(11) NOT NULL,
  `adddate` datetime NOT NULL,
  `lastupdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_link`
--

INSERT INTO `tb_link` (`link_id`, `link_name`, `list_no`, `addby`, `updateby`, `adddate`, `lastupdate`) VALUES
(3, 'https://www.youtube.com/embed/MyiFSgxDbWo/videoseries?controls=0&autoplay=1&mute=1&amp;list=PLSpi5Z-cqKs27A8JMw66uEkmDsC339q7J', 1, 0, 0, '2020-11-06 17:47:54', '0000-00-00 00:00:00'),
(4, 'https://www.youtube.com/embed/videoseries?controls=0&autoplay=1&mute=1&amp;list=PLSpi5Z-cqKs27A8JMw66uEkmDsC339q7J', 0, 0, 0, '2020-11-06 17:52:14', '0000-00-00 00:00:00'),
(5, 'https://www.youtube.com/embed/7-9vmtZ2uxE/videoseries?controls=0&autoplay=1&mute=1&amp;list=PLSpi5Z-cqKs27A8JMw66uEkmDsC339q7J', 0, 0, 0, '2020-11-06 18:54:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `news_id` int(11) NOT NULL,
  `news_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `news_image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `news_description_th` text COLLATE utf8_unicode_ci NOT NULL,
  `news_description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `news_detail_th` text COLLATE utf8_unicode_ci NOT NULL,
  `news_detail_en` text COLLATE utf8_unicode_ci NOT NULL,
  `list_no` int(11) NOT NULL,
  `addby` int(11) NOT NULL,
  `adddate` datetime NOT NULL,
  `lastupdate` datetime NOT NULL,
  `updateby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`news_id`, `news_name`, `news_image`, `news_description_th`, `news_description_en`, `news_detail_th`, `news_detail_en`, `list_no`, `addby`, `adddate`, `lastupdate`, `updateby`) VALUES
(1, 'asd', '0611202206075fa57b7764be9.jpg', 'asd', '', 'asd', '', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 'ฟหกฟหก', '0611202347045fa5932021fa2.jpg', 'ฟหกฟหก', '', 'ฟหกฟหก', '', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 'aseasd', '0611202347155fa5932b458c0.jpg', 'asdzc', '', 'zczxc', '', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(5, 'asdasd', '0611202354035fa594c3e7dd8.jpg', 'asdasdasd', '', 'asdasd', '', 0, 0, '2020-11-06 23:54:03', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `product_name_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_name_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_type_id` int(11) NOT NULL,
  `product_line_up_id` int(11) NOT NULL,
  `product_description_th` text COLLATE utf8_unicode_ci NOT NULL,
  `product_description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `product_detail_th` text COLLATE utf8_unicode_ci NOT NULL,
  `product_detail_en` text COLLATE utf8_unicode_ci NOT NULL,
  `product_image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `list_no` int(11) NOT NULL,
  `addby` int(11) NOT NULL,
  `adddate` datetime NOT NULL,
  `updateby` int(11) NOT NULL,
  `lastupdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `product_name_th`, `product_name_en`, `product_type_id`, `product_line_up_id`, `product_description_th`, `product_description_en`, `product_detail_th`, `product_detail_en`, `product_image`, `product_price`, `list_no`, `addby`, `adddate`, `updateby`, `lastupdate`) VALUES
(9, '', 'asd', 2, 1, '', 'asd', '', 'asd', '3010200008085f9b0c103adab.jpg', 0, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(12, '', 'ฟหก', 2, 2, '', 'ฟหก', '', 'ฟหก', '0111201230155f9e5cff7c9e0.jpg', 0, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(13, '', 'asdas', 1, 46, '', 'asdasd', '', 'asdasd', '0211202244535fa03e8d8e65a.jpg', 0, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(14, '', 'asd', 1, 46, '', 'asd', '', 'asd', '0211202245515fa03ec76e0d1.jpg', 0, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(15, '', 'zxczxc', 1, 46, '', 'zxczxc', '', 'asd', '0211202246015fa03ed19bb4c.jpg', 0, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(16, '', 'asdasd', 1, 46, '', 'asdasd', '', 'zxczxc', '0211202246375fa03ef558a76.jpg', 0, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(17, '', 'asdasd', 1, 46, '', 'asdasd', '', 'asdasd', '0411201057355fa23bc78ea48.jpg', 1000, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(18, '', 'asd', 1, 46, '', 'asd', '', 'asd', '0411201058555fa23c1728da7.jpg', 0, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(19, '', 'asd', 1, 46, '', 'asd', '', 'asd', '0411201058555fa23c1762c9d.jpg', 0, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(20, '', 'asd', 1, 46, '', 'asd', '', 'asd', '0411201104475fa23d77a4a62.jpg', 1000, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(21, '', 'asdasd', 1, 46, '', 'asdasd', '', 'asdasd', '0411201105035fa23d870af67.jpg', 0, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(23, '', 'หกฟห', 1, 46, '', 'ฟหกฟหก', '', 'ฟหกฟหก', '0411201111295fa23f094a4b3.jpg', 1000, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(24, '', 'ฟหกฟห', 1, 46, '', 'ฟหกฟหก', '', 'ฟหกฟหก', '0411201111465fa23f1a36f39.jpg', 1000, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_line_up`
--

CREATE TABLE `tb_product_line_up` (
  `product_line_up_id` int(11) NOT NULL,
  `product_line_up_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_product_line_up`
--

INSERT INTO `tb_product_line_up` (`product_line_up_id`, `product_line_up_name`, `product_type_id`) VALUES
(1, 'High-end Model', 2),
(2, 'Standard Model', 2),
(3, 'Entry Model', 2),
(4, 'Outdoor Model', 2),
(5, 'Remote Camera Controller', 2),
(6, '360-degree Live Camera', 2),
(7, 'Studio Camera', 3),
(8, 'Multi Purpose Camera', 3),
(9, 'Camera Control Unit (CCU)', 3),
(10, 'Remote Operation Panel (ROP)', 3),
(11, 'Viewfinder', 3),
(12, 'Master Setup Unit (MSU)', 3),
(13, '2ME or Larger Switcher Model', 4),
(14, '1ME Switcher Model\r\n', 4),
(15, 'VariCam', 5),
(16, 'EVA1', 5),
(17, 'CX Series', 6),
(18, 'P2HD Series\r\n', 6),
(19, 'Camcorder', 6),
(20, 'POVCAM', 6),
(21, 'Memory Card Recorder', 6),
(22, 'AC Adaptor', 7),
(23, 'Battery Pack', 7),
(24, 'Bracket', 7),
(25, 'Cable', 7),
(26, 'Camera Build-Up Unit', 7),
(27, 'Camera Control Unit', 7),
(28, 'Camera Module for VariCam', 7),
(29, 'Camera Studio System', 7),
(30, 'IP/12G/3G Interface Kit', 7),
(31, 'LCD Monitor', 7),
(32, 'LED Light', 7),
(33, 'Master Setup Unit', 7),
(34, 'Memory Card', 7),
(35, 'Memory Card Drive', 7),
(36, 'Memory Card Recorder', 7),
(37, 'Microphone', 7),
(38, 'Option Board', 7),
(39, 'Rain Cover', 7),
(40, 'Remote Camera Controller', 7),
(41, 'Remote Operation Panel', 7),
(42, 'Stand', 7),
(43, 'Tripod', 7),
(44, 'Viewfinder', 7),
(45, 'Wireless Module', 7),
(46, 'HARDWARE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_type`
--

CREATE TABLE `tb_product_type` (
  `product_type_id` int(11) NOT NULL,
  `product_type_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_product_type`
--

INSERT INTO `tb_product_type` (`product_type_id`, `product_type_name`) VALUES
(1, 'IT/IP Platform'),
(2, 'PTZ Camera Systems'),
(3, 'System Cameras'),
(4, 'Live Switchers'),
(5, 'Cinema Cameras'),
(6, 'Professional Camera Recorders');

-- --------------------------------------------------------

--
-- Table structure for table `tb_software`
--

CREATE TABLE `tb_software` (
  `software_id` int(11) NOT NULL,
  `software_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `software_file` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `software_description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `software_type_id` int(11) NOT NULL,
  `product_type_id` int(11) NOT NULL,
  `list_no` int(11) NOT NULL,
  `addby` int(11) NOT NULL,
  `adddate` datetime NOT NULL,
  `updateby` int(11) NOT NULL,
  `lastupdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_software`
--

INSERT INTO `tb_software` (`software_id`, `software_name`, `software_file`, `software_description_en`, `software_type_id`, `product_type_id`, `list_no`, `addby`, `adddate`, `updateby`, `lastupdate`) VALUES
(1, 'Auto Tracking Software Key', '', '90-day Free Trial', 1, 2, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(3, 'PTZ Control Center', 'screencapture-localhost-mib-software-html-2020-11-06-11_45_45.png', '', 1, 2, 0, 0, '2020-11-08 23:09:18', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_software_type`
--

CREATE TABLE `tb_software_type` (
  `software_type_id` int(11) NOT NULL,
  `software_type_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_software_type`
--

INSERT INTO `tb_software_type` (`software_type_id`, `software_type_name`) VALUES
(1, 'Free'),
(2, 'Chargeable');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_username`, `user_password`) VALUES
(1, 'admin', '12345');

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
-- Indexes for table `tb_link`
--
ALTER TABLE `tb_link`
  ADD PRIMARY KEY (`link_id`);

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
-- Indexes for table `tb_product_line_up`
--
ALTER TABLE `tb_product_line_up`
  ADD PRIMARY KEY (`product_line_up_id`);

--
-- Indexes for table `tb_product_type`
--
ALTER TABLE `tb_product_type`
  ADD PRIMARY KEY (`product_type_id`);

--
-- Indexes for table `tb_software`
--
ALTER TABLE `tb_software`
  ADD PRIMARY KEY (`software_id`);

--
-- Indexes for table `tb_software_type`
--
ALTER TABLE `tb_software_type`
  ADD PRIMARY KEY (`software_type_id`);

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
  MODIFY `hero_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_herounder`
--
ALTER TABLE `tb_herounder`
  MODIFY `herounder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_link`
--
ALTER TABLE `tb_link`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_product_line_up`
--
ALTER TABLE `tb_product_line_up`
  MODIFY `product_line_up_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tb_product_type`
--
ALTER TABLE `tb_product_type`
  MODIFY `product_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_software`
--
ALTER TABLE `tb_software`
  MODIFY `software_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_software_type`
--
ALTER TABLE `tb_software_type`
  MODIFY `software_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
