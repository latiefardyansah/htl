-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Mar 2022 pada 16.40
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhotelku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fhotel`
--

CREATE TABLE `tb_fhotel` (
  `fh_id` int(11) NOT NULL,
  `fh_fasilitas` varchar(35) NOT NULL,
  `fh_keterangan` varchar(65) NOT NULL,
  `fh_image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_fhotel`
--

INSERT INTO `tb_fhotel` (`fh_id`, `fh_fasilitas`, `fh_keterangan`, `fh_image`) VALUES
(1, 'Swimming Pool', 'Kolam renang 2.5m', NULL),
(2, 'golf field', 'lapangan golf di tengah danau', NULL),
(5, 'bar', 'tempat minum', NULL),
(7, 'lapangan basket', 'tempat bermain basket', NULL),
(8, 'ruang bermain anak', 'anak disediakan tempat bermain', NULL),
(12, 'sss', 'sss', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fkamar`
--

CREATE TABLE `tb_fkamar` (
  `fk_id` int(11) NOT NULL,
  `fk_tipe` int(11) NOT NULL,
  `fk_jumlah` int(11) NOT NULL,
  `fk_fasilitas` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_fkamar`
--

INSERT INTO `tb_fkamar` (`fk_id`, `fk_tipe`, `fk_jumlah`, `fk_fasilitas`) VALUES
(8, 2, 1, 'Balkon pemandangan kolam renang'),
(9, 1, 1, 'Balkon'),
(10, 2, 2, 'Kamar Mandi '),
(11, 1, 2, 'Kamar Mandi'),
(13, 1, 7, 'kas'),
(15, 6, 6, 'ju'),
(16, 1, 2, 'Tv 38 Inch'),
(17, 1, 2, 'Tv 38 Inch'),
(18, 1, 2, 'Tv 40 Inch'),
(19, 6, 1, 'kamar mandi'),
(20, 2, 4, 'wc'),
(21, 7, 2, 'single bed'),
(22, 7, 1, 'AC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jkamar`
--

CREATE TABLE `tb_jkamar` (
  `jk_id` int(11) NOT NULL,
  `jk_tipe` varchar(35) NOT NULL,
  `jk_jumlah` int(11) NOT NULL,
  `jk_tersedia` int(11) DEFAULT NULL,
  `jk_terpakai` int(11) DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jkamar`
--

INSERT INTO `tb_jkamar` (`jk_id`, `jk_tipe`, `jk_jumlah`, `jk_tersedia`, `jk_terpakai`, `image`) VALUES
(1, 'Superior', 15, NULL, NULL, 'aku.png'),
(2, 'Deluxe', 20, NULL, NULL, 'akuaja.png.jpg'),
(6, 'Large', 30, NULL, NULL, ''),
(7, 'mini', 30, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_reservasi`
--

CREATE TABLE `tb_reservasi` (
  `res_id` int(11) NOT NULL,
  `res_cekin` date NOT NULL,
  `res_cekout` date NOT NULL,
  `res_namapesan` varchar(35) NOT NULL,
  `res_email` varchar(35) NOT NULL,
  `res_nohp` int(11) NOT NULL,
  `res_namatamu` varchar(35) NOT NULL,
  `res_tipe` int(11) NOT NULL,
  `res_jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_reservasi`
--

INSERT INTO `tb_reservasi` (`res_id`, `res_cekin`, `res_cekout`, `res_namapesan`, `res_email`, `res_nohp`, `res_namatamu`, `res_tipe`, `res_jumlah`) VALUES
(3, '2022-02-01', '2022-02-03', 'indah', 'indahggs@gmail.com', 92523623, 'jejee', 6, 1),
(4, '2022-01-12', '2022-01-13', 'akang', 'akang@gmail.com', 3266326, 'ggees', 1, 2),
(6, '2022-02-01', '2022-02-03', 'bagus wibowo', 'baguswibowo365@gmail.com', 2154135, 'bagus juga', 2, 1),
(7, '2022-01-12', '2022-01-15', 'bagas', 'jga@gmail.com', 96236236, 'kkl', 1, 3),
(8, '2022-01-29', '2022-02-01', 'rafi', 'satrio.baguswbw@gmail.com', 462642, 'nata', 2, 2),
(9, '2022-02-01', '2022-02-02', 'Revana', 'revana@gmail.com', 81523953, 'revana ', 2, 2),
(11, '2022-02-04', '2022-02-06', 'Erdogan', 'turkies@gmail.com', 8124324, 'Erdogan', 1, 1),
(12, '2022-02-02', '2022-02-05', 'Al Biden', 'bidenus01@gmail.com', 823521332, 'Biden', 1, 1),
(13, '2022-02-08', '2022-02-09', 'Mahfud MD', 'mahfudMD002@gmail.com', 82312351, 'Mahfud', 2, 1),
(14, '2022-02-02', '2022-02-07', 'Benjamin', 'benjamin43tahu@gmail.com', 823512632, 'Benjamin', 6, 1),
(15, '2022-02-09', '2022-02-11', 'Vladimir', 'vladimir002@gmail.com', 81268393, 'Al Putin', 1, 2),
(16, '2022-02-06', '2022-02-08', 'bagus ', 'aduhlaliaku123@gmail.com', 86543223, 'ggessa', 6, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tamu`
--

CREATE TABLE `tb_tamu` (
  `id_tamu` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_hp` varchar(13) NOT NULL,
  `jenis_kelamin` enum('Laki Laki','Perempuan','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tamu`
--

INSERT INTO `tb_tamu` (`id_tamu`, `nama`, `alamat`, `nomor_hp`, `jenis_kelamin`) VALUES
(1, 'Latief Ardyansah', 'Imogiri,Bantul,Yogyakarta', '083842029100', 'Laki Laki'),
(2, 'Faizd Muqolafi', 'Imogiri,Bantul,Yogyakarta', '081355695382', 'Laki Laki'),
(3, 'Ika Lestari', 'Imogiri,Bantul,Yogyakarta', '085872590500', 'Perempuan'),
(4, 'Putri Malinda', 'Kajor,Bantul,Yogyakarta', '085743276541', 'Perempuan'),
(5, 'ardy', 'imogiri', '0876363787889', ''),
(6, 'ardy', 'imogiri', '0876363787889', ''),
(7, 'febri', 'madukismo', '086747728392', ''),
(8, 'aku', 'bantul', '0028287272', ''),
(9, 'coba', 'bantul', '009299393', ''),
(10, 'zain', 'tritis', '0989383873892', ''),
(11, 'adi', 'imogiri', '09817282291', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(20) NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(32) CHARACTER SET utf8mb4 NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Latief Ardyansah', 'admin', 'adminku', 1),
(2, 'Ardyansah', 'manager', 'managerku', 2),
(3, 'akuuu', 'resepsionis', 'resepsionisku', 3),
(4, 'ardy', 'ardykuaa', 'a3023e945e739e577416d1ef2c06745b', 12),
(5, 'ardy', 'ardykuaa', 'd41d8cd98f00b204e9800998ecf8427e', 12),
(6, 'febri', 'brekk', '0640ea3e45698351b6be184166eee6d5', 12),
(7, 'aku', 'aku11', 'e2c49eaccaf33e163e9594b183f22e5a', 12),
(8, 'coba', 'aja', 'ajaku', 4),
(9, 'zain', 'zain', 'zainku', 4),
(10, 'adi', 'adi', 'adiku', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_fhotel`
--
ALTER TABLE `tb_fhotel`
  ADD PRIMARY KEY (`fh_id`);

--
-- Indeks untuk tabel `tb_fkamar`
--
ALTER TABLE `tb_fkamar`
  ADD PRIMARY KEY (`fk_id`),
  ADD KEY `tipe_fk` (`fk_tipe`);

--
-- Indeks untuk tabel `tb_jkamar`
--
ALTER TABLE `tb_jkamar`
  ADD PRIMARY KEY (`jk_id`);

--
-- Indeks untuk tabel `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `tipekamarreservasi` (`res_tipe`);

--
-- Indeks untuk tabel `tb_tamu`
--
ALTER TABLE `tb_tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_fhotel`
--
ALTER TABLE `tb_fhotel`
  MODIFY `fh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_fkamar`
--
ALTER TABLE `tb_fkamar`
  MODIFY `fk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_jkamar`
--
ALTER TABLE `tb_jkamar`
  MODIFY `jk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_tamu`
--
ALTER TABLE `tb_tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_fkamar`
--
ALTER TABLE `tb_fkamar`
  ADD CONSTRAINT `tipe_fk` FOREIGN KEY (`fk_tipe`) REFERENCES `tb_jkamar` (`jk_id`);

--
-- Ketidakleluasaan untuk tabel `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  ADD CONSTRAINT `tipekamarreservasi` FOREIGN KEY (`res_tipe`) REFERENCES `tb_jkamar` (`jk_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
