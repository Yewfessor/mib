-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 07:58 PM
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
  `list_no_2` int(11) NOT NULL,
  `addby` int(11) NOT NULL,
  `updateby` int(11) NOT NULL,
  `adddate` datetime NOT NULL,
  `lastupdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_hero`
--

INSERT INTO `tb_hero` (`hero_id`, `hero_images`, `list_no`, `list_no_2`, `addby`, `updateby`, `adddate`, `lastupdate`) VALUES
(23, '2410202150385f945456ee6a4.jpg', 0, 1, 0, 0, '2020-10-24 21:50:38', '0000-00-00 00:00:00'),
(46, '0111201338175f9e6cf1d19d3.jpg', 1, 1, 0, 0, '2020-11-01 13:38:17', '0000-00-00 00:00:00'),
(50, '0211202219575fa038b5442cc.jpg', 1, 0, 0, 0, '2020-11-02 22:19:57', '0000-00-00 00:00:00'),
(51, '1911201235045fb619206da36.jpg', 0, 0, 0, 0, '2020-11-19 12:35:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_link`
--

CREATE TABLE `tb_link` (
  `link_id` int(11) NOT NULL,
  `link_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `list_no` int(11) NOT NULL,
  `list_no_2` int(11) NOT NULL,
  `addby` int(11) NOT NULL,
  `updateby` int(11) NOT NULL,
  `adddate` datetime NOT NULL,
  `lastupdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_link`
--

INSERT INTO `tb_link` (`link_id`, `link_name`, `list_no`, `list_no_2`, `addby`, `updateby`, `adddate`, `lastupdate`) VALUES
(3, 'https://www.youtube.com/embed/JH8cjnbizqA/videoseries?controls=0&autoplay=1&mute=1', 0, 0, 0, 0, '2020-11-06 17:47:54', '0000-00-00 00:00:00'),
(4, 'https://www.youtube.com/embed/ZkGmqj7nWsA/videoseries?controls=0&autoplay=1&mute=1', 0, 1, 0, 0, '2020-11-06 17:52:14', '0000-00-00 00:00:00'),
(5, 'https://www.youtube.com/embed/7-9vmtZ2uxE/videoseries?controls=0&autoplay=1&mute=1', 0, 0, 0, 0, '2020-11-06 18:54:37', '0000-00-00 00:00:00'),
(6, 'https://www.youtube.com/embed/5oSKhTcG1oM/videoseries?controls=0&autoplay=1&mute=1', 1, 0, 0, 0, '2020-11-10 19:14:51', '0000-00-00 00:00:00'),
(13, 'https://www.youtube.com/embed/1SOjWTWMrEg?list=RDpst5Us9ynD4/videoseries?controls=0&autoplay=1&mute=1', 0, 0, 0, 0, '2020-11-18 23:02:57', '0000-00-00 00:00:00');

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
(1, ' สรุปข่าวต่างประเทศ \' ไบเดน \' ขึ้นแท่นว่าที่ประธานาธิบดีสหรัฐฯ', '1311201925445fae906093b38.jpg', '', '', 'ลุ้นกันมาหลายวันสำหรับผลการนับคะแนนประธานาธิบดีสหรัฐฯ 2020 ล่าสุดสื่อหลายสำนักประกาศให้ นายโจ ไบเดน เป็นว่าที่ประธานาธิบดีสหรัฐฯ คนที่ 46 หลังจากกวาดคะแนนเสียงในรัฐเพนซิลเวเนีย ซึ่งมีคะแนนคณะผู้เลือกตั้ง 20 เสียง ทำให้นายไบเดนมีคะแนนรวม 290 เสียง นำหน้านายโดนัลด์ ทรัมป์ ที่มีคะแนนอยู่ที่ 214 เสียง', '', 0, 0, '2020-11-12 21:03:58', '2020-11-13 13:57:18', 0),
(2, 'Live Switcher AV-UHS500 Product Information was updated.', '0611202347045fa5932021fa2.jpg', '', '', '', '', 0, 0, '2020-11-10 21:20:04', '2020-11-13 19:39:08', 0),
(3, 'Firmware for the Live Switcher AV-UHS500 was updated to ver. 1.20.', '0611202347155fa5932b458c0.jpg', 'asdzc', '', '', '', 0, 0, '2020-11-10 21:20:00', '2020-11-13 19:45:56', 0),
(5, 'The P2 Viewer Plus software was updated to Ver.2.3.29.', '0611202354035fa594c3e7dd8.jpg', 'asdasdasd', '', '', '', 0, 0, '2020-11-06 23:54:03', '2020-11-13 19:46:54', 0),
(8, 'Live Switcher AV-UHS500 Product Information was updated.', '1111202159285fac11685e4d0.png', '', '', '', '', 0, 0, '2020-11-11 21:59:28', '2020-11-13 19:46:47', 0),
(9, 'Firmware for the Live Switcher AV-UHS500 was updated to ver. 1.20.', '1111202200075fac118f5bb2a.png', '', '', '', '', 0, 0, '2020-11-11 22:00:07', '2020-11-13 19:47:08', 0),
(10, 'The P2 Viewer Plus software was updated to Ver.2.3.29.', '1111202201055fac11c9c1a32.png', 'adasd', '', '', '', 0, 0, '2020-11-11 22:01:05', '2020-11-13 19:47:22', 0),
(12, 'asdasd', '1311201948165fae95a86eb11.jpg', '', '', 'asdasdasd', '', 0, 0, '2019-11-13 14:01:39', '2019-11-13 14:01:49', 0),
(13, 'VOC1', '1411201233465faf81523a479.png', '', '', '', '', 0, 0, '2020-11-14 12:33:46', '2020-11-14 12:33:46', 0);

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
(9, '', 'กล้องวีดีโอ Sony PXW-FS7 M2 4K XDCAM Super 35 Camcorder Kit with 18-110mm Zoom Lens', 1, 46, '', 'XDCAM', '', '', '2211201303155fba143c1ac71.jpg', 375000, 0, 0, '0000-00-00 00:00:00', 0, '2020-11-22 13:10:04'),
(13, '', 'กล้องวีดีโอ Sony PXW-FS7 M2 XDCAM Super 35 Camera System', 1, 46, '', 'XDCAM', '', '', '2211201304515fba149b13d61.jpg', 299900, 0, 0, '0000-00-00 00:00:00', 0, '2020-11-22 13:09:42'),
(14, '', 'เลนส์ Canon CN7x17 KAS S Cine-Servo 17-120mm T2.95 (EF Mount)', 2, 1, '', 'Lens Canon', '', '', '2211201308285fba1574e1204.jpg', 820000, 0, 0, '0000-00-00 00:00:00', 0, '2020-11-22 13:14:54'),
(15, '', 'เลนส์ Canon CN-E 14.5-60mm T2.6 L S Cinema Zoom Lens with EF Mount', 2, 1, '', 'Lens Canon', '', '', '2211201311285fba1628209b1.jpg', 1270000, 0, 0, '0000-00-00 00:00:00', 0, '2020-11-22 13:15:02'),
(16, '', 'กล้อง DSLR Sony a9 CMOS sensor Mirrorless full frame', 3, 7, '', 'กล้อง DSLR SONY', '', '', '2211201316155fba1747595b5.jpg', 130990, 0, 0, '0000-00-00 00:00:00', 0, '2020-11-22 13:16:15'),
(17, '', 'กล้อง DSLR Sony a99 ii CMOS sensor 35mm. full frame', 3, 7, '', 'กล้อง DSLR SONY', '', '', '2211201317075fba177be5eb7.jpg', 109000, 0, 0, '0000-00-00 00:00:00', 0, '2020-11-22 13:17:07'),
(18, '', 'ขาตั้งกล้องวีดีโอ LIBEC TH-650HD', 4, 13, '', 'ขาตั้งกล้องวีดีโอ LIBEC', '', '', '2211201318105fba17ba6240d.png', 7500, 0, 0, '0000-00-00 00:00:00', 0, '2020-11-22 13:19:26'),
(19, '', 'ขาตั้งกล้องวีดีโอ Libec ALX KIT Tripod and Fluid Head Kit', 4, 13, '', 'ขาตั้งกล้องวีดีโอ LIBEC', '', '', '2211201319015fba17edebbca.jpg', 14000, 0, 0, '0000-00-00 00:00:00', 0, '2020-11-22 13:19:01'),
(20, '', 'SWITCHER SONY MCX-500 Multi-Camera Live Producer', 5, 15, '', 'Switcher Sony', '', '', '2211201321305fba188299a29.jpg', 92000, 0, 0, '0000-00-00 00:00:00', 0, '2020-11-22 13:21:30'),
(21, '', 'Sony MCS8M Compact Audio Video Mixing Switcher', 5, 15, '', 'Switcher Sony', '', '', '2211201322105fba18aa93338.jpg', 230000, 0, 0, '0000-00-00 00:00:00', 0, '2020-11-22 13:22:10'),
(23, '', 'Sony PVMA170 17 นิ้ว Professional OLED Production Monitor', 6, 17, '', 'จอมอนิเตอร์ SONY', '', '', '2211201323235fba18f37cf81.jpg', 172000, 0, 0, '0000-00-00 00:00:00', 0, '2020-11-22 13:23:23'),
(25, '', 'Sony PVMA250 25 นิ้ว Professional OLED Production Monitor', 6, 17, '', 'จอมอนิเตอร์ SONY', '', '', '2211201324105fba192280c05.jpg', 260000, 0, 0, '0000-00-00 00:00:00', 0, '2020-11-22 13:24:10'),
(26, '', 'เลนส์ Zeiss Compact Prime ขนาด CP.2 15mm/T2.9 EF Mount', 2, 2, '', 'ZIESS CP', '', '', '2211201325205fba1968df5a4.jpg', 168000, 0, 0, '0000-00-00 00:00:00', 0, '2020-11-22 13:25:20'),
(27, '', 'เลนส์ Zeiss CP.3 15mm T2.9 Compact Prime Lens (PL Mount, Feet)', 2, 2, '', 'ZIESS CP', '', '', '2211201326075fba199732efb.jpg', 208000, 0, 0, '0000-00-00 00:00:00', 0, '2020-11-22 13:26:07'),
(28, '', 'ฟหกฟหก', 1, 46, '', 'ฟหกฟหก', '', '<p><strong>Fast Hybrid Auto Focus</strong></p>\r\n\r\n<p>Offers highly accurate focusing and tracking, especially useful when shooting sharp UHD 4K footage</p>\r\n\r\n<p><strong>Zeiss T* Lens with 12x Optical Zoom</strong></p>\r\n\r\n<p>The PXW-Z90V&#39;s fixed 12x optical wide-angle zoom with 18x Clear Image Zoom technology in UHD 4K (24x in HD)</p>\r\n\r\n<p><strong>Frame Rate Flexibility</strong></p>\r\n\r\n<p>Record up to UHD 4K video (3840 x 2160p) at 29.97, 25, and 23.98 fps, in XAVC Long in a choice of 100 Mb/s or 60 Mb/s, or HD at frame rates up to 59.94p</p>\r\n\r\n<p><strong>Super Slow Motion</strong></p>\r\n\r\n<p>Offers slow motion recording up to 960 fps</p>\r\n\r\n<p><strong>Slow &amp; Quick Recording</strong></p>\r\n\r\n<p>Uses Sony&#39;s Slow &amp; Quick Motion for recording 1080p/i60 HD video at 1, 2, 4, 8, 15, 30, 60, and 120 fps</p>\r\n\r\n<p><strong>Multiple-Codec Choice</strong></p>\r\n\r\n<p>Record in XAVC Long (UHD 4K), MPEG-4 HD at 4:2:0, XAVC Long (HD) 4:2:2, HD 2.0, or XVAC Proxy at 4:2:0, at a variety of data rates (license key required for some codecs)</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2211201410175fba23f176b80.jpg', 92000, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

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
(1, 'Lens Canon', 2),
(2, 'Lens Zeiss', 2),
(3, 'SAMYANG', 2),
(7, 'กล้อง DSLR SONY', 3),
(8, 'กล้อง DSLR PANASONIC', 3),
(9, 'กล้อง DSLR CANON', 3),
(10, 'กล้อง DSLR NIKON', 3),
(13, 'ขาตั้งกล้องวีดีโอ LIBEC', 4),
(14, 'ขาตั้งกล้องวีดีโอ Manfrotto', 4),
(15, 'Switcher Sony', 5),
(16, 'Switcher Panasonic', 5),
(17, 'จอมอนิเตอร์ SONY', 6),
(18, 'จอมอนิเตอร์ Panasonic', 6),
(19, 'จอมอนิเตอร์ Lilliput', 6),
(20, 'จอมอนิเตอร์ Atomos', 6),
(21, 'จอมอนิเตอร์ Swit', 6),
(22, 'Sony', 7),
(23, 'Gopro', 7),
(46, 'กล้องวีดีโอ SONY ', 1);

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
(1, 'Camera Camcorder'),
(2, 'Lens'),
(3, 'DSLR Camera'),
(4, 'Tripod / Monopod'),
(5, 'Video Switcher'),
(6, 'Monitor'),
(7, 'Action Camera'),
(8, 'Wireless Microphone'),
(9, 'Wireless Video'),
(10, 'Converter'),
(11, 'Accessory'),
(12, 'Projector'),
(13, 'Projector Screen'),
(14, 'Wireless Intercom'),
(15, 'Equipment for Streaming');

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
  MODIFY `hero_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tb_link`
--
ALTER TABLE `tb_link`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_product_line_up`
--
ALTER TABLE `tb_product_line_up`
  MODIFY `product_line_up_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tb_product_type`
--
ALTER TABLE `tb_product_type`
  MODIFY `product_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_software`
--
ALTER TABLE `tb_software`
  MODIFY `software_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
