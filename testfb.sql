-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2020 at 08:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testfb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(20) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_image`) VALUES
(1, 'Sanitizer', 'https://mdn.mozillademos.org/files/6457/mdn_logo_only_color.png'),
(2, 'sdjab', 'https://cdn.chaldal.net/_mpimage/savlon-instant-hand-sanitizer-200-ml?src=https%3A%2F%2Feggyolk.chaldal.com%2Fapi%2FPicture%2FRaw%3FpictureId%3D59406&q=low&v=1&w=600'),
(3, 'dkwnd', 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1024x576.png'),
(4, 'faiwfnianf', 'anwgfawiwofn'),
(5, 'fbnwlikfn', 'fklwnflqwnf');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(20) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `discount` int(20) NOT NULL DEFAULT 0,
  `description` text NOT NULL,
  `productClicks` int(20) NOT NULL DEFAULT 0,
  `productImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productName`, `price`, `discount`, `description`, `productClicks`, `productImage`) VALUES
(1, 'Shampoo', 150, 10, 'Chul dhoy eita diya', 0, 'https://images-na.ssl-images-amazon.com/images/I/71FMlrA8TiL._SL1500_.jpg'),
(2, 'Conditioner', 200, 20, 'Chul dhoar por eita dey', 0, 'https://i5.walmartimages.com/asr/8ef368aa-a0e3-403b-9fee-0594c28d7eaf_1.1fbb21f502cacc17390b1c12c53a1dc0.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
