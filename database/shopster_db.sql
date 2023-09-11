-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 11:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopster_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`) VALUES
(1001, 'admin.shopster@gmail.com', 'Admin!0932', 'Kuldeep');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(255) NOT NULL,
  `blogtitle` varchar(255) NOT NULL,
  `blogdate` varchar(255) NOT NULL,
  `blogimg` varchar(255) NOT NULL,
  `blogdsc` varchar(255) NOT NULL,
  `fpara` varchar(255) NOT NULL,
  `spara` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blogtitle`, `blogdate`, `blogimg`, `blogdsc`, `fpara`, `spara`) VALUES
(1, 'Trending Summer Collection', '2023-05-23', 'blog1.webp', 'Nullam lacus sem, volutpat id odio sed, cursus tristique eros. Duis at pellentesque magna. Donec magna nisi.', 'Nullam lacus sem, volutpat id odio sed, cursus tristique eros. Duis at pellentesque magna. Donec magna nisi.Nullam lacus sem, volutpat id odio sed, cursus tristique eros. Duis at pellentesque magna. Donec magna nisi.Nullam lacus sem, volutpat id odio sed,', 'Nullam lacus sem, volutpat id odio sed, cursus tristique eros. Duis at pellentesque magna. Donec magna nisi.Nullam lacus sem, volutpat id odio sed, cursus tristique eros. Duis at pellentesque magna. Donec magna nisi.Nullam lacus sem, volutpat id odio sed,'),
(2, 'Top Fashion Trends For Winter', '2023-05-18', 'blog2.webp', 'Nullam lacus sem, volutpat id odio sed, cursus tristique eros. Duis at pellentesque magna. Donec magna nisi.', 'Nullam lacus sem, volutpat id odio sed, cursus tristique eros. Duis at pellentesque magna. Donec magna nisi.Nullam lacus sem, volutpat id odio sed, cursus tristique eros. Duis at pellentesque magna. Donec magna nisi.Nullam lacus sem, volutpat id odio sed,', 'Nullam lacus sem, volutpat id odio sed, cursus tristique eros. Duis at pellentesque magna. Donec magna nisi.Nullam lacus sem, volutpat id odio sed, cursus tristique eros. Duis at pellentesque magna. Donec magna nisi.Nullam lacus sem, volutpat id odio sed,'),
(3, 'Style Your Summer Favorites To Fall', '2023-05-26', 'blog3.webp', 'Nullam lacus sem, volutpat id odio sed, cursus tristique eros. Duis at pellentesque magna. Donec magna nisi.Style Your Summer Favorites To Fall', 'Nullam lacus sem, volutpat id odio sed, cursus tristique eros. Duis at pellentesque magna. Donec magna nisi.Style Your Summer Favorites To FallNullam lacus sem, volutpat id odio sed, cursus tristique eros. Duis at pellentesque magna. Donec magna nisi.Styl', 'Nullam lacus sem, volutpat id odio sed, cursus tristique eros. Duis at pellentesque magna. Donec magna nisi.Style Your Summer Favorites To FallNullam lacus sem, volutpat id odio sed, cursus tristique eros. Duis at pellentesque magna. Donec magna nisi.Styl');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `productid` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `productimg` varchar(255) NOT NULL,
  `producttitle` varchar(255) NOT NULL,
  `productprice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `productid`, `userid`, `quantity`, `productimg`, `producttitle`, `productprice`) VALUES
(26, 'P-8', '3', '1', 'trend8.jpg', 'Slim Fit Flat-Front Trousers', '800'),
(27, 'P-22', '3', '1', 'glasse6.avif', 'Round Stylish Sunglasses', '850');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `catimage` varchar(255) NOT NULL,
  `catname` varchar(255) NOT NULL,
  `catlink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `catimage`, `catname`, `catlink`) VALUES
