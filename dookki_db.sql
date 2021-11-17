-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 03:10 PM
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
-- Database: `dookki_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `id` bigint(12) NOT NULL,
  `p_id` bigint(12) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `price` bigint(12) NOT NULL,
  `qty` bigint(12) NOT NULL,
  `total` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(12) NOT NULL,
  `adminid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminid`, `password`, `email`, `profile`) VALUES
(1, 'admin123', 'ABCDE', 'mikhail.shahmie@gmail.com', 'profileC/presiden.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` bigint(12) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  `location` text NOT NULL,
  `p_id` bigint(12) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` double NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `u_id`, `name`, `mobile`, `email`, `location`, `p_id`, `qty`, `total`, `status`, `time`) VALUES
(35, 'MikhailShahmie', 'Mikhail', '0143316214', 'mikhail.shahmie@gmail.com', 'Shah Alam,Selangor', 43, 1, 36, 1, '2021-11-07 17:04:01'),
(36, 'Mount19', 'Mason', '0143316214', 'mount@gmail.com', 'Klang, Selangor', 46, 1, 18, 0, '2021-11-07 17:22:03'),
(42, 'Ahmad', 'Ahmad', '0143316214', 'ahmad@gmail.com', 'Klang, Selangor', 56, 2, 16, 0, '2021-11-07 17:26:04'),
(44, 'MikhailShahmie', 'Mikhail', '0143316214', 'mikhail.shahmie@gmail.com', 'Shah Alam,Selangor', 46, 1, 18, 1, '2021-11-07 17:27:41'),
(46, 'Haikal', 'Haikal', '0143316214', 'haikal@gmail.com', 'Subang Jaya, Selangor', 45, 1, 17, 0, '2021-11-07 17:29:21'),
(48, 'MikhailShahmie', 'Mikhail', '0143316214', 'mikhail.shahmie@gmail.com', 'Shah Alam,Selangor', 46, 1, 18, 0, '2021-11-07 22:12:17'),
(51, 'Mount19', 'Mason', '0143316214', 'mount@gmail.com', 'Klang, Selangor', 55, 2, 16, 0, '2021-11-08 10:49:15'),
(52, 'MikhailShahmie', 'Mikhail', '0143316214', 'mikhail.shahmie@gmail.com', 'Shah Alam,Selangor', 43, 1, 36, 0, '2021-11-12 21:43:46'),
(53, 'MikhailShahmie', 'Mikhail', '0143316214', 'mikhail.shahmie@gmail.com', 'Shah Alam,Selangor', 43, 2, 72, 0, '2021-11-12 21:43:46'),
(54, 'MikhailShahmie', '', '', '', '', 43, 2, 72, 0, '2021-11-12 21:46:01'),
(55, 'MikhailShahmie', 'Mikhail', '0143316214', 'mikhail.shahmie@gmail.com', 'Shah Alam,Selangor', 43, 1, 36, 0, '2021-11-17 18:03:11'),
(56, 'MikhailShahmie', 'Mikhail', '0143316214', 'mikhail.shahmie@gmail.com', 'Shah Alam,Selangor', 47, 1, 16, 0, '2021-11-17 18:03:11'),
(57, 'MikhailShahmie', 'Mikhail', '0143316214', 'mikhail.shahmie@gmail.com', 'Shah Alam,Selangor', 45, 1, 17, 0, '2021-11-17 18:03:11'),
(58, 'MikhailShahmie', 'Mikhail', '0143316214', 'mikhail.shahmie@gmail.com', 'Subang Jaya, Selangor', 43, 2, 72, 0, '2021-11-17 18:07:58'),
(59, 'MikhailShahmie', 'Mikhail', '0143316214', 'mikhail.shahmie@gmail.com', 'Subang Jaya, Selangor', 47, 1, 16, 0, '2021-11-17 18:07:58'),
(60, 'MikhailShahmie', 'Mikhail', '0143316214', 'mikhail.shahmie@gmail.com', 'Subang Jaya, Selangor', 50, 1, 4, 0, '2021-11-17 18:07:58'),
(61, 'MikhailShahmie', 'MikhailShahmie', '0143316214', 'mikhail.shahmie@gmail.com', 'Shah Alam, Selangor', 43, 1, 36, 0, '2021-11-17 18:25:38'),
(62, 'MikhailShahmie', 'MikhailShahmie', '0143316214', 'mikhail.shahmie@gmail.com', 'Shah Alam, Selangor', 43, 1, 36, 0, '2021-11-17 22:01:35'),
(63, 'MikhailShahmie', 'MikhailShahmie', '0143316214', 'mikhail.shahmie@gmail.com', 'Shah Alam, Selangor', 50, 2, 8, 0, '2021-11-17 22:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `food_parcel`
--

CREATE TABLE `food_parcel` (
  `id` bigint(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` text NOT NULL,
  `food_id` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(12) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(11, 'img/cheese ramyeon.jpg'),
