-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 01:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_owner`
--

CREATE TABLE `add_owner` (
  `id` int(10) NOT NULL,
  `owner_name` varchar(255) DEFAULT NULL,
  `owner_mobile` varchar(255) DEFAULT NULL,
  `owner_email` varchar(255) DEFAULT NULL,
  `owner_vehicle_no` varchar(255) DEFAULT NULL,
  `owner_vehicle_rc_no` varchar(255) DEFAULT NULL,
  `owner_vehicle_jcc_no` varchar(255) DEFAULT NULL,
  `owner_vehicle_brand` varchar(255) DEFAULT NULL,
  `owner_vehicle_name` varchar(255) DEFAULT NULL,
  `owner_vehicle_color` varchar(255) DEFAULT NULL,
  `driver_id` int(3) DEFAULT NULL,
  `front_image` varchar(255) DEFAULT NULL,
  `back_image` varchar(255) DEFAULT NULL,
  `side_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_owner`
--

INSERT INTO `add_owner` (`id`, `owner_name`, `owner_mobile`, `owner_email`, `owner_vehicle_no`, `owner_vehicle_rc_no`, `owner_vehicle_jcc_no`, `owner_vehicle_brand`, `owner_vehicle_name`, `owner_vehicle_color`, `driver_id`, `front_image`, `back_image`, `side_image`, `created_at`) VALUES
(15, 'LAXMIPRIYA', '9087654321', 'laxmi@gmail.com', '98HFZ', 'SADCSVG3435', ' FVDS3545', 'FSZF', 'FVDV', 'SCFSZC', 51, '1.png', 'delivery.png', 'car2.png', '2022-01-27 18:30:00'),
(16, 'ASCV', '4456', 'DFD', 'ZCV ', 'VCVC', ' BVBVB', 'FDFF', 'DFDF', 'XC C', 51, '10.png', 'car.png', 'car2.png', '2022-01-27 18:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_owner`
--
ALTER TABLE `add_owner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_owner`
--
ALTER TABLE `add_owner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
