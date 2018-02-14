-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 22, 2015 at 03:38 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rfabricsdatabase`
--
CREATE DATABASE IF NOT EXISTS `rfabricsdatabase` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rfabricsdatabase`;

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `UserID` int(25) NOT NULL DEFAULT '0',
  `SystemLogID` int(25) NOT NULL DEFAULT '0',
  PRIMARY KEY (`UserID`,`SystemLogID`),
  KEY `foreignKey2Activity` (`SystemLogID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`UserID`, `SystemLogID`) VALUES
(48, 39),
(49, 40),
(45, 51),
(45, 52),
(45, 53),
(45, 55),
(45, 57),
(45, 58),
(45, 59),
(45, 61),
(45, 63),
(45, 65),
(45, 67),
(45, 68),
(45, 69),
(45, 70),
(45, 71),
(45, 72),
(45, 73),
(45, 74),
(45, 75),
(45, 76),
(45, 77),
(45, 78),
(45, 79),
(45, 80),
(45, 81),
(45, 82),
(45, 83),
(45, 84),
(45, 85),
(45, 86),
(45, 87),
(45, 88),
(45, 89),
(45, 90),
(45, 91),
(45, 92),
(45, 93),
(45, 94),
(45, 95),
(61, 96),
(61, 97),
(45, 98),
(61, 99),
(61, 100),
(45, 101),
(61, 102),
(61, 103),
(45, 104),
(45, 105),
(45, 106),
(61, 107),
(61, 108),
(60, 109),
(45, 110),
(61, 111),
(45, 112),
(45, 113),
(62, 114),
(45, 115),
(62, 116),
(62, 117),
(45, 118),
(62, 119),
(62, 120),
(45, 121),
(49, 122),
(49, 123),
(49, 124),
(49, 125),
(49, 126),
(60, 127),
(60, 128),
(60, 129),
(49, 130),
(49, 139),
(45, 140),
(49, 141),
(49, 142),
(45, 143),
(49, 144),
(49, 145),
(49, 146),
(49, 147),
(61, 148),
(61, 149),
(61, 150),
(61, 151),
(61, 152),
(61, 153),
(63, 154),
(63, 155),
(63, 156),
(63, 157),
(60, 158),
(60, 159),
(60, 160),
(49, 161),
(49, 162),
(49, 163),
(49, 164),
(49, 165),
(49, 166),
(49, 167),
(49, 168),
(63, 169),
(63, 170),
(63, 171),
(63, 172),
(63, 173),
(63, 174),
(63, 175),
(63, 176),
(49, 177),
(49, 178),
(49, 179),
(49, 180),
(49, 181),
(60, 182),
(60, 183),
(60, 184),
(60, 185),
(60, 186),
(60, 187),
(60, 188),
(60, 189),
(60, 190),
(60, 191),
(60, 192),
(60, 193),
(60, 194),
(60, 195),
(60, 196),
(61, 197),
(61, 198),
(45, 199),
(45, 200),
(45, 201),
(61, 202),
(61, 203),
(61, 204),
(61, 205),
(61, 206),
(61, 207),
(49, 208),
(45, 209),
(61, 210),
(61, 211),
(45, 212),
(45, 213),
(45, 214),
(45, 215),
(45, 216),
(45, 217),
(45, 218),
(60, 219),
(60, 220),
(60, 221),
(61, 222),
(61, 223),
(61, 224),
(61, 225),
(45, 226),
(45, 227),
(45, 228),
(49, 229),
(49, 230),
(61, 231),
(61, 232),
(60, 233),
(60, 234),
(60, 235),
(45, 236),
(63, 237),
(63, 238),
(63, 239),
(60, 240),
(60, 241),
(60, 242),
(61, 243),
(61, 244),
(49, 245),
(49, 246),
(61, 247),
(61, 248),
(63, 249),
(63, 250),
(60, 251),
(60, 252),
(45, 253),
(45, 254),
(63, 255),
(63, 256),
(60, 257);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `BannerID` int(25) NOT NULL AUTO_INCREMENT,
  `Image` varchar(200) NOT NULL,
  PRIMARY KEY (`BannerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`BannerID`, `Image`) VALUES
