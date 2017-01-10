-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2017 at 02:50 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dapatbuku_db`
--


-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `pict` varchar(512) DEFAULT NULL,
  `link` varchar(512) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `pict`, `link`, `created_at`, `active`) VALUES
(1, 'a', 'a', '2017-01-08 12:15:27', 0),
(2, 'a', 'a', '2017-01-08 12:20:52', 0),
(3, 'banner_2.png', 'aa', '2017-01-08 12:49:39', 0),
(4, '1.png', 'gonaked', '2017-01-08 12:51:23', 1),
(5, '1.jpg', 'aaa', '2017-01-08 13:12:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id_b` int(11) NOT NULL,
  `title_b` varchar(200) NOT NULL,
  `slug_title_b` varchar(200) DEFAULT NULL COMMENT 'slug for link',
  `no_isbn_b` varchar(20) DEFAULT NULL,
  `writer` varchar(128) DEFAULT NULL,
  `publisher` varchar(128) DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `date_published` date DEFAULT NULL,
  `language_b` varchar(50) DEFAULT NULL,
  `thumb_cover_b` varchar(200) DEFAULT NULL COMMENT 'thumbnail versi kecil dari foto cover',
  `photo_cover_b` varchar(200) DEFAULT NULL COMMENT 'alamat photo',
  `cover_type_b` varchar(50) DEFAULT NULL COMMENT 'tipe cover',
  `description_b` longtext COMMENT 'sinopsis',
  `total_reviews_b` int(11) DEFAULT '0',
  `total_ratings` int(11) DEFAULT '0',
  `best_seller_flag` int(2) DEFAULT '0' COMMENT 'flag best seller',
  `best_seller_rank` int(3) DEFAULT NULL,
  `tags` text,
  `views_b` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id_b`, `title_b`, `slug_title_b`, `no_isbn_b`, `writer`, `publisher`, `pages`, `date_published`, `language_b`, `thumb_cover_b`, `photo_cover_b`, `cover_type_b`, `description_b`, `total_reviews_b`, `total_ratings`, `best_seller_flag`, `best_seller_rank`, `tags`, `views_b`) VALUES
(1, 'Quantum Ikhlas', 'quantum-ikhlas', NULL, 'Erbe Sentanu', 'Elex Media Komputindo', 290, '2007-10-01', 'Indonesia', NULL, '', '', '', 0, 0, 1, 1, 'kuantum, ikhlas, agama, islam, jujur', 0),
(2, 'Kenali Ragam Kepribafian Yang disukai dan Dibenci', 'kenali-ragam-kepribafian-yang-disukai-dan-dibenci', NULL, 'Naylil Moena', 'DIVA', 0, '2011-11-01', 'Indonesia', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(3, 'Terapi Kejujuran', 'terapi-kejujuran', NULL, 'Yanuardi Syukur', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 4),
(4, 'Jurus Jitu Mengelola Amarah', 'jurus-jitu-mengelola-amarah', NULL, 'Harrista Adiati', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(5, 'Analisis Tulisan Tangan', 'analisis-tulisan-tangan', NULL, 'Bayu Ludvianto', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(6, 'Sepatu Dahlan', 'sepatu-dahlan', NULL, 'Khrisna Pabichara', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(7, 'Si Cacing dan Kotoran Kesayangannya', 'si-cacing-dan-kotoran-kesayangannya', NULL, 'Ajahn Brahm', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(8, 'Si Cacing dan Kotoran Kesayangannya 2', 'si-cacing-dan-kotoran-kesayangannya-2', NULL, 'Ajahn Brahm', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(9, 'Si Cacing dan Kotoran Kesayangannya 3', 'si-cacing-dan-kotoran-kesayangannya-3', NULL, 'Ajahn Brahm', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(10, 'Cara Mutakhir Jago Desain Logo', 'cara-mutakhir-jago-desain-logo', NULL, 'Ferri Caniago', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 1, 2, '', 0),
(11, '99 Ideas for Happy Teens', '99-ideas-for-happy-teens', NULL, 'Deny Riana', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(12, 'Benabook', 'benabook', NULL, 'Benazio Rizky', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(13, 'Ngenest', 'ngenest', NULL, 'Ernest Prakasa', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(14, 'Ngenest 2', 'ngenest-2', NULL, 'Ernest Prakasa', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(15, 'Ngenest 3', 'ngenest-3', NULL, 'Ernest Prakasa', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(16, 'First Time In Beijing', 'first-time-in-beijing', NULL, 'Riawani Elyta', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(17, 'Kwaidan', 'kwaidan', NULL, 'Koizumi Yakumo', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(18, 'Heart Emergency', 'heart-emergency', NULL, 'Falla Adinda', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(19, 'Hore Guru Si Cacing Datang', 'hore-guru-si-cacing-datang', NULL, 'Ajahn Brahm', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(20, 'Daun yang Jatuh Tak Pernah Membenci Angin', 'daun-yang-jatuh-tak-pernah-membenci-angin', NULL, 'Tere Liye', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 1, NULL, '', 0),
(21, 'Habibie & Ainun', 'habibie-ainun', NULL, 'B.J. Habibie', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 1, NULL, '', 0),
(22, '101 Creative Notes', '101-creative-notes', NULL, 'Yoris Sebastians', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 1, NULL, '', 0),
(23, 'Managing People', 'managing-people', NULL, 'A.M. Lilik Agung', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 1, 5, '', 0),
(24, 'It''s My Startup', 'it-s-my-startup', NULL, 'Lahandi Baskoro', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 1, 6, '', 0),
(25, '100 Kecerdasan Setan', '100-kecerdasan-setan', NULL, 'Wiwid Prasetyo', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 1, 7, '', 0),
(26, '60 Inovasi Pilihan Kompas', '60-inovasi-pilihan-kompas', NULL, 'Nawa Tunggal', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 1, NULL, '', 0),
(27, 'Yakuza Moon', 'yakuza-moon', NULL, 'Shoko Tendo', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 1, NULL, '', 0),
(28, 'Fat Bulous', 'fat-bulous', NULL, 'Fidriwida', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 1, 9, '', 0),
(29, 'Kitab Anti Bangkrut', 'kitab-anti-bangkrut', NULL, 'Jaya Setiabudi', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 1, 8, '', 0),
(30, 'Young On Top Campus Ambassador', 'young-on-top-campus-ambassador', NULL, 'Youn On Top', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(31, 'The 5 Level of Leadership', 'the-5-level-of-leadership', NULL, 'John C Maxwell', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 1, 10, '', 1),
(32, 'Kun Fayakuun', 'kun-fayakuun', NULL, 'M. Arifin Ilham', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(33, '50 Ritual Pagi Miliarder Sedunia', '50-ritual-pagi-miliarder-sedunia', NULL, 'Budi Safa''at', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(34, 'Secangkir Kopi Tanpa Kafein', 'secangkir-kopi-tanpa-kafein', NULL, 'Rose Kusumaning R', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(35, 'Kamus Istilah Komentator Bola', 'kamus-istilah-komentator-bola', NULL, 'Mice Cartoon', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(36, 'Buka Langsung Laris', 'buka-langsung-laris', NULL, 'Jaya Setiabudi', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(37, 'Ken & Kaskus Cerita Sukses di Usia Muda', 'ken-kaskus-cerita-sukses-di-usia-muda', NULL, 'Alberthiene Endah', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(38, 'Total Habibie', 'total-habibie', NULL, 'A. Makmur Makka', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(39, 'Bertambah Bijak Setiap Hari 8 x 3 = 23', 'bertambah-bijak-setiap-hari-8-x-3-23', NULL, 'Budi S Tanuwibowo', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(40, 'Alex Ferguson Autobiografi Saya', 'alex-ferguson-autobiografi-saya', NULL, 'Alex Ferguson', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(41, 'Surat Dahlan', 'surat-dahlan', NULL, 'Khrisna Pabichara', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(42, 'Top Words 2', 'top-words-2', NULL, 'Billy Boen', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(43, 'Sholat Tahajjud Khusus Para Pebisnis', 'sholat-tahajjud-khusus-para-pebisnis', NULL, 'Sitiatava Rizema Putra', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(44, 'Positive Thinking Itu Dipraktekin', 'positive-thinking-itu-dipraktekin', NULL, 'Tim Wesfix', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(45, 'Dosa-Dosa Besar Yang Telah Dianggap Biasa Dalam Keseharian Kita', 'dosa-dosa-besar-yang-telah-dianggap-biasa-dalam-keseharian-kita', NULL, 'Naylil Moena', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(46, 'Seni Bertengkar Suami Istri Untuk Mengharmoniskan Rumah Tangga', 'seni-bertengkar-suami-istri-untuk-mengharmoniskan-rumah-tangga', NULL, 'Naylil Moena', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(47, 'Buat Suami Bertekuk Lutut di Hadapan Istri', 'buat-suami-bertekuk-lutut-di-hadapan-istri', NULL, 'Naylil Moena', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(48, 'The Miracle Of Sabar', 'the-miracle-of-sabar', NULL, 'Yanuardi Syukur', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(49, 'Mukjizat Gerakan Shalat', 'mukjizat-gerakan-shalat', NULL, 'Yanuardi Syukur', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(50, 'Presiden Mursi (Kisah Ketakutan Dunia Pada Kekuatan Ikhwanul Muslimin)', 'presiden-mursi-kisah-ketakutan-dunia-pada-kekuatan-ikhwanul-muslimin-', NULL, 'Yanuardi Syukur', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(51, 'Kekuatan Memaafkan', 'kekuatan-memaafkan', NULL, 'Yanuardi Syukur', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(52, 'Ternyata Sayap Lalat Mengandung Obat', 'ternyata-sayap-lalat-mengandung-obat', NULL, 'Yanuardi Syukur', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(53, 'Facebook Sebelah Surga Sebelah Neraka', 'facebook-sebelah-surga-sebelah-neraka', NULL, 'Yanuardi Syukur', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(54, 'Kindfulness', 'kindfulness', NULL, 'Ajahn Brahm', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(55, 'I Love Mediation', 'i-love-mediation', NULL, 'Ajahn Brahm', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(56, 'Hello Happiness', 'hello-happiness', NULL, 'Ajahn Brahm', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(57, 'Dont Worry Be Hopey', 'dont-worry-be-hopey', NULL, 'Ajahn Brahm', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(58, 'Hidup Senang Mati Tenang', 'hidup-senang-mati-tenang', NULL, 'Ajahn Brahm', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(59, 'Membuka Pintu Hati', 'membuka-pintu-hati', NULL, 'Ajahn Brahm', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(60, 'Superpower Mindfulness', 'superpower-mindfulness', NULL, 'Ajahn Brahm', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(61, 'Antologi Cinta', 'antologi-cinta', NULL, 'Khrisna Pabhicara', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(62, 'Kamus Nama Indah Islami', 'kamus-nama-indah-islami', NULL, 'Khrisna Pabhicara', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(63, 'Gadis Pakarena', 'gadis-pakarena', NULL, 'Khrisna Pabhicara', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(64, '10 Rahasia Pembelajar Kreatif', '10-rahasia-pembelajar-kreatif', NULL, 'Khrisna Pabhicara', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(65, 'Mengawini Ibu Senarai Kisah Yang Menggetarkan', 'mengawini-ibu-senarai-kisah-yang-menggetarkan', NULL, 'Khrisna Pabhicara', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(66, 'Kisah Pengantar Tidur Dari Al Quran Untuk Buah Hati', 'kisah-pengantar-tidur-dari-al-quran-untuk-buah-hati', NULL, 'Adrian R. Nugraha, Deny Riana', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(67, 'Cerita-Cerita Al Qur''an Menakjubkan', 'cerita-cerita-al-qur-an-menakjubkan', NULL, 'Adrian R. Nugraha, Deny Riana ', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(68, 'Menjadi Isteri yang Layak Dicintai', 'menjadi-isteri-yang-layak-dicintai', NULL, 'Uken Junaedi, Deny Riana ', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(69, 'Refresh Your Life', 'refresh-your-life', NULL, 'Deny Riana', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(70, 'Chicken Soup Tumpah', 'chicken-soup-tumpah', NULL, 'Nur Novilina', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(71, 'Ayah', 'ayah', NULL, 'Andrea Hirata', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(72, 'Edensor', 'edensor', NULL, 'Andrea Hirata', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(73, 'Laskar Pelangi', 'laskar-pelangi', NULL, 'Andrea Hirata', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(74, 'Sang Pemimpi', 'sang-pemimpi', NULL, 'Andrea Hirata', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(75, 'Maryamah Karpov', 'maryamah-karpov', NULL, 'Andrea Hirata', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(76, 'Sebelas Patriot', 'sebelas-patriot', NULL, 'Andrea Hirata', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(77, 'Padang Bulan', 'padang-bulan', NULL, 'Andrea Hirata', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(78, 'Cinta di Dalam Gelas', 'cinta-di-dalam-gelas', NULL, 'Andrea Hirata', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(79, 'Primbon Mantra Uang', 'primbon-mantra-uang', NULL, 'Aldian Prakoso ', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(80, 'Mobile Mantra Uang', 'mobile-mantra-uang', NULL, 'Aldian Prakoso ', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(81, 'Mantra Uang dari WordPress Blog', 'mantra-uang-dari-wordpress-blog', NULL, 'Aldian Prakoso ', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(82, 'Mantra Uang dari WordPress Blog 2.0', 'mantra-uang-dari-wordpress-blog-2-0', NULL, 'Aldian Prakoso ', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(83, 'The Bridesmaids Tale', 'the-bridesmaids-tale', NULL, 'Fala Amalina @Kaleela', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(84, 'Top Words', 'top-words', NULL, 'Billy Boen', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(85, 'Young On Top', 'young-on-top', NULL, 'Billy Boen', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(86, 'Young On Top New Edition', 'young-on-top-new-edition', NULL, 'Billy Boen', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(87, 'Air Mata Nayla', 'air-mata-nayla', NULL, 'Muhammad Ardiansha El Zemani', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(89, 'Beruntungnya Si Bahlul', 'beruntungnya-si-bahlul', NULL, 'Yoyok Dwi Prastyo', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(90, 'Mengapa Si Penjudi Masuk Surga Sedangkan Si Sufi Masuk Neraka?', 'mengapa-si-penjudi-masuk-surga-sedangkan-si-sufi-masuk-neraka-', NULL, 'Yoyok Dwi Prastyo', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 1, 3, '', 0),
(91, 'Relationshit', 'relationshit', NULL, 'Alit Susanto', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(92, 'Kancut Keblenger: Digital Love', 'kancut-keblenger-digital-love', NULL, 'Alit Susanto, Irvina Lioni, Anggi Tristiyono', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(93, 'Gado-Gado Kualat', 'gado-gado-kualat', NULL, 'Alit Susanto', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(94, 'Skripshit', 'skripshit', NULL, 'Alit Susanto', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(95, 'My Other Half', 'my-other-half', NULL, 'Cyndi Dianing Ratri', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(96, 'Pada Senja Yang Membawamu Pergi', 'pada-senja-yang-membawamu-pergi', NULL, 'Boy Candra', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(97, 'Sebuah Usaha Melupakan', 'sebuah-usaha-melupakan', NULL, 'Boy Candra', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(98, 'Seperti Hujan Yang Jatuh Ke Bumi', 'seperti-hujan-yang-jatuh-ke-bumi', NULL, 'Boy Candra', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(99, 'Setelah Hujan Reda', 'setelah-hujan-reda', NULL, 'Boy Candra', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(100, 'Kuajak Kau ke Hutan dan Tersesat Berdua', 'kuajak-kau-ke-hutan-dan-tersesat-berdua', NULL, 'Boy Candra', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(101, 'Surat Kecil Untuk Ayah', 'surat-kecil-untuk-ayah', NULL, 'Boy Candra', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(102, 'Satu Hari di 2018', 'satu-hari-di-2018', NULL, 'Boy Candra', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(103, 'Sepasang Kekasih yang Belum Bertemu', 'sepasang-kekasih-yang-belum-bertemu', NULL, 'Boy Candra', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(104, 'Senja, Hujan, Dan Cerita Yang Telah Usai', 'senja-hujan-dan-cerita-yang-telah-usai', NULL, 'Boy Candra', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(105, 'Catatan Pendek untuk Cinta yang Panjang', 'catatan-pendek-untuk-cinta-yang-panjang', NULL, 'Boy Candra', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(106, 'Origami Hati', 'origami-hati', NULL, 'Boy Candra', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(107, 'Ketika Ibu telah Tiada', 'ketika-ibu-telah-tiada', NULL, '', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(108, 'Meneladani Semut dan Lebah', 'meneladani-semut-dan-lebah', NULL, 'Thoriq Aziz Jayana', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(109, 'Karyawan Harus Nabung Biar Makmur', 'karyawan-harus-nabung-biar-makmur', NULL, 'Safir Senduk', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(110, 'Seri Perencanaan Keuangan Keluarga: Mencari Penghasilan Tambahan', 'seri-perencanaan-keuangan-keluarga-mencari-penghasilan-tambahan', NULL, 'Safir Senduk', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(111, 'Seri Perencanaan Keuangan Keluarga: Mengantisipasi Resiko', 'seri-perencanaan-keuangan-keluarga-mengantisipasi-resiko', NULL, 'Safir Senduk ', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(112, 'Siapa Bilang Jadi Karyawan Nggak Bisa Kaya', 'siapa-bilang-jadi-karyawan-nggak-bisa-kaya', NULL, 'Safir Senduk', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(113, 'Seri Kiat Praktis Perencanaan Keuangan: "Buka Usaha Nggak Kaya? Percuma"', 'seri-kiat-praktis-perencanaan-keuangan-buka-usaha-nggak-kaya-percuma-', NULL, 'Safir Senduk', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(114, 'Seri Perencanaan Keuangan Keluarga: Mengatur Pengeluaran Secara Bijak', 'seri-perencanaan-keuangan-keluarga-mengatur-pengeluaran-secara-bijak', NULL, 'Safir Senduk', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(115, 'Seri Perencanaan Keuangan Keluarga: Mengelola Keuangan Keluarga', 'seri-perencanaan-keuangan-keluarga-mengelola-keuangan-keluarga', NULL, 'Safir Senduk', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(116, 'Seri Perencanaan Keuangan Keluarga: Mempersiapkan Dana Pendidikan Anak', 'seri-perencanaan-keuangan-keluarga-mempersiapkan-dana-pendidikan-anak', NULL, 'Safir Senduk', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(117, 'Seri Perencanaan Keuangan Keluarga: Merancang Program Pensiun', 'seri-perencanaan-keuangan-keluarga-merancang-program-pensiun', NULL, 'Safir Senduk', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(118, 'Buka Usaha Gak Kaya, Percuma!', 'buka-usaha-gak-kaya-percuma-', NULL, 'Safir Senduk', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(119, 'Memasuki Era BUMN Multinational Coorporation', 'memasuki-era-bumn-multinational-coorporation', NULL, 'Dahlan Iskan', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(120, 'Tidak ada yang tidak bisa', 'tidak-ada-yang-tidak-bisa', NULL, 'Dahlan Iskan', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(121, 'Manufacturing Hope: Bisa !', 'manufacturing-hope-bisa-', NULL, 'Dahlan Iskan', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(122, 'Ganti Hati', 'ganti-hati', NULL, 'Dahlan Iskan', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(123, 'Karmaka Surjandaja: No Such Thing as Can''t', 'karmaka-surjandaja-no-such-thing-as-can-t', NULL, 'Dahlan Iskan', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(124, 'Manufacturing Hope Series: Oleh-oleh dari Kantor BUMN', 'manufacturing-hope-series-oleh-oleh-dari-kantor-bumn', NULL, 'Dahlan Iskan', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(125, 'Dua Tangis dan Ribuan Tawa', 'dua-tangis-dan-ribuan-tawa', NULL, 'Dahlan Iskan', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(126, 'Smart Way to Get A Job', 'smart-way-to-get-a-job', NULL, 'Rahmat Kurniawan ', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(127, 'Menjadi Tambah Kaya dan Terencana dengan Reksa Dana', 'menjadi-tambah-kaya-dan-terencana-dengan-reksa-dana', NULL, 'Ryan Filbert Wijaya', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(128, 'I''m Motivator: Kisah Inspiratif Motivator Indonesia', 'i-m-motivator-kisah-inspiratif-motivator-indonesia', NULL, 'Ongky Hojanto', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(129, 'The Art of Being Brilliant: Memaksimalkan Bagian Terbaik Diri Kita', 'the-art-of-being-brilliant-memaksimalkan-bagian-terbaik-diri-kita', NULL, 'Andy Cope, Andy Whittaker ', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(130, 'Baper Bawa Perubahan', 'baper-bawa-perubahan', NULL, 'Rhenald Kasali', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(131, 'Miracles on Demand', 'miracles-on-demand', NULL, 'Adi W. Gunawan', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(132, 'Spirit Of Life, 25 Inspirasi dan Motivasi Penggugah Jiwa', 'spirit-of-life-25-inspirasi-dan-motivasi-penggugah-jiwa', NULL, 'Muhammad Syah Fibrika Ramadhan', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(133, 'Direktur Berkata', 'direktur-berkata', NULL, 'Jung Min Woo', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(134, '33 Cara Kaya Ala Bob Sadino Motivasi Bisnis Anti-gagal', '33-cara-kaya-ala-bob-sadino-motivasi-bisnis-anti-gagal', NULL, 'Asterlita SV', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(135, 'The Achievement Habit Berhenti Berharap, Mulai Lakukan, Dan Ambil Kendali Hidup Anda', 'the-achievement-habit-berhenti-berharap-mulai-lakukan-dan-ambil-kendali-hidup-anda', NULL, 'Bernard Roth', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(136, 'Merry Riana - Campus Ambassadors', 'merry-riana---campus-ambassadors', NULL, 'Shandy Tan', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(137, 'Cinta Tanpa Cerita', 'cinta-tanpa-cerita', NULL, '@infiniteloved', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(138, '7 Tokoh Dunia Yang Pernah Kami Temui & Rahasia-Rahasia Mereka', '7-tokoh-dunia-yang-pernah-kami-temui-rahasia-rahasia-mereka', NULL, 'Ippho D. Santosa, Imam Shamsi Ali', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(139, 'Burung Besi Monika', 'burung-besi-monika', NULL, 'Monika Anggreini', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(140, 'Jangan Grogi! Jurus Sukses Mengikuti', 'jangan-grogi-jurus-sukses-mengikuti', NULL, 'Wishnu Soehardjo', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(141, 'Ini Buku Kamu', 'ini-buku-kamu', NULL, 'Dedy Dahlan', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 1, 4, '', 0),
(142, 'Sukses di Usia Muda, Harga Mati!', 'sukses-di-usia-muda-harga-mati-', NULL, 'Ustadz Ahmad zahrudin M. Nafis', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(143, 'Maximus Dan Gladiator Papua, Freeport''s Untold Story', 'maximus-dan-gladiator-papua-freeport-s-untold-story', NULL, 'MAXIMUS TIPAGAU', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(144, '6 Rahasia Sederhana Menjadi Remaja Bahagia', '6-rahasia-sederhana-menjadi-remaja-bahagia', NULL, 'Guntur Alam', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(145, 'Mind Map Langkah Demi Langkah', 'mind-map-langkah-demi-langkah', NULL, 'Sutanto Windura', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(146, 'Be An Absolute', 'be-an-absolute', NULL, 'Sutanto Windura', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(147, 'Kekuatan Menerima Diri Apa Adanya', 'kekuatan-menerima-diri-apa-adanya', NULL, 'Brene Brown', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(148, 'WARRIOR The Art of Winning the Battle of Success', 'warrior-the-art-of-winning-the-battle-of-success', NULL, 'Darmadi Darmawangsa, Davit Setiawan', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(149, 'Pengangguran Kaya Raya', 'pengangguran-kaya-raya', NULL, 'WILDAN FATONI', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(150, 'Teknik Menghilangkan Stres dari Otak', 'teknik-menghilangkan-stres-dari-otak', NULL, 'Hideho Arita', '', 0, '0000-00-00', '', NULL, '', '', '', 0, 0, 0, NULL, '', 0),
(165, 'Thanos Book', 'thanos-book', '1234566678', 'thanos', 'thanos', 12, '0000-00-00', 'indonesia', './assets/img/book/151/thumb_151.jpg', './assets/img/book/151/cover_151.jpg', 'soft', 'asd', 0, 0, 0, NULL, '', 4),
(169, 'Thanosss', 'thanosss', '123133131322', 'thanosss', '123', 123, '0000-00-00', 'indonesia', './assets/img/book/170/cover_170_thumb.jpg', './assets/img/book/170/cover_170.jpg', 'soft', ' ', 0, 0, 0, NULL, '123', 3),
(175, 'Spidermana darkseid', 'spiderman-peter', '12341', 'peter', 'peter', 123, '0000-00-00', 'indonesia', '.', '.', 'soft', '      aaa', 0, 0, 0, NULL, '12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `id_b_category` int(11) NOT NULL,
  `name_b_category` varchar(100) NOT NULL,
  `desc_b_category` text,
  `slug_category` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`id_b_category`, `name_b_category`, `desc_b_category`, `slug_category`) VALUES
(1, 'Bisnis', 'Bisnis adalah usaha menjual barang atau jasa yang dilakukan oleh perorangan, sekelompok orang atau organisasi kepada konsumen (masyarakat) dengan tujuan utamanya adalah memperoleh keuntungan/laba (profit). Pada dasarnya, kita melakukan bisnis adalah untuk memperoleh laba atau keuntungan ', 'bisnis'),
(2, 'Agama', NULL, 'agama'),
(3, 'Hukum', NULL, 'hukum'),
(4, 'Novel', NULL, 'novel');

-- --------------------------------------------------------

--
-- Table structure for table `book_category_connector`
--

CREATE TABLE `book_category_connector` (
  `id_bcc` int(15) NOT NULL,
  `book_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_category_connector`
--

INSERT INTO `book_category_connector` (`id_bcc`, `book_id`, `cat_id`) VALUES
(1, 4, 1),
(2, 4, 2),
(3, 4, 3),
(4, 5, 1),
(5, 5, 2),
(6, 5, 3),
(7, 7, 1),
(8, 7, 2),
(9, 8, 1),
(10, 8, 2),
(11, 9, 1),
(12, 9, 2),
(13, 10, 4),
(14, 11, 4),
(15, 12, 1),
(16, 12, 2),
(17, 13, 1),
(18, 13, 2),
(19, 14, 1),
(20, 14, 2),
(21, 151, 2),
(22, 151, 3),
(23, 152, 2),
(24, 163, 3),
(25, 165, 3),
(26, 165, 4),
(27, 166, 2),
(28, 168, 2),
(30, 169, 2),
(31, 170, 2),
(47, 175, 2);

-- --------------------------------------------------------

--
-- Table structure for table `book_rating`
--

CREATE TABLE `book_rating` (
  `id_b_rating` int(11) NOT NULL,
  `date_rating` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rating` int(11) NOT NULL,
  `id_u` int(11) DEFAULT NULL,
  `id_b` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_request`
--

CREATE TABLE `book_request` (
  `id_br` int(11) NOT NULL,
  `title_br` varchar(256) NOT NULL,
  `category_br` varchar(100) NOT NULL,
  `author_br` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_request`
