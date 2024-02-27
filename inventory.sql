-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 08, 2024 at 04:24 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `assistant`
--

DROP TABLE IF EXISTS `assistant`;
CREATE TABLE IF NOT EXISTS `assistant` (
  `assistant_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`assistant_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assistant`
--

INSERT INTO `assistant` (`assistant_id`, `username`, `password`) VALUES
(1, 'assistant', 'assistant123456');

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

DROP TABLE IF EXISTS `cashier`;
CREATE TABLE IF NOT EXISTS `cashier` (
  `cashier_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`cashier_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`cashier_id`, `username`, `password`) VALUES
(1, 'cashier', 'cashier123456');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `retail_price` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `u_id` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_name`, `product_id`, `product_brand`, `retail_price`, `price`, `quantity`, `u_id`, `fname`, `lname`, `day`, `status`) VALUES
(6, 'HANDLE BAR', '4', 'TGR', '200', '250', '1', '1', 'Sample', 'User', '2023-12-04 05:21:13', 'Done'),
(7, 'CAMSHAFT KIT', '1', 'PAG', '300', '350', '1', '1', 'Sample', 'User', '2023-12-04 05:21:52', 'Done'),
(8, 'CAMSHAFT KIT', '1', 'PAG', '300', '350', '1', '1', 'Sample', 'User', '2023-12-04 13:42:41', 'Done'),
(9, 'OIL GAUGE', '2', 'GP', '300', '350', '1', '1', 'Sample', 'User', '2023-12-04 16:05:12', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

DROP TABLE IF EXISTS `owner`;
CREATE TABLE IF NOT EXISTS `owner` (
  `owner_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`owner_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`owner_id`, `username`, `password`) VALUES
(1, 'owner', 'owner123456');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `retail_price` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_brand`, `quantity`, `retail_price`, `price`) VALUES
(1, 'CAMSHAFT KIT', 'PAG', '44', '300', '350'),
(2, 'OIL GAUGE', 'GP', '28', '300', '350'),
(3, 'SPROCKET 45T', 'SR', '46', '300', '350'),
(4, 'HANDLE BAR', 'TGR', '48', '200', '250'),
(5, 'HANDLE BAR', 'PRO TAPER', '4', '2000', '2500');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `retail_price` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `product_name`, `product_id`, `product_brand`, `quantity`, `retail_price`, `price`, `profit`, `customer`, `day`) VALUES
(16, 'SPROCKET 45T', '3', 'SR', '1', '300', '350', '50', 'Jesusa', '02-08-2024'),
(10, 'CAMSHAFT KIT', '1', 'PAG', '1', '300', '350', '50', 'Simple Customer', '01-08-2024'),
(11, 'OIL GAUGE', '2', 'GP', '1', '300', '350', '50', 'Sample User', '01-30-2024'),
(12, 'HANDLE BAR', '4', 'TGR', '2', '200', '250', '50', 'Simple Customer', '02-03-2024'),
(14, 'SPROCKET 45T', '3', 'SR', '1', '300', '350', '50', 'Simple Customer', '02-05-2024'),
(13, 'HANDLE BAR', '5', 'PRO TAPER', '1', '2000', '2500', '500', 'Simple Customer', '02-06-2024'),
(15, 'OIL GAUGE', '2', 'GP', '1', '300', '350', '50', 'Simple Customer', '02-08-2024');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'Sample', 'User', 'sample', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
