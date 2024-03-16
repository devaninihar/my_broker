-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 05:14 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_broker`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` int(11) NOT NULL,
  `Admin_name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contactnumber` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Admin_name`, `Email`, `Contactnumber`, `Address`, `Password`) VALUES
(1, 'admin', 'admin@gmail.com', '1234568552', 'G-201', 'admin@00');

-- --------------------------------------------------------

--
-- Table structure for table `master_table`
--

CREATE TABLE `master_table` (
  `U_id` int(5) NOT NULL,
  `U_name` varchar(50) NOT NULL,
  `U_Email` varchar(50) NOT NULL,
  `U_Contact_number` varchar(10) NOT NULL,
  `U_Address` varchar(50) NOT NULL,
  `U_Password` varchar(8) NOT NULL,
  `status` tinyint(5) NOT NULL,
  `code` varchar(10) NOT NULL,
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_table`
--

INSERT INTO `master_table` (`U_id`, `U_name`, `U_Email`, `U_Contact_number`, `U_Address`, `U_Password`, `status`, `code`, `updated_time`) VALUES
(10, 'ridham', 'ridham@gmail.com', '969696969', 'g 201 YOGI ', 'Ridham@9', 1, '5213809467', '2024-03-08 17:19:02'),
(13, 'jeel', 'jeelpatel@gmail.com', '7896541233', '201 YOGI VILA', 'Jeel@123', 1, '', '2024-03-08 17:19:02'),
(18, 'rushil', 'pipaliyarushill888@gmail.com', '9725005862', 'surat', 'Rushil@1', 1, '', '2024-03-08 17:19:02'),
(25, 'Jitendra', 'jbupadhyay@utu.ac.in', '9909856234', 'udhan', 'Jb@12345', 1, '', '2024-03-08 17:19:02'),
(30, 'yash', 'bundheliyaridham@gmail.com', '7896314863', '122', '12345678', 1, 'J08GC9DT63', '2024-03-08 17:59:51'),
(31, 'Jeel', 'pateljeel1199@gmail.com', '7990971779', 'surat', 'Jeel@098', 1, '', '2024-03-08 17:19:02'),
(34, 'nihar', 'devaninihar@gmail.com', '9696969696', '123', 'Nihar@69', 1, '', '2024-03-08 17:19:02'),
(35, 'kapil', 'kapilrangpariya23@gmail.com', '9875144010', 'varachha surat', 'Kapil@12', 1, '', '2024-03-09 17:39:21'),
(36, 'Arth', 'arthshiroya@gmail.com', '8238992782', 'asdfghjkl,254', 'Arth@007', 0, '', '2024-03-08 17:19:02'),
(37, 'Jeel', 'pateljeel1199123@gmail.com', '7894612303', 'Surat  ', 'Jeel@123', 0, '', '2024-03-08 17:19:02'),
(38, 'ridham', 'bundheliyaridham123@gmail.com', '7567542885', 'G-201 yogi vila', 'Ridham@2', 0, '', '2024-03-08 17:19:02'),
(39, 'ridham', 'bundheliyaridham12345@gmail.com', '9874563210', 'g 201 yogi vila', '12345678', 1, '32ICZK64NJ', '2024-03-08 18:04:52'),
(40, 'hetkakadiya', 'hetkakadiya8917@gmail.com', '7285055481', '17,vrundawan soc mota varachha', 'Het@8917', 1, '', '2024-03-08 17:19:02'),
(41, 'smit', 'thesiyasmit3@gmail.com', '9879679537', 'surat', 'Smit@123', 1, '', '2024-03-08 17:19:02'),
(42, 'ridham', 'bundheliyaridha@gmail.com', '6121138248', '17 vrundawan', 'Ridham@1', 1, 'D0AHY6ELO7', '2024-03-12 13:50:11'),
(44, 'sarthak', 'sarthakmayani2004@gmail.com', '7865211458', 'surat motavaracha', 'Ridham@1', 1, 'NAU4VOT57G', '2024-03-14 03:24:46'),
(46, 'sarthak', 'ffking0019@gmail.com', '1234567890', 'qwertyu', 'Ridham@1', 0, '', '2024-03-14 03:30:29');

-- --------------------------------------------------------

--
-- Table structure for table `messagss`
--

