-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 21, 2021 at 06:22 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `porto`
--

-- --------------------------------------------------------

--
-- Table structure for table `portoweb`
--

CREATE TABLE `portoweb` (
  `Nama` varchar(255) DEFAULT NULL,
  `Text` longtext,
  `Foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portoweb`
--

INSERT INTO `portoweb` (`Nama`, `Text`, `Foto`) VALUES
('Irhamsyah', 'Hai, perkenalkan saya Muhammad Irhamsyah ramadhan usia 20 tahun, saya adalah mahasiswa program studi informatika di Universitas Pembangunan Jaya.', 'image/irhams2-nbg.png'),
('Muhammad Irhamsyaha ramadhan', 'Selamat datang diweb portofolio saya...', 'image/kahim.jpg'),
('test', 'Saat ini saya menjabat sebagain Ketua himpunan Program Studi Informatika Universitas Pembangunan Jaya, Selain itu saya sangat tertarik dengan teknologi, automotive dan desain. Dan memiliki hobby photograpy.', 'image/bunga1.JPG'),
('TEXT1', 'Project-project ini adalah kumpulan dari beberapa tahun kebelakang, merupakan wujud dari ke isengan saya untuk mecoba-coba hal baru yang saya senangi.', './image/IG1.png'),
('Project Photograpy Instagram', 'Berikut adalah contoh foto-foto yang saya upload ke instagram. @sipenggunalensa_kit', './image/yutup.png'),
('Project Vidio Dokumenter Youtube', 'Youtube saya berisikan video-video dokumenter tentang acara atau keseharian saya.', './image/tingker.png'),
('Project Arduino', 'Project ini merupakan hasil dari pengembangan dari mata kuliah sistem tertanam.', './image/IG.png'),
('Instagram Account', 'Berikut ini adalah akun instagram portofolio photograpy yang bernama @sipenggunalensa_kit.', './image/linkin.png'),
('Linkedin Account', 'Berikut ini adalah akun linkedin untuk resume saya.', './image/github.png'),
('Github Account', 'Berikut ini adalah akun github untuk repositorie code yang telah saya buat.', './image/mail.png'),
('Gmail Account', 'Berikut adalah email yang saya : Rama.irhamsyah@gmail.com', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