(1, 'data1/images/SliderIMG123.jpg'),
(2, 'data1/images/2.jpg'),
(3, 'data1/images/3.jpg'),
(4, 'data1/images/4.jpg'),
(5, 'data1/images/5.jpg'),
(6, 'data1/images/11198379_10200449725963711_1510360184_n.jpg'),
(7, 'data1/images/11225683_10200449725803707_2049478109_n.jpg'),
(8, 'data1/images/NepalDonationNew.jpg'),
(9, 'data1/images/Banner150x150.jpg'),
(10, 'data1/images/Banner150x150.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `CartID` int(25) NOT NULL AUTO_INCREMENT,
  `UserID` int(25) DEFAULT NULL,
  `Date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `total` double DEFAULT NULL,
  `Status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`CartID`),
  KEY `foreignKeyCart` (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CartID`, `UserID`, `Date`, `total`, `Status`) VALUES
(10, 61, '2015-05-06 17:05:19', 5966.65, 1),
(11, 61, '2015-05-07 14:48:32', 1395, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fabrics`
--

CREATE TABLE IF NOT EXISTS `fabrics` (
  `FabricID` int(25) NOT NULL AUTO_INCREMENT,
  `SupplierID` int(25) DEFAULT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Price` double DEFAULT NULL,
  `Content` varchar(25) DEFAULT NULL,
  `colour` varchar(25) DEFAULT NULL,
  `Quty` double DEFAULT NULL,
  `Theme` varchar(25) DEFAULT NULL,
  `Image` varchar(100) DEFAULT NULL,
  `Description` varchar(150) DEFAULT NULL,
  `Status` varchar(3) NOT NULL DEFAULT 'No',
  PRIMARY KEY (`FabricID`),
  KEY `foreignKeyFabric` (`SupplierID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `fabrics`
--

INSERT INTO `fabrics` (`FabricID`, `SupplierID`, `Name`, `Price`, `Content`, `colour`, `Quty`, `Theme`, `Image`, `Description`, `Status`) VALUES
(1, 49, 'Black Ideal', 95.2, 'Silk', 'Black', 999, 'Normal', 'FabricsImages/111.jpg', 'From Robert Kaufman Fabrics, this lightweight (5.6 oz. per square yard) linen blend fabric has a luxurious hand with a full-bodied drape.', 'Yes'),
(2, 63, 'Disney Frozen Elsa Allove', 7.49, '100% Cotton', 'Blue', 1000, 'Disney ', 'FabricsImages/Large_0381141.jpg', ' Designed by Disney and licensed to Springs Creative Products, this cotton print fabric is perfect for quilting, apparel and home decor accents. Color', 'Yes'),
(3, 49, 'Premier Prints Zig Zag Bl', 9.98, '100% Cotton', 'Black & White', 999, 'Normal', 'FabricsImages/Large_DC-267.jpg', 'Screen printed on cotton duck; this versatile medium weight fabric is perfect for window accents (draperies, valances, curtains and swags), toss pillo', 'Yes'),
(4, 49, 'Premier Prints Ele Black', 9.98, '100% Cotton', 'Black &White', 998, 'Animal', 'FabricsImages/Large_UG-898.jpg', 'Screen printed on cotton duck; this versatile medium weight fabric is perfect for window accents (draperies, valances, curtains and swags), toss pillo', 'Yes'),
(5, 49, 'Premier Prints Gisella Bl', 9.98, '100% Cotton', 'Black & White', 1000, 'Animal', 'FabricsImages/Large_UG-899.jpg', 'Screen printed on cotton duck; this versatile medium weight fabric is perfect for window accents (draperies, valances, curtains and swags), accent pil', 'Yes'),
(6, 49, 'Michael Miller Rouge Et N', 9.98, '100% Cotton', 'Black & White', 1000, 'Animal', 'FabricsImages/Large_0371485.jpg', 'From Michael Miller, this cotton print is perfect for quilting, apparel and home decor accents. Colors include black and white.', 'Yes'),
(7, 49, 'Premier Prints Ele Twill ', 9.92, '100% Cotton', 'Ash', 1000, 'Animal', 'FabricsImages/Large_UM-229.jpg', 'Screen printed on cotton twill; this versatile lightweight (approx. 5.4 ounce) fabric is perfect for window treatments (draperies, valances, curtains ', 'Yes'),
(8, 49, 'Premier Prints Gisella Sl', 8.5, '100% Cotton', 'Yellow & White', 1000, 'Animal', 'FabricsImages/Large_UH-210.jpg', 'Screen printed on cotton slub duck (slub cloth has a linen appearance); this versatile medium weight fabric is perfect for window accents (draperies, ', 'Yes'),
(9, 63, 'Disney Frozen Fleece Mult', 9.98, 'Silk', 'Blue', 1000, 'Disney', 'FabricsImages/Large_0343652.jpg', 'This cozy, anti-pill fleece fabric is warm and cozy and has ultra-soft hand. It is perfect for throws, blankets, jackets, hats, mittens, scarves, slip', 'Yes'),
(10, 63, 'Disney Frozen Elsa and An', 7.75, '100% Cotton', 'Blue', 1000, 'Disney', 'FabricsImages/Large_0343647.jpg', 'From Springs Creative Products and licensed by Disney, this panel is perfect for quilting and home decor accents. Colors include white, black, brown, ', 'Yes'),
(11, 63, 'Disney Frozen Olaf Snowfl', 5.58, '100% Cotton', 'Blue', 1000, 'Disney', 'FabricsImages/Large_0372541.jpg', 'From Springs Creative Group and licensed by Disney, this cotton print fabric is perfect for quilting, apparel and home decor accents. Colors include o', 'Yes'),
(12, 63, 'Disney Frozen Fleece Sist', 9, '100% Cotton', 'Blue', 845, 'Disney', 'FabricsImages/Large_0372546.jpg', 'This cozy, anti-pill fleece fabric is warm and cozy and has ultra-soft hand. It is perfect for throws, blankets, jackets, hats, mittens, scarves, slip', 'Yes'),
(13, 63, 'Disney Frozen Annas Frien', 9.99, '100% Cotton', 'Blue', 1000, 'Disney', 'FabricsImages/Large_0372544.jpg', 'From Springs Creative Products and licensed by Disney, this panel is perfect for quilting and home decor accents. Colors include white, black, brown, ', 'Yes'),
(14, 49, '120" Faux Dupioni Black', 10, 'Silk', 'Black', 532, 'Normal', 'FabricsImages/Large_0343594.jpg', 'This extra wide, very lightweight faux dupioni silk fabric has a ful-bodied drape and slub texture with a sophisticated matte sheen. It is perfect for', 'Yes'),
(15, 49, 'Robert Allen Promo Lineas', 15, '100% Cotton', 'Black', 1000, 'Normal', 'FabricsImages/Large_0355857.jpg', 'This lightweight woven taffeta fabric is perfect for window treatments (draperies, curtains, valances, swags), bed skirts and accent pillows. It featu', 'Yes'),
(16, 49, '120" Faux Dupioni Navy', 10.09, '100% Cotton', 'Black & White', 1000, 'Normal', 'FabricsImages/Large_0343596.jpg', 'This extra wide, very lightweight faux dupioni silk fabric has a ful-bodied drape and slub texture with a sophisticated matte sheen. It is perfect for', 'Yes'),
(17, 63, 'Ash and Blue Combination', 9.2, 'Silk', 'Ash & Blue', 500, 'Normal', 'FabricsImages/Wallpaper-9026.jpg', 'Top Fabric Stores in Blue Ash, OH Jo Ann Fabrics and Craft, Calico Corners, Chelsea House Fabrics, Sew Ezy Sewing Studio, Fabricworks, Stitches Quilt ', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `include`
--

CREATE TABLE IF NOT EXISTS `include` (
  `CartID` int(25) NOT NULL DEFAULT '0',
  `FabricID` int(25) NOT NULL DEFAULT '0',
  `Quty` double DEFAULT NULL,
  PRIMARY KEY (`CartID`,`FabricID`),
  KEY `foreignKey2Include` (`FabricID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `include`
--

INSERT INTO `include` (`CartID`, `FabricID`, `Quty`) VALUES
(10, 3, 2),
(10, 4, 2),
(10, 10, 1),
(10, 12, 1),
(10, 13, 2),
(10, 14, 1),
(10, 15, 1),
(11, 12, 155);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `UserID` int(25) NOT NULL DEFAULT '0',
  `FirstName` varchar(25) DEFAULT NULL,
  `LastName` varchar(25) DEFAULT NULL,
  `BrandName` varchar(25) DEFAULT NULL,
  `Telephone` int(10) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Description` varchar(150) DEFAULT NULL,
  `Ratings` int(1) DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`UserID`, `FirstName`, `LastName`, `BrandName`, `Telephone`, `Address`, `Description`, `Ratings`) VALUES
(49, 'Rathnasri', 'Wijesinhe', 'ABC', 112353627, 'Colombo', 'Since 1880', 1),
(63, 'Saman', 'Konara', 'Springs Creative Products', 112216453, 'Kottawa', 'Fabric.com, Inc. operates as an online fabric store. It offers various fabrics, including apparel and fashion, quilting, apparel sewing, and home deco', 0);

-- --------------------------------------------------------

--
-- Table structure for table `systemlog`
--

CREATE TABLE IF NOT EXISTS `systemlog` (
  `SystemLogID` int(25) NOT NULL AUTO_INCREMENT,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Description` varchar(150) NOT NULL,
  PRIMARY KEY (`SystemLogID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=258 ;

--
-- Dumping data for table `systemlog`
--

INSERT INTO `systemlog` (`SystemLogID`, `Date`, `Description`) VALUES
(39, '2015-04-29 18:29:59', 'Add New User Account as a Buyer'),
(40, '2015-04-29 18:59:44', 'Add New User Account as a Supplier'),
(43, '2015-04-30 06:24:00', 'Add New User Account as a Buyer'),
(44, '2015-04-30 06:24:16', 'Add New User Account as a Buyer'),
(45, '2015-04-30 06:33:57', 'Remove User Account by Administtrator'),
(46, '2015-04-30 06:34:46', 'Remove User Account by Administtrator'),
(47, '2015-04-30 06:35:42', 'Remove User Account by Administtrator'),
(48, '2015-04-30 06:37:33', 'Remove User Account by Administtrator'),
(49, '2015-04-30 06:38:18', 'Remove User Account by Administtrator'),
(50, '2015-04-30 06:39:30', 'Remove User Account by Administtrator'),
(51, '2015-04-30 06:41:14', 'Remove User Account by Administtrator'),
(52, '2015-04-30 06:49:37', 'Remove User Account by Administrator'),
(53, '2015-04-30 06:50:28', 'Remove User Account by Administrator'),
(54, '2015-04-30 06:55:25', 'Add New User Account as a Buyer'),
(55, '2015-04-30 06:55:37', 'Remove User Account by Administrator'),
(56, '2015-04-30 07:15:56', 'Add New User Account as a Buyer'),
(57, '2015-04-30 07:18:17', 'Remove User Account by Administrator'),
(58, '2015-04-30 07:21:40', 'Remove User Account by Administrator'),
(59, '2015-04-30 07:22:40', 'Remove User Account by Administrator'),
(60, '2015-04-30 07:24:14', 'Add New User Account as a Buyer'),
(61, '2015-04-30 07:24:24', 'Remove User Account by Administrator'),
(62, '2015-04-30 07:25:42', 'Add New User Account as a Buyer'),
(63, '2015-04-30 07:27:11', 'Remove User Account by Administrator'),
(64, '2015-04-30 07:33:03', 'Add New User Account as a Buyer'),
(65, '2015-04-30 07:33:18', 'Remove User Account by Administrator'),
(66, '2015-04-30 07:37:24', 'Add New User Account as a Supplier'),
(67, '2015-04-30 08:21:50', 'Permit Supplier Account by Administrator'),
(68, '2015-04-30 08:24:32', 'Permit Supplier Account by Administrator'),
(69, '2015-04-30 08:24:48', 'Permit Supplier Account by Administrator'),
(70, '2015-04-30 08:24:53', 'Permit Supplier Account by Administrator'),
(71, '2015-04-30 08:25:35', 'Permit Supplier Account by Administrator'),
(72, '2015-04-30 08:25:40', 'Permit Supplier Account by Administrator'),
(73, '2015-04-30 11:31:37', 'Permit Supplier Account by Administrator'),
(74, '2015-04-30 11:31:49', 'Permit Supplier Account by Administrator'),
(75, '2015-04-30 11:33:53', 'Suspand Supplier Account by Administrator'),
(76, '2015-04-30 11:33:53', 'Suspand Supplier Account by Administrator'),
(77, '2015-04-30 11:34:20', 'Permit Supplier Account by Administrator'),
(78, '2015-04-30 11:34:30', 'Suspand Supplier Account by Administrator'),
(79, '2015-04-30 12:00:59', 'Permit Supplier Account by Administrator'),
(80, '2015-04-30 12:09:09', 'Permit Supplier Account by Administrator'),
(81, '2015-04-30 12:09:32', 'Suspand Supplier Account by Administrator'),
(82, '2015-04-30 12:11:48', 'Suspand Supplier Account by Administrator'),
(83, '2015-04-30 12:12:04', 'Permit Supplier Account by Administrator'),
(84, '2015-04-30 15:43:14', 'Permit Supplier Account by Administrator'),
(85, '2015-04-30 15:43:23', 'Suspand Supplier Account by Administrator'),
(86, '2015-04-30 16:29:30', 'Suspand Supplier Account by Administrator'),
(87, '2015-04-30 16:29:46', 'Permit Supplier Account by Administrator'),
(88, '2015-04-30 17:52:53', 'Suspand Fabric Stock by Stock-keeper'),
(89, '2015-04-30 17:59:20', 'Approve Fabric Stock by Stock-keeper'),
(90, '2015-04-30 17:59:26', 'Suspand Fabric Stock by Stock-keeper'),
(91, '2015-05-01 07:02:10', 'Change Layout by Administrator'),
(92, '2015-05-01 07:43:21', 'Change Layout by Administrator'),
(93, '2015-05-01 07:54:01', 'Change Layout by Administrator'),
(94, '2015-05-01 07:55:36', 'Change Layout by Administrator'),
(95, '2015-05-01 07:57:26', 'Change Layout by Administrator'),
(96, '2015-05-01 09:40:22', 'Add New User Account as a Buyer'),
(97, '2015-05-01 10:27:28', 'Logout User Account'),
(98, '2015-05-01 10:27:57', 'Logout User Account'),
(99, '2015-05-01 10:29:01', 'Logout User Account'),
(100, '2015-05-01 10:29:04', 'Logout User Account'),
(101, '2015-05-01 10:29:26', 'Logout User Account'),
(102, '2015-05-01 10:29:38', 'Login User Account'),
(103, '2015-05-01 10:29:40', 'Logout User Account'),
(104, '2015-05-01 10:29:57', 'Logout User Account'),
(105, '2015-05-01 10:34:14', 'Logout User Account'),
(106, '2015-05-01 10:35:40', 'Login User Account'),
(107, '2015-05-01 10:35:58', 'Login User Account'),
(108, '2015-05-01 10:36:15', 'Logout User Account'),
(109, '2015-05-01 10:36:49', 'Login User Account'),
(110, '2015-05-05 09:10:41', 'Logout User Account'),
(111, '2015-05-05 09:11:09', 'Login User Account'),
(112, '2015-05-05 09:42:29', 'Change Layout by Administrator'),
(113, '2015-05-05 09:44:52', 'Change Layout by Administrator'),
(114, '2015-05-05 14:31:15', 'Add New User Account as a Buyer'),
(115, '2015-05-05 14:49:13', 'Logout User Account'),
(116, '2015-05-05 14:51:08', 'Login User Account'),
(117, '2015-05-05 14:54:11', 'Logout User Account'),
(118, '2015-05-05 14:54:43', 'Logout User Account'),
(119, '2015-05-05 14:54:57', 'Login User Account'),
(120, '2015-05-05 15:45:27', 'Logout User Account'),
(121, '2015-05-05 16:47:23', 'Logout User Account'),
(122, '2015-05-05 16:48:19', 'Login User Account'),
(123, '2015-05-05 16:48:35', 'Login User Account'),
(124, '2015-05-05 16:49:15', 'Logout User Account'),
(125, '2015-05-05 16:49:23', 'Login User Account'),
(126, '2015-05-05 17:40:12', 'Logout User Account'),
(127, '2015-05-05 17:40:26', 'Login User Account'),
(128, '2015-05-05 17:40:33', 'Approve Fabric Stock by Stock-keeper'),
(129, '2015-05-05 17:41:09', 'Logout User Account'),
(130, '2015-05-05 17:41:22', 'Login User Account'),
(131, '2015-05-05 18:31:15', 'Add New Stock By Supplier'),
(132, '2015-05-05 18:36:52', 'Add New Stock By Supplier'),
(133, '2015-05-05 18:39:00', 'Add New Stock By Supplier'),
(134, '2015-05-05 18:40:44', 'Add New Stock By Supplier'),
(135, '2015-05-05 18:43:33', 'Add New Stock By Supplier'),
(136, '2015-05-05 18:49:23', 'Add New Stock By Supplier'),
(137, '2015-05-05 18:51:49', 'Add New Stock By Supplier'),
(138, '2015-05-05 18:56:38', 'Add New Stock By Supplier'),
(139, '2015-05-05 18:58:04', 'Logout User Account'),
(140, '2015-05-05 19:02:06', 'Logout User Account'),
(141, '2015-05-05 19:02:29', 'Login User Account'),
(142, '2015-05-05 19:07:13', 'Logout User Account'),
(143, '2015-05-05 19:10:08', 'Logout User Account'),
(144, '2015-05-05 19:10:26', 'Login User Account'),
(145, '2015-05-05 19:13:33', 'Add New Stock By Supplier'),
(146, '2015-05-05 19:23:48', 'Add New Stock By Supplier'),
(147, '2015-05-05 19:26:02', 'Add New Stock By Supplier'),
(148, '2015-05-06 03:15:46', 'Login User Account'),
(149, '2015-05-06 11:47:35', 'Logout User Account'),
(150, '2015-05-06 11:49:13', 'Login User Account'),
(151, '2015-05-06 11:49:17', 'Logout User Account'),
(152, '2015-05-06 11:49:25', 'Login User Account'),
(153, '2015-05-06 11:57:17', 'Logout User Account'),
(154, '2015-05-06 12:00:14', 'Add New User Account as a Supplier'),
(155, '2015-05-06 12:01:44', 'Login User Account'),
(156, '2015-05-06 12:05:06', 'Add New Stock By Supplier'),
(157, '2015-05-06 12:05:18', 'Logout User Account'),
(158, '2015-05-06 12:07:13', 'Login User Account'),
(159, '2015-05-06 12:07:24', 'Approve Fabric Stock by Stock-keeper'),
(160, '2015-05-06 12:11:26', 'Logout User Account'),
(161, '2015-05-06 12:12:10', 'Login User Account'),
(162, '2015-05-06 12:13:58', 'Add New Stock By Supplier'),
(163, '2015-05-06 12:15:36', 'Add New Stock By Supplier'),
(164, '2015-05-06 12:17:10', 'Add New Stock By Supplier'),
(165, '2015-05-06 12:18:36', 'Add New Stock By Supplier'),
(166, '2015-05-06 12:20:57', 'Add New Stock By Supplier'),
(167, '2015-05-06 12:22:43', 'Add New Stock By Supplier'),
(168, '2015-05-06 12:26:29', 'Logout User Account'),
(169, '2015-05-06 12:26:45', 'Login User Account'),
(170, '2015-05-06 12:27:43', 'Add New Stock By Supplier'),
(171, '2015-05-06 12:29:02', 'Add New Stock By Supplier'),
(172, '2015-05-06 12:30:16', 'Add New Stock By Supplier'),
(173, '2015-05-06 12:31:49', 'Add New Stock By Supplier'),
(174, '2015-05-06 12:33:13', 'Add New Stock By Supplier'),
(175, '2015-05-06 12:34:58', 'Add New Stock By Supplier'),
(176, '2015-05-06 12:35:49', 'Logout User Account'),
(177, '2015-05-06 12:36:14', 'Login User Account'),
(178, '2015-05-06 12:37:15', 'Add New Stock By Supplier'),
(179, '2015-05-06 12:38:38', 'Add New Stock By Supplier'),
(180, '2015-05-06 12:42:20', 'Add New Stock By Supplier'),
(181, '2015-05-06 13:07:06', 'Logout User Account'),
(182, '2015-05-06 13:07:31', 'Login User Account'),
(183, '2015-05-06 13:07:37', 'Approve Fabric Stock by Stock-keeper'),
(184, '2015-05-06 13:07:41', 'Approve Fabric Stock by Stock-keeper'),
(185, '2015-05-06 13:07:45', 'Approve Fabric Stock by Stock-keeper'),
(186, '2015-05-06 14:02:38', 'Approve Fabric Stock by Stock-keeper'),
(187, '2015-05-06 14:07:19', 'Approve Fabric Stock by Stock-keeper'),
(188, '2015-05-06 14:07:23', 'Approve Fabric Stock by Stock-keeper'),
(189, '2015-05-06 14:07:26', 'Approve Fabric Stock by Stock-keeper'),
(190, '2015-05-06 14:07:30', 'Approve Fabric Stock by Stock-keeper'),
(191, '2015-05-06 14:07:34', 'Approve Fabric Stock by Stock-keeper'),
(192, '2015-05-06 14:07:37', 'Approve Fabric Stock by Stock-keeper'),
(193, '2015-05-06 14:07:41', 'Approve Fabric Stock by Stock-keeper'),
(194, '2015-05-06 14:07:44', 'Approve Fabric Stock by Stock-keeper'),
(195, '2015-05-06 14:07:48', 'Approve Fabric Stock by Stock-keeper'),
(196, '2015-05-06 15:08:39', 'Logout User Account'),
(197, '2015-05-06 15:08:48', 'Login User Account'),
(198, '2015-05-06 15:53:24', 'Logout User Account'),
(199, '2015-05-06 15:59:32', 'Change Layout by Administrator'),
(200, '2015-05-06 16:00:08', 'Change Layout by Administrator'),
(201, '2015-05-06 16:01:29', 'Change Layout by Administrator'),
(202, '2015-05-06 16:09:25', 'Login User Account'),
(203, '2015-05-06 16:23:00', 'Logout User Account'),
(204, '2015-05-06 16:23:07', 'Login User Account'),
(205, '2015-05-06 17:04:56', 'Logout User Account'),
(206, '2015-05-06 17:05:04', 'Login User Account'),
(207, '2015-05-06 18:33:33', 'Logout User Account'),
(208, '2015-05-06 18:35:12', 'Login User Account'),
(209, '2015-05-07 08:23:38', 'Login User Account'),
(210, '2015-05-07 08:23:48', 'Login User Account'),
(211, '2015-05-07 08:27:25', 'Logout User Account'),
(212, '2015-05-07 11:28:33', 'Change Layout by Administrator'),
(213, '2015-05-07 11:29:43', 'Change Layout by Administrator'),
(214, '2015-05-07 11:30:14', 'Change Layout by Administrator'),
(215, '2015-05-07 11:30:58', 'Change Layout by Administrator'),
(216, '2015-05-07 11:31:04', 'Change Layout by Administrator'),
(217, '2015-05-07 11:31:10', 'Change Layout by Administrator'),
(218, '2015-05-07 11:47:14', 'Logout User Account'),
(219, '2015-05-07 11:47:59', 'Login User Account'),
(220, '2015-05-07 12:02:47', 'Suspand Fabric Stock by Stock-keeper'),
(221, '2015-05-07 12:21:03', 'Logout User Account'),
(222, '2015-05-07 12:21:27', 'Login User Account'),
(223, '2015-05-07 14:48:07', 'Logout User Account'),
(224, '2015-05-07 14:48:15', 'Login User Account'),
(225, '2015-05-07 14:48:47', 'Logout User Account'),
(226, '2015-05-07 14:54:18', 'Change Layout by Administrator'),
(227, '2015-05-07 14:55:42', 'Change Layout by Administrator'),
(228, '2015-05-07 14:57:02', 'Logout User Account'),
(229, '2015-05-07 15:16:52', 'Login User Account'),
(230, '2015-05-07 15:18:47', 'Logout User Account'),
(231, '2015-05-07 15:26:04', 'Login User Account'),
(232, '2015-05-07 17:31:59', 'Logout User Account'),
(233, '2015-05-07 17:33:00', 'Login User Account'),
(234, '2015-05-07 17:33:17', 'Approve Fabric Stock by Stock-keeper'),
(235, '2015-05-07 17:33:41', 'Logout User Account'),
(236, '2015-05-07 17:39:28', 'Logout User Account'),
(237, '2015-05-07 18:40:52', 'Login User Account'),
(238, '2015-05-07 18:42:52', 'Add New Stock By Supplier'),
(239, '2015-05-07 18:42:59', 'Logout User Account'),
(240, '2015-05-07 18:43:11', 'Login User Account'),
(241, '2015-05-07 18:43:25', 'Approve Fabric Stock by Stock-keeper'),
(242, '2015-05-07 18:43:46', 'Suspand Fabric Stock by Stock-keeper'),
(243, '2015-05-08 03:47:11', 'Login User Account'),
(244, '2015-05-08 03:48:12', 'Logout User Account'),
(245, '2015-05-08 03:48:18', 'Login User Account'),
(246, '2015-05-08 03:49:01', 'Logout User Account'),
(247, '2015-05-08 03:50:55', 'Login User Account'),
(248, '2015-05-08 03:52:47', 'Logout User Account'),
(249, '2015-05-08 03:57:12', 'Login User Account'),
(250, '2015-05-08 03:58:36', 'Logout User Account'),
(251, '2015-05-08 04:25:05', 'Login User Account'),
(252, '2015-05-08 04:25:18', 'Logout User Account'),
(253, '2015-05-08 05:58:51', 'Change Layout by Administrator'),
(254, '2015-05-08 05:59:26', 'Logout User Account'),
(255, '2015-05-08 06:00:40', 'Login User Account'),
(256, '2015-05-08 06:02:06', 'Logout User Account'),
(257, '2015-05-08 06:02:15', 'Login User Account');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE IF NOT EXISTS `useraccounts` (
  `UserID` int(25) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(25) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PrivacyBit` int(1) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`UserID`, `UserName`, `Password`, `Email`, `PrivacyBit`) VALUES
(45, 'admin@rfabrics.com', 'c4ca4238a0b923820dcc509a6f75849b', 'admin@rfabrics.com', 3),
(48, 'Amitha Ruwanpathirana', '202cb962ac59075b964b07152d234b70', 'amitha@gmail.com', 1),
(49, 'rathnasri@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'rathnasri@gmail.com', 2),
(60, 'stockkeeper@rfabric.com', 'c4ca4238a0b923820dcc509a6f75849b', 'stockkeeper@rfabric.com', 4),
(61, 'Denuwan', '202cb962ac59075b964b07152d234b70', 'denuwan@rfabrics.com', 1),
(62, 'Test', '202cb962ac59075b964b07152d234b70', 'test@rfabrics.com', 1),
(63, 'saman@gmail.com', '202cb962ac59075b964b07152d234b70', 'saman@gmail.com', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `activity_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `useraccounts` (`UserID`),
  ADD CONSTRAINT `activity_ibfk_2` FOREIGN KEY (`SystemLogID`) REFERENCES `systemlog` (`SystemLogID`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `useraccounts` (`UserID`);

--
-- Constraints for table `fabrics`
--
ALTER TABLE `fabrics`
  ADD CONSTRAINT `fabrics_ibfk_1` FOREIGN KEY (`SupplierID`) REFERENCES `suppliers` (`UserID`);

--
-- Constraints for table `include`
--
ALTER TABLE `include`
  ADD CONSTRAINT `include_ibfk_1` FOREIGN KEY (`CartID`) REFERENCES `cart` (`CartID`),
  ADD CONSTRAINT `include_ibfk_2` FOREIGN KEY (`FabricID`) REFERENCES `fabrics` (`FabricID`);

--
-- Constraints for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `suppliers_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `useraccounts` (`UserID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
