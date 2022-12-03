-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 03:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories_name`, `image`) VALUES
(1, 'Áo', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id_color` int(11) NOT NULL,
  `color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id_color`, `color`) VALUES
(1, 'Đỏ'),
(2, 'Vàng');

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `id_order` int(11) DEFAULT NULL,
  `quanlity` int(11) DEFAULT NULL,
  `size` int(11) NOT NULL,
  `color` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_order`
--

INSERT INTO `detail_order` (`id`, `id_product`, `id_order`, `quanlity`, `size`, `color`) VALUES
(40, 1, 1433, 26, 2, 1),
(41, 2, 1433, 5, 2, 1),
(42, 3, 1433, 7, 2, 1),
(43, 1, 5020, 27, 2, 1),
(44, 2, 5020, 5, 2, 1),
(45, 3, 5020, 7, 2, 1),
(46, 2, 4097, 11, 2, 1),
(47, 2, 203, 11, 2, 1),
(48, 2, 3746, 11, 2, 1),
(49, 1, 7454, 10, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `code_cart` varchar(11) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `total` int(11) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `ship_address` varchar(255) DEFAULT NULL,
  `ship_name_user` varchar(255) DEFAULT NULL,
  `ship_phone_user` varchar(255) DEFAULT NULL,
  `pttt` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `id_user`, `code_cart`, `status`, `total`, `time`, `ship_address`, `ship_name_user`, `ship_phone_user`, `pttt`) VALUES
(1, 14, '5977', 1, 100000, '0000-00-00 00:00:00', 'Ha noi', 'Phi', '00000098', 'momo'),
(2, 14, '166', 1, 100000, '0000-00-00 00:00:00', 'Ha noi', 'Phi', '00000098', 'momo'),
(3, 14, '1814', 1, 100000, '0000-00-00 00:00:00', 'Ha noi', 'Phi', '00000098', 'momo'),
(25, 14, '8511', 1, 100000, '0000-00-00 00:00:00', 'TDP Vĩnh Thịnh]', 'phi2', '099999]', 'momo'),
(26, 14, '3092', 1, 100000, '0000-00-00 00:00:00', 'TDP Vĩnh Thịnh]', 'phi2', '099999]', 'momo'),
(27, 15, '3026', 1, 12000, '0000-00-00 00:00:00', 'Hà]', 'phi', '000000]', 'momo'),
(28, 17, '3619', 1, 12000, '0000-00-00 00:00:00', 'TDP Vĩnh Thịnh]', 'phi', '0862323322]', 'momo'),
(29, 17, '4979', 1, 12000, '0000-00-00 00:00:00', 'TDP Vĩnh Thịnh]', 'phi', '0862323322]', 'momo'),
(30, 17, '8944', 1, 12000, '0000-00-00 00:00:00', 'TDP Vĩnh Thịnh]', 'phi', '0862323322]', 'momo'),
(31, 18, '2344', 1, 3000, '0000-00-00 00:00:00', 'Hà nội]', 'vippro2020', '098777]', 'momo'),
(32, 19, '4150', 1, 6000, '0000-00-00 00:00:00', 'Ha noi]', 'Phi', '0862323322]', 'momo'),
(34, 21, '5390', 1, 38000, '0000-00-00 00:00:00', 'vippro2020]', 'phi', '2222]', 'momo'),
(35, 21, '1433', 1, 38000, '0000-00-00 00:00:00', 'vippro2020]', 'phi', '2222]', 'momo'),
(36, 21, '5020', 1, 39000, '0000-00-00 00:00:00', 'vippro2020]', 'phi', '2222]', 'momo'),
(37, 21, '4097', 1, 11000, '0000-00-00 00:00:00', 'vippro2020]', 'phi', '2222]', 'momo'),
(38, 21, '203', 1, 11000, '0000-00-00 00:00:00', 'vippro2020]', 'phi', '2222]', 'momo'),
(39, 21, '3746', 1, 11000, '0000-00-00 00:00:00', 'vippro2020]', 'phi', '2222]', 'momo'),
(40, 21, '7454', 1, 10000, '0000-00-00 00:00:00', 'vippro2020]', 'phi', '2222]', 'momo');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `id_categories` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` varchar(255) DEFAULT NULL,
  `product_price_sale` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_categories`, `product_name`, `product_price`, `product_price_sale`, `description`, `origin`, `image`, `image2`, `image3`, `view`) VALUES
(1, 1, 'Áo dài', '1000', '2222', 'Áo dài cách tân', 'Việt Nam', 'detaildior1.png', 'detaildior1.png', 'detaildior1.png', 0),
(2, 1, 'Áo dài', '1000', '2222', 'Áo dài cách tân', 'Việt Nam', 'detaildior1.png', 'detaildior1.png', 'detaildior1.png', 0),
(3, 1, 'Áo dài', '1000', '2222', 'Áo dài cách tân', 'Việt Nam', 'detaildior1.png', 'detaildior1.png', 'detaildior1.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_rev`
--

