-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2021 pada 15.02
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id_diagnosa` varchar(10) NOT NULL,
  `id_hp` varchar(5) NOT NULL,
  `id_gejala` varchar(10) NOT NULL,
  `cf_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(10) NOT NULL,
  `gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `gejala`) VALUES
('G01', 'Miselium jamur tiram terlihat membusuk'),
('G02', 'Jamur tiram terlihat keriput'),
('G03', 'Batang jamur tiram terlihat berlubang'),
('G04', 'Jamur tiram hanya tumbuh kecil'),
('G05', 'Pertumbuhan jamur tiram lambat'),
('G06', 'Jamur tiram tidak tumbuh'),
('G07', 'Terlihat jaring pada baglog'),
('G08', 'Plastik baglog terlihat berlubang'),
('G09', 'Baglog/media jamur tiram rusak'),
('G10', 'Sisa gigitan pada jamur tiram'),
('G11', 'Bau jamur tiram menyengat'),
('G12', 'Pada media baglog terdapat noda warna hitam '),
('G13', 'Pada media baglog terdapat bintik-bintik noda hijau'),
('G14', 'Pada permukaan baglog terdapat tepung warna orange'),
('G15', 'Pada miselium terdapat warna coklat atau merah tua'),
('G16', 'Terdapat bintik kuning coklat pada jamur tiram'),
('G17', 'Jamur tiram bekas luka terlihat cekung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` varchar(5) DEFAULT NULL,
  `hp` text DEFAULT NULL,
  `gejala` text DEFAULT NULL,
  `id_hp` varchar(11) DEFAULT NULL,
  `cf_hasil` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `tanggal`, `id_user`, `hp`, `gejala`, `id_hp`, `cf_hasil`) VALUES
(327, '2021-01-22', 'A06', 'a:6:{s:3:\"P03\";s:6:\"0.6400\";s:3:\"P02\";s:6:\"0.5920\";s:3:\"P04\";s:6:\"0.3200\";s:3:\"P06\";s:6:\"0.3200\";s:3:\"P10\";s:6:\"0.3200\";s:3:\"P07\";s:6:\"0.2400\";}', 'a:3:{i:0;s:3:\"G06\";i:1;s:3:\"G07\";i:2;s:3:\"G08\";}', 'P03', 0.64);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hp`
--

CREATE TABLE `hp` (
  `id_hp` varchar(5) NOT NULL,
  `nama_hp` varchar(50) NOT NULL,
  `jenis` enum('Hama','Penyakit') NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hp`
--

