-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2019 at 07:21 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doorregister`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `middlename` varchar(250) NOT NULL,
  `fathername` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `Marital` varchar(50) NOT NULL,
  `profiles` varchar(250) NOT NULL,
  `workind` varchar(250) NOT NULL,
  `workindmore` text NOT NULL,
  `workcomp` varchar(250) NOT NULL,
  `workcompmore` text NOT NULL,
  `pastexp` varchar(250) NOT NULL,
  `expyrs` int(11) NOT NULL,
  `localadd` text NOT NULL,
  `permadd` text NOT NULL,
  `mobile1` varchar(250) NOT NULL,
  `mobile2` varchar(250) NOT NULL,
  `emailid` varchar(250) NOT NULL,
  `Languages` varchar(250) NOT NULL,
  `idproof` varchar(50) NOT NULL,
  `addproof` varchar(50) NOT NULL,
  `panno` varchar(50) NOT NULL,
  `familyref` text NOT NULL,
  `friendref` text NOT NULL,
  `profilepic` varchar(250) NOT NULL,
  `idupload` varchar(250) NOT NULL,
  `addupload` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
