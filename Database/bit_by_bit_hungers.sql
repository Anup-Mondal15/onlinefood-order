-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 02:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bit_by_bit_hungers`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(14, 'Anup', 'anup.mondal', 'eb17e1c03643c971ab35c22d86587541'),
(15, 'Susmita Sarker Chaity', 'susmita', '16caa09647d36d0cef8fc31b1343b043');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(4, 'Pizza', 'Food_Category_790.jpg', 'Yes', 'Yes'),
(5, 'Burger', 'Food_Category_344.jpg', 'Yes', 'Yes'),
(9, 'Wraps', 'Food_Category_374.jpg', 'Yes', 'Yes'),
(10, 'Pasta', 'Food_Category_948.jpg', 'Yes', 'Yes'),
(11, 'Sandwich', 'Food_Category_536.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(4, 'Ham Burger', 'Burger with Ham, Pineapple Cheese', '450', 'Food-Name-2112.jpg', 5, 'Yes', 'Yes'),
(5, 'Smoky BBQ Pizza', 'Best Firewood Pizza in Town.', '650', 'Food-Name-8298.jpg', 4, 'No', 'Yes'),
(9, 'Chicken Wrap', 'Crispy flour tortilla loaded with juicy  cheese.', '350', 'Food-Name-3843.jpg', 9, 'Yes', 'Yes'),
(10, 'Cheeseburger', 'A cheeseburger is a hamburger topped with cheese. Traditionally, the slice of cheese is placed on top of the meat patty.', '550', 'Food-Name-433.jpeg', 5, 'Yes', 'Yes'),
(11, 'Grilled Cheese Sandwich', 'Assembled by creating a cheese filling, often cheddar or American between two slices of bread and is then heated until the bread.', '250', 'Food-Name-3631.jpg', 11, 'Yes', 'Yes'),
(12, 'Chicken Kabab', 'These lemon chicken kebabs are infused overnight with the best kebab marinade', '200', 'Food-Name-3264.jpg', 9, 'Yes', 'Yes'),
(13, 'gfgf', 'vbbc ', '50', '', 10, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(12, 'Ham Burger', '4', 1, '4', '2022-12-02 08:11:11', 'Ordered', 'sssb', '0445', 'anup@devtech365.com', 'svavav'),
(13, 'Chicken Wrap', '5', 2, '10', '2022-12-02 09:34:11', 'Cancelled', 'gshshs', '4740424', 'anupmondal6971@gmail.com', 'sgsgsgsg'),
(14, 'Ham Burger', '4', 5, '20', '2022-12-02 10:08:57', 'On Delivery', 'shshshs', '0170000', 'anupmondal6971@gmail.com', 'adddDdDDD'),
(16, 'Chicken Wrap', '5', 10, '50', '2022-12-03 10:26:55', 'Delivered', 'Hasnat', '0172366', 'hasnat70@gmail.com', 'HGFHFUJ2254'),
(17, 'Chicken Wrap', '5', 9, '45', '2022-12-05 08:14:27', 'Delivered', 'lhjlljl', '012666', 'anup@devtech365.com', 'gjguihk'),
(19, 'Ham Burger', '450', 6, '2700', '2022-12-05 05:53:11', 'Delivered', 'sadat', '58338878', 'abc@gmail.com', 'cbdbd25'),
(20, 'Chicken Wrap', '350', 4, '1400', '2022-12-05 08:45:22', 'Ordered', 'Hasnat', '0183322233', 'foyaz15-13538@diu.edu.bd', 'jhjhj56'),
(21, 'Grilled Cheese Sandwich', '250', 9, '2250', '2022-12-06 07:53:58', 'Delivered', 'Rima', '055555', 'anupmondal6970@gmail.com', 'hjgj5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
