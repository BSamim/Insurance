-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 02:14 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'admin', 'admin@gmail.com', '123', '79670-u.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `type` text NOT NULL,
  `password` text NOT NULL,
  `username` text NOT NULL,
  `image` text NOT NULL,
  `twitch_status` varchar(255) NOT NULL DEFAULT 'unlink',
  `date` text NOT NULL,
  `artist` text NOT NULL,
  `viewer` text NOT NULL,
  `profile_status` text NOT NULL,
  `ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `type`, `password`, `username`, `image`, `twitch_status`, `date`, `artist`, `viewer`, `profile_status`, `ip`) VALUES
(106, 'khateeb', 'ullah', 'chkhateeb96@gmail.com', 'viewer', '123', 'khateeb876', '9177-client-2.jpg', 'linked', '09-09-2020', 'artist', 'viewer', 'private', ''),
(107, 'faizan', '', 'faizanmir74@gmail.com', 'viewer', '123', 'faize123', '21993-cd-box.png', 'unlink', '09-09-2020', 'artist', 'viewer', 'public', ''),
(127, 'Anita', '', 'anita@gmail.com', '', '123', 'anita123', '31154-ww.jpg', 'linked', '', 'artist', 'viewer', 'public', ''),
(133, 'khateeb', 'ullah', 'test@gmail.com', 'artist', '123', 'test', '70952-u.jpg', 'linked', '', '', 'viewer', 'private', '::1'),
(135, 'Warren', 'Andrus', 'admin@gmail.com', 'artist', 'Thewickedest01!', 'Mistawicket', '', 'linked', '', '', '', '', '70.162.203.189');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
