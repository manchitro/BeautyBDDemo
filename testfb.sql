-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2020 at 05:36 PM
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
(1, 'Hair', 'https://www.productbestreviews.com/wp-content/uploads/2018/10/The-Best-Hair-Loss-Products.jpg'),
(2, 'Face', 'https://cdn2.stylecraze.com/wp-content/uploads/2013/03/1290-Best-Face-Makeup-Products-Available-In-India-%E2%80%93-Our-Top-10-iStock-510481420.jpg'),
(3, 'Body', 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/best-body-lotion-moisturizer-cream-1562695782.png?crop=0.502xw:1.00xh;0.280xw,0&resize=640:*'),
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
  `productImage` text NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productName`, `price`, `discount`, `description`, `productClicks`, `productImage`, `categoryId`) VALUES
(1, 'Shampoo', 150, 10, 'Chul dhoy eita diya', 0, 'https://images-na.ssl-images-amazon.com/images/I/71FMlrA8TiL._SL1500_.jpg', 1),
(2, 'Conditioner', 101, 3, 'Chul dhoar por eita dey', 0, 'https://i5.walmartimages.com/asr/8ef368aa-a0e3-403b-9fee-0594c28d7eaf_1.1fbb21f502cacc17390b1c12c53a1dc0.jpeg', 1),
(3, 'Cream', 150, 0, 'Mukhe makhe', 0, 'https://cdn.cultbeauty.co.uk/slots-img/frefre005_fresh_rosedeephydration_15ml_2_1560x1960-0jsd5jpg', 2);

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
  MODIFY `productId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
