-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 08:05 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `todolist`
--

CREATE TABLE `todolist` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `detail` text NOT NULL,
  `timeframe` varchar(20) NOT NULL,
  `role` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todolist`
--

INSERT INTO `todolist` (`id`, `firstname`, `surname`, `subject`, `detail`, `timeframe`, `role`, `time`) VALUES
(1, 'yakubu aminu', 'adio', 'wdkdmlckm', 'mmfkmlasmfk', '2019-06-20', 'front-end', '2019-06-02 20:35:59'),
(2, 'yakubu aminu', 'adio', 'wdkdmlckm', 'mmfkmlasmfk', '2019-06-20', 'front-end', '2019-06-02 21:07:11'),
(3, 'yakubu aminu', 'adio', 'wdkdmlckm', 'mmfkmlasmfk', '2019-06-20', 'front-end', '2019-06-02 21:12:55'),
(4, 'yakubu aminu', 'adio', 'wdkdmlckm', 'i will be back to abeokuta soon ', '2019-06-20', 'front-end', '2019-06-03 05:57:11'),
(5, 'yakubu aminu', 'adio', 'wdkdmlckm', 'i am goin home soon ', '2019-06-20', 'back-end', '2019-06-03 05:56:30');

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `detail` int(11) NOT NULL,
  `timeframe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `hash` varchar(200) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL,
  `role` varchar(20) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `type` varchar(100) NOT NULL,
  `activate` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `no_of_todo` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `surname`, `email`, `hash`, `phone`, `password`, `role`, `gender`, `type`, `activate`, `status`, `no_of_todo`, `time`) VALUES
(2, 'Dr yakubu', 'abiola sunday', 'yakubuabiola2003@gmail.com', 'df16f7ee30c30ef8eceb5ed517474c21', '08030960928', 'df16f7ee30c30ef8eceb5ed517474c21', 'front-end', 'female', 'user', 1, 0, 0, '2019-06-02 20:25:59'),
(3, 'yakubu aminu', 'adio', 'yakubuabiola2003@gmail.co', 'ad4b7a14177e0a11ad5d099fa84a4866', '08030960928', 'df16f7ee30c30ef8eceb5ed517474c21', 'admin', 'male', 'admin', 1, 0, 0, '2019-06-02 20:25:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todolist`
--
ALTER TABLE `todolist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todolist`
--
ALTER TABLE `todolist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
