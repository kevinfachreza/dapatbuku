-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Nov 2016 pada 14.17
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

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
-- Struktur dari tabel `book`
--

CREATE TABLE `book` (
  `id_b` int(11) NOT NULL,
  `title_b` varchar(200) NOT NULL,
  `no_isbn_b` int(11) DEFAULT NULL,
  `writer` int(11) DEFAULT NULL,
  `publisher` int(11) DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `status_book` int(11) DEFAULT NULL,
  `date_published` date DEFAULT NULL,
  `language_b` varchar(50) DEFAULT NULL,
  `price_b` int(11) DEFAULT NULL,
  `thumb_cover_b` varchar(200) DEFAULT NULL,
  `photo_cover_b` varchar(200) DEFAULT NULL,
  `description_b` varchar(300) DEFAULT NULL,
  `total_reviews_b` int(11) DEFAULT '0',
  `total_ratings` int(11) DEFAULT NULL,
  `best_seller_b` tinyint(1) DEFAULT NULL,
  `cover_type_b` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `book`
--

INSERT INTO `book` (`id_b`, `title_b`, `no_isbn_b`, `writer`, `publisher`, `pages`, `category`, `status_book`, `date_published`, `language_b`, `price_b`, `thumb_cover_b`, `photo_cover_b`, `description_b`, `total_reviews_b`, `total_ratings`, `best_seller_b`, `cover_type_b`) VALUES
(1, 'hola', 12121, NULL, NULL, 5, NULL, NULL, '2016-09-14', 'Indone', 100, 'asdsd', 'sdsd', 'aaaaaaaa', NULL, 2, NULL, 'Soft Cover'),
(2, 'Ada apa Dengan Cinta', 123213132, 2, 3, 300, 3, 1, '2016-11-08', 'Indonesia', 90000, '/assets/img/book/2/2.jpg', '/assets/img/book/2/2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet, nunc eget laoreet sa agittis, quam ligula sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis convallis. Integer varius egestas vestibulum. ', 159, 200, 1, 'Soft Cover'),
(3, 'Hanya Ingin Mencintaimu', 123213144, 4, 2, 350, 3, 1, '2016-11-21', 'Inggris', 75000, './assets/img/book/2/2.jpg', './assets/img/book/2/2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet, nunc eget laoreet sa agittis, quam ligula sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis convallis. Integer varius egestas vestibulum. ', 300, 270, 1, 'Hard Cover'),
(4, 'Ada apa Dengan Cinta', 123213132, 2, 3, 300, 3, 1, '2016-11-08', 'Indonesia', 90000, '/assets/img/book/2/2.jpg', '/assets/img/book/2/2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet, nunc eget laoreet sa agittis, quam ligula sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis convallis. Integer varius egestas vestibulum. ', 159, 200, 1, 'Soft Cover'),
(5, 'Hanya Ingin Mencintaimu', 123213144, 1, 2, 350, 3, 1, '2016-11-21', 'Inggris', 75000, './assets/img/book/2/2.jpg', './assets/img/book/2/2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet, nunc eget laoreet sa agittis, quam ligula sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis convallis. Integer varius egestas vestibulum. ', 300, 270, 1, 'Hard Cover'),
(6, 'Hanya Ingin Mencintaimu', 123213144, 4, 2, 350, 3, 1, '2016-11-21', 'Inggris', 75000, './assets/img/book/2/2.jpg', './assets/img/book/2/2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet, nunc eget laoreet sa agittis, quam ligula sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis convallis. Integer varius egestas vestibulum. ', 300, 270, NULL, 'Hard Cover'),
(7, 'Hanya Ingin Mencintaimu', 123213144, 2, 2, 350, 3, 1, '2016-11-21', 'Inggris', 75000, './assets/img/book/2/2.jpg', './assets/img/book/2/2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet, nunc eget laoreet sa agittis, quam ligula sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis convallis. Integer varius egestas vestibulum. ', 300, 0, NULL, ''),
(8, 'Hanya Ingin Mencintaimu', 123213144, 2, 2, 350, 3, 1, '2016-11-21', 'Inggris', 75000, './assets/img/book/2/2.jpg', './assets/img/book/2/2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet, nunc eget laoreet sa agittis, quam ligula sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis convallis. Integer varius egestas vestibulum. ', 300, 270, NULL, ''),
(9, 'Hanya Ingin Mencintaimu', 123213144, 2, 2, 350, 3, 1, '2016-11-21', 'Inggris', 75000, './assets/img/book/2/2.jpg', './assets/img/book/2/2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet, nunc eget laoreet sa agittis, quam ligula sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis convallis. Integer varius egestas vestibulum. ', 300, 270, NULL, ''),
(10, 'Hanya Ingin Mencintaimu', 123213144, 2, 2, 350, 3, 1, '2016-11-21', 'Inggris', 75000, '/assets/img/book/2/2.jpg', '/assets/img/book/2/2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet, nunc eget laoreet sa agittis, quam ligula sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis convallis. Integer varius egestas vestibulum. ', 300, 270, 1, ''),
(11, 'Hanya Ingin Mencintaimu', 123213144, 2, 2, 350, 3, 1, '2016-11-21', 'Inggris', 75000, '/assets/img/book/2/2.jpg', '/assets/img/book/2/2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet, nunc eget laoreet sa agittis, quam ligula sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis convallis. Integer varius egestas vestibulum. ', 300, 270, 1, ''),
(12, 'Hanya Ingin Mencintaimu', 123213144, 2, 2, 350, 3, 1, '2016-11-21', 'Inggris', 75000, '/assets/img/book/2/2.jpg', '/assets/img/book/2/2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet, nunc eget laoreet sa agittis, quam ligula sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis convallis. Integer varius egestas vestibulum. ', 300, 270, 1, ''),
(13, 'Hanya Ingin Mencintaimu', 123213144, 2, 2, 350, 3, 1, '2016-11-21', 'Inggris', 75000, '/assets/img/book/2/2.jpg', '/assets/img/book/2/2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet, nunc eget laoreet sa agittis, quam ligula sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis convallis. Integer varius egestas vestibulum. ', 300, 270, 1, ''),
(14, 'Hanya Ingin Mencintaimu', 123213144, 2, 2, 350, 3, 1, '2016-11-21', 'Inggris', 75000, '/assets/img/book/2/2.jpg', '/assets/img/book/2/2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet, nunc eget laoreet sa agittis, quam ligula sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis convallis. Integer varius egestas vestibulum. ', 300, 270, 1, ''),
(15, 'Hanya Ingin Mencintaimu', 123213144, 3, 2, 350, 3, 1, '2016-11-21', 'Inggris', 75000, './assets/img/book/2/2.jpg', './assets/img/book/2/2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet, nunc eget laoreet sa agittis, quam ligula sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis convallis. Integer varius egestas vestibulum. ', 300, 270, 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `book_category`
--

CREATE TABLE `book_category` (
  `id_b_category` int(11) NOT NULL,
  `name_b_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `book_category`
--

INSERT INTO `book_category` (`id_b_category`, `name_b_category`) VALUES
(1, 'Romance'),
(3, 'Action'),
(4, 'Mistery'),
(5, 'Sci-fi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `book_rating`
--

CREATE TABLE `book_rating` (
  `id_b_rating` int(11) NOT NULL,
  `date_rating` date NOT NULL,
  `rating` int(11) NOT NULL,
  `id_u` int(11) DEFAULT NULL,
  `id_b` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `book_rating`
--

INSERT INTO `book_rating` (`id_b_rating`, `date_rating`, `rating`, `id_u`, `id_b`) VALUES
(1, '2002-01-13', 3, 1, 1),
(13, '2002-01-13', 3, 1, 2),
(14, '2002-01-13', 4, 2, 2),
(15, '2002-01-13', 2, 3, 3),
(16, '2002-01-13', 5, 5, 3),
(17, '2016-11-07', 4, 3, 2),
(18, '2016-11-01', 2, 5, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `book_review`
--

CREATE TABLE `book_review` (
  `id_b_review` int(11) NOT NULL,
  `title_b_review` varchar(50) NOT NULL,
  `content_b_review` varchar(300) NOT NULL,
  `id_u` int(11) DEFAULT NULL,
  `id_b` int(11) DEFAULT NULL,
  `date_b_review` date DEFAULT NULL,
  `total_like` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `book_review`
--

INSERT INTO `book_review` (`id_b_review`, `title_b_review`, `content_b_review`, `id_u`, `id_b`, `date_b_review`, `total_like`) VALUES
(1, 'Hanya sedikit Indah', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet, nunc eget laoreet sa agittis, quam ligula sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis convallis. Integer varius egestas vestibulum. Null', 2, 3, '2016-11-15', 22),
(3, 'Bagus juga', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet, nunc eget laoreet sa agittis, quam ligula sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis convallis. Integer varius egestas vestibulum. Null', 2, 2, '2016-08-07', 50),
(5, 'Makhluk Terindah', 'Lorem ipsum blablabalbalbalablalababalalalbalablabababalbalablabablabalalbababablababalbalalbalbalbalba', 3, 2, '2016-11-07', 4),
(6, 'Mungkin Hanya ada satu bintang', 'Lorem Ipsum Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum', 5, 2, '2016-11-01', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `book_review_like`
--

CREATE TABLE `book_review_like` (
  `id_b_review_like` int(11) NOT NULL,
  `id_b_review` int(11) NOT NULL,
  `point` int(11) NOT NULL DEFAULT '0',
  `id_u` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `book_status`
--

CREATE TABLE `book_status` (
  `id_b_status` int(11) NOT NULL,
  `name_b_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `book_status`
--

INSERT INTO `book_status` (`id_b_status`, `name_b_status`) VALUES
(1, 'Ada'),
(2, 'Dipinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `book_type`
--

CREATE TABLE `book_type` (
  `id_b_type` int(11) NOT NULL,
  `name_b_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `book_type`
--

INSERT INTO `book_type` (`id_b_type`, `name_b_type`) VALUES
(1, 'Bekas'),
(2, 'Baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `publishers`
--

CREATE TABLE `publishers` (
  `id_publishers` int(11) NOT NULL,
  `name_publishers` varchar(100) NOT NULL,
  `origin_publishers` varchar(150) NOT NULL,
  `phone_number_publishers` varchar(15) NOT NULL,
  `address_publishers` varchar(200) NOT NULL,
  `description_publishers` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `publishers`
--

INSERT INTO `publishers` (`id_publishers`, `name_publishers`, `origin_publishers`, `phone_number_publishers`, `address_publishers`, `description_publishers`) VALUES
(1, 'Hari', 'Surabaya', '000848574', 'Jl. Kedungdoro No.19', 'Sebuah penerbit buku mistery dan lain lain'),
(2, 'Kevin', 'Surabaya', '000848574', 'Jl. Kedungdoro No.19', 'Sebuah penerbit buku mistery dan lain lain'),
(3, 'Amik', 'Surabaya', '000848574', 'Jl. Kedungdoro No.19', 'Sebuah penerbit buku mistery dan lain lain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_u` int(11) NOT NULL,
  `username_u` varchar(50) DEFAULT NULL,
  `email_u` varchar(100) DEFAULT NULL,
  `password_u` varchar(256) DEFAULT NULL,
  `firstname_u` varchar(50) DEFAULT NULL,
  `surname_u` varchar(100) DEFAULT NULL,
  `date_of_birth_u` date DEFAULT NULL,
  `phone_number_u` varchar(15) DEFAULT NULL,
  `join_date_u` datetime DEFAULT CURRENT_TIMESTAMP,
  `address_u` varchar(150) DEFAULT NULL,
  `city_u` varchar(50) DEFAULT NULL,
  `total_review_u` int(11) DEFAULT '0',
  `bio_u` varchar(200) DEFAULT NULL,
  `photo_profile_u` varchar(150) DEFAULT NULL,
  `photo_cover_u` varchar(150) DEFAULT NULL,
  `point` int(11) DEFAULT '0',
  `money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_u`, `username_u`, `email_u`, `password_u`, `firstname_u`, `surname_u`, `date_of_birth_u`, `phone_number_u`, `join_date_u`, `address_u`, `city_u`, `total_review_u`, `bio_u`, `photo_profile_u`, `photo_cover_u`, `point`, `money`) VALUES
(1, 'haha', 'hahaha@gmail.com', '12345', 'hara', 'Hura', '2016-09-24', '1234567890', NULL, 'Kalimantan tengah barat', 'kalimantan', NULL, 'Hola namanamanama', NULL, NULL, NULL, NULL),
(2, 'analima', 'anaalima@gmail.com', '123', NULL, NULL, '1997-03-01', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL),
(3, 'Hurry', 'Hurry@gmail.com', '123', 'Hurry', 'Sanolia', '1996-02-15', '09886676', NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL),
(4, 'Hurry', 'Hurry@gmail.com', '123', 'Hurry', 'Sanolia', '1996-02-15', '09886676', NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL),
(5, 'Hurry', 'Hurry@gmail.com', '123', 'Hurry', 'Sanolia', '1996-02-15', '09886676', NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL),
(6, 'Helios', 'Helios@gmail.com', '123', 'Helios', 'Saia', '1996-02-18', '09236676', NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL),
(7, 'Hurssh', 'Hurssh@gmail.com', '123', 'Hurssh', 'Sana', '1996-04-15', '09882276', NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL),
(11, 'hariar', 'hariar@gmail.com', '123', NULL, NULL, '1998-03-12', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL),
(12, 'harian', 'harian@gmail.com', 'a665a45920422f9d417e4867efdc4f', NULL, NULL, '2000-02-12', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL),
(13, 'harisha', 'harisha@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', NULL, NULL, '1997-02-12', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL),
(14, 'brianir', 'brianir@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', NULL, NULL, '1995-07-18', NULL, '2016-11-06 13:29:09', NULL, NULL, 0, NULL, NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_book`
--

CREATE TABLE `user_book` (
  `id_u_b` int(11) NOT NULL,
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
  `main_image_u_b` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_book_favourite`
--

CREATE TABLE `user_book_favourite` (
  `id_u_b_favourite` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `id_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_book_image`
--

CREATE TABLE `user_book_image` (
  `id_u_b_img` int(11) NOT NULL,
  `id_b_source` int(11) NOT NULL,
  `image_path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `writer`
--

CREATE TABLE `writer` (
  `id_writer` int(11) NOT NULL,
  `name_writer` varchar(100) NOT NULL,
  `origin_writer` varchar(150) NOT NULL,
  `date_of_birth_writer` date DEFAULT NULL,
  `description_writer` varchar(600) DEFAULT NULL,
  `photo_writer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `writer`
--

INSERT INTO `writer` (`id_writer`, `name_writer`, `origin_writer`, `date_of_birth_writer`, `description_writer`, `photo_writer`) VALUES
(1, 'Amik', 'Surabaya', '2016-11-09', 'Bagus dalam berbicara politik, agama, kesehatan, dan sangat tidak nyaman dengan keadaan sehari - hari. Suka ngomong - ngomong', 'assets/img/writer/1/1.JPG'),
(2, 'Juno', 'Sidoarjo', '2016-07-11', 'Ketika saya pertama hidup. Buku membawa saya berpetualang menuju negeri antah berantah. Di mana semua hal dapat dilakukan tanpa harus pergi kesana', 'assets/img/writer/2/2.JPG'),
(3, 'Subagyo', 'Semarang', '2016-11-07', 'Hello If its', 'assets/img/writer/3/3.JPG'),
(4, 'Niaraan', 'Kalimantan', '2016-11-01', 'Hello If its', 'assets/img/writer/4/4.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_b`),
  ADD KEY `Book_writer_FK` (`writer`),
  ADD KEY `Book_publisher_FK` (`publisher`),
  ADD KEY `Book_category_FK` (`category`),
  ADD KEY `Book_status_FK` (`status_book`),
  ADD KEY `total_reviews_b` (`total_reviews_b`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`id_b_category`),
  ADD KEY `id_b_category` (`id_b_category`);

--
-- Indexes for table `book_rating`
--
ALTER TABLE `book_rating`
  ADD PRIMARY KEY (`id_b_rating`),
  ADD KEY `rating_user_FK` (`id_u`),
  ADD KEY `rating_book_FK` (`id_b`);

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
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id_publishers`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_u`);

--
-- Indexes for table `user_book`
--
ALTER TABLE `user_book`
  ADD PRIMARY KEY (`id_u_b`),
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
-- Indexes for table `writer`
--
ALTER TABLE `writer`
  ADD PRIMARY KEY (`id_writer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id_b` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `id_b_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `book_rating`
--
ALTER TABLE `book_rating`
  MODIFY `id_b_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `book_review`
--
ALTER TABLE `book_review`
  MODIFY `id_b_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `book_review_like`
--
ALTER TABLE `book_review_like`
  MODIFY `id_b_review_like` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `book_status`
--
ALTER TABLE `book_status`
  MODIFY `id_b_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `book_type`
--
ALTER TABLE `book_type`
  MODIFY `id_b_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id_publishers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user_book`
--
ALTER TABLE `user_book`
  MODIFY `id_u_b` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_book_favourite`
--
ALTER TABLE `user_book_favourite`
  MODIFY `id_u_b_favourite` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_book_image`
--
ALTER TABLE `user_book_image`
  MODIFY `id_u_b_img` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `writer`
--
ALTER TABLE `writer`
  MODIFY `id_writer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `Book_category_FK` FOREIGN KEY (`category`) REFERENCES `book_category` (`id_b_category`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `Book_publisher_FK` FOREIGN KEY (`publisher`) REFERENCES `publishers` (`id_publishers`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Book_status_FK` FOREIGN KEY (`status_book`) REFERENCES `book_status` (`id_b_status`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `Book_writer_FK` FOREIGN KEY (`writer`) REFERENCES `writer` (`id_writer`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `book_rating`
--
ALTER TABLE `book_rating`
  ADD CONSTRAINT `rating_book_FK` FOREIGN KEY (`id_b`) REFERENCES `book` (`id_b`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rating_user_FK` FOREIGN KEY (`id_u`) REFERENCES `user` (`id_u`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `book_review`
--
ALTER TABLE `book_review`
  ADD CONSTRAINT `review_book_FK` FOREIGN KEY (`id_b`) REFERENCES `book` (`id_b`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `review_user_FK` FOREIGN KEY (`id_u`) REFERENCES `user` (`id_u`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `book_review_like`
--
ALTER TABLE `book_review_like`
  ADD CONSTRAINT `book_like_FK` FOREIGN KEY (`id_b_review`) REFERENCES `book_review` (`id_b_review`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_like_FK` FOREIGN KEY (`id_u`) REFERENCES `user` (`id_u`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user_book`
--
ALTER TABLE `user_book`
  ADD CONSTRAINT `Book_owner_FK` FOREIGN KEY (`id_u_owner`) REFERENCES `user` (`id_u`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `Book_source_FK` FOREIGN KEY (`id_b_source`) REFERENCES `book` (`id_b`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Book_type_FK` FOREIGN KEY (`type_u_b`) REFERENCES `book_type` (`id_b_type`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user_book_favourite`
--
ALTER TABLE `user_book_favourite`
  ADD CONSTRAINT `category_fav_FK` FOREIGN KEY (`id_category`) REFERENCES `book_category` (`id_b_category`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `user_fav_FK` FOREIGN KEY (`id_u`) REFERENCES `user` (`id_u`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user_book_image`
--
ALTER TABLE `user_book_image`
  ADD CONSTRAINT `Book_source_img_FK` FOREIGN KEY (`id_b_source`) REFERENCES `user_book` (`id_u_b`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
