-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2022 pada 15.08
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `perpustakaan`
--

CREATE TABLE `perpustakaan` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `halaman` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perpustakaan`
--

INSERT INTO `perpustakaan` (`id`, `judul`, `pengarang`, `penerbit`, `kategori`, `halaman`, `gambar`) VALUES
(1, 'Bulan Di Langit Carolina', 'Nora Robert', 'PT. Gramedia', 'Fiksi', '624', '62a05faa504f1blncarolina.jpg'),
(2, 'Habibie & Ainun', 'B.J Habibie', 'Denendra', 'Biografi', '321', 'habibie.JPG'),
(3, 'Ilmu Negara', 'NI\'Matul Huda', 'Pustaka Utama', 'Non Fiksi', '279', 'ilmu.JPG'),
(4, 'Rumah Tanpa Jendela', 'Asma Nadia', 'PT. Gramedia', 'Fiksi', '221', 'rmh.JPG'),
(5, 'Si Putih', 'Tere Liye', 'PT. Gramedia', 'Fiksi', '376', 'siputih.JPG'),
(6, 'Pulang Pergi', 'Tere Liye ', 'Sabak Nusantara', 'Fiksi', '417', 'pulang.JPG'),
(7, 'Catatan Seorang Demostran', 'Soe Hok Gie', 'LP3ES', 'Non Fiksi', '385', 'cttn.JPG'),
(8, 'Laskar Pelangi', 'Andrea Hirata', 'Benteng Pustaka', 'Non Fiksi', '529', 'laskar.JPG'),
(9, 'Manusia Indonesia', 'Moentar Lubis', 'PT. Gramedia', 'Non Fiksi', '140', 'manusia.JPG'),
(10, 'Dilan', 'Pidibaiq', 'Pastel Books', 'Fiksi', '348', 'dilan.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$xnAit7Su9gaUlWZ8wJP36e4POQ6r3bMzrMtW7Tbs1hPkk9IOEsSTu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `perpustakaan`
--
ALTER TABLE `perpustakaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `perpustakaan`
--
ALTER TABLE `perpustakaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
