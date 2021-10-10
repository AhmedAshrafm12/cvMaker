-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 09:15 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvmaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `name` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `adress` varchar(30) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sumary` text NOT NULL,
  `skills` varchar(255) NOT NULL,
  `exphead` varchar(30) NOT NULL,
  `expsince` text NOT NULL,
  `expto` text NOT NULL,
  `exproles` text NOT NULL,
  `eduname` varchar(30) NOT NULL,
  `edusince` text NOT NULL,
  `eduto` text NOT NULL,
  `cer` text NOT NULL,
  `cerat` text NOT NULL,
  `inter` text NOT NULL,
  `uniq` int(11) NOT NULL,
  `color` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD UNIQUE KEY `uniq` (`uniq`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