--

INSERT INTO `book_request` (`id_br`, `title_br`, `category_br`, `author_br`) VALUES
(1, 'Jalani aja', 'aca', 'caaa'),
(2, 'Jajajaja', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `book_review`
--

CREATE TABLE `book_review` (
  `id_b_review` int(11) NOT NULL,
  `title_b_review` varchar(50) NOT NULL,
  `content_b_review` varchar(300) NOT NULL,
  `id_u` int(11) DEFAULT NULL,
  `id_b` int(11) DEFAULT NULL,
  `date_b_review` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `total_like` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_review`
--

INSERT INTO `book_review` (`id_b_review`, `title_b_review`, `content_b_review`, `id_u`, `id_b`, `date_b_review`, `total_like`) VALUES
(16, 'Mau Nulis Ulasan', 'ini ulasanku lo bagus kann', 4, NULL, '2016-11-07 18:54:04', 0),
(17, 'Judul', 'Banana', 4, NULL, '2017-01-05 04:34:18', 0),
(18, 'Judul', 'Banana', 4, NULL, '2017-01-05 04:34:26', 0),
(19, 'banana', 'bananaboat asik sekali katanya sih gitu wajaaja', 52, NULL, '2017-01-09 14:03:58', 0);

-- --------------------------------------------------------

--
-- Table structure for table `book_review_like`
--

CREATE TABLE `book_review_like` (
  `id_b_review_like` int(11) NOT NULL,
  `id_b_review` int(11) NOT NULL,
  `point` int(11) NOT NULL DEFAULT '0',
  `id_u` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_status`
--

CREATE TABLE `book_status` (
  `id_b_status` int(11) NOT NULL,
  `name_b_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_type`
--

CREATE TABLE `book_type` (
  `id_b_type` int(11) NOT NULL,
  `name_b_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_type`
--

INSERT INTO `book_type` (`id_b_type`, `name_b_type`) VALUES
(1, 'Baru'),
(2, 'Bekas');

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id_messages` int(18) NOT NULL,
  `chat_room_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `message` varchar(512) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `read_status` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_messages`
--

INSERT INTO `chat_messages` (`id_messages`, `chat_room_id`, `user_id`, `message`, `created_at`, `read_status`) VALUES
(1, 2, 4, 'woiwoi', '2016-11-05 22:00:00', 0),
(2, 2, 4, 'qweqeqe', '2016-11-05 23:00:00', 0),
(3, 2, 1, 'hmmm', '2016-11-06 03:46:36', 1),
(4, 1, 4, 'Coba ini gimana sih', '2016-11-06 03:55:45', 1),
(5, 2, 4, 'asd', '2016-11-06 05:12:56', 0),
(6, 2, 4, 'halo gan', '2016-11-06 05:13:56', 0),
(7, 2, 4, 'halo gan', '2016-11-06 05:14:28', 0),
(8, 2, 4, 'coba ini', '2016-11-06 05:14:44', 0),
(9, 1, 4, 'halo kev', '2016-11-06 05:14:56', 1),
(10, 1, 3, 'halo dum', '2016-11-06 05:44:12', 1),
(11, 1, 4, 'halo kev', '2016-11-06 05:44:41', 1),
(12, 1, 3, 'baahahha', '2016-11-06 05:44:46', 1),
(13, 3, 3, 'woi', '2016-11-06 06:16:07', 0),
(14, 4, 3, 'woiii', '2016-11-06 06:16:48', 1),
(15, 5, 3, 'aaww', '2016-11-06 06:17:13', 1),
(16, 6, 4, 'hai kev', '2016-11-06 06:19:40', 0),
(17, 1, 3, 'hai dummy ~', '2016-11-06 09:08:44', 1),
(18, 1, 3, 'this is totally new chat', '2016-11-06 09:08:51', 1),
(19, 1, 3, 'sooo read this', '2016-11-06 09:10:40', 1),
(20, 1, 4, 'hei kev\r\nkamu ganteng sekali', '2016-11-06 09:12:07', 1),
(21, 1, 3, 'COBA', '2016-11-06 09:15:12', 1),
(22, 4, 3, 'helo kevin im kev too', '2016-11-06 09:15:24', 0),
(23, 1, 4, 'helo kev', '2016-11-21 02:10:05', 0),
(24, 7, 4, 'hello harlan', '2016-11-21 02:10:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat_room`
--

CREATE TABLE `chat_room` (
  `id_cr` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `last_active` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_1` int(11) DEFAULT NULL,
  `user_2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_room`
--

INSERT INTO `chat_room` (`id_cr`, `created_at`, `last_active`, `user_1`, `user_2`) VALUES
(1, '2016-11-06', '2016-11-21 02:10:05', 3, 4),
(2, '2016-11-06', '2016-11-05 17:00:00', 4, 1),
(4, '2016-11-06', '2016-11-06 09:15:24', 2, 3),
(5, '2016-11-06', '2016-11-06 06:17:03', 1, 3),
(6, '2016-11-06', '2016-11-06 06:19:37', 2, 4),
(7, '2016-11-21', '2016-11-21 02:10:40', 47, 4),
(8, '2016-11-21', '2016-11-21 02:11:44', 1, 47);

-- --------------------------------------------------------

--
-- Table structure for table `log_visit`
--

CREATE TABLE `log_visit` (
  `id_lv` int(11) NOT NULL,
  `user_id_lv` int(24) NOT NULL,
  `jenis_lv` varchar(100) NOT NULL,
  `id_halaman_lv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_visit`
--

INSERT INTO `log_visit` (`id_lv`, `user_id_lv`, `jenis_lv`, `id_halaman_lv`) VALUES
(1, 0, 'home', 0),
(2, 0, 'home', 0),
(3, 0, 'home', 0),
(4, 0, 'home', 0),
(5, 0, 'home', 0),
(6, 0, 'home', 0),
(7, 0, 'home', 0),
(8, 0, 'home', 0),
(9, 0, 'home', 0),
(10, 0, 'home', 0),
(11, 0, 'home', 0),
(12, 0, 'home', 0),
(13, 0, 'home', 0),
(14, 0, 'home', 0),
(15, 0, 'home', 0),
(16, 0, 'book', 21),
(17, 0, 'home', 0),
(18, 0, 'home', 0),
(19, 0, 'home', 0),
(20, 0, 'home', 0),
(21, 0, 'home', 0),
(22, 0, 'home', 0),
(23, 0, 'home', 0),
(24, 0, 'home', 0),
(25, 0, 'home', 0),
(26, 0, 'home', 0),
(27, 0, 'home', 0),
(28, 0, 'home', 0),
(29, 0, 'home', 0),
(30, 0, 'home', 0),
(31, 0, 'home', 0),
(32, 0, 'home', 0),
(33, 0, 'home', 0),
(34, 0, 'book', 1),
(35, 0, 'home', 0),
(36, 0, 'home', 0),
(37, 0, 'home', 0),
(38, 0, 'book', 1),
(39, 0, 'home', 0),
(40, 0, 'book', 1),
(41, 0, 'home', 0),
(42, 0, 'book', 1),
(43, 0, 'home', 0),
(44, 0, 'home', 0),
(45, 0, 'home', 0),
(46, 0, 'home', 0),
(47, 0, 'profile', 53),
(48, 0, 'home', 0),
(49, 0, 'home', 0),
(50, 0, 'product', 45),
(51, 0, 'home', 0),
(52, 0, 'product', 45),
(53, 0, 'home', 0),
(54, 0, 'product', 45),
(55, 0, 'home', 0),
(56, 0, 'product', 45),
(57, 0, 'home', 0),
(58, 0, 'product', 45),
(59, 0, 'home', 0),
(60, 0, 'book', 13),
(61, 0, 'home', 0),
(62, 0, 'book', 13),
(63, 0, 'home', 0),
(64, 0, 'home', 0),
(65, 0, 'home', 0),
(66, 0, 'home', 0),
(67, 0, 'home', 0),
(68, 0, 'home', 0),
(69, 0, 'home', 0),
(70, 0, 'home', 0),
(71, 0, 'home', 0),
(72, 0, 'home', 0),
(73, 0, 'home', 0),
(74, 0, 'home', 0),
(75, 0, 'home', 0),
(76, 0, 'home', 0),
(77, 0, 'home', 0),
(78, 0, 'home', 0),
(79, 0, 'home', 0),
(80, 0, 'home', 0),
(81, 0, 'home', 0),
(82, 0, 'home', 0),
(83, 0, 'home', 0),
(84, 0, 'home', 0),
(85, 0, 'home', 0),
(86, 0, 'home', 0),
(87, 0, 'home', 0),
(88, 0, 'home', 0),
(89, 0, 'home', 0),
(90, 0, 'home', 0),
(91, 0, 'home', 0),
(92, 0, 'home', 0),
(93, 0, 'home', 0),
(94, 0, 'home', 0),
(95, 0, 'home', 0),
(96, 0, 'home', 0),
(97, 0, 'home', 0),
(98, 0, 'home', 0),
(99, 0, 'home', 0),
(100, 0, 'home', 0),
(101, 0, 'home', 0),
(102, 0, 'home', 0),
(103, 0, 'home', 0),
(104, 0, 'home', 0),
(105, 0, 'home', 0),
(106, 0, 'home', 0),
(107, 0, 'home', 0),
(108, 0, 'home', 0),
(109, 0, 'home', 0),
(110, 0, 'home', 0),
(111, 0, 'home', 0),
(112, 0, 'home', 0),
(113, 0, 'home', 0),
(114, 0, 'home', 0),
(115, 0, 'home', 0),
(116, 0, 'product', 46),
(117, 0, 'home', 0),
(118, 0, 'home', 0),
(119, 0, 'home', 0),
(120, 0, 'home', 0),
(121, 0, 'home', 0),
(122, 0, 'home', 0),
(123, 0, 'home', 0),
(124, 0, 'home', 0),
(125, 0, 'home', 0),
(126, 0, 'home', 0),
(127, 0, 'home', 0),
(128, 0, 'home', 0),
(129, 0, 'home', 0),
(130, 0, 'home', 0),
(131, 0, 'home', 0),
(132, 0, 'home', 0),
(133, 0, 'home', 0),
(134, 0, 'home', 0),
(135, 0, 'home', 0),
(136, 0, 'home', 0),
(137, 0, 'home', 0),
(138, 0, 'home', 0),
(139, 0, 'home', 0),
(140, 0, 'home', 0),
(141, 0, 'home', 0),
(142, 0, 'home', 0),
(143, 0, 'home', 0),
(144, 0, 'home', 0),
(145, 0, 'home', 0),
(146, 0, 'home', 0),
(147, 0, 'home', 0),
(148, 0, 'home', 0),
(149, 0, 'home', 0),
(150, 0, 'home', 0),
(151, 0, 'home', 0),
(152, 0, 'home', 0),
(153, 0, 'home', 0),
(154, 0, 'home', 0),
(155, 0, 'home', 0),
(156, 0, 'home', 0),
(157, 0, 'home', 0),
(158, 0, 'home', 0),
(159, 0, 'home', 0),
(160, 0, 'home', 0),
(161, 0, 'home', 0),
(162, 0, 'home', 0),
(163, 0, 'home', 0),
(164, 0, 'home', 0),
(165, 0, 'home', 0),
(166, 0, 'home', 0),
(167, 0, 'home', 0),
(168, 0, 'home', 0),
(169, 0, 'home', 0),
(170, 0, 'home', 0),
(171, 0, 'home', 0),
(172, 0, 'home', 0),
(173, 0, 'book', 1),
(174, 0, 'book', 2),
(175, 0, 'home', 0),
(176, 0, 'book', 12),
(177, 0, 'home', 0),
(178, 0, 'book', 12),
(179, 0, 'home', 0),
(180, 0, 'home', 0),
(181, 0, 'book', 3),
(182, 0, 'home', 0),
(183, 0, 'book', 3),
(184, 0, 'home', 0),
(185, 0, 'book', 3),
(186, 0, 'home', 0),
(187, 0, 'book', 3),
(188, 0, 'home', 0),
(189, 0, 'book', 3),
(190, 0, 'home', 0),
(191, 0, 'book', 3),
(192, 0, 'book', 3),
(193, 0, 'home', 0),
(194, 0, 'book', 3),
(195, 0, 'home', 0),
(196, 53, 'book', 3),
(197, 53, 'home', 0),
(198, 53, 'book', 3),
(199, 53, 'home', 0),
(200, 53, 'book', 3),
(201, 53, 'home', 0),
(202, 53, 'book', 3),
(203, 53, 'home', 0),
(204, 53, 'home', 0),
(205, 53, 'home', 0),
(206, 53, 'home', 0),
(207, 53, 'home', 0),
(208, 53, 'book', 31),
(209, 53, 'home', 0),
(210, 53, 'home', 0),
(211, 53, 'home', 0),
(212, 53, 'home', 0),
(213, 0, 'home', 0),
(214, 0, 'home', 0),
(215, 53, 'profile', 53),
(216, 53, 'home', 0),
(217, 0, 'home', 0),
(218, 0, 'home', 0),
(219, 53, 'profile', 53),
(220, 53, 'home', 0),
(221, 53, 'home', 0),
(222, 53, 'home', 0),
(223, 53, 'profile', 53),
(224, 53, 'home', 0),
(225, 53, 'home', 0),
(226, 53, 'home', 0),
(227, 53, 'home', 0),
(228, 0, 'home', 0),
(229, 0, 'home', 0),
(230, 0, 'home', 0),
(231, 0, 'home', 0),
(232, 54, 'profile', 54),
(233, 0, 'home', 0),
(234, 0, 'home', 0),
(235, 0, 'home', 0),
(236, 0, 'home', 0),
(237, 56, 'profile', 56),
(238, 56, 'home', 0),
(239, 56, 'home', 0),
(240, 0, 'home', 0),
(241, 0, 'home', 0),
(242, 53, 'profile', 53),
(243, 53, 'home', 0),
(244, 53, 'home', 0),
(245, 53, 'home', 0),
(246, 53, 'home', 0),
(247, 53, 'home', 0),
(248, 53, 'home', 0),
(249, 53, 'home', 0),
(250, 53, 'home', 0),
(251, 53, 'product', 61),
(252, 53, 'home', 0),
(253, 53, 'product', 61),
(254, 53, 'home', 0),
(255, 53, 'product', 61),
(256, 53, 'home', 0),
(257, 53, 'product', 61),
(258, 53, 'home', 0),
(259, 53, 'product', 61),
(260, 53, 'home', 0),
(261, 53, 'product', 61),
(262, 53, 'home', 0),
(263, 53, 'product', 61),
(264, 53, 'home', 0),
(265, 53, 'product', 64),
(266, 53, 'home', 0),
(267, 53, 'product', 64),
(268, 53, 'home', 0),
(269, 53, 'product', 64),
(270, 53, 'home', 0),
(271, 53, 'product', 64),
(272, 53, 'home', 0),
(273, 53, 'product', 64),
(274, 53, 'home', 0),
(275, 53, 'product', 64),
(276, 53, 'home', 0),
(277, 53, 'product', 64),
(278, 53, 'home', 0),
(279, 53, 'product', 64),
(280, 53, 'home', 0),
(281, 53, 'product', 64),
(282, 53, 'home', 0),
(283, 53, 'product', 64),
(284, 53, 'home', 0),
(285, 53, 'product', 64),
(286, 53, 'home', 0),
(287, 53, 'product', 64),
(288, 53, 'home', 0),
(289, 53, 'product', 64),
(290, 53, 'home', 0),
(291, 53, 'product', 64),
(292, 53, 'home', 0),
(293, 53, 'product', 64),
(294, 53, 'product', 64),
(295, 53, 'home', 0),
(296, 53, 'product', 64),
(297, 53, 'product', 64),
(298, 53, 'home', 0),
(299, 53, 'product', 64),
(300, 53, 'home', 0),
(301, 53, 'product', 64),
(302, 53, 'home', 0),
(303, 53, 'product', 64),
(304, 53, 'product', 64),
(305, 53, 'home', 0),
(306, 53, 'product', 64),
(307, 53, 'home', 0),
(308, 53, 'product', 64),
(309, 53, 'product', 64),
(310, 53, 'home', 0),
(311, 53, 'product', 64),
(312, 53, 'product', 64),
(313, 53, 'product', 64),
(314, 53, 'home', 0),
(315, 53, 'product', 64),
(316, 53, 'home', 0),
(317, 53, 'product', 64),
(318, 53, 'home', 0),
(319, 53, 'product', 64),
(320, 53, 'home', 0),
(321, 53, 'product', 64),
(322, 53, 'home', 0),
(323, 53, 'product', 64),
(324, 53, 'home', 0),
(325, 53, 'product', 64),
(326, 53, 'home', 0),
(327, 53, 'product', 64),
(328, 53, 'home', 0),
(329, 53, 'product', 64),
(330, 53, 'home', 0),
(331, 53, 'product', 65),
(332, 53, 'home', 0),
(333, 53, 'product', 65),
(334, 53, 'home', 0),
(335, 53, 'product', 65),
(336, 53, 'home', 0),
(337, 53, 'home', 0),
(338, 53, 'home', 0),
(339, 53, 'home', 0),
(340, 53, 'home', 0),
(341, 53, 'home', 0),
(342, 53, 'product', 65),
(343, 53, 'home', 0),
(344, 53, 'home', 0),
(345, 53, 'home', 0),
(346, 53, 'home', 0),
(347, 53, 'home', 0),
(348, 53, 'home', 0),
(349, 53, 'home', 0),
(350, 53, 'home', 0),
(351, 53, 'home', 0),
(352, 53, 'home', 0),
(353, 53, 'book', 165),
(354, 53, 'book', 165),
(355, 53, 'book', 165),
(356, 53, 'book', 165),
(357, 53, 'book', 168),
(358, 53, 'book', 169),
(359, 53, 'book', 169),
(360, 53, 'home', 0),
(361, 53, 'home', 0),
(362, 53, 'home', 0),
(363, 53, 'home', 0),
(364, 53, 'home', 0),
(365, 53, 'home', 0),
(366, 53, 'book', 169),
(367, 53, 'home', 0),
(368, 53, 'product', 65),
(369, 53, 'home', 0),
(370, 53, 'home', 0),
(371, 53, 'home', 0),
(372, 53, 'home', 0),
(373, 53, 'product', 65),
(374, 53, 'home', 0),
(375, 53, 'home', 0),
(376, 53, 'home', 0),
(377, 53, 'home', 0),
(378, 53, 'home', 0),
(379, 53, 'home', 0),
(380, 53, 'home', 0),
(381, 0, 'home', 0),
(382, 0, 'home', 0),
(383, 0, 'book', 175),
(384, 0, 'home', 0),
(385, 0, 'home', 0),
(386, 0, 'home', 0),
(387, 0, 'home', 0),
(388, 0, 'home', 0),
(389, 0, 'home', 0),
(390, 57, 'profile', 57),
(391, 57, 'home', 0),
(392, 57, 'home', 0),
(393, 57, 'home', 0),
(394, 57, 'profile', 57),
(395, 57, 'home', 0),
(396, 57, 'home', 0),
(397, 57, 'product', 75),
(398, 57, 'home', 0),
(399, 57, 'home', 0),
(400, 57, 'home', 0),
(401, 57, 'product', 75),
(402, 57, 'home', 0),
(403, 57, 'product', 75),
(404, 57, 'home', 0),
(405, 57, 'home', 0),
(406, 57, 'home', 0),
(407, 57, 'product', 75),
(408, 57, 'home', 0),
(409, 57, 'home', 0),
(410, 57, 'home', 0),
(411, 57, 'product', 77),
(412, 57, 'home', 0),
(413, 57, 'home', 0),
(414, 57, 'home', 0),
(415, 57, 'home', 0),
(416, 57, 'home', 0);

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id_publishers` int(11) NOT NULL,
  `name_publishers` varchar(100) NOT NULL,
  `origin_publishers` varchar(150) NOT NULL,
  `phone_number_publishers` varchar(15) NOT NULL,
  `address_publishers` varchar(200) NOT NULL,
  `description_publishers` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `region_provinces`
--

CREATE TABLE `region_provinces` (
  `id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `region_provinces`
--

INSERT INTO `region_provinces` (`id`, `name`) VALUES
('11', 'ACEH'),
('12', 'SUMATERA UTARA'),
('13', 'SUMATERA BARAT'),
('14', 'RIAU'),
('15', 'JAMBI'),
('16', 'SUMATERA SELATAN'),
('17', 'BENGKULU'),
('18', 'LAMPUNG'),
('19', 'KEPULAUAN BANGKA BELITUNG'),
('21', 'KEPULAUAN RIAU'),
('31', 'DKI JAKARTA'),
('32', 'JAWA BARAT'),
('33', 'JAWA TENGAH'),
('34', 'DI YOGYAKARTA'),
('35', 'JAWA TIMUR'),
('36', 'BANTEN'),
('51', 'BALI'),
('52', 'NUSA TENGGARA BARAT'),
('53', 'NUSA TENGGARA TIMUR'),
('61', 'KALIMANTAN BARAT'),
('62', 'KALIMANTAN TENGAH'),
('63', 'KALIMANTAN SELATAN'),
('64', 'KALIMANTAN TIMUR'),
('65', 'KALIMANTAN UTARA'),
('71', 'SULAWESI UTARA'),
('72', 'SULAWESI TENGAH'),
('73', 'SULAWESI SELATAN'),
('74', 'SULAWESI TENGGARA'),
('75', 'GORONTALO'),
('76', 'SULAWESI BARAT'),
('81', 'MALUKU'),
('82', 'MALUKU UTARA'),
('91', 'PAPUA BARAT'),
('94', 'PAPUA');

-- --------------------------------------------------------

--
-- Table structure for table `region_regencies`
--

CREATE TABLE `region_regencies` (
  `id` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `province_id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `region_regencies`
--

INSERT INTO `region_regencies` (`id`, `province_id`, `name`) VALUES
('1101', '11', 'KABUPATEN SIMEULUE'),
('1102', '11', 'KABUPATEN ACEH SINGKIL'),
('1103', '11', 'KABUPATEN ACEH SELATAN'),
('1104', '11', 'KABUPATEN ACEH TENGGARA'),
('1105', '11', 'KABUPATEN ACEH TIMUR'),
('1106', '11', 'KABUPATEN ACEH TENGAH'),
('1107', '11', 'KABUPATEN ACEH BARAT'),
('1108', '11', 'KABUPATEN ACEH BESAR'),
('1109', '11', 'KABUPATEN PIDIE'),
('1110', '11', 'KABUPATEN BIREUEN'),
('1111', '11', 'KABUPATEN ACEH UTARA'),
('1112', '11', 'KABUPATEN ACEH BARAT DAYA'),
('1113', '11', 'KABUPATEN GAYO LUES'),
('1114', '11', 'KABUPATEN ACEH TAMIANG'),
('1115', '11', 'KABUPATEN NAGAN RAYA'),
('1116', '11', 'KABUPATEN ACEH JAYA'),
('1117', '11', 'KABUPATEN BENER MERIAH'),
('1118', '11', 'KABUPATEN PIDIE JAYA'),
('1171', '11', 'KOTA BANDA ACEH'),
('1172', '11', 'KOTA SABANG'),
('1173', '11', 'KOTA LANGSA'),
('1174', '11', 'KOTA LHOKSEUMAWE'),
('1175', '11', 'KOTA SUBULUSSALAM'),
('1201', '12', 'KABUPATEN NIAS'),
('1202', '12', 'KABUPATEN MANDAILING NATAL'),
('1203', '12', 'KABUPATEN TAPANULI SELATAN'),
('1204', '12', 'KABUPATEN TAPANULI TENGAH'),
('1205', '12', 'KABUPATEN TAPANULI UTARA'),
('1206', '12', 'KABUPATEN TOBA SAMOSIR'),
('1207', '12', 'KABUPATEN LABUHAN BATU'),
('1208', '12', 'KABUPATEN ASAHAN'),
('1209', '12', 'KABUPATEN SIMALUNGUN'),
('1210', '12', 'KABUPATEN DAIRI'),
('1211', '12', 'KABUPATEN KARO'),
('1212', '12', 'KABUPATEN DELI SERDANG'),
('1213', '12', 'KABUPATEN LANGKAT'),
('1214', '12', 'KABUPATEN NIAS SELATAN'),
('1215', '12', 'KABUPATEN HUMBANG HASUNDUTAN'),
('1216', '12', 'KABUPATEN PAKPAK BHARAT'),
('1217', '12', 'KABUPATEN SAMOSIR'),
('1218', '12', 'KABUPATEN SERDANG BEDAGAI'),
('1219', '12', 'KABUPATEN BATU BARA'),
('1220', '12', 'KABUPATEN PADANG LAWAS UTARA'),
('1221', '12', 'KABUPATEN PADANG LAWAS'),
('1222', '12', 'KABUPATEN LABUHAN BATU SELATAN'),
('1223', '12', 'KABUPATEN LABUHAN BATU UTARA'),
('1224', '12', 'KABUPATEN NIAS UTARA'),
('1225', '12', 'KABUPATEN NIAS BARAT'),
('1271', '12', 'KOTA SIBOLGA'),
('1272', '12', 'KOTA TANJUNG BALAI'),
('1273', '12', 'KOTA PEMATANG SIANTAR'),
('1274', '12', 'KOTA TEBING TINGGI'),
('1275', '12', 'KOTA MEDAN'),
('1276', '12', 'KOTA BINJAI'),
('1277', '12', 'KOTA PADANGSIDIMPUAN'),
('1278', '12', 'KOTA GUNUNGSITOLI'),
('1301', '13', 'KABUPATEN KEPULAUAN MENTAWAI'),
('1302', '13', 'KABUPATEN PESISIR SELATAN'),
('1303', '13', 'KABUPATEN SOLOK'),
('1304', '13', 'KABUPATEN SIJUNJUNG'),
('1305', '13', 'KABUPATEN TANAH DATAR'),
('1306', '13', 'KABUPATEN PADANG PARIAMAN'),
('1307', '13', 'KABUPATEN AGAM'),
('1308', '13', 'KABUPATEN LIMA PULUH KOTA'),
('1309', '13', 'KABUPATEN PASAMAN'),
('1310', '13', 'KABUPATEN SOLOK SELATAN'),
('1311', '13', 'KABUPATEN DHARMASRAYA'),
('1312', '13', 'KABUPATEN PASAMAN BARAT'),
('1371', '13', 'KOTA PADANG'),
('1372', '13', 'KOTA SOLOK'),
('1373', '13', 'KOTA SAWAH LUNTO'),
('1374', '13', 'KOTA PADANG PANJANG'),
('1375', '13', 'KOTA BUKITTINGGI'),
('1376', '13', 'KOTA PAYAKUMBUH'),
('1377', '13', 'KOTA PARIAMAN'),
('1401', '14', 'KABUPATEN KUANTAN SINGINGI'),
('1402', '14', 'KABUPATEN INDRAGIRI HULU'),
('1403', '14', 'KABUPATEN INDRAGIRI HILIR'),
('1404', '14', 'KABUPATEN PELALAWAN'),
('1405', '14', 'KABUPATEN S I A K'),
('1406', '14', 'KABUPATEN KAMPAR'),
('1407', '14', 'KABUPATEN ROKAN HULU'),
('1408', '14', 'KABUPATEN BENGKALIS'),
('1409', '14', 'KABUPATEN ROKAN HILIR'),
('1410', '14', 'KABUPATEN KEPULAUAN MERANTI'),
('1471', '14', 'KOTA PEKANBARU'),
('1473', '14', 'KOTA D U M A I'),
('1501', '15', 'KABUPATEN KERINCI'),
('1502', '15', 'KABUPATEN MERANGIN'),
('1503', '15', 'KABUPATEN SAROLANGUN'),
('1504', '15', 'KABUPATEN BATANG HARI'),
('1505', '15', 'KABUPATEN MUARO JAMBI'),
('1506', '15', 'KABUPATEN TANJUNG JABUNG TIMUR'),
('1507', '15', 'KABUPATEN TANJUNG JABUNG BARAT'),
('1508', '15', 'KABUPATEN TEBO'),
('1509', '15', 'KABUPATEN BUNGO'),
('1571', '15', 'KOTA JAMBI'),
('1572', '15', 'KOTA SUNGAI PENUH'),
('1601', '16', 'KABUPATEN OGAN KOMERING ULU'),
('1602', '16', 'KABUPATEN OGAN KOMERING ILIR'),
('1603', '16', 'KABUPATEN MUARA ENIM'),
('1604', '16', 'KABUPATEN LAHAT'),
('1605', '16', 'KABUPATEN MUSI RAWAS'),
('1606', '16', 'KABUPATEN MUSI BANYUASIN'),
('1607', '16', 'KABUPATEN BANYU ASIN'),
('1608', '16', 'KABUPATEN OGAN KOMERING ULU SELATAN'),
('1609', '16', 'KABUPATEN OGAN KOMERING ULU TIMUR'),
('1610', '16', 'KABUPATEN OGAN ILIR'),
('1611', '16', 'KABUPATEN EMPAT LAWANG'),
('1612', '16', 'KABUPATEN PENUKAL ABAB LEMATANG ILIR'),
('1613', '16', 'KABUPATEN MUSI RAWAS UTARA'),
('1671', '16', 'KOTA PALEMBANG'),
('1672', '16', 'KOTA PRABUMULIH'),
('1673', '16', 'KOTA PAGAR ALAM'),
('1674', '16', 'KOTA LUBUKLINGGAU'),
('1701', '17', 'KABUPATEN BENGKULU SELATAN'),
('1702', '17', 'KABUPATEN REJANG LEBONG'),
('1703', '17', 'KABUPATEN BENGKULU UTARA'),
('1704', '17', 'KABUPATEN KAUR'),
('1705', '17', 'KABUPATEN SELUMA'),
('1706', '17', 'KABUPATEN MUKOMUKO'),
('1707', '17', 'KABUPATEN LEBONG'),
('1708', '17', 'KABUPATEN KEPAHIANG'),
('1709', '17', 'KABUPATEN BENGKULU TENGAH'),
('1771', '17', 'KOTA BENGKULU'),
('1801', '18', 'KABUPATEN LAMPUNG BARAT'),
('1802', '18', 'KABUPATEN TANGGAMUS'),
('1803', '18', 'KABUPATEN LAMPUNG SELATAN'),
('1804', '18', 'KABUPATEN LAMPUNG TIMUR'),
('1805', '18', 'KABUPATEN LAMPUNG TENGAH'),
('1806', '18', 'KABUPATEN LAMPUNG UTARA'),
('1807', '18', 'KABUPATEN WAY KANAN'),
('1808', '18', 'KABUPATEN TULANGBAWANG'),
('1809', '18', 'KABUPATEN PESAWARAN'),
('1810', '18', 'KABUPATEN PRINGSEWU'),
('1811', '18', 'KABUPATEN MESUJI'),
('1812', '18', 'KABUPATEN TULANG BAWANG BARAT'),
('1813', '18', 'KABUPATEN PESISIR BARAT'),
('1871', '18', 'KOTA BANDAR LAMPUNG'),
('1872', '18', 'KOTA METRO'),
('1901', '19', 'KABUPATEN BANGKA'),
('1902', '19', 'KABUPATEN BELITUNG'),
('1903', '19', 'KABUPATEN BANGKA BARAT'),
('1904', '19', 'KABUPATEN BANGKA TENGAH'),
('1905', '19', 'KABUPATEN BANGKA SELATAN'),
('1906', '19', 'KABUPATEN BELITUNG TIMUR'),
('1971', '19', 'KOTA PANGKAL PINANG'),
('2101', '21', 'KABUPATEN KARIMUN'),
('2102', '21', 'KABUPATEN BINTAN'),
('2103', '21', 'KABUPATEN NATUNA'),
('2104', '21', 'KABUPATEN LINGGA'),
('2105', '21', 'KABUPATEN KEPULAUAN ANAMBAS'),
('2171', '21', 'KOTA B A T A M'),
('2172', '21', 'KOTA TANJUNG PINANG'),
('3101', '31', 'KABUPATEN KEPULAUAN SERIBU'),
('3171', '31', 'KOTA JAKARTA SELATAN'),
('3172', '31', 'KOTA JAKARTA TIMUR'),
('3173', '31', 'KOTA JAKARTA PUSAT'),
('3174', '31', 'KOTA JAKARTA BARAT'),
('3175', '31', 'KOTA JAKARTA UTARA'),
('3201', '32', 'KABUPATEN BOGOR'),
('3202', '32', 'KABUPATEN SUKABUMI'),
('3203', '32', 'KABUPATEN CIANJUR'),
('3204', '32', 'KABUPATEN BANDUNG'),
('3205', '32', 'KABUPATEN GARUT'),
('3206', '32', 'KABUPATEN TASIKMALAYA'),
('3207', '32', 'KABUPATEN CIAMIS'),
('3208', '32', 'KABUPATEN KUNINGAN'),
('3209', '32', 'KABUPATEN CIREBON'),
('3210', '32', 'KABUPATEN MAJALENGKA'),
('3211', '32', 'KABUPATEN SUMEDANG'),
('3212', '32', 'KABUPATEN INDRAMAYU'),
('3213', '32', 'KABUPATEN SUBANG'),
('3214', '32', 'KABUPATEN PURWAKARTA'),
('3215', '32', 'KABUPATEN KARAWANG'),
('3216', '32', 'KABUPATEN BEKASI'),
('3217', '32', 'KABUPATEN BANDUNG BARAT'),
('3218', '32', 'KABUPATEN PANGANDARAN'),
('3271', '32', 'KOTA BOGOR'),
('3272', '32', 'KOTA SUKABUMI'),
('3273', '32', 'KOTA BANDUNG'),
('3274', '32', 'KOTA CIREBON'),
('3275', '32', 'KOTA BEKASI'),
('3276', '32', 'KOTA DEPOK'),
('3277', '32', 'KOTA CIMAHI'),
('3278', '32', 'KOTA TASIKMALAYA'),
('3279', '32', 'KOTA BANJAR'),
('3301', '33', 'KABUPATEN CILACAP'),
('3302', '33', 'KABUPATEN BANYUMAS'),
('3303', '33', 'KABUPATEN PURBALINGGA'),
('3304', '33', 'KABUPATEN BANJARNEGARA'),
('3305', '33', 'KABUPATEN KEBUMEN'),
('3306', '33', 'KABUPATEN PURWOREJO'),
('3307', '33', 'KABUPATEN WONOSOBO'),
('3308', '33', 'KABUPATEN MAGELANG'),
('3309', '33', 'KABUPATEN BOYOLALI'),
('3310', '33', 'KABUPATEN KLATEN'),
('3311', '33', 'KABUPATEN SUKOHARJO'),
('3312', '33', 'KABUPATEN WONOGIRI'),
('3313', '33', 'KABUPATEN KARANGANYAR'),
('3314', '33', 'KABUPATEN SRAGEN'),
('3315', '33', 'KABUPATEN GROBOGAN'),
('3316', '33', 'KABUPATEN BLORA'),
('3317', '33', 'KABUPATEN REMBANG'),
('3318', '33', 'KABUPATEN PATI'),
('3319', '33', 'KABUPATEN KUDUS'),
('3320', '33', 'KABUPATEN JEPARA'),
('3321', '33', 'KABUPATEN DEMAK'),
('3322', '33', 'KABUPATEN SEMARANG'),
('3323', '33', 'KABUPATEN TEMANGGUNG'),
('3324', '33', 'KABUPATEN KENDAL'),
('3325', '33', 'KABUPATEN BATANG'),
('3326', '33', 'KABUPATEN PEKALONGAN'),
('3327', '33', 'KABUPATEN PEMALANG'),
('3328', '33', 'KABUPATEN TEGAL'),
('3329', '33', 'KABUPATEN BREBES'),
('3371', '33', 'KOTA MAGELANG'),
('3372', '33', 'KOTA SURAKARTA'),
('3373', '33', 'KOTA SALATIGA'),
('3374', '33', 'KOTA SEMARANG'),
('3375', '33', 'KOTA PEKALONGAN'),
('3376', '33', 'KOTA TEGAL'),
('3401', '34', 'KABUPATEN KULON PROGO'),
('3402', '34', 'KABUPATEN BANTUL'),
('3403', '34', 'KABUPATEN GUNUNG KIDUL'),
('3404', '34', 'KABUPATEN SLEMAN'),
('3471', '34', 'KOTA YOGYAKARTA'),
('3501', '35', 'KABUPATEN PACITAN'),
('3502', '35', 'KABUPATEN PONOROGO'),
('3503', '35', 'KABUPATEN TRENGGALEK'),
('3504', '35', 'KABUPATEN TULUNGAGUNG'),
('3505', '35', 'KABUPATEN BLITAR'),
('3506', '35', 'KABUPATEN KEDIRI'),
('3507', '35', 'KABUPATEN MALANG'),
('3508', '35', 'KABUPATEN LUMAJANG'),
('3509', '35', 'KABUPATEN JEMBER'),
('3510', '35', 'KABUPATEN BANYUWANGI'),
('3511', '35', 'KABUPATEN BONDOWOSO'),
('3512', '35', 'KABUPATEN SITUBONDO'),
('3513', '35', 'KABUPATEN PROBOLINGGO'),
('3514', '35', 'KABUPATEN PASURUAN'),
('3515', '35', 'KABUPATEN SIDOARJO'),
('3516', '35', 'KABUPATEN MOJOKERTO'),
('3517', '35', 'KABUPATEN JOMBANG'),
('3518', '35', 'KABUPATEN NGANJUK'),
('3519', '35', 'KABUPATEN MADIUN'),
('3520', '35', 'KABUPATEN MAGETAN'),
('3521', '35', 'KABUPATEN NGAWI'),
('3522', '35', 'KABUPATEN BOJONEGORO'),
('3523', '35', 'KABUPATEN TUBAN'),
('3524', '35', 'KABUPATEN LAMONGAN'),
('3525', '35', 'KABUPATEN GRESIK'),
('3526', '35', 'KABUPATEN BANGKALAN'),
('3527', '35', 'KABUPATEN SAMPANG'),
('3528', '35', 'KABUPATEN PAMEKASAN'),
('3529', '35', 'KABUPATEN SUMENEP'),
('3571', '35', 'KOTA KEDIRI'),
('3572', '35', 'KOTA BLITAR'),
('3573', '35', 'KOTA MALANG'),
('3574', '35', 'KOTA PROBOLINGGO'),
('3575', '35', 'KOTA PASURUAN'),
('3576', '35', 'KOTA MOJOKERTO'),
('3577', '35', 'KOTA MADIUN'),
('3578', '35', 'KOTA SURABAYA'),
('3579', '35', 'KOTA BATU'),
('3601', '36', 'KABUPATEN PANDEGLANG'),
('3602', '36', 'KABUPATEN LEBAK'),
('3603', '36', 'KABUPATEN TANGERANG'),
('3604', '36', 'KABUPATEN SERANG'),
('3671', '36', 'KOTA TANGERANG'),
('3672', '36', 'KOTA CILEGON'),
('3673', '36', 'KOTA SERANG'),
('3674', '36', 'KOTA TANGERANG SELATAN'),
('5101', '51', 'KABUPATEN JEMBRANA'),
('5102', '51', 'KABUPATEN TABANAN'),
('5103', '51', 'KABUPATEN BADUNG'),
('5104', '51', 'KABUPATEN GIANYAR'),
('5105', '51', 'KABUPATEN KLUNGKUNG'),
('5106', '51', 'KABUPATEN BANGLI'),
('5107', '51', 'KABUPATEN KARANG ASEM'),
('5108', '51', 'KABUPATEN BULELENG'),
('5171', '51', 'KOTA DENPASAR'),
('5201', '52', 'KABUPATEN LOMBOK BARAT'),
('5202', '52', 'KABUPATEN LOMBOK TENGAH'),
('5203', '52', 'KABUPATEN LOMBOK TIMUR'),
('5204', '52', 'KABUPATEN SUMBAWA'),
('5205', '52', 'KABUPATEN DOMPU'),
('5206', '52', 'KABUPATEN BIMA'),
('5207', '52', 'KABUPATEN SUMBAWA BARAT'),
('5208', '52', 'KABUPATEN LOMBOK UTARA'),
('5271', '52', 'KOTA MATARAM'),
('5272', '52', 'KOTA BIMA'),
('5301', '53', 'KABUPATEN SUMBA BARAT'),
('5302', '53', 'KABUPATEN SUMBA TIMUR'),
('5303', '53', 'KABUPATEN KUPANG'),
('5304', '53', 'KABUPATEN TIMOR TENGAH SELATAN'),
('5305', '53', 'KABUPATEN TIMOR TENGAH UTARA'),
('5306', '53', 'KABUPATEN BELU'),
('5307', '53', 'KABUPATEN ALOR'),
('5308', '53', 'KABUPATEN LEMBATA'),
('5309', '53', 'KABUPATEN FLORES TIMUR'),
('5310', '53', 'KABUPATEN SIKKA'),
('5311', '53', 'KABUPATEN ENDE'),
('5312', '53', 'KABUPATEN NGADA'),
('5313', '53', 'KABUPATEN MANGGARAI'),
('5314', '53', 'KABUPATEN ROTE NDAO'),
('5315', '53', 'KABUPATEN MANGGARAI BARAT'),
('5316', '53', 'KABUPATEN SUMBA TENGAH'),
('5317', '53', 'KABUPATEN SUMBA BARAT DAYA'),
('5318', '53', 'KABUPATEN NAGEKEO'),
('5319', '53', 'KABUPATEN MANGGARAI TIMUR'),
('5320', '53', 'KABUPATEN SABU RAIJUA'),
('5321', '53', 'KABUPATEN MALAKA'),
('5371', '53', 'KOTA KUPANG'),
('6101', '61', 'KABUPATEN SAMBAS'),
('6102', '61', 'KABUPATEN BENGKAYANG'),
('6103', '61', 'KABUPATEN LANDAK'),
('6104', '61', 'KABUPATEN MEMPAWAH'),
('6105', '61', 'KABUPATEN SANGGAU'),
('6106', '61', 'KABUPATEN KETAPANG'),
('6107', '61', 'KABUPATEN SINTANG'),
('6108', '61', 'KABUPATEN KAPUAS HULU'),
('6109', '61', 'KABUPATEN SEKADAU'),
('6110', '61', 'KABUPATEN MELAWI'),
('6111', '61', 'KABUPATEN KAYONG UTARA'),
('6112', '61', 'KABUPATEN KUBU RAYA'),
('6171', '61', 'KOTA PONTIANAK'),
('6172', '61', 'KOTA SINGKAWANG'),
('6201', '62', 'KABUPATEN KOTAWARINGIN BARAT'),
('6202', '62', 'KABUPATEN KOTAWARINGIN TIMUR'),
('6203', '62', 'KABUPATEN KAPUAS'),
('6204', '62', 'KABUPATEN BARITO SELATAN'),
('6205', '62', 'KABUPATEN BARITO UTARA'),
('6206', '62', 'KABUPATEN SUKAMARA'),
('6207', '62', 'KABUPATEN LAMANDAU'),
('6208', '62', 'KABUPATEN SERUYAN'),
('6209', '62', 'KABUPATEN KATINGAN'),
('6210', '62', 'KABUPATEN PULANG PISAU'),
('6211', '62', 'KABUPATEN GUNUNG MAS'),
('6212', '62', 'KABUPATEN BARITO TIMUR'),
('6213', '62', 'KABUPATEN MURUNG RAYA'),
('6271', '62', 'KOTA PALANGKA RAYA'),
('6301', '63', 'KABUPATEN TANAH LAUT'),
('6302', '63', 'KABUPATEN KOTA BARU'),
('6303', '63', 'KABUPATEN BANJAR'),
('6304', '63', 'KABUPATEN BARITO KUALA'),
('6305', '63', 'KABUPATEN TAPIN'),
('6306', '63', 'KABUPATEN HULU SUNGAI SELATAN'),
('6307', '63', 'KABUPATEN HULU SUNGAI TENGAH'),
('6308', '63', 'KABUPATEN HULU SUNGAI UTARA'),
('6309', '63', 'KABUPATEN TABALONG'),
('6310', '63', 'KABUPATEN TANAH BUMBU'),
('6311', '63', 'KABUPATEN BALANGAN'),
('6371', '63', 'KOTA BANJARMASIN'),
('6372', '63', 'KOTA BANJAR BARU'),
('6401', '64', 'KABUPATEN PASER'),
('6402', '64', 'KABUPATEN KUTAI BARAT'),
('6403', '64', 'KABUPATEN KUTAI KARTANEGARA'),
('6404', '64', 'KABUPATEN KUTAI TIMUR'),
('6405', '64', 'KABUPATEN BERAU'),
('6409', '64', 'KABUPATEN PENAJAM PASER UTARA'),
('6411', '64', 'KABUPATEN MAHAKAM HULU'),
('6471', '64', 'KOTA BALIKPAPAN'),
('6472', '64', 'KOTA SAMARINDA'),
('6474', '64', 'KOTA BONTANG'),
('6501', '65', 'KABUPATEN MALINAU'),
('6502', '65', 'KABUPATEN BULUNGAN'),
('6503', '65', 'KABUPATEN TANA TIDUNG'),
('6504', '65', 'KABUPATEN NUNUKAN'),
('6571', '65', 'KOTA TARAKAN'),
('7101', '71', 'KABUPATEN BOLAANG MONGONDOW'),
('7102', '71', 'KABUPATEN MINAHASA'),
('7103', '71', 'KABUPATEN KEPULAUAN SANGIHE'),
('7104', '71', 'KABUPATEN KEPULAUAN TALAUD'),
('7105', '71', 'KABUPATEN MINAHASA SELATAN'),
('7106', '71', 'KABUPATEN MINAHASA UTARA'),
('7107', '71', 'KABUPATEN BOLAANG MONGONDOW UTARA'),
('7108', '71', 'KABUPATEN SIAU TAGULANDANG BIARO'),
('7109', '71', 'KABUPATEN MINAHASA TENGGARA'),
('7110', '71', 'KABUPATEN BOLAANG MONGONDOW SELATAN'),
('7111', '71', 'KABUPATEN BOLAANG MONGONDOW TIMUR'),
('7171', '71', 'KOTA MANADO'),
('7172', '71', 'KOTA BITUNG'),
('7173', '71', 'KOTA TOMOHON'),
('7174', '71', 'KOTA KOTAMOBAGU'),
('7201', '72', 'KABUPATEN BANGGAI KEPULAUAN'),
('7202', '72', 'KABUPATEN BANGGAI'),
('7203', '72', 'KABUPATEN MOROWALI'),
('7204', '72', 'KABUPATEN POSO'),
('7205', '72', 'KABUPATEN DONGGALA'),
('7206', '72', 'KABUPATEN TOLI-TOLI'),
('7207', '72', 'KABUPATEN BUOL'),
('7208', '72', 'KABUPATEN PARIGI MOUTONG'),
('7209', '72', 'KABUPATEN TOJO UNA-UNA'),
('7210', '72', 'KABUPATEN SIGI'),
('7211', '72', 'KABUPATEN BANGGAI LAUT'),
('7212', '72', 'KABUPATEN MOROWALI UTARA'),
('7271', '72', 'KOTA PALU'),
('7301', '73', 'KABUPATEN KEPULAUAN SELAYAR'),
('7302', '73', 'KABUPATEN BULUKUMBA'),
('7303', '73', 'KABUPATEN BANTAENG'),
('7304', '73', 'KABUPATEN JENEPONTO'),
('7305', '73', 'KABUPATEN TAKALAR'),
('7306', '73', 'KABUPATEN GOWA'),
('7307', '73', 'KABUPATEN SINJAI'),
('7308', '73', 'KABUPATEN MAROS'),
('7309', '73', 'KABUPATEN PANGKAJENE DAN KEPULAUAN'),
('7310', '73', 'KABUPATEN BARRU'),
('7311', '73', 'KABUPATEN BONE'),
('7312', '73', 'KABUPATEN SOPPENG'),
('7313', '73', 'KABUPATEN WAJO'),
('7314', '73', 'KABUPATEN SIDENRENG RAPPANG'),
('7315', '73', 'KABUPATEN PINRANG'),
('7316', '73', 'KABUPATEN ENREKANG'),
('7317', '73', 'KABUPATEN LUWU'),
('7318', '73', 'KABUPATEN TANA TORAJA'),
('7322', '73', 'KABUPATEN LUWU UTARA'),
('7325', '73', 'KABUPATEN LUWU TIMUR'),
('7326', '73', 'KABUPATEN TORAJA UTARA'),
('7371', '73', 'KOTA MAKASSAR'),
('7372', '73', 'KOTA PAREPARE'),
('7373', '73', 'KOTA PALOPO'),
('7401', '74', 'KABUPATEN BUTON'),
('7402', '74', 'KABUPATEN MUNA'),
('7403', '74', 'KABUPATEN KONAWE'),
('7404', '74', 'KABUPATEN KOLAKA'),
('7405', '74', 'KABUPATEN KONAWE SELATAN'),
('7406', '74', 'KABUPATEN BOMBANA'),
('7407', '74', 'KABUPATEN WAKATOBI'),
('7408', '74', 'KABUPATEN KOLAKA UTARA'),
('7409', '74', 'KABUPATEN BUTON UTARA'),
('7410', '74', 'KABUPATEN KONAWE UTARA'),
('7411', '74', 'KABUPATEN KOLAKA TIMUR'),
('7412', '74', 'KABUPATEN KONAWE KEPULAUAN'),
('7413', '74', 'KABUPATEN MUNA BARAT'),
('7414', '74', 'KABUPATEN BUTON TENGAH'),
('7415', '74', 'KABUPATEN BUTON SELATAN'),
('7471', '74', 'KOTA KENDARI'),
('7472', '74', 'KOTA BAUBAU'),
('7501', '75', 'KABUPATEN BOALEMO'),
('7502', '75', 'KABUPATEN GORONTALO'),
('7503', '75', 'KABUPATEN POHUWATO'),
('7504', '75', 'KABUPATEN BONE BOLANGO'),
('7505', '75', 'KABUPATEN GORONTALO UTARA'),
('7571', '75', 'KOTA GORONTALO'),
('7601', '76', 'KABUPATEN MAJENE'),
('7602', '76', 'KABUPATEN POLEWALI MANDAR'),
('7603', '76', 'KABUPATEN MAMASA'),
('7604', '76', 'KABUPATEN MAMUJU'),
('7605', '76', 'KABUPATEN MAMUJU UTARA'),
('7606', '76', 'KABUPATEN MAMUJU TENGAH'),
('8101', '81', 'KABUPATEN MALUKU TENGGARA BARAT'),
('8102', '81', 'KABUPATEN MALUKU TENGGARA'),
('8103', '81', 'KABUPATEN MALUKU TENGAH'),
('8104', '81', 'KABUPATEN BURU'),
('8105', '81', 'KABUPATEN KEPULAUAN ARU'),
('8106', '81', 'KABUPATEN SERAM BAGIAN BARAT'),
('8107', '81', 'KABUPATEN SERAM BAGIAN TIMUR'),
('8108', '81', 'KABUPATEN MALUKU BARAT DAYA'),
('8109', '81', 'KABUPATEN BURU SELATAN'),
('8171', '81', 'KOTA AMBON'),
('8172', '81', 'KOTA TUAL'),
('8201', '82', 'KABUPATEN HALMAHERA BARAT'),
('8202', '82', 'KABUPATEN HALMAHERA TENGAH'),
('8203', '82', 'KABUPATEN KEPULAUAN SULA'),
('8204', '82', 'KABUPATEN HALMAHERA SELATAN'),
('8205', '82', 'KABUPATEN HALMAHERA UTARA'),
('8206', '82', 'KABUPATEN HALMAHERA TIMUR'),
('8207', '82', 'KABUPATEN PULAU MOROTAI'),
('8208', '82', 'KABUPATEN PULAU TALIABU'),
('8271', '82', 'KOTA TERNATE'),
('8272', '82', 'KOTA TIDORE KEPULAUAN'),
('9101', '91', 'KABUPATEN FAKFAK'),
('9102', '91', 'KABUPATEN KAIMANA'),
('9103', '91', 'KABUPATEN TELUK WONDAMA'),
('9104', '91', 'KABUPATEN TELUK BINTUNI'),
('9105', '91', 'KABUPATEN MANOKWARI'),
('9106', '91', 'KABUPATEN SORONG SELATAN'),
('9107', '91', 'KABUPATEN SORONG'),
('9108', '91', 'KABUPATEN RAJA AMPAT'),
('9109', '91', 'KABUPATEN TAMBRAUW'),
('9110', '91', 'KABUPATEN MAYBRAT'),
('9111', '91', 'KABUPATEN MANOKWARI SELATAN'),
('9112', '91', 'KABUPATEN PEGUNUNGAN ARFAK'),
('9171', '91', 'KOTA SORONG'),
('9401', '94', 'KABUPATEN MERAUKE'),
('9402', '94', 'KABUPATEN JAYAWIJAYA'),
('9403', '94', 'KABUPATEN JAYAPURA'),
('9404', '94', 'KABUPATEN NABIRE'),
('9408', '94', 'KABUPATEN KEPULAUAN YAPEN'),
('9409', '94', 'KABUPATEN BIAK NUMFOR'),
('9410', '94', 'KABUPATEN PANIAI'),
('9411', '94', 'KABUPATEN PUNCAK JAYA'),
('9412', '94', 'KABUPATEN MIMIKA'),
('9413', '94', 'KABUPATEN BOVEN DIGOEL'),
('9414', '94', 'KABUPATEN MAPPI'),
('9415', '94', 'KABUPATEN ASMAT'),
('9416', '94', 'KABUPATEN YAHUKIMO'),
('9417', '94', 'KABUPATEN PEGUNUNGAN BINTANG'),
('9418', '94', 'KABUPATEN TOLIKARA'),
('9419', '94', 'KABUPATEN SARMI'),
('9420', '94', 'KABUPATEN KEEROM'),
('9426', '94', 'KABUPATEN WAROPEN'),
('9427', '94', 'KABUPATEN SUPIORI'),
('9428', '94', 'KABUPATEN MAMBERAMO RAYA'),
('9429', '94', 'KABUPATEN NDUGA'),
('9430', '94', 'KABUPATEN LANNY JAYA'),
('9431', '94', 'KABUPATEN MAMBERAMO TENGAH'),
('9432', '94', 'KABUPATEN YALIMO'),
('9433', '94', 'KABUPATEN PUNCAK'),
('9434', '94', 'KABUPATEN DOGIYAI'),
('9435', '94', 'KABUPATEN INTAN JAYA'),
('9436', '94', 'KABUPATEN DEIYAI'),
('9471', '94', 'KOTA JAYAPURA');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_u` int(11) NOT NULL,
  `username_u` varchar(50) DEFAULT NULL,
  `email_u` varchar(100) DEFAULT NULL,
  `password_u` varchar(255) DEFAULT NULL,
  `firstname_u` varchar(255) DEFAULT NULL,
  `lastname_u` varchar(100) DEFAULT NULL,
  `date_of_birth_u` date DEFAULT NULL,
  `phone_number_u` varchar(15) DEFAULT NULL,
  `address_u` varchar(150) DEFAULT '-',
  `city_u` int(6) DEFAULT NULL,
  `province_u` int(6) DEFAULT NULL,
  `total_review_u` int(11) DEFAULT '0',
  `bio_u` varchar(200) DEFAULT NULL,
  `photo_profile_u` varchar(150) DEFAULT 'assets/img/default/profile-pict.png',
  `photo_cover_u` varchar(150) DEFAULT '0',
  `point` int(11) DEFAULT '0',
  `money` int(11) DEFAULT '0',
  `line_u` varchar(32) NOT NULL DEFAULT '-',
  `whatsapp_u` varchar(15) NOT NULL DEFAULT '-',
  `created_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `views_u` int(11) NOT NULL DEFAULT '0',
  `last_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_u`, `username_u`, `email_u`, `password_u`, `firstname_u`, `lastname_u`, `date_of_birth_u`, `phone_number_u`, `address_u`, `city_u`, `province_u`, `total_review_u`, `bio_u`, `photo_profile_u`, `photo_cover_u`, `point`, `money`, `line_u`, `whatsapp_u`, `created_at`, `last_login`, `views_u`, `last_update`) VALUES
(1, 'haha', 'hahaha@gmail.com', '12345', 'hara', 'Hura', '2016-09-24', '1234567890', 'Kalimantan tengah barat', 0, NULL, NULL, 'Hola namanamanama', 'assets/img/default/profile-pict.png', NULL, NULL, NULL, '', '', NULL, NULL, 0, NULL),
(2, 'kevinfachreza', 'kevinfachreza@yahoo.com', '12345', 'aa', NULL, '2016-10-30', NULL, NULL, NULL, NULL, 0, ' ', 'assets/img/default/profile-pict.png', NULL, 0, NULL, '', '', NULL, NULL, 0, NULL),
(3, 'kev', 'kevinfachreza@yahoo.coma', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'bbb', NULL, '2016-10-30', NULL, NULL, NULL, NULL, 0, ' ', 'assets/img/default/profile-pict.png', NULL, 0, NULL, '', '', NULL, NULL, 0, NULL),
(4, 'dummy', 'dummy@dummy.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'saya', 'lasta', '1996-06-11', '12345622222', NULL, 5171, 51, 0, 'bio data ku adalah seorang keren banget12''''qwe', './assets/img/user/4/profile-pict/42016-11-20-04-14-36.jpg', NULL, 0, NULL, 'koko', '12345', NULL, NULL, 0, NULL),
(5, 'hanah', 'hanah@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', NULL, NULL, '1998-02-13', '09898989', NULL, 1173, NULL, 0, NULL, './assets/img/user/5/profile-pict/default.png', NULL, 0, NULL, '@hanahanda', '0292828383', NULL, NULL, 0, NULL),
(52, '123', 'halahalahal@gmail.com', '$2a$08$ovqYY9Ym7tD3Cmdn.Dsh1Op/g2vs.HZRPinevBejSn9yMXTjyrjJe', NULL, NULL, '2000-01-01', NULL, NULL, NULL, NULL, 0, NULL, 'assets/img/default/profile-pict.png', NULL, 0, NULL, '', '', '2017-01-09 10:24:55', '2017-01-09 14:00:45', 0, NULL),
(53, 'kevin', 'kevin@kevin.com', '$2a$08$P3BQDTQ8uMgAQ3lJhxX4B.Yi3Loa01PUV7aBlRZ0uAhLDZBFGuoZK', 'Kevin ', 'Fachreza', '2017-01-01', '082233073237', 'aaaa', 3578, 35, 1, 'Aku Adalah Superman\r\n', './assets/img/user/53/profile-pict/532017-01-10-03-22-59.jpg', '0', 0, 0, '-', '-', '2017-01-09 14:03:02', '2017-01-10 06:37:15', 4, '2017-01-10 03:32:11'),
(54, 'bananabanana', 'kevin@banana.com', '$2a$08$JqgxPzjd3eO2Iung8CkbOuvACUYzbrjMAZ3rrFUE/i7vkaK9nI98i', 'Kevin', 'Banana', '2017-01-01', '123123', NULL, 1506, 15, 0, 'asdad', 'assets/img/default/profile-pict.png', '0', 0, 0, '-', '-', '2017-01-10 04:06:31', '2017-01-10 04:07:08', 1, NULL),
(55, '', '', '$2a$08$9N4fwpmi8.74rCVBRdl2j.uF5HhFQBZXYckTY4zEFDq9cXcYNzNUW', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, 0, NULL, 'assets/img/default/profile-pict.png', '0', 0, 0, '-', '-', '2017-01-10 04:06:57', NULL, 0, NULL),
(56, 'dummya', 'dummy@dummy.coma', '$2a$08$BRSZ3XiftN87WTpq3J/n4Oqi5bwEYSlfvFWdyIc59FVcq0MdvVBXS', 'dummy', 'dummy', '1900-01-10', '123', '-', 1101, 11, 0, '123', './assets/img/user/56/profile-pict/562017-01-10-05-11-37.jpg', '0', 0, 0, '-', '-', '2017-01-10 04:09:57', '2017-01-10 04:10:03', 1, '2017-01-10 04:11:47'),
(57, 'ikanterbang', 'ikan@terbang.com', '$2a$08$Ft3XlNbCjJRynlDanxjHVO3PBDBxoaofuQl9rWBVEbboN1zwlZIpy', '123', '123', '2017-01-01', '123', '-', 0, 11, 0, 'adad', 'assets/img/default/profile-pict.png', '0', 0, 0, '123', '123', '2017-01-10 12:37:56', '2017-01-10 12:38:14', 2, '2017-01-10 12:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `user_book`
--

CREATE TABLE `user_book` (
  `id_u_b` int(11) NOT NULL,
  `id_b_source` int(11) NOT NULL DEFAULT '0',
  `price_sell_u_b` int(11) DEFAULT NULL,
  `price_point` int(11) DEFAULT '0',
  `price_rent_u_b` int(11) DEFAULT NULL,
  `type_u_b` int(50) DEFAULT NULL,
  `sell_u_b` tinyint(1) DEFAULT NULL,
  `barter_u_b` tinyint(1) DEFAULT NULL,
  `rent_u_b` tinyint(1) NOT NULL,
  `description_u_b` varchar(300) DEFAULT NULL,
  `id_u_owner` int(11) DEFAULT NULL,
  `stock_u_b` int(11) DEFAULT NULL,
  `main_image_u_b` varchar(100) DEFAULT NULL,
  `title_u_b` varchar(100) NOT NULL,
  `berat_u_b` int(11) NOT NULL,
  `slug_title_u_b` varchar(500) NOT NULL,
  `tahun_beli_u_b` year(4) NOT NULL,
  `active` int(2) DEFAULT '2' COMMENT '0 rejected 1 show 2 waiting',
  `activated_by` varchar(12) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rejected_reason` int(3) DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `views_ub` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_book`
--

INSERT INTO `user_book` (`id_u_b`, `id_b_source`, `price_sell_u_b`, `price_point`, `price_rent_u_b`, `type_u_b`, `sell_u_b`, `barter_u_b`, `rent_u_b`, `description_u_b`, `id_u_owner`, `stock_u_b`, `main_image_u_b`, `title_u_b`, `berat_u_b`, `slug_title_u_b`, `tahun_beli_u_b`, `active`, `activated_by`, `created_at`, `updated_at`, `rejected_reason`, `activated_at`, `views_ub`) VALUES
(0, 13, 75000, 0, 15000, 1, 1, 1, 1, 'Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum', 5, 1, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', '', 0, '', 0000, 0, NULL, NULL, NULL, 2, '2017-01-08 06:36:17', 0),
(2, 14, 90000, 0, 10000, 2, 1, 0, 1, 'LoremIpsumLoremIpsumLoremIpsumLoremIpsumLoremIpsumLoremIpsumLoremIpsumLoremIpsumLoremIpsumLoremIpsumLoremIpsum', 5, 3, 'assets/img/user/5/2.jpg', '', 0, '', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(4, 14, 90000, 0, 10000, 2, 1, 0, 1, 'Hanya bisa dibuat', 5, 3, 'assets/img/user/5/2.jpg', 'Tetap mencoba', 0, 'Tetap-mencoba', 2009, 1, NULL, NULL, NULL, NULL, '2017-01-08 06:26:29', 0),
(5, 13, 20202, 0, NULL, 1, NULL, 0, 100, 'LOOOOOOOOOOOOOOOOOO', NULL, 2, NULL, '', 10, '', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(6, 13, 20202, 0, NULL, 1, NULL, 0, 100, 'LOOOOOOOOOOOOOOOOOO', NULL, 2, NULL, '', 10, '', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(7, 13, 20202, 0, NULL, 1, NULL, 0, 100, 'LOOOOOOOOOOOOOOOOOO', NULL, 2, NULL, '', 10, '', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(8, 13, 20202, 0, NULL, 1, NULL, 0, 100, 'LOOOOOOOOOOOOOOOOOO', NULL, 2, NULL, '', 10, '', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(9, 13, 20202, 0, NULL, 1, NULL, 0, 100, 'LOOOOOOOOOOOOOOOOOO', NULL, 2, NULL, '', 10, '', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(41, 13, 10, 0, 11, 1, NULL, 0, 127, 'Kenapa', 5, 22, 'assets/img/user/5/books/41/0.png', 'Apa', 2, '', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(42, 13, 20, 0, 33, 1, NULL, 0, 33, 'Trying', 5, 10, 'assets/img/user/4/books/42/0.jpg', 'Why', 111, '', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(43, 13, 3000, 0, NULL, 1, NULL, 0, 127, 'Doraemon (????? Doraemon?) adalah judul sebuah manga dan anime yang sangat populer yang dikarang Fujiko F. Fujio (???F????) sejak tahun 1969 dan berkisah tentang kehidupan seorang anak pemalas kelas 5 sekolah dasar yang bernama Nobi Nobita (?????) yang didatangi oleh sebuah robot kucing bernama Dora', 4, 1, NULL, 'Doraemon', 100, '', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(44, 13, 3000, 0, NULL, 1, NULL, 0, 127, 'Doraemon (????? Doraemon?) adalah judul sebuah manga dan anime yang sangat populer yang dikarang Fujiko F. Fujio (???F????) sejak tahun 1969 dan berkisah tentang kehidupan seorang anak pemalas kelas 5 sekolah dasar yang bernama Nobi Nobita (?????) yang didatangi oleh sebuah robot kucing bernama Dora', 4, 1, NULL, 'Doraemon', 100, 'doraemon', 0000, 0, NULL, NULL, NULL, 2, '2017-01-08 06:36:25', 0),
(45, 13, 123, 0, NULL, 1, NULL, 0, 123, 'asdasdad', 53, 12, 'assets/img/user/53/books/45/0.jpg', 'Banana Boat Ada 5', 123, 'BananaBoatAda5f89d6', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(46, 13, 123, 0, 0, 1, NULL, 0, 123, '', 53, 123, NULL, 'Juancoookk', 123, 'Juancoookkf89d6', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(47, 0, 123, 0, NULL, 1, NULL, 0, 123, 'adasda', 53, 123, 'assets/img/user/53/books/Kaos-Spiderman--31489/0.jpg', 'Kaos Spiderman', 123, '', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(48, 0, 13, 0, NULL, 1, NULL, 0, 0, '123', 53, 123, 'assets/img/user/53/books/coba-ini-buku-saya-jual--98010/0.jpg', 'coba ini buku saya jual', 123, '', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(49, 0, 13, 0, NULL, 1, NULL, 0, 0, '123', 53, 123, 'assets/img/user/53/books/coba-ini-buku-saya-jual--0e17d/0.jpg', 'coba ini buku saya jual', 123, '', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(50, 0, 13, 0, NULL, 1, NULL, 0, 0, '123', 53, 123, 'assets/img/user/53/books/coba-ini-buku-saya-jual--1a656/0.jpg', 'coba ini buku saya jual', 123, 'coba-ini-buku-saya-jual--', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(51, 0, 123213, 0, NULL, 1, NULL, 0, 127, '123', 53, 123, 'assets/img/user/53/books/aaaa--031b4/0.jpg', 'aaaa', 123, 'aaaa--', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(52, 0, 123, 0, NULL, 1, NULL, 0, 1, 'ad', 53, 123, NULL, 'aa', 123, 'aa--', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(53, 0, 123, 0, NULL, 1, NULL, 0, 1, 'ad', 53, 123, NULL, 'aa', 123, 'punisher--a2185', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(54, 0, 123, 0, NULL, 1, NULL, 0, 1, 'ad', 53, 123, NULL, 'aa', 123, 'aa--', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(55, 0, 123, 0, NULL, 1, NULL, 0, 1, 'ad', 53, 123, 'assets/img/user/53/books/aa--02d20/0.jpg', 'aa', 123, 'aa--', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(56, 0, 123, 0, NULL, 1, NULL, 0, 1, 'ad', 53, 123, 'assets/img/user/53/books/aa--7688b/0.jpg', 'aa', 123, 'aa--', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(57, 0, 123, 0, NULL, 1, NULL, 0, 1, 'ad', 53, 123, 'assets/img/user/53/books/aa--c8376/0.jpg', 'aa', 123, 'batman-ikanterbang-f74efabef1a88a7', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(58, 0, 123, 0, NULL, 1, NULL, 0, 1, 'ad', 53, 123, 'assets/img/user/53/books/aa--6208e/0.jpg', 'aa', 123, 'aa--', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(59, 0, 123, 0, NULL, 1, NULL, 0, 1, 'ad', 53, 123, 'assets/img/user/53/books/aa--3e1e9/0.jpg', 'aa', 123, 'aa--', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(60, 0, 123, 0, NULL, 1, NULL, 0, 1, 'ad', 53, 123, 'assets/img/user/53/books/aa--39fa9/0.jpg', 'aa', 123, 'aa--', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(61, 12, 123, 0, NULL, 1, NULL, 0, 1, 'ad', 53, 123, 'assets/img/user/53/books/aa--d029f/0_thumb.jpg', 'ini baru', 123, 'ini-baru', 0000, 1, NULL, NULL, NULL, NULL, '2017-01-10 07:47:45', 7),
(64, 12, 123, 0, NULL, 1, NULL, 0, 123, 'asd', 53, 12, 'assets/img/user/53/books/daredevil--a68b4/0_thumb.jpg', 'daredevil', 12, 'daredevil--', 0000, 1, NULL, NULL, NULL, NULL, '2017-01-10 07:56:14', 36),
(65, 12, 123, 0, 0, 1, NULL, 0, 123, '', 53, 123, 'assets/img/user/53/books/spiderman-ada-2--108c9/0_thumb.jpg', 'spiderman ada ', 123, 'spiderman-ada-2--', 0000, 1, NULL, NULL, NULL, NULL, '2017-01-10 08:28:01', 6),
(66, 0, 123, 0, NULL, 1, NULL, 0, 123, '123', 53, 123, 'assets/img/user/53/books/punisher--3ada9/0_thumb.jpg', 'punisher', 123, 'punisher--', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(67, 0, 123, 0, NULL, 1, NULL, 0, 123, '123', 53, 123, 'assets/img/user/53/books/punisher--49d18/0_thumb.jpg', 'punisher', 123, 'punisher--', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(68, 0, 123, 0, NULL, 1, NULL, 0, 123, '123', 53, 123, 'assets/img/user/53/books/punisher--a2185/0_thumb.jpg', 'punisher', 123, 'punisher--', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(70, 0, 123, 0, NULL, 1, NULL, 0, 0, 'aa', 57, 123, NULL, 'aa', 123, 'aa-ikanterbang-dac53c17c2', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(71, 0, 123, 0, NULL, 1, NULL, 0, 0, 'aa', 57, 123, NULL, 'aa', 123, 'aa-ikanterbang-dac53c17c2', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(72, 0, 123, 0, NULL, 1, NULL, 0, 0, 'aa', 57, 123, 'assets/img/user/ikanterbang/books/aa-ikanterbang-dac53c17c2/0_thumb.jpg', 'aa', 123, 'aa-ikanterbang-dac53c17c2', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(73, 0, 123, 0, NULL, 1, NULL, 0, 0, 'aa', 57, 123, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-dac53c17c2/0_thumb.jpg', 'aabcd', 123, 'aabcd-ikanterbang-dac53c17c2', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(74, 0, 123, 0, NULL, 1, NULL, 0, 0, 'aa', 57, 123, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-96061e92f5/0_thumb.jpg', 'aabcd', 123, 'aabcd-ikanterbang-96061e92f5', 0000, 2, NULL, NULL, NULL, NULL, NULL, 0),
(75, 75, 123, 0, 0, 1, NULL, 0, 0, '', 57, 123, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', 'aabcd', 123, 'aabcd-ikanterbang-eb624dbe56', 0000, 1, NULL, NULL, NULL, NULL, '2017-01-10 13:11:17', 4),
(76, 75, 123, 0, 0, 1, NULL, 0, 0, '', 57, 123, 'assets/img/user/ikanterbang/books/winter-soldier-ikanterbang-f369cb89fc/0_thumb.jpg', 'winter soldier', 123, 'winter-soldier-ikanterbang-f369cb89fc', 0000, 1, NULL, NULL, NULL, NULL, '2017-01-10 13:38:39', 0),
(77, 12, 123, 0, 0, 1, NULL, 0, 123, '', 57, 123, 'assets/img/user/ikanterbang/books/batman-ikanterbang-f74efabef1/0_thumb.jpg', 'batman', 123, 'batman-ikanterbang-f74efabef1', 0000, 1, NULL, NULL, NULL, NULL, '2017-01-10 13:40:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_book_favourite`
--

CREATE TABLE `user_book_favourite` (
  `id_u_b_favourite` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `id_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_book_image`
--

CREATE TABLE `user_book_image` (
  `id_u_b_img` int(11) NOT NULL,
  `id_b_source` int(11) NOT NULL,
  `image_path` varchar(256) DEFAULT NULL,
  `image_thumb` varchar(256) DEFAULT NULL,
  `image_original` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_book_image`
--

INSERT INTO `user_book_image` (`id_u_b_img`, `id_b_source`, `image_path`, `image_thumb`, `image_original`) VALUES
(3, 41, 'assets/img/user/5/books/41/0.png', NULL, NULL),
(4, 41, 'assets/img/user/5/books/41/1.png', NULL, NULL),
(5, 41, 'assets/img/user/5/books/41/2.png', NULL, NULL),
(6, 41, 'assets/img/user/5/books/41/3.png', NULL, NULL),
(7, 42, 'assets/img/user/5/books/42/0.png', NULL, NULL),
(8, 42, 'assets/img/user/5/books/42/1.png', NULL, NULL),
(9, 4, 'assets/img/user/5/books/4/0.png', NULL, NULL),
(10, 4, 'assets/img/user/5/books/4/0.png', NULL, NULL),
(11, 4, 'assets/img/user/5/books/4/0.png', NULL, NULL),
(12, 4, 'assets/img/user/5/books/4/0.png', NULL, NULL),
(13, 42, 'assets/img/user/4/books/42/0.jpg', NULL, NULL),
(14, 42, 'assets/img/user/4/books/42/1.jpg', NULL, NULL),
(15, 42, 'assets/img/user/4/books/42/2.jpg', NULL, NULL),
(16, 42, 'assets/img/user/4/books/42/0.jpg', NULL, NULL),
(17, 42, 'assets/img/user/4/books/42/0.jpg', NULL, NULL),
(18, 42, 'assets/img/user/4/books/42/0.jpg', NULL, NULL),
(19, 42, 'assets/img/user/4/books/42/0.jpg', NULL, NULL),
(20, 45, 'assets/img/user/53/books/45/0.jpg', NULL, NULL),
(21, 47, 'assets/img/user/53/books/Kaos-Spiderman--31489/0.jpg', NULL, NULL),
(22, 48, 'assets/img/user/53/books/coba-ini-buku-saya-jual--98010/0.jpg', NULL, NULL),
(23, 49, 'assets/img/user/53/books/coba-ini-buku-saya-jual--0e17d/0.jpg', NULL, NULL),
(24, 50, 'assets/img/user/53/books/coba-ini-buku-saya-jual--1a656/0.jpg', NULL, NULL),
(25, 51, 'assets/img/user/53/books/aaaa--031b4/0.jpg', NULL, NULL),
(26, 55, 'assets/img/user/53/books/aa--02d20/0.jpg', NULL, NULL),
(27, 56, 'assets/img/user/53/books/aa--7688b/0.jpg', NULL, NULL),
(28, 57, 'assets/img/user/53/books/aa--c8376/0.jpg', NULL, NULL),
(29, 58, 'assets/img/user/53/books/aa--6208e/0.jpg', NULL, NULL),
(30, 59, 'assets/img/user/53/books/aa--3e1e9/0.jpg', NULL, NULL),
(31, 59, 'assets/img/user/53/books/aa--3e1e9/1.jpg', NULL, NULL),
(32, 59, 'assets/img/user/53/books/aa--3e1e9/2.jpg', NULL, NULL),
(33, 60, 'assets/img/user/53/books/aa--39fa9/0.jpg', NULL, NULL),
(34, 60, 'assets/img/user/53/books/aa--39fa9/1.jpg', NULL, NULL),
(35, 60, 'assets/img/user/53/books/aa--39fa9/2.jpg', NULL, NULL),
(36, 61, 'assets/img/user/53/books/aa--d029f/0.jpg', 'assets/img/user/53/books/aa--d029f/0_thumb.jpg', NULL),
(37, 61, 'assets/img/user/53/books/aa--d029f/1.jpg', 'assets/img/user/53/books/aa--d029f/1_thumb.jpg', NULL),
(38, 61, 'assets/img/user/53/books/aa--d029f/2.jpg', 'assets/img/user/53/books/aa--d029f/2_thumb.jpg', NULL),
(45, 64, 'assets/img/user/53/books/daredevil--a68b4/0_resize.jpg', 'assets/img/user/53/books/daredevil--a68b4/0_thumb.jpg', 'assets/img/user/53/books/daredevil--a68b4/0.jpg'),
(46, 64, 'assets/img/user/53/books/daredevil--a68b4/1_resize.jpg', 'assets/img/user/53/books/daredevil--a68b4/1_thumb.jpg', 'assets/img/user/53/books/daredevil--a68b4/1.jpg'),
(47, 64, 'assets/img/user/53/books/daredevil--a68b4/2_resize.jpg', 'assets/img/user/53/books/daredevil--a68b4/2_thumb.jpg', 'assets/img/user/53/books/daredevil--a68b4/2.jpg'),
(48, 65, 'assets/img/user/53/books/spiderman-ada-2--108c9/0_resize.jpg', 'assets/img/user/53/books/spiderman-ada-2--108c9/0_thumb.jpg', 'assets/img/user/53/books/spiderman-ada-2--108c9/0.jpg'),
(49, 65, 'assets/img/user/53/books/spiderman-ada-2--108c9/1_resize.jpg', 'assets/img/user/53/books/spiderman-ada-2--108c9/1_thumb.jpg', 'assets/img/user/53/books/spiderman-ada-2--108c9/1.jpg'),
(50, 66, 'assets/img/user/53/books/punisher--3ada9/0_resize.jpg', 'assets/img/user/53/books/punisher--3ada9/0_thumb.jpg', 'assets/img/user/53/books/punisher--3ada9/0.jpg'),
(51, 66, 'assets/img/user/53/books/punisher--3ada9/1_resize.jpg', 'assets/img/user/53/books/punisher--3ada9/1_thumb.jpg', 'assets/img/user/53/books/punisher--3ada9/1.jpg'),
(52, 67, 'assets/img/user/53/books/punisher--49d18/0_resize.jpg', 'assets/img/user/53/books/punisher--49d18/0_thumb.jpg', 'assets/img/user/53/books/punisher--49d18/0.jpg'),
(53, 67, 'assets/img/user/53/books/punisher--49d18/1_resize.jpg', 'assets/img/user/53/books/punisher--49d18/1_thumb.jpg', 'assets/img/user/53/books/punisher--49d18/1.jpg'),
(54, 68, 'assets/img/user/53/books/punisher--a2185/0_resize.jpg', 'assets/img/user/53/books/punisher--a2185/0_thumb.jpg', 'assets/img/user/53/books/punisher--a2185/0.jpg'),
(55, 68, 'assets/img/user/53/books/punisher--a2185/1_resize.jpg', 'assets/img/user/53/books/punisher--a2185/1_thumb.jpg', 'assets/img/user/53/books/punisher--a2185/1.jpg'),
(56, 0, 'assets/img/user/ikanterbang/books/aa-ikanterbang-dac53c17c2/0_resize.jpg', 'assets/img/user/ikanterbang/books/aa-ikanterbang-dac53c17c2/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aa-ikanterbang-dac53c17c2/0.jpg'),
(57, 72, 'assets/img/user/ikanterbang/books/aa-ikanterbang-dac53c17c2/0_resize.jpg', 'assets/img/user/ikanterbang/books/aa-ikanterbang-dac53c17c2/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aa-ikanterbang-dac53c17c2/0.jpg'),
(58, 73, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-dac53c17c2/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-dac53c17c2/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-dac53c17c2/0.jpg'),
(59, 74, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-96061e92f5/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-96061e92f5/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-96061e92f5/0.jpg'),
(61, 0, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0.jpg'),
(62, 0, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0.jpg'),
(63, 0, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0.jpg'),
(64, 0, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0.jpg'),
(65, 0, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0.jpg'),
(66, 0, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0.jpg'),
(67, 0, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0.jpg'),
(68, 0, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0.jpg'),
(99, 75, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0.jpg'),
(101, 75, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0.jpg'),
(102, 75, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0.jpg'),
(103, 75, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0.jpg'),
(104, 75, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0.jpg'),
(105, 75, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0.jpg'),
(106, 75, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0.jpg'),
(107, 75, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0.jpg'),
(108, 75, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0.jpg'),
(109, 75, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0.jpg'),
(110, 75, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0.jpg'),
(111, 75, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/0.jpg'),
(112, 75, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/1_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/1_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/1.jpg'),
(113, 75, 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/1_resize.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/1_thumb.jpg', 'assets/img/user/ikanterbang/books/aabcd-ikanterbang-eb624dbe56/1.jpg'),
(117, 76, 'assets/img/user/ikanterbang/books/winter-soldier-ikanterbang-f369cb89fc/0_resize.jpg', 'assets/img/user/ikanterbang/books/winter-soldier-ikanterbang-f369cb89fc/0_thumb.jpg', 'assets/img/user/ikanterbang/books/winter-soldier-ikanterbang-f369cb89fc/0.jpg'),
(118, 76, 'assets/img/user/ikanterbang/books/winter-soldier-ikanterbang-f369cb89fc/0_resize.jpg', 'assets/img/user/ikanterbang/books/winter-soldier-ikanterbang-f369cb89fc/0_thumb.jpg', 'assets/img/user/ikanterbang/books/winter-soldier-ikanterbang-f369cb89fc/0.jpg'),
(119, 77, 'assets/img/user/ikanterbang/books/batman-ikanterbang-f74efabef1/0_resize.jpg', 'assets/img/user/ikanterbang/books/batman-ikanterbang-f74efabef1/0_thumb.jpg', 'assets/img/user/ikanterbang/books/batman-ikanterbang-f74efabef1/0.jpg'),
(120, 77, 'assets/img/user/ikanterbang/books/batman-ikanterbang-f74efabef1/1_resize.jpg', 'assets/img/user/ikanterbang/books/batman-ikanterbang-f74efabef1/1_thumb.jpg', 'assets/img/user/ikanterbang/books/batman-ikanterbang-f74efabef1/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_book_rejectcode`
--

CREATE TABLE `user_book_rejectcode` (
  `code` int(3) NOT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_book_rejectcode`
--

INSERT INTO `user_book_rejectcode` (`code`, `content`) VALUES
(1, 'Gambar Kurang / Tidak Memenuhi Syarat'),
(2, 'Melanggar Hak Cipta ');

-- --------------------------------------------------------

--
-- Table structure for table `writer`
--

CREATE TABLE `writer` (
  `id_writer` int(11) NOT NULL,
  `name_writer` varchar(100) NOT NULL,
  `origin_writer` varchar(150) NOT NULL,
  `date_of_birth_writer` date DEFAULT NULL,
  `description_writer` varchar(300) DEFAULT NULL,
  `photo_writer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `writer`
--

INSERT INTO `writer` (`id_writer`, `name_writer`, `origin_writer`, `date_of_birth_writer`, `description_writer`, `photo_writer`) VALUES
(1, 'Adamant', 'SUrbaya', '2016-11-02', 'Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum', 'assets/img/writer/1/1.JPG'),
(2, 'Kyojin', 'Japanese', '2016-11-01', 'Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum', 'assets/img/writer/1/1.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_b`),
  ADD UNIQUE KEY `isbn_unique` (`no_isbn_b`),
  ADD KEY `Book_writer_FK` (`writer`),
  ADD KEY `Book_publisher_FK` (`publisher`);
ALTER TABLE `book` ADD FULLTEXT KEY `Book_title` (`title_b`);
ALTER TABLE `book` ADD FULLTEXT KEY `tags` (`tags`);
ALTER TABLE `book` ADD FULLTEXT KEY `book_tags` (`title_b`,`tags`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`id_b_category`),
  ADD KEY `id_b_category` (`id_b_category`);

--
-- Indexes for table `book_category_connector`
--
ALTER TABLE `book_category_connector`
  ADD PRIMARY KEY (`id_bcc`);

--
-- Indexes for table `book_rating`
--
ALTER TABLE `book_rating`
  ADD PRIMARY KEY (`id_b_rating`),
  ADD KEY `rating_user_FK` (`id_u`),
  ADD KEY `rating_book_FK` (`id_b`);

--
-- Indexes for table `book_request`
--
ALTER TABLE `book_request`
  ADD PRIMARY KEY (`id_br`);

--
-- Indexes for table `book_review`
--
ALTER TABLE `book_review`
  ADD PRIMARY KEY (`id_b_review`),
  ADD KEY `review_user_FK` (`id_u`),
  ADD KEY `review_book_FK` (`id_b`);

--
-- Indexes for table `book_review_like`
--
ALTER TABLE `book_review_like`
  ADD PRIMARY KEY (`id_b_review_like`),
  ADD KEY `user_like_FK` (`id_u`),
  ADD KEY `book_like_FK` (`id_b_review`);

--
-- Indexes for table `book_status`
--
ALTER TABLE `book_status`
  ADD PRIMARY KEY (`id_b_status`),
  ADD KEY `id_b_status` (`id_b_status`);

--
-- Indexes for table `book_type`
--
ALTER TABLE `book_type`
  ADD PRIMARY KEY (`id_b_type`);

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id_messages`);

--
-- Indexes for table `chat_room`
--
ALTER TABLE `chat_room`
  ADD PRIMARY KEY (`id_cr`);

--
-- Indexes for table `log_visit`
--
ALTER TABLE `log_visit`
  ADD PRIMARY KEY (`id_lv`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id_publishers`);

--
-- Indexes for table `region_provinces`
--
ALTER TABLE `region_provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `region_regencies`
--
ALTER TABLE `region_regencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regencies_province_id_index` (`province_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_u`);

--
-- Indexes for table `user_book`
--
ALTER TABLE `user_book`
  ADD PRIMARY KEY (`id_u_b`,`rent_u_b`),
  ADD KEY `Book_source_FK` (`id_b_source`),
  ADD KEY `Book_type_FK` (`type_u_b`),
  ADD KEY `Book_owner_FK` (`id_u_owner`);

--
-- Indexes for table `user_book_favourite`
--
ALTER TABLE `user_book_favourite`
  ADD PRIMARY KEY (`id_u_b_favourite`),
  ADD KEY `user_fav_FK` (`id_u`),
  ADD KEY `category_fav_FK` (`id_category`);

--
-- Indexes for table `user_book_image`
--
ALTER TABLE `user_book_image`
  ADD PRIMARY KEY (`id_u_b_img`),
  ADD KEY `Book_source_img_FK` (`id_b_source`);

--
-- Indexes for table `user_book_rejectcode`
--
ALTER TABLE `user_book_rejectcode`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `writer`
--
ALTER TABLE `writer`
  ADD PRIMARY KEY (`id_writer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id_b` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `id_b_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `book_category_connector`
--
ALTER TABLE `book_category_connector`
  MODIFY `id_bcc` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `book_rating`
--
ALTER TABLE `book_rating`
  MODIFY `id_b_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `book_request`
--
ALTER TABLE `book_request`
  MODIFY `id_br` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `book_review`
--
ALTER TABLE `book_review`
  MODIFY `id_b_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `book_review_like`
--
ALTER TABLE `book_review_like`
  MODIFY `id_b_review_like` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `book_status`
--
ALTER TABLE `book_status`
  MODIFY `id_b_status` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `book_type`
--
ALTER TABLE `book_type`
  MODIFY `id_b_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id_messages` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `chat_room`
--
ALTER TABLE `chat_room`
  MODIFY `id_cr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `log_visit`
--
ALTER TABLE `log_visit`
  MODIFY `id_lv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=417;
--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id_publishers` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `user_book`
--
ALTER TABLE `user_book`
  MODIFY `id_u_b` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `user_book_favourite`
--
ALTER TABLE `user_book_favourite`
  MODIFY `id_u_b_favourite` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_book_image`
--
ALTER TABLE `user_book_image`
  MODIFY `id_u_b_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `user_book_rejectcode`
--
ALTER TABLE `user_book_rejectcode`
  MODIFY `code` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `writer`
--
ALTER TABLE `writer`
  MODIFY `id_writer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_rating`
--
ALTER TABLE `book_rating`
  ADD CONSTRAINT `rating_book_FK` FOREIGN KEY (`id_b`) REFERENCES `book` (`id_b`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rating_user_FK` FOREIGN KEY (`id_u`) REFERENCES `user` (`id_u`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `book_review`
--
ALTER TABLE `book_review`
  ADD CONSTRAINT `review_book_FK` FOREIGN KEY (`id_b`) REFERENCES `book` (`id_b`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `review_user_FK` FOREIGN KEY (`id_u`) REFERENCES `user` (`id_u`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `book_review_like`
--
ALTER TABLE `book_review_like`
  ADD CONSTRAINT `book_like_FK` FOREIGN KEY (`id_b_review`) REFERENCES `book_review` (`id_b_review`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_like_FK` FOREIGN KEY (`id_u`) REFERENCES `user` (`id_u`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `region_regencies`
--
ALTER TABLE `region_regencies`
  ADD CONSTRAINT `regencies_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `region_provinces` (`id`);

--
-- Constraints for table `user_book`
--
ALTER TABLE `user_book`
  ADD CONSTRAINT `Book_owner_FK` FOREIGN KEY (`id_u_owner`) REFERENCES `user` (`id_u`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `Book_type_FK` FOREIGN KEY (`type_u_b`) REFERENCES `book_type` (`id_b_type`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `user_book_favourite`
--
ALTER TABLE `user_book_favourite`
  ADD CONSTRAINT `category_fav_FK` FOREIGN KEY (`id_category`) REFERENCES `book_category` (`id_b_category`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `user_fav_FK` FOREIGN KEY (`id_u`) REFERENCES `user` (`id_u`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_book_image`
--
ALTER TABLE `user_book_image`
  ADD CONSTRAINT `Book_source_img_FK` FOREIGN KEY (`id_b_source`) REFERENCES `user_book` (`id_u_b`) ON DELETE CASCADE ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
