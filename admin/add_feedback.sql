-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 07:21 AM
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
-- Table structure for table `add_feedback`
--

CREATE TABLE `add_feedback` (
  `id` int(100) NOT NULL,
  `booking_no` int(100) NOT NULL,
  `user_name` int(100) NOT NULL,
  `driver_name` int(100) NOT NULL,
  `polite_professional` varchar(255) DEFAULT NULL,
  `value_money` varchar(255) DEFAULT NULL,
  `ontime_pikup` varchar(255) DEFAULT NULL,
  `comfortable_ride` varchar(255) DEFAULT NULL,
  `familiar` varchar(255) DEFAULT NULL,
  `didnot_take_ride` varchar(255) DEFAULT NULL,
  `unsafe_ride` varchar(255) DEFAULT NULL,
  `uncomfortable_ride` varchar(255) DEFAULT NULL,
  `rash_riding` varchar(255) DEFAULT NULL,
  `unprofessional_rider` varchar(255) DEFAULT NULL,
  `bad_car_condition` varchar(255) DEFAULT NULL,
  `not_wearing_mask` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `d_didnot_take_ride` varchar(255) DEFAULT NULL,
  `d_unsafe_ride` varchar(255) DEFAULT NULL,
  `d_uncomfortable_ride` varchar(255) DEFAULT NULL,
  `d_rash_riding` varchar(255) DEFAULT NULL,
  `d_unprofessional_rider` varchar(255) DEFAULT NULL,
  `d_bad_car_condition` varchar(255) DEFAULT NULL,
  `d_not_wearing_mask` varchar(255) DEFAULT NULL,
  `d_reason` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '2=good,1=medium,0=bad',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_feedback`
--

INSERT INTO `add_feedback` (`id`, `booking_no`, `user_name`, `driver_name`, `polite_professional`, `value_money`, `ontime_pikup`, `comfortable_ride`, `familiar`, `didnot_take_ride`, `unsafe_ride`, `uncomfortable_ride`, `rash_riding`, `unprofessional_rider`, `bad_car_condition`, `not_wearing_mask`, `reason`, `d_didnot_take_ride`, `d_unsafe_ride`, `d_uncomfortable_ride`, `d_rash_riding`, `d_unprofessional_rider`, `d_bad_car_condition`, `d_not_wearing_mask`, `d_reason`, `status`, `created_at`) VALUES
(32, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, ' Did Not Take This Ride', 'Unsafe Ride Experience', NULL, 'Rash Riding', 'Unprofessional Rider Behaviour', 'Bad Car Condition', 'The Driver Was Not Wearing Masks', 'My Reason is Not Listed', 0, '2022-02-02 10:43:32'),
(34, 0, 0, 0, 'Polite and Professional Driver', 'Value of Money', 'On Time Pikup', 'Comfortable Ride', 'Driver Familiar With The Route', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2022-02-02 10:45:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_feedback`
--
ALTER TABLE `add_feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_feedback`
--
ALTER TABLE `add_feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