CREATE TABLE `product_rev` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `stars` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `save`
--

CREATE TABLE `save` (
  `id_user` int(11) DEFAULT NULL,
  `id_voucher` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id_size` int(11) NOT NULL,
  `size` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id_size`, `size`) VALUES
(1, 'M'),
(2, 'L');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_momo`
--

CREATE TABLE `tbl_momo` (
  `id_momo` int(11) NOT NULL,
  `partner_code` varchar(50) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `order_info` varchar(50) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `trans_id` varchar(50) NOT NULL,
  `pay_type` varchar(50) NOT NULL,
  `code_cart` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_momo`
--

INSERT INTO `tbl_momo` (`id_momo`, `partner_code`, `order_id`, `amount`, `order_info`, `order_type`, `trans_id`, `pay_type`, `code_cart`) VALUES
(3, 'MOMOBKUN20180529', '1644123235', '250000', 'Thanh toán qua ATM', 'momo_wallet', '2642535948', 'napas', '9554'),
(4, 'MOMOBKUN20180529', '1644126570', '250000', 'Thanh toán qua ATM', 'momo_wallet', '2642536202', 'napas', '3872'),
(5, 'MOMOBKUN20180529', '1645004827', '350000', 'Thanh toán qua ATM', 'momo_wallet', '2644029861', 'napas', '1161'),
(6, 'MOMOBKUN20180529', '1669497466', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669497473355', '', '5277'),
(7, 'MOMOBKUN20180529', '1669531683', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531691845', '', '6157'),
(8, 'MOMOBKUN20180529', '1669531929', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531935643', '', '2996'),
(9, 'MOMOBKUN20180529', '1669531929', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531935643', '', '6112'),
(10, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '9142'),
(11, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '8664'),
(12, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '9386'),
(13, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '1025'),
(14, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '8576'),
(15, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '2705'),
(16, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '4278'),
(17, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '3057'),
(18, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '2496'),
(19, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '3451'),
(20, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '6556'),
(21, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '8153'),
(22, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '3760'),
(23, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '8016'),
(24, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '8432'),
(25, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '1'),
(26, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '7046'),
(27, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '4386'),
(28, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '8756'),
(29, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '8358'),
(30, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '4947'),
(31, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '4458'),
(32, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '9355'),
(33, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '7001'),
(34, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '2259'),
(35, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '5520'),
(36, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '5394'),
(37, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '5955'),
(38, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '6284'),
(39, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '9502'),
(40, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '3320'),
(41, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '4871'),
(42, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '1155'),
(43, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '5977'),
(44, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '166'),
(45, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '1814'),
(46, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '8802'),
(47, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '4236'),
(48, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '2964'),
(49, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '8865'),
(50, 'MOMOBKUN20180529', '1669542131', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669542139102', '', '6631'),
(51, 'MOMOBKUN20180529', '1669542131', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669542139102', '', '5266'),
(52, 'MOMOBKUN20180529', '1669542131', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669542139102', '', '7177'),
(53, 'MOMOBKUN20180529', '1669577809', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669577816588', '', '9953'),
(54, 'MOMOBKUN20180529', '1669577809', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669577816588', '', '8859'),
(55, 'MOMOBKUN20180529', '1669577809', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669577816588', '', '4677'),
(56, 'MOMOBKUN20180529', '1669581957', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669581962458', '', '926'),
(57, 'MOMOBKUN20180529', '1669582480', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669582485453', '', '8139'),
(58, 'MOMOBKUN20180529', '1669582480', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669582485453', '', '61'),
(59, 'MOMOBKUN20180529', '1669582480', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669582485453', '', '7363'),
(60, 'MOMOBKUN20180529', '1669582480', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669582485453', '', '2028'),
(61, 'MOMOBKUN20180529', '1669582480', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669582485453', '', '2508'),
(62, 'MOMOBKUN20180529', '1669582480', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669582485453', '', '9333'),
(63, 'MOMOBKUN20180529', '1669582480', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669582485453', '', '4608'),
(64, 'MOMOBKUN20180529', '1669582480', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669582485453', '', '2450'),
(65, 'MOMOBKUN20180529', '1669582480', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669582485453', '', '2661'),
(66, 'MOMOBKUN20180529', '1669582480', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669582485453', '', '8927'),
(67, 'MOMOBKUN20180529', '1669583106', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669583110436', '', '8511'),
(68, 'MOMOBKUN20180529', '1669583106', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669583110436', '', '3092'),
(69, 'MOMOBKUN20180529', '1669588064', '12000', 'Thanh toán qua ATM', 'momo_wallet', '1669588074513', '', '3026'),
(70, 'MOMOBKUN20180529', '1669599048', '12000', 'Thanh toán qua ATM', 'momo_wallet', '2802366092', 'qr', '3619'),
(71, 'MOMOBKUN20180529', '1669599948', '12000', 'Thanh toán qua ATM', 'momo_wallet', '2802366173', 'qr', '4979'),
(72, 'MOMOBKUN20180529', '1669600849', '12000', 'Thanh toán qua momo', 'momo_wallet', '2802366433', 'qr', '8944'),
(73, 'MOMOBKUN20180529', '1669735327', '3000', 'Thanh toán qua momo', 'momo_wallet', '2804505063', 'qr', '2344'),
(74, 'MOMOBKUN20180529', '1669830018', '6000', 'Thanh toán qua momo', 'momo_wallet', '2805460629', 'qr', '4150'),
(75, 'MOMOBKUN20180529', '1669976127', '12000', 'Thanh toán qua momo', 'momo_wallet', '2807102145', 'qr', '6463'),
(76, 'MOMOBKUN20180529', '1670075007', '38000', 'Thanh toán qua momo', 'momo_wallet', '2807612213', 'qr', '5390'),
(77, 'MOMOBKUN20180529', '1670075007', '38000', 'Thanh toán qua momo', 'momo_wallet', '2807612213', 'qr', '1433'),
(78, 'MOMOBKUN20180529', '1670075612', '39000', 'Thanh toán qua momo', 'momo_wallet', '2807612329', 'qr', '5020'),
(79, 'MOMOBKUN20180529', '1670075723', '11000', 'Thanh toán qua momo', 'momo_wallet', '2807612358', 'qr', '4097'),
(80, 'MOMOBKUN20180529', '1670075808', '11000', 'Thanh toán qua momo', 'momo_wallet', '1670075813505', '', '203'),
(81, 'MOMOBKUN20180529', '1670075911', '11000', 'Thanh toán qua momo', 'momo_wallet', '1670075916023', '', '3746'),
(82, 'MOMOBKUN20180529', '1670077142', '10000', 'Thanh toán qua momo', 'momo_wallet', '1670077154383', '', '7454');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `password` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `full_name`, `email`, `phone`, `address`, `role`, `password`) VALUES
(1, 'Phi1', NULL, NULL, NULL, NULL, 1, 'qqq'),
(2, 'Phi3', NULL, NULL, NULL, '11111', 0, '2232323'),
(3, 'admin', 'phi', 'phithph22381@fpt.edu.vn]', '099999]', 'Hà Nội]', 1, '21232f297a57a5a743894a0e4a801fc3]'),
(4, 'admin', 'phi', 'phithph22381@fpt.edu.vn]', '099999]', 'Hà Nội]', 1, '21232f297a57a5a743894a0e4a801fc3]'),
(5, 'admin', 'phi', 'phithph22381@fpt.edu.vn]', '099999]', 'Hà Nội]', 1, '21232f297a57a5a743894a0e4a801fc3]'),
(6, 'admin', 'phi', 'phithph22381@fpt.edu.vn]', '099999]', 'Hà Nội]', 1, '21232f297a57a5a743894a0e4a801fc3]'),
(7, 'admin', 'phi', 'phithph22381@fpt.edu.vn]', '099999]', 'Hà Nội]', 1, '21232f297a57a5a743894a0e4a801fc3]'),
(8, 'admin', 'phi', 'phithph22381@fpt.edu.vn]', '099999]', 'Hà Nội]', 1, '21232f297a57a5a743894a0e4a801fc3]'),
(9, 'admin', 'phi', 'phithph22381@fpt.edu.vn]', '099999]', 'Hà Nội]', 1, '21232f297a57a5a743894a0e4a801fc3]'),
(10, 'admin', 'phi', 'phithph22381@fpt.edu.vn]', '099999]', 'Hà Nội]', 1, '21232f297a57a5a743894a0e4a801fc3]'),
(11, 'admin', 'phi', 'phithph22381@fpt.edu.vn]', '099999]', 'Hà Nội]', 1, '21232f297a57a5a743894a0e4a801fc3]'),
(12, 'admin', 'phi', 'phithph22381@fpt.edu.vn]', '099999]', 'Hà Nội]', 1, '21232f297a57a5a743894a0e4a801fc3]'),
(13, 'admin', 'phi', 'phithph22381@fpt.edu.vn]', '0862222222]', 'Hà Nội]', 1, '21232f297a57a5a743894a0e4a801fc3]'),
(14, 'Phi', 'phi2', 'vsphiphi281@gmail.com]', '099999]', 'TDP Vĩnh Thịnh]', 1, 'f4175d1be752cdb26f3c1d6f08622c97]'),
(15, 'acekyros@gmail.com', 'phi', 'phithph22381@fpt.edu.vn]', '000000]', 'Hà]', 1, '21232f297a57a5a743894a0e4a801fc3]'),
(16, 'phi', 'phi', 'phithph22381@fpt.edu.vn]', '08722222]', 'Hà Nội]', 1, '21232f297a57a5a743894a0e4a801fc3]'),
(17, 'Ctv123', 'phi', 'phithph22381@fpt.edu.vn]', '0862323322]', 'TDP Vĩnh Thịnh]', 1, 'ef49d7532642cf35f3fde5c19feabcc9]'),
(18, 'admin', 'vippro2020', 'phithph22381@fpt.edu.vn]', '098777]', 'Hà nội]', 1, 'aaf2fee73e38a6d7f2a031a3091df5f9]'),
(19, 'admin', 'Phi', 'vsphiphi281@gmail.com]', '0862323322]', 'Ha noi]', 1, '21232f297a57a5a743894a0e4a801fc3]'),
(20, 'admin', 'admin', 'admin@gmail.com]', '0008886]', 'admin]', 1, '21232f297a57a5a743894a0e4a801fc3]'),
(21, 'admin', 'phi', 'vsphiphi281@gmail.com]', '2222]', 'vippro2020]', 1, 'vippro2020]');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `quanlity` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id_color`);

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_orderdt_color` (`color`),
  ADD KEY `lk_orderdt_size` (`size`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_rev`
--
ALTER TABLE `product_rev`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id_size`);

--
-- Indexes for table `tbl_momo`
--
ALTER TABLE `tbl_momo`
  ADD PRIMARY KEY (`id_momo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_rev`
--
ALTER TABLE `product_rev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_momo`
--
ALTER TABLE `tbl_momo`
  MODIFY `id_momo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `lk_orderdt_color` FOREIGN KEY (`color`) REFERENCES `color` (`id_color`),
  ADD CONSTRAINT `lk_orderdt_size` FOREIGN KEY (`size`) REFERENCES `size` (`id_size`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
