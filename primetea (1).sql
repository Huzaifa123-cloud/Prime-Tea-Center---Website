-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 01:02 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `primetea`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_short_description` text NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_short_description`, `product_image`) VALUES
(1, 'CTC NORMAL', 1, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. \r\n                    Ipsum nam dolores perspiciatis maxime provident mollitia est aliquid, consequuntur quas totam repellendus? Adipisci blanditiis cum ipsa mollitia necessit', 'images/CTC Normal.jpg'),
(2, 'CTC PREMIUM', 2, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.Ipsum nam dolores perspiciatis maxime provident mollitia est aliquid, consequuntur quas totam repellendus? Adipisci blanditiis cum ipsa mollitia necessitatibus ducimus eum sunt.', 'images/CTC PREMIUM.jpg'),
(3, 'CTC PREMIUM BOMBAY MIX', 3, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum nam dolores perspiciatis maxime provident mollitia est aliquid, consequuntur quas totam repellendus? Adipisci blanditiis cum ipsa mollitia necessitatibus ducimus eum sunt.', 'images/CTC PREMIUM BOMBAY MIX.jpg'),
(4, 'GOLD DUST', 4, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum nam dolores perspiciatis maxime provident mollitia est aliquid, consequuntur quas totam repellendus? Adipisci blanditiis cum ipsa mollitia necessitatibus ducimus eum sunt.', 'images/GOLD DUST.jpg'),
(5, 'PREMIUM DUST', 5, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum nam dolores perspiciatis maxime provident mollitia est aliquid, consequuntur quas totam repellendus? Adipisci blanditiis cum ipsa mollitia necessitatibus ducimus eum sunt.', 'images/PREMIUM DUST.png'),
(6, 'GREEN TEA - MINT FLAVOUR', 6, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum nam dolores perspiciatis maxime provident mollitia est aliquid, consequuntur quas totam repellendus? Adipisci blanditiis cum ipsa mollitia necessitatibus ducimus eum sunt.', 'images/Green tea mint flavour.jpg'),
(7, 'GREENT TEA - JASMINE FLAVOUR', 7, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum nam dolores perspiciatis maxime provident mollitia est aliquid, consequuntur quas totam repellendus? Adipisci blanditiis cum ipsa mollitia necessitatibus ducimus eum sunt.', 'images/Green tea Jasmine Flavour.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
