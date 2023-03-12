-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2023 at 03:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `product_price` int(20) NOT NULL,
  `product_desc` varchar(500) NOT NULL,
  `city` varchar(255) NOT NULL,
  `vendor` varchar(500) NOT NULL,
  `subtitle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_desc`, `city`, `vendor`, `subtitle`) VALUES
(1, 'Coffee cup set ', 259, 'Coffee cup set, BLUE CHICK pattern, hand-drawn, the identity of Thanabadee, product quality, detail, refinement, high quality and valuable Suitable for use in the kitchen, coffee shop, and also as a gift or souvenir.\r\nGlass size (including ears) 12.1 x 8.4 x 7 cm\r\nSaucer size 14.4 x 14.4 x 2.4 cm', 'Lampang', 'vendor1', 'Coffee cup set, BLUE CHICK pattern, hand-drawn'),
(2, 'Hanging Aroma - Fish', 80, '”Fragrant Clay” hanging ceramic for scent diffusion Made from specially formulated clay that absorbs perfume well just a drop of perfume You can easily enjoy the volatile aroma.\r\n \r\n	⁃	Size 4.80 X 4.80 X 0.50 CM.\r\n \r\nCan be used in the home, bathroom, office, bedroom or in the closet. to create a relaxing atmosphere\r\n\r\n', 'Lampang', 'vendor1', 'hanging ceramic for scent diffusion');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