(1, 'jackets.avif', 'Jackets', '../Project\\jacketscategory.php'),
(2, 'glasses.avif', 'Glasses', '../Project\\glassescategory.php'),
(3, 'handbags.avif', 'Handbags', '../Project\\handbagscategory.php'),
(4, 'sneakers.avif', 'Sneakers', '../Project/sneakerscategory.php');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(255) NOT NULL,
  `cfname` varchar(255) NOT NULL,
  `clname` varchar(255) NOT NULL,
  `cemail` varchar(255) NOT NULL,
  `cphone` varchar(11) NOT NULL,
  `cmessage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `cfname`, `clname`, `cemail`, `cphone`, `cmessage`) VALUES
(1, 'Kuldeep', 'Kumar', 'k2000kuldeep@gmail.com', '9882269381', 'Hi there i am kuldeep can you provide the more trending products.'),
(2, 'Karan', 'Jaswal', 'jaswalkaran2001@gmail.com', '8219936718', 'This site is very nice and very easy to navigate.'),
(3, 'Anshul', 'Thakur', 'anshulthakur273@gmial.com', '7018248442', 'Is there any offline store of the website.'),
(6, 'Udit', 'Kumar', 'uditkumar9320uk@gmail.com', '9816698310', 'Please provide me the nike shoes under 2000.');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_no` int(11) NOT NULL,
  `items` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subtotal` int(200) NOT NULL,
  `product_names` varchar(200) NOT NULL,
  `address` varchar(255) NOT NULL,
  `payment_method` varchar(200) NOT NULL,
  `orderdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_no`, `items`, `user_id`, `subtotal`, `product_names`, `address`, `payment_method`, `orderdate`) VALUES
(1, 3, 1, 2100, 'Slim Fit Flat-Front Trousers', 'ward no - 4 sanjauli Shimla 171006 ', 'cash on delivery', '2023-07-30 11:46:28'),
(2, 3, 1, 150, 'Men\'s Sunglasses', 'ward no - 4 sanjauli Shimla 171006 ', 'cash on delivery', '2023-07-30 11:46:45'),
(3, 2, 1, 1400, 'Kiura Watch', 'Suhaag Cottage Near Sunder Cinema road , Saproon Solan 173211 ', 'cash on delivery', '2023-07-30 12:12:38'),
(4, 1, 1, 250, 'Crew-Neck T-Shirt', 'Suhaag Cottage Near Sunder Cinema road , Saproon Solan 173211 ', 'cash on delivery', '2023-07-30 16:17:40'),
(5, 1, 1, 600, 'Denim Jackets', 'Suhaag Cottage Near Sunder Cinema road , Saproon Solan 173211 ', 'cash on delivery', '2023-07-30 16:23:40'),
(6, 1, 4, 600, 'Denim Jackets', 'powerhouse Shimla 170005 ', 'cash on delivery', '2023-07-30 22:52:51'),
(7, 1, 2, 900, 'Stretch Denim Jacket', 'Tutu Shimla 170005 ', 'cash on delivery', '2023-07-30 23:11:40'),
(8, 1, 3, 250, 'Crew-Neck T-Shirt', 'Major niwas h.no 23 near new dc office, bilaspur Bilaspur 170526 ', 'cash on delivery', '2023-07-30 23:17:12'),
(9, 2, 4, 1400, 'Kiura Watch', 'Power House, Near Tutu Shimla 170005 ', 'cash on delivery', '2023-07-31 22:04:24');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `productid` varchar(255) NOT NULL,
  `producttitle` varchar(255) NOT NULL,
  `productprice` varchar(255) NOT NULL,
  `productstatus` varchar(255) NOT NULL,
  `productimg` varchar(255) NOT NULL,
  `productcat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productid`, `producttitle`, `productprice`, `productstatus`, `productimg`, `productcat`) VALUES
(1, 'P-1', 'Tropical Leaf Print Ruched Top', '370', 'Available', 'trend1.webp', 'Home'),
(2, 'P-2', 'Kiura Watch', '700', 'Available', 'trend2.webp', 'Home'),
(3, 'P-3', 'Light Beige Court Shoes', '400', 'Available', 'trend3.webp', 'Home'),
(4, 'P-4', 'Wedge-Heeled Suede Sandles', '350', 'Available', 'trend4.webp', 'Home'),
(5, 'P-5', 'Men\'s Sunglasses', '150', 'Available', 'trend5.webp', 'Home'),
(6, 'P-6', 'Crew-Neck T-Shirt', '250', 'Available', 'trend6.webp', 'Home'),
(7, 'P-7', 'Denim Jackets', '600', 'Available', 'trend7.webp', 'Home'),
(8, 'P-8', 'Slim Fit Flat-Front Trousers', '800', 'Available', 'trend8.jpg', 'Home'),
(9, 'P-9', 'Denim Jacket Black', '600', 'Available', 'trend7.webp', 'Jackets'),
(10, 'P-10', 'Denim Jacket', '999', 'Available', 'jackets.avif', 'Jackets'),
(11, 'P-11', 'Regular Fit Bomber Jacket', '550', 'Available', 'jacket3.avif', 'Jackets'),
(12, 'P-12', 'Biker Jacket', '2100', 'Available', 'jacket4.avif', 'Jackets'),
(13, 'P-13', 'Lightweight Jacket', '950', 'Available', 'jacket5.avif', 'Jackets'),
(14, 'P-14', 'Faux Leather Biker Jacket', '1999', 'Available', 'jacket6.avif', 'Jackets'),
(15, 'P-15', 'Stretch Denim Jacket', '900', 'Available', 'jacket7.avif', 'Jackets'),
(16, 'P-16', 'Zip Up Cotton Shacket/Jacket', '1000', 'Available', 'jacket8.avif', 'Jackets'),
(17, 'P-17', 'Sunglasses', '150', 'Available', 'trend5.webp', 'Glasses'),
(18, 'P-18', 'Retro Square Eyeglasses', '500', 'Available', 'glasse2.avif', 'Glasses'),
(19, 'P-19', 'Round Glasses', '350', 'Available', 'glasse3.avif', 'Glasses'),
(20, 'P-20', 'Polarized Sunglasses', '499', 'Available', 'glasse4.avif', 'Glasses'),
(21, 'P-21', 'Modern Sunglasses', '699', 'Available', 'glasse5.avif', 'Glasses'),
(22, 'P-22', 'Round Stylish Sunglasses', '850', 'Available', 'glasse6.avif', 'Glasses'),
(23, 'P-23', 'Aviator Unisex Sunglasses', '399', 'Available', 'glasse7.avif', 'Glasses'),
(24, 'P-24', 'Wayfarer Polarized Sunglasses', '499', 'Available', 'glasse8.avif', 'Glasses'),
(25, 'P-25', 'Womens Ushawu Satchel Bag', '1199', 'Available', 'handbag2.avif', 'Handbags'),
(26, 'P-26', 'Studded hand bag for women', '1099', 'Available', 'handbag3.avif', 'Handbags'),
(27, 'P-27', 'Leather Handbags for Girls', '499', 'Available', 'handbag4.avif', 'Handbags'),
(28, 'P-28', 'Studded hand bag for women', '1100', 'Available', 'handbag5.avif', 'Handbags'),
(29, 'P-29', 'Leatherette Handbags For Womens', '600', 'Available', 'handbag6.avif', 'Handbags'),
(30, 'P-30', 'Womens Handbag', '650', 'Available', 'handbag7.avif', 'Handbags'),
(31, 'P-31', 'Womens Shoulder Bag', '1000', 'Available', 'handbag8.avif', 'Handbags'),
(32, 'P-32', 'Womens Handbag Combo', '1500', 'Available', 'handbag9.jpg', 'Handbags'),
(33, 'P-33', 'Nike Court Vision Lo Running Shoe', '4995', 'Available', 'sneaker1.jpg', 'Sneakers'),
(34, 'P-34', 'Mens Panal Sneaker', '1190', 'Available', 'sneakers2.jpg', 'Sneakers'),
(35, 'P-35', 'Mens Sneaker', '900', 'Available', 'sneakers3.jpg', 'Sneakers'),
(36, 'P-36', 'Mens Abor Sneakers', '1599', 'Available', 'sneakers4.jpg', 'Sneakers'),
(37, 'P-37', 'Sneakers Walking Shoe', '580', 'Available', 'sneakers5.jpg', 'Sneakers'),
(38, 'P-38', 'Classic Casual Lace Up Sneaker', '650', 'Available', 'sneakers6.jpg', 'Sneakers'),
(39, 'P-39', 'Mens Sneakers', '829', 'Available', 'sneakers7.jpg', 'Sneakers'),
(40, 'P-40', 'Revive Retro White Sneakers', '499', 'Available', 'sneakers8.jpg', 'Sneakers');

-- --------------------------------------------------------

--
-- Table structure for table `registration_form`
--

CREATE TABLE `registration_form` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration_form`
--

