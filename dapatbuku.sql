/*
SQLyog Community v12.3.3 (64 bit)
MySQL - 10.1.19-MariaDB : Database - dapatbuku_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dapatbuku_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dapatbuku_db`;

/*Table structure for table `banner` */

DROP TABLE IF EXISTS `banner`;

CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pict` varchar(512) DEFAULT NULL,
  `link` varchar(512) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(2) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `banner` */

insert  into `banner`(`id`,`pict`,`link`,`created_at`,`active`) values 
(1,'a','a','2017-01-08 19:15:27',0),
(2,'a','a','2017-01-08 19:20:52',0),
(3,'banner_2.png','aa','2017-01-08 19:49:39',0),
(4,'1.png','gonaked','2017-01-08 19:51:23',1),
(5,'1.jpg','aaa','2017-01-08 20:12:46',1);

/*Table structure for table `book` */

DROP TABLE IF EXISTS `book`;

CREATE TABLE `book` (
  `id_b` int(11) NOT NULL AUTO_INCREMENT,
  `title_b` varchar(200) NOT NULL,
  `slug_title_b` varchar(200) DEFAULT NULL COMMENT 'slug for link',
  `no_isbn_b` varchar(20) DEFAULT 'Tidak Tersedia',
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
  PRIMARY KEY (`id_b`),
  KEY `Book_writer_FK` (`writer`),
  KEY `Book_publisher_FK` (`publisher`),
  FULLTEXT KEY `Book_title` (`title_b`),
  FULLTEXT KEY `tags` (`tags`),
  FULLTEXT KEY `book_tags` (`title_b`,`tags`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=latin1;

/*Data for the table `book` */

insert  into `book`(`id_b`,`title_b`,`slug_title_b`,`no_isbn_b`,`writer`,`publisher`,`pages`,`date_published`,`language_b`,`thumb_cover_b`,`photo_cover_b`,`cover_type_b`,`description_b`,`total_reviews_b`,`total_ratings`,`best_seller_flag`,`best_seller_rank`,`tags`) values 
(1,'Quantum Ikhlas',NULL,'9786020267050','Erbe Sentanu','Elex Media Komputindo',290,'2007-10-01','Indonesia',NULL,NULL,NULL,NULL,0,0,1,1,'kuantum, ikhlas, agama, islam, jujur'),
(2,'Kenali Ragam Kepribafian Yang disukai dan Dibenci',NULL,'9786029789584 ','Naylil Moena','DIVA',NULL,'2011-11-01','Indonesia',NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(3,'Terapi Kejujuran',NULL,'Tidak Tersedia','Yanuardi Syukur',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(4,'Jurus Jitu Mengelola Amarah',NULL,'Tidak Tersedia','Harrista Adiati',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(5,'Analisis Tulisan Tangan',NULL,'Tidak Tersedia','Bayu Ludvianto',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(6,'Sepatu Dahlan',NULL,'Tidak Tersedia','Khrisna Pabichara',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(7,'Si Cacing dan Kotoran Kesayangannya',NULL,'Tidak Tersedia','Ajahn Brahm',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(8,'Si Cacing dan Kotoran Kesayangannya 2',NULL,'Tidak Tersedia','Ajahn Brahm',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(9,'Si Cacing dan Kotoran Kesayangannya 3',NULL,'Tidak Tersedia','Ajahn Brahm',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(10,'Cara Mutakhir Jago Desain Logo',NULL,'Tidak Tersedia','Ferri Caniago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,1,2,NULL),
(11,'99 Ideas for Happy Teens',NULL,'Tidak Tersedia','Deny Riana',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(12,'Benabook',NULL,'Tidak Tersedia','Benazio Rizky',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(13,'Ngenest',NULL,'Tidak Tersedia','Ernest Prakasa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(14,'Ngenest 2',NULL,'Tidak Tersedia','Ernest Prakasa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(15,'Ngenest 3',NULL,'Tidak Tersedia','Ernest Prakasa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(16,'First Time In Beijing',NULL,'Tidak Tersedia','Riawani Elyta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(17,'Kwaidan',NULL,'Tidak Tersedia','Koizumi Yakumo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(18,'Heart Emergency',NULL,'Tidak Tersedia','Falla Adinda',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(19,'Hore Guru Si Cacing Datang',NULL,'Tidak Tersedia','Ajahn Brahm',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(20,'Daun yang Jatuh Tak Pernah Membenci Angin',NULL,'Tidak Tersedia','Tere Liye',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,1,NULL,NULL),
(21,'Habibie & Ainun',NULL,'Tidak Tersedia','B.J. Habibie',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,1,NULL,NULL),
(22,'101 Creative Notes',NULL,'Tidak Tersedia','Yoris Sebastians',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,1,NULL,NULL),
(23,'Managing People',NULL,'Tidak Tersedia','A.M. Lilik Agung',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,1,5,NULL),
(24,'It\'s My Startup',NULL,'Tidak Tersedia','Lahandi Baskoro',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,1,6,NULL),
(25,'100 Kecerdasan Setan',NULL,'Tidak Tersedia','Wiwid Prasetyo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,1,7,NULL),
(26,'60 Inovasi Pilihan Kompas',NULL,'Tidak Tersedia','Nawa Tunggal',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,1,NULL,NULL),
(27,'Yakuza Moon',NULL,'Tidak Tersedia','Shoko Tendo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,1,NULL,NULL),
(28,'Fat Bulous',NULL,'Tidak Tersedia','Fidriwida',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,1,9,NULL),
(29,'Kitab Anti Bangkrut',NULL,'Tidak Tersedia','Jaya Setiabudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,1,8,NULL),
(30,'Young On Top Campus Ambassador',NULL,'Tidak Tersedia','Youn On Top',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(31,'The 5 Level of Leadership',NULL,'Tidak Tersedia','John C Maxwell',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,1,10,NULL),
(32,'Kun Fayakuun',NULL,'Tidak Tersedia','M. Arifin Ilham',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(33,'50 Ritual Pagi Miliarder Sedunia',NULL,'Tidak Tersedia','Budi Safa\'at',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(34,'Secangkir Kopi Tanpa Kafein',NULL,'Tidak Tersedia','Rose Kusumaning R',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(35,'Kamus Istilah Komentator Bola',NULL,'Tidak Tersedia','Mice Cartoon',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(36,'Buka Langsung Laris',NULL,'Tidak Tersedia','Jaya Setiabudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(37,'Ken & Kaskus Cerita Sukses di Usia Muda',NULL,'Tidak Tersedia','Alberthiene Endah',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(38,'Total Habibie',NULL,'Tidak Tersedia','A. Makmur Makka',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(39,'Bertambah Bijak Setiap Hari 8 x 3 = 23',NULL,'Tidak Tersedia','Budi S Tanuwibowo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(40,'Alex Ferguson Autobiografi Saya',NULL,'Tidak Tersedia','Alex Ferguson',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(41,'Surat Dahlan',NULL,'Tidak Tersedia','Khrisna Pabichara',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(42,'Top Words 2',NULL,'Tidak Tersedia','Billy Boen',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(43,'Sholat Tahajjud Khusus Para Pebisnis',NULL,'Tidak Tersedia','Sitiatava Rizema Putra',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(44,'Positive Thinking Itu Dipraktekin',NULL,'Tidak Tersedia','Tim Wesfix',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(45,'Dosa-Dosa Besar Yang Telah Dianggap Biasa Dalam Keseharian Kita',NULL,'Tidak Tersedia','Naylil Moena',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(46,'Seni Bertengkar Suami Istri Untuk Mengharmoniskan Rumah Tangga',NULL,'Tidak Tersedia','Naylil Moena',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(47,'Buat Suami Bertekuk Lutut di Hadapan Istri',NULL,'Tidak Tersedia','Naylil Moena',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(48,'The Miracle Of Sabar',NULL,'Tidak Tersedia','Yanuardi Syukur',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(49,'Mukjizat Gerakan Shalat',NULL,'Tidak Tersedia','Yanuardi Syukur',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(50,'Presiden Mursi (Kisah Ketakutan Dunia Pada Kekuatan Ikhwanul Muslimin)',NULL,'Tidak Tersedia','Yanuardi Syukur',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(51,'Kekuatan Memaafkan',NULL,'Tidak Tersedia','Yanuardi Syukur',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(52,'Ternyata Sayap Lalat Mengandung Obat',NULL,'Tidak Tersedia','Yanuardi Syukur',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(53,'Facebook Sebelah Surga Sebelah Neraka',NULL,'Tidak Tersedia','Yanuardi Syukur',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(54,'Kindfulness',NULL,'Tidak Tersedia','Ajahn Brahm',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(55,'I Love Mediation',NULL,'Tidak Tersedia','Ajahn Brahm',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(56,'Hello Happiness',NULL,'Tidak Tersedia','Ajahn Brahm',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(57,'Dont Worry Be Hopey',NULL,'Tidak Tersedia','Ajahn Brahm',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(58,'Hidup Senang Mati Tenang',NULL,'Tidak Tersedia','Ajahn Brahm',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(59,'Membuka Pintu Hati',NULL,'Tidak Tersedia','Ajahn Brahm',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(60,'Superpower Mindfulness',NULL,'Tidak Tersedia','Ajahn Brahm',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(61,'Antologi Cinta',NULL,'Tidak Tersedia','Khrisna Pabhicara',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(62,'Kamus Nama Indah Islami',NULL,'Tidak Tersedia','Khrisna Pabhicara',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(63,'Gadis Pakarena',NULL,'Tidak Tersedia','Khrisna Pabhicara',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(64,'10 Rahasia Pembelajar Kreatif',NULL,'Tidak Tersedia','Khrisna Pabhicara',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(65,'Mengawini Ibu Senarai Kisah Yang Menggetarkan',NULL,'Tidak Tersedia','Khrisna Pabhicara',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(66,'Kisah Pengantar Tidur Dari Al Quran Untuk Buah Hati',NULL,'Tidak Tersedia','Adrian R. Nugraha, Deny Riana',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(67,'Cerita-Cerita Al Qur\'an Menakjubkan',NULL,'Tidak Tersedia','Adrian R. Nugraha, Deny Riana ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(68,'Menjadi Isteri yang Layak Dicintai',NULL,'Tidak Tersedia','Uken Junaedi, Deny Riana ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(69,'Refresh Your Life',NULL,'Tidak Tersedia','Deny Riana',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(70,'Chicken Soup Tumpah',NULL,'Tidak Tersedia','Nur Novilina',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(71,'Ayah',NULL,'Tidak Tersedia','Andrea Hirata',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(72,'Edensor',NULL,'Tidak Tersedia','Andrea Hirata',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(73,'Laskar Pelangi',NULL,'Tidak Tersedia','Andrea Hirata',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(74,'Sang Pemimpi',NULL,'Tidak Tersedia','Andrea Hirata',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(75,'Maryamah Karpov',NULL,'Tidak Tersedia','Andrea Hirata',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(76,'Sebelas Patriot',NULL,'Tidak Tersedia','Andrea Hirata',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(77,'Padang Bulan',NULL,'Tidak Tersedia','Andrea Hirata',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(78,'Cinta di Dalam Gelas',NULL,'Tidak Tersedia','Andrea Hirata',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(79,'Primbon Mantra Uang',NULL,'Tidak Tersedia','Aldian Prakoso ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(80,'Mobile Mantra Uang',NULL,'Tidak Tersedia','Aldian Prakoso ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(81,'Mantra Uang dari WordPress Blog',NULL,'Tidak Tersedia','Aldian Prakoso ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(82,'Mantra Uang dari WordPress Blog 2.0',NULL,'Tidak Tersedia','Aldian Prakoso ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(83,'The Bridesmaids Tale',NULL,'Tidak Tersedia','Fala Amalina @Kaleela',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(84,'Top Words',NULL,'Tidak Tersedia','Billy Boen',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(85,'Young On Top',NULL,'Tidak Tersedia','Billy Boen',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(86,'Young On Top New Edition',NULL,'Tidak Tersedia','Billy Boen',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(87,'Air Mata Nayla',NULL,'Tidak Tersedia','Muhammad Ardiansha El Zemani',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(89,'Beruntungnya Si Bahlul',NULL,'Tidak Tersedia','Yoyok Dwi Prastyo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(90,'Mengapa Si Penjudi Masuk Surga Sedangkan Si Sufi Masuk Neraka?',NULL,'Tidak Tersedia','Yoyok Dwi Prastyo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,1,3,NULL),
(91,'Relationshit',NULL,'Tidak Tersedia','Alit Susanto',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(92,'Kancut Keblenger: Digital Love',NULL,'Tidak Tersedia','Alit Susanto, Irvina Lioni, Anggi Tristiyono',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(93,'Gado-Gado Kualat',NULL,'Tidak Tersedia','Alit Susanto',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(94,'Skripshit',NULL,'Tidak Tersedia','Alit Susanto',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(95,'My Other Half',NULL,'Tidak Tersedia','Cyndi Dianing Ratri',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(96,'Pada Senja Yang Membawamu Pergi',NULL,'Tidak Tersedia','Boy Candra',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(97,'Sebuah Usaha Melupakan',NULL,'Tidak Tersedia','Boy Candra',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(98,'Seperti Hujan Yang Jatuh Ke Bumi',NULL,'Tidak Tersedia','Boy Candra',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(99,'Setelah Hujan Reda',NULL,'Tidak Tersedia','Boy Candra',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(100,'Kuajak Kau ke Hutan dan Tersesat Berdua',NULL,'Tidak Tersedia','Boy Candra',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(101,'Surat Kecil Untuk Ayah',NULL,'Tidak Tersedia','Boy Candra',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(102,'Satu Hari di 2018',NULL,'Tidak Tersedia','Boy Candra',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(103,'Sepasang Kekasih yang Belum Bertemu',NULL,'Tidak Tersedia','Boy Candra',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(104,'Senja, Hujan, Dan Cerita Yang Telah Usai',NULL,'Tidak Tersedia','Boy Candra',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(105,'Catatan Pendek untuk Cinta yang Panjang',NULL,'Tidak Tersedia','Boy Candra',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(106,'Origami Hati',NULL,'Tidak Tersedia','Boy Candra',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(107,'Ketika Ibu telah Tiada','Thoriq Aziz Jayana ','Tidak Tersedia',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(108,'Meneladani Semut dan Lebah',NULL,'Tidak Tersedia','Thoriq Aziz Jayana',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(109,'Karyawan Harus Nabung Biar Makmur',NULL,'Tidak Tersedia','Safir Senduk',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(110,'Seri Perencanaan Keuangan Keluarga: Mencari Penghasilan Tambahan',NULL,'Tidak Tersedia','Safir Senduk',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(111,'Seri Perencanaan Keuangan Keluarga: Mengantisipasi Resiko',NULL,'Tidak Tersedia','Safir Senduk ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(112,'Siapa Bilang Jadi Karyawan Nggak Bisa Kaya',NULL,'Tidak Tersedia','Safir Senduk',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(113,'Seri Kiat Praktis Perencanaan Keuangan: \"Buka Usaha Nggak Kaya? Percuma\"',NULL,'Tidak Tersedia','Safir Senduk',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(114,'Seri Perencanaan Keuangan Keluarga: Mengatur Pengeluaran Secara Bijak',NULL,'Tidak Tersedia','Safir Senduk',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(115,'Seri Perencanaan Keuangan Keluarga: Mengelola Keuangan Keluarga',NULL,'Tidak Tersedia','Safir Senduk',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(116,'Seri Perencanaan Keuangan Keluarga: Mempersiapkan Dana Pendidikan Anak',NULL,'Tidak Tersedia','Safir Senduk',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(117,'Seri Perencanaan Keuangan Keluarga: Merancang Program Pensiun',NULL,'Tidak Tersedia','Safir Senduk',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(118,'Buka Usaha Gak Kaya, Percuma!',NULL,'Tidak Tersedia','Safir Senduk',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(119,'Memasuki Era BUMN Multinational Coorporation',NULL,'Tidak Tersedia','Dahlan Iskan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(120,'Tidak ada yang tidak bisa',NULL,'Tidak Tersedia','Dahlan Iskan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(121,'Manufacturing Hope: Bisa !',NULL,'Tidak Tersedia','Dahlan Iskan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(122,'Ganti Hati',NULL,'Tidak Tersedia','Dahlan Iskan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(123,'Karmaka Surjandaja: No Such Thing as Can\'t',NULL,'Tidak Tersedia','Dahlan Iskan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(124,'Manufacturing Hope Series: Oleh-oleh dari Kantor BUMN',NULL,'Tidak Tersedia','Dahlan Iskan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(125,'Dua Tangis dan Ribuan Tawa',NULL,'Tidak Tersedia','Dahlan Iskan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(126,'Smart Way to Get A Job',NULL,'Tidak Tersedia','Rahmat Kurniawan ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(127,'Menjadi Tambah Kaya dan Terencana dengan Reksa Dana',NULL,'Tidak Tersedia','Ryan Filbert Wijaya',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(128,'I\'m Motivator: Kisah Inspiratif Motivator Indonesia',NULL,'Tidak Tersedia','Ongky Hojanto',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(129,'The Art of Being Brilliant: Memaksimalkan Bagian Terbaik Diri Kita',NULL,'Tidak Tersedia','Andy Cope, Andy Whittaker ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(130,'Baper Bawa Perubahan',NULL,'Tidak Tersedia','Rhenald Kasali',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(131,'Miracles on Demand',NULL,'Tidak Tersedia','Adi W. Gunawan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(132,'Spirit Of Life, 25 Inspirasi dan Motivasi Penggugah Jiwa',NULL,'Tidak Tersedia','Muhammad Syah Fibrika Ramadhan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(133,'Direktur Berkata',NULL,'Tidak Tersedia','Jung Min Woo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(134,'33 Cara Kaya Ala Bob Sadino Motivasi Bisnis Anti-gagal',NULL,'Tidak Tersedia','Asterlita SV',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(135,'The Achievement Habit Berhenti Berharap, Mulai Lakukan, Dan Ambil Kendali Hidup Anda',NULL,'Tidak Tersedia','Bernard Roth',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(136,'Merry Riana - Campus Ambassadors',NULL,'Tidak Tersedia','Shandy Tan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(137,'Cinta Tanpa Cerita',NULL,'Tidak Tersedia','@infiniteloved',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(138,'7 Tokoh Dunia Yang Pernah Kami Temui & Rahasia-Rahasia Mereka',NULL,'Tidak Tersedia','Ippho D. Santosa, Imam Shamsi Ali',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(139,'Burung Besi Monika',NULL,'Tidak Tersedia','Monika Anggreini',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(140,'Jangan Grogi! Jurus Sukses Mengikuti',NULL,'Tidak Tersedia','Wishnu Soehardjo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(141,'Ini Buku Kamu',NULL,'Tidak Tersedia','Dedy Dahlan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,1,4,NULL),
(142,'Sukses di Usia Muda, Harga Mati!',NULL,'Tidak Tersedia','Ustadz Ahmad zahrudin M. Nafis',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(143,'Maximus Dan Gladiator Papua, Freeport\'s Untold Story',NULL,'Tidak Tersedia','MAXIMUS TIPAGAU',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(144,'6 Rahasia Sederhana Menjadi Remaja Bahagia',NULL,'Tidak Tersedia','Guntur Alam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(145,'Mind Map Langkah Demi Langkah',NULL,'Tidak Tersedia','Sutanto Windura',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(146,'Be An Absolute',NULL,'Tidak Tersedia','Sutanto Windura',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(147,'Kekuatan Menerima Diri Apa Adanya',NULL,'Tidak Tersedia','Brene Brown',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(148,'WARRIOR The Art of Winning the Battle of Success',NULL,'Tidak Tersedia','Darmadi Darmawangsa, Davit Setiawan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(149,'Pengangguran Kaya Raya',NULL,'Tidak Tersedia','WILDAN FATONI',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(150,'Teknik Menghilangkan Stres dari Otak',NULL,'Tidak Tersedia','Hideho Arita',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL);

/*Table structure for table `book_category` */

DROP TABLE IF EXISTS `book_category`;

CREATE TABLE `book_category` (
  `id_b_category` int(11) NOT NULL AUTO_INCREMENT,
  `name_b_category` varchar(100) NOT NULL,
  `desc_b_category` text,
  PRIMARY KEY (`id_b_category`),
  KEY `id_b_category` (`id_b_category`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `book_category` */

insert  into `book_category`(`id_b_category`,`name_b_category`,`desc_b_category`) values 
(1,'Bisnis','Bisnis adalah usaha menjual barang atau jasa yang dilakukan oleh perorangan, sekelompok orang atau organisasi kepada konsumen (masyarakat) dengan tujuan utamanya adalah memperoleh keuntungan/laba (profit). Pada dasarnya, kita melakukan bisnis adalah untuk memperoleh laba atau keuntungan '),
(2,'Agama',NULL),
(3,'Hukum',NULL),
(4,'Novel',NULL);

/*Table structure for table `book_category_connector` */

DROP TABLE IF EXISTS `book_category_connector`;

CREATE TABLE `book_category_connector` (
  `id_bcc` int(15) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_bcc`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `book_category_connector` */