(12, 'img/steam rice.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(12) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sub_cat` varchar(120) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` bigint(6) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `category`, `sub_cat`, `title`, `description`, `price`, `image`) VALUES
(43, 'mainmenu', '', 'Beef Bulgogi Ramyeon', 'Not Spicy', 36, 'mimg/cheese ramyeon.jpg'),
(44, 'mainmenu', '', 'Original Topokki', 'Mild Spicy', 17, 'mimg/original toppoki.jpg'),
(45, 'mainmenu', '', 'Kimchi Topokki', 'Mild Spicy', 17, 'mimg/kimchi toppoki.jpg'),
(46, 'mainmenu', '', 'Cheese Ramyeon', 'Not Spicy', 18, 'mimg/cheese ramyeon.jpg'),
(47, 'mainmenu', '', 'Original Ramyeon', 'Spicy', 16, 'mimg/original ramyeon.jpg'),
(50, 'beverages', '', 'Pepsi', 'Cold', 4, 'mimg/pepsi dookki.jpg'),
(51, 'beverages', '', '7UP', 'Cold', 3, 'mimg/7up dookki.jpg'),
(52, 'beverages', '', 'Mountain Dew', 'Cold', 3, 'mimg/mountain dew dookki.jpg'),
(53, 'beverages', '', 'Kickapoo', 'Cold', 3, 'mimg/kickapoo dookki.jpg'),
(55, 'sidemenu', '', 'Original Fried Chicken', '3 Pieces', 8, 'mimg/original fried chicken.jpg'),
(56, 'sidemenu', '', 'Snowing Cheese Chicken', '3 Pieces', 8, 'mimg/snowing cheese chicken.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` bigint(12) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `userid`, `password`, `email`, `tel`, `date`, `address`, `profile`) VALUES
(1, 'Haikal', 'haikal', 'haikal1000@gmail.com', '0176450686', '2021-05-02', 'Kuala Lipis, Pahang', 'profileC/malaysia.png'),
(64, 'MikhailShahmie', '123', 'mikhail.shahmie@gmail.com', '0143316214', '2001-11-05', 'Shah Alam, Selangor', 'profileC/Modul1.PNG'),
(65, 'Ahmad', 'Ahmad001', 'yiditet589@vysolar.com', '0143316217', '2021-02-08', 'Shah Alam, Selangor', 'profileC/presiden.jpg'),
(68, 'Mount19', 'Testing2', 'Testing@gmail.com', '0143316217', '2021-05-02', 'Shah Alam, Selangor', 'profileC/testingUpdateC.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` bigint(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `review` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `review`, `description`) VALUES
(15, 'Mahmud', 'Very Poor', 'Very Expensive'),
(16, 'Osman', 'Good', 'Very Well Done'),
(17, 'Osman', 'Good', 'Very Well Done');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `item_number` varchar(255) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `currency_code` varchar(55) NOT NULL,
  `txn_id` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_response` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tempcode`
--

CREATE TABLE `tempcode` (
  `tCode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temptotal`
--

CREATE TABLE `temptotal` (
  `tTotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userpayment`
--

CREATE TABLE `userpayment` (
  `transactionID` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNumber` bigint(11) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcart`
--
ALTER TABLE `addcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempcode`
--
ALTER TABLE `tempcode`
  ADD PRIMARY KEY (`tCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
