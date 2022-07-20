-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 04:55 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tripleem`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `password` varchar(14) NOT NULL,
  `email` varchar(150) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `title` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `investor_email` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`title`, `description`, `investor_email`) VALUES
('uuuuu', 'h56h66h3', 0),
('tbtbtbsbt', 'gthtbg', 0),
('4f2g4', 'tqnhhq5353huuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu', 0),
('yj5j5j564', 'pppppppppppppppppppppppppppppp', 0),
('', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `name` varchar(50) NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `email` varchar(64) NOT NULL,
  `date` date NOT NULL,
  `court` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`name`, `timeslot`, `email`, `date`, `court`) VALUES
('nadeen', '09:00AM - 10:00AM', 'nadona2009@gmail.com', '2021-07-14', ''),
('shahad', '10:00AM - 11:00AM', 'sh@g', '2021-07-17', ''),
('bb', '10:00AM - 11:00AM', 'b@h', '2021-07-14', ''),
('nadeen', '12:00PM - 13:00PM', 'nadona2009@gmail.com', '2021-07-14', ''),
('nadeen', '18:00PM - 19:00PM', 'nadona2009@gmail.comnnnnnn', '2021-07-15', 'ALHUDA'),
('nad', '21:00PM - 22:00PM', 'k@b', '2021-07-15', ''),
('nadeen', '13:00PM - 14:00PM', 'nadeen@g', '2021-07-15', 'الهلال'),
('n', '19:00PM - 20:00PM', 'nadeen@g', '2021-07-16', 'الهلال'),
('nadeen', '21:00PM - 22:00PM', 'nadeen@g', '2021-07-16', 'الهلال'),
('bb', '14:00PM - 15:00PM', 'nadeen@g', '2021-07-16', 'الهلال'),
('nadeen', '19:00PM - 20:00PM', 'nadeen@g', '2021-07-17', 'الهلال'),
('Maha', '17:00PM - 18:00PM', 'nadeen@g', '2021-07-14', 'الهلال'),
('h', '16:00PM - 17:00PM', 'nadeen@g', '2021-07-14', 'الهلال'),
('nadeen', '17:00PM - 18:00PM', 'nadeen@g', '2021-07-16', 'Almaha');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `complain` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE `court` (
  `name` varchar(30) NOT NULL,
  `investor_email` varchar(50) NOT NULL,
  `sport_type` varchar(20) NOT NULL,
  `category` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `space` int(15) NOT NULL,
  `location` varchar(100) NOT NULL,
  `contact_number` int(10) NOT NULL,
  `rate` decimal(2,2) NOT NULL,
  `picture` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`name`, `investor_email`, `sport_type`, `category`, `price`, `space`, `location`, `contact_number`, `rate`, `picture`) VALUES
('ALHUDA', '0', '؟؟', '20', '0.00', 0, '', 55, '0.99', ''),
('Maha', 'd@s', 'كرة قدم', 'ثماني', '800.00', 42, 'http://google.com', 551123, '0.99', ''),
('الهلال', '0', 'كرة طائرة', 'خماسي', '800.00', 37, 'http://google.com', 5511444, '0.99', '');

-- --------------------------------------------------------

--
-- Table structure for table `end_user`
--

CREATE TABLE `end_user` (
  `phone_number` int(10) NOT NULL,
  `password` varchar(14) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `end_user`
--

INSERT INTO `end_user` (`phone_number`, `password`, `age`, `gender`, `email`, `username`) VALUES
(677676, 'b@b', 60, 'أنثى', '4345343543', 'hhhhhhhh'),
(34, 'my@h', 70, '', '55454545', 'hiiiiii'),
(99999, '975654', 27, '', 'k@m', 'hi'),
(55, '123', 22, 'ذكر', 'nadeen@g', 'nadeen'),
(67667, 'k@h', 60, 'أنثى', 'te5533ttt', 'ppppp');

-- --------------------------------------------------------

--
-- Table structure for table `investors`
--

CREATE TABLE `investors` (
  `contact_num` int(10) NOT NULL,
  `password` varchar(14) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `office_address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investors`
--

INSERT INTO `investors` (`contact_num`, `password`, `age`, `gender`, `email`, `username`, `office_address`) VALUES
(765757, 'rawan@g', 56, 'أنثى', '6u4jhj4', 'ggggggg', ''),
(56654, '2345', 30, 'f', 'd@s', 'aaaas', 'asdfghjkl;');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `password` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Contact_num` int(10) NOT NULL,
  `Office_address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`password`, `email`, `Contact_num`, `Office_address`) VALUES
('triplemadmin', 'triplem@gmail.com', 512345678, '-');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `account_id` int(10) NOT NULL,
  `points` int(10) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `user_id` int(10) NOT NULL,
  `court_name` varchar(30) NOT NULL,
  `rate` decimal(2,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Serial_number` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `court_name` varchar(50) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `payment` varchar(5) NOT NULL,
  `contact` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `end_user`
--
ALTER TABLE `end_user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `phone_number` (`phone_number`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `investors`
--
ALTER TABLE `investors`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `contact_num` (`contact_num`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`Contact_num`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Serial_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Serial_number` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