insert  into `book_category_connector`(`id_bcc`,`book_id`,`cat_id`) values 
(1,4,1),
(2,4,2),
(3,4,3),
(4,5,1),
(5,5,2),
(6,5,3),
(7,7,1),
(8,7,2),
(9,8,1),
(10,8,2),
(11,9,1),
(12,9,2),
(13,10,4),
(14,11,4),
(15,12,1),
(16,12,2),
(17,13,1),
(18,13,2),
(19,14,1),
(20,14,2);

/*Table structure for table `book_rating` */

DROP TABLE IF EXISTS `book_rating`;

CREATE TABLE `book_rating` (
  `id_b_rating` int(11) NOT NULL AUTO_INCREMENT,
  `date_rating` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rating` int(11) NOT NULL,
  `id_u` int(11) DEFAULT NULL,
  `id_b` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_b_rating`),
  KEY `rating_user_FK` (`id_u`),
  KEY `rating_book_FK` (`id_b`),
  CONSTRAINT `rating_book_FK` FOREIGN KEY (`id_b`) REFERENCES `book` (`id_b`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `rating_user_FK` FOREIGN KEY (`id_u`) REFERENCES `user` (`id_u`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `book_rating` */

/*Table structure for table `book_review` */

DROP TABLE IF EXISTS `book_review`;

CREATE TABLE `book_review` (
  `id_b_review` int(11) NOT NULL AUTO_INCREMENT,
  `title_b_review` varchar(50) NOT NULL,
  `content_b_review` varchar(300) NOT NULL,
  `id_u` int(11) DEFAULT NULL,
  `id_b` int(11) DEFAULT NULL,
  `date_b_review` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `total_like` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_b_review`),
  KEY `review_user_FK` (`id_u`),
  KEY `review_book_FK` (`id_b`),
  CONSTRAINT `review_book_FK` FOREIGN KEY (`id_b`) REFERENCES `book` (`id_b`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `review_user_FK` FOREIGN KEY (`id_u`) REFERENCES `user` (`id_u`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `book_review` */

insert  into `book_review`(`id_b_review`,`title_b_review`,`content_b_review`,`id_u`,`id_b`,`date_b_review`,`total_like`) values 
(16,'Mau Nulis Ulasan','ini ulasanku lo bagus kann',4,NULL,'2016-11-08 01:54:04',0),
(17,'Judul','Banana',4,NULL,'2017-01-05 11:34:18',0),
(18,'Judul','Banana',4,NULL,'2017-01-05 11:34:26',0);

/*Table structure for table `book_review_like` */

DROP TABLE IF EXISTS `book_review_like`;

CREATE TABLE `book_review_like` (
  `id_b_review_like` int(11) NOT NULL AUTO_INCREMENT,
  `id_b_review` int(11) NOT NULL,
  `point` int(11) NOT NULL DEFAULT '0',
  `id_u` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_b_review_like`),
  KEY `user_like_FK` (`id_u`),
  KEY `book_like_FK` (`id_b_review`),
  CONSTRAINT `book_like_FK` FOREIGN KEY (`id_b_review`) REFERENCES `book_review` (`id_b_review`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_like_FK` FOREIGN KEY (`id_u`) REFERENCES `user` (`id_u`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `book_review_like` */

/*Table structure for table `book_status` */

DROP TABLE IF EXISTS `book_status`;

CREATE TABLE `book_status` (
  `id_b_status` int(11) NOT NULL AUTO_INCREMENT,
  `name_b_status` varchar(100) NOT NULL,
  PRIMARY KEY (`id_b_status`),
  KEY `id_b_status` (`id_b_status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `book_status` */

/*Table structure for table `book_type` */

DROP TABLE IF EXISTS `book_type`;

CREATE TABLE `book_type` (
  `id_b_type` int(11) NOT NULL AUTO_INCREMENT,
  `name_b_type` varchar(100) NOT NULL,
  PRIMARY KEY (`id_b_type`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `book_type` */

insert  into `book_type`(`id_b_type`,`name_b_type`) values 
(1,'Baru'),
(2,'Bekas');

/*Table structure for table `chat_messages` */

DROP TABLE IF EXISTS `chat_messages`;

CREATE TABLE `chat_messages` (
  `id_messages` int(18) NOT NULL AUTO_INCREMENT,
  `chat_room_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `message` varchar(512) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `read_status` int(2) DEFAULT '0',
  PRIMARY KEY (`id_messages`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `chat_messages` */

insert  into `chat_messages`(`id_messages`,`chat_room_id`,`user_id`,`message`,`created_at`,`read_status`) values 
(1,2,4,'woiwoi','2016-11-06 05:00:00',0),
(2,2,4,'qweqeqe','2016-11-06 06:00:00',0),
(3,2,1,'hmmm','2016-11-06 10:46:36',1),
(4,1,4,'Coba ini gimana sih','2016-11-06 10:55:45',1),
(5,2,4,'asd','2016-11-06 12:12:56',0),
(6,2,4,'halo gan','2016-11-06 12:13:56',0),
(7,2,4,'halo gan','2016-11-06 12:14:28',0),
(8,2,4,'coba ini','2016-11-06 12:14:44',0),
(9,1,4,'halo kev','2016-11-06 12:14:56',1),
(10,1,3,'halo dum','2016-11-06 12:44:12',1),
(11,1,4,'halo kev','2016-11-06 12:44:41',1),
(12,1,3,'baahahha','2016-11-06 12:44:46',1),
(13,3,3,'woi','2016-11-06 13:16:07',0),
(14,4,3,'woiii','2016-11-06 13:16:48',1),
(15,5,3,'aaww','2016-11-06 13:17:13',1),
(16,6,4,'hai kev','2016-11-06 13:19:40',0),
(17,1,3,'hai dummy ~','2016-11-06 16:08:44',1),
(18,1,3,'this is totally new chat','2016-11-06 16:08:51',1),
(19,1,3,'sooo read this','2016-11-06 16:10:40',1),
(20,1,4,'hei kev\r\nkamu ganteng sekali','2016-11-06 16:12:07',1),
(21,1,3,'COBA','2016-11-06 16:15:12',1),
(22,4,3,'helo kevin im kev too','2016-11-06 16:15:24',0),
(23,1,4,'helo kev','2016-11-21 09:10:05',0),
(24,7,4,'hello harlan','2016-11-21 09:10:40',1);

/*Table structure for table `chat_room` */

DROP TABLE IF EXISTS `chat_room`;

CREATE TABLE `chat_room` (
  `id_cr` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` date DEFAULT NULL,
  `last_active` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_1` int(11) DEFAULT NULL,
  `user_2` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_cr`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `chat_room` */

insert  into `chat_room`(`id_cr`,`created_at`,`last_active`,`user_1`,`user_2`) values 
(1,'2016-11-06','2016-11-21 09:10:05',3,4),
(2,'2016-11-06','2016-11-06 00:00:00',4,1),
(4,'2016-11-06','2016-11-06 16:15:24',2,3),
(5,'2016-11-06','2016-11-06 13:17:03',1,3),
(6,'2016-11-06','2016-11-06 13:19:37',2,4),
(7,'2016-11-21','2016-11-21 09:10:40',47,4),
(8,'2016-11-21','2016-11-21 09:11:44',1,47);

/*Table structure for table `publishers` */

DROP TABLE IF EXISTS `publishers`;

CREATE TABLE `publishers` (
  `id_publishers` int(11) NOT NULL AUTO_INCREMENT,
  `name_publishers` varchar(100) NOT NULL,
  `origin_publishers` varchar(150) NOT NULL,
  `phone_number_publishers` varchar(15) NOT NULL,
  `address_publishers` varchar(200) NOT NULL,
  `description_publishers` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_publishers`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `publishers` */

/*Table structure for table `region_provinces` */

DROP TABLE IF EXISTS `region_provinces`;

CREATE TABLE `region_provinces` (
  `id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `region_provinces` */

insert  into `region_provinces`(`id`,`name`) values 
('11','ACEH'),
('12','SUMATERA UTARA'),
('13','SUMATERA BARAT'),
('14','RIAU'),
('15','JAMBI'),
('16','SUMATERA SELATAN'),
('17','BENGKULU'),
('18','LAMPUNG'),
('19','KEPULAUAN BANGKA BELITUNG'),
('21','KEPULAUAN RIAU'),
('31','DKI JAKARTA'),
('32','JAWA BARAT'),
('33','JAWA TENGAH'),
('34','DI YOGYAKARTA'),
('35','JAWA TIMUR'),
('36','BANTEN'),
('51','BALI'),
('52','NUSA TENGGARA BARAT'),
('53','NUSA TENGGARA TIMUR'),
('61','KALIMANTAN BARAT'),
('62','KALIMANTAN TENGAH'),
('63','KALIMANTAN SELATAN'),
('64','KALIMANTAN TIMUR'),
('65','KALIMANTAN UTARA'),
('71','SULAWESI UTARA'),
('72','SULAWESI TENGAH'),
('73','SULAWESI SELATAN'),
('74','SULAWESI TENGGARA'),
('75','GORONTALO'),
('76','SULAWESI BARAT'),
('81','MALUKU'),
('82','MALUKU UTARA'),
('91','PAPUA BARAT'),
('94','PAPUA');

/*Table structure for table `region_regencies` */

DROP TABLE IF EXISTS `region_regencies`;

CREATE TABLE `region_regencies` (
  `id` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `province_id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `regencies_province_id_index` (`province_id`),
  CONSTRAINT `regencies_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `region_provinces` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `region_regencies` */

insert  into `region_regencies`(`id`,`province_id`,`name`) values 
('1101','11','KABUPATEN SIMEULUE'),
('1102','11','KABUPATEN ACEH SINGKIL'),
('1103','11','KABUPATEN ACEH SELATAN'),
('1104','11','KABUPATEN ACEH TENGGARA'),
('1105','11','KABUPATEN ACEH TIMUR'),
('1106','11','KABUPATEN ACEH TENGAH'),
('1107','11','KABUPATEN ACEH BARAT'),
('1108','11','KABUPATEN ACEH BESAR'),
('1109','11','KABUPATEN PIDIE'),
('1110','11','KABUPATEN BIREUEN'),
('1111','11','KABUPATEN ACEH UTARA'),
('1112','11','KABUPATEN ACEH BARAT DAYA'),
('1113','11','KABUPATEN GAYO LUES'),
('1114','11','KABUPATEN ACEH TAMIANG'),
('1115','11','KABUPATEN NAGAN RAYA'),
('1116','11','KABUPATEN ACEH JAYA'),
('1117','11','KABUPATEN BENER MERIAH'),
('1118','11','KABUPATEN PIDIE JAYA'),
('1171','11','KOTA BANDA ACEH'),
('1172','11','KOTA SABANG'),
('1173','11','KOTA LANGSA'),
('1174','11','KOTA LHOKSEUMAWE'),
('1175','11','KOTA SUBULUSSALAM'),
('1201','12','KABUPATEN NIAS'),
('1202','12','KABUPATEN MANDAILING NATAL'),
('1203','12','KABUPATEN TAPANULI SELATAN'),
('1204','12','KABUPATEN TAPANULI TENGAH'),
('1205','12','KABUPATEN TAPANULI UTARA'),
('1206','12','KABUPATEN TOBA SAMOSIR'),
('1207','12','KABUPATEN LABUHAN BATU'),
('1208','12','KABUPATEN ASAHAN'),
('1209','12','KABUPATEN SIMALUNGUN'),
('1210','12','KABUPATEN DAIRI'),
('1211','12','KABUPATEN KARO'),
('1212','12','KABUPATEN DELI SERDANG'),
('1213','12','KABUPATEN LANGKAT'),
('1214','12','KABUPATEN NIAS SELATAN'),
('1215','12','KABUPATEN HUMBANG HASUNDUTAN'),
('1216','12','KABUPATEN PAKPAK BHARAT'),
('1217','12','KABUPATEN SAMOSIR'),
('1218','12','KABUPATEN SERDANG BEDAGAI'),
('1219','12','KABUPATEN BATU BARA'),
('1220','12','KABUPATEN PADANG LAWAS UTARA'),
('1221','12','KABUPATEN PADANG LAWAS'),
('1222','12','KABUPATEN LABUHAN BATU SELATAN'),
('1223','12','KABUPATEN LABUHAN BATU UTARA'),
('1224','12','KABUPATEN NIAS UTARA'),
('1225','12','KABUPATEN NIAS BARAT'),
('1271','12','KOTA SIBOLGA'),
('1272','12','KOTA TANJUNG BALAI'),
('1273','12','KOTA PEMATANG SIANTAR'),
('1274','12','KOTA TEBING TINGGI'),
('1275','12','KOTA MEDAN'),
('1276','12','KOTA BINJAI'),
('1277','12','KOTA PADANGSIDIMPUAN'),
('1278','12','KOTA GUNUNGSITOLI'),
('1301','13','KABUPATEN KEPULAUAN MENTAWAI'),
('1302','13','KABUPATEN PESISIR SELATAN'),
('1303','13','KABUPATEN SOLOK'),
('1304','13','KABUPATEN SIJUNJUNG'),
('1305','13','KABUPATEN TANAH DATAR'),
('1306','13','KABUPATEN PADANG PARIAMAN'),
('1307','13','KABUPATEN AGAM'),
('1308','13','KABUPATEN LIMA PULUH KOTA'),
('1309','13','KABUPATEN PASAMAN'),
('1310','13','KABUPATEN SOLOK SELATAN'),
('1311','13','KABUPATEN DHARMASRAYA'),
('1312','13','KABUPATEN PASAMAN BARAT'),
('1371','13','KOTA PADANG'),
('1372','13','KOTA SOLOK'),
('1373','13','KOTA SAWAH LUNTO'),
('1374','13','KOTA PADANG PANJANG'),
('1375','13','KOTA BUKITTINGGI'),
('1376','13','KOTA PAYAKUMBUH'),
('1377','13','KOTA PARIAMAN'),
('1401','14','KABUPATEN KUANTAN SINGINGI'),
('1402','14','KABUPATEN INDRAGIRI HULU'),
('1403','14','KABUPATEN INDRAGIRI HILIR'),
('1404','14','KABUPATEN PELALAWAN'),
('1405','14','KABUPATEN S I A K'),
('1406','14','KABUPATEN KAMPAR'),
('1407','14','KABUPATEN ROKAN HULU'),
('1408','14','KABUPATEN BENGKALIS'),
('1409','14','KABUPATEN ROKAN HILIR'),
('1410','14','KABUPATEN KEPULAUAN MERANTI'),
('1471','14','KOTA PEKANBARU'),
('1473','14','KOTA D U M A I'),
('1501','15','KABUPATEN KERINCI'),
('1502','15','KABUPATEN MERANGIN'),
('1503','15','KABUPATEN SAROLANGUN'),
('1504','15','KABUPATEN BATANG HARI'),
('1505','15','KABUPATEN MUARO JAMBI'),
('1506','15','KABUPATEN TANJUNG JABUNG TIMUR'),
('1507','15','KABUPATEN TANJUNG JABUNG BARAT'),
('1508','15','KABUPATEN TEBO'),
('1509','15','KABUPATEN BUNGO'),
('1571','15','KOTA JAMBI'),
('1572','15','KOTA SUNGAI PENUH'),
('1601','16','KABUPATEN OGAN KOMERING ULU'),
('1602','16','KABUPATEN OGAN KOMERING ILIR'),
('1603','16','KABUPATEN MUARA ENIM'),
('1604','16','KABUPATEN LAHAT'),
('1605','16','KABUPATEN MUSI RAWAS'),
('1606','16','KABUPATEN MUSI BANYUASIN'),
('1607','16','KABUPATEN BANYU ASIN'),
('1608','16','KABUPATEN OGAN KOMERING ULU SELATAN'),
('1609','16','KABUPATEN OGAN KOMERING ULU TIMUR'),
('1610','16','KABUPATEN OGAN ILIR'),
('1611','16','KABUPATEN EMPAT LAWANG'),
('1612','16','KABUPATEN PENUKAL ABAB LEMATANG ILIR'),
('1613','16','KABUPATEN MUSI RAWAS UTARA'),
('1671','16','KOTA PALEMBANG'),
('1672','16','KOTA PRABUMULIH'),
('1673','16','KOTA PAGAR ALAM'),
('1674','16','KOTA LUBUKLINGGAU'),
('1701','17','KABUPATEN BENGKULU SELATAN'),
('1702','17','KABUPATEN REJANG LEBONG'),
('1703','17','KABUPATEN BENGKULU UTARA'),
('1704','17','KABUPATEN KAUR'),
('1705','17','KABUPATEN SELUMA'),
('1706','17','KABUPATEN MUKOMUKO'),
('1707','17','KABUPATEN LEBONG'),
('1708','17','KABUPATEN KEPAHIANG'),
('1709','17','KABUPATEN BENGKULU TENGAH'),
('1771','17','KOTA BENGKULU'),
('1801','18','KABUPATEN LAMPUNG BARAT'),
('1802','18','KABUPATEN TANGGAMUS'),
('1803','18','KABUPATEN LAMPUNG SELATAN'),
('1804','18','KABUPATEN LAMPUNG TIMUR'),
('1805','18','KABUPATEN LAMPUNG TENGAH'),
('1806','18','KABUPATEN LAMPUNG UTARA'),
('1807','18','KABUPATEN WAY KANAN'),
('1808','18','KABUPATEN TULANGBAWANG'),
('1809','18','KABUPATEN PESAWARAN'),
('1810','18','KABUPATEN PRINGSEWU'),
('1811','18','KABUPATEN MESUJI'),
('1812','18','KABUPATEN TULANG BAWANG BARAT'),
('1813','18','KABUPATEN PESISIR BARAT'),
('1871','18','KOTA BANDAR LAMPUNG'),
('1872','18','KOTA METRO'),
('1901','19','KABUPATEN BANGKA'),
('1902','19','KABUPATEN BELITUNG'),
('1903','19','KABUPATEN BANGKA BARAT'),
('1904','19','KABUPATEN BANGKA TENGAH'),
('1905','19','KABUPATEN BANGKA SELATAN'),
('1906','19','KABUPATEN BELITUNG TIMUR'),
('1971','19','KOTA PANGKAL PINANG'),
('2101','21','KABUPATEN KARIMUN'),
('2102','21','KABUPATEN BINTAN'),
('2103','21','KABUPATEN NATUNA'),
('2104','21','KABUPATEN LINGGA'),
('2105','21','KABUPATEN KEPULAUAN ANAMBAS'),
('2171','21','KOTA B A T A M'),
('2172','21','KOTA TANJUNG PINANG'),
('3101','31','KABUPATEN KEPULAUAN SERIBU'),
('3171','31','KOTA JAKARTA SELATAN'),
('3172','31','KOTA JAKARTA TIMUR'),
('3173','31','KOTA JAKARTA PUSAT'),
('3174','31','KOTA JAKARTA BARAT'),
('3175','31','KOTA JAKARTA UTARA'),
('3201','32','KABUPATEN BOGOR'),
('3202','32','KABUPATEN SUKABUMI'),
('3203','32','KABUPATEN CIANJUR'),
('3204','32','KABUPATEN BANDUNG'),
('3205','32','KABUPATEN GARUT'),
('3206','32','KABUPATEN TASIKMALAYA'),
('3207','32','KABUPATEN CIAMIS'),
('3208','32','KABUPATEN KUNINGAN'),
('3209','32','KABUPATEN CIREBON'),
('3210','32','KABUPATEN MAJALENGKA'),
('3211','32','KABUPATEN SUMEDANG'),
('3212','32','KABUPATEN INDRAMAYU'),
('3213','32','KABUPATEN SUBANG'),
('3214','32','KABUPATEN PURWAKARTA'),
('3215','32','KABUPATEN KARAWANG'),
('3216','32','KABUPATEN BEKASI'),
('3217','32','KABUPATEN BANDUNG BARAT'),
('3218','32','KABUPATEN PANGANDARAN'),
('3271','32','KOTA BOGOR'),
('3272','32','KOTA SUKABUMI'),
('3273','32','KOTA BANDUNG'),
('3274','32','KOTA CIREBON'),
('3275','32','KOTA BEKASI'),
('3276','32','KOTA DEPOK'),
('3277','32','KOTA CIMAHI'),
('3278','32','KOTA TASIKMALAYA'),
('3279','32','KOTA BANJAR'),
('3301','33','KABUPATEN CILACAP'),
('3302','33','KABUPATEN BANYUMAS'),
('3303','33','KABUPATEN PURBALINGGA'),
('3304','33','KABUPATEN BANJARNEGARA'),
('3305','33','KABUPATEN KEBUMEN'),
('3306','33','KABUPATEN PURWOREJO'),
('3307','33','KABUPATEN WONOSOBO'),
('3308','33','KABUPATEN MAGELANG'),
('3309','33','KABUPATEN BOYOLALI'),
('3310','33','KABUPATEN KLATEN'),
('3311','33','KABUPATEN SUKOHARJO'),
('3312','33','KABUPATEN WONOGIRI'),
('3313','33','KABUPATEN KARANGANYAR'),
('3314','33','KABUPATEN SRAGEN'),
('3315','33','KABUPATEN GROBOGAN'),
('3316','33','KABUPATEN BLORA'),
('3317','33','KABUPATEN REMBANG'),
('3318','33','KABUPATEN PATI'),
('3319','33','KABUPATEN KUDUS'),
('3320','33','KABUPATEN JEPARA'),
('3321','33','KABUPATEN DEMAK'),
('3322','33','KABUPATEN SEMARANG'),
('3323','33','KABUPATEN TEMANGGUNG'),
('3324','33','KABUPATEN KENDAL'),
('3325','33','KABUPATEN BATANG'),
('3326','33','KABUPATEN PEKALONGAN'),
('3327','33','KABUPATEN PEMALANG'),
('3328','33','KABUPATEN TEGAL'),
('3329','33','KABUPATEN BREBES'),
('3371','33','KOTA MAGELANG'),
('3372','33','KOTA SURAKARTA'),
('3373','33','KOTA SALATIGA'),
('3374','33','KOTA SEMARANG'),
('3375','33','KOTA PEKALONGAN'),
('3376','33','KOTA TEGAL'),
('3401','34','KABUPATEN KULON PROGO'),
('3402','34','KABUPATEN BANTUL'),
('3403','34','KABUPATEN GUNUNG KIDUL'),
('3404','34','KABUPATEN SLEMAN'),
('3471','34','KOTA YOGYAKARTA'),
('3501','35','KABUPATEN PACITAN'),
('3502','35','KABUPATEN PONOROGO'),
('3503','35','KABUPATEN TRENGGALEK'),
('3504','35','KABUPATEN TULUNGAGUNG'),
('3505','35','KABUPATEN BLITAR'),
('3506','35','KABUPATEN KEDIRI'),
('3507','35','KABUPATEN MALANG'),
('3508','35','KABUPATEN LUMAJANG'),
('3509','35','KABUPATEN JEMBER'),
('3510','35','KABUPATEN BANYUWANGI'),
('3511','35','KABUPATEN BONDOWOSO'),
('3512','35','KABUPATEN SITUBONDO'),
('3513','35','KABUPATEN PROBOLINGGO'),
('3514','35','KABUPATEN PASURUAN'),
('3515','35','KABUPATEN SIDOARJO'),
('3516','35','KABUPATEN MOJOKERTO'),
('3517','35','KABUPATEN JOMBANG'),
('3518','35','KABUPATEN NGANJUK'),
('3519','35','KABUPATEN MADIUN'),
('3520','35','KABUPATEN MAGETAN'),
('3521','35','KABUPATEN NGAWI'),
('3522','35','KABUPATEN BOJONEGORO'),
('3523','35','KABUPATEN TUBAN'),
('3524','35','KABUPATEN LAMONGAN'),
('3525','35','KABUPATEN GRESIK'),
('3526','35','KABUPATEN BANGKALAN'),
('3527','35','KABUPATEN SAMPANG'),
('3528','35','KABUPATEN PAMEKASAN'),
('3529','35','KABUPATEN SUMENEP'),
('3571','35','KOTA KEDIRI'),
('3572','35','KOTA BLITAR'),
('3573','35','KOTA MALANG'),
('3574','35','KOTA PROBOLINGGO'),
('3575','35','KOTA PASURUAN'),
('3576','35','KOTA MOJOKERTO'),
('3577','35','KOTA MADIUN'),
('3578','35','KOTA SURABAYA'),
('3579','35','KOTA BATU'),
('3601','36','KABUPATEN PANDEGLANG'),
('3602','36','KABUPATEN LEBAK'),
('3603','36','KABUPATEN TANGERANG'),
('3604','36','KABUPATEN SERANG'),
('3671','36','KOTA TANGERANG'),
('3672','36','KOTA CILEGON'),
('3673','36','KOTA SERANG'),
('3674','36','KOTA TANGERANG SELATAN'),
('5101','51','KABUPATEN JEMBRANA'),
('5102','51','KABUPATEN TABANAN'),
('5103','51','KABUPATEN BADUNG'),
('5104','51','KABUPATEN GIANYAR'),
('5105','51','KABUPATEN KLUNGKUNG'),
('5106','51','KABUPATEN BANGLI'),
('5107','51','KABUPATEN KARANG ASEM'),
('5108','51','KABUPATEN BULELENG'),
('5171','51','KOTA DENPASAR'),
('5201','52','KABUPATEN LOMBOK BARAT'),
('5202','52','KABUPATEN LOMBOK TENGAH'),
('5203','52','KABUPATEN LOMBOK TIMUR'),
('5204','52','KABUPATEN SUMBAWA'),
('5205','52','KABUPATEN DOMPU'),
('5206','52','KABUPATEN BIMA'),
('5207','52','KABUPATEN SUMBAWA BARAT'),
('5208','52','KABUPATEN LOMBOK UTARA'),
('5271','52','KOTA MATARAM'),
('5272','52','KOTA BIMA'),
('5301','53','KABUPATEN SUMBA BARAT'),
('5302','53','KABUPATEN SUMBA TIMUR'),
('5303','53','KABUPATEN KUPANG'),
('5304','53','KABUPATEN TIMOR TENGAH SELATAN'),
('5305','53','KABUPATEN TIMOR TENGAH UTARA'),
('5306','53','KABUPATEN BELU'),
('5307','53','KABUPATEN ALOR'),
('5308','53','KABUPATEN LEMBATA'),
('5309','53','KABUPATEN FLORES TIMUR'),
('5310','53','KABUPATEN SIKKA'),
('5311','53','KABUPATEN ENDE'),
('5312','53','KABUPATEN NGADA'),
('5313','53','KABUPATEN MANGGARAI'),
('5314','53','KABUPATEN ROTE NDAO'),
('5315','53','KABUPATEN MANGGARAI BARAT'),
('5316','53','KABUPATEN SUMBA TENGAH'),
('5317','53','KABUPATEN SUMBA BARAT DAYA'),
('5318','53','KABUPATEN NAGEKEO'),
('5319','53','KABUPATEN MANGGARAI TIMUR'),
('5320','53','KABUPATEN SABU RAIJUA'),
('5321','53','KABUPATEN MALAKA'),
('5371','53','KOTA KUPANG'),
('6101','61','KABUPATEN SAMBAS'),
('6102','61','KABUPATEN BENGKAYANG'),
('6103','61','KABUPATEN LANDAK'),
('6104','61','KABUPATEN MEMPAWAH'),
('6105','61','KABUPATEN SANGGAU'),
('6106','61','KABUPATEN KETAPANG'),
('6107','61','KABUPATEN SINTANG'),
('6108','61','KABUPATEN KAPUAS HULU'),
('6109','61','KABUPATEN SEKADAU'),
('6110','61','KABUPATEN MELAWI'),
('6111','61','KABUPATEN KAYONG UTARA'),
('6112','61','KABUPATEN KUBU RAYA'),
('6171','61','KOTA PONTIANAK'),
('6172','61','KOTA SINGKAWANG'),
('6201','62','KABUPATEN KOTAWARINGIN BARAT'),
('6202','62','KABUPATEN KOTAWARINGIN TIMUR'),
('6203','62','KABUPATEN KAPUAS'),
('6204','62','KABUPATEN BARITO SELATAN'),
('6205','62','KABUPATEN BARITO UTARA'),
('6206','62','KABUPATEN SUKAMARA'),
('6207','62','KABUPATEN LAMANDAU'),
('6208','62','KABUPATEN SERUYAN'),
('6209','62','KABUPATEN KATINGAN'),
('6210','62','KABUPATEN PULANG PISAU'),
('6211','62','KABUPATEN GUNUNG MAS'),
('6212','62','KABUPATEN BARITO TIMUR'),
('6213','62','KABUPATEN MURUNG RAYA'),
('6271','62','KOTA PALANGKA RAYA'),
('6301','63','KABUPATEN TANAH LAUT'),
('6302','63','KABUPATEN KOTA BARU'),
('6303','63','KABUPATEN BANJAR'),
('6304','63','KABUPATEN BARITO KUALA'),
('6305','63','KABUPATEN TAPIN'),
('6306','63','KABUPATEN HULU SUNGAI SELATAN'),
('6307','63','KABUPATEN HULU SUNGAI TENGAH'),
('6308','63','KABUPATEN HULU SUNGAI UTARA'),
('6309','63','KABUPATEN TABALONG'),
('6310','63','KABUPATEN TANAH BUMBU'),
('6311','63','KABUPATEN BALANGAN'),
('6371','63','KOTA BANJARMASIN'),
('6372','63','KOTA BANJAR BARU'),
('6401','64','KABUPATEN PASER'),
('6402','64','KABUPATEN KUTAI BARAT'),
('6403','64','KABUPATEN KUTAI KARTANEGARA'),
('6404','64','KABUPATEN KUTAI TIMUR'),
('6405','64','KABUPATEN BERAU'),
('6409','64','KABUPATEN PENAJAM PASER UTARA'),
('6411','64','KABUPATEN MAHAKAM HULU'),
('6471','64','KOTA BALIKPAPAN'),
('6472','64','KOTA SAMARINDA'),
('6474','64','KOTA BONTANG'),
('6501','65','KABUPATEN MALINAU'),
('6502','65','KABUPATEN BULUNGAN'),
('6503','65','KABUPATEN TANA TIDUNG'),
('6504','65','KABUPATEN NUNUKAN'),
('6571','65','KOTA TARAKAN'),
('7101','71','KABUPATEN BOLAANG MONGONDOW'),
('7102','71','KABUPATEN MINAHASA'),
('7103','71','KABUPATEN KEPULAUAN SANGIHE'),
('7104','71','KABUPATEN KEPULAUAN TALAUD'),
('7105','71','KABUPATEN MINAHASA SELATAN'),
('7106','71','KABUPATEN MINAHASA UTARA'),
('7107','71','KABUPATEN BOLAANG MONGONDOW UTARA'),
('7108','71','KABUPATEN SIAU TAGULANDANG BIARO'),
('7109','71','KABUPATEN MINAHASA TENGGARA'),
('7110','71','KABUPATEN BOLAANG MONGONDOW SELATAN'),
('7111','71','KABUPATEN BOLAANG MONGONDOW TIMUR'),
('7171','71','KOTA MANADO'),
('7172','71','KOTA BITUNG'),
('7173','71','KOTA TOMOHON'),
('7174','71','KOTA KOTAMOBAGU'),
('7201','72','KABUPATEN BANGGAI KEPULAUAN'),
('7202','72','KABUPATEN BANGGAI'),
('7203','72','KABUPATEN MOROWALI'),
('7204','72','KABUPATEN POSO'),
('7205','72','KABUPATEN DONGGALA'),
('7206','72','KABUPATEN TOLI-TOLI'),
('7207','72','KABUPATEN BUOL'),
('7208','72','KABUPATEN PARIGI MOUTONG'),
('7209','72','KABUPATEN TOJO UNA-UNA'),
('7210','72','KABUPATEN SIGI'),
('7211','72','KABUPATEN BANGGAI LAUT'),
('7212','72','KABUPATEN MOROWALI UTARA'),
('7271','72','KOTA PALU'),
('7301','73','KABUPATEN KEPULAUAN SELAYAR'),
('7302','73','KABUPATEN BULUKUMBA'),
('7303','73','KABUPATEN BANTAENG'),
('7304','73','KABUPATEN JENEPONTO'),
('7305','73','KABUPATEN TAKALAR'),
('7306','73','KABUPATEN GOWA'),
('7307','73','KABUPATEN SINJAI'),
('7308','73','KABUPATEN MAROS'),
('7309','73','KABUPATEN PANGKAJENE DAN KEPULAUAN'),
('7310','73','KABUPATEN BARRU'),
('7311','73','KABUPATEN BONE'),
('7312','73','KABUPATEN SOPPENG'),
('7313','73','KABUPATEN WAJO'),
('7314','73','KABUPATEN SIDENRENG RAPPANG'),
('7315','73','KABUPATEN PINRANG'),
('7316','73','KABUPATEN ENREKANG'),
('7317','73','KABUPATEN LUWU'),
('7318','73','KABUPATEN TANA TORAJA'),
('7322','73','KABUPATEN LUWU UTARA'),
('7325','73','KABUPATEN LUWU TIMUR'),
('7326','73','KABUPATEN TORAJA UTARA'),
('7371','73','KOTA MAKASSAR'),
('7372','73','KOTA PAREPARE'),
('7373','73','KOTA PALOPO'),
('7401','74','KABUPATEN BUTON'),
('7402','74','KABUPATEN MUNA'),
('7403','74','KABUPATEN KONAWE'),
('7404','74','KABUPATEN KOLAKA'),
('7405','74','KABUPATEN KONAWE SELATAN'),
('7406','74','KABUPATEN BOMBANA'),
('7407','74','KABUPATEN WAKATOBI'),
('7408','74','KABUPATEN KOLAKA UTARA'),
('7409','74','KABUPATEN BUTON UTARA'),
('7410','74','KABUPATEN KONAWE UTARA'),
('7411','74','KABUPATEN KOLAKA TIMUR'),
('7412','74','KABUPATEN KONAWE KEPULAUAN'),
('7413','74','KABUPATEN MUNA BARAT'),
('7414','74','KABUPATEN BUTON TENGAH'),
('7415','74','KABUPATEN BUTON SELATAN'),
('7471','74','KOTA KENDARI'),
('7472','74','KOTA BAUBAU'),
('7501','75','KABUPATEN BOALEMO'),
('7502','75','KABUPATEN GORONTALO'),
('7503','75','KABUPATEN POHUWATO'),
('7504','75','KABUPATEN BONE BOLANGO'),
('7505','75','KABUPATEN GORONTALO UTARA'),
('7571','75','KOTA GORONTALO'),
('7601','76','KABUPATEN MAJENE'),
('7602','76','KABUPATEN POLEWALI MANDAR'),
('7603','76','KABUPATEN MAMASA'),
('7604','76','KABUPATEN MAMUJU'),
('7605','76','KABUPATEN MAMUJU UTARA'),
('7606','76','KABUPATEN MAMUJU TENGAH'),
('8101','81','KABUPATEN MALUKU TENGGARA BARAT'),
('8102','81','KABUPATEN MALUKU TENGGARA'),
('8103','81','KABUPATEN MALUKU TENGAH'),
('8104','81','KABUPATEN BURU'),
('8105','81','KABUPATEN KEPULAUAN ARU'),
('8106','81','KABUPATEN SERAM BAGIAN BARAT'),
('8107','81','KABUPATEN SERAM BAGIAN TIMUR'),
('8108','81','KABUPATEN MALUKU BARAT DAYA'),
('8109','81','KABUPATEN BURU SELATAN'),
('8171','81','KOTA AMBON'),
('8172','81','KOTA TUAL'),
('8201','82','KABUPATEN HALMAHERA BARAT'),
('8202','82','KABUPATEN HALMAHERA TENGAH'),
('8203','82','KABUPATEN KEPULAUAN SULA'),
('8204','82','KABUPATEN HALMAHERA SELATAN'),
('8205','82','KABUPATEN HALMAHERA UTARA'),
('8206','82','KABUPATEN HALMAHERA TIMUR'),
('8207','82','KABUPATEN PULAU MOROTAI'),
('8208','82','KABUPATEN PULAU TALIABU'),
('8271','82','KOTA TERNATE'),
('8272','82','KOTA TIDORE KEPULAUAN'),
('9101','91','KABUPATEN FAKFAK'),
('9102','91','KABUPATEN KAIMANA'),
('9103','91','KABUPATEN TELUK WONDAMA'),
('9104','91','KABUPATEN TELUK BINTUNI'),
('9105','91','KABUPATEN MANOKWARI'),
('9106','91','KABUPATEN SORONG SELATAN'),
('9107','91','KABUPATEN SORONG'),
('9108','91','KABUPATEN RAJA AMPAT'),
('9109','91','KABUPATEN TAMBRAUW'),
('9110','91','KABUPATEN MAYBRAT'),
('9111','91','KABUPATEN MANOKWARI SELATAN'),
('9112','91','KABUPATEN PEGUNUNGAN ARFAK'),
('9171','91','KOTA SORONG'),
('9401','94','KABUPATEN MERAUKE'),
('9402','94','KABUPATEN JAYAWIJAYA'),
('9403','94','KABUPATEN JAYAPURA'),
('9404','94','KABUPATEN NABIRE'),
('9408','94','KABUPATEN KEPULAUAN YAPEN'),
('9409','94','KABUPATEN BIAK NUMFOR'),
('9410','94','KABUPATEN PANIAI'),
('9411','94','KABUPATEN PUNCAK JAYA'),
('9412','94','KABUPATEN MIMIKA'),
('9413','94','KABUPATEN BOVEN DIGOEL'),
('9414','94','KABUPATEN MAPPI'),
('9415','94','KABUPATEN ASMAT'),
('9416','94','KABUPATEN YAHUKIMO'),
('9417','94','KABUPATEN PEGUNUNGAN BINTANG'),
('9418','94','KABUPATEN TOLIKARA'),
('9419','94','KABUPATEN SARMI'),
('9420','94','KABUPATEN KEEROM'),
('9426','94','KABUPATEN WAROPEN'),
('9427','94','KABUPATEN SUPIORI'),
('9428','94','KABUPATEN MAMBERAMO RAYA'),
('9429','94','KABUPATEN NDUGA'),
('9430','94','KABUPATEN LANNY JAYA'),
('9431','94','KABUPATEN MAMBERAMO TENGAH'),
('9432','94','KABUPATEN YALIMO'),
('9433','94','KABUPATEN PUNCAK'),
('9434','94','KABUPATEN DOGIYAI'),
('9435','94','KABUPATEN INTAN JAYA'),
('9436','94','KABUPATEN DEIYAI'),
('9471','94','KOTA JAYAPURA');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_u` int(11) NOT NULL AUTO_INCREMENT,
  `username_u` varchar(50) DEFAULT NULL,
  `email_u` varchar(100) DEFAULT NULL,
  `password_u` varchar(255) DEFAULT NULL,
  `firstname_u` varchar(255) DEFAULT NULL,
  `lastname_u` varchar(100) DEFAULT NULL,
  `date_of_birth_u` date DEFAULT NULL,
  `phone_number_u` varchar(15) DEFAULT NULL,
  `join_date_u` datetime DEFAULT NULL,
  `address_u` varchar(150) DEFAULT NULL,
  `city_u` int(6) DEFAULT NULL,
  `province_u` int(6) DEFAULT NULL,
  `total_review_u` int(11) DEFAULT '0',
  `bio_u` varchar(200) DEFAULT NULL,
  `photo_profile_u` varchar(150) DEFAULT 'assets/img/default/profile-pict.png',
  `photo_cover_u` varchar(150) DEFAULT NULL,
  `point` int(11) DEFAULT '0',
  `money` int(11) DEFAULT NULL,
  `line_u` varchar(32) NOT NULL,
  `whatsapp_u` varchar(15) NOT NULL,
  PRIMARY KEY (`id_u`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_u`,`username_u`,`email_u`,`password_u`,`firstname_u`,`lastname_u`,`date_of_birth_u`,`phone_number_u`,`join_date_u`,`address_u`,`city_u`,`province_u`,`total_review_u`,`bio_u`,`photo_profile_u`,`photo_cover_u`,`point`,`money`,`line_u`,`whatsapp_u`) values 
(1,'haha','hahaha@gmail.com','12345','hara','Hura','2016-09-24','1234567890',NULL,'Kalimantan tengah barat',0,NULL,NULL,'Hola namanamanama','assets/img/default/profile-pict.png',NULL,NULL,NULL,'',''),
(2,'kevinfachreza','kevinfachreza@yahoo.com','12345','aa',NULL,'2016-10-30',NULL,NULL,NULL,NULL,NULL,0,' ','assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(3,'kev','kevinfachreza@yahoo.coma','5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5','bbb',NULL,'2016-10-30',NULL,NULL,NULL,NULL,NULL,0,' ','assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(4,'dummy','dummy@dummy.com','5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5','saya','lasta','1996-06-11','12345622222',NULL,NULL,5171,51,0,'bio data ku adalah seorang keren banget12\'\'qwe','./assets/img/user/4/profile-pict/42016-11-20-04-14-36.jpg',NULL,0,NULL,'koko','12345'),
(5,'hanah','hanah@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'1998-02-13','09898989','2016-11-01 00:00:00',NULL,1173,NULL,0,NULL,'./assets/img/user/5/profile-pict/default.png',NULL,0,NULL,'@hanahanda','0292828383'),
(6,'curlan','curlan@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'1991-02-13',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(7,'ibu','ibu@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'1800-12-18',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(8,'olan','olan@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'1998-09-12',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(9,'andi','andi@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'1994-08-12',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(10,'harar','harar@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'1111-01-11',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(11,'harar','harar@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'1111-01-11',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(12,'harar','harar@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'1111-01-11',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(13,'harar','harar@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'1111-01-11',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(14,'harar','harar@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'1111-01-11',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(15,'harar','harar@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'1111-01-11',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(16,'harar','harar@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'1111-01-11',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(17,'harar','harar@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'1111-01-11',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(18,'harar','harar@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'1111-01-11',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(19,'harar','harar@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'1111-01-11',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(20,'harar','harar@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'1111-01-11',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(21,'harar','harar@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'1111-01-11',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(22,'harar','harar@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'1111-01-11',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(23,'hilar','hilar@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'1992-09-02',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(24,'hikar','hikar@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2222-02-12',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(25,'hikar','hikar@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2222-02-12',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(26,'hustler','hustler@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2211-02-21',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(27,'hustler','hustler@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2211-02-21',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(28,'hustler','hustler@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2211-02-21',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(29,'hustler','hustler@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2211-02-21',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(30,'hustler','hustler@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2211-02-21',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(31,'hustler','hustler@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2211-02-21',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(32,'hustler','hustler@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2211-02-21',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(33,'hustler','hustler@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2211-02-21',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(34,'hustler','hustler@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2211-02-21',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(35,'hustler','hustler@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2211-02-21',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(36,'hustler','hustler@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2211-02-21',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(37,'hustler','hustler@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2211-02-21',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(38,'hustler','hustler@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2211-02-21',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(39,'hustler','hustler@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2211-02-21',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(40,'hustler','hustler@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2211-02-21',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(41,'hustler','hustler@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2211-02-21',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(42,'hustler','hustler@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2211-02-21',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(43,'hustler','hustler@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2211-02-21',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(44,'hustler','hustler@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2211-02-21',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(45,'hustler','hustler@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2211-02-21',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(46,'hustler','hustler@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'2211-02-21',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'',''),
(47,'harlan','harlan@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',NULL,NULL,'1995-02-13',NULL,NULL,NULL,NULL,NULL,0,NULL,'assets/img/default/profile-pict.png',NULL,0,NULL,'','');

/*Table structure for table `user_book` */

DROP TABLE IF EXISTS `user_book`;

CREATE TABLE `user_book` (
  `id_u_b` int(11) NOT NULL AUTO_INCREMENT,
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
  `active` int(2) DEFAULT '2',
  `activated_by` varchar(12) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rejected_reason` int(3) DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_u_b`,`rent_u_b`),
  KEY `Book_source_FK` (`id_b_source`),
  KEY `Book_type_FK` (`type_u_b`),
  KEY `Book_owner_FK` (`id_u_owner`),
  CONSTRAINT `Book_owner_FK` FOREIGN KEY (`id_u_owner`) REFERENCES `user` (`id_u`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `Book_type_FK` FOREIGN KEY (`type_u_b`) REFERENCES `book_type` (`id_b_type`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

/*Data for the table `user_book` */

insert  into `user_book`(`id_u_b`,`id_b_source`,`price_sell_u_b`,`price_point`,`price_rent_u_b`,`type_u_b`,`sell_u_b`,`barter_u_b`,`rent_u_b`,`description_u_b`,`id_u_owner`,`stock_u_b`,`main_image_u_b`,`title_u_b`,`berat_u_b`,`slug_title_u_b`,`tahun_beli_u_b`,`active`,`activated_by`,`created_at`,`updated_at`,`rejected_reason`,`activated_at`) values 
(0,13,75000,0,15000,1,1,1,1,'Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum',5,1,'assets/img/user/5/1.jpg','',0,'',0000,0,NULL,NULL,NULL,2,'2017-01-08 13:36:17'),
(2,14,90000,0,10000,2,1,0,1,'LoremIpsumLoremIpsumLoremIpsumLoremIpsumLoremIpsumLoremIpsumLoremIpsumLoremIpsumLoremIpsumLoremIpsumLoremIpsum',5,3,'assets/img/user/5/2.jpg','',0,'',0000,2,NULL,NULL,NULL,NULL,NULL),
(4,14,90000,0,10000,2,1,0,1,'Hanya bisa dibuat',5,3,'assets/img/user/5/2.jpg','Tetap mencoba',0,'Tetap-mencoba',2009,1,NULL,NULL,NULL,NULL,'2017-01-08 13:26:29'),
(5,13,20202,0,NULL,1,NULL,0,100,'LOOOOOOOOOOOOOOOOOO',NULL,2,NULL,'',10,'',0000,2,NULL,NULL,NULL,NULL,NULL),
(6,13,20202,0,NULL,1,NULL,0,100,'LOOOOOOOOOOOOOOOOOO',NULL,2,NULL,'',10,'',0000,2,NULL,NULL,NULL,NULL,NULL),
(7,13,20202,0,NULL,1,NULL,0,100,'LOOOOOOOOOOOOOOOOOO',NULL,2,NULL,'',10,'',0000,2,NULL,NULL,NULL,NULL,NULL),
(8,13,20202,0,NULL,1,NULL,0,100,'LOOOOOOOOOOOOOOOOOO',NULL,2,NULL,'',10,'',0000,2,NULL,NULL,NULL,NULL,NULL),
(9,13,20202,0,NULL,1,NULL,0,100,'LOOOOOOOOOOOOOOOOOO',NULL,2,NULL,'',10,'',0000,2,NULL,NULL,NULL,NULL,NULL),
(41,13,10,0,11,1,NULL,0,127,'Kenapa',5,22,'assets/img/user/5/books/41/0.png','Apa',2,'',0000,2,NULL,NULL,NULL,NULL,NULL),
(42,13,20,0,33,1,NULL,0,33,'Trying',5,10,'assets/img/user/4/books/42/0.jpg','Why',111,'',0000,2,NULL,NULL,NULL,NULL,NULL),
(43,13,3000,0,NULL,1,NULL,0,127,'Doraemon (????? Doraemon?) adalah judul sebuah manga dan anime yang sangat populer yang dikarang Fujiko F. Fujio (???F????) sejak tahun 1969 dan berkisah tentang kehidupan seorang anak pemalas kelas 5 sekolah dasar yang bernama Nobi Nobita (?????) yang didatangi oleh sebuah robot kucing bernama Dora',4,1,NULL,'Doraemon',100,'',0000,2,NULL,NULL,NULL,NULL,NULL),
(44,13,3000,0,NULL,1,NULL,0,127,'Doraemon (????? Doraemon?) adalah judul sebuah manga dan anime yang sangat populer yang dikarang Fujiko F. Fujio (???F????) sejak tahun 1969 dan berkisah tentang kehidupan seorang anak pemalas kelas 5 sekolah dasar yang bernama Nobi Nobita (?????) yang didatangi oleh sebuah robot kucing bernama Dora',4,1,NULL,'Doraemon',100,'doraemon',0000,0,NULL,NULL,NULL,2,'2017-01-08 13:36:25');

/*Table structure for table `user_book_favourite` */

DROP TABLE IF EXISTS `user_book_favourite`;

CREATE TABLE `user_book_favourite` (
  `id_u_b_favourite` int(11) NOT NULL AUTO_INCREMENT,
  `id_u` int(11) NOT NULL,
  `id_category` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_u_b_favourite`),
  KEY `user_fav_FK` (`id_u`),
  KEY `category_fav_FK` (`id_category`),
  CONSTRAINT `category_fav_FK` FOREIGN KEY (`id_category`) REFERENCES `book_category` (`id_b_category`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `user_fav_FK` FOREIGN KEY (`id_u`) REFERENCES `user` (`id_u`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user_book_favourite` */

/*Table structure for table `user_book_image` */

DROP TABLE IF EXISTS `user_book_image`;

CREATE TABLE `user_book_image` (
  `id_u_b_img` int(11) NOT NULL AUTO_INCREMENT,
  `id_b_source` int(11) NOT NULL,
  `image_path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_u_b_img`),
  KEY `Book_source_img_FK` (`id_b_source`),
  CONSTRAINT `Book_source_img_FK` FOREIGN KEY (`id_b_source`) REFERENCES `user_book` (`id_u_b`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `user_book_image` */

insert  into `user_book_image`(`id_u_b_img`,`id_b_source`,`image_path`) values 
(3,41,'assets/img/user/5/books/41/0.png'),
(4,41,'assets/img/user/5/books/41/1.png'),
(5,41,'assets/img/user/5/books/41/2.png'),
(6,41,'assets/img/user/5/books/41/3.png'),
(7,42,'assets/img/user/5/books/42/0.png'),
(8,42,'assets/img/user/5/books/42/1.png'),
(9,4,'assets/img/user/5/books/4/0.png'),
(10,4,'assets/img/user/5/books/4/0.png'),
(11,4,'assets/img/user/5/books/4/0.png'),
(12,4,'assets/img/user/5/books/4/0.png'),
(13,42,'assets/img/user/4/books/42/0.jpg'),
(14,42,'assets/img/user/4/books/42/1.jpg'),
(15,42,'assets/img/user/4/books/42/2.jpg'),
(16,42,'assets/img/user/4/books/42/0.jpg'),
(17,42,'assets/img/user/4/books/42/0.jpg'),
(18,42,'assets/img/user/4/books/42/0.jpg'),
(19,42,'assets/img/user/4/books/42/0.jpg');

/*Table structure for table `user_book_rejectcode` */

DROP TABLE IF EXISTS `user_book_rejectcode`;

CREATE TABLE `user_book_rejectcode` (
  `code` int(3) NOT NULL AUTO_INCREMENT,
  `content` text,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user_book_rejectcode` */

insert  into `user_book_rejectcode`(`code`,`content`) values 
(1,'Gambar Kurang / Tidak Memenuhi Syarat'),
(2,'Melanggar Hak Cipta ');

/*Table structure for table `writer` */

DROP TABLE IF EXISTS `writer`;

CREATE TABLE `writer` (
  `id_writer` int(11) NOT NULL AUTO_INCREMENT,
  `name_writer` varchar(100) NOT NULL,
  `origin_writer` varchar(150) NOT NULL,
  `date_of_birth_writer` date DEFAULT NULL,
  `description_writer` varchar(300) DEFAULT NULL,
  `photo_writer` varchar(100) NOT NULL,
  PRIMARY KEY (`id_writer`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `writer` */

insert  into `writer`(`id_writer`,`name_writer`,`origin_writer`,`date_of_birth_writer`,`description_writer`,`photo_writer`) values 
(1,'Adamant','SUrbaya','2016-11-02','Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum','assets/img/writer/1/1.JPG'),
(2,'Kyojin','Japanese','2016-11-01','Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum','assets/img/writer/1/1.JPG');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
