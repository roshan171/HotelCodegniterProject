-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2023 at 11:37 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelmanagment`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(155) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(2, 'Roshan Dhawde', 'roshan@gmail.com', '8291392598', 'Hello Roshan'),
(3, 'Ankita Patil', 'ankita@gmail.com', '8569856325', 'Hello Ankita Nice To meet you...');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(155) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `address` text NOT NULL,
  `joining_date` date DEFAULT NULL,
  `status` varchar(155) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `phone`, `address`, `joining_date`, `status`) VALUES
(2, 'Aniket Yadav', 'aniket@gmail.com', '9658745893', 'Panvel, Mumbai', '2023-10-24', NULL),
(4, 'Roshan', 'roshan@gmail.com', '9224988498', 'Mankhurd, Mumbai', '2023-11-30', NULL),
(6, 'Akash', 'akash@gmail.com', '8965865568', 'Thane , Mumbai', '2023-12-02', NULL),
(7, 'Roshan', 'roshan@gmail.com', '8291392598', 'Mankhurd Mumbai', '2023-12-23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `name` varchar(155) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` varchar(155) DEFAULT NULL,
  `available` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `name`, `description`, `price`, `available`) VALUES
(1, 'Chiken Biryani', 'Biryani is a mixed rice dish that was thought to have originated from Iran before settling in modern India. It is made with rice, some type of meat and spices. To cater to vegetarians, in some cases, it is prepared by substituting vegetables for the meat', '245', 'yes'),
(3, 'Triple Fried Rice', 'triple rice is complete meal with combination of rice, hakka noodles and fried noodles which is served with spicy schezwan manchurian gravy.', '190', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(155) DEFAULT NULL,
  `lname` varchar(155) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `confirm_password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(155) DEFAULT NULL,
  `payment_mode` varchar(20) DEFAULT NULL,
  `available` varchar(155) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `status`, `payment_mode`, `available`, `created_at`) VALUES
(1, 'Roshan', 'roshan@gmail.com', 'Confirmed', 'Cash', 'yes', '2023-12-08 08:06:19'),
(2, 'vishal', 'vishal@gmail.com', 'Pending', 'Credit Card', 'no', '2023-12-08 08:13:55'),
(3, 'Ankita Patil', 'ankita@gmail.com', 'Cancelled', 'Cash', 'no', '2023-12-08 08:37:31'),
(5, 'Aakash Gavate', 'aakash@gmail.com', 'Confirmed', 'Cash', 'yes', '2023-12-08 08:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `reservetable`
--

CREATE TABLE `reservetable` (
  `id` int(11) NOT NULL,
  `name` varchar(155) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `person` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservetable`
--

INSERT INTO `reservetable` (`id`, `name`, `email`, `phone`, `date`, `time`, `person`) VALUES
(1, 'Roshan Dhawde', 'roshan@gmail.com', '8291392598', '2023-12-12', '08:30:00', '2'),
(3, 'Shilpa Kadam', 'shilpa@gmail.com', '8965865568', '2023-12-15', '10:00:00', '2');

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

CREATE TABLE `userss` (
  `id` int(11) NOT NULL,
  `username` varchar(155) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `password` varchar(155) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`id`, `username`, `email`, `password`) VALUES
(1, 'Roshan', 'roshan@gmail.com', '$2y$10$D5fgdK.W69j9dBpZvOLxYeXdCd03WAkynDIvGeTdML.RDAtXIsLjq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservetable`
--
ALTER TABLE `reservetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reservetable`
--
ALTER TABLE `reservetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
