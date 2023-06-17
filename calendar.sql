-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2023 pada 18.22
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calendar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `gambar` text NOT NULL,
  `notes` varchar(150) NOT NULL,
  `priority` varchar(40) NOT NULL,
  `comment` text NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `username`, `title`, `tanggal_mulai`, `tanggal_selesai`, `jam_mulai`, `jam_selesai`, `gambar`, `notes`, `priority`, `comment`, `status`) VALUES
(6, 'vito', 'progwebb', '2023-05-13', '2023-05-19', '12:22:00', '15:21:00', 'event/smk bn.jpg', 'ini tugas lurr', 'medium', 'hahahahahha', 'ToDo'),
(7, 'vito', 'progwebb', '2023-05-14', '2023-05-19', '12:22:00', '15:21:00', 'event/smk bn.jpg', 'ini tugas lurr', 'medium', 'hahahahahha', 'ToDo'),
(8, 'vito', 'progwebb', '2023-05-15', '2023-05-19', '12:22:00', '15:21:00', 'event/smk bn.jpg', 'ini tugas lurr', 'medium', 'hahahahahha', 'ToDo'),
(9, 'vito', 'progwebb', '2023-05-16', '2023-05-19', '12:22:00', '15:21:00', 'event/smk bn.jpg', 'ini tugas lurr', 'medium', 'hahahahahha', 'ToDo'),
(10, 'vito', 'progwebb', '2023-05-17', '2023-05-19', '12:22:00', '15:21:00', 'event/smk bn.jpg', 'ini tugas lurr', 'medium', 'hahahahahha', 'ToDo'),
(11, 'vito', 'progwebb', '2023-05-18', '2023-05-19', '12:22:00', '15:21:00', 'event/smk bn.jpg', 'ini tugas lurr', 'medium', 'hahahahahha', 'ToDo'),
(12, 'vito', 'progwebb', '2023-05-19', '2023-05-19', '12:22:00', '15:21:00', 'event/smk bn.jpg', 'ini tugas lurr', 'medium', 'hahahahahha', 'ToDo'),
(13, 'vito', 'quiz progweb', '2023-05-19', '2023-05-19', '06:00:00', '06:00:00', 'event/no_picture.png', '', 'high', '', 'ToDo'),
(14, 'vito', 'Ini aku nyoba', '2023-05-25', '2023-05-25', '04:00:00', '04:00:00', 'event/no_picture.png', '', 'medium', '', 'ToDo'),
(15, 'vito', 'arisan', '2023-05-01', '2023-05-01', '20:00:00', '20:00:00', 'event/no_picture.png', '', 'low', '', 'ToDo'),
(16, 'vito', 'tqambahhh', '2023-05-17', '2023-05-17', '16:59:00', '16:59:00', 'event/no_picture.png', '', 'low', '', 'ToDo'),
(17, 'vito', 'aaaa', '2023-05-02', '2023-05-02', '08:59:00', '08:59:00', 'event/no_picture.png', '', 'medium', '', 'ToDo'),
(18, 'vito', 'tes junii', '2023-06-02', '2023-06-02', '09:00:00', '09:00:00', 'event/no_picture.png', '', 'high', '', 'ToDo'),
(19, 'vito', 'tess april', '2023-05-27', '2023-05-27', '07:00:00', '07:00:00', 'event/no_picture.png', '', 'medium', '', 'ToDo'),
(20, 'vito', 'tess april', '2023-04-27', '2023-04-27', '07:00:00', '07:00:00', 'event/no_picture.png', '', 'high', '', 'ToDo'),
(21, 'vito', 'tes desember', '2023-12-01', '2023-12-01', '09:00:00', '09:00:00', 'event/no_picture.png', '', 'medium', '', 'ToDo'),
(22, 'vito', 'tes november', '2023-11-28', '2023-11-28', '11:00:00', '11:00:00', 'event/no_picture.png', '', 'low', '', 'ToDo'),
(23, 'vito', 'tess februari', '2023-02-01', '2023-02-01', '10:00:00', '10:00:00', 'event/no_picture.png', '', 'high', '', 'ToDo'),
(24, 'vito', 'tess januari', '2023-01-30', '2023-01-30', '09:59:00', '09:59:00', 'event/no_picture.png', '', 'medium', '', 'ToDo'),
(25, 'vito', 'tess april 2', '2023-04-30', '2023-04-30', '00:00:00', '00:00:00', 'event/no_picture.png', '', 'high', '', 'Archived'),
(26, 'vito', 'tes april 3', '2023-04-01', '2023-04-01', '05:00:00', '05:00:00', 'event/no_picture.png', '', 'high', '', 'ToDo'),
(27, 'vito', 'Belajar Harian', '2023-05-12', '2023-05-16', '09:00:00', '12:00:00', 'event/no_picture.png', 'belajarrr', 'low', 'belajar gess', 'ToDo'),
(29, 'vito', 'Belajar Harian', '2023-05-14', '2023-05-16', '09:00:00', '12:00:00', 'event/no_picture.png', 'belajarrr', 'low', 'belajar gess', 'Archived'),
(30, 'vito', 'Belajar Harian', '2023-05-15', '2023-05-16', '09:00:00', '12:00:00', 'event/no_picture.png', 'belajarrr', 'low', 'belajar gess', 'Archived'),
(31, 'vito', 'Belajar Harian', '2023-05-16', '2023-05-16', '09:00:00', '12:00:00', 'event/no_picture.png', 'belajarrr', 'low', 'belajar gess', 'ToDo'),
(32, 'vito', 'Tugas RPL', '2023-05-12', '2023-05-14', '20:01:00', '21:00:00', 'event/no_picture.png', 'pentinggg', 'high', '', 'ToDo'),
(33, 'vito', 'Tugas RPL', '2023-05-13', '2023-05-14', '20:01:00', '21:00:00', 'event/no_picture.png', 'pentinggg', 'high', '', 'ToDo'),
(34, 'vito', 'Tugas RPL', '2023-05-14', '2023-05-14', '20:01:00', '21:00:00', 'event/no_picture.png', 'pentinggg', 'high', '', 'ToDo'),
(36, 'vito', 'Vincent Sambat', '2023-06-01', '2023-06-01', '17:01:00', '17:01:00', 'event/no_picture.png', 'aku mau nyoba juni', 'high', 'ini percobaan bulan juni', 'ToDo'),
(37, 'vito', 'marcell sambat', '2023-06-03', '2023-06-03', '17:09:00', '17:09:00', 'event/no_picture.png', '', 'medium', '', 'ToDo'),
(38, 'evan', 'Bangkit Assessment', '2023-06-02', '2023-06-07', '11:30:00', '13:00:00', 'event/no_picture.png', 'harus dikerjakann', 'medium', 'semangatttt', 'ToDo'),
(39, 'evan', 'Bangkit Assessment', '3033-06-03', '2023-06-07', '11:30:00', '13:00:00', 'event/no_picture.png', 'harus dikerjakann', 'medium', 'semangatttt', 'ToDo'),
(40, 'evan', 'Bangkit Assessment', '4043-06-04', '2023-06-07', '11:30:00', '13:00:00', 'event/no_picture.png', 'harus dikerjakann', 'medium', 'semangatttt', 'ToDo'),
(41, 'evan', 'Bangkit Assessment', '5053-06-05', '2023-06-07', '11:30:00', '13:00:00', 'event/no_picture.png', 'harus dikerjakann', 'medium', 'semangatttt', 'ToDo'),
(42, 'evan', 'Bangkit Assessment', '6063-06-06', '2023-06-07', '11:30:00', '13:00:00', 'event/no_picture.png', 'harus dikerjakann', 'medium', 'semangatttt', 'ToDo'),
(43, 'evan', 'Bangkit Assessment', '7073-06-07', '2023-06-07', '11:30:00', '13:00:00', 'event/no_picture.png', 'harus dikerjakann', 'medium', 'semangatttt', 'ToDo'),
(46, 'vito', 'Fidef sambatt', '2023-06-17', '2023-06-19', '20:15:00', '20:15:00', 'event/michat.png', 'fidef lagi sambatt', 'low', '', 'Archived'),
(47, 'vito', 'Fidef sambatt', '2023-06-18', '2023-06-19', '20:15:00', '20:15:00', 'event/no_picture.png', 'fidef lagi sambatt', 'high', '', 'ToDo'),
(48, 'vito', 'Fidef sambatt', '2023-06-19', '2023-06-19', '20:15:00', '20:15:00', 'event/no_picture.png', 'fidef lagi sambatt', 'high', '', 'ToDo'),
(49, 'vito', 'abang sambattt', '2023-06-17', '2023-06-17', '20:20:00', '20:20:00', 'event/no_picture.png', 'fidef bacot', 'low', '', 'ToDo'),
(50, 'vito', 'pirlo makan ', '2023-06-13', '2023-06-17', '20:21:00', '20:21:00', 'event/no_picture.png', 'pirloo ', 'medium', '', 'ToDo'),
(51, 'vito', 'pirlo makan ', '2023-06-14', '2023-06-17', '20:21:00', '20:21:00', 'event/no_picture.png', 'pirloo ', 'medium', '', 'ToDo'),
(52, 'vito', 'pirlo makan ', '2023-06-15', '2023-06-17', '20:21:00', '20:21:00', 'event/no_picture.png', 'pirloo ', 'medium', '', 'ToDo'),
(53, 'vito', 'pirlo makan ', '2023-06-16', '2023-06-17', '20:21:00', '20:21:00', 'event/no_picture.png', 'pirloo ', 'medium', '', 'Archived'),
(54, 'vito', 'pirlo makan ', '2023-06-17', '2023-06-17', '20:21:00', '20:21:00', 'event/no_picture.png', 'pirloo ', 'medium', '', 'ToDo'),
(55, 'vito', 'farrel ngoding', '2023-06-15', '2023-06-15', '21:45:00', '21:45:00', 'event/no_picture.png', 'ni lagi ngoding', 'low', 'ngoding boss', 'ToDo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(257) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gambar_profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `tanggal_lahir`, `gambar_profile`) VALUES
('evan', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'stefaron budhi', '2023-06-08', 'user/michat.png'),
('marcell', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'Nicholas Marcell', '2022-08-09', 'user/guest.png'),
('vincent', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'Vincent Ronald', '2022-12-21', 'user/guest.png'),
('vito', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'Vitokk', '2003-09-29', 'user/sova-dp.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
