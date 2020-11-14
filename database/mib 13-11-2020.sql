-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 11:11 PM
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
(46, '0111201338175f9e6cf1d19d3.jpg', 0, 0, 0, '2020-11-01 13:38:17', '0000-00-00 00:00:00'),
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
(3, 'https://www.youtube.com/embed/JH8cjnbizqA/videoseries?controls=0&autoplay=1&mute=1', 0, 0, 0, '2020-11-06 17:47:54', '0000-00-00 00:00:00'),
(4, 'https://www.youtube.com/embed/ZkGmqj7nWsA/videoseries?controls=0&autoplay=1&mute=1', 0, 0, 0, '2020-11-06 17:52:14', '0000-00-00 00:00:00'),
(5, 'https://www.youtube.com/embed/7-9vmtZ2uxE/videoseries?controls=0&autoplay=1&mute=1', 0, 0, 0, '2020-11-06 18:54:37', '0000-00-00 00:00:00'),
(6, 'https://www.youtube.com/embed/5oSKhTcG1oM/videoseries?controls=0&autoplay=1&mute=1', 1, 0, 0, '2020-11-10 19:14:51', '0000-00-00 00:00:00');

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
(1, ' สรุปข่าวต่างประเทศ \' ไบเดน \' ขึ้นแท่นว่าที่ประธานาธิบดีสหรัฐฯ', '1311201925445fae906093b38.jpg', '', '', 'ลุ้นกันมาหลายวันสำหรับผลการนับคะแนนประธานาธิบดีสหรัฐฯ 2020 ล่าสุดสื่อหลายสำนักประกาศให้ นายโจ ไบเดน เป็นว่าที่ประธานาธิบดีสหรัฐฯ คนที่ 46 หลังจากกวาดคะแนนเสียงในรัฐเพนซิลเวเนีย ซึ่งมีคะแนนคณะผู้เลือกตั้ง 20 เสียง ทำให้นายไบเดนมีคะแนนรวม 290 เสียง นำหน้านายโดนัลด์ ทรัมป์ ที่มีคะแนนอยู่ที่ 214 เสียง', '', 0, 0, '2020-11-12 21:03:58', '2020-11-13 19:44:07', 0),
(2, 'Live Switcher AV-UHS500 Product Information was updated.', '0611202347045fa5932021fa2.jpg', '', '', '', '', 0, 0, '2020-11-10 21:20:04', '2020-11-13 19:39:08', 0),
(3, 'Firmware for the Live Switcher AV-UHS500 was updated to ver. 1.20.', '0611202347155fa5932b458c0.jpg', 'asdzc', '', '', '', 0, 0, '2020-11-10 21:20:00', '2020-11-13 19:45:56', 0),
(5, 'The P2 Viewer Plus software was updated to Ver.2.3.29.', '0611202354035fa594c3e7dd8.jpg', 'asdasdasd', '', '', '', 0, 0, '2020-11-06 23:54:03', '2020-11-13 19:46:54', 0),
(8, 'Live Switcher AV-UHS500 Product Information was updated.', '1111202159285fac11685e4d0.png', '', '', '', '', 0, 0, '2020-11-11 21:59:28', '2020-11-13 19:46:47', 0),
(9, 'Firmware for the Live Switcher AV-UHS500 was updated to ver. 1.20.', '1111202200075fac118f5bb2a.png', '', '', '', '', 0, 0, '2020-11-11 22:00:07', '2020-11-13 19:47:08', 0),
(10, 'The P2 Viewer Plus software was updated to Ver.2.3.29.', '1111202201055fac11c9c1a32.png', 'adasd', '', '', '', 0, 0, '2020-11-11 22:01:05', '2020-11-13 19:47:22', 0),
(12, 'asdasd', '1311201948165fae95a86eb11.jpg', '', '', 'asdasdasd', '', 0, 0, '2020-11-13 19:48:16', '2020-11-13 19:49:12', 0);

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
(9, '', 'asdasdasd\'\'\'\'', 3, 7, '', 'asdasd\'\'\'\'', '', 'asdasd\"\"\'\'\'::::\"\"\"\"\"\"\"\"\"\"\"\"\"', '1311201906015fae8bc111c2f.png', 30000, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(13, '', 'asdas', 1, 46, '', 'asdasd', '', 'asdasd', '0211202244535fa03e8d8e65a.jpg', 0, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(14, '', 'asd', 1, 46, '', 'asd', '', 'asd', '0211202245515fa03ec76e0d1.jpg', 0, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(15, '', 'zxczxc', 1, 46, '', 'zxczxc', '', 'asd', '0211202246015fa03ed19bb4c.jpg', 0, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(16, '', 'asdasd', 1, 46, '', 'asdasd', '', 'zxczxc', '0211202246375fa03ef558a76.jpg', 0, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(17, '', 'asdasd', 1, 46, '', 'asdasd', '', 'asdasd', '0411201057355fa23bc78ea48.jpg', 1000, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(18, '', 'asd', 1, 46, '', 'asd', '', 'asd', '0411201058555fa23c1728da7.jpg', 0, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(19, '', 'asd', 1, 46, '', 'asd', '', 'asd', '0411201058555fa23c1762c9d.jpg', 0, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(20, '', 'asd', 1, 46, '', 'asd', '', 'asd', '0411201104475fa23d77a4a62.jpg', 1000, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(21, '', 'AW-HE50W/K	', 1, 46, '', 'Panasonic', '', '-\"', '1311201757445fae7bc03bac4.png', 20999, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(23, '', 'AWO-120', 1, 46, '', 'ฟหกฟหก', '', 'ฟหกฟหก\"\"\"', '1311201621235fae652bd4283.png', 12000, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(25, '', 'AW-HE130W/K', 2, 1, '', 'Panasonic', '', 'HD Integrated Camera\r\n\r\n', '1011202117265faab60e2e2c4.png', 10000, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(26, '', 'AW-UE150W/K', 2, 1, '', 'Panasonic', '', '-', '1011202127435faab8772b6c7.png', 10000, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(27, '', 'AW-UE120W/K', 1, 2, '', 'Panasonic', '', '-', '1311201755475fae7b4b02717.png', 53000, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

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
(6, 'Professional Camera Recorders'),
(7, 'Accessories');

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
(3, 'PTZ Control Center', 'screencapture-localhost-mib-software-html-2020-11-06-11_45_45.png', '', 1, 2, 0, 0, '2020-11-08 23:09:18', 0, '0000-00-00 00:00:00'),
(7, 'CAC File for System Camera	', 'mib 7-11-2020.sql', '', 1, 3, 0, 0, '2020-11-10 20:51:00', 0, '0000-00-00 00:00:00');

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
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_product_line_up`
--
ALTER TABLE `tb_product_line_up`
  MODIFY `product_line_up_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tb_product_type`
--
ALTER TABLE `tb_product_type`
  MODIFY `product_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_software`
--
ALTER TABLE `tb_software`
  MODIFY `software_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
