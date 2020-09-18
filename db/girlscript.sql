-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2020 at 05:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `girlscript`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `ap_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `status` text NOT NULL,
  `ap_date` date NOT NULL DEFAULT current_timestamp(),
  `application_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`ap_id`, `name`, `job_id`, `status`, `ap_date`, `application_id`) VALUES
('268246', 'eric', 'kaamwali5f64af4b206c0', 'pending', '2020-09-18', '2682465f64b1f2198a0');

-- --------------------------------------------------------

--
-- Table structure for table `job_listings`
--

CREATE TABLE `job_listings` (
  `job_id` varchar(255) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `pay` int(11) NOT NULL,
  `skills` text NOT NULL,
  `age_group` int(11) NOT NULL,
  `employer` varchar(255) NOT NULL,
  `emp_cn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `new_j_listings`
--

CREATE TABLE `new_j_listings` (
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `pay` int(11) NOT NULL,
  `skills` text NOT NULL,
  `age_group` varchar(255) NOT NULL,
  `employer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_j_listings`
--

INSERT INTO `new_j_listings` (`name`, `description`, `job_id`, `location`, `pay`, `skills`, `age_group`, `employer`) VALUES
('kaamwali', 'random', 'kaamwali5f64af4b206c0', 'raipur', 2000, 'jhaadu', '30', 'eric');

-- --------------------------------------------------------

--
-- Table structure for table `new_p_listing`
--

CREATE TABLE `new_p_listing` (
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `seller` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_p_listing`
--

INSERT INTO `new_p_listing` (`name`, `description`, `seller`, `product_id`, `price`, `posted_on`) VALUES
('baba ji ka thullu', 'kuch bhi random', 'aryan sarkar', 'baba ji ka thullu5f649ac34f1f2', 900, '2020-09-18 11:32:19'),
('ghanta', 'aisi ki taisi', 'sanjeeb', 'ghanta5f64964a79c9c', 200, '2020-09-18 11:13:14'),
('Papad', '', 'sanjeeb nath', 'Papad5f64cad7c9375', 200, '2020-09-18 14:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `password`, `name`, `phone`) VALUES
('aryan sarkar5f649a8b31c29', '98kp5ys3wrwb6', 'aryan sarkar', '9897654321'),
('sanjeeb nath5f64c7470deaf', '70rkgl2jxZjxw', 'sanjeeb nath', '7000448068'),
('sanjeeb5f64898ba7792', '70rkgl2jxZjxw', 'sanjeeb', '7000448069');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `job_listings`
--
ALTER TABLE `job_listings`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `new_j_listings`
--
ALTER TABLE `new_j_listings`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `new_p_listing`
--
ALTER TABLE `new_p_listing`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
