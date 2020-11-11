-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2017 at 08:26 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

DROP TABLE IF EXISTS `tbl_location`;
CREATE TABLE IF NOT EXISTS `tbl_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location_name` varchar(255) DEFAULT NULL,
  `lat` varchar(100) DEFAULT NULL,
  `lng` varchar(100) DEFAULT NULL,
  `location_type` tinyint(1) DEFAULT NULL,
  `location_detail` varchar(255) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`id`, `location_name`, `lat`, `lng`, `location_type`, `location_detail`, `image_name`) VALUES
(1, 'โรงแรมมีสุข', '15.175530157957471', '103.6834716796875', 1, '', ''),
(2, 'โรงแรมอยู่สบาย', '15.090687418628141', '103.9141845703125', 1, '', ''),
(3, 'ร้านอาหารกินอิ่ม', '15.08803553604297', '103.57086181640625', 2, '', ''),
(4, 'โรงแรมสวัสดี', '14.450638918075438', '103.9581298828125', 1, '', ''),
(6, 'โรงแรมน่าอยู่', '14.902321826141808', '104.35089111328125', 1, 'โรงแรมน่าอยู่มาก อยู่ใจกลางเมือง', '1512152372.jpg'),
(7, 'โรงแรมอยู่ดี', '15.013769408093117', '103.02978515625', 1, 'โรงแรมอยู่ดี สงบเงียบส่วนตัวมาก', '1512153169.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location_type`
--

DROP TABLE IF EXISTS `tbl_location_type`;
CREATE TABLE IF NOT EXISTS `tbl_location_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location_type_th` varchar(100) NOT NULL,
  `location_type_en` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_location_type`
--

INSERT INTO `tbl_location_type` (`id`, `location_type_th`, `location_type_en`) VALUES
(1, 'โรงแรม', 'Hotel'),
(2, 'ร้านอาหาร', 'Food');
(3, 'สถานที่ท่องเที่ยว', 'travel');
(4, 'สวนสนุก', 'Amusementpark'),
(5, 'ถ้ำ', 'Cave'),
(6, 'เขื่อน', 'Dam'),
(7, 'ทุ่งหญ้า', 'Grassfield'),
(8, 'เกาะ', 'Island'),
(9, 'ตลาด', 'Market'),
(10, 'เขา', 'Mountain'),
(11, 'พิพิธภัณฑ์', 'Museum'),
(12, 'แม่น้ำ', 'River'),
(13, 'ทะเล', 'Sea'),
(14, 'วัด', 'Temple'),
(15, 'ต้นไม้', 'Tree'),
(16, 'น้ำตก', 'Waterfall'),
(17, 'สวนน้ำ', 'Waterpark'),
(18, 'สวนสัตว์', 'Zoo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
