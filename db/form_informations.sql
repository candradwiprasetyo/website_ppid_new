-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2015 at 09:41 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_ppid`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_informations`
--

CREATE TABLE IF NOT EXISTS `form_informations` (
  `form_information_id` int(11) NOT NULL,
  `form_information_name` varchar(100) NOT NULL,
  `form_information_noktp` int(11) NOT NULL,
  `form_information_organisation` varchar(100) NOT NULL,
  `form_information_addres` varchar(200) NOT NULL,
  `form_information_phone` int(11) NOT NULL,
  `form_information_email` varchar(100) NOT NULL,
  `form_information_info` text NOT NULL,
  `form_information_to` text NOT NULL,
  `form_information_gain` varchar(50) NOT NULL,
  `form_information_receive` varchar(50) NOT NULL,
  `form_information_scan_ktp` varchar(100) NOT NULL,
  `form_information_scan_file` varchar(100) NOT NULL,
  `form_information_type` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_informations`
--

INSERT INTO `form_informations` (`form_information_id`, `form_information_name`, `form_information_noktp`, `form_information_organisation`, `form_information_addres`, `form_information_phone`, `form_information_email`, `form_information_info`, `form_information_to`, `form_information_gain`, `form_information_receive`, `form_information_scan_ktp`, `form_information_scan_file`, `form_information_type`) VALUES
(3, 'perorangan', 12345, '', 'surabaya', 63423123, 'aku@gmail.com', 'asxz', 'asxz', 'Melihat/ Membaca/Mendengar/ Mencatat', 'Mengambil langsung', '2015-10-17-093004_Penguins.jpg', '2015-10-17-093004_Jellyfish.jpg', 0),
(4, 'organisasi', 345435345, 'satungsa', 'jakarta', 34456346, 'blackone929@yahoo.com', 'qwerty', 'qwerty', 'Mendapat salinan informasi (hard copy / softcopy)', 'Kurir', '2015-10-17-093117_Tulips.jpg', '2015-10-17-093117_Chrysanthemum.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_informations`
--
ALTER TABLE `form_informations`
  ADD PRIMARY KEY (`form_information_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_informations`
--
ALTER TABLE `form_informations`
  MODIFY `form_information_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
