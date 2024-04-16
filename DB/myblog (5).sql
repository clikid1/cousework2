-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 04:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Tops'),
(2, 'Dresses'),
(3, 'Pants'),
(4, 'african'),
(5, 'smothie');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `uid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`uid`, `fname`, `lname`, `phone`, `email`, `message`) VALUES
(1, 'clinton', 'john', '07979145383', 'clinkid1@gmail.com', ''),
(2, 'clinton', 'john', '07979145383', 'clinkid1@gmail.com', ''),
(3, 'clinton', 'john', '07979145383', 'clinkid1@gmail.com', '3rt5trhty');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `pic_id` int(11) NOT NULL,
  `pic_name` text NOT NULL,
  `pic_description` text NOT NULL,
  `pic_tags` text NOT NULL,
  `pic_added_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`pic_id`, `pic_name`, `pic_description`, `pic_tags`, `pic_added_time`) VALUES
(1, './pics/fried rice.jpg', 'picture of fried rice', 'fried rice', '2024-04-05 16:40:13'),
(2, './pics/fried rice.jpg', 'picture of fried rice', 'fried rice', '2024-04-05 16:41:14'),
(3, './pics/donuts.jpg', 'picture of donut', 'donut', '2024-04-05 17:53:15');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `uploaded_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_desc`, `product_image`, `price`, `category_id`, `uploaded_date`) VALUES
(1, 'V Neck Crop Top', 'V neckline and Drawstring style make you more sexy Match well with your skinny leggings, pants or jeans for a fashion look Suitable for casual, home.', './uploads/v-neck.jpg', 500, 1, '2022-03-28'),
(2, 'Off Shoulder Crop Top', 'Crop Tops for Women Basic Off Shoulder Sexy Print V Neck Slim Shirt Vest with Button at Swiss Collecttion.', './uploads/offshoulder.jpg', 890, 1, '2022-04-04'),
(3, 'Off Shoulder Tops', 'Tops for Women Basic Off Shoulder V Neck Slim Shirt Vest with Button at Swiss Collecttion.', './uploads/tops.jpg', 600, 1, '2022-04-04'),
(4, 'Printed Crop Top', 'Cute Crop Tops for Women Basic Off Shoulder Sexy Print V Neck Slim Shirt Vest with Button at Swiss Collecttion.', './uploads/croptop.jpg', 700, 1, '2022-04-04'),
(5, 'Shirtdress', 'Shirt Dresses for Women Basic dresses with Button at Swiss Collecttion.', './uploads/shirtdress.jpg', 1850, 2, '2022-04-04'),
(6, 'Check Strappy Dress', 'Check Strappy Dresses for Women Basic dresses with Button at Swiss Collecttion.', './uploads/check-strappy-dress.jpg', 1250, 2, '2022-03-24'),
(7, 'Floral Dress', 'Floral Dresses for Women Basic dresses with Button at Swiss Collecttion.', './uploads/dress.jpg', 1500, 2, '2022-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `recipe_id` int(11) NOT NULL,
  `chef_name` varchar(200) NOT NULL,
  `recipe_name` varchar(200) NOT NULL,
  `recipe_instruc` text NOT NULL,
  `recipe_image` varchar(255) NOT NULL,
  `category` varchar(20) NOT NULL,
  `uploaded_date` date NOT NULL DEFAULT current_timestamp(),
  `recipe_ingri` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`recipe_id`, `chef_name`, `recipe_name`, `recipe_instruc`, `recipe_image`, `category`, `uploaded_date`, `recipe_ingri`) VALUES
(2, 'opay', 'hamburger', 'buy two sided bones loafs, then fry meat', './images/hamburger.jpg', 'bakery ', '2024-04-12', 'beef, bread, oven'),
(3, 'opay', 'hamburger', 'buy two sided bones loafs, then fry meat', './images/hamburger.jpg', 'bakery ', '2024-04-12', 'beef, bread, oven'),
(4, 'opay', 'hamburger', 'buy two sided bones loafs, then fry meat', './images/hamburger.jpg', 'bakery ', '2024-04-12', 'beef, bread, oven'),
(5, 'opay', 'hamburger', 'buy two sided bones loafs, then fry meat', './images/hamburger.jpg', 'bakery ', '2024-04-12', 'beef, bread, oven');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `chefid` int(11) NOT NULL,
  `chefname` varchar(50) NOT NULL,
  `foodcategory` varchar(50) NOT NULL,
  `recipename` varchar(50) NOT NULL,
  `requirements` varchar(50) NOT NULL,
  `instructions` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`chefid`, `chefname`, `foodcategory`, `recipename`, `requirements`, `instructions`) VALUES
(1, 'clinton', 'african', 'jellof rice', ' groundnut oil', ' boil rice'),
(2, 'clinton', 'african', 'jellof rice', ' groundnut oil', ' boil rice'),
(3, 'john', 'bakery', 'donut', ' flour, eggs, colour, water', ' pour a little water into a bowl, add the flour.'),
(4, 'drake', 'drinks', 'summer smoothie', ' a couple of berries, sugar, milk', ' mix in a blender, add ice'),
(5, 'go', 'to', 'ok', ' tunjh', ' fyuihuo');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `uid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uid`, `username`, `email`, `password`) VALUES
(1, 'clinton', 'clinkid1@gmail.com', '123'),
(2, 'clinton', 'clinkid1@gmail.com', '123'),
(3, 'kaka', 'clinkid1@gmail.com', '222');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(150) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `isAdmin` int(11) NOT NULL DEFAULT 0,
  `user_address` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role` enum('Chef','Admin','Seeker') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `password`, `contact_no`, `created_at`, `isAdmin`, `user_address`, `updated_at`, `role`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', '$2y$10$j9OXXIYS0CG5AYuks62YMeDvuIpo2hZEN4CqfJfujt1yPMnoUq5C6', '9810283472', '2022-04-10', 1, 'newroad', '2024-04-09 04:00:51', 'Chef'),
(2, 'Test ', 'Firstuser', 'test@gmail.com', '$2y$10$DJOdhZy1InHTKQO6whfyJexVTZCDTlmIYGCXQiPTv7l82AdC9bWHO', '980098322', '2022-04-10', 0, 'matepani-12', '2024-04-09 04:00:51', 'Chef'),
(3, 'femi', 'bayo', 'femi@gmail.com', '$2y$10$BdFu.lZS7e3tvYNCjEUHcOzQgdlGAn.4PeFB/gIQ4rbFNI1/RlMsG', '0797914538', '2024-04-09', 0, '', '2024-04-09 21:57:34', 'Chef'),
(13, 'john', 'ok', 'ok@gmail.com', '123', '0797914538', '2024-04-10', 0, '', '2024-04-10 22:34:03', 'Seeker'),
(14, 'admin3', 'admin', 'Admin@gmail.com', 'admin', '0816515307', '2024-04-10', 0, '', '2024-04-10 22:35:48', 'Admin'),
(15, 'opay', 'kuku', 'kuku@gmail.com', '123', '0816515307', '2024-04-10', 0, '', '2024-04-10 22:36:55', 'Chef'),
(16, 'clinton', 'obinna', 'clinkid1@gmail.com', '123', '0797914538', '2024-04-11', 0, '', '2024-04-11 19:57:31', 'Seeker');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`uid`, `name`, `location`) VALUES
(1, '4102929-sd_568_320_30fps.mp4', 'videos/4102929-sd_568_320_30fps.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`recipe_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`chefid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `chefid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
