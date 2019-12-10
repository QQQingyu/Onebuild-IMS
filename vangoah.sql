-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2019 at 03:42 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vangoah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `account` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `introduction` text NOT NULL,
  `username` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `account`, `password`, `introduction`, `username`) VALUES
(1, '56167821', '123456', 'administrator', ''),
(2, 'test', '1234', 'test', 'Kent');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `pic` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `state` tinyint(1) DEFAULT '1',
  `inventory` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `pic`, `description`, `state`, `inventory`) VALUES
(1, 'p1', 12, 'products\\p_1.jpg', 'Product details\r\nWhite lace top, woven, has a round neck, short sleeves, has knitted lining attached\r\n\r\nMaterial & care\r\nPolyester\r\nMachine wash\r\nSize & Fit\r\nRegular fit\r\nThe model (height 5\'8\" and chest 33\") is wearing a size S\r\nDefine style this season with Armani\'s new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.', 0, 0),
(2, 'p2', 5464, 'products\\p_2.jpg', 'Product details\r\nWhite lace top, woven, has a round neck, short sleeves, has knitted lining attached', 0, 0),
(3, '2', 1, '4', '1', NULL, 0),
(5, '5', 6, 'upload/re4_5.png', '<p>tt</p>', 1, 0),
(7, '7', 7, 'upload/qq.jpg', '<p>7</p>', 1, 0),
(8, '7', 7, 'upload/qq.jpg', '<p><strong>é™„ä»¶å¥½ä¹…å¥½ä¹…</strong></p>', 1, 0),
(32, '2', 4, 'upload/ML.png', '<p>2</p>', 1, 0),
(42, '4', 4, '4', '5', 1, 0),
(77, '7', 8, 'upload/re4_5.png', '<p>12</p>', 1, 0),
(86, '8', 7, 'upload/ä¸‹è½½ (3).png', '<p>4</p>', 1, 0),
(89, '7', 7, 'upload/qq.jpg', '<p><em><strong>bkj</strong></em></p>', 1, 0),
(565, '565', 7, 'upload/re3.png', '<p>3å„ä¸ª</p>', 1, 0),
(567, 'name', 890, 'upload/lbk1575710506.jpg', '<p>å°±</p>', 0, 99),
(676, '7', 6, 'upload/jay.jpg', '<p>6</p>', 1, 0),
(886, '8', 676, 'upload/ml1.png', '<p>1</p>', 1, 0),
(1788, 'p1', 12, 'upload/', '<p>nihao</p>', 0, 0),
(3454, '675', 4343, 'upload/noQQ.png', '<p>ä½ å—</p>', 1, 0),
(6789, '45', 5, 'upload/lbk1575710740.jpg', '<p>hjj</p>', 0, 88),
(65765, '656', 658, 'upload/é˜¿é‡Œæ—ºæ—ºå›¾ç‰‡20191111153617.jpg', '<p>å››å·å®‰æˆä¸ç½‘åˆ¶é€ æœ‰é™å…¬å¸</p>', 1, 0),
(343432, '565', 2324, 'upload/noQQ.jpg', '<p>hjhjhj</p>', 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
