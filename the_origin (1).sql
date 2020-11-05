-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2020 at 06:30 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `station`
--

-- --------------------------------------------------------

--
-- Table structure for table `the_origin`
--

CREATE TABLE `the_origin` (
  `train_id` varchar(20) NOT NULL,
  `Departure_station` varchar(20) NOT NULL,
  `Time_out` time NOT NULL,
  `to_station1` time NOT NULL,
  `out_station1` time NOT NULL,
  `station_terminal` varchar(11) NOT NULL,
  `to_station2` time NOT NULL,
  `note` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `the_origin`
--

INSERT INTO `the_origin` (`train_id`, `Departure_station`, `Time_out`, `to_station1`, `out_station1`, `station_terminal`, `to_station2`, `note`) VALUES
('424', 'สำโรงทาบ', '05:50:00', '05:53:00', '05:54:00', 'นครศรีธรรมร', '09:50:00', 'รถดีเซลราง'),
('234', 'สุรินทร์', '05:20:00', '05:53:00', '05:54:00', 'กรุงเทพมหาน', '14:15:00', 'รถธรรมดา'),
('72', 'อุบลราชธานี', '05:40:00', '08:22:00', '08:23:00', 'กรุงเทพมหาน', '14:55:00', 'รถด่วนดีเซลราง'),
('428', 'อุบลราชธานี', '06:20:00', '09:38:00', '09:39:00', 'นครราชสีมา', '11:45:00', 'รถดีเซลราง');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
