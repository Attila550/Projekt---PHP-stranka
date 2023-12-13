-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2023 at 02:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `img` varchar(455) NOT NULL,
  `title` varchar(45) NOT NULL,
  `rating` int(11) NOT NULL,
  `reviews` int(11) NOT NULL,
  `price` float NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `img`, `title`, `rating`, `reviews`, `price`, `category`) VALUES
(3, '../restaurant/images/breakfast/brett-jordan-8xt8-HIFqc8-unsplash.jpg', 'Special breakfast', 4, 210, 4, 'breakfast'),
(4, '../restaurant/images/dinner/keriliwi-c3mFafsFz2w-unsplash.jpg', 'Yummy Steak', 5, 120, 50, 'dinner'),
(5, '../restaurant/images/breakfast/louis-hansel-dphM2U1xq0U-unsplash.jpg', 'Burger Set', 4, 102, 10, 'dinner'),
(27, '../restaurant/images/dinner/farhad-ibrahimzade-isHUj3N0194-unsplash.jpg', 'Salmon with salad', 2, 22, 20, 'dinner'),
(28, '../restaurant/images/breakfast/lucas-swennen-1W_MyJSRLuQ-unsplash.jpg', 'American breakfast', 5, 102, 7, 'breakfast'),
(29, '../restaurant/images/lunch/louis-hansel-cH5IPjaAYyo-unsplash.jpg', 'Soup', 2, 102, 3, 'lunch');

-- --------------------------------------------------------

--
-- Table structure for table `NavigationMenu`
--

CREATE TABLE `NavigationMenu` (
  `id` int(11) NOT NULL,
  `menuName` varchar(15) NOT NULL,
  `menuUrl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `NavigationMenu`
--

INSERT INTO `NavigationMenu` (`id`, `menuName`, `menuUrl`) VALUES
(1, 'Home', '/Projekt/restaurant/index.php'),
(2, 'Story', '/Projekt/restaurant/about.php'),
(3, 'Menu', '/Projekt/restaurant/menu.php'),
(4, 'Our updates', '/Projekt/restaurant/news.php'),
(5, 'Contact', '/Projekt/restaurant/contact.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `NavigationMenu`
--
ALTER TABLE `NavigationMenu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `NavigationMenu`
--
ALTER TABLE `NavigationMenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
