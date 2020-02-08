-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 08 Feb 2020 pada 17.57
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullstack_belajar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_master`
--

CREATE TABLE `category_master` (
  `id_category` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `DESCRIPTION` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `content_post`
--

CREATE TABLE `content_post` (
  `id_content` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `preview_content` text,
  `content` text,
  `id_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_history`
--

CREATE TABLE `login_history` (
  `id_login_history` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access`
--

CREATE TABLE `user_access` (
  `id_user_access` int(11) NOT NULL,
  `user_access` varchar(50) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_master`
--

CREATE TABLE `user_master` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `id_user_access` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category_master`
--
ALTER TABLE `category_master`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `content_post`
--
ALTER TABLE `content_post`
  ADD PRIMARY KEY (`id_content`),
  ADD KEY `FK_CONTENT_MASTER1` (`id_user`),
  ADD KEY `FK_CONTENT_MASTER2` (`id_category`);

--
-- Indeks untuk tabel `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`id_login_history`);

--
-- Indeks untuk tabel `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`id_user_access`);

--
-- Indeks untuk tabel `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `FK_USER_MASTER` (`id_user_access`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category_master`
--
ALTER TABLE `category_master`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `content_post`
--
ALTER TABLE `content_post`
  MODIFY `id_content` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `login_history`
--
ALTER TABLE `login_history`
  MODIFY `id_login_history` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_access`
--
ALTER TABLE `user_access`
  MODIFY `id_user_access` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_master`
--
ALTER TABLE `user_master`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `content_post`
--
ALTER TABLE `content_post`
  ADD CONSTRAINT `FK_CONTENT_MASTER1` FOREIGN KEY (`id_user`) REFERENCES `user_master` (`id_user`),
  ADD CONSTRAINT `FK_CONTENT_MASTER2` FOREIGN KEY (`id_category`) REFERENCES `category_master` (`id_category`);

--
-- Ketidakleluasaan untuk tabel `user_master`
--
ALTER TABLE `user_master`
  ADD CONSTRAINT `FK_USER_MASTER` FOREIGN KEY (`id_user_access`) REFERENCES `user_access` (`id_user_access`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
