-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2019 at 03:15 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mess_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newuser`
--

CREATE TABLE IF NOT EXISTS `newuser` (
  `id` int(10) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newuser`
--

INSERT INTO `newuser` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `address`) VALUES
(1, 'Varsha', 'Bhosale', 'bhosale.varsha1999@gmail.com', '7218645678', 'Velu'),
(2, 'varsha', 'bhosale', 'rrrajmane@gmail.com', '7218645678', 'islampur'),
(3, 'Varsha', 'Bhosale', 'bhosale.varsha1999@gmail.com', '7218645678', 'Velu'),
(4, 'Varsha', 'Bhosale', 'bhosale.varsha1999@gmail.com', '7216734521', 'Velu'),
(5, 'rutuja', 'rajmane', 'rrrajmane@gmail.com', '7218645678', 'sangali'),
(6, 'snehal', 'jadhav', 'abc@gmail.com', '9867345211', 'satara'),
(7, 'sanyukta', 'mane', 'mane@gmail.com', '7890123456', 'islampur'),
(8, 'bhagyashri', 'patil', 'pbhagyashri@gmail.com', '7890123456', 'islampur'),
(9, 'bhagyashri', 'patil', 'pbhagyashri@gmail.com', '7890123456', 'islampur'),
(10, 'rutuja', 'rajmane', 'rrrajmane@gmail.com', '9078563412', 'kameri'),
(11, 'rutuja', 'rajmane', 'rrrajmane@gmail.com', '9078563412', 'kameri');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `Status` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `Deducted_days` int(2) DEFAULT NULL,
  `Total_days` int(2) DEFAULT NULL,
  `Present_days` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `email`, `phonenumber`, `address`, `Status`, `Deducted_days`, `Total_days`, `Present_days`) VALUES
(1, 'aaa', 'aaa@gmail.com', '1234567890', 'sangali', 'Active', 10, 21, 6),
(2, 'bbb', 'bbb@gmail.com', '2132435465', 'sangali', 'Active', 11, 20, 5),
(3, 'ccc', 'ccc@gmail.com', '9876543210', 'kolhapur', 'Active', 2, 31, 6),
(4, 'ddd', 'ddd@gmail.com', '4342526344', 'sangali', 'Active', 6, 25, 3),
(5, 'eee', 'eee@gmail.com', '1212121212', 'kameri', 'Active', 12, 19, 1),
(6, 'FFF', 'fff@gmail.com', '3333333333', 'kolhapur', 'Active', 0, 31, 1),
(7, 'ggg', 'ggg@gmail.com', '7654789623', 'sangali', 'Active', 11, 20, 3),
(8, 'HHH', 'hhh@gmail.com', '5454545454', 'sangali', 'Active', 5, 26, 0),
(9, 'JJJ', 'jjj@gmail.com', '198765432', 'kameri', 'Active', 11, 20, 0),
(10, 'KKK', 'kkk@gmail.com', '5467372819', 'sangali', 'Active', 11, 20, 1),
(11, 'mmm', 'mmm@gmail.com', '6574839201', 'sangali', 'Active', 12, 19, 0),
(12, 'Varsha', 'rrrajmane@gmail.com', '7218645678', 'Velu', 'Active', 12, 19, 0),
(13, 'Varsha', 'rrrajmane@gmail.com', '7218645678', 'Velu', 'Active', 12, 19, 0),
(14, 'Varsha', 'rrrajmane@gmail.com', '7218645678', 'Velu', 'Active', 12, 19, 0),
(15, 'Varsha', 'rrrajmane@gmail.com', '7218645678', 'Velu', 'Active', 12, 19, 0),
(16, 'Varsha', 'rrrajmane@gmail.com', '7218645678', 'Velu', 'Active', 12, 19, 0),
(17, 'Varsha', 'rrrajmane@gmail.com', '7218645678', 'Velu', 'Active', 12, 19, 0),
(18, 'Varsha', 'rrrajmane@gmail.com', '7218645678', 'Velu', 'Active', 12, 19, 0),
(19, 'Varsha', 'rrrajmane@gmail.com', '7218645678', 'Velu', 'Active', 12, 19, 0),
(20, 'Rutuja', 'rutuja@gmail.com', '2222222222', 'Pune', 'Active', 10, 21, 0),
(21, 'Rutuja', 'rutuja@gmail.com', '2222222222', 'Pune', 'Active', 10, 21, 0),
(22, 'Bhagyashri', 'bhagyashri@gmail.com', '9154873265', 'Vita', 'Active', 12, 19, 0),
(23, 'harsha', 'harshu@gmail.com', '7218645678', 'velu', 'Active', 10, 21, 1),
(24, 'gg', 'fff@gmail.com', '9078562345', 'satara', 'Active', 23, 8, 0),
(25, 'varsha', 'bhosale.varsha1999@gmail.com', '2345678', 'satara', 'Active', 23, 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$l.JheUEpcch0wlyrgPu/zOayM8h3ORQEgZrMGP6lhUVYjaLys88qS', '2019-10-10 14:29:58'),
(2, 'adminn', '$2y$10$OCEiFBuPsrKB2BunmFAFBeEsB/5QnEDh/sZnx7sZ/MdWVSr1NPxx6', '2019-10-10 14:30:24'),
(3, 'admin123', '$2y$10$6aKAz6hCk5HgeEyogBuW2.8lK6EAjSFh2w1LXYeDzCB/NLldTxrK6', '2019-10-11 10:02:08'),
(4, 'varsha', '$2y$10$2Ka291igZci6q7BiaGgH6ejuFM9xuqke3YEdOwbR4H1mXoWvRYXES', '2019-10-11 10:12:44'),
(5, 'rutuja', '$2y$10$3B/NvRZX86Ynbg2CG/A6uO9EWHVI7FeR.wvVyFyFxNc7PPPHX/H/i', '2019-10-16 11:48:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `newuser`
--
ALTER TABLE `newuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newuser`
--
ALTER TABLE `newuser`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
