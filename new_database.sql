-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2017 at 03:20 PM
-- Server version: 5.6.33
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ecom2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(31, 'T-SHIRTS'),
(32, 'Sunglasses'),
(33, 'Belts');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_amount` float NOT NULL,
  `order_transaction` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_amount`, `order_transaction`, `order_status`, `order_currency`) VALUES
(63, 345, '34535434', 'Completed', 'USD');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `short_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_price`, `product_quantity`, `product_description`, `short_desc`, `product_image`) VALUES
(51, 'Sunglasses 1', 31, 10, 12, 'These sunglasses are super cool!', '', ''),
(53, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(54, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(55, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(56, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(57, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(58, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(59, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(60, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(61, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(62, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(63, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(64, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(65, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(66, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(67, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(68, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(69, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(70, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(71, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(72, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(73, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(74, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(75, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(76, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(77, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(78, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(79, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(80, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(81, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(82, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(83, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(84, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(85, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(86, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(87, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(88, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(89, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(90, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(91, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(92, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(93, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(94, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(95, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(96, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(97, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(98, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(99, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(100, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(101, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(102, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(103, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(104, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(105, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(106, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(107, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(108, 'dfsg', 31, 10, 0, 'ddsfgfdsg', '', ''),
(109, '109 Product', 31, 10, 7, 'HEllo', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `product_id`, `order_id`, `product_price`, `product_title`, `product_quantity`) VALUES
(37, 1, 61, 24.99, 'product 1', 1),
(38, 1, 62, 24.99, 'product 1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `slide_title` varchar(255) NOT NULL,
  `slide_id` int(11) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slide_title`, `slide_id`, `slide_image`) VALUES
('CMS', 10, 'image_1.jpg'),
('Javascript', 11, 'image_4.jpg'),
('Bootstrap', 12, 'image_3.jpg'),
('Edwin Diaz', 13, 'image_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(5, 'rico', 'edwin@edwindiaz.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;