CREATE TABLE `messagss` (
  `msg_id` int(11) NOT NULL,
  `incoming_id` int(11) DEFAULT NULL,
  `outgoing_id` int(11) DEFAULT NULL,
  `msg` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messagss`
--

INSERT INTO `messagss` (`msg_id`, `incoming_id`, `outgoing_id`, `msg`) VALUES
(1, 10, 31, 'hello how are you'),
(2, 10, 31, 'i am fine'),
(3, 10, 31, 'i am fine'),
(4, 10, 31, 'hy'),
(5, 10, 31, 'hy'),
(6, 10, 31, 'hy'),
(7, 10, 31, 'ram'),
(8, 10, 31, 'ram'),
(9, 10, 31, 'hy'),
(10, 10, 31, 'hyyy');

-- --------------------------------------------------------

--
-- Table structure for table `onetimepassword`
--

CREATE TABLE `onetimepassword` (
  `id` int(5) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `otp` varchar(6) NOT NULL,
  `U_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `onetimepassword`
--

INSERT INTO `onetimepassword` (`id`, `mail`, `otp`, `U_id`) VALUES
(1, 'sarthakmayani2004@gmail.com', '337629', 10);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `bhk` int(11) DEFAULT NULL,
  `bathroom` int(11) DEFAULT NULL,
  `balcony` int(11) DEFAULT NULL,
  `furniture` varchar(50) DEFAULT NULL,
  `coverp` varchar(50) DEFAULT NULL,
  `openp` varchar(50) DEFAULT NULL,
  `cost` decimal(10,2) DEFAULT NULL,
  `maintenancecharges` decimal(10,2) DEFAULT NULL,
  `built` int(11) DEFAULT NULL,
  `listingtype` varchar(50) DEFAULT NULL,
  `propertyusage` varchar(50) DEFAULT NULL,
  `address` varchar(500) NOT NULL,
  `imagepath` varchar(255) DEFAULT NULL,
  `electricity_image` varchar(100) NOT NULL,
  `status` tinyint(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `property_status` tinyint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `type`, `bhk`, `bathroom`, `balcony`, `furniture`, `coverp`, `openp`, `cost`, `maintenancecharges`, `built`, `listingtype`, `propertyusage`, `address`, `imagepath`, `electricity_image`, `status`, `p_id`, `property_status`) VALUES
(13, 'Apart', 1, 0, 0, 'Fully', '0', '0', 15000.00, 54.00, 566, 'Rent', 'Commercial', '', 'property_1.jpeg', '', 1, 16, 1),
(18, 'Apart', 1, 0, 0, 'Fully', '0', '0', 10000.00, 85.00, 8, 'Rent', 'Residential', '', 'img6..jpeg', '', 1, 17, 1),
(30, 'Apart', 1, 0, 0, 'Fully', '0', '0', 16000.00, 9898.00, 9889, 'Rent', 'Residential', '', 'img6..jpeg', '', 1, 19, 1),
(31, 'Apart', 1, 0, 0, 'Fully', '0', '0', 18000.00, 67.00, 7678, 'Rent', 'Residential', '', 'img1.jpeg', '', 1, 21, 1),
(30, 'House', 2, 2, 2, 'Fully', '1', '1', 5200000.00, 5000.00, 2500, 'Sell', 'Residential', '', '709832.jpg', '', 1, 28, 1),
(34, 'Apart', 1, 0, 0, 'Fully', '0', '0', 10000.00, 1000.00, 550, 'Rent', 'Residential', '', '12345.jpg', '', 1, 29, 1),
(35, 'House', 3, 2, 1, 'Fully', '1', '1', 6400000.00, 2000.00, 3500, 'Sell', 'Residential', '', 'property1.jpeg', '', 1, 34, 1),
(35, 'Vill', 2, 1, 2, 'Fully', '1', '2', 40000.00, 2000.00, 3000, 'Rent', 'Residential', '', 'propert2.webp', '', 1, 35, 1),
(30, 'Land', 3, 3, 3, 'Fully', '2', '2', 99999999.99, 99999999.99, 22, 'Rent', 'Commercial', '', 'real-estate-agent-640x230.jpg', '', 1, 36, 1),
(10, 'House', 1, 0, 0, 'Fully', '0', '0', 123798.00, 8990.00, 90, 'Rent', 'Residential', '', 'WhatsApp Image 2023-10-09 at 22.19.18_90699dc8.jpg', '', 1, 37, 1),
(37, 'Apart', 2, 2, 2, 'Semi', '2', '2', 500000.00, 500.00, 1000, 'Sell', 'Residential', '', 'img3.jpg', '', 1, 38, 1),
(30, 'Land', 2, 2, 2, 'Semi', '2', '2', 50000.00, 2000.00, 1500, 'Sell', 'Residential', '', 'property1.jpeg', '', 1, 39, 1),
(10, 'House', 1, 0, 0, 'Fully', '0', '0', 123798.00, 8990.00, 90, 'Rent', 'Residential', '', 'img1.jpeg', '', 1, 40, 1),
(10, 'House', 1, 0, 0, 'Fully', '0', '0', 123798.00, 8990.00, 90, 'Rent', 'Residential', '', 'img3.jpg', '', 1, 41, 1),
(39, 'House', 2, 1, 1, 'Semi', '1', '0', 5000000.00, 2000.00, 1500, 'Sell', 'Residential', '', 'real-estate-agent-640x230.jpg', '', 1, 43, 1),
(10, 'Apart', 1, 0, 0, 'Fully', '0', '0', 345.00, 456.00, 67, 'Rent', 'Residential', '', 'img/10/Screenshot 2024-03-07 090226.png', '', 1, 45, 1),
(10, '1', 1, 1, 1, '1', '1', '1', 1.00, 1.00, 1, '1', '1', '', 'img/10/Screenshot 2024-03-07 090121.png', '', 1, 46, 0),
(10, '1', 1, 1, 1, '1', '1', '1', 1.00, 1.00, 1, '1', '1', '', 'img/10/Screenshot (3).png', '', 1, 47, 0),
(10, '1', 1, 1, 1, '1', '1', '1', 1.00, 1.00, 1, '1', '1', '', 'img/Screenshot 2024-03-05 210706.png', '', 0, 49, 0),
(10, '1', 1, 1, 1, '1', '1', '1', 1.00, 1.00, 1, '1', '1', '', 'img/Screenshot 2023-11-29 220152.png', '', 0, 50, 0),
(10, '1', 1, 1, 1, '1', '1', '1', 1.00, 1.00, 1, '1', '1', '', 'img/', '', 0, 51, 0),
(10, '1', 1, 1, 1, '1', '1', '1', 1.00, 1.00, 1, '1', '1', '', 'img/10/', '', 1, 52, 0),
(10, '1', 1, 1, 1, '1', '1', '1', 1.00, 1.00, 1, '1', '1', '', 'img/10/', '', 1, 53, 0),
(10, '11', 1, 1, 1, '1', '1', '1', 1.00, 1.00, 1, '1', '1', '', 'img/', '', 1, 55, 0),
(10, '1', 1, 1, 1, '1', '1', '1', 1.00, 11.00, 1, '1', '1', '', 'img/', '', 1, 56, 0),
(10, '1', 1, 1, 1, '1', '1', '1', 1.00, 1.00, 1, '1', '1', '', 'img/10/app.jpg', '', 1, 60, 0),
(34, '12', 1, 1, 1, '1', '121', '1', 1.00, 1.00, 1, '1', '1', '', 'img/34/Screenshot (115).png', '', 1, 61, 0),
(10, '123', 12, 12, 2, '2', '23', '3', 3.00, 3.00, 3, '3', '3', '', 'img/10/Screenshot 2023-11-29 215810.png', '', 1, 62, 0),
(10, '1', 1, 1, 1, '1', '1', '1', 1.00, 1.00, 1, '1', '1', '', 'img//WhatsApp Image 2023-10-06 at 12.16.29_21809c3f.jpg', '', 1, 63, 0),
(10, '12', 123, 1234, 123, '123', '123', '123', 12.00, 12.00, 12, '23', '23', '', 'img/10/WhatsApp Image 2023-10-06 at 12.16.29_21809c3f.jpg', '', 1, 64, 0),
(35, '1', 1, 1, 1, '1', '1', '1', 1.00, 1.00, 1, '1', '1', 'kamraj', 'img/35/replicate-prediction-k74ckjbb2zuafuuecu4fxerav4.jpg', '', 1, 65, 0),
(10, '1', 1, 1, 1, '1', '1', '1', 1.00, 1.00, 1, '1', '1', 'yogi vila', '', '', 1, 67, 1),
(10, 'Apart', 2, 0, 2, 'Fully', '0', '1', 1.00, 1.00, 1, 'Rent', 'Residential', 'WERTYU', 'Screenshot 2024-03-05 210651.png', 'Screenshot 2023-11-29 215753.png', 1, 68, 0),
(10, 'Apart', 1, 0, 0, 'Fully', '0', '0', 3.00, 4.00, 4, 'Rent', 'Residential', 'WERTYU', 'property_image/property_image_69_Screenshot 2024-03-07 090202.png', 'property_image/property_image_69_Screenshot (120).png', 1, 71, 0),
(10, 'Apart', 1, 0, 0, 'Fully', '0', '0', 1.00, 1.00, 1, 'Rent', 'Residential', 'we', 'property_image_72_Screenshot 2024-03-07 090202.png', 'property_image_72_Screenshot (2).png', 1, 72, 0),
(10, 'Apart', 1, 0, 0, 'Fully', '0', '0', 345.00, 56.00, 6, 'Rent', 'Residential', ' 6', 'property_image_73_Screenshot 2024-03-07 090202.png', 'property_image_73_Screenshot 2023-10-21 003907.png', 0, 73, 0),
(10, 'Apart', 1, 0, 0, 'Fully', '0', '0', -1.00, -1.00, -1, 'Sell', 'Commercial', 'er', 'property_image_74_Screenshot 2024-03-07 090202.png', 'property_image_74_Screenshot 2023-10-21 000324.png', 0, 74, 0),
(10, 'Apart', 1, 0, 0, 'Fully', '0', '0', 5.00, 6.00, 6, 'Rent', 'Residential', '67', 'property_image_75_Screenshot (29).png', 'property_image_75_Screenshot (8).png', 0, 75, 0),
(10, 'Apart', 1, 0, 0, 'Fully', '0', '0', 7.00, 7.00, 7, 'Rent', 'Residential', '78', 'Screenshot 2024-03-05 210651.png', 'Screenshot 2023-10-21 002047.png', 0, 76, 0),
(10, 'Apart', 1, 0, 0, 'Fully', '0', '0', 6.00, 8.00, 8, 'Rent', 'Residential', 'hj', 'property_image/Screenshot 2024-03-07 090226.png', 'property_image/Screenshot 2023-11-29 215753.png', 1, 77, 0),
(10, 'Apart', 1, 0, 0, 'Fully', '0', '0', 6.00, 8.00, 8, 'Rent', 'Residential', 'hj', 'property_image/Screenshot 2024-03-07 090226.png', 'property_image/Screenshot 2023-11-29 215753.png', 1, 78, 0),
(10, 'House', 1, 0, 0, 'Fully', '0', '0', 6.00, 7.00, 7, 'Rent', 'Residential', 'hj', 'property_image/Screenshot 2023-11-29 215938.png', 'property_image/Screenshot 2023-10-21 003907.png', 1, 80, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `master_table`
--
ALTER TABLE `master_table`
  ADD PRIMARY KEY (`U_id`) USING BTREE,
  ADD UNIQUE KEY `U_Email` (`U_Email`);

--
-- Indexes for table `messagss`
--
ALTER TABLE `messagss`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `messagss_1` (`incoming_id`),
  ADD KEY `messagss_2` (`outgoing_id`);

--
-- Indexes for table `onetimepassword`
--
ALTER TABLE `onetimepassword`
  ADD PRIMARY KEY (`U_id`),
  ADD KEY `ok` (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `fokey` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_table`
--
ALTER TABLE `master_table`
  MODIFY `U_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `messagss`
--
ALTER TABLE `messagss`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messagss`
--
ALTER TABLE `messagss`
  ADD CONSTRAINT `messagss_1` FOREIGN KEY (`incoming_id`) REFERENCES `master_table` (`U_id`),
  ADD CONSTRAINT `messagss_2` FOREIGN KEY (`outgoing_id`) REFERENCES `master_table` (`U_id`);

--
-- Constraints for table `onetimepassword`
--
ALTER TABLE `onetimepassword`
  ADD CONSTRAINT `ok` FOREIGN KEY (`U_id`) REFERENCES `master_table` (`U_id`);

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `fokey` FOREIGN KEY (`id`) REFERENCES `master_table` (`U_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
