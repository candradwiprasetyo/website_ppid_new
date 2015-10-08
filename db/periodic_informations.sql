-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2015 at 09:12 AM
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
-- Table structure for table `periodic_informations`
--

CREATE TABLE IF NOT EXISTS `periodic_informations` (
  `periodic_information_id` int(11) NOT NULL,
  `periodic_information_no` varchar(100) NOT NULL,
  `periodic_information_name` text NOT NULL,
  `periodic_information_content` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periodic_informations`
--

INSERT INTO `periodic_informations` (`periodic_information_id`, `periodic_information_no`, `periodic_information_name`, `periodic_information_content`) VALUES
(1, 'A', 'Informasi tentang kedudukan, domisili dan alamat lengkap', '<p>jajal tok bro</p>\r\n'),
(2, 'A', 'Struktur organisasi', ''),
(3, 'A', 'Gambaran umum', ''),
(4, 'A', 'Profile singkat pejabat', ''),
(5, 'A', 'Visi dan misi', ''),
(6, 'A', 'Tugas pokok dan fungsi', ''),
(7, 'A', ' Laporan harta kekayaan bagi pejabat Negara yang telah diperiksa, diverifikasi dan  telah dikirimkan', ''),
(8, 'B', 'Nama program dan kegiatan, penanggungjawab, pelaksana program dan kegiatan,  serta nomor telepon dan/alamat yang dapat dihubungi, target  dan/atau capaian program kegiatan, jadual pelaksanaan program dan kegiatan,  anggaran program dan kegiatan yang meliputi sumber dan jumlah. 	', ''),
(9, 'B', 'Agenda penting tekait pelaksanaan tugas Badan Publik', ''),
(10, 'B', 'Informasi khusus lainnya yang berkaitan langsung dengan hak hak masyaraakat', ''),
(11, 'B', 'Informasi tentang penerimaan calon pegawai dan/atau pejabat Badan Publik Negara', ''),
(12, 'B', 'Informasi tentang penerimaan calon peserta didik pada Badan Publik yang  menyelenggarakan pendidikan', ''),
(13, 'C', 'Ringkasan informasi tentang kinerja Badan Publik berupa narasi tentang realisasi  kegiatan yang tela', ''),
(14, 'D', 'Rencana Anggaran', ''),
(15, 'D', 'Realisasi anggaran', ''),
(16, 'D', 'Realisasi anggaran', ''),
(17, 'D', 'Laporan arus kas dan catatan atas laporan keuangan yang disusun sesuai  dengan standar akuntansi yan', ''),
(18, 'D', 'Daftar aset dan investasi', ''),
(19, 'E', 'Ringkasan laporan akses Informasi Publik', ''),
(20, 'F', 'Informasi tentang peraturan, keputusan, dan/atau kebijakan yang mengikat  dan/atau berdampak bagi publik yang dikeluarkan oleh Badan Publik', ''),
(21, 'G', 'Informasi tentang hak dan tata cara memperoleh informasi, serta tata cara  pengajuan keberatan dan proses penyelesaian sengketa', ''),
(22, 'H', 'Informasi tentang tata cara pengaduan penyalahgunaan wewenang atau  pelanggaran yang dilakukan baik oleh pejabat Badan Publik maupun pihak  yang mendapatkan izin atau perjanjian kerja dari Badan Publik yang bersangkutan', ''),
(23, 'I', 'Informasi tentang pengumuman pengadaan barang dan jasa sesuai dengan  peraturan perundang undangan yang terkait', ''),
(24, 'J', 'Informasi tentang prosedur peringatan dini dan prosedur evakuasi keadaan  darurat di setiap kantor Badan Publik', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `periodic_informations`
--
ALTER TABLE `periodic_informations`
  ADD PRIMARY KEY (`periodic_information_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `periodic_informations`
--
ALTER TABLE `periodic_informations`
  MODIFY `periodic_information_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
