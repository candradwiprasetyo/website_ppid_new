-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2015 at 09:11 AM
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
-- Table structure for table `any_informations`
--

CREATE TABLE IF NOT EXISTS `any_informations` (
  `any_information_id` int(11) NOT NULL,
  `any_information_name` text NOT NULL,
  `any_information_status` text NOT NULL,
  `any_information_content` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `any_informations`
--

INSERT INTO `any_informations` (`any_information_id`, `any_information_name`, `any_information_status`, `any_information_content`) VALUES
(1, 'Daftar Informasi Publik (DIP)', 'Tersedia', '<p>jajal 2 bro</p>\r\n'),
(2, ' Informasi tentang peraturan, keputusan dan/atau kebijakan Badan Publik', 'Tersedia', ''),
(3, ' Seluruh informasi lengkap yang wajib disediakan dan diumumkan secara berkala', 'Tersedia', ''),
(4, '4.1.Pedoman pengelolaan informasi, administrasi       personil dan keuangan', 'Tersedia', ''),
(5, '4.2.Profil pimpinan dan pegawai yang meliputi nama, sejarah karir atau posisi, sejara          pendidikan, penghargaan dan sanksi berat yang    pernah diterima', 'Tersedia', ''),
(6, ' 4.3.Anggaran Badan Publik secara umum maupun anggaran secara khusus unit         pelaksana teknis       serta laporan keuangan', 'Tersedia', ''),
(7, '4.4.Data statistic yang dibuat dan dikelola oleh  Badan Publik', 'Tersedia', ''),
(8, ' Surat surat perjanjian dengan pihak ketiga berikut dokumen pendukungnya', 'Tersedia', ''),
(9, ' Surat menyurat pimpinan atau pejabat Badan Publik dalam rangka pelaksanaan   tugas pokok dan fungsinya', 'Tersedia', ''),
(10, ' Syarat syarat perizinan, izin yang diterbitkan dan/atau dikeluarkan berikut  dokumen pendukungnya, dan laporan penaatan izin yang diberikan', 'Tersedia', ''),
(11, 'Data perbendaharaan atau inventaris', 'Tersedia', ''),
(12, ' Rencana strategis dan rencana kerja Badan Publik', 'Tersedia', ''),
(13, ' Agenda kerja pimpinan satuan kerja', 'Tersedia', ''),
(14, ' Informasi mengenai kegiatan pelayanan informasi public yang  dilaksanakan ,    sarana   dan   prasarana  layanan informasi public yang dimiliki bersetta kondisinya  , sumberdaya manusia yang menangani layanan informasi public beserta kualitasnya,   anggaran layanan informasi public serta laporan penggunaannya', ' Tersedia dalam  bentuk laporan  tahunan PPID  Dinas Kominfo Jati', ''),
(15, ' Jumlah jenis, dan gambaran umum pelanggaran yang ditemukan dalam pengawasan   internal serta laporan penindakannya', 'Kewenangan Inspekt', ''),
(16, ' Jumlah, jenis dan gambaran umum pelanggaran yang dilaporkan oleh masyarakat  serta laporan penindakannya', ' Kewenangan Insp', ''),
(17, ' Daftar serta hasil hasil penelitian yang dilakukan', 'Kewenangan Balit', ''),
(18, ' Informasi tentang standar pengumuman informasi sebagaimana dimaksud  dalam  pasal 12 bagi Badan Publik yang memberikan izin dan/atau melakukan perjanjian  kerja dengan pihak lain yang kegiatannya  berpotensi mengancam  hajat  hidup  orang banyak dan ketertiban umum', 'Tersedia', ''),
(19, ' Informasi dan kebijakan yang disampaikan pejabat public dalam pertemuan terbuka  untuk  umum', 'Tersedia', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `any_informations`
--
ALTER TABLE `any_informations`
  ADD PRIMARY KEY (`any_information_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `any_informations`
--
ALTER TABLE `any_informations`
  MODIFY `any_information_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