INSERT INTO `hp` (`id_hp`, `nama_hp`, `jenis`, `gambar`, `keterangan`) VALUES
('P01', 'Serangga (Lalat atau nyamuk)', 'Hama', 'P01.jpg', 'Jenis serangga yang sering mengganggu pertumbuhan jamur adalah lalat dan nyamuk. Keberadaan serangga-serangga ini akan memakan miselium dan buah jamur sehingga hasil panen jamur kurang maksimal.'),
('P02', 'Laba-laba', 'Hama', 'P2.jpg', '\r\nLaba-laba dapat memakan miselium dan tubuh buah jamur tiram. Selain itu, laba-laba juga dapat menyebarkan spora jamur pengganggu. Jika terdapat sarang laba-laba (biasanya terdapat di sela-sela baglog) maka harus segera dimusnahkan.'),
('P03', 'Tikus', 'Hama', 'P6.jpg', 'Tikus merupakan jenis hama yang dapat merusak segala  jenis tanaman apapun, terutamanya jamur tiram. Tikus dapat merusak baglog sehingga benih yang ada di dalamnya tidak tumbuh dan bahkan memakan benih atau jamur yang sudah tumbuh sehingga gagal panen.'),
('P04', 'Gurem', 'Hama', 'P7.jpg', 'Gurem atau sejenis binatang kecil berwarna coklat yang dapat terbang yang biasaya menyarang baglog atau media dari jamur tiram. saat tersarang hama ini biasanya media tanam membusuk dan rusak sehingga jamur tiram tidak tumbuh maksimal.'),
('P05', 'Pseudomonas Tolasii', 'Penyakit', 'P9.jpg', 'bakteri Pseudomonas tolaasii dapat bergerak melalui lapisan air menggunakan filamen. Jika ada tetesan air atau lapisan air di tudung jamur, nutrisi melarikan diri dari jaringan jamur ke dalam air, yang memberikan bakteri kesempatan untuk bereproduksi di daerah itu. Jumlah bakteri berlipat ganda dalam waktu kurang dari satu jam. Gejala pertama dari bentuk penyakit ini adalah bintik kuning-coklat.'),
('P06', 'Mucor spp', 'Penyakit', 'P10.jpg', 'Kontaminasi Mucor ditandai dengan timbulnya noda hitam pada permukaan media baglog. Kontaminasi ini menyebabkan adanya persaingan pertumbuhan Mucor dengan miselium jamur tiram. Pencegahan dapat dilakukan dengan mengurangi jumlah susunan baglog jamur dan mengatur /menurunkan suhu ruangan dengan membuka dan mengatur sirkulasi udara.'),
('P07', 'Trichoderma spp   (Buto ijo)', 'Penyakit', 'P11.jpg', 'Spora dari jamur ini secara luas tersebar di lapisan luar media dan bahan organik di berbagai lingkungan. Mereka dapat dengan mudah dibawa oleh angin, serangga atau tungau, manusia pada peralatan yang digunakan untuk budidaya jamur. Tikus yang memakan miselium pada permukaan serbuk juga dapat membawa penyakit ini.\r\n'),
('P08', '   Neurospora spp', 'Penyakit', 'P12.jpg', 'Gejala serangan: terdapat tepung berwarna orange pada permukaan atau penyumbat baglog, yang dapat mengakibatkan pertumbuhan miselium terhambat.'),
('P09', 'Penicillium spp (Buto Coklat)', 'Penyakit', 'G13.jpg', 'Kontaminasi Penicillium ditandai dengan tumbuhnya miselium berwarna coklat /merah tua. Pencegahan dapat dilakukan dengan cara menjaga kebersihan ruang inkubasi. Sedangkan untuk mengatasi agar serangan Penicillium tidak menyebar adalah dengan membuang media baglog yang terkontaminasi.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kondisi`
--

CREATE TABLE `kondisi` (
  `id_kondisi` int(11) NOT NULL,
  `nama_kondisi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kondisi`
--

INSERT INTO `kondisi` (`id_kondisi`, `nama_kondisi`) VALUES
(1, 'Sangat Yakin'),
(2, 'Yakin'),
(3, 'Cukup Yakin'),
(4, 'Sedikit Yakin'),
(5, 'Tidak Tahu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pencegahan`
--

CREATE TABLE `pencegahan` (
  `id_pencegahan` varchar(10) NOT NULL,
  `id_hp` varchar(5) NOT NULL,
  `pencegahan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pencegahan`
--

INSERT INTO `pencegahan` (`id_pencegahan`, `id_hp`, `pencegahan`) VALUES
('G01', 'P01', '- Memasang plastik bening di bagian pintu agar serangga menghindar\r\n- Memasang perangkap serangga di dalam kumbung'),
('G02', 'P02', '- mengatur atau menurunkan suhu ruangan\r\n-  membuka dan mengatur sirkulasi udara.'),
('G03', 'P03', 'Memasang perangkap tikus pada sela-sela sarang untuk menangkapnya'),
('G04', 'P04', 'Sterilkan ruangan kumbung sebelum budidaya'),
('G05', 'P05', '- . Tetesan air setelah penyiraman setelah 2-3 jam\r\n- sterilisasi atau desinfektasi tenaga kerja serta alatnya\r\n- ventilasi dan sirkuasi udara harus bekerja baik'),
('G06', 'P06', '- mengatur atau menurunkan suhu ruangan\r\n-  membuka dan mengatur sirkulasi udara.'),
('G07', 'P07', 'sterilisasi atau desinfektasi tenaga kerja serta alatnya'),
('G08', 'P08', '- sterilisasi media baglog dengan sempurna\r\n- Mengurangi jumlah susunan baglog jamur '),
('G09', 'P09', '- Menjaga kelancaran sirkulasi ruang inkubasi\r\n- Kebersihan ruang inokulasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengetahuan`
--

CREATE TABLE `pengetahuan` (
  `id_pengetahuan` varchar(10) NOT NULL,
  `id_hp` varchar(5) NOT NULL,
  `id_gejala` varchar(10) NOT NULL,
  `cf_pakar` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengetahuan`
--

INSERT INTO `pengetahuan` (`id_pengetahuan`, `id_hp`, `id_gejala`, `cf_pakar`) VALUES
('G01', 'P01', 'G01', 0.8),
('G02', 'P01', 'G03', 0.6),
('G03', 'P01', 'G02', 1),
('G04', 'P01', 'G04', 0.8),
('G05', 'P01', 'G05', 0.6),
('G06', 'P06', 'G05', 0.4),
('G07', 'P06', 'G06', 0.8),
('G08', 'P06', 'G12', 1),
('G09', 'P07', 'G01', 0.4),
('G10', 'P07', 'G02', 0.4),
('G11', 'P07', 'G13', 1),
('G12', 'P08', 'G01', 0.6),
('G13', 'P08', 'G05', 0.8),
('G14', 'P08', 'G14', 1),
('G15', 'P02', 'G03', 0.8),
('G16', 'P02', 'G04', 0.6),
('G17', 'P02', 'G06', 0.8),
('G18', 'P02', 'G07', 1),
('G28', 'P03', 'G06', 0.8),
('G29', 'P03', 'G09', 0.6),
('G30', 'P03', 'G10', 1),
('G31', 'P04', 'G06', 0.6),
('G32', 'P04', 'G08', 0.8),
('G37', 'P05', 'G11', 0.8),
('G38', 'P05', 'G16', 1),
('G39', 'P05', 'G17', 0.8),
('G40', 'P04', 'G15', 0.6),
('G41', 'P09', 'G01', 0.8),
('G42', 'P09', 'G05', 0.6),
('G43', 'P09', 'G15', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengobatan`
--

CREATE TABLE `pengobatan` (
  `id_pengobatan` varchar(10) NOT NULL,
  `id_hp` varchar(5) NOT NULL,
  `pengobatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengobatan`
--

INSERT INTO `pengobatan` (`id_pengobatan`, `id_hp`, `pengobatan`) VALUES
('G01', 'P01', 'periksa kondisi kumbung ada lubang-lubang yang dapat dimasuki lalat '),
('G02', 'P06', '- Mengurangi jumlah susunan baglog jamur \r\n- Baglog yang  terkontaminasi  segera dikeluarkan dan dibakar'),
('G03', 'P07', '- Membuang  baglog yang terkontaminasi \r\n- Membakar baglog yang terkontaminasi'),
('G04', 'P08', '- menggunakan fungisida, insektisida dan bahan kimia lainnya\r\n- Mengurangi jumlah susunan baglog jamur'),
('G05', 'P02', 'Taburkan serbuk kapur pada bagian dinding dan lantai'),
('G09', 'P03', 'nyemprotan dengan obat kimia seperti x-mos,radoc,dan sebagainya'),
('G10', 'P04', 'Baglog yang  terkontaminasi  segera dikeluarkan dan dibakar'),
('G12', 'P05', '- Penyemprotan rutin dengan air sodium hipoklorit yang mengandung klorin aktif AC 5,7 mg/l\r\n- Penyemprotan air keran(125 ml 10% klor untuk 100 l air per 100 m²) sebelum panen pertama'),
('G13', 'P09', '- Membuang baglog yang terkontaminasi - Membakar baglog yang terkontaminasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(50) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `alamat`, `level`) VALUES
('A06', 'Administrator', 'admin', '$2y$10$s7AISiD5L7evCOEcqLqOrOAg2NgHZX6QxzPX4Npv6m/Gl6nUYW6oW', 'Padang', 'admin'),
('A07', 'User', 'user', '$2y$10$s7AISiD5L7evCOEcqLqOrOAg2NgHZX6QxzPX4Npv6m/Gl6nUYW6oW', 'Padang', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `hp`
--
ALTER TABLE `hp`
  ADD PRIMARY KEY (`id_hp`);

--
-- Indeks untuk tabel `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id_kondisi`);

--
-- Indeks untuk tabel `pencegahan`
--
ALTER TABLE `pencegahan`
  ADD PRIMARY KEY (`id_pencegahan`);

--
-- Indeks untuk tabel `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD PRIMARY KEY (`id_pengetahuan`);

--
-- Indeks untuk tabel `pengobatan`
--
ALTER TABLE `pengobatan`
  ADD PRIMARY KEY (`id_pengobatan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;

--
-- AUTO_INCREMENT untuk tabel `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id_kondisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
