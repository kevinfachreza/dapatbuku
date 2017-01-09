/*
SQLyog Community v12.3.3 (64 bit)
MySQL - 5.5.52-cll : Database - u9677377_dapatbuku
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`u9677377_dapatbuku` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `u9677377_dapatbuku`;

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
  `tags` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id_b`),
  KEY `Book_writer_FK` (`writer`),
  KEY `Book_publisher_FK` (`publisher`),
  FULLTEXT KEY `book_index_fulltext` (`title_b`),
  FULLTEXT KEY `tags_index_fulltext` (`tags`),
  FULLTEXT KEY `title` (`title_b`,`tags`)
) ENGINE=MyISAM AUTO_INCREMENT=151 DEFAULT CHARSET=latin1;

/*Data for the table `book` */

insert  into `book`(`id_b`,`title_b`,`slug_title_b`,`no_isbn_b`,`writer`,`publisher`,`pages`,`date_published`,`language_b`,`thumb_cover_b`,`photo_cover_b`,`cover_type_b`,`description_b`,`total_reviews_b`,`total_ratings`,`best_seller_flag`,`best_seller_rank`,`tags`) values 
(1,'Quantum Ikhlas',NULL,'9786020267050','Erbe Sentanu','Elex Media Komputindo',290,'2007-10-01','Indonesia',NULL,NULL,NULL,NULL,0,0,0,NULL,'kuantum, ikhlas, agama, islam, jujur'),
(2,'Kenali Ragam Kepribafian Yang disukai dan Dibenci',NULL,'9786029789584 ','Naylil Moena','DIVA',NULL,'2011-11-01','Indonesia',NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(3,'Terapi Kejujuran',NULL,'Tidak Tersedia','Yanuardi Syukur',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(4,'Jurus Jitu Mengelola Amarah',NULL,'Tidak Tersedia','Harrista Adiati',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(5,'Analisis Tulisan Tangan',NULL,'Tidak Tersedia','Bayu Ludvianto',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(6,'Sepatu Dahlan',NULL,'Tidak Tersedia','Khrisna Pabichara',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(7,'Si Cacing dan Kotoran Kesayangannya',NULL,'Tidak Tersedia','Ajahn Brahm',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(8,'Si Cacing dan Kotoran Kesayangannya 2',NULL,'Tidak Tersedia','Ajahn Brahm',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(9,'Si Cacing dan Kotoran Kesayangannya 3',NULL,'Tidak Tersedia','Ajahn Brahm',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(10,'Cara Mutakhir Jago Desain Logo',NULL,'Tidak Tersedia','Ferri Caniago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(11,'99 Ideas for Happy Teens',NULL,'Tidak Tersedia','Deny Riana',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(12,'Benabook',NULL,'Tidak Tersedia','Benazio Rizky',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(13,'Ngenest',NULL,'Tidak Tersedia','Ernest Prakasa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(14,'Ngenest 2',NULL,'Tidak Tersedia','Ernest Prakasa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(15,'Ngenest 3',NULL,'Tidak Tersedia','Ernest Prakasa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(16,'First Time In Beijing',NULL,'Tidak Tersedia','Riawani Elyta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(17,'Kwaidan',NULL,'Tidak Tersedia','Koizumi Yakumo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(18,'Heart Emergency',NULL,'Tidak Tersedia','Falla Adinda',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(19,'Hore Guru Si Cacing Datang',NULL,'Tidak Tersedia','Ajahn Brahm',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(20,'Daun yang Jatuh Tak Pernah Membenci Angin',NULL,'Tidak Tersedia','Tere Liye',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(21,'Habibie & Ainun',NULL,'Tidak Tersedia','B.J. Habibie',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(22,'101 Creative Notes',NULL,'Tidak Tersedia','Yoris Sebastians',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(23,'Managing People',NULL,'Tidak Tersedia','A.M. Lilik Agung',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(24,'It\'s My Startup',NULL,'Tidak Tersedia','Lahandi Baskoro',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(25,'100 Kecerdasan Setan',NULL,'Tidak Tersedia','Wiwid Prasetyo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(26,'60 Inovasi Pilihan Kompas',NULL,'Tidak Tersedia','Nawa Tunggal',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(27,'Yakuza Moon',NULL,'Tidak Tersedia','Shoko Tendo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(28,'Fat Bulous',NULL,'Tidak Tersedia','Fidriwida',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(29,'Kitab Anti Bangkrut',NULL,'Tidak Tersedia','Jaya Setiabudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(30,'Young On Top Campus Ambassador',NULL,'Tidak Tersedia','Youn On Top',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
(31,'The 5 Level of Leadership',NULL,'Tidak Tersedia','John C Maxwell',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
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
(90,'Mengapa Si Penjudi Masuk Surga Sedangkan Si Sufi Masuk Neraka?',NULL,'Tidak Tersedia','Yoyok Dwi Prastyo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
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
(141,'Ini Buku Kamu',NULL,'Tidak Tersedia','Dedy Dahlan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL),
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
  PRIMARY KEY (`id_b_category`),
  KEY `id_b_category` (`id_b_category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `book_category` */

/*Table structure for table `book_category_connector` */

DROP TABLE IF EXISTS `book_category_connector`;

CREATE TABLE `book_category_connector` (
  `id_bcc` int(15) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_bcc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `book_category_connector` */

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
  KEY `rating_book_FK` (`id_b`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `book_rating` */

/*Table structure for table `book_request` */

DROP TABLE IF EXISTS `book_request`;

CREATE TABLE `book_request` (
  `id_br` int(11) NOT NULL AUTO_INCREMENT,
  `title_br` varchar(256) NOT NULL,
  `category_br` varchar(100) NOT NULL,
  `author_br` varchar(256) NOT NULL,
  PRIMARY KEY (`id_br`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `book_request` */

insert  into `book_request`(`id_br`,`title_br`,`category_br`,`author_br`) values 
(1,'Jalani aja','aca','caaa'),
(2,'Jajajaja','','');

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
  KEY `review_book_FK` (`id_b`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `book_review` */

/*Table structure for table `book_review_like` */

DROP TABLE IF EXISTS `book_review_like`;

CREATE TABLE `book_review_like` (
  `id_b_review_like` int(11) NOT NULL AUTO_INCREMENT,
  `id_b_review` int(11) NOT NULL,
  `point` int(11) NOT NULL DEFAULT '0',
  `id_u` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_b_review_like`),
  KEY `user_like_FK` (`id_u`),
  KEY `book_like_FK` (`id_b_review`)
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `book_type` */

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `chat_messages` */

/*Table structure for table `chat_room` */

DROP TABLE IF EXISTS `chat_room`;

CREATE TABLE `chat_room` (
  `id_cr` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` date DEFAULT NULL,
  `last_active` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_1` int(11) DEFAULT NULL,
  `user_2` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_cr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `chat_room` */

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
  PRIMARY KEY (`id_u`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_u`,`username_u`,`email_u`,`password_u`,`firstname_u`,`lastname_u`,`date_of_birth_u`,`phone_number_u`,`join_date_u`,`address_u`,`city_u`,`province_u`,`total_review_u`,`bio_u`,`photo_profile_u`,`photo_cover_u`,`point`,`money`) values 
(6,'kevinfachreza','kevinfachreza@yahoo.com','5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',NULL,NULL,'1996-01-01',NULL,NULL,NULL,NULL,NULL,0,NULL,'./assets/img/user/6/profile-pict/62016-11-08-15-06-27.jpg',NULL,0,NULL);

/*Table structure for table `user_book` */

DROP TABLE IF EXISTS `user_book`;

CREATE TABLE `user_book` (
  `id_u_b` int(11) NOT NULL AUTO_INCREMENT,
  `id_b_source` int(11) NOT NULL,
  `price_u_b` int(11) DEFAULT NULL,
  `price_point` int(11) DEFAULT '0',
  `price_rent` int(11) DEFAULT NULL,
  `type_u_b` int(50) DEFAULT NULL,
  `sell_u_b` tinyint(1) DEFAULT NULL,
  `barter_u_b` tinyint(1) DEFAULT NULL,
  `rent_u_b` tinyint(1) DEFAULT NULL,
  `description_u_b` varchar(300) DEFAULT NULL,
  `id_u_owner` int(11) DEFAULT NULL,
  `stock_u_b` int(11) DEFAULT NULL,
  `main_image_u_b` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_u_b`),
  KEY `Book_source_FK` (`id_b_source`),
  KEY `Book_type_FK` (`type_u_b`),
  KEY `Book_owner_FK` (`id_u_owner`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user_book` */

/*Table structure for table `user_book_favourite` */

DROP TABLE IF EXISTS `user_book_favourite`;

CREATE TABLE `user_book_favourite` (
  `id_u_b_favourite` int(11) NOT NULL AUTO_INCREMENT,
  `id_u` int(11) NOT NULL,
  `id_category` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_u_b_favourite`),
  KEY `user_fav_FK` (`id_u`),
  KEY `category_fav_FK` (`id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user_book_favourite` */

/*Table structure for table `user_book_image` */

DROP TABLE IF EXISTS `user_book_image`;

CREATE TABLE `user_book_image` (
  `id_u_b_img` int(11) NOT NULL AUTO_INCREMENT,
  `id_b_source` int(11) NOT NULL,
  `image_path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_u_b_img`),
  KEY `Book_source_img_FK` (`id_b_source`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user_book_image` */

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `writer` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
