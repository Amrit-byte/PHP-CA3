-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 10:47 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(1, 'Black Coffees'),
(2, 'White Coffees');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

DROP TABLE IF EXISTS `records`;
CREATE TABLE `records` (
  `recordID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `CountryofOrigin` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`recordID`, `categoryID`, `name`, `price`, `image`, `CountryofOrigin`, `Description`) VALUES
(101, 1, 'Espresso', '69.99', '16101.jpg', 'Italy', 'Espresso is generally thicker than coffee brewed by other methods with a viscosity of warm honey Thi'),
(102, 1, 'Doppio', '78.99', '16102.jpg', 'Italy', 'Doppio is Italian multiplier meaning double A single shot of espresso by contrast is called a solo s'),
(103, 1, 'Tripplo', '34.99', '16103.jpg', 'Ethiopia', 'thrice the milk or creamer and thrice the sugar or sweetener'),
(104, 1, 'Ritretto', '26.99', '16104.jpg', 'Italy', 'Ristretto is a short shot thirty ml from a double basket of a more highly concentrated espresso coff'),
(105, 1, 'Lungo', '33.99', '16105.jpg', 'Italy', 'Lungo Italian for long is a coffee beverage made by using an espresso machine to make an Italian sty'),
(106, 1, 'Americano', '57.99', '16106.jpg', 'Italy', 'Caffe Americano also known as Americano or American Italian pronunciation kaffe amerikano is a type '),
(107, 2, 'Flat White', '98.99', '16107.jpg', 'Australia', 'A flat white is a coffee drink consisting of espresso with micro foam steamed milk with small fine b'),
(108, 2, 'Cappuccino', '25.99', '16108.jpg', 'Italy', 'espresso coffee topped with frothed hot milk or cream and often flavoured with cinnamon Examples of '),
(109, 2, 'Macchiato', '17.99', '16109.jpg', 'Italy', 'Caffe macchiato sometimes called espresso macchiato is an espresso coffee drink with a small amount '),
(110, 2, 'Latte', '10.99', '16110.jpg', 'Italy', 'Caffe latte is a coffee drink made with espresso and steamed milk'),
(111, 2, 'Con Panna', '88.99', '16111.jpg', 'Italy', 'A cafe Viennois in the UK Espresso con panna which means espresso with cream in Italian is a single '),
(112, 2, 'Breve', '99.99', '16112.jpg', 'Italy', 'Caffe breve is an espresso based drink thats made like a cappuccino but with steamed half and half i');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(33, 'Amrita', '$2y$12$lWrXkSBs8ZDQnfaV7LmlYePxZn3Dt7WB1dmo959PsqsczHdchloLC', 'amritagiri1610@gmail.com'),
(34, 'D00226038', '$2y$12$nPQ13VajulGuCq1AZpklO.kg2gYAKXyLoIc.q02HV1g.usgUFLYey', 'amritagiri1610@gmail.com'),
(35, 'Paramjit', '$2y$12$oCCmN0wYO6rs4ajDZwtbEuehmGD9N3HhOtkI8mn2IGSHkMYw5Ll.W', 'amritagiri1610@gmail.com'),
(36, 'Kenny', '$2y$12$QYSdKC5i9ogVNVj6gZsmE.jxPeSkp0PyPxFJXlxSpQbL5ZOxyi0qK', 'amritagiri1610@gmail.com'),
(37, 'admin', '$2y$12$Fwr6zX8ffJBhmXHSoe8gHuLk6GXL.KCJQNx/fk995ezaTAFs4LFAC', 'amritagiri1610@gmail.com'),
(38, 'aden', '$2y$12$zMcz4m5RI.7JGZiJgS4pFOTcqzutgJwzEndgNxT.qGlkbYNwq9F4y', 'aden@gmail.com'),
(39, 'James Farrell', '$2y$12$GsKBBTqa9qsquMrs99Yb7Oo7sd/p.2orXKVtFbBT9xrpoKuzUL9.2', 'amritagiri1610@gmail.com'),
(40, 'Kumaran', '$2y$12$9tXMqpp4OYz67HzPirVn9uYg1VUYJdyBFaJz/jF/I8O0HOGHSIram', 'amritagiri1610@gmail.com'),
(41, 'Jessica', '$2y$12$SLaUmgU.w1N3yCZwzEehQeSi3wFJOelmpHOLwWxJFv/4Utl1yPUFa', 'amritagiri1610@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`recordID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `recordID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