INSERT INTO `registration_form` (`id`, `image`, `firstname`, `lastname`, `email`, `number`, `address`, `password`, `confpassword`) VALUES
(1, 'admin.jpg', 'Kuldeep', 'Kumar', 'k2000kuldeep@gmail.com', '9882269381', 'Solan,H.P.', '$2y$10$XxQaxN7qqsL1Fj99jEMx8Om9z/2nJ0mEuXiSFFaaD.jbyaOSG29ke', 'K123!'),
(2, 'blog4.png', 'Anshul', 'Thakur', 'anshulthakur273@gmail.com', '7018248442', 'Shimla, H.P', '$2y$10$b0T3FED3SYN262U4Ndm0JeshztQLfEZ4sLNxwHd5UiudTAa1XmtQa', 'ADS@123'),
(3, 'blog4.png', 'Karan', 'Jaswal', 'jaswalkaran2001@gmail.com', '8219936718', 'Bilaspur,(H.P).', '$2y$10$AJtDuqDU8VaybPFhuQY/NeJNoDoNqV1Kvdcz3PI6O3NkWZ7LMA2oC', 'Karan123!'),
(4, 'blog6.png', 'Charu', 'Agsty', 'charuagsty123@gmail.com', '8544708858', 'powerhouse,shimla', '$2y$10$ptqy9/DrgrW8HuYqOtmYCeU7cGIiTr.P311azKCffpRQek0sJf5M6', '#Charu123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_no`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_form`
--
ALTER TABLE `registration_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `registration_form`
--
ALTER TABLE `registration_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
