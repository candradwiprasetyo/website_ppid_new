-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Feb 2015 pada 23.44
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `farmer_management`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `counters`
--

CREATE TABLE IF NOT EXISTS `counters` (
  `land_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `counters`
--

INSERT INTO `counters` (`land_code`) VALUES
(4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `farmers`
--

CREATE TABLE IF NOT EXISTS `farmers` (
`farmer_id` int(11) NOT NULL,
  `farmer_contract_code` varchar(10) NOT NULL,
  `farmer_name` varchar(100) NOT NULL,
  `farmer_address` text NOT NULL,
  `farmer_identity_number` varchar(20) NOT NULL,
  `farmer_identity_img` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `farmers`
--

INSERT INTO `farmers` (`farmer_id`, `farmer_contract_code`, `farmer_name`, `farmer_address`, `farmer_identity_number`, `farmer_identity_img`) VALUES
(1, 'C00001', 'Candra D P', '1234234234', 'Surabaya', '../img/farmer/2014-12-04-113234_1d921f1e66c459e211f4a44fafb34e29.png'),
(2, 'C0002', 'Afan Prima', '', '645646456456', '../img/farmer/2014-12-04-113454_original.jpg'),
(3, 'C0003', 'Andri Febri', 'Sidoarjo', '11111', '../img/farmer/2014-12-04-113640_Slick-Login-Form1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `farmer_lands`
--

CREATE TABLE IF NOT EXISTS `farmer_lands` (
`farmer_land_id` int(11) NOT NULL,
  `land_id` int(11) NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `farmer_land_area` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `farmer_lands`
--

INSERT INTO `farmer_lands` (`farmer_land_id`, `land_id`, `farmer_id`, `farmer_land_area`) VALUES
(1, 1, 1, '30.00'),
(2, 1, 2, '20.00'),
(4, 3, 1, '10.00'),
(5, 4, 1, '60.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lands`
--

CREATE TABLE IF NOT EXISTS `lands` (
`land_id` int(11) NOT NULL,
  `land_code` varchar(100) NOT NULL,
  `land_area` decimal(10,2) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lands`
--

INSERT INTO `lands` (`land_id`, `land_code`, `land_area`, `location_id`) VALUES
(1, 'HT00001', '50.00', 2),
(3, 'HT00002', '30.00', 3),
(4, 'HT00003', '0.00', 3),
(6, 'HT00004', '0.00', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
`location_id` int(11) NOT NULL,
  `location_name` varchar(100) NOT NULL,
  `location_description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `locations`
--

INSERT INTO `locations` (`location_id`, `location_name`, `location_description`) VALUES
(2, 'Kecamatan Waru', ''),
(3, 'Kecamatan Gayungsari', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `planting_distance_models`
--

CREATE TABLE IF NOT EXISTS `planting_distance_models` (
`planting_distance_model_id` int(11) NOT NULL,
  `planting_distance_model_name` varchar(100) NOT NULL,
  `planting_distance_model_description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `planting_distance_models`
--

INSERT INTO `planting_distance_models` (`planting_distance_model_id`, `planting_distance_model_name`, `planting_distance_model_description`) VALUES
(1, 'Single Row', ''),
(2, 'Double Row', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `planting_processes`
--

CREATE TABLE IF NOT EXISTS `planting_processes` (
`planting_process_id` int(11) NOT NULL,
  `land_id` int(11) NOT NULL,
  `varieties_id` int(11) NOT NULL,
  `planting_process_date` date NOT NULL,
  `planting_distance_model_id` int(11) NOT NULL,
  `planting_process_planting_distance` decimal(10,2) NOT NULL,
  `planting_process_seedling_stage` decimal(10,2) NOT NULL,
  `seed_id` int(11) NOT NULL,
  `planting_process_harvest_date` date NOT NULL,
  `planting_process_rod_per_unit_area` decimal(10,2) NOT NULL,
  `planting_process_rod_height` decimal(10,2) NOT NULL,
  `planting_process_brix` int(11) NOT NULL,
  `planting_process_milled_date` date NOT NULL,
  `planting_process_stem_number` varchar(100) NOT NULL,
  `planting_process_stem_height` varchar(100) NOT NULL,
  `planting_process_p2o5_content` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `planting_processes`
--

INSERT INTO `planting_processes` (`planting_process_id`, `land_id`, `varieties_id`, `planting_process_date`, `planting_distance_model_id`, `planting_process_planting_distance`, `planting_process_seedling_stage`, `seed_id`, `planting_process_harvest_date`, `planting_process_rod_per_unit_area`, `planting_process_rod_height`, `planting_process_brix`, `planting_process_milled_date`, `planting_process_stem_number`, `planting_process_stem_height`, `planting_process_p2o5_content`) VALUES
(3, 1, 1, '2014-12-08', 1, '2.00', '3.00', 1, '2015-12-08', '0.00', '0.00', 0, '2014-12-10', '', '', ''),
(4, 3, 2, '2014-12-09', 1, '5.00', '5.00', 2, '2015-12-09', '0.00', '0.00', 0, '2014-12-10', '', '', ''),
(5, 1, 1, '2015-02-22', 1, '100.00', '200.00', 1, '2016-02-22', '0.00', '0.00', 0, '2015-02-22', '10', '11', '12'),
(6, 3, 1, '2015-02-22', 1, '200.00', '100.00', 1, '2016-02-22', '0.00', '0.00', 0, '2015-02-15', '10', '11', '12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seeds`
--

CREATE TABLE IF NOT EXISTS `seeds` (
`seed_id` int(11) NOT NULL,
  `seed_name` varchar(100) NOT NULL,
  `seed_description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `seeds`
--

INSERT INTO `seeds` (`seed_id`, `seed_name`, `seed_description`) VALUES
(1, 'BAGAL', ''),
(2, 'BUD CHIP', ''),
(3, 'KEPRAS', ''),
(4, 'test', ''),
(5, 'test', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `treatments`
--

CREATE TABLE IF NOT EXISTS `treatments` (
`treatment_id` int(11) NOT NULL,
  `planting_process_id` int(11) NOT NULL,
  `treatment_date` date NOT NULL,
  `treatment_type_id` int(11) NOT NULL,
  `treatment_description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `treatments`
--

INSERT INTO `treatments` (`treatment_id`, `planting_process_id`, `treatment_date`, `treatment_type_id`, `treatment_description`) VALUES
(2, 3, '2014-12-09', 2, ''),
(5, 3, '2014-12-10', 4, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `treatment_types`
--

CREATE TABLE IF NOT EXISTS `treatment_types` (
`treatment_type_id` int(11) NOT NULL,
  `treatment_type_name` varchar(100) NOT NULL,
  `treatment_type_description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `treatment_types`
--

INSERT INTO `treatment_types` (`treatment_type_id`, `treatment_type_name`, `treatment_type_description`) VALUES
(2, 'Pupuk', ''),
(3, 'Klentek', ''),
(4, 'Pengendalian Hama', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `user_login` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_code` varchar(100) DEFAULT NULL,
  `user_phone` varchar(100) DEFAULT NULL,
  `user_img` text NOT NULL,
  `user_active_status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `user_type_id`, `user_login`, `user_password`, `user_name`, `user_code`, `user_phone`, `user_img`, `user_active_status`) VALUES
(11, 1, 'melon', '3a2cf27458c9aa3e358f8fc0f002bff6', 'melon', 'A0001', '03125435432', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `varieties`
--

CREATE TABLE IF NOT EXISTS `varieties` (
`varieties_id` int(11) NOT NULL,
  `varieties_name` varchar(100) NOT NULL,
  `varieties_description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `varieties`
--

INSERT INTO `varieties` (`varieties_id`, `varieties_name`, `varieties_description`) VALUES
(1, 'Masak awal (Mei - Juni)', ''),
(2, 'Masak Tengah ((Juli -Agustus)', ''),
(3, 'Masak Akhir (setelah September)', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
 ADD PRIMARY KEY (`farmer_id`);

--
-- Indexes for table `farmer_lands`
--
ALTER TABLE `farmer_lands`
 ADD PRIMARY KEY (`farmer_land_id`);

--
-- Indexes for table `lands`
--
ALTER TABLE `lands`
 ADD PRIMARY KEY (`land_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
 ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `planting_distance_models`
--
ALTER TABLE `planting_distance_models`
 ADD PRIMARY KEY (`planting_distance_model_id`);

--
-- Indexes for table `planting_processes`
--
ALTER TABLE `planting_processes`
 ADD PRIMARY KEY (`planting_process_id`);

--
-- Indexes for table `seeds`
--
ALTER TABLE `seeds`
 ADD PRIMARY KEY (`seed_id`);

--
-- Indexes for table `treatments`
--
ALTER TABLE `treatments`
 ADD PRIMARY KEY (`treatment_id`,`planting_process_id`);

--
-- Indexes for table `treatment_types`
--
ALTER TABLE `treatment_types`
 ADD PRIMARY KEY (`treatment_type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `varieties`
--
ALTER TABLE `varieties`
 ADD PRIMARY KEY (`varieties_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
MODIFY `farmer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `farmer_lands`
--
ALTER TABLE `farmer_lands`
MODIFY `farmer_land_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lands`
--
ALTER TABLE `lands`
MODIFY `land_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `planting_distance_models`
--
ALTER TABLE `planting_distance_models`
MODIFY `planting_distance_model_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `planting_processes`
--
ALTER TABLE `planting_processes`
MODIFY `planting_process_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `seeds`
--
ALTER TABLE `seeds`
MODIFY `seed_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `treatments`
--
ALTER TABLE `treatments`
MODIFY `treatment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `treatment_types`
--
ALTER TABLE `treatment_types`
MODIFY `treatment_type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `varieties`
--
ALTER TABLE `varieties`
MODIFY `varieties_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